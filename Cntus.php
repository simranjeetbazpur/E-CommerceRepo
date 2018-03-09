<?php
require('sqlcon.php');
$name=$_POST["name"];
$email=$_POST["email"];
$txt=$_POST["txta"];
$sql="insert into contact values('0','$name','$email','$txt')";
mysqli_query($con,$sql) or die(mysqli_error($con));
header('location:cont.php');
?>
