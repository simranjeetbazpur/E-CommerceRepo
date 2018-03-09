<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width,initial scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>ContactUs</title>
</head>
<body>
<?php require('navbar.php');
?>

<div class="container" style="margin-top:100px" >

<div class="row">
<div class="col-md-9 col-sm-9">
<p>LIVE SUPPORT
24 hours | 7 days a week | 365 days a year Live Technical Support

This is a demo information. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.

</p>
</div>
<div class="col-md-3 col-sm-3"><img src="contact.png" >
</div>
</div>


<div class="row">
<div class="col-md-8 col-sm-8">
<h3>Contact Us</h3>
<form class="form-group" method="POST" action="Cntus.php">
<label for="Name">Name</label>
<input type="text" class="form-control" id="Name" name="name">
<label for="Email">E-Mail</label>
<input type="text" class="form-control" id="Email" name="email">
<label for="Msg">Message</label>
<textarea rows="5" cols="105" id="Msg" name="txta"></textarea>

<button type="submit" class="btn btn-default" style="background-color:blue">Submit</button>
</form>
</div>
<div class="col-md-4 col-sm-4">
<h3>Company Information :</h3>
<p>500 Lorem Ipsum Dolor Sit,

<br>22-56-2-9 Sit Amet, Lorem,

USA<br>

Phone:(00) 222 666 444

<br>Fax: (000) 000 00 00 0

<br>Email: info@mycompany.com

<br>Follow on: Facebook, Twitter</p>

</div>
</div>



</div>
<?php require('footer.php');
?>
</body>
</html>


