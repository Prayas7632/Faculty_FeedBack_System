<?php
include('../dbconfig.php');

	$info=$_GET['id'];

	mysqli_query($con,"delete from feedback where Feedback_id='$info'");
	header('location: feedback1.php');
?>
