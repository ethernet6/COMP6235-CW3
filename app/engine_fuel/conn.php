<?php
$servername = "localhost";
$username = "gauravsunny";
$password = "test@123";
$dbname = "engine_save_money";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>