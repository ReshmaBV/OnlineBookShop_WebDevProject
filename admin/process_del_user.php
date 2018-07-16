<?php

	require('includes/config.php');
			
	$query="delete from user where u_id =".$_GET['sid'];

	mysqli_query($conn,$query) or die("can't Execute...");
	
	
	header("location:user_details.php");

?>