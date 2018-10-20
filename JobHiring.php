<html>
<?php include ('head.php'); 
include('connections.php');
$id=$_GET['id'];
$Select=mysqli_query($connections,"SELECT * FROM job_post WHERE n=".$id."");
$row=mysqli_fetch_assoc($Select);


?>
<div class="pane">
<div class="content">
<center><H1><?php echo $row['JobTitle'];?></H1>
<h4><?php echo $row['CompanyName'];
echo "</h4> </center><br>Date Posted: ";
echo $row['Date'];
echo "<br><br>"
?>



Qualifications:<br>
<?php echo $row['quali'];?>
<br><br>
Job Description:
<br><br> 
<?php echo $row['JobDesc']; ?>
<br><br>
Contact<br>
Phone Num:<?php echo $row['Mobile'];?> <br>
email:<?php echo $row['email'];?><br>
<br><?php echo $row['link'];?>
</div>
</div>




</html>