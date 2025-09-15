<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="./index.php" title="Squeakland Forum Index" />
<link rel="search" href="./search.php" title="Search" />
<link rel="help" href="./faq.php" title="FAQ" />
<link rel="author" href="./memberlist.php" title="Memberlist" />
<link rel="chapter forum" href="viewforum.php?f=2" title="Squeakland Community" />
<link rel="chapter forum" href="viewforum.php?f=3" title="Etoys Development" />
<link rel="chapter forum" href="viewforum.php?f=4" title="Etoys Notifications" />
<link rel="chapter forum" href="viewforum.php?f=7" title="Etoys Am�rica Latina" />
<link rel="chapter forum" href="viewforum.php?f=9" title="Etoys Auf Deutsch" />
<link rel="chapter forum" href="viewforum.php?f=8" title="Etoys En Fran�ais" />
<link rel="chapter forum" href="viewforum.php?f=5" title="Off Topic" />

<title>Squeakland :: Viewing profile</title>
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
	<td align="left"><span class="nav"><a href="index.php" class="nav">Squeakland Forum Index</a></span></td>
  </tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
  <tr>
	<th class="thHead" colspan="2" height="25" nowrap="nowrap">Viewing profile :: Pato Acevedo</th>
  </tr>
  <tr>
	<td class="catLeft" width="40%" height="28" align="center"><b><span class="gen">Avatar</span></b></td>
	<td class="catRight" width="60%"><b><span class="gen">All about Pato Acevedo</span></b></td>
  </tr>
  <tr>
	<td class="row1" height="6" valign="top" align="center"><br /><span class="postdetails">member</span></td>
	<td class="row1" rowspan="3" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="3">
		<tr>
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">Joined:&nbsp;</span></td>
		  <td width="100%"><b><span class="gen">23 Jul 2009</span></b></td>
		</tr>
		<tr>
		  <td valign="top" align="right" nowrap="nowrap"><span class="gen">Total posts:&nbsp;</span></td>
		  <td valign="top"><b><span class="gen">3</span></b><br /><span class="genmed">[0.02% of total / 0.02 posts per day]</span> <br /><span class="genmed"><a href="search.php?search_author=Pato+Acevedo" class="genmed">Find all posts by Pato Acevedo</a></span></td>
		</tr>
		<tr>
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">Location:&nbsp;</span></td>
		  <td><b><span class="gen">&nbsp;</span></b></td>
		</tr>
		<tr>
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">Website:&nbsp;</span></td>
		  <td><span class="gen"><b><a href="http://www.patricioacevedo.blogspot.com" target="_userwww">http://www.patricioacevedo.blogspot.com</a></b></span></td>
		</tr>
		<tr>
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">Occupation:&nbsp;</span></td>
		  <td><b><span class="gen">&nbsp;</span></b></td>
		</tr>
		<tr>
		  <td valign="top" align="right" nowrap="nowrap"><span class="gen">Interests:</span></td>
		  <td> <b><span class="gen">&nbsp;</span></b></td>
		</tr>
	  </table>
	</td>
  </tr>
  <tr>
	<td class="catLeft" align="center" height="28"><b><span class="gen">Contact Pato Acevedo </span></b></td>
  </tr>
  <tr>
	<td class="row1" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="3">
		<tr>
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">E-mail address:</span></td>
		  <td class="row1" valign="middle" width="100%"><b><span class="gen">&nbsp;</span></b></td>
		</tr>
		<tr>
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">Private Message:</span></td>
		  <td class="row1" valign="middle"><b><span class="gen"><a href="privmsg.php?mode=post&amp;u=78"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a></span></b></td>
		</tr>
		<tr>
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">MSN Messenger:</span></td>
		  <td class="row1" valign="middle"><span class="gen">&nbsp;</span></td>
		</tr>
		<tr>
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">Yahoo Messenger:</span></td>
		  <td class="row1" valign="middle"><span class="gen"></span></td>
		</tr>
		<tr>
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">AIM Address:</span></td>
		  <td class="row1" valign="middle"><span class="gen">&nbsp;</span></td>
		</tr>
		<tr>
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">ICQ Number:</span></td>
		  <td class="row1"><script language="JavaScript" type="text/javascript"><!--

		if ( navigator.userAgent.toLowerCase().indexOf('mozilla') != -1 && navigator.userAgent.indexOf('5.') == -1 && navigator.userAgent.indexOf('6.') == -1 )
			document.write(' &nbsp;');
		else
			document.write('<table cellspacing="0" cellpadding="0" border="0"><tr><td nowrap="nowrap"><div style="position:relative;height:18px"><div style="position:absolute">&nbsp;</div><div style="position:absolute;left:3px;top:-1px">&nbsp;</div></div></td></tr></table>');

		  //--></script><noscript>&nbsp;</noscript></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
	<td align="right"><span class="nav"><br />
<form method="get" name="jumpbox" action="viewforum.php" onSubmit="if(document.jumpbox.f.value == -1){return false;}"><table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Jump to:&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }"><option value="-1">Select a forum</option><option value="-1">&nbsp;</option><option value="-1">Web and Email</option><option value="-1">----------------</option><option value="2">Squeakland Community</option><option value="3">Etoys Development</option><option value="4">Etoys Notifications</option><option value="7">Etoys Am�rica Latina</option><option value="-1">&nbsp;</option><option value="-1">Web Only</option><option value="-1">----------------</option><option value="9">Etoys Auf Deutsch</option><option value="8">Etoys En Fran�ais</option><option value="5">Off Topic</option></select><input type="hidden" name="sid" value="2ab9aa82f7663587edff0cdcdb9bb19c" />&nbsp;<input type="submit" value="Go" class="liteoption" /></span></td>
	</tr>
</table></form>

</span></td>
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

