<?php
require('sqlcon.php');
$email=$_POST["email"];
$password=$_POST["pass"];
$password=md5($password);
$sql="select password from persons where email='$email'";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
$row=mysqli_fetch_array($res);
if($password==$row[0])
{session_start();
$_SESSION["email"]=$email;
header('location:home.php');

}
else
header('location:error.php');
?>