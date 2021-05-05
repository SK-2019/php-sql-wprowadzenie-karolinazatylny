<?php
require("../assets/connect.php");
$sql = "DELETE FROM fryzjer_klient where id='".$_POST['id']."'";
$conn->query($sql);
header("location:fryzjerklient.php");
?>