<?php
require("../assets/connect.php");
$sql = "DELETE FROM nauczyciel where id_nauczyciel='".$_POST['id']."'";
$conn->query($sql);
header("location:nauczycielklasa.php");
?>