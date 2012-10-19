<!DOCTYPE HTML>
<html>
<head>
<title>Electro Magnetic Theory</title>

<script>


//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");

   //produce output in textarea.
  document.quiz.output.value +=
     "You got " + numCorrect + " out of 5 questions correct.\n" +
     "The correct answers are highlighted." 
}
</script>






<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript"> 
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

</script>

<link rel="stylesheet" type="text/css" href="ddtabmenufiles/glowtabs.css" />



</head>

<body bgcolor="#FFFFFF">
<div id="header_main"><img src="" align="right" style="padding-right:20px"></div>
 <div id="no_print">
<!-- start header -->
<div id="header">
         <ul id="menuTop">

<li><a href="index.php" target="_self">Home</a></li><li><a href="#" target="_self">FAQ</a></li><li><a href="aboutus.php" target="_self">Contact us</a></li><li><a href="http://vlab.co.in" target="_self">Vlab.co.in</a></li>
        </ul>

</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#e3f2fc"><br/>

<div style="font-size:23px;margin-left:420px"><p style="color:green">Pre-Quiz  </p> </div>
</div>
 <div id="no_print">

</div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width:1024px;">
        <div id="contentBox" style=" padding:0px; padding-left:50px; padding-right:50px;background-color:#e3f2fc">


<br>

<form name="quiz">
<font size="3">
<ol>
<li><b>Dielectrics are normally used in ___</b><br>
   <span id="correct1"><input type="radio" name="q1" value="correct"> capacitors</span><br>
   <input type="radio" name="q1" value="wrong"> inductors<br>
   <input type="radio" name="q1" value="wrong"> resistors<br>
   <input type="radio" name="q1" value="wrong"> none of the above<br>

</li><br />
<hr><br />

<li><b> &epsilon;<sub>0</sub> and &chi;<sub>e</sub> are dimensionless. ___</b><br>
   <input type="radio" name="q2" value="wrong"> True<br>
   <span id="correct2"><input type="radio" name="q2" value="correct"> False</span><br>
   <input type="radio" name="q2" value="wrong">only &epsilon;<sub>0</sub>  is dimensionless<br>
   <input type="radio" name="q2" value="wrong">only &chi;<sub>e</sub> is dimensionless<br>

</li><br />
<hr><br />

<li><b> The electric field inside a sphere conductor is : ___</b><br>
   <input type="radio" name="q3" value="wrong"> depend on the charge of sphere<br>
   <span id="correct3"><input type="radio" name="q3" value="correct"> always zero irrespective of charge</span><br>
   <input type="radio" name="q3" value="wrong"> is zero only on the surface <br>
   <input type="radio" name="q3" value="wrong"> none of the above <br>

</li><br />
<hr><br />
<li><b>  A dielectric placed in between the plates of a capacitor ___</b><br>
   <span id="correct4"><input type="radio" name="q4" value="correct"> increases capcitance</span><br>
   <input type="radio" name="q4" value="wrong"> decreases capacitance<br>
   <input type="radio" name="q4" value="wrong"> no change in capacitance <br>
   <input type="radio" name="q4" value="wrong"> none of the above<br>
</li><br />
<li><b>  If a charge +q is given to a neutral spherical conductor, it will ___</b><br>
   <input type="radio" name="q5" value="wrong"> concentrate on one spot<br>
   <input type="radio" name="q5" value="wrong"> depends on the space of conductor <br>
   <span id="correct5"><input type="radio" name="q5" value="correct"> equally dispersed on the surface</span><br>
   <input type="radio" name="q5" value="wrong"> none<br>
</li><br />
<hr><br />

</ol>
<br />
<input type="button" onClick="checkQuiz()" value="check quiz">
<hr>
<textarea cols="80" rows="10" name="output"></textarea>
</form>
</font>

     
  </div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="31" alt=""><div class="copyright">Copyright &copy; 2009-2010</div><br>

</div>


</body>
</html>

