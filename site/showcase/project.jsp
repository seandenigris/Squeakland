
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">

<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type"/>
<!--[if lte IE 6]>
   <script type="text/javascript" src="/sm/includes/supersleight.js"></script>
   <![endif]-->
<script src="../jsapi.html" type="text/javascript">
</script>
<script type="text/javascript">
  google.load("language", "1");

  function translate( pContainerName )
  {
     var container = document.getElementById( pContainerName );
     google.language.translate( container.innerHTML, "", "en",  
        function(result)
        {
           if (!result.error)
           {
              container.innerHTML = result.translation + "&nbsp;<span class='googleTranslateMarker'>[<a href='http://translate.google.com'>GT</a>]</span>";
           }
        });
  }

   function translateToggle( pContainerName )
   {
   }

</script>
<title> squeakland : showcase : project </title>
<link href="../sm/includes/sm-default.css" rel="stylesheet" type="text/css"/>
<link href="../includes/styles.css" rel="stylesheet" type="text/css"/>
<link href="../images/favicon.png" rel="shortcut icon"/>
<meta content="Etoys is an educational tool for teaching children powerful ideas in compelling ways.  Etoys is a media-rich authoring environment and visual programming system." name="description"/>
<meta content="squeak,etoys,olpc,xo,alan kay,viewpoints,science,math,visual programming,papert,constructionism" name="keywords"/>
<meta content="iLSJv7DYRXHf6om4I_AW8cUlaOXo0jx7-ub-cidVvXA" name="google-site-verification">
</meta></head>
<body>
<map id="actionNavMap" name="actionNavMap">
<area alt="download" coords=" 52, 0, 118, 17" href="../download/index.html" shape="rect" title="download"/>
<area alt="contact" coords="132, 0, 187, 17" href="../contact/index.html" shape="rect" title="contact"/>
<area alt="donate" coords="199, 0, 250, 17" href="../donate/index.html" shape="rect" title="donate"/>
<area alt="discuss" coords="262, 0, 313, 17" href="../discuss/index.html" shape="rect" title="discuss"/>
<area alt="subscribe" coords="327, 0, 389, 17" href="../subscribe/index.html" shape="rect" title="subscribe"/>
</map>
<map id="mainNavMap" name="mainNavMap">
<area alt="About" coords=" 19, 7,  69, 27" href="../about/index.html" shape="rect" title="About"/>
<area alt="Tutorials" coords=" 75, 7, 140, 27" href="../tutorials/index.html" shape="rect" title="Tutorials"/>
<area alt="Resources" coords="147, 7, 223, 27" href="../resources/index.html" shape="rect" title="Resources"/>
<area alt="Showcase" coords="231, 7, 304, 27" href="index.html" shape="rect" title="Showcase"/>
<area alt="News" coords="312, 7, 354, 27" href="../news/index.html" shape="rect" title="News"/>
</map>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="canvas" width="857">
<!-- fwtable fwsrc="design16-content.png" fwpage="Page 1" fwbase="mockup.png" fwstyle="Dreamweaver" fwdocid = "1021545101" fwnested="0" -->
<tr>
<td>
<div class="logo"><a href="../index.html"><img border="0" height="161" src="../images/logo.png" width="368"/></a></div>
<img alt="" border="0" height="1" src="../images/spacer.gif" width="100">
</img></td>
<td><img alt="" border="0" height="1" src="../images/spacer.gif" width="10"/></td>
<td><img alt="" border="0" height="1" src="../images/spacer.gif" width="275"/></td>
<td><img alt="" border="0" height="1" src="../images/spacer.gif" width="19"/></td>
<td><img alt="" border="0" height="1" src="../images/spacer.gif" width="368"/>
<div class="adminMiniMenu">
<table align="right" cellspacing="0">
<tr>
<td><a href="../index.html" target="_blank">bugs</a></td>
<td><a href="../index.html" target="_blank">wiki</a></td>
<td>
<a href="../sm/login.jsp">login</a>
</td>
<td>
<form action="/action/chooseLanguage" method="POST" name="languageForm">
<select name="langKey" onchange="this.form.submit()">
<option value="fr">Franais</option>
<option value="pt">Portugus</option>
<option selected="selected" value="en">English</option>
<option value="es">Espaol</option>
</select>
</form>
</td>
</tr>
</table>
</div>
</td>
<td><img alt="" border="0" height="1" src="../images/spacer.gif" width="19"/></td>
<td><img alt="" border="0" height="1" src="../images/spacer.gif" width="11"/></td>
<td><img alt="" border="0" height="1" src="../images/spacer.gif" width="55"/></td>
<td><img alt="" border="0" height="1" src="../images/spacer.gif" width="1"/></td>
</tr>
<tr>
<td colspan="8"><img alt="" border="0" height="63" src="../images/spacer.gif" width="857"/></td>
<td><img alt="" border="0" height="63" src="../images/spacer.gif" width="1"/></td>
</tr>
<tr>
<td rowspan="6"><img alt="" border="0" height="443" src="../images/spacer.gif" width="100"/></td>
<td colspan="2" rowspan="4"><img alt="" border="0" height="95" id="logoBack" name="logoBack" src="../images/logoBack.png" width="285"/></td>
<td colspan="4"><img alt="" border="0" height="17" id="actionNav" name="actionNav" src="../images/actionNav.png" usemap="#actionNavMap" width="417"/></td>
<td rowspan="6"><img alt="" border="0" height="443" src="../images/spacer.gif" width="55"/></td>
<td><img alt="" border="0" height="17" src="../images/spacer.gif" width="1"/></td>
</tr>
<tr>
<td rowspan="3"><img alt="" border="0" height="78" id="navLeft" name="navLeft" src="../images/navLeft.png" width="19"/></td>
<td><img alt="" border="0" height="29" id="navTop" name="navTop" src="../images/mainNav-showcase.png" usemap="#mainNavMap" width="368"/></td>
<td colspan="2" rowspan="3"><img alt="" border="0" height="78" id="navRight" name="navRight" src="../images/navRight.png" width="30"/></td>
<td><img alt="" border="0" height="29" src="../images/spacer.gif" width="1"/></td>
</tr>
<tr>
<td style="background: url(/images//subNav.png) no-repeat;">
<div class="subNav">
<ul>
<li class="vertRule"><a href="featured/index.html">featured</a></li>
<li class="vertRule"><a href="everyone/index.html">everyone</a></li>
<li class="vertRule"><a href="../action/showcaseAccountAddEdit.html">signup</a></li>
<li><a href="../action/showcaseUpload.html">upload</a></li>
</ul>
</div>
</td>
<td><img alt="" border="0" height="19" src="../images/spacer.gif" width="1"/></td>
</tr>
<tr>
<td><img alt="" border="0" height="30" id="navBottom" name="navBottom" src="../images/navBottom.png" width="368"/></td>
<td><img alt="" border="0" height="30" src="../images/spacer.gif" width="1"/></td>
</tr>
<tr>
<td style="vertical-align: top; background: url( /images//canvasLeftStretch.png );"><img alt="" border="0" height="346" id="canvasLeft" name="canvasLeft" src="../images/canvasLeft.png" width="10"/></td>
<td class="content" colspan="4" style="vertical-align: top; background: white url( /images//content.png ) no-repeat;">
<br/>
<!-- content start -->
<a name="nav"><img alt="" border="0" height="25" name="navTop" src="../sm/images/sequenceNavLine-long.png" usemap="#navTop"/></a>
<map id="navTop" name="navTop">
<area alt="back to list" coords="541,3,621,28" href="account/index.jsp" shape="rect" title="back to list"/>
<area alt="next" coords="66,3,102,22" href="project.jsp" shape="rect" title="next"/>
<area alt="previous" coords="1,3,58,22" href="account/index.jsp" shape="rect" title="previous"/>
</map>
<table class="articleTable">
<tr>
<td align="right" class="articleLeftColumn" valign="top">
<a href="../launcher.html" target="_blank">
<img alt="" class="leftColImage" src="../content/showcase/everyone/accounts/digimath/Frog Puzzle.001.png" style="margin-left: 0;"/>
</a>
<div class="projectLink"><a href="../launcher.html" target="_blank">launch</a> </div>
</td>
<td class="articleImageOnly" colspan="2" width="400">
<h1 id="title7683" style="padding-top: 20px;">
               
                  Frog  Puzzle
               <span class="articleDate"> (2009-Oct-28 22:49 EDT)</span>
