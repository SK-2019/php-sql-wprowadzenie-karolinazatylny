<?php
require("../assets/connect.php");
$sql = "DELETE FROM samochod where id_samochod='".$_POST['id']."'";
$conn->query($sql);
header("location:mechanikauto.php");
?>