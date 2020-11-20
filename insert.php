<?php

$servername = "mysql-karolinazatylny.alwaysdata.net";
$username = "217224";
$password = "karolcia9";
$dbname = "karolinazatylny_123";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

$conn->query($sql);

if ($conn->query($sql) === TRUE) {
  echo ("New record created successfully");
} else {

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