</h1>
<h3 style="margin-top: 5px">
               by

               
                  Digimath
               

               
                  <span class="articleAccountLink">&lt;<a href="account.html">digimath</a>&gt;
                  <a href="ranking.jsp"><img alt="" border="0" src="../sm/images/mojo/default/level1.png"/></a>
</span>
</h3>
<div class="articleBody" id="body7683">
<br/>
</div>
</td>
<tr><td> </td></tr>
</tr></table>
<div class="showcaseProject">
<h3 class="projectHeader" style="margin-top: 30px;">Description</h3>
<p class="projectData" id="blurb7683" onclick='translateToggle( "blurb" + 7683 )'>Make the frogs jump until the pattern is reversed.  Click on Help for the rules</p>
<form action="/action/commentSave" method="POST" name="commentForm">
<table class="catListTable">
<tr>
<td>
<h3 class="projectHeader" style="margin-top: 15px;">Subject</h3>
<table cellspacing="0" class="projectData">
<tr>
<td id="catTwo7683" onclick='translateToggle( "catTwo" + 7683 )'>Mathematics</td>
</tr>
</table>
</td>
<td>
<h3 class="projectHeader" style="margin-top: 15px;">Target Age</h3>
<table cellspacing="0" class="projectData">
<tr>
<td id="catThree7683" onclick='translateToggle( "catThree" + 7683 )'>Ages 4 and older</td>
</tr>
</table>
</td>
<td>
<h3 class="projectHeader" style="margin-top: 15px;">Region</h3>
<table cellspacing="0" class="projectData">
<tr>
<td id="catThree7683" onclick='translateToggle( "catFour" + 7683 )'>North America</td>
</tr>
</table>
</td>
</tr>
</table>
<h3 class="projectHeader">Tags</h3>
<p class="projectData">
<a href="everyone.html" id="tag39" onclick='translateToggle( translate( "tag" + 39 ) )'>puzzle</a>
</p>
<h3 class="projectHeader" style="margin-top: 40px;">Comments</h3>
<a name="comments"></a>
<div class="commentList">
<table cellpadding="0" cellspacing="0" class="commentTable">
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment462" onclick='translateToggle( "comment" + 462 )'>Wonderful game, I learned two good techniques from this: 1) Providing Help via Show/Hide a book  2) checking for the winning position by moving through the winning spaces.  I was trying to do this with "hidden" objects that covered the winning combination, but you method will work much better for my Sudoko project.  Thanks!<br/>
</p>
<script type="text/javascript"> translate( "comment" + 462 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment1055" onclick='translateToggle( "comment" + 1055 )'>Here are the 2 answers with 10 moves found by Squeak prolog !<br/>
<br/>
Grenouilles ?- solution(s,10).<br/>
[['-','r','r','r','g','g','g'],<br/>
['r','-','r','r','g','g','g'],<br/>
['r','g','r','r','-','g','g'],<br/>
['r','g','-','r','r','g','g'],<br/>
['r','g','g','r','r','-','g'],<br/>
['r','g','g','r','r','g','-'],<br/>
['r','g','g','-','r','g','r'],<br/>
['-','g','g','r','r','g','r'],<br/>
['g','g','-','r','r','g','r'],<br/>
['g','g','g','r','r','-','r'],<br/>
['g','g','g','r','r','r','-']]<br/>
<br/>
[['-','r','r','r','g','g','g'],<br/>
['r','-','r','r','g','g','g'],<br/>
['r','g','r','r','-','g','g'],<br/>
['r','g','r','r','g','g','-'],<br/>
['r','g','r','-','g','g','r'],<br/>
['-','g','r','r','g','g','r'],<br/>
['g','-','r','r','g','g','r'],<br/>
['g','g','r','r','-','g','r'],<br/>
['g','g','-','r','r','g','r'],<br/>
['g','g','g','r','r','-','r'],<br/>
['g','g','g','r','r','r','-']]<br/>
Grenouilles ?- <br/>
</p>
<script type="text/javascript"> translate( "comment" + 1055 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment1054" onclick='translateToggle( "comment" + 1054 )'>Voici les 2 solutions en 10 mouvements trouvées par un programme en squeak prolog<br/>
<br/>
Grenouilles ?- solution(s,10).<br/>
[['-','r','r','r','g','g','g'],<br/>
['r','-','r','r','g','g','g'],<br/>
['r','g','r','r','-','g','g'],<br/>
['r','g','-','r','r','g','g'],['r','g','g','r','r','-','g'],['r','g','g','r','r','g','-'],<br/>
['r','g','g','-','r','g','r'],['-','g','g','r','r','g','r'],<br/>
['g','g','-','r','r','g','r'],['g','g','g','r','r','-','r'],['g','g','g','r','r','r','-']]<br/>
<br/>
[['-','r','r','r','g','g','g'],<br/>
['r','-','r','r','g','g','g'],<br/>
['r','g','r','r','-','g','g'],['r','g','r','r','g','g','-'],<br/>
['r','g','r','-','g','g','r'],['-','g','r','r','g','g','r'],<br/>
['g','-','r','r','g','g','r'],<br/>
['g','g','r','r','-','g','r'],<br/>
['g','g','-','r','r','g','r'],['g','g','g','r','r','-','r'],['g','g','g','r','r','r','-']]<br/>
Grenouilles ?- <br/>
Il n' y a pas de solutions pour 9 mouvements.<br/>
</p>
<script type="text/javascript"> translate( "comment" + 1054 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment924" onclick='translateToggle( "comment" + 924 )'>Excellent!<br/>
<br/>
Works perfectly.<br/>
<br/>
Entertains and,before you realize it,  you are thinking of strategies several steps ahead.<br/>
</p>
<script type="text/javascript"> translate( "comment" + 924 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment768" onclick='translateToggle( "comment" + 768 )'>Very nice presentation,clean and pleasant.<br/>
Now  the new challenge is to write a project solving the puzzle.<br/>
</p>
<script type="text/javascript"> translate( "comment" + 768 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment724" onclick='translateToggle( "comment" + 724 )'>Enjoyable and challenging puzzle.<br/>
</p>
<script type="text/javascript"> translate( "comment" + 724 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment654" onclick='translateToggle( "comment" + 654 )'>I did it in 10 moves<br/>
</p>
<script type="text/javascript"> translate( "comment" + 654 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment601" onclick='translateToggle( "comment" + 601 )'>Ah, 11 moves!<br/>
</p>
<script type="text/javascript"> translate( "comment" + 601 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment600" onclick='translateToggle( "comment" + 600 )'>Best I could do after about five tries was 14 moves.  Any of you math whizzes know the minimum number of moves possible?<br/>
</p>
<script type="text/javascript"> translate( "comment" + 600 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;&gt;</span>
<span class="articleDate"> (2010-Sep-03 7:42 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment463" onclick='translateToggle( "comment" + 463 )'>Thanks for your comment.  I’m glad to hear that my project was beneficial. Good luck with your Sudoko project. :-)<br/>
</p>
<script type="text/javascript"> translate( "comment" + 463 );</script>
</td>
</tr>
<tr><td> </td></tr>
<tr>
<td style="background-color: #EEEEEE">
<h3>by
               
                     
                     <span class="articleAccountLink">&lt;<a href="account.html">gmindustries</a>&gt;</span>
<span class="articleDate"> (2012-May-28 12:25 EDT)</span>
</h3></td>
<td align="right" style="background-color: #EEEEEE">
<h3></h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #EEEEEE" valign="top">
<p id="comment1601" onclick='translateToggle( "comment" + 1601 )'>Awesome! this is one of my Favourites!<br/>
</p>
<script type="text/javascript"> translate( "comment" + 1601 );</script>
</td>
</tr>
<tr><td> </td></tr>
</table>
</div>
<h3 class="projectHeader" style="margin-top: 40px;">Add Comment</h3>
   
         To post comments, you must be logged in.
      

   </form>
</div>
<br/>
<br/>
<br/>
<img alt="" border="0" height="25" name="navBottom" src="../sm/images/sequenceNavLineBottom-long.png" usemap="#navBottom"/>
<map id="navBottom" name="navBottom">
<area alt="back to list" coords="541,3,602,28" href="account/index.jsp" shape="rect" title="back to list"/>
<area alt="next" coords="66,3,102,22" href="project.jsp" shape="rect" title="next"/>
<area alt="previous" coords="1,3,58,22" href="account/index.jsp" shape="rect" title="previous"/>
</map>
<!-- content end -->
</td>
<td style="vertical-align: top; background: url( /images/canvasRightStretch.png );"><img alt="" border="0" height="346" id="canvasRight" name="canvasRight" src="../images/canvasRight.png" width="11"/></td>
<td><img alt="" border="0" height="346" src="../images/spacer.gif" width="1"/></td>
</tr>
<tr>
<td><img alt="" border="0" height="2" id="canvasLeftStretch" name="canvasLeftStretch" src="../images/canvasLeftStretch.png" width="10"/></td>
<td colspan="4"><img alt="" border="0" height="2" src="../images/spacer.gif" width="681"/></td>
<td><img alt="" border="0" height="2" id="canvasRightStretch" name="canvasRightStretch" src="../images/canvasRightStretch.png" width="11"/></td>
<td><img alt="" border="0" height="2" src="../images/spacer.gif" width="1"/></td>
</tr>
<tr>
<td colspan="8" valign="top"><img alt="" border="0" height="55" id="footer" name="footer" src="../images/footer.png" width="857"/></td>
<td><img alt="" border="0" height="55" src="../images/spacer.gif" width="1"/></td>
</tr>
<tr>
<td> </td>
<td colspan="6">
<table class="footer" width="100%">
<tr>
<td align="left" valign="top" width="25%">
<a href="../software/index.html" target="_blank"><img alt="powered by storymill" border="0" height="30" hspace="20" src="../sm/images/storymillPoweredBy-white.gif" width="85"/></a>
</td>
<td align="center" valign="top" width="50%">
<p style="margin: 0; padding: 0 0 3px 0;">

            Website contents under a Creative Commons <a href="../licenses/by-nc-sa/3.0/index.html">license</a>.</p>
<a href="../privacy.jsp">Privacy Policy</a>    <a href="../sitemap.jsp">Site Map</a>
</td>
<td align="right" valign="top" width="25%">
<a href="../index.html" target="_blank"><img alt="website by immuexa" border="0" height="30" hspace="20" src="../sm/images/websiteBy-white.gif" width="70"/></a>
</td>
</tr>
</table>
<br/>
<br/>
</td>
<td colspan="2"> </td>
</tr>
</table>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8510916-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
