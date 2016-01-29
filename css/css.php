<?php
/**
 * css.php
 * 
 * This file contains all of our styles :D
 * @author SteamFriends Development Team
 * @version 1.0.0
 * @copyright SteamFriends (www.steamfriends.com)
 * @package SourceBans
 * @link http://www.sourcebans.net
 */

if(isset($_SERVER['HTTP_USER_AGENT']) && !empty($_SERVER['HTTP_USER_AGENT'])) { 
	if(strstr($_SERVER['HTTP_USER_AGENT'], "MSIE 6.0")) { 
		$agent = "IE6"; 
	} elseif(strstr($_SERVER['HTTP_USER_AGENT'], "MSIE 7.0")) { 
		$agent = "IE7"; 
	} elseif(strstr($_SERVER['HTTP_USER_AGENT'], "Firefox/2")) { 
		$agent = "FF2"; 
	} elseif(strstr($_SERVER['HTTP_USER_AGENT'], "Firefox/1")) { 
		$agent = "FF1"; 
	} else { 
		$agent = "other"; 
	} 
} else { 
	$agent = 'other'; 
} 

header('Content-type: text/css'); 
?> 

@font-face {
    font-family: tf2;
    src: url(../css/tf2build.ttf);
}

@font-face {
    font-family: danub;
    src: url(../css/DANUB___.TTF);
}

@font-face {
    font-family: danube;
    src: url(../css/DANUBE__.TTF);
}

body { 
	margin: 0px;
	padding: 0px; /* required for Opera to have 0 margin */
    background-image: url("http://csarenasi.com/forum/images/tg/bg/tf2.jpg");
    background-attachment: fixed;
    background-position: center top;
	background-repeat: no-repeat;
    background-size: cover;
    color: #F9F9F9;
    text-align: center;
    line-height: 1.4;
    font-family: "pt_sansregular",Tahoma,Verdana,Arial,sans-serif;
    font-size: 13px;
    overflow-y: scroll;
	height: auto;
	width: 100%;
}
		
a:link {
  text-decoration: none;
  color : #3498db;
}

a:active {
  color: #329FCF;
}

a:visited {
  text-decoration: none;
  color : #2980b9;
}

a:hover {
  color: #1abc9c;
}

.inputbox {
	border: 1px solid #000000;
	width: 105px; 
	font-size: 14px; 
	background-color: rgb(215, 215, 215);
	width: 200px;
	padding-left: 2px;
}

.dbg.b {
	font-size: 12px;
	font-weight: bold;
}
/** ================ Permissions ================ **/	
	
.tablerow1 {
background-color: #181818;
padding:6px;
}

.tablerow2 {
background-color: #e74c3c;
border-color: #181818;
border-style:solid;
border-width:1px;
padding:6px;
}

.tablerow4 {
background-color: #3498db;
padding: 5px;
color: #FFF;
border: 1px dashed #2980b9;
}

/* =============== FORMS ==================== */

.badentry{
 	color:#CC0000;
 	width:195px;
 	display:none;
}

/* ================ Popup Boxes ============== */
.dialog-holder{
	border-collapse:collapse;
	margin:auto;
	table-layout:fixed;
	width:465px;
}

td.dialog-topleft{
	background-image:url(../images/dialog/dialog_topleft.png) !important;
}
td.dialog-border{
	background-image:url(../images/dialog/dialog_border.png) !important;
}
td.dialog-topright{
	background-image:url(../images/dialog/dialog_topright.png) !important;
}
td.dialog-bottomright{
	background-image:url(../images/dialog/dialog_bottomright.png) !important;
}
td.dialog-bottomleft{
	background-image:url(../images/dialog/dialog_bottomleft.png) !important;
}

td.dialog-topleft, td.dialog-topright, td.dialog-bottomright, td.dialog-bottomleft {
	height:10px;
	overflow:hidden;
	padding:0px !important;
	width:10px !important;
}

