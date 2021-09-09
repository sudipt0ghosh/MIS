<?php

if(isset($_POST['login']))
{
$myusername=$_POST['uname'];
$mypassword=$_POST['pword'];
$conn=mysqli_connect("localhost","root","123456","example");
$x=mysqli_query($conn,"select `password` from `user` where `email`='$myusername'");
list($p)=mysqli_fetch_row($x);
if($mypassword==$p)
{
setcookie("shib",$myusername,time()+60*60);
header("LOCATION:index.php");
}
else
{
header("LOCATION:login.php");
}
}
?>