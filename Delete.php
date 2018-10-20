<?php
include ('connections.php');
$id=$_GET['id'];
$a=mysqli_query($connections,"Delete From job_post WHERE n='$id'");
header("Location: admnjobs.php ")
?>