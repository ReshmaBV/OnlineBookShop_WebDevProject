<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['subcat']) || empty($_POST['parent']))
		{
			$msg[]="Please full fill all requirement";
		}
		
		if(!empty($msg))
		{
			header("location:subcategory.php?error=1");
		}
		else
		{

			$parent_id = $_POST['parent'];
			$subcat_name=$_POST['subcat'];
			
			$h="select cat_nm from category where cat_id=".$parent_id;
			$res1=mysqli_query($conn,$h) or die("can't Execute1...");
			$row1=mysqli_fetch_assoc($res1);
			
			
			$i_name="select subcat_nm from subcat where parent_id=$parent_id";
			$res2=mysqli_query($conn,$i_name) or die("can't Execute2...");
			$row2=mysqli_fetch_assoc($res2);
			//if no subcategories are present already
			if($row1[cat_nm]==$row2[subcat_nm]) { 
				$query="update subcat set subcat_nm='$subcat_name' where parent_id=".$parent_id;		
				mysqli_query($conn,$query) or die("can't Execute3...");
			}
			else {
				$query2="insert into subcat(parent_id,subcat_nm) values($parent_id,'$subcat_name')";		
				mysqli_query($conn,$query2) or die("can't Execute4...");
			}
			
			header("location:subcategory.php?ok=1");
		}
	}
	else
	{
		header("location:home_of_admin.php");
	}
?>
	
	