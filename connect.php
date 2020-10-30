<?php

$servername = "mysql-karolinazatylny.alwaysdata.net";
$username = "217224";
$password = "karolcia9";
$dbanme = "karolinazatylny_123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>