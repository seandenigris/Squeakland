<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="./index.php" title="Squeakland Forum Index" />
<link rel="search" href="./search.php" title="Search" />
<link rel="help" href="./faq.php" title="FAQ" />
<link rel="author" href="./memberlist.php" title="Memberlist" />

<title>Squeakland :: Search</title>
<!-- link rel="stylesheet" href="templates/subSilver/subSilver.css" type="text/css" -->
<style type="text/css">
<!--
/*
  The original subSilver Theme for phpBB version 2+
  Created by subBlue design
  http://www.subBlue.com

  NOTE: These CSS definitions are stored within the main page body so that you can use the phpBB2
  theme administration centre. When you have finalised your style you could cut the final CSS code
  and place it in an external file, deleting this section to save bandwidth.
*/

/* General page style. The scroll bar colours only visible in IE5.5+ */
body {
        margin: 0 auto;
        padding: 0px;
        text-align: center;
        width: 857px;
        background-image: url( /images/background.png );
        background-repeat: repeat-x;
	background-color: #ffffff;
	scrollbar-face-color: #DEE3E7;
	scrollbar-highlight-color: #DBE9F8;
	scrollbar-shadow-color: #DEE3E7;
	scrollbar-3dlight-color: #D1D7DC;
	scrollbar-arrow-color:  #006699;
	scrollbar-track-color: #EFEFEF;
	scrollbar-darkshadow-color: #98AAB1;
}