h2{
	color:white;
	font-size:14px;
	font-weight:bold;
	margin:0px;
	display:block;
	padding:4px 10px 5px;
}

h2.error{
	background:#e74c3c none repeat scroll 0%;
	border:1px solid #c0392b;
}

h2.info{
	background:#3498db none repeat scroll 0%;
	border:1px solid #2980b9;
}

h2.warning{
	background:#e67e22 none repeat scroll 0%;
	border:1px solid #d35400;
}

h2.ok{
	background:rgb(52, 73, 94) none repeat scroll 0%;
	border:1px dashed #2c3e50;
}


.icon-ok{
	background-image:url(../images/ok.png);
	float:left;
	height:48px;
	overflow:hidden;
	padding:0px !important;
	width:48px !important;
}
.icon-error{
	background-image:url(../images/warning.png);
	float:left;
	height:48px;
	overflow:hidden;
	padding:0px !important;
	width:48px !important;
}
.icon-warning{
	background-image:url(../images/warning.png);
	float:left;
	height:48px;
	overflow:hidden;
	padding:0px !important;
	width:48px !important;
}
.icon-info{
	background-image:url(../images/info.png);
	float:left;
	height:48px;
	overflow:hidden;
	padding:0px !important;
	width:48px !important;
}


.dialog-content{
	background:rgb(44, 62, 80) none repeat scroll 0%;
	border-color:#555555;
	border-style:solid;
	border-width:0px 0px 1px 0px;
}
div.dialog-body{
	border-bottom:1px solid #7f8c8d;
	padding:10px;
}
div.dialog-control{
	background:rgb(52, 73, 94) none repeat scroll 0%;
	padding:8px;
	text-align:right;
	vertical-align:bottom
}

.clearfix:after {
    content: "."; 
    display: block; 
    height: 0; 
    clear: both; 
    visibility: hidden;
}

.clearfix {display: inline-block;}

/* ================ STRUCTURE ================ */

#mainwrapper {
	width: 984px;
	margin: 0 auto 0 auto;  /*centers the box, no matter the overall width */
	text-align: left; /* re_aligns text to left second part of two part MSIE centering workaround */
	height: auto;
}

#header {
	width: 984px;
	margin: 0 auto 0 auto;  /*centers the box, no matter the overall width */
	height: 210px;
	border: 0;
}
	
#tabsWrapper {
  width: 100%;
  margin: 0 auto;
  text-align: left;
  height: 50px;
  background-color: #222222;
  top:0;
  position:fixed;
  z-index:9999;
}
.tabsWrapper li {
  display: inline-block;
  position: relative;
  z-index: 100;
}

.tabsWrapper li:first-child { margin-left: 0; }

.tabsWrapper li a {
  text-decoration: none;
  padding: 0px 15px;
  display: block;
  color: #fff;
  transition: all 0.2s ease-in-out 0s;
}
.tabsWrapper li a:hover,
.tabsWrapper li:hover>a {
  color: #fff;
  background: #277090;
}
#innerwrapper {
	text-align: left; /* re_aligns text to left, second part of two part MSIE centering workaround */
	background: rgb(24, 24, 24) none repeat scroll 0% 0%;
        padding: 20px;
	border-radius: 2px;
        border: 3px solid #222222;
	}
#navigation {
	width: 100%;
	height: 22px;
	}
	
#breadcrumb {
	width: 75em;
    font-size: 12px;
    text-transform: uppercase;
    margin-bottom: 10px;
	background: #1D1D1D none repeat scroll 0% 0%;
    border-bottom: 1px solid #242424;
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    padding: 0px 20px;
    height: 40px;
    line-height: 40px;
    display: inline-block;
}

#content_title {
	font-size: 26px;
	color: #4d4742;
	margin-bottom: 10px;
}
	
#content {
	height: 100%;
	overflow:hidden;
        width: 100%;
	}
	
#footer {
color: #919191;
background-color: #131313;
padding: 20px 0px;
bottom: 0px;
position: relative;
margin-top: 40px;
opacity: 0.9;
font-family: Bangers;
font-size: 17px;
}

