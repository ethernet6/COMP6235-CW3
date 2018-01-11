<?php
$servername = "mysql2000.my-virtual-panel.com";
$username = "chalhoub_comp623";
$password = "ZE9?kC+aF^Bp9@d$";
$dbname = "chalhoub_comp6235";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>