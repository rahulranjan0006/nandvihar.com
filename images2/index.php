<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="images2/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="images2/font-awesome.min.css" rel="stylesheet" type="text/css" />
<title>INDEX</title>
<style>
/* Main */
#menu {
    width: 100%;
    margin: 0;
    padding: 10px 0 0 0;
    list-style: none;  
    background-color: #111;
    background-image: linear-gradient(#444, #111);
    border-radius: 0px;
    box-shadow: 0 2px 1px #9c9c9c;
}

#menu li {
    float: left;
    padding: 0 0 10px 0;
    position: relative;
}

#menu a {
    float: left;
    height: 25px;
    padding: 0 25px;
    color: #999;
    text-transform: uppercase;
    font: bold 12px/25px Arial, Helvetica;
    text-decoration: none;
    text-shadow: 0 1px 0 #000;
}

#menu li:hover > a {
    color: #fafafa;
	
}

*html #menu li a:hover { /* IE6 */
    color: #fafafa;
}

#menu li:hover > ul {
    display: block;
}
/* Sub-menu */
#menu ul {
    list-style: none;
    margin: 0;
    padding: 0;    
    display: none;
    position: absolute;
    top: 35px;
    left: 0;
    z-index: 99999;    
    background-color: #444;   
    background-image: linear-gradient(#444, #111);    
    -moz-border-radius: 5px;
    border-radius: 5px;
}

#menu ul li {
    float: none;
    margin: 0;
    padding: 0;
    display: block;  
    box-shadow: 0 1px 0 #111111, 
                0 2px 0 #777777;
}

#menu ul li:last-child { 
    box-shadow: none;    
}

#menu ul a {    
    padding: 10px;
    height: auto;
    line-height: 1;
    display: block;
    white-space: nowrap;
    float: none;
    text-transform: none;
}

*html #menu ul a { /* IE6 */   
    height: 10px;
    width: 150px;
}

*:first-child+html #menu ul a { /* IE7 */    
    height: 10px;
    width: 150px;
}

#menu ul a:hover {
    background-color: #0186ba;
    background-image: linear-gradient(#04acec, #0186ba);
}

#menu ul li:first-child a {
    border-radius: 5px 5px 0 0;
}

#menu ul li:first-child a:after {
    content: '';
    position: absolute;
    left: 30px;
    top: -8px;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 8px solid #444;
}

#menu ul li:first-child a:hover:after {
    border-bottom-color: #04acec; 
}

#menu ul li:last-child a {
    border-radius: 0 0 5px 5px;
}

/* Clear floated elements */
#menu:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

* html #menu             { zoom: 1; } /* IE6 */
*:first-child+html #menu { zoom: 1; } /* IE7 */
#menu ul li:first-child a:after {
    content: '';
    position: absolute;
    left: 30px;
    top: -8px;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 8px solid #444;
}

#menu ul li:first-child a:hover:after {
    border-bottom-color: #04acec; 
}
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(function() {
      if ($.browser.msie && $.browser.version.substr(0,1)<7)
      {
        $('li').has('ul').mouseover(function(){
            $(this).children('ul').show();
            }).mouseout(function(){
            $(this).children('ul').hide();
            })
      }
    });        
</script>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>

<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: small;
	color: #06C;
	
}
body {
	background-color: #fff;
	margin-left: 100px;
	margin-right: 100px;
	margin-bottom:2px;
	}
a {
	font-size: medium;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: underline;
}




