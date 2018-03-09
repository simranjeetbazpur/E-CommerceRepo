<?php 
if(!isset($_POST['user'])||!isset($_POST['pass'])){
echo('Enter your credentials');
exit;
}
require('config.php');
$user=$_POST('user');
$pass=$_POST('pass');
$query="Select *from logs where username=".$user;
$result=$db->mysqli_query($query);
$num=$result->num_rows;
for( $i=0;$i<$num;++$i){
$row=$result->fetch_assoc();
if($row['password']==$pass){
echo("Success");
exit;
}

}
echo("No");

?>