<?php
require('sqlcon.php');
$id=$_GET["id"];
$sql="update ITEMS set cart=0 where id='$id'";
mysqli_query($con,$sql);
header('location:cart.php');
?>