/** ================ Header ================ **/

#head-logo {
	float: left;
	margin-top: 70px;
}

.searchbox {
    width: 200px; 
    padding: 9px 6px 12px 6px;
    background-color: #DADFE1; 
    color: #34495E;
    border:0;
    margin-bottom: 5px;
}

/** ================ Tabs ================ **/

#tabs {
  float: left;
  width: 100%;
  margin-left: 0;
}

#tabs ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

#tabs ul li {
  float: left;
}

#tabs ul li a {
  border: 0;
  display: block;
  padding: 0 16px;
  text-align: center;
  color: #eee;
  font-size: 11px;
  font-weight: bolder;
  line-height: 50px;
  text-decoration: none;
  text-transform: uppercase;
  transition: all 0.2s ease-in-out 0s;
}

#tabs ul li a:hover {
  border: 0;
  color: #fff;
  background-color: #277090;
}

#tabs ul li.active {
}

#tabs ul li.active a {
  /* padding: 0.1em 0.6em; */
  padding: 0 16px;
  color: white;
  background-color: #329FCF;
}

#tabs ul li.active a:hover {
  color: white;
  text-decoration: none;
}

h4 {
	margin:0px;
}

h3 {
	margin-bottom:5px;
	font-size: 12px;
	padding: 15px;
	font-weight: bold;
	background-color: #2ecc71;
	color: #ECF0F1;
}
/** ================ ToolTips ================ **/
.tool-tip {
	color: #fff;
	width: 139px;
	z-index: 13000;
	text-align:left;
}
 
.tool-title {
	font-weight: bold;
	font-size: 14px;
	margin: 0;
	color: #DADFE1;
	/*text-decoration:underline;*/
	border-bottom: #DADFE1 dotted 1px;
	padding: 8px 8px 4px;
	background-color: rgba(108, 122, 137, 0.7);
}
 
.tool-text {
	font-size: 11px;
	padding: 4px 8px 8px;
	background-color: rgba(108, 122, 137, 0.7);
}
.perm-tip {
	color: #fff;
	width: 210px;
	z-index: 13000;
	text-align:left;
}
 
.perm-title {
	font-weight: bold;
	font-size: 14px;
	margin: 0;
	color: #DADFE1;
	/*text-decoration:underline;*/
	border-bottom: #DADFE1 dotted 1px;
	padding: 8px 8px 4px;
	background: url(../images/tooltip_sqr.png) top left;
}
 
.perm-text {
	font-size: 11px;
	padding: 4px 8px 8px;
	background: url(../images/tooltip_sqr.png) bottom right;
}
/** ================ Navigation ================ **/

#nav {
    font-family: tf2;
    position: absolute;
    top: 10px;
	color: #2A2723;
	float: left;
	width: 74%;
	font-size: 13px;
	transition: all 0.5s ease;
	}

a.nav_link:link,
a.nav_link:visited {
	color: #2A2723;
	text-decoration: none;
	padding: 0 5px;
	}

a.nav_link:hover {
	}

#nav a:hover, #nav a.first:hover {
	color : #666666; 
	text-decoration: none;
	transition: all 0.5s ease;
}
#nav a {
	color: #2A2723;
}
#nav a.first {
    border-left: 0px none;
}

#nav a.active {
    color: #666666;
}

#search {
	padding: 2px 0 0 0;
	text-align: right;
	position: relative;
	right: -684px;
	top: -156px;
	width: 276px;
}

#searchbtn{
	width: 100%;
	padding: 8px 12px;
	border-radius: 0;
	font-size: 14px;
	text-transform: uppercase;
}

.button {
	border: 0;
	width: 60px;
	height: 38px;
	color: #DADFE1;
	background-color: #329FCF;
	font-weight: bold;
    text-transform: uppercase;
    font-size: 11px;
}