.topNews{ width:100%; float:left; background:#f3f3f3; margin-top:5px;}
.topNews h2{ font-size:14px; color:#803d43; padding:7px 12px 0px 12px ; float:left; margin:0;}
.topMarquee{ float:left; margin:0 0 0 15px; width:85%;  padding:6px 0;} 
.topMarquee ul{ margin:0; float:left;}
.topMarquee ul li{ display:inline; padding:0 15px 0 5px; list-style-type:disc; margin:0 10px;}
.topMarquee ul li a{ color:#3d4f5d;}


#slideShowImages
{
width:75%;
height:306px;
border:2px solid red;
margin:0px;
padding:0px;   
    
}
.imgn1{
width:100%;
height:306px;

}

.SearchDIv{position:absolute;top:115px;left:970px;}.searchTxt{width:150px;float:left;padding:5px 0 5px 5px;border:solid 1px #ddd;font-size:13px;}.searchBTN{background:#900;width:30px;padding:6px 0;float:left;text-align:center;font-size:17px;}.searchBTN i{color:#fff;}

#adminlogin
{
	width:258px;
	height:306px;
	position:absolute;
	left:903px;
	top:243px;
	border:2px solid red;
	background:#B5DCB3;
}
.submit_btn
{
	background: #00a1e3; /* Old browsers */
	background: -moz-linear-gradient(top, #00a1e3 0%, #0d89bc 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top, #00a1e3 0%,#0d89bc 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom, #00a1e3 0%,#0d89bc 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00a1e3', endColorstr='#0d89bc',GradientType=0 ); /* IE6-9 */
    border: 1px solid #00a1e3;
    border-radius: 5px;
    color: #fff;
    font-size: 14px;
    padding: 8px 20px;
}	
.adminemail
{
	margin-right:8px;
	margin-left:8px;
}
</style>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body text="#0099FF" link="#00FFCC" vlink="#CC6633" alink="#66FF99" leftmargin="10%" topmargin="0px"  rightmargin="300">

<div style="width:100%">   <div style="background-color:#b5dcb3; width:100%">       
<center>
  <img src="assets/images/logo.jpg.png" width="100%" height="96" />
</center>
<div>
<center> <h2>STUDENT  INFORMATION  SYSTEM </h2></center>

<div class="SearchDIv"><form id="searchform" action="http://www.biharboard.ac.in" method="get" role="search"><input type="text" class="searchTxt" name="s" value="" placeholder="Search....." /> <a href="#" onClick="$('#searchform').submit();" class="searchBTN"><i class="fa fa-search"></i></a></form></div>
</div> 
<ul id="menu">
    <li><a href="index.php">Home</a></li>
    <li>
        <a href="#">COURSE OFFERED</a>
        <ul>
            <li><a href="course_details.php">Information Brouchure</a></li>
            <li><a href="enquiry_form.php">Enquiry Form</a></li>
            </ul>
    </li>
    <li>
        <a href="#">Student Section</a>
        <ul>
            <li><a href="application_form.php">Application Form</a></li>
            <li><a href="registration_form.php">Registration Form</a></li>
        </ul>
    </li>
    <li>
        <a href="#">INDUSTRIAL TRAINING</a>
        <ul>
            <li><a href="about_IT.php">About IT Industry</a></li>
            <li><a href="training_form.php">Training Form</a></li>
        </ul>
    </li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="admin_login.php">ADMIN LOGIN</a></li>
    <li><a href="contact_us.php">Contact Us</a></li>
</ul>
  
	
<div class="topNews"><h2>Latest News</h2>
    <marquee scrolldelay="2" scrollamount="2" onmouseout="this.start()" onmouseover="this.stop()" direction="left" class="topMarquee">
      <ul class="fa-ul"><li><i class="fa-li fa fa-check-square"></i>      
<a href="#">ccc result </a>&nbsp;<img src="./images2/newCircle.gif" alt=""></li>	 
  <li><i class="fa-li fa fa-check-square"></i><a href="#">summer training registration</a>&nbsp;<img src="./images2/newCircle.gif" alt=""></li>	
 <li><i class="fa-li fa fa-check-square"></i><a href="#">Provisinal Certificate of CCC</a>&nbsp;<img src="./images2/newCircle.gif" alt=""></li> 
      	 </ul>
    </marquee>
</div>
<div id="slideShowImages">
    <img src="images2/slide (1).jpg" alt="Slide 1" class="imgn1"/>
    <img src="images2/slide (2).jpg" alt="Slide 2" class="imgn1" />
	 <img src="images2/slide (3).jpg" alt="Slide 1" class="imgn1"/>
    <img src="images2/slide (4).jpg" alt="Slide 2" class="imgn1"/>
   
</div> 
<div id="adminlogin">
<h4 style="margin-bottom:10px"> Admin Panel</h4>
<form action="#" method="post" align="center" >
<div class="input-group margin-bottom-sm adminemail">
  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
  <input class="form-control" type="text" placeholder="Email address">
</div>
<div class="input-group adminemail">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" placeholder="Password">
</div>
<br/>
<p align="center">
<input type="submit" value="Submit" class="submit_btn"/>
<input type="reset" value="Reset" class="submit_btn"/></p>
</form>
<br/>
<p align="center"> <a href="#">forget user id ? </a><br/><br/> <a href="#">forget password ? </a><p>
</div> 
<script src="images2/slideShow.js"></script>
<!-- 
<div style="background-color:#ffffff; height:200px;width:350px;float:left;" >     <center>
  <p><img src="assets/images/biscomaun-tower.jpg" width="350" height="175"/></p>
  
</center>  
</div> -->
<style>
.leftdiv{
	width:25%;
	height:400px;
	float:left;
	border:2px solid red;
	margin-top:5px;
}
.centerdiv{
	width:48%;
	height:400px;
	float:left;
	border:2px solid red;
	margin-left:10px;
	margin-top:5px;
}
.rightdiv1{
	width:25%;
	height:400px;
	float:right;
	border:2px solid red;
	margin-top:5px;
	padding:0px;
	margin-bottom:0px;
}
.leftnews{
	margin-left:10px;
}
.newsmarquee1
{
	padding:3px;
	margin:0px;
	height:90%;
	
}
.imgaboutnielit
{
	float:left;
	//padding:0px 10px 5px 0px;
	margin-right:7px;
	margin-bottom:0px;
}
#divfooter
{
	//background:#B5DCB3;
	background:#B5DCB3;
	width:84.5%;
	color:black; 
	position:absolute;
	top:972px;
	right:96px;
}
#centerdiv,#leftdiv,#rightdiv{
padding-top:0px;

border-radius:10px 10px 5px 5px;
border-color:red;
border-width:2px;
border-style:solid;
overflow:hidden;
background:white;
}
div>h4{
padding:8px 0 5px 15px;
display:block;
background:#4bb362;
color:#fff;
font-size:20px;
margin-top:0px;
margin-bottom:0px;
padding-left:5px;
text-align:center;

}
</style> 

<div class="leftdiv" id="leftdiv">
<h4>Developed By</h4>
<div align="center" style="margin-top:2px;"><img src="images2/slide (2).jpg" height="80px" width="120px" style="border:2px solid lightgreen;"/></div>
   <h5 align="center">KUMARI VISHAKHA</h5>
<p align="center">Student of MCA Course
Patna Women's College, Patna</p>

<h4>Guided By</h4>
<div align="center" style="margin-top:2px;"><img src="images2/slide (2).jpg" height="80px" width="120px" style="border:2px solid lightgreen;"/></div>
<h5 align="center">SHIVENDRA KUMAR</h5>

<p align="center">NIELIT Patna Centre
Email Id :- shiv327@gmail.com</p>

</div>

<div class="centerdiv" id="centerdiv">
<h4>About NIELIT</h4>

<p align="justify" style="padding:5px 8px 5px 8px">
<img src="images2/slide (2).jpg" height="80px" width="80px" style="border:2px solid lightgreen;" class="imgaboutnielit"/>
NIELIT Centre, Patna was established in the year 2008 and operational from 11th floor, Biscomaun Tower, Gandhi Maidan, Patna, with an objective to co-ordinate the activities of the various NIELIT Centres in the Eastern Region and to undertake pro-active role for promotion of NIELIT activities in the region thereby, extending the access of NIELIT to promote knowledge and skill development in Information, Electronics and Communications Technology (IECT) at various levels which will meet the requirement of the industry, thereby making the overall development of the region specially in Bihar State.</p><p style="margin:0px 7px 0px 7px" align="justify"> NIELIT is one of the authorized examination agency under the National Digital Literacy Mission (NDLM), is also conducting Online examinations with biometric enabled Aadhaar authentication of candidates. </p>

<p align="right" style="padding:5px 8px 5px 8px;position:relative;top:35px;"><a href="">Read more Click Here....</a></p>
</div>
<div class="rightdiv1" id="rightdiv">
<h4>Events & Notifications</h4>
	<marquee direction="up" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" scrolldelay="2" class="newsmarquee1">
	<ul class="fa-ul">
	    <li><i class="fa-li fa fa-arrow-circle-right"></i><a href="">Final list of student for admission</a>&nbsp;<img src="./images2/newCircle.gif" alt=""></li><br/>
		<li><i class="fa-li fa fa-arrow-circle-right"></i> <a href="">Final list of student for ccc and php </a><img src="./images2/newCircle.gif" alt=""></li><br/>
		<li><i class="fa-li fa fa-arrow-circle-right"></i><a href="">Final list of student </a></li><br/>
		<li><i class="fa-li fa fa-arrow-circle-right"></i><a href="">Final list of student </a></li><br/>
		</ul>
	
	</marquee>
</div>

   <div id="divfooter"> 
   <center><p>Nielit © Copyright 2016</p>
   
<p><small><b>Follow Us On : </b> </small></p>
<a href="http://www.facebook.com/nielit"/><img src="assets/images/facebook.jpg" width="30" height="30"/></a>
<a href="http://www.twitter.com/nielit"/><img src="assets/images/twitter.jpg" width="30" height="30" /></a>
<a href="http://www.linked.in/nielit"/><img src="assets/images/linkedin.jpg" width="30" height="30" /></a>
<a href="http://www.googleplus.com/nielit"/><img src="assets/images/Google_plus.jpg" width="30" height="30" /></a>
<a href="http://www.googleplus.com/nielit"/><img src="assets/images/rss.jpg" width="30" height="30" ></a>
<p>No. of visitor: <b>125634   </b></p>
<br/></center>
   </div>
   
</body>
</html>
