#!/usr/bin/env python3
"""
build_squeakland_static.py
---------------------------------
Create a static mirror of squeakland.org suitable for GitHub Pages,
favoring the live site and falling back to the Internet Archive.
It also prioritizes downloading any .pr (Etoys Project) files it finds,
and uses the IA CDX API to locate additional .pr files if the live site
is missing them.

Usage (Python 3.9+ recommended):

  python3 build_squeakland_static.py \
      --out squeakland-ghpages \
      --max-pages 2000 \
      --depth 2

When done, the script will also produce 'squeakland-ghpages.zip'.
"""

import argparse
import os
import re
import sys
import time
import json
import shutil
import hashlib
from urllib.parse import urlparse, urljoin, urlunparse, urldefrag
from pathlib import Path

import requests
from bs4 import BeautifulSoup

SESSION = requests.Session()
SESSION.headers.update({
    "User-Agent": "SqueaklandStaticBuilder/1.0 (+https://github.com/)"
})

LIVE_ROOT = "http://www.squeakland.org/"
SITEMAP_URL = "http://www.squeakland.org/sitemap.jsp"
IA_CDX = "https://web.archive.org/cdx/search/cdx"

ALLOWED_HOSTS = {"www.squeakland.org", "squeakland.org"}
ASSET_EXT = {".css", ".js", ".png", ".jpg", ".jpeg", ".gif", ".svg", ".ico", ".webp", ".ttf", ".woff", ".woff2", ".eot"}
HTML_EXT = {".html", ".htm", ".jsp", ""}
PR_EXT = {".pr", ".prj", ".pr1", ".pr2"}

def safe_path_from_url(base_out: Path, url: str) -> Path:
    """
    Map a URL to a local file path within base_out.
    """
    u = urlparse(url)
    path = u.path
    if not path or path.endswith('/'):
        path = (path if path else "/") + "index.html"
    # Add .html if no extension and not a known asset type
    name = os.path.basename(path)
    root, ext = os.path.splitext(name)
    if ext == "" and not any(path.endswith(e) for e in ASSET_EXT | PR_EXT):
        path = path.rstrip("/") + ("/index.html" if path.endswith("/") else ".html")
    # Normalize
    local = base_out.joinpath(*[p for p in path.split("/") if p])
    return local

def ensure_parent(p: Path):
    p.parent.mkdir(parents=True, exist_ok=True)

def write_bytes(path: Path, data: bytes):
    ensure_parent(path)
    with open(path, "wb") as f:
        f.write(data)

def write_text(path: Path, text: str, encoding="utf-8"):
    ensure_parent(path)
    with open(path, "w", encoding=encoding) as f:
        f.write(text)

def canonicalize(url: str) -> str:
    u = urlparse(url)
    # Strip fragments, normalize scheme to http for live root, keep https for IA links
    u = u._replace(fragment="")
    return urlunparse(u)

def is_internal(url: str) -> bool:
    netloc = urlparse(url).netloc.lower()
    if netloc == "":
        return True
    return netloc in ALLOWED_HOSTS

def is_probably_html(url: str) -> bool:
    path = urlparse(url).path
    ext = os.path.splitext(path)[1].lower()
    return ext in HTML_EXT

def is_asset(url: str) -> bool:
    path = urlparse(url).path
    ext = os.path.splitext(path)[1].lower()
    return ext in ASSET_EXT

def is_pr_file(url: str) -> bool:
    path = urlparse(url).path
    ext = os.path.splitext(path)[1].lower()
    return ext in PR_EXT or path.lower().endswith(".pr")

def fetch(url: str, timeout=25) -> requests.Response:
    resp = SESSION.get(url, timeout=timeout, allow_redirects=True)
    resp.raise_for_status()
    return resp

def ia_url(original: str, timestamp: str = "20180101") -> str:
    # Use "id_" to get original content type
    return f"https://web.archive.org/web/{timestamp}id_/{original}"

