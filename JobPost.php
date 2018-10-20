<html>

<?php
include('head.php');
include('connections.php');
if(isset($_GET['Submit'])){
$comp=$_GET['Cname'];
$cdesc=$_GET['CDesc'];
$jdesc=$_GET['JDesc'];
$quali=$_GET['Quali'];
$mob=$_GET['mobile'];
$email=$_GET['email'];
$link=$_GET['Link'];
$date=date('Y-n-j');
$s=mysqli_query($connections,"INSERT INTO job_post(CompanyName,JobTitle,JobDesc,quali,Mobile,email,link,Date) 
VALUES ('$comp','$cdesc','$jdesc','$quali','$mob','$email','$link','$date')");
if(!isset($s)){
		die ("Error $s" .mysqli_connect_error());
	}
	else
	{
		header("location: JobPost.php");
		echo"Success";
	}

}

?>
<body>
<div class="pane">
<div class="content">
<form method="GET" >
<h5>Company Name:<br><input type="text" name="Cname">
<br><br>
Postion:<br><input type="text" name="CDesc"><br><br>
Job Description:<br><textarea rows="20" cols="100" name="JDesc"></textarea><br><br>
Qualifications:<br><textarea rows="20" cols="100" name="Quali"></textarea><br><br><br>
Contact<br><br>
Mobile#:<br><input type="text" name="mobile"><br>
email:<br><input type="text" name="email"><br>
link:<br><input type="text" name="Link"><br>
<input type="Submit" value="Ok" name="Submit" >
</h5>
</form></div></div>
</body>

</html>