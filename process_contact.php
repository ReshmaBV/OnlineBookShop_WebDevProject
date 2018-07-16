<?php
require('includes/config.php');	
	
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST['nm']) || empty($_POST['email']) || empty($_POST['query']) || empty($_POST['contact']))
		{
			$msg[]="Please full fill all requirement";
		}
		
				
	
		
		if(is_numeric($_POST['email']))	//See this validation for @,21212 Later
		{
			$msg[]="Name must be in appropriate Format...";
		}
		
		
		if(!empty($msg))
		{
			header("location:contact_us.php?error=".$msg);
		}
		else
		{
			$nm=$_POST['nm'];
			$email=$_POST['email'];
			$question=$_POST['query'];
			$contact=$_POST['contact'];
			
			
			
			$query="insert into contact(con_nm,con_email,con_phone,con_query)
			values('$nm','$email',$contact,'$question')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			
			header("location:contact_us.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>