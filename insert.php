<?php

echo("jestes w insert.php <br>");
echo ("<li>". $_POST['name']);
echo ("<li>". $_POST['dzial']);
echo ("<li>". $_POST['zarobki']);
echo ("<li>". $_POST['data_urodzenia']);

$servername = "mysql-karolinazatylny.alwaysdata.net";
$username = "217224";
$password = "karolcia9";
$dbname = "karolinazatylny_123";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
VALUES (null,
					'.$_POST['name'].', 
					$_POST['dzial'], 
					$_POST['zarobki'],
					'.$_POST['data_urodzenia'].');

echo ("<li>". $sql);
if ($conn->query($sql) === TRUE) {
  echo ("New record created successfully");
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
