<?php
$con=mysqli_connect("localhost","root","","db")or die(mysqli_error($con));
$sql= "insert into persons values('0','name','email','password','address','45868','city')";
mysqli_query($con,$sql) or die(mysqli_error($con));

header('location:inde.php');
?>