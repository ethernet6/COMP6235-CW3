<?php

include 'errors.php';

$servername = "mysql2000.my-virtual-panel.com";
$username = "chalhoub_comp623";
$password = "sep123";




try {
    $conn = new PDO("mysql:host=$servername;dbname=chalhoub_comp6235", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



?>