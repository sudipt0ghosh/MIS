<?php
include("templet\doctor_frm.php");
$conn=mysqli_connect("localhost","root","","example");
$sql=mysqli_query($conn,"select * from `doctors`");
echo "
<br><br>
<table id=\"customers\">
<tr>
<th>ID</th>
<th>Name</th>
<th>Designation</th>
<th>Department</th>
<th>Hospital</th>
<th>Time Schedule</th>
<th><b>Delete</b></th>
</tr>";
while(list($a,$b,$c,$d,$e,$f)=mysqli_fetch_row($sql))
{
	echo "
	<tr>
	<td>$a</td>
	<td>$b</td>
	<td>$c</td>
	<td>$d</td>
	<td>$e</td>
	<td>$f</td>
	<td><a href=\"doctors_delete.php?ed=$a\"><b>Delete</b></a></td>
	</tr>";
}
echo "</table>
";




if(isset($_POST['add'])){
	$a=$_POST['name'];
	$b=$_POST['designation'];
	$c=$_POST['department'];
	$d=$_POST['hospital'];
	$e=$_POST['time_schedule'];
	$conn2=mysqli_connect("localhost","root","","example");
	$d="INSERT INTO `doctors`(`name`,`designation`,`department`,`hospital`,`schedule`) VALUES('$a','$b','$c','$d','$e')";
	mysqli_query($conn2,$d);
	header("location:doctors.php");
}
echo " 
<form action=\"doctors.php\" method=\"POST\">
<table id=\"customers\">
<tr>
<th>Name</th>
<th>Designation</th>
<th>Department</th>
<th>Hospital</th>
<th>Time Shedule</th>
</tr>
<tr>
<td><input type=\"text\" name=\"name\"></td>
<td><input type=\"text\" name=\"designation\"></td>
<td><input type=\"text\" name=\"department\"></td>
<td><input type=\"text\" name=\"hospital\"></td>
<td><input type=\"text\" name=\"time_schedule\"></td>
</tr>
<tr><td>
<input type=\"submit\" name=\"add\" value=\"add\"></tr></td>

</form>
";
include("templet\z.php");
?>





