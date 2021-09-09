<?php
include("templet\user_frm.php");
$conn=mysqli_connect("localhost","root","","example");
$sql=mysqli_query($conn,"select * from `user`");
echo "
<br><br>
<table id=\"customers\">
<tr>
<th>ID</th>
<th>Name</th>
<th>Password</th>
<th>Email</th>
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
	<td><a href=\"user_delete.php?ed=$a\"><b>Delete</b></a></td>
	</tr>";
}
echo "</table>
<br><br><br><br>
";
include("templet\z.php");
?>





