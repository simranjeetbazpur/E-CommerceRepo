<?php
$con=mysqli_connect("localhost","root","","db")or die(mysqli_error($con));
$id=0;
$name=strip_tags($_POST["name"]);
$email=strip_tags($_POST["email"]);
$password=strip_tags($_POST["pass"]);
$contact=strip_tags($_POST["cnt"]);
$city=strip_tags($_POST["city"]);
$address=strip_tags($_POST["addr"]);
$we="select email from persons where email='$email'";
$res=mysqli_query($con,$we);
$row=mysqli_fetch_array($res);
$count=count($row);

$regex_num="/^[789][0-9]{9}$/";
$len=strlen($password);
if($count!=0)
header('location:signup.php?y=1');
else if($len<6)
header('location:signup.php?z=1');
else {



$password=md5($password);



$sql= "insert into persons values('0','$name','$email','$password','$address','$contact','$city')";
mysqli_query($con,$sql) or die(mysqli_error($con));
session_start();
$_SESSION['email']=$email;
header('location:home.php');}
?>