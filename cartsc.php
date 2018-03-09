<?php
session_start();
$email=$_SESSION["email"];

require('sqlcon.php');
$id=$_GET["id"];

$we="select price from items where id='$id'";
$r=mysqli_query($con,$we);
$t=mysqli_fetch_array($r);
$price=$t["price"];
$sql="select id from item where email='$email'";
$y="insert into item values('$email','$id','$price','0')";
mysqli_query($con,$y);


$res=mysqli_query($con,$sql)or die(mysqli_error($con));
while($row=mysqli_fetch_array($res)){
if($row["id"]!=$id){
echo "hello";}
else
echo"worls";



}
echo $price;
echo $id;
echo $email;

?>