/** ================ Content ================ **/
/* Buttons
.btn{
	background-color: #e9e9e9;
	background-repeat: no-repeat;
	background-position: 2px 50%;
	padding:1px 1px 1px 20px;
	font-weight: bold;
	margin: 0 0.5em;
} */

.btn{
   font-family: Verdana, Arial, Tahoma, Trebuchet MS, Sans-Serif, Georgia, Courier, Times New Roman, Serif;
   font-weight:400;
   font-size: 13px;
   color: #fff;
   border:1px solid;
   border-radius: 3px;
   padding:6px 12px;
   transition: all 0.5s ease;
}

.btnhvr{
   color: #fff;
   font-family: Verdana, Arial, Tahoma, Trebuchet MS, Sans-Serif, Georgia, Courier, Times New Roman, Serif;
   font-weight: 400;
   border: 1px solid;
   border-radius: 3px;
   padding: 6px 12px;
   transition: all 0.5s ease;
}

.game{
	background-color: #8CC152;
	border-color: #8CC152;
}
.game:hover {
	background-color: #A0D468;
	border-color: #A0D468;
}
.ok{
    background-color: #2ecc71;
    border-color: #27ae60;
}
.ok:hover {
    background-color: #27ae60;
    border-color: #2ecc71;
}
.save{
    background-color: #7D4071;
    border: 1px solid #7D4071;
}
.cancel{
    background-color: #CF7336;
    border: 1px solid #CF7336;
}
.login{
	width: 100%;
	text-transform: uppercase;
}
.refresh{
	background-color: #3BAFDA;
	border-color: #3BAFDA;
}
.refresh:hover {
	background-color: #4FC1E9;
	border-color: #4FC1E9;
}

.msg-button {
	float:right;
	position:absolute;
	top:85px;
	left:480px;
}
.msgbox-border {
	position:fixed !important;
	position:absolute;
	overflow:hidden;
	top:250px;
<?php 
if($agent != "IE6") { 
	echo "background: url(../images/msg-bubble.png) no-repeat center;"; 
} 
?>
	padding:15px;
	margin: auto 210px;
	width: 520px;
}
#msg-red {
	background-color:#fefad3;
	border:#E80909 1px solid;
	color:#E80909;
	width: 500px;
	padding: 8px;
	height: 75px;
	overflow:hidden;
}

#msg-red-debug {
	background-color: #ffdd87;
	border: 1px solid #ffce54;
	color: #8a6d3b;
	width: 100%;
	padding: 8px;
	margin: 10px auto;
	overflow: hidden;
}

#msg-blue-debug {
	background-color: #7cd1ef;
	border: 1px solid #4fc1e9;
	color: #31708f;
	width: 100%;
	padding: 8px;
	margin: 10px auto;
	overflow: hidden;
}

#msg-red b, #msg-green b, #msg-blue b, #msg-red-debug b,#msg-blue-debug b, #msg-green-debug b {
	font-size: 16px;
}
#msg-red i, #msg-blue i, #msg-green i, #msg-red-debug i, #msg-blue-debug i, #msg-green-dbg i {
	float:left;
	margin-right: 7px;
}
#msg-green {
	background-color:#fcf7c9;
	border:#339933 1px solid;
	color:#339933;
	width: 500px;
	padding: 8px;
	height: 75px;
	overflow:hidden;
}

#msg-green-dbg {
	background-color:#fcf7c9;
	border:#339933 1px dotted;
	color:#339933;
	width: 75%;
	padding: 8px;
	margin: 10px auto;
	overflow:hidden;
}

#msg-blue {
	background-color:#fcf7c9;
	border:#0066FF 1px solid;
	color:#0066FF;
	width: 500px;
	padding: 8px;
	height: 75px;
	overflow:hidden;
}
#log_res {
	overflow: auto;
}
 

.front-module-line {
background-color: #7f8c8d;
color: #fff;
}

}

/** ================ Login ================ **/

#login {
	width: 305px;
	height: 260px;
	background-color: #e0e0e0;
    margin: 30px auto;
	padding: 12px;
}

