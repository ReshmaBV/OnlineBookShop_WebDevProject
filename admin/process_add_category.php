<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['cat2']))
		{
			$msg[]="Please fill category field";
		}
		
		if(!empty($msg))
		{
			header("location:category.php?error=1");
		}
		else
		{
	
		
			$cat3=$_POST['cat2'];
			
			$query="insert into category(cat_nm) values('$cat3')";
			mysqli_query($conn,$query) or die("can't Execute1...");
			
			$i="select cat_id from category where cat_nm='$cat3'";		
			$res1=mysqli_query($conn,$i) or die("can't Execute2...");
			$row=mysqli_fetch_assoc($res1);
			
			$j="insert into subcat(parent_id,subcat_nm) values(".$row['cat_id'].",'$cat3')";
			mysqli_query($conn,$j) or die("can't Execute3...");
			
			//mysql_close($link);
			header("location:category.php?ok=1");
		}
	}
	else
	{
		header("location:home_of_admin.php");
	}
?>
