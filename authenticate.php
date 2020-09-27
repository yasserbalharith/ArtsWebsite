<?php
include('db_config.php');
// start the session
session_start();

// initialize variables using data from the form
if(isset($_POST["login"]))
{
	
$user = $_POST["email"];
$pwd = $_POST['password'];

// select all rows associated with the user (should only be one)
$sql = "SELECT * FROM register WHERE email = '" . $user . "' AND password = '" . $pwd . "'";
$result = $conn->query($sql);

// Since our db has a unique constraint on the username, there are only
// two possibilities: 
// -- row found: we found the user's record; need to check the password
// -- no rows found: user not found in the database
if ($result->num_rows == 1) {

    if ($row = $result->fetch_assoc()) {
       
			 // valid login, forward to the menu
			    $_SESSION['user'] = $user;
    header("Location: index.php");
	}
         
    
    }
   
else {
           
			// invalid login, therefore forward back to the loginPage
			echo "INvalid login";
			
			header("Location:signIn.php");
  
        }
}


?>
