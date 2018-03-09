<nav class="navbar navbar-default navbar-fixed-top" style="background-color:white">
<div class="container-fluid">
<div class="navbar-header">
<button class="navbar-toggle" type="button" data-target="#Nav" data-toggle="collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="inde.php">E-Store</a>
</div>
<div>
<div id="Nav" class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="SignUp.php"><span class="glyphicon glyphicon-user">SignUp</span></a></li>
<li><a data-toggle="modal" data-target="#Mymod"><span class="glyphicon glyphicon-log-in">Login</span></a>

</li>
<li><a href="AboutUs.php"><span class="glyphicon glyphicon-tasks">About-us</span></a></li>
<li><a href="ContactUs.php"><span class="glyphicon glyphicon-phone">Contact Us</span></a></li>
</ul>
</div>
</div>
</div>
</nav>

<div id="Mymod" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button  type="button" class="close" data-dismiss="modal">×</button>
<h1 class="modal-title">LOGIN</h1>
</div>
<div class="modal-body">
<p>Don't have an account?&nbsp<a href="Signup.php">Register</a></p>
<p>
<form class="form-group" action="log.php" method="POST">
<input class="form-control" type="text" placeholder="E-mail" name="email">
<input class="form-control" type="password" placeholder="Password" name="pass">


<p align="left"><button type="submit" class="btn btn-default" style="background-color:blue;color:white">Login</button></p>
<p align="left"><a href="#" style="color:blue">Forgot Password?</a></p>

</form>
</div>
</div>
</div>
</div>

