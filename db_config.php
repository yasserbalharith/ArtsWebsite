<?php
// initialize database variables
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "arts";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>