def try_live_then_wayback(url: str, ia_from="2005", ia_to="2020") -> bytes:
    """
    Try live URL first. If it fails (or 404/5xx), fallback to Wayback using latest capture.
    """
    # Try live
    try:
        r = fetch(url)
        return r.content
    except Exception:
        pass

    # Wayback fallback: find latest OK capture
    params = {
        "url": url,
        "output": "json",
        "filter": "statuscode:200",
        "from": ia_from,
        "to": ia_to,
        "limit": 1,
        "collapse": "timestamp:8"
    }
    try:
        r = SESSION.get(IA_CDX, params=params, timeout=25)
        r.raise_for_status()
        rows = r.json()
        if len(rows) > 1:
            # Rows: header + first capture
            _, first = rows[0], rows[1]
            ts = first[1]
            wa = ia_url(url, ts)
            r2 = fetch(wa)
            return r2.content
    except Exception:
        pass

    raise RuntimeError(f"No live or archived copy found for {url}")

def extract_links(base_url: str, html: str) -> set[str]:
    soup = BeautifulSoup(html, "html.parser")
    links = set()
    # Hrefs
    for a in soup.find_all(["a", "link"]):
        href = a.get("href")
        if href:
            href = urljoin(base_url, href)
            links.add(canonicalize(href))
    # Assets from script/img
    for tag, attr in [("script", "src"), ("img", "src") , ("source","src"), ("iframe","src")]:
        for t in soup.find_all(tag):
            src = t.get(attr)
            if src:
                src = urljoin(base_url, src)
                links.add(canonicalize(src))
    return links

def rewrite_links_to_relative(base_url: str, html: str, out_path: Path, site_root: Path) -> str:
    soup = BeautifulSoup(html, "html.parser")
    def to_rel(u: str) -> str:
        try:
            absolute = urljoin(base_url, u)
            target = safe_path_from_url(site_root, absolute)
            rel = os.path.relpath(target, out_path.parent)
            # Convert Windows backslashes if any
            return rel.replace("\\", "/")
        except Exception:
            return u

    # Rewrite href and src
    for tag in soup.find_all(True):
        if tag.has_attr("href"):
            tag["href"] = to_rel(tag["href"])
        if tag.has_attr("src"):
            tag["src"] = to_rel(tag["src"])
    return str(soup)

def gather_seed_urls() -> set[str]:
    seeds = set()
    # Start with home
    seeds.add(LIVE_ROOT)
    # Try sitemap.jsp (HTML page with deep links)
    try:
        content = try_live_then_wayback(SITEMAP_URL)
        html = content.decode("utf-8", errors="ignore")
        seeds |= extract_links(SITEMAP_URL, html)
    except Exception:
        pass
    # Always include known sections
    seeds.add(urljoin(LIVE_ROOT, "resources/"))
    seeds.add(urljoin(LIVE_ROOT, "resources/articles/"))
    seeds.add(urljoin(LIVE_ROOT, "download/"))
    return {u for u in seeds if is_internal(u)}

def find_wayback_pr_urls(limit=500, ia_from="2000", ia_to="2020") -> list[str]:
    # Use IA CDX to list .pr under squeakland.org
    query = {
        "url": "*.squeakland.org/*",
        "output": "json",
        "from": ia_from,
        "to": ia_to,
        "filter": "statuscode:200",
        "limit": limit,
        "matchType": "domain"
    }
    r = SESSION.get(IA_CDX, params=query, timeout=30)
    r.raise_for_status()
    rows = r.json()
    urls = set()
    for i, row in enumerate(rows[1:], start=1):
        original = row[2]
        if original.lower().endswith(".pr"):
            urls.add(original)
    return sorted(urls)

