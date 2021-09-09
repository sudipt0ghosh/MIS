<?php
include("templet\hospital_frm.php");
$conn=mysqli_connect("localhost","root","","example");
$sql=mysqli_query($conn,"select * from `hospitals`");
echo "
<br><br>
<table id=\"customers\">
<tr>
<th>ID</th>
<th>Hospital Name</th>
<th>hospital Address</th>
<th>Image Path</th>
<th><b>Update</b></th>
<th><b>Delete</b></th>
</tr>";
while(list($a,$b,$c,$d)=mysqli_fetch_row($sql))
{
	echo "
	<tr>
	<td>$a</td>
	<td>$b</td>
	<td>$c</td>
	<td>$d</td>
	<td><a href=#><b>Edit</b></a></td>
	<td><a href=\"hospitals_delete.php?ed=$a\"><b>Delete</b></a></td>
	</tr>";
}
echo "</table>";


if(isset($_FILES['img'])&&isset($_POST['add'])){
	$f=$_FILES['img']['name'];
	$x=$_FILES['img']['tmp_name'];
	move_uploaded_file($x,"images/".$f);
	$a=$_POST['hname'];
	$b=$_POST['hadd'];
	$c="images/$f";
	$conn2=mysqli_connect("localhost","root","","example");
	$d="INSERT INTO `hospitals`(`Hname`,`Haddress`,`Himage`) VALUES('$a','$b','$c')";
	mysqli_query($conn2,$d);
	header("location:hospitals.php");
}
echo "
<br>
<form action=\"hospitals.php\" method=\"POST\" enctype=\"multipart/form-data\">
<table id=\"customers\">
<tr>
<th>Hospital Name</th>
<th>Hospital Address</th>
<th>Image Path</th>
</tr>
<tr>
<td><input type=\"text\" name=\"hname\"></td>
<td><input type=\"text\" name=\"hadd\"></td>
<td><input type=\"file\" name=\"img\"></td>
</tr>
<tr>
<td>
<input type=\"submit\" name=\"add\" value=\"Add\">
</td>
</tr>
</table>
</form>
<br><br><br><br>
";
include("templet\z.php");
?>





