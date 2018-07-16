<?php 
	session_start(); 
	include "includes/config.php";
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
					<li class="active"><a href="home_of_user.php">CATALOGUE</a></li>
					<li><a href="viewcart.php">VIEW CART</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	
	
	
	<div class="container">
	<h1><b>SHIPPING DETAILS<b></h1>
	<div class="container">
		<div class="alert alert-warning">Warning!Books will be delivered to the address mentioned in this form.Please enter the correct address</div>
	</div>
	<div class="container">
		<div class="alert alert-info"><b>Info! CASH ON DELIVERY</b></h3></div>
	</div>
	<?php
		if(isset($_GET['error'])) 
		{
			echo '<div class="container">
				<div class="alert alert-danger"><b>Error!</b>Please enter the details correctly and fill all the fields
				</div>
			</div>';
			
		}
	?>
	
		<form action="process_shipping.php" method="POST">
		
			<div class="form-group">
				<label for="name">Full Name</label>
				<input type="text" class="form-control" name="name">
			</div>
			
			<div class="form-group">
			  <label for="address">Address:</label>
			  <textarea class="form-control" rows="6" id="query" name="address"></textarea>
			</div>
			<div class="form-group">
				<label for="pc">Postal Code</label>
				<input type="text" class="form-control" name="pc">
			</div>
			<div class="form-group">
				<label for="city">City</label>
				<input type="text" class="form-control"  name="city">
				
			</div>
			<div class="form-group">
				<label for="state">State</label>
				<input type="text" class="form-control"  name="state">
				
			
			<div class="form-group">
				<label for="contact">Contact No.</label>
				<input type="text" class="form-control"  name="contact">
			</div>	
			
			<div class="form-group">	
				<input type="submit" value="CONFIRM AND PROCEED" class="btn btn-default" >
			</div>
		</form>
		
		<br><br>
	
	</div>	
	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 