	<?php
include "clientt.h";
 ?><!DOCTYPE html>
<html lang="en">
<head>

  <title>pauvreté</title>
  <meta charset="utf-8">
<style>
.bg
{
background-image: url('bgg.jpg');
background-position: center;
background-repeat: no-repeat;
background-size: cover;
position: relative;
height:720px;     
}
.style
{
background:white ;
border: 2px solid white ;
width: 1400px ;
height: 400px ;
margin: 0 auto ;
opacity:0.7; 
position: relative; 
top: 170px;   
}
.b1
{
background-color:#b5ed0a;
color:white; 
font-size:30px;
padding:16px 20px;
cursor:pointer;
position:relative;
left:1170px;
top:50px;
}
.b1:hover
{
background-color:#ff9908;
color:white; 
}
#s
{
position:relative;
left:350px;
top: 20px;
}
#F
{
position:relative;
left:500px;
top: 4px;
}
#M
{
position:relative;
left:600px;
top: -15px;
}
#r1
{
position:relative;
left:500px;
top: 4px;
}
#r2
{
position:relative;
left:600px;
top: -15px;
}



#N
{
position:relative;
left:110px;
top: 20px;
}
#t1
{
position:relative;
left:110px;
top: 20px;
}
#P
{
position:relative;
left:120px;
top: 20px;
}
#t2
{
position:relative;
left:120px;
top: 20px;
}
#A
{
position:relative;
left:130px;
top: 20px;
}
#t3
{
position:relative;
left:130px;
top: 20px;
}


#AM
{
position:relative;
left:-610px;
top: 50px;
}
#t4
{
position:relative;
left:-595px;
top: 50px;
}
#C
{
position:relative;
left:-580px;
top: 50px;
}
#t5
{
position:relative;
left:-560px;
top: 50px;
}
#Num
{
position:relative;
left:-550px;
top: 50px;
}
#t6
{
position:relative;
left:850px;
top: 8px;
}
#titre
{
position:relative;
left:200px; 
}
#im
{
width:80px;
height:80px;
position:relative;
left:1200px;
top:60px;
}
#board
{
display:none;
position:relative;
}
.b2
{
    cursor:pointer; 
	margin-left: 10px; 
	font-size:20px;
	color:#25160f; 
	background-color:#dfd2c2;
	position:relative;
	top:150px;
	left:400px;
}


.button:hover{
	color:#dfd2c2; 
	background-color:#25160f;
}
</style>
<script>
function valider()
{
var y=document.getElementById('t1');
var x=document.getElementById('t5');
var l=x.value.length;
var l1=y.value.length;
var w = document.getElementById("board");
var z = document.getElementById("t2");
var a = document.getElementById("t3");
var b = document.getElementById("t4");
var c = document.getElementById("t5");
var d = document.getElementById("t6");
var e = document.getElementById("t1");
if(l==8)
{
console.log("color");
x.style.backgroundColor="green";
}
else
{
x.style.backgroundColor="red";
}
if ((w.style.display == "none")&& (z.value!="")&& (a.value!="")&& (b.value!="")&& (c.value!="")&& (d.value!="")&& (e.value!=""))
{
console.log("button");
w.style.display = "block";
}
else 
{
w.style.display = "none";
}
}
function Food()
{
 location.replace("Food.html");
}
function Doctor()
{
}
function Delivery()
{
}
</script>
</head>
<body class=bg>
<div class="style">
    <form action="clientt.php" methode='post'>
<h1 id="titre">Tous contre la faim...Tous contre la pauvreté...Tous en bonne santé!</h1>
<img id="im" src="logo CM.png"/>
<label id="s"><b>sexe:</b></label></br>
<input type="radio" id="r1" value="F">
<label id="F"><b>Feminin</b></label></br>
<input type="radio" id="r2" value="M">
<label id="M"><b>Masculin</b></label></br>
<input type="button" value="Valider" class="b1" onclick="valider()"/>
<label id="N"><b>Nom</b></label>
<input type="text"id="t1">
<label id="P"><b>Prenom</b></label>
<input type="text"id="t2">
<label id="A"><b>Adresse</b></label>
<input type="text"id="t3">
<label id="AM"><b>Adresse Mail</b></label>
<input type="text"id="t4">
<label id="C"><b>CIN</b></label>
<input type="text"id="t5">
<label id="Num"><b>Numéro De Telephone</b></label>
<input type="text"id="t6">
<div id="board">

<input type="button" value="ServiceFood" class="b2" onclick="Food()" />
<input type="button" value="ServiceDoctor" class="b2" onclick="Doctor()"/>
<input type="button" value="ServiceDelivery" class="b2" onclick="Delivery()"/>
</div>
</div>
</form>
</body>
<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
</html>