/* General font families for common tags */
font,th,td,p { font-family: Verdana, Arial, Helvetica, sans-serif }
a:link,a:active,a:visited { color : #006699; }
a:hover		{ text-decoration: underline; color : #DD6900; }
hr	{ height: 0px; border: solid #D1D7DC 0px; border-top-width: 1px;}

/* This is the border line & background colour round the entire page */
.bodyline	{ background-color: #DBE9F8; border: 1px #98AAB1 solid; }

/* This is the outline round the main forum tables */
.forumline	{ background-color: #DBE9F8; border: 2px #006699 solid; }

/* Main table cell colours and backgrounds */
td.row1	{ background-color: #EFEFEF; }
td.row2	{ background-color: #DEE3E7; }
td.row3	{ background-color: #D1D7DC; }

/*
  This is for the table cell above the Topics, Post & Last posts on the index.php page
  By default this is the fading out gradiated silver background.
  However, you could replace this with a bitmap specific for each forum
*/
td.rowpic {
		background-color: #DBE9F8;
		background-image: url(templates/subSilver/images/cellpic2.jpg);
		background-repeat: repeat-y;
}

/* Header cells - the blue and silver gradient backgrounds */
th	{
	color: #FFA34F; font-size: 11px; font-weight : bold;
	background-color: #006699; height: 25px;
	background-image: url(templates/subSilver/images/cellpic3.gif);
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
			background-image: url(templates/subSilver/images/cellpic1.gif);
			background-color:#D1D7DC; border: #FFFFFF; border-style: solid; height: 28px;
}

/*
  Setting additional nice inner borders for the main table cells.
  The names indicate which sides the border will be on.
  Don't worry if you don't understand this, just ignore it :-)
*/
td.cat,td.catHead,td.catBottom {
	height: 29px;
	border-width: 0px 0px 0px 0px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
	font-weight: bold; border: #DBE9F8; border-style: solid; height: 28px;
}
td.row3Right,td.spaceRow {
	background-color: #D1D7DC; border: #FFFFFF; border-style: solid;
}

th.thHead,td.catHead { font-size: 12px; border-width: 1px 1px 0px 1px; }
th.thSides,td.catSides,td.spaceRow	 { border-width: 0px 1px 0px 1px; }
th.thRight,td.catRight,td.row3Right	 { border-width: 0px 1px 0px 0px; }
th.thLeft,td.catLeft	  { border-width: 0px 0px 0px 1px; }
th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
th.thTop	 { border-width: 1px 0px 0px 0px; }
th.thCornerL { border-width: 1px 0px 0px 1px; }
th.thCornerR { border-width: 1px 1px 0px 0px; }

/* The largest text used in the index page title and toptic title etc. */
.maintitle	{
	font-weight: bold; font-size: 22px; font-family: "Trebuchet MS",Verdana, Arial, Helvetica, sans-serif;
	text-decoration: none; line-height : 120%; color : #000000;
}

/* General text */
.gen { font-size : 12px; }
.genmed { font-size : 11px; }
.gensmall { font-size : 10px; }
.gen,.genmed,.gensmall { color : #000000; }
a.gen,a.genmed,a.gensmall { color: #006699; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover	{ color: #DD6900; text-decoration: underline; }

/* The register, login, search etc links at the top of the page */
.mainmenu		{ font-size : 11px; color : #000000 }
a.mainmenu		{ text-decoration: none; color : #006699;  }
a.mainmenu:hover{ text-decoration: underline; color : #DD6900; }

/* Forum category titles */
.cattitle		{ font-weight: bold; font-size: 12px ; letter-spacing: 1px; color : #006699}
a.cattitle		{ text-decoration: none; color : #006699; }
a.cattitle:hover{ text-decoration: underline; }

/* Forum title: Text and link to the forums used in: index.php */
.forumlink		{ font-weight: bold; font-size: 12px; color : #006699; }
a.forumlink 	{ text-decoration: none; color : #006699; }
a.forumlink:hover{ text-decoration: underline; color : #DD6900; }

/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
.nav			{ font-weight: bold; font-size: 11px; color : #000000;}
a.nav			{ text-decoration: none; color : #006699; }
a.nav:hover		{ text-decoration: underline; }

/* titles for the topics: could specify viewed link colour too */
.topictitle,h1,h2	{ font-weight: bold; font-size: 11px; color : #000000; }
a.topictitle:link   { text-decoration: none; color : #006699; }
a.topictitle:visited { text-decoration: none; color : #5493B4; }
a.topictitle:hover	{ text-decoration: underline; color : #DD6900; }

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name			{ font-size : 11px; color : #000000;}

/* Location, number of posts, post date etc */
.postdetails		{ font-size : 10px; color : #000000; }

/* The content of the posts (body of text) */
.postbody { font-size : 12px; line-height: 18px}
a.postlink:link	{ text-decoration: none; color : #006699 }
a.postlink:visited { text-decoration: none; color : #5493B4; }
a.postlink:hover { text-decoration: underline; color : #DD6900}

/* Quote & Code blocks */
.code {
	font-family: Courier, 'Courier New', sans-serif; font-size: 11px; color: #006600;
	background-color: #FAFAFA; border: #D1D7DC; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
	font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #444444; line-height: 125%;
	background-color: #FAFAFA; border: #D1D7DC; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

/* Copyright and bottom info */
.copyright		{ font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #444444; letter-spacing: -1px;}
a.copyright		{ color: #444444; text-decoration: none;}
a.copyright:hover { color: #000000; text-decoration: underline;}

/* Form elements */
input,textarea, select {
	color : #000000;
	font: normal 11px Verdana, Arial, Helvetica, sans-serif;
	border-color : #000000;
}

/* The text input fields background colour */
input.post, textarea.post, select {
	background-color : #DBE9F8;
}

input { text-indent : 2px; }

/* The buttons used for bbCode styling in message post */
input.button {
	background-color : #EFEFEF;
	color : #000000;
	font-size: 11px; font-family: Verdana, Arial, Helvetica, sans-serif;
}

/* The main submit button option */
input.mainoption {
	background-color : #FAFAFA;
	font-weight : bold;
}

/* None-bold submit button */
input.liteoption {
	background-color : #FAFAFA;
	font-weight : normal;
}

/* This is the line in the posting page which shows the rollover
  help line. This is actually a text box, but if set to be the same
  colour as the background no one will know ;)
*/
.helpline { background-color: #DEE3E7; border-style: none; }

/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import url("templates/subSilver/formIE.css");
-->
</style>
</head>
<body bgcolor="#ffffff" text="#000000" link="#006699" vlink="#5493B4">

<IFRAME SRC="m2f/m2f_import_msgs.php?m2f_cron_check=1" TITLE="M2F Simple Cron check" WIDTH="1" HEIGHT="1" FRAMEBORDER="0" SCROLLING="NO">
<!-- Alternate content for non-supporting browsers -->
</IFRAME>
<a name="top"></a>

<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center">
	<tr>
		<td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td><a href="http://squeakland.org"><img src="/images/logo-small.png"" border="0" alt="Squeakland Website" vspace="1" /></a></td>
				<td align="center" width="100%" valign="middle">
				<table cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="m2f_usercp.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_subscription.gif" width="12" height="13" border="0" alt="Forum Subscriptions" hspace="3" />Forum Subscriptions</a>&nbsp; &nbsp;<a href="faq.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_faq.gif" width="12" height="13" border="0" alt="FAQ" hspace="3" />FAQ</a>&nbsp; &nbsp;<a href="search.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_search.gif" width="12" height="13" border="0" alt="Search" hspace="3" />Search</a>&nbsp; &nbsp;<a href="memberlist.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_members.gif" width="12" height="13" border="0" alt="Memberlist" hspace="3" />Memberlist</a>&nbsp; &nbsp;<a href="groupcp.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_groups.gif" width="12" height="13" border="0" alt="Usergroups" hspace="3" />Usergroups</a>&nbsp;
						&nbsp;<a href="profile.php?mode=register" class="mainmenu"><img src="templates/subSilver/images/icon_mini_register.gif" width="12" height="13" border="0" alt="Register" hspace="3" />Register</a>&nbsp;
						</span></td>
					</tr>
					<tr>
						<td height="25" align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="profile.php?mode=editprofile" class="mainmenu"><img src="templates/subSilver/images/icon_mini_profile.gif" width="12" height="13" border="0" alt="Profile" hspace="3" />Profile</a>&nbsp; &nbsp;<a href="privmsg.php?folder=inbox" class="mainmenu"><img src="templates/subSilver/images/icon_mini_message.gif" width="12" height="13" border="0" alt="Log in to check your private messages" hspace="3" />Log in to check your private messages</a>&nbsp; &nbsp;<a href="login.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_login.gif" width="12" height="13" border="0" alt="Log in" hspace="3" />Log in</a>&nbsp;</span></td>
					</tr>
				</table></td>
			</tr>
		</table>

		<br />


<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr>
	<td align="left" valign="bottom"><span class="maintitle">Search found 2633 matches</span><br /></td>
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr>
	<td align="left"><span class="nav"><a href="index.php" class="nav">Squeakland Forum Index</a></span></td>
  </tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
  <tr>
	<th width="4%" height="25" class="thCornerL" nowrap="nowrap">&nbsp;</th>
	<th class="thTop" nowrap="nowrap">&nbsp;Forum&nbsp;</th>
	<th class="thTop" nowrap="nowrap">&nbsp;Topics&nbsp;</th>
	<th class="thTop" nowrap="nowrap">&nbsp;Author&nbsp;</th>
	<th class="thTop" nowrap="nowrap">&nbsp;Replies&nbsp;</th>
	<th class="thTop" nowrap="nowrap">&nbsp;Views&nbsp;</th>
	<th class="thCornerR" nowrap="nowrap">&nbsp;Last Post&nbsp;</th>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=2" class="forumlink">Squeakland Community</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4558&amp;highlight=" class="topictitle">Squeakfest Brasil - videos</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=50">martavoelcker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">24</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 14, 2009 6:32 pm<br /><a href="profile.php?mode=viewprofile&amp;u=50">martavoelcker</a> <a href="viewtopic.php?p=10171#10171"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=7" class="forumlink">Etoys América Latina</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4557&amp;highlight=" class="topictitle">video do evento</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=50">martavoelcker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">24</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 14, 2009 6:18 pm<br /><a href="profile.php?mode=viewprofile&amp;u=50">martavoelcker</a> <a href="viewtopic.php?p=10170#10170"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4556&amp;highlight=" class="topictitle">[JIRA] Commented: (SQ-301) tracker.squeakland.org rss feeds</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">24</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 14, 2009 4:13 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10169#10169"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4555&amp;highlight=" class="topictitle">[JIRA] Commented: (SQ-176) Blog feed points to Immuexa</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">26</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 14, 2009 4:13 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10168#10168"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4554&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-301) tracker.squeakland.org rss feeds co</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">30</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 14, 2009 3:31 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10165#10165"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4553&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-300) Toolbar layout broken for old proje</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">24</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 14, 2009 11:57 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10164#10164"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4550&amp;highlight=" class="topictitle">[JIRA] Updated: (SQ-295) Toolbar layout broken under Sugar</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">37</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Wed Aug 12, 2009 6:53 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10152#10152"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=3" class="forumlink">Etoys Development</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4549&amp;highlight=" class="topictitle">popups</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=12">scott</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">27</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Wed Aug 12, 2009 6:11 pm<br /><a href="profile.php?mode=viewprofile&amp;u=12">scott</a> <a href="viewtopic.php?p=10147#10147"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4548&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-299) modifications to project-info dialo</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">36</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Wed Aug 12, 2009 6:01 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10146#10146"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4547&amp;highlight=" class="topictitle">[JIRA] Updated: (SQ-298) comparing lessons plans</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">34</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Wed Aug 12, 2009 12:29 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10141#10141"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4546&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-298) preparing lessons plans</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">37</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Wed Aug 12, 2009 12:27 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10138#10138"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=2" class="forumlink">Squeakland Community</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4545&amp;highlight=" class="topictitle">What about shipping DrGeo in Etoys?</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=61">hilaire</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">38</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Wed Aug 12, 2009 12:06 pm<br /><a href="profile.php?mode=viewprofile&amp;u=61">hilaire</a> <a href="viewtopic.php?p=10136#10136"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=2" class="forumlink">Squeakland Community</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4538&amp;highlight=" class="topictitle">Etoys presentation in Chile - delayed by 2 weeks</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name">Rita Freudenberg</span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">40</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Tue Aug 11, 2009 12:22 pm<br />Rita Freudenberg  <a href="viewtopic.php?p=10120#10120"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=2" class="forumlink">Squeakland Community</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4537&amp;highlight=" class="topictitle">[squeak-dev] Inquiry: Etoy (or other) Projects in Physics	(s</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=55">yoshiki</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">32</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Tue Aug 11, 2009 10:40 am<br /><a href="profile.php?mode=viewprofile&amp;u=55">yoshiki</a> <a href="viewtopic.php?p=10116#10116"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4536&amp;highlight=" class="topictitle">[JIRA] Updated: (SQ-297) Separate localizaed QuickGuide cont</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">42</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Tue Aug 11, 2009 6:53 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10115#10115"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4535&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-297) Separate localizaed QuickGuide cont</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">39</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Tue Aug 11, 2009 6:41 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10114#10114"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4533&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-296) Project title in navigation bar not</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">37</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Tue Aug 11, 2009 4:28 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10109#10109"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=3" class="forumlink">Etoys Development</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4532&amp;highlight=" class="topictitle">forum spam</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=44">Bert</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">32</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Tue Aug 11, 2009 2:20 am<br /><a href="profile.php?mode=viewprofile&amp;u=44">Bert</a> <a href="viewtopic.php?p=10105#10105"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=7" class="forumlink">Etoys América Latina</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4530&amp;highlight=" class="topictitle">Squeakfest USA ao vivo</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=50">martavoelcker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">53</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Mon Aug 10, 2009 2:31 pm<br /><a href="profile.php?mode=viewprofile&amp;u=50">martavoelcker</a> <a href="viewtopic.php?p=10093#10093"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4525&amp;highlight=" class="topictitle">[JIRA] Commented: (SQ-289) enable &quot;update code from ser</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">39</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Mon Aug 10, 2009 4:10 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10085#10085"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4523&amp;highlight=" class="topictitle">[JIRA] Commented: (SQ-139) Ambiguous translation strings</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">34</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sun Aug 09, 2009 11:48 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10079#10079"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=2" class="forumlink">Squeakland Community</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4522&amp;highlight=" class="topictitle">Etoys presentation in Chile</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name">rita</span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">55</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sun Aug 09, 2009 12:12 pm<br />rita  <a href="viewtopic.php?p=10078#10078"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4521&amp;highlight=" class="topictitle">[JIRA] Updated: (SQ-291) Add project language information in</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">60</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sun Aug 09, 2009 1:55 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10076#10076"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4520&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-291) Add project language information i</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">39</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sun Aug 09, 2009 1:55 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10075#10075"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4519&amp;highlight=" class="topictitle">[JIRA] Commented: (SQ-291) Add project language information</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">45</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sun Aug 09, 2009 1:54 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10074#10074"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4518&amp;highlight=" class="topictitle">[JIRA] Commented: (SQ-291) Add project language information</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">45</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sun Aug 09, 2009 1:54 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10073#10073"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=2" class="forumlink">Squeakland Community</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4516&amp;highlight=" class="topictitle">squeakfest at UCLA next week; bring a child, get in free</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=3">teefal</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">84</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sat Aug 08, 2009 11:09 am<br /><a href="profile.php?mode=viewprofile&amp;u=3">teefal</a> <a href="viewtopic.php?p=10066#10066"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=3" class="forumlink">Etoys Development</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4517&amp;highlight=" class="topictitle">squeakfest next week at ucla; bring a child, get in free</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=3">teefal</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">61</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sat Aug 08, 2009 11:08 am<br /><a href="profile.php?mode=viewprofile&amp;u=3">teefal</a> <a href="viewtopic.php?p=10067#10067"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4515&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-295) Toolbar layout broken under Sugar</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">51</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sat Aug 08, 2009 8:02 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10063#10063"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4513&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-294) Save Project balloon help wrong und</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">51</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sat Aug 08, 2009 7:44 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10061#10061"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4512&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-293) Full-screen button useless under Su</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">59</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sat Aug 08, 2009 7:42 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10060#10060"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4511&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-292) Duplicate viewer</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">43</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Sat Aug 08, 2009 7:32 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10059#10059"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=3" class="forumlink">Etoys Development</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4510&amp;highlight=" class="topictitle">Beginning of Release Notes for Squeakland Release</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name">Milan Zimmermann</span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">44</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 11:12 pm<br />Milan Zimmermann  <a href="viewtopic.php?p=10058#10058"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4509&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-163) PolygonMorph issues</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">45</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 10:52 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10057#10057"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4508&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-113) Include thumbnail in project</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">51</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 10:16 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10055#10055"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4507&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-243) Pasting issues on Mac</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">45</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 10:08 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10053#10053"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4506&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-287) Fix colors of lexicon and instance</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">52</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 10:06 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10052#10052"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4505&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-281) Use a checkbox to govern full-scre</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">51</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 10:04 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10051#10051"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4504&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-99) Improve Patch Tool</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">45</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 10:03 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10050#10050"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4503&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-238) &quot;Keep a current project&quot;</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">53</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 10:02 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10049#10049"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4502&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-252) collapse halo moves smaller sketch</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">41</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 10:02 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10048#10048"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4501&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-274) embed screenshot in zipped PR</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">40</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 10:00 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10047#10047"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4500&amp;highlight=" class="topictitle">[JIRA] Resolved: (SQ-286) harmonize 'grab object', 'reveal o</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">54</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 9:56 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10046#10046"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4499&amp;highlight=" class="topictitle">[JIRA] Commented: (SQ-286) harmonize 'grab object', 'reveal</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">53</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 9:56 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10045#10045"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=3" class="forumlink">Etoys Development</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4498&amp;highlight=" class="topictitle">Sunday before Squeakfest</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name">Milan Zimmermann</span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">39</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Fri Aug 07, 2009 8:00 pm<br />Milan Zimmermann  <a href="viewtopic.php?p=10043#10043"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4496&amp;highlight=" class="topictitle">[JIRA] Updated: (SQ-286) harmonize 'grab object', 'reveal ob</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">63</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Thu Aug 06, 2009 9:51 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10034#10034"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4495&amp;highlight=" class="topictitle">[JIRA] Created: (SQ-291) Add project language information in</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">57</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Thu Aug 06, 2009 2:40 pm<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10033#10033"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=7" class="forumlink">Etoys América Latina</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4494&amp;highlight=" class="topictitle">testing topic</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name">fabiana marella martinez</span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">73</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Thu Aug 06, 2009 11:53 am<br />fabiana marella martinez  <a href="viewtopic.php?p=10031#10031"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4493&amp;highlight=" class="topictitle">[JIRA] Commented: (SQ-214) [Etoys-Sugar-0.84-OLPC] No sound</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">64</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Thu Aug 06, 2009 9:08 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10028#10028"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle"><img src="templates/subSilver/images/folder.gif" width="19" height="18" alt="No new posts" title="No new posts" /></td>
	<td class="row1"><span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Etoys Notifications</a></span></td>
	<td class="row2"><span class="topictitle"><a href="viewtopic.php?t=4487&amp;highlight=" class="topictitle">[JIRA] Updated: (SQ-252) collapse halo moves smaller sketch</a></span><br /><span class="gensmall"></span></td>
	<td class="row1" align="center" valign="middle"><span class="name"><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">0</span></td>
	<td class="row1" align="center" valign="middle"><span class="postdetails">60</span></td>
	<td class="row2" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">Thu Aug 06, 2009 7:20 am<br /><a href="profile.php?mode=viewprofile&amp;u=38">tracker</a> <a href="viewtopic.php?p=10025#10025"><img src="templates/subSilver/images/icon_latest_reply.gif" alt="View latest post" title="View latest post" border="0" /></a></span></td>
  </tr>
  <tr>
	<td class="catBottom" colspan="7" height="28" valign="middle">&nbsp; </td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr>
	<td align="left" valign="top"><span class="nav">Page <b>1</b> of <b>53</b></span></td>
	<td align="right" valign="top" nowrap="nowrap"><span class="nav">Goto page <b>1</b>, <a href="search.php?search_id=409694683&amp;start=50">2</a>, <a href="search.php?search_id=409694683&amp;start=100">3</a> ... <a href="search.php?search_id=409694683&amp;start=2500">51</a>, <a href="search.php?search_id=409694683&amp;start=2550">52</a>, <a href="search.php?search_id=409694683&amp;start=2600">53</a>&nbsp;&nbsp;<a href="search.php?search_id=409694683&amp;start=50">Next</a></span><br /><span class="gensmall">All times are GMT - 4 Hours</span></td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr>
	<td valign="top" align="right">
<form method="get" name="jumpbox" action="viewforum.php" onSubmit="if(document.jumpbox.f.value == -1){return false;}"><table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Jump to:&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }"><option value="-1">Select a forum</option><option value="-1">&nbsp;</option><option value="-1">Web and Email</option><option value="-1">----------------</option><option value="2">Squeakland Community</option><option value="3">Etoys Development</option><option value="4">Etoys Notifications</option><option value="7">Etoys América Latina</option><option value="-1">&nbsp;</option><option value="-1">Web Only</option><option value="-1">----------------</option><option value="9">Etoys Auf Deutsch</option><option value="8">Etoys En Français</option><option value="5">Off Topic</option></select><input type="hidden" name="sid" value="685e953a8fbca86afdad5a45aa79ad3d" />&nbsp;<input type="submit" value="Go" class="liteoption" /></span></td>
	</tr>
</table></form>

</td>
  </tr>
</table>


<div align="center"><span class="copyright"><br /><br />
<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB 2.0. If you cannot (for good
	reason) retain the full copyright we request you at least leave in place the
	Powered by phpBB line, with phpBB linked to www.phpbb.com. If you refuse
	to include even this then support on our forums may be affected.

	The phpBB Group : 2002
// -->
Powered by <a href="http://www.phpbb.com/" target="_phpbb" class="copyright">phpBB</a> &copy; 2001, 2005 phpBB Group<br /></span></div>
		</td>
	</tr>
</table>

</body>
</html>

