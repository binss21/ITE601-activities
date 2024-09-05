<?php	
$servername = "localhost"
$username = "username";
$password = "password";

// Create connection
$conn = new mysqLi ($servername,$username,$pasword);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn-> connect_error);
}

echo "Connected Na Ah";
?>