<?php
session_start();
$valid = "true";

if(isset($_SESSION['user'])){
  echo '<a href="logout.php" style  ="    
	position: absolute;
    right: 2pc;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
    font-family: cursive;
	background-color: dodgerblue;
  color: white;
  padding-left:50px;
  padding-right:50px;
      top: 1pc;
	      text-transform: uppercase;
    border-radius: 8px;">Logout</a>';
    
}
else
{
   echo '<a href="signIn.php" style  ="    
   position: absolute;
    right: 2pc;
	    text-transform: uppercase;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
    font-family: cursive;
	background-color: dodgerblue;
  color: white;
  padding-left:50px;
  padding-right:50px;
      top: 1pc;
    border-radius: 8px;">Sign In</a>';
}


?>
<!DOCTYPE html>

<html lang='en'>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="keywords" content="" /><title>
	Home Page 
</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>   
</head>
<body>
<header class = "header">
  <a href="index.php" class="logo"><img class = "header_logo" src = "img/logo.png"></a>
  
 
</header>
<div class = "brd"></div>
<section class = "second_nav">
  <div class="header " align = "center">
    <a class="active" href="index.php">Home</a>
	 <a href="#about">About</a>
	  <a href="myselected.php">My Selected</a>
    <a href="contact.php">Contact</a>
   
  </div>
</section>
<section class = "slider">
<div class="slider_inner" style="max-width:100%">
  <img class="mySlides  animation" src="img/1.jpg" style="width:100%">
  <img class="mySlides  animation" src="img/2.jpg" style="width:100%">
  <img class="mySlides  animation" src="img/3.jpg" style="width:100%">
    <img class="mySlides animation" src="img/4.jpg" style="width:100%">
	  <img class="mySlides animation" src="img/5.jpg" style="width:100%">
	    <img class="mySlides animation" src="img/6.jpg" style="width:100%">
		  <img class="mySlides animation" src="img/7.jpg" style="width:100%">
		    <img class="mySlides animation" src="img/8.jpg" style="width:100%">
			  <img class="mySlides animation" src="img/9.jpg" style="width:100%">
			    <img class="mySlides animation" src="img/10.jpg" style="width:100%">
  
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}

</script>

</section>
<section class = "about_arts" id = "about">
<h1 class = "heading">About Arts</h1>
<ul>
  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
  <li>Mauris urna metus, eleifend ut finibus a, iaculis in nisl. Nunc laoreet ultricies auctor.</li>
  <li>Ut facilisis pharetra fermentum. Nunc lobortis eros turpis, et consectetur sem posuere eget.</li>
  <li>Praesent pulvinar augue at nunc convallis condimentum.</li>
</ul>  

</section>

<footer class = "footer_content">
<div class = "temp">
<a href="index.php" class="logo "><img class = "footer_logo" src = "img/logo.png"></a>
</div>
</footer>
</body>
</html>
