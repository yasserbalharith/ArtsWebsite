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
		
		<section  class = "form_inputs">
		<form action = "authenticate.php" method = "post">
		<fieldset>
			<legend>Login Details</legend>
		
			<input class = "form_ctrl " type="email" name="email" placeholder = "Enter Your E-mail"><br>
			<br>
			<input class = "form_ctrl " type="password" name="password" placeholder = "Enter Your Password"><br><br>
			<input class = "login_btn" type="submit" value="Login" name = "login">
			<a href = "signUp.php">Don't have an account ? Sign up here</a>
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