#lostpassword {
	width: 305px;
    margin: 30px auto;
	padding: 12px;
	background-color: #e0e0e0;
}

	
#loginLogo {
	text-align: center;
	height: 60px;
}
	
#loginUsernameDiv,
#loginPasswordDiv,
#loginRememberMeDiv,
#loginSubmit {
	padding: 6px 0;
}


.loginmedium {
	width: 278px;
	padding: 6px 12px;
	font-size: 18px;
	border: 1px solid #ccc;
	border-radius: 3px;
	}

	
#loginSubmit {
	text-align: right;
}
	
#loginbutton {
	padding: 5px 10px;
	font-size: 14px;
	background-color: #000;
	border: 2px outset #999;
	color: #FFF;
	font-weight: 700;
}
	
#loginOtherlinks {
	border-top: 1px solid #aaa9a9;
	text-align: center;
	padding: 8px 0;
	margin-top: 26px;
}



/** ================ Admin ================ **/
/* Admin table */
.rowdesc {
	color:#329FCF;
	font-weight:bold;
}

/* CPanel */
#cpanel {
	width: 100%;
	height: 120px;
	background-color: #222222;
	}

#cpanel ul {
  margin: 0;
  padding-top: 10px;
  list-style: none;
}

#cpanel ul li {
  margin-right: 2px;
  float: left;
  text-align: center;
}

#cpanel ul li a {
	display: block;
	height: 97px !important;
	height: 100px; 
	width: 108px !important;
	width: 110px; 
	vertical-align: middle; 
	text-decoration: none;
	padding: 2px 5px 1px 5px;
	margin-right: 20px;
}

#cpanel ul li a:hover {
	color : #2980b9; 
	padding: 3px 4px 0px 6px;
	text-decoration: none
}

#cpanel ul li.active {
}

#cpanel ul li img {
	margin-top: 13px;
	}

/* Admin Page Menu */

#admin-page-menu {
	width: 20%;
	float: left;
	}
	
#admin-page-menu ul {
  margin: 0;
  padding: 0 0px;
  list-style: none;
}

#admin-page-menu ul li {
  text-align: left;
}

#admin-page-menu ul .active
{
	font-weight: bold;
}

#admin-page-menu ul li a 
{
        display: block;
        height: 30px;
        text-decoration: none;
        padding: 9px 0px 3px 8px;
        background-color: #1A171B;
        color: #FFF;
        border: 1px dashed #101010;
        border-radius: 2px;
}

#admin-page-menu ul li a .tab-img {
	vertical-align:baseline;
	border:none;
}

#admin-page-menu ul li a:hover {
	color : #fff; 
	background-color: #2c3e50;
	border: 0;
	padding: 9px 0px 3px 8px;
        border: 1px dashed #2c3e50;
        border-radius: 2px;
}

#admin-page-menu ul li.active a:hover  {
	color : #fff; 
	background-color: #3D556D;  
	border: 0;
	padding: 9px 0px 3px 8px;
        border: 1px dashed #3D556D;
        border-radius: 2px;
}

#admin-page-menu ul li.active {
}

/* Admin Page Content */

#admin-page-content {
	width: 75%;
	float: right;
	background-color: #222222;
	padding: 10px;
	}
	
/** ================ Permissions ================ **/
#permis-drop{
	width: 676px;
	float: right;
	height: 100%;
	border: 1px solid #2c3e50;
	overflow:hidden;
	padding:7px;
	margin: 0 auto 0 auto;
}
.permis-container {
	width: 690px;
	float: none;
	
	height: 100%;
	overflow:hidden;
}

.permis-container ul {
  margin: 0;
  padding: 10px;
  list-style: none;
}

.permis-container ul li {
  margin-right: 2px;
  float: left;
  text-align: center;
}

