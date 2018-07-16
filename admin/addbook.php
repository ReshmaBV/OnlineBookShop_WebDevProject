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
					<li><a href="category.php">CATEGORY</a></li>
					<li><a href="subcategory.php">SUB-CATEGORY</a></li>
					<li class="active"><a href="all_book.php">BOOK</a></li>
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
		<form action="process_add_book.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Book Name</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label for="unm">Category</label>
				<select class="form-control" title="Choose one of the following" name="cat">
				
					<?php

						$query="select * from category ";

						$res=mysqli_query($conn,$query);
						
						while($row=mysqli_fetch_assoc($res))
						{
							echo "<option disabled>".$row['cat_nm'];
							
							$q2 = "select * from subcat where parent_id = ".$row['cat_id'];						
							$res2 = mysqli_query($conn,$q2) or die("Can't Execute Query2..");
							
							while($row2 = mysqli_fetch_assoc($res2))
							{							
								echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];													
							}
							
						}
						mysqli_close($link);
					?>
				</select>
			</div>
			<div class="form-group">
			  <label for="description">Description:</label>
			  <textarea class="form-control" rows="8" id="query" name="description"></textarea>
			</div>
			<div class="form-group">
				<label for="publisher">Publisher</label>
				<input type="text" class="form-control"  name="publisher">
				
			</div>
			
			<div class="form-group">
				<label for="edition">Edition</label>
				<input type="text" class="form-control"  name="edition">
				
			</div>
			<div class="form-group">
				<label for="isbn">ISBN</label>
				<input type="text" class="form-control"  name="isbn">
				
			</div>
			<div class="form-group">
				<label for="pages">Pages</label>
				<input type="text" class="form-control"  name="pages">
				
			</div>
					
			<div class="form-group">
				<label for="price">Price</label>
				<input type="text" class="form-control"  name="price">
				
			</div>
			
			<div class="form-group">
				<label for="img">Image</label>
				<input type="file" class="form-control"  name="img">
				
			</div>
			
			<div class="form-group">	
				<input type="submit" value=" ADD BOOK " class="btn btn-default" >
			</div>
		</form>
		<br>
		<br>
		<br>

				
	</div>
	
	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 