<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width="device-width, initial scaling=1">
<title>Success</title>
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
<?php require('navbar2.php');
?>

<div class="container" style="margin-top:100px">
<div class="row">
<div class="col-sm-12 col-md-12">
<p><center>Thank You for ordering from E-Store.Your order will be delivered shortly.</center></p>
<p ><center>Order Some more electronics items. Click<a href="HOME.php">here</a></center>
</p>
</div>
</div>
</div>

</body>

</html>