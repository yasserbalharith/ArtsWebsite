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
	  <div class="header-right">
		<a class="active" href="signIn.php">SIGN IN</a>
	  </div>
	</header>
	<div class = "brd"></div>
		
		<section  class = "form_inputs">
		<form action = "register.php" method = "post">
		<fieldset>
			<legend>SignUp Details</legend>
			<input class = "form_ctrl " type="email" name="email" placeholder = "Enter Your E-mail"><br>
			<br>
			<input class = "form_ctrl " type="password" name="password1" placeholder = "Enter Your Password">
			<br><br>
			<input class = "form_ctrl " type="password" name="password2" placeholder = "Repeat Your Password"><br><br>
			<input class = "signUp_btn" type="submit" value="SignUp" name = "SignUp">
			
		  </fieldset>
		</form>
		</section>
	<footer class = "footer_content">
	<div class = "temp">
	<a href="index.php" class="logo "><img class = "footer_logo" src = "img/logo.png"></a>
	</div>
	</footer>
</body>
</html>
