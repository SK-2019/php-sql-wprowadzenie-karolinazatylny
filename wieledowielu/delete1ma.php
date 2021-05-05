<?php
require("../assets/connect.php");
$sql = "DELETE FROM mechanik_samochod where id='".$_POST['id']."'";
$conn->query($sql);
header("location:mechanikauto.php");
?>