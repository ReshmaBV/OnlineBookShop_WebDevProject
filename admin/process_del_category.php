<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['del']))
		{
			$msg[]="Please fill delete category field";
		}
		
		if(!empty($msg))
		{
			header("location:category.php?error=1");
		}
		else
		{
		
			
		
			$delcat=$_POST['del'];//name of category
			
			$i="select cat_id from category where cat_nm='$delcat'";
			$res1=mysqli_query($conn,$i) or die("can't Execute1...");
			$row=mysqli_fetch_assoc($res1);
			$i1=$row['cat_id'];
			
			$query="delete from category where cat_nm ='$delcat' ";	
			mysqli_query($conn,$query) or die("can't Execute2...");
			
			$q2="select subcat_id from subcat where parent_id=$i1";
			$res2=mysqli_query($conn,$q2) or die("can't Execute1...");
			$row2=mysqli_fetch_assoc($res2);
			$i2=$row2['subcat_id'];
			
			$j="delete from subcat where parent_id=$i1 ";	
			mysqli_query($conn,$j) or die("can't Execute3...");
			
			$q3="delete from book where b_subcat=$i2";	
			mysqli_query($conn,$q3) or die("can't Execute3...");
			
			
			header("location:category.php?ok=1");
		}
	}
	else
	{
		header("location:home_of_admin.php");
	}
?>
	
	