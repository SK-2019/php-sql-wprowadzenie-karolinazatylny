<?php
  require_once("../assets/connect.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "DELETE  FROM nauczyciel WHERE id_nauczyciel= '".$_POST['id']."';";

//wyświetlamy zapytanie $sql
echo $sql;


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

header("location:nauczycielklasa.php");
?>