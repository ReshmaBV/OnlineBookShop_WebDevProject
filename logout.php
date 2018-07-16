<?php
	require('includes/config.php');
	session_start();
	if($_SESSION['status']=='true') {
		$name=$_SESSION['unm'];
		$q="update user set u_status='false' where u_unm='$name'";
		mysqli_query($conn,$q) or die("wrong query");
	}
	session_destroy();
	header("location:index.php");
?>