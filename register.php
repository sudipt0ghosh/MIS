<?php
if(isset($_POST['Reg']))
{
    $a=$_POST['Name'];
    $b=$_POST['Password'];
    $c=$_POST['email'];
    $con=mysqli_connect("localhost","root","123456","example");
    $sql="INSERT INTO `user` (`Name`,`Password`,`Email`) VALUES('$a','$b','$c')";
    mysqli_query($con,$sql);
    header("LOCATION:index.php");
}
?>