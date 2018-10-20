<HTML>


<?php
include('head.php');
include('connections.php');
$s=mysqli_query($connections,"Select * FROM job_post");
echo"<div>";
echo"<form action='admnjobs.php' method='POST'><input type='text' name='text'>
<input type='submit' value='Search' name='search'>
</form></div>";
echo "<table  class='tableheader'  align='center' style='line-height:25px;'>
<tr>
<th>Company Name</th>
<th>Position</th>
<th>DatePosted</th>
<th></th>
<th></th>
</tr>";
if (isset($_POST['search'])){
$text=$_POST['text'];
$select=mysqli_query($connections,"SELECT * FROM job_post Where CONCAT (JobTitle,CompanyName,Date)  like '%".$text."%' GROUP BY JobTitle");

while($row=mysqli_fetch_assoc($select)){
	$id=$row['n'];
	echo "<tr><td>";
echo $row['CompanyName'];
echo "</td><td>";
echo $row['JobTitle'];
echo "</td><td>";
echo $row['Date'];
echo "</td><td><a href=editjob.php?id=".$id.">";

echo "Edit";
echo "</a></td><td><a href='Delete.php?id=".$id."'>";
echo "Delete";
echo "</a></td></tr>";
}
echo "</table>";

}
else{
while($r=mysqli_fetch_assoc($s)){
	$id=$r['n'];
	echo "<tr><td>";
echo $r['CompanyName'];
echo "</td><td>";
echo $r['JobTitle'];
echo "</td><td>";
echo $r['Date'];
echo "</td><td><a href=editjob.php?id=".$id.">";

echo "Edit";
echo "</a></td><td><a href='Delete.php?id=".$id."'>";
echo "Delete";
echo "</a></td></tr>";
}
echo "</table>";
}
?>

</HTML>