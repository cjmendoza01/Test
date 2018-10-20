<html>
<?php include'head.php';
include ('connections.php');
?>
<body>

<div class="pane">

<div><div class="content">
   


<?php
echo"<div class='content1'>
<h3>Jobs</h3>
</div>";
echo"<form action='JobList.php' method='POST'><input type='text' name='text'>
<input type='submit'value='Search' name='search'>
</form>";
?>
<div>

<?php
if (isset($_POST['search'])){
$text=$_POST['text'];
$select=mysqli_query($connections,"SELECT * FROM job_post Where CONCAT (JobTitle,CompanyName)  like '%".$text."%' GROUP BY JobTitle");

while($row=mysqli_fetch_assoc($select)){

echo"<div class='content1'><table><tr><td ><a href='JobHiring.php?id=".$row['n']."'>".$row['JobTitle']."</a></td></tr>";
echo"<tr><td><h5> ".nl2br($row['CompanyName'])."</h5></td></tr>";
echo"<tr><td><h5>Date Posted : ".nl2br($row['Date'])."</h5></td></tr></table></div>";

}
echo "</div>";}
?><br>
</div></div><div class="content">
		<a href="feedback.php">send feedback</a>
		</div></div></div></div>
	
</body>


<html>