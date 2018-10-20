<html>

<?php
include('head.php');
include('connections.php');
$a=$_GET['id'];



$sel=mysqli_query($connections,"SELECT * FROM job_post WHERE n=".$a."");
$row=mysqli_fetch_assoc($sel);







?>
<body>
<div class="pane">
<div class="content">
<form method="POST">
<h5>Company Name:<br><input type="text" name="Cname" value=<?php echo $row['CompanyName'];?>>
<br><br>
Postion:<br><input type="text" name="CDesc" value=<?php echo $row['JobTitle'];?>><br><br>
Job Description:<br><textarea rows="20" cols="100" name="JDesc" value=<?php echo $row['JobDesc'];?>></textarea><br><br>
Qualifications:<br><textarea rows="20" cols="100" name="Quali" value=<?php echo $row['quali'];?>></textarea><br><br><br>
Contact<br><br>
Mobile#:<br><input type="text" name="mobile" value=<?php echo $row['Mobile'];?>><br>
email:<br><input type="text" name="email" value=<?php echo $row['email'];?>><br>
link:<br><input type="text" name="Link" value=<?php echo $row['link'];?>><br>
<input type="Submit" value="Ok" name="Submit" >
</h5>
<?PHP update($a); ?>
</form></div></div>
</body>

</html>
<?php

function update($aa){
if(isset($_POST['Submit'])){
include('connections.php');
$comp=$_POST['Cname'];
$cdesc=$_POST['CDesc'];
$jdesc=$_POST['JDesc'];
$quali=$_POST['Quali'];
$mob=$_POST['mobile'];
$email=$_POST['email'];
$link=$_POST['Link'];
$s=mysqli_query($connections,"UPDATE job_post SET CompanyName=".$comp.", JobTitle=".$cdesc.", JobDesc=".$jdesc.", quali=".$quali.", Mobile=".$mob.", 
email=".$email.", link=".$link." WHERE n=".$aa."");

}}
?>