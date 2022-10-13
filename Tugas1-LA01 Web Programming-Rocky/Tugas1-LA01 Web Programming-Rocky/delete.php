<?php
include 'connect.php';
$profile_id   = $_GET['profile_id'];
$sql="DELETE from tr_profile where profile_id='$profile_id'";
mysqli_query($con, $sql);
header("location:tampil.php");
?>