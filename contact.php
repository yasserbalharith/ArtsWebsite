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
<link href="css/contact.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>   
</head>
<body>
<header class = "header">
  <a href="index.php" class="logo"><img class = "header_logo" src = "img/logo.png"></a>
  
 
</header>
<div class = "brd"></div>
<section class = "second_nav">
  <div class="header " align = "center">
    <a href="index.php">Home</a>
	
    <a  class="active" href="contact.php">Contact</a>
   
  </div>
</section>
<section class = "contact_us" style = "margin-bottom:-14pc;">
<div class = "student_info">
    <label> <legend>Student Names</legend></label>
	
<li>Amjad Alzahrani
<ul><li class = "second_child">Contact:xyz@gmail.com</li></ul>
</li><br>
<li>Hanan Alzahrani
<ul><li class = "second_child">Contact:xyz@gmail.com</li></ul>
</li>

    </div>

</section>

<footer class = "footer_content">
<div class = "temp">
<a href="index.php" class="logo "><img class = "footer_logo" src = "img/logo.png"></a>
</div>
</footer>

</body>
</html>
