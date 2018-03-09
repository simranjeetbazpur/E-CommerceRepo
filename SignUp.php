<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width,initial scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>SignUp</title>
</head>
<body>
<?php require('navbar.php'); ?>

<div class="container" style="margin-top:100px" >
<div class="row">
<div class="col-sm-7 col-md-7">
<img src="yess.jpg">
</div>
<div class="col-sm-5 col-md-5">
<h2>Sign Up</h2>
<form class="form-group" action="sgn.php" method="POST">
<label for="name1" >Name</label>
<input type="text" class="form-control" id="name1" name="name" required>
<label for="em" >E-Mail</label>
<input type="email" class="form-control" id="em" name="email" required>
<span style="color:red" align="right"><?php if(isset($_GET["y"]))
echo"<p >Email already exists</p>";
?></span>
<label for="pass" >Password</label>
<input type="password" class="form-control" id="pass" name="pass" required>
<span style="color:red" align="right"><?php if(isset($_GET["z"]))
echo"<p >Password should be more than 6 characters</p>";
?></span>
<label for="cnt" >Contact</label>
<input type="text" class="form-control" id="cnt" name="cnt" required>
<span style="color:red" align="right"><?php if(isset($_GET["x"]))
echo"<p >Invalid Number</p>";
?></span>
<label for="city" >City</label>
<input type="text" class="form-control" id="city" name="city" required>
<label for="addr" >Address</label>
<input type="text" class="form-control" id="addr" name="addr" required>
<br>
<p align="right"><button type="submit" class="btn btn-default" style="background-color:blue"> Submit</button></p>
</form>
</div>
</div>

<?php require('footer.php'); ?>
</body>
</html>


