<?php
include("doct_header.php");

$conn=mysqli_connect("localhost","root","","example");
$sql=mysqli_query($conn,"select * from `doctors`");
$total=mysqli_num_rows($sql);
if($total<4)
$perrow=$total;
else
$perrow=4;
$noofrow=ceil($total/$perrow);
echo'<table>';
for($i=0;$i<$noofrow;$i++)
{
echo '<tr>';
for($j=0;$j<$perrow;$j++)
{
$row = mysqli_fetch_assoc($sql);
    echo "
    <td>
<div class=\"main\">
    <div class=\"row\">
      <div class=\"column\">
        <div class=\"content\"><img src=\"../template/img/dl.png\" style=\"width:230px; height:150px;\"></a>
          <h3>$row[name]</h3>
          <h4>$row[designation]&nbsp;
          $row[department]<br>
          <h4>$row[hospital]</h4>
          
        </div>
      </div>
    </div>
  </div>
    </td>";
}
echo '</tr>';
$total=$total-$perrow;
if($total<4)
$perrow=$total;
}
echo'</table>';

include("doct_footer.php");
?>


