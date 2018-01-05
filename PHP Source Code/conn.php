<?php
# TO DO: Fill authentication information
$servername = "";
$username = "";
$password = "";
$dbname = "";
# End TO DO 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>