<?php 
include('db_config.php');

session_start();


if (isset($_POST["SignUp"])) {
    $user = $_POST["email"];
	$password = $_POST["password1"];
	$password2 = $_POST["password2"];
	
    // TODO: if the first password field is not blank and it matches the 
    // second password field, insert the new user into the database
    // (you will need to encrypt the password so that authenticate continues
    //  to work correctly)
	 if(!empty($_POST["password1"]) && ($_POST["password1"] == $_POST["password2"]))  
      {   
        // TODO insert username and encrypted pwd into the users table

        // put the newly registered user's name into the SESSION for later use
		  $query = "INSERT INTO register (email, password) VALUES('$user', '$password')";  
           $result = mysqli_query($conn, $query);  
            // forward to the menu
        header("Location: index.php");
		   
      }  
     else {
        $msg = "Passwords do not match.  Try again.<br>";
    }
}
?>

