<?php
require("../assets/connect.php");
$sql = "DELETE FROM fryzjer where id_fryzjer='".$_POST['id']."'";
$conn->query($sql);
header("location:fryzjerklient.php");
?>