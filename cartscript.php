<?php
require('sqlcon.php');

$id=$_GET["id"];
$sql="Update items set cart='1' where id='$id'";
mysqli_query($con,$sql)or die(mysqli_error($con));
header('location:home.php');
?>