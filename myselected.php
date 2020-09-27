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
<link href="css/selected.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>   
<style>

</style>
</head>
<body>

<header class = "header">
  <a href="index.php" class="logo"><img class = "header_logo" src = "img/logo.png"></a>
  
 
</header>
<div class = "brd"></div>
<section class = "second_nav">
  <div class="header " align = "center">
    <a  href="index.php">Home</a>
	
	  <a class="active" href="myselected.php">My Selected</a>
   
   
  </div>
</section>
<section class = "img_gallery">
<h1><legend class = "heading1">My Selected</legend></h1>
<div class="gallery">
    <a target = "_blank" href = "mona-lisa.php"><img class = "gl_img1" src="img/Mona-Lisa.jpg" alt="" style = "height: 183px;"></a>
  <div class="desc">Mona Lisa – Leonardo Da Vinci</div>
</div>

<div class="gallery">
    <a target = "_blank" href = "Michelangelo.php"> <img class = "gl_img2" src="img/sistine-chapel1.jpg" alt="" style = "height: 179px;"> </a>
  <div class="desc"style = "    font-size: 11px; padding-bottom: 20px;">Creation of Adam – Sistine Chapel by Michelangelo</div>
</div>

<div class="gallery">
     <a target = "_blank" href = "Vincent.php"><img class = "gl_img3" src="img/van-gogh-cafe-terrace-at-night.jpg" alt="" style = "height: 184px;"></a>
  <div class="desc">Cafe Terrace at Night – Vincent Van Gogh</div>
</div>

<div class="gallery">
     <a target = "_blank" href = "Jean_Renoir.php"><img src="img/Auguste_Renoir_-_Dance_at_Le_Moulin_de_la_Galette.jpg" alt="" style = "height: 180px;"></a>
  <div class="desc" style = "     font-size: 13px;">Le Moulin de la Gallette – Jean Renoir</div>
</div>
<div class="gallery xyz">
    <a target = "_blank" href = "Claude_Monet.php"> <img src="img/Claude_Monet_-_Poppy_Field.jpg" alt="" ></a>
  <div class="desc" style = " position: relative; top: 0px;">Poppies in a Field – Claude Monet</div>
</div>
<div class="gallery xyz1 xoxo1">
    <a target = "_blank" href = "Rambrandt.php"> <img src="img/Rembrandt_Christ_in_the_Storm_on_the_Lake_of_Galilee.jpg" alt="" style = "height:31pc;"></a>
  <div class="desc" style = " position: relative; top: 0px;">Christ in the Storm on the Sea of Galilee – Rembrandt</div>
</div>


</section>

<footer class = "footer_content">
<div class = "temp">
<a href="index.php" class="logo "><img class = "footer_logo" src = "img/logo.png"></a>
</div>
</footer>
</body>
</html>
