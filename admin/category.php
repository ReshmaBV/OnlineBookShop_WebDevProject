<?php 
	session_start(); 
	require('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Book Shop</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
			
			.box {
				border:1px solid grey;
				background-color: #d3d3d3;
			
			}
		
		</style>
  </head>
  <body>
  
	<div class="navbar navbar-inverse">
	
		<div class="Container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">OnlineBookShopping</a>
				<button type="button" class="navbar-toggle" datatoggle="collapse" data-target=".navbar-collapse">	
					<span class="sr-only">Toggle navigation</span>	                        	                       
					<span class="icon-bar"></span>	                        
					<span class="icon-bar"></span>	                       
					<span class="icon-bar"></span>	                        	                        	                    
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="home_of_admin.php"> ADMIN</a></li>
					<li class="active"><a href="category.php">CATEGORY</a></li>
					<li><a href="subcategory.php">SUB-CATEGORY</a></li>
					<li><a href="all_book.php">BOOK</a></li>
					<li><a href="user_details.php">USER-DETAILS</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div>
		</div>
	</div>
	
		<?php 
			if(isset($_SESSION['status']))
			{
				if($_SESSION['unm']='admin') {
					$user=strtoupper($_SESSION['unm']); 
				}
			}
		?>
	
	<div class="container">
	  <div class="jumbotron">
		<?php
			echo "<h2><center><b>WELCOME ".$user."</b></center></h2>";
		?>
	  </div> 
	</div>
	
	
	
	<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action='process_add_category.php' method='POST'>
				<div class="form-group">
					<label for="cat2">ADD CATEGORY</label>
					<input type="text" class="form-control" name="cat2">
				</div>
				<div class="form-group">	
						<input type="submit" value=" ADD " class="btn btn-default" >
				</div>
			</form>
		
		</div>
	
		<div class="col-md-6">			
			<form action='process_del_category.php' method='POST'>
				<div class="form-group">
				<label for="del">DELETE CATEGORY</label>
				<select class="form-control" name="del">
				
					<?php

						$query="select * from category ";

						$res=mysqli_query($conn,$query);
						
						while($row=mysqli_fetch_assoc($res))
						{
							echo "<option value='".$row['cat_nm']."'>".$row['cat_nm']."</option>";
						}
						mysqli_close($link);
					?>
				</select>
				</div>
				<div class="form-group">	
						<input type="submit" value=" DELETE " class="btn btn-default" >
				</div>				
			</form>
		</div>
		
	</div>	
		<center>
			 <?php
			if(isset($_GET['ok']))
			{
				echo '<div class="alert alert-success">
				<strong>Success!</strong></div>';
			}
			if(isset($_GET['error']))
			{
				echo '<div class="alert alert-danger fade in"><strong>Unsucessful!</strong></div>';
			}
											
			?>
		</center>
	</div>
	
	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 