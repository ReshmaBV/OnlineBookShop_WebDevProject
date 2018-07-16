<?php
session_start();
require('includes/config.php');	
	
	if(!empty($_POST))
	{
		$msg=array();
	
		if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['pc']) || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['contact']) )
		{
			$msg[]="Please full fill all requirement";
		}
		
				
		if(is_numeric($_POST['name']))
		{
			$msg[]="Name must be in String Format...";
		}
		
		
		
		if(!empty($msg))
		{
			header("location:shipping.php?error=".$msg);
			
			
		}
		else
		{
			$nm=$_POST['name'];
			$address=$_POST['address'];
			$pc=$_POST['pc'];
			$city=$_POST['city'];
			$state=$_POST['state'];
			$contact=$_POST['contact'];
			$current_user=$_SESSION['unm'];
			$purchase_amt=$_SESSION["total_bill"];
			
			
			$query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id,Purchase_Amt) values('$nm','$address',$pc,'$city','$state',$contact,'$current_user',$purchase_amt)";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			
			header("location:final_page.php");
		}
	}
	else
	{
		header("location:view_cart.php");
	}
?> 