.permis-container ul li a {

	display: block;
	height: 37px; 
	width: 100px; 
	vertical-align: middle; 
	text-decoration: none;
	border: 1px solid #DDD;
	padding: 7px 5px 1px 5px;
	margin-right: 20px;
	margin-bottom:20px;
}
.permis-container ul li a:hover {
	color : #333; 
	background-color: #f1e8e6;  
	border: 1px solid #c24733;
	padding: 8px 4px 0px 6px; 
	cursor:move;
}

/** ================ Frontpage ================ **/

#front-introduction {
	padding: 5px;
}

#front-servers {
	margin-bottom: 30px;
}
	
#front-servers hr {
	border: 1px solid #DDD;
	margin-bottom: 5px;
	}
	
.front-module {
	width: 410px;
}
.front-module-intro {
	margin: 11px;
}
	
.fmsd {
	font-size: 10px;
	}

/** ================ Submit ================ **/	

#submit-main {
	background-color: #e0e0e0;
	padding: 10px;
	}
	
.faux-button {
	padding: 2px 10px;
	font-size: 11px;
	background-color: #d7d8d8;
	border: 2px outset #999;
	color: #b80202;
	border: 1px solid #aaa9a9;
	font-weight: 600;
	letter-spacing: 1px;
	}
		
.mandatory {
	color:#FF0000;
	}
	
/** ================ Servers ================ **/

#servers {
	width: 850px;
	padding: 5px;
	border: 1px solid #DDD;
	border-top: 2px solid #aaa9a9;
	}
	
#singleserver {
	width: 500px;
	padding: 5px;
	border: 1px solid #DDD;
	border-top: 2px solid #aaa9a9;
	float: left;
	}
#singleoverview {
	width: 350px;
	padding: 5px;
	border: 1px solid #DDD;
	border-top: 2px solid #aaa9a9;
	float: right;
	}

.activeplayer {
	border-bottom: 1px solid #DDD;
	border-top: 1px solid #DDD;
	background-color: #181818;
	}
	
/** ================ Banlist ================ **/
	
.tbl_hover {
	cursor: pointer; 
	background-color: #181818;
}
.tbl_out {
	background-color: #fff;
}

table.listtable {
 font-family: "pt_sansregular",Tahoma,Verdana,Arial,sans-serif;
 font-size: 10px;
 border: 1px solid;
 border-color: transparent;
 border-collapse:collapse;
 margin-bottom: 5px;
 margin-top: 1px;
}

table.listtable2 {
 font-family: "pt_sansregular",Tahoma,Verdana,Arial,sans-serif;
 font-size: 10px;
 color: #000000;
 border: #c5c5c5 solid;
 border-width : 1px 1px 1px 1px;
}

table.listtable3 {
 font-family: "pt_sansregular",Tahoma,Verdana,Arial,sans-serif;
 font-size: 11px;
 color: #000000;
 border: #c5c5c5 solid;
 border-width : 0px 0px 0px 0px;
}

td.listtable_top {
 font-size: 11px;
 font-weight: bold;
 background: #329FCF none repeat scroll 0% 0%;
 padding: 3px 10px 3px 10px;
 color: #e6e6e6;
 height: 30px;
 text-transform: uppercase;
}

a.listtable_top {
	color: #fff;
}


td.listtable_1 {
 font-family: "pt_sansregular",Tahoma,Verdana,Arial,sans-serif;
 font-size: 10px;
 padding-top: 4px;
 padding-right: 4px;
 padding-bottom: 4px;
 padding-left: 4px;
 background-color: #222222;
}

td.listtable_1_unbanned {
 font-family: "pt_sansregular",Tahoma,Verdana,Arial,sans-serif;
 font-size: 10px;
 padding-top: 4px;
 padding-right: 4px;
 padding-bottom: 4px;
 padding-left: 4px;
 background-color: #9b59b6;
}

td.listtable_1_permanent {
 font-family: "pt_sansregular",Tahoma,Verdana,Arial,sans-serif;
 font-size: 10px;
 padding-top: 4px;
 padding-right: 4px;
 padding-bottom: 4px;
 padding-left: 4px;
 background-color: #e74c3c;
}

