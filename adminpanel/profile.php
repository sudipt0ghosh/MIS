<?php 
include("templet\profile_frm.php");
$conn=mysqli_connect("localhost","root","","example");
$sql=mysqli_query($conn,"SELECT * FROM `admin`");
while(list($a,$b,$c,$d,$e)=mysqli_fetch_row($sql))
{
echo "
    	<div class=\"b2\">
    		<div class=\"img\">
    			<img class=\"pq\" src=\"images\dp.jpg\" height=\"270px\" width=\"250px\">
    		
    		</div>
    		<div class=\"dtl\"><hr color=\"#e4e4e4\">
    		<b>Name : $a</b><br><hr color=\"#e4e4e4\">
    		<b>User Id : $b</b><br><hr color=\"#e4e4e4\">
    		<b>Password : ******</b><br><hr color=\"#e4e4e4\">
    		<b>Mobile : $d</b><br><hr color=\"#e4e4e4\">
    		<b>Email Id : $e</b><br><hr color=\"#e4e4e4\">
    		<br>";
}

include("templet\z.php");    	
?>

