<?php
include("templet\appo_frm.php");
$conn=mysqli_connect("localhost","root","","example");
$sql=mysqli_query($conn,"select * from `appoinment`");
echo "
<br><br>
<table id=\"customers\">
<tr>
<th>ID</th>
<th>Patient Name</th>
<th>Patient Disease</th>
<th>Doctor Name</th>
<th>Date</th>
<th><b>Delete</b></th>
</tr>";
while(list($a,$b,$c,$d,$e)=mysqli_fetch_row($sql))
{
	echo "
	<tr>
	<td>$a</td>
	<td>$b</td>
	<td>$c</td>
	<td>$d</td>
	<th>$e</td>
	<td><a href=\"hospitals_delete.php?ed=$a\"><b>Delete</b></a></td>
	</tr>";
}
echo "</table>";

include("templet\z.php");
?>
