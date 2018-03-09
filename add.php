<?php

$email=$_SESSION["email"];

function message($id){
require('sqlcon.php');
$sql="select cart from items where id='$id'";
$res=mysqli_query($con,$sql)or die(mysqli_error($con));
$row=mysqli_fetch_array($res);
if($row[0]==0)
echo " Add To Cart";
else if($row[0]==1)
echo "Added ";
else
echo "Add To Cart";

}
?>