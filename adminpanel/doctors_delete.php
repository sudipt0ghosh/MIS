<?php
if (isset($_GET['ed'])) {
	$a=$_GET['ed'];
	$conn=mysqli_connect("localhost","root","","example");
	$sql=mysqli_query($conn,"DELETE FROM `doctors` WHERE `id`='$a'");
	header("location:doctors.php");
}
?>