td.listtable_1_banned {
 font-family: "pt_sansregular",Tahoma,Verdana,Arial,sans-serif;
 font-size: 10px;
 padding-top: 4px;
 padding-right: 4px;
 padding-bottom: 4px;
 padding-left: 4px;
 background-color: #7f8c8d;
}

td.listtable_2 {
    font-family: "pt_sansregular",Tahoma,Verdana,Arial,sans-serif;
    font-size: 10px;
    border-width: 1px;
    padding-top: 2px;
    padding-right: 4px;
    padding-bottom: 2px;
    padding-left: 4px;
    background-color: #2c3e50;
    box-shadow: inset 6px 6px 3px -5px rgba(0,0,0,1);
    border-bottom: 2px dashed #34495E;
    border-left: 2px dashed #34495E;
    border-right: 3px dashed #34495E;
}

.ban-edit {
	padding: 5px;
	}
	
.ban-edit ul {
  margin: 0;
  padding: 0 10px;
  list-style: none;
}

.ban-edit ul li {
  text-align: left;
}

.ban-edit li a {
	display: block;
	height: 20px;
	text-decoration : none;
	border-bottom: 1px solid #DDD;
	padding: 2px 5px 1px 5px;
}

.ban-edit ul li a:hover {
	color : #333; 
	padding: 3px 4px 0px 6px; 
}

#banlisttitle {
	width: 50%;
	float: left;
}
	
#banlist-nav {
	width: 60%;
	float: right;
	text-align: right;
        margin-right: 5px;
}
	
#banlist {
	width: 100%;
	float:left;
	margin-top: 10px;
}
	
	
/** ================ Theme Page CSS ================ **/
#current-theme-holder {
	height: 235px;
	background: #181818;
	padding: 5px;
}

.largetitle {
	font-size: 18px;
	border-bottom: 1px dotted #cdcdcd;
	line-height: 20px;
}
#current-theme-holder b {
	font-size: 16px;
	border-bottom: 1px dotted #cdcdcd;
}

#current-theme-screenshot {
	width: 250px;
	float: left;
	border: 3px solid #ccc;
	clear: none;
	margin-top: 10px;
}

#current-theme-details {
	width: 370px;
	float: right;
	clear: none;
	margin-top: 10px;
}


#theme-list ul {
  margin: 2px;
  padding: 0 10px;
  list-style: none;
}

#theme-list ul li {
  text-align: left;
  margin: 3px;
}

#theme-list ul .active
{
	color : #333;
	font-weight: bold;
}

#theme-list ul li a {
	display: block;
	height: 20px;
	text-decoration : none;
	border-left: 5px solid #CCC;
	padding: 2px 5px 1px 5px;
}

#theme-list ul li a .tab-img {
	vertical-align:baseline;
	border:none;
}

#theme-list ul li a:hover {
	color : #333; 
	border-left: 5px solid #c24733;
	padding: 2px 5px 1px 5px;
}

#theme-list ul li.active a:hover  {
	color : #333; 
	background-color: #f1e8e6;  
	border: 1px solid #c24733;
	border-left: 5px solid #c24733;
	background-image: url(../images/admin/rightarrow.png);
	background-position: center right;
	background-repeat: no-repeat;
	padding: 2px 5px 1px 5px;
}

/** ======= Context Menu Styles ======= **/

div.contextmenu {
	position: absolute;
	top: 0;
	left: 0;
	font-family: Verdana, Arial, Tahoma, Trebuchet MS, Sans-Serif, Georgia, Courier, Times New Roman, Serif;
	background-color: #eaeaea;
	border: 1px solid #dddddd;
	border-left: 5px solid #dddddd;
}
div.contextmenu a {
	display: block;
	text-decoration: none;
	cursor: default;
	outline: none;
	font-size: 11px;
}
div.contextmenu .separator {
	height: 1px;
	padding: 0;
	overflow: hidden;
}

