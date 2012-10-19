
<?php

$w     = $_GET["w"];  
$h     = $_GET["h"];  

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Electro Magnetic Theory</title>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript"> 

 var myWidth = 0;
 var myHeight = 0;
function panel1()
{
	    $(".panel1").slideToggle("slow");
}
function panel2()
{
	    $(".panel2").slideToggle("slow");
}
function panel3()
{
	    $(".panel3").slideToggle("slow");
}
function w_window_size() {

  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
return myWidth;
}
function h_window_size() {

  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
return myHeight;
}

function reload_page()
{
	var url = window.location.href;
	var w = w_window_size();
	var h = h_window_size();
	h = h-70;
	w = w-50;
	var str = url + "?&w=" + w;
	str = str + "&h=" + h;
	window.location.href = str;

}
</script>


<style type="text/css">

div.flip 
{
	
}
div.panel1
{
	display:none;
}
.tmp
{
}
div.panel2
{
	height:270px;
	display:none;
}
div.panel3
{
	height:330px;
	display:none;
}


<!--
-->
</style>
<style type="text/css">@import "css/flexnav.css";</style>

<script type="text/javascript" src="js/beethoven.js"></script>
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/my.css" rel="stylesheet" type="text/css">

<style type="text/css">
.top{
margin-top: 0px;
}
</style>

<script type="text/javascript" src="ddtabmenufiles/ddtabmenu.js">
window_size();
document.write("dsbdsjhbdjhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh");
</script>

<link rel="stylesheet" type="text/css" href="ddtabmenufiles/glowtabs.css" />



</head>

<body bgcolor="#FFFFFF">
<div style="position: relative; margin:auto; background-color:#e3f2fc"><br/>

<div style="font-size:23px;margin-left:505px"><p style="color:#B0171F">Coulomb's Law  </p> </div>
<hr>
<hr>
</div>
 <div id="no_print">
<?php
if($w == 0)
{
	echo "gggggggggggggggggggggggggggggggggggg";
	echo "<script type='text/javascript'>reload_page();</script>";
}
?>
</div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; ">
        <div id="contentBox" style=" padding:0px; background-color:#e3f2fc">

<i><p align="center" style="font-family:serif;font-size:17px;color:green">The following video shows you more details on how to do experiment by changing various parameters</p></i>
<p style="margin-left:30px">

<script type="text/javascript">
window_size();
</script>

<?php

echo "<OBJECT classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0\" \" id=\"man.swf\" width=\"".$w."\" height=\"".$h."\">
<PARAM NAME=movie VALUE=\"12.swf\"> <PARAM NAME=quality VALUE=high> <EMBED src=\"12.swf\" quality=high \" NAME=\"man.swf\" width=\"".$w."\" height=\"".$h."\" TYPE=\"application/x-shockwave-flash\" PLUGINSPAGE=\"http://www.macromedia.com/go/getflashplayer backgroung-color:black\"></EMBED> </OBJECT>";

?>
</p>
     
  </div>
</div>


</body>
</html>

