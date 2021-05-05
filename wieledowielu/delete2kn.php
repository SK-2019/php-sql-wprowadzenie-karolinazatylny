<?php
require("../assets/connect.php");
$sql = "DELETE FROM klasa where id_klasa='".$_POST['id']."'";
$conn->query($sql);
header("location:nauczycielklasa.php");
?>