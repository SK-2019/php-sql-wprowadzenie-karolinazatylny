<?php
echo("jestes w insert.php");
echo $_POST['name'];

$servername = "mysql-karolinazatylny.alwaysdata.net";
$username = "217224";
$password = "karolcia9";
$dbname = "karolinazatylny_123";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Pracownik (null,imie, dzial, zarobki) 
       VALUES (null,".$_POST['name'].", 1, 76,'1991-11-21')";

echo "<li>".$sql;



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
