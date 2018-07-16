<?php
require('includes/config.php');
	if(empty($_POST['subcatid']))
		{
			header("location:subcategory.php?error=1");
			
		}
		else
		{	
			$subid=$_POST['subcatid'];
	
			/*$q1="select subcat_id from subcat where subcat_nm=$cid";
			$res1=mysqli_query($conn,$q1) or die("can't Execute1...");
			$row1=mysqli_fetch_assoc($res1);
			$i1=$row1['subcat_id'];*/
			
			$q2 = "delete from book where b_subcat =".$subid;
			mysqli_query($conn,$q2) or die("Can't Execute DELETE sub book....");
						
			$q="delete from subcat where subcat_id=".$subid;		
			mysqli_query($conn,$q) or die("Can't Execute DELETE SUB CATEGORY....");	
			
			
			
			header("location:subcategory.php?ok=1");
		}
?>
	