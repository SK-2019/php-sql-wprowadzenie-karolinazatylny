<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Pracownik (null, imie, dzial, zarobki) 
       VALUES (null,'Balbina', 4, 86,'1999-05-21')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