.contextmenu {
	width: 12em;
	/*background: #F4F5EB;*/
	border-top: 1px solid #ddd;
	/*border-left: 1px solid #ddd;*/
	border-right: 1px solid #666;
	border-bottom: 1px solid #666;
	padding: 2px 0;
}
.contextmenu a {
	color: #555;
	padding: 4px 15px;
	margin: 0 2px;
}
.contextmenu a:hover {
	background-color: #F4F5EB;
}
.contextmenu a.disabled {
	color: #bbb;
}
.contextmenu a.disabled:hover {
	background: #F4F5EB;
	color: #bbb;
}
.contextmenu .separator {
	border-bottom: 1px solid #fff;
	background: #999;
	margin: 4px 4px;
}
.contextmenu .head {
 font-size: 12px;
 background-color: #DFE3E9;
 padding-top: 4px;
 padding-right: 5px;
 padding-bottom: 3px;
 padding-left: 5px;
 color: #fff;
 background-image: url(../images/detail_head.gif);
}

.select {
    padding: 5px;
    margin: 0;
    border: 1px solid #ccc;
    width: 120px;
    border-radius: 3px;
    overflow: hidden;
    background-color: #fff;
}

.select select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background-color: transparent;
    background-image: none;
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
}

.select select:focus {
    outline: none;
}

.textbox {
	background: #fff;
	font-size: 13px;
	padding: 6px 12px;
	border: 1px solid #ccc;
	border-radius: 3px;
}

.file {
	background: #ecf0f1;
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 3px;
}

.user {
	color: #eee;
	float: right;
	margin-top: 15px;
	margin-right: 15px;
}

.user a:visited, .user a:link, .user a:hover {
	color: #bd754b;
}

.front-module-header {
	margin-bottom: 3px;
	font-size: 12px;
	font-weight: 600;
}

hr {
	border: 1px solid #7F8C8D;
}
#dots {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('http://www.uiueux.com/wp/flowfolio/wp-content/themes/flowfolio/img/bg_mask.png');
    z-index: 1;
}


}
/*BG DropDown**/

:root .css3-metro-dropdown option,
:root .css3-metro-dropdown:after,
:root .css3-metro-dropdown::after,
:root .css3-metro-dropdown select
{
    color: #fff;

}

:root .css3-metro-dropdown select,
:root .css3-metro-dropdown:after,
:root .css3-metro-dropdown::after
{
    display: block;
    background: #303030;
}

:root .css3-metro-dropdown select,
:root .css3-metro-dropdown option
{
    padding: 8px 10px 8px 8px;
}

:root .css3-metro-dropdown
{
    position: relative;
    display: inline-block;
    border: 0;
}

:root .css3-metro-dropdown::after
{
    content: "\25bc";
    position: absolute;
    top: 0;
    right: 0;
    display: block;
    width: 32px;
    font-size: 12px;
    line-height: 34px;
    text-align: center;
    
    -webkit-pointer-events: none;
    -moz-pointer-events: none;
    pointer-events: none;
}

:root .css3-metro-dropdown select
{
   height: 34px;
   border: 0;
   vertical-align: middle;
   font: normal 12px/14px "Segoe UI", Arial, Helvetica, Sans-serif;
   outline: 0 none;
   color:#ffffff;
}

:root .css3-metro-dropdown option
{
    background: #fff;
    color: #333;
}

/* more colors */
:root .css3-metro-dropdown-color-ff1d77 select,
:root .css3-metro-dropdown-color-ff1d77:after,
:root .css3-metro-dropdown-color-ff1d77::after
{
    background: #ff1d77;
}

:root .css3-metro-dropdown-color-2673ec select,
:root .css3-metro-dropdown-color-2673ec:after,
:root .css3-metro-dropdown-color-2673ec::after
{
    background: #2673ec;
}

:root .css3-metro-dropdown-color-ff2e12 select,
:root .css3-metro-dropdown-color-ff2e12:after,
:root .css3-metro-dropdown-color-ff2e12::after
{
    background: #ff2e12;
}
