# Squeakland → GitHub Pages (Static Builder)

This package builds a **static, GitHub Pages–ready** snapshot of `squeakland.org`, preferring the live site and **falling back to the Internet Archive** when needed. It **prioritizes downloading `.pr` Etoys project files** found on the site and via the Wayback Machine index.

## Quick start

1. **Install Python 3.9+** and dependencies:
   ```bash
   python3 -m venv .venv && source .venv/bin/activate
   pip install -r requirements.txt
   ```

2. **Run the builder** (creates a folder and a ZIP):
   ```bash
   python3 build_squeakland_static.py --out squeakland-ghpages --max-pages 2000 --depth 2
   ```

   - The script uses:
     - Live sitemap: `http://www.squeakland.org/sitemap.jsp` (HTML page with deep links)
     - Live crawling within `squeakland.org` (depth-limited)
     - Wayback fallback for any missing pages
     - **IA CDX expansion to find extra `.pr` files** under the domain

3. **Publish on GitHub Pages**:
   - Create a new repo (e.g., `squeakland-ghpages`).
   - Unzip `squeakland-ghpages.zip` into the repo root.
   - Commit & push to `main`.
   - In repo settings → Pages, set **Source** to `Deploy from a branch`, and select `/ (root)`.
   - Ensure `.nojekyll` is present at the root.

## Options

- `--max-pages`: number of HTML/asset pages to crawl (not counting `.pr` discovery).
- `--depth`: crawl depth (2 is usually enough).
- `--no-pr-discovery`: skip Wayback `.pr` expansion if you only want what's linked on-site.

## Notes

- The builder rewrites internal links to **relative paths** so that everything works on GitHub Pages.
- Dynamic features (forms, server-side search) are preserved as HTML **snapshots** only.
- The folder includes a friendly `404.html` and `.nojekyll`.

## Troubleshooting

- If you see network errors, re-run; the script is idempotent.
- For extremely old pages, the script chooses the **latest 200 status** in Wayback between 2000–2020.
- You can adjust the ranges in the code (`IA_CDX`) if you need newer/older captures.
