<?php
require("../assets/connect.php");
$sql = "DELETE FROM mechanik where id_mechanik='".$_POST['id']."'";
$conn->query($sql);
header("location:mechanikauto.php");
?>