def crawl(out_dir: Path, max_pages: int = 2000, depth_limit: int = 2, include_pr_discovery: bool = True):
    visited = set()
    queue = []
    pr_links = set()

    seeds = gather_seed_urls()
    for s in seeds:
        queue.append((s, 0))

    site_root = out_dir

    while queue and len(visited) < max_pages:
        url, depth = queue.pop(0)
        if url in visited:
            continue
        visited.add(url)
        is_pr = is_pr_file(url)
        try:
            blob = try_live_then_wayback(url)
        except Exception as e:
            # Skip if unavailable
            continue

        local_path = safe_path_from_url(site_root, url)
        ensure_parent(local_path)
        if is_probably_html(url):
            html = blob.decode("utf-8", errors="ignore")
            # Find links
            links = extract_links(url, html)
            # Track .pr files we see
            for L in links:
                if is_pr_file(L):
                    pr_links.add(canonicalize(L))
            # Rewrite to relative
            rewritten = rewrite_links_to_relative(url, html, local_path, site_root)
            write_text(local_path, rewritten)
            # Enqueue internal links
            if depth < depth_limit:
                for L in links:
                    if is_internal(L) or is_pr_file(L):
                        queue.append((L, depth+1))
        else:
            write_bytes(local_path, blob)

    # Ensure PR files are saved
    # First, from links found during crawl:
    for pr_url in sorted(pr_links):
        try:
            blob = try_live_then_wayback(pr_url)
            local_path = safe_path_from_url(site_root, pr_url)
            write_bytes(local_path, blob)
        except Exception:
            pass

    # Second, expand via IA CDX API to discover more .pr files (optional)
    if include_pr_discovery:
        try:
            extra_pr_urls = find_wayback_pr_urls(limit=2000)
            for pr in extra_pr_urls:
                if pr not in visited:
                    try:
                        blob = try_live_then_wayback(pr)
                        local_path = safe_path_from_url(site_root, pr)
                        write_bytes(local_path, blob)
                    except Exception:
                        pass
        except Exception:
            pass

def write_support_files(out_dir: Path):
    # .nojekyll prevents GitHub Pages from processing files/folders that start with underscore
    (out_dir / ".nojekyll").write_text("")
    # 404
    (out_dir / "404.html").write_text("""<!doctype html>
<html><head><meta charset="utf-8"><title>Not Found — Squeakland (archival)</title>
<style>body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif;padding:3rem;max-width:52rem;margin:auto;line-height:1.5}</style>
</head><body>
<h1>404 Not Found</h1>
<p>This is a static archival edition of <strong>squeakland.org</strong>. Some dynamic links may no longer exist. Try the <a href="/">home page</a> or the <a href="/resources/">resources</a> section.</p>
<p><small>Built with Squeakland Static Builder.</small></p>
</body></html>""", encoding="utf-8")

def zip_dir(src: Path, zip_path: Path):
    with zipfile.ZipFile(zip_path, "w", zipfile.ZIP_DEFLATED) as z:
        for root, _, files in os.walk(src):
            for f in files:
                full = Path(root) / f
                rel = full.relative_to(src)
                z.write(full, rel.as_posix())

def main():
    ap = argparse.ArgumentParser()
    ap.add_argument("--out", default="squeakland-ghpages", help="Output folder for static site")
    ap.add_argument("--max-pages", type=int, default=2000, help="Max HTML/asset pages to crawl (not counting .pr discovery)")
    ap.add_argument("--depth", type=int, default=2, help="Max crawl depth from seeds")
    ap.add_argument("--no-pr-discovery", action="store_true", help="Disable Wayback .pr expansion")
    args = ap.parse_args()

    out_dir = Path(args.out).resolve()
    out_dir.mkdir(parents=True, exist_ok=True)

    print(">> Crawling Squeakland…")
    crawl(out_dir, max_pages=args.max_pages, depth_limit=args.depth, include_pr_discovery=not args.no_pr_discovery)

    print(">> Writing support files…")
    write_support_files(out_dir)

    zip_path = out_dir.with_suffix(".zip")
    print(f">> Zipping to {zip_path.name} …")
    zip_dir(out_dir, zip_path)

    print("Done.")
    print(f"- Static site folder: {out_dir}")
    print(f"- GitHub Pages ZIP: {zip_path}")

if __name__ == "__main__":
    main()
