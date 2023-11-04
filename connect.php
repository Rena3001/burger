<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menu";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // Add this line to stop script execution after redirection
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}




?>