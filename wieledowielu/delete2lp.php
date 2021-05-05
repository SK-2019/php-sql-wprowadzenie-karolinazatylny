<?php
require("../assets/connect.php");
$sql = "DELETE FROM pacjent where id_pacjent='".$_POST['id']."'";
$conn->query($sql);
header("location:lekarzpacjent.php");
?>