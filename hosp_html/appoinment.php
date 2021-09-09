<?php
if (isset($_POST['submit'])) {
	
	$a=$_POST['p_name'];
	$b=$_POST['select'];
	$c=$_POST['doc'];
	$d=$_POST['date'];
	$servername = "localhost";
	$username = "root";
	$password ="";
	$dbname ="example";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	$sql = "INSERT INTO `apponment`(`patient_name`,`disease`,`doctor`,`date`) VALUES('$a','$b','$c','$d')";
	mysqli_query($conn,$sql);
	header("LOCATION:../index.php");

}

?>