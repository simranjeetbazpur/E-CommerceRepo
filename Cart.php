<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width="device-width, initial scaling=1">
<title>MyCart</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
<?php require('navbar2.php'); ?>
<div class="container" style="margin-top:100px">
<div class="row">
<div class="col-sm-12 col-md-12">
<table class="table">
<thead>
<tr>
<th>ItemNumber</th>
<th>Price</th>
</tr>
</thead>
<?php require('sqlcon.php');
$sql="select id,price from items where cart=1";
$res=mysqli_query($con,$sql);

$sum=0;

while($row=mysqli_fetch_array($res)){
$sum+=$row["price"];
$id=$row["id"];
echo "<tr><td>".$id."</td><td>".$row["price"]."</td><td>"."<a href="."remove.php?id=$id".">Remove</a></td><td><a href="."sucess.php?id=$id".">Confirm</a></td></tr>";
}
echo"<tr><td>Total</td><td>".$sum."</td></tr>";?>
</table>
</div>
</div>
</div>

</body>

</html>