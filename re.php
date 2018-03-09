<?php
require('sqlcon.php');

$sql="update ITEMS set cart=0 ";
mysqli_query($con,$sql);

?>