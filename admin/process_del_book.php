<?php
require('includes/config.php');
			$query1="delete from book where b_id=".$_GET['sid'];	
			mysqli_query($conn,$query1) or die("can't Execute...");
		
			header("location:all_book.php");

?>