<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name=$_POST['user'];
$pass=md5($_POST['password']);

$s="SELECT * FROM usertable WHERE NAME='$name' && PASSWORD='$pass'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);


if($num == 1)
{
    $_SESSION['username']=$name;
   header('location:main.php');
}
else
{
  header('location:login.php');
}
?>