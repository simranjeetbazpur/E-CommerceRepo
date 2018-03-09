<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width="device-width, initial scaling=1">
<title>HOME</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
<?php 
session_start();
if(!isset($_SESSION["email"]))
 
header('location:inde.php');
?>
<?php require('navbar2.php'); ?>
<div class="container" style="margin-top:100px" >

<div class="row">
<div class="col-md-4 col-sm-4">
<div class="panel panel-default">
<div class="panel-heading">MOBILE1 </div>
<div class="panel-body"><img src="download.jpg " style="height:150px">
<p>Mobile description</p>
</div>
<div class="panel-footer">
<button type="button" class="btn btnn-default" style="width:100%;background-color:blue"><a href="cartscript.php?id=1" style="color:white">
<?php require_once('add.php');
message(1); ?>
</a></button>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="panel panel-default">
<div class="panel-heading">MOBILE2 </div>
<div class="panel-body"><img src="download1.jpg" style="height:150px">
<p>Mobile description</p>
</div>
<div class="panel-footer">
<button type="button" class="btn btnn-default" style="width:100%;background-color:blue"><a href="cartscript.php?id=2" style="color:white">
<?php 
message(2); ?>
</a></button>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="panel panel-default">
<div class="panel-heading">MOBILE3 </div>
<div class="panel-body"><img src="download2.jpg" style="height:150px">
<p>Mobile description</p>
</div>
<div class="panel-footer">
<button type="button" class="btn btnn-default" style="width:100%;background-color:blue"><a href="cartscript.php?id=3" style="color:white">
<?php 
message(3); ?>
</a></button>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-4 col-sm-4">
<div class="panel panel-default" >
<div class="panel-heading">MOBILE4 </div>
<div class="panel-body"><img src="download3.jpg" style="height:150px">
<p>Mobile description</p>
</div>
<div class="panel-footer">
<button type="button" class="btn btnn-default" style="width:100%;background-color:blue"><a href="cartscript.php?id=4" style="color:white">
<?php 
message(4); ?>
</a></button>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="panel panel-default">
<div class="panel-heading">MOBILE5 </div>
<div class="panel-body"><img src="images.jpg" style="height:150px">
<p>Mobile description</p>
</div>
<div class="panel-footer">
<button type="button" class="btn btnn-default" style="width:100%;background-color:blue"><a href="cartscript.php?id=5" style="color:white">
<?php 
message(5); ?>
</a></button>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="panel panel-default">
<div class="panel-heading">MOBILE6 </div>
<div class="panel-body"><img src="images1.jpg" style="height:150px">
<p>Mobile description</p>
</div>
<div class="panel-footer">
<button type="button" class="btn btnn-default" style="width:100%;background-color:blue"><a href="cartscript.php?id=6" style="color:white">
<?php 
message(6); ?>
</a></button>
</div>
</div>
</div>
</div>


</body>
</html>
