<?php 
	session_start(); 
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
					<li><a href="index.php"><span class="glyphicon glyphicon-user"></span>SIGN UP</a></li>
					<li class="active"><a href="">REGISTRATION FOR NEW USER</a></li>
					<li><a href="contact_us.php">CONTACT US</a></li>
					<li><a href="about_us.php">ABOUT US</a></li>
				</ul>
				
			</div>
		</div>
	
	</div>
	
	<div class="container">
		  <div class="jumbotron">
		    <h2><center><b>WELCOME TO OUR VIRTUAL BOOK STORE</b></center><h2> 
		  </div> 
	</div>
  
	<div class="container">
    
		<?php
			if(isset($_GET['ok']))
			{
				echo '<div class="alert alert-success"><strong>Success!</strong>You are successfully registered.</div>';
			}
			if(isset($_GET['error']))
			{
				echo '<div class="alert alert-danger"><strong>Fail!</strong>Unsuccessful registration.</div>';
			}
											
		?>
	
		<h1><b>REGISTRATION FORM<b></h1>
		<form action="process_register.php" method="POST">
			<div class="form-group">
				<label for="fnm">Full Name</label>
				<input type="text" class="form-control" name="fnm">
			</div>
			<div class="form-group">
				<label for="unm">User Name</label>
				<input type="text" class="form-control" name="unm">
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" class="form-control"  name="pwd">
				
			</div>
			<div class="form-group">
				<label for="cpwd">Confirm Password</label>
				<input type="password" class="form-control"  name="cpwd">
				
			</div>
			<div class="form-group">
				<label for="gender" >Gender</label>
				<div class="radio">
					  <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
				</div>
				<div class="radio">
					  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
				</div>
			</div>
			<div class="form-group">
				<label for="mail">Email Address</label>
				<input type="text" class="form-control"  name="mail">
				
			</div>
			<div class="form-group">
				<label for="contact">Contact No.</label>
				<input type="text" class="form-control"  name="contact">
				
			</div>
			<div class="form-group">
				<label for="city">City</label>
				<input type="text" class="form-control"  name="city">
				
			</div>
			
			<div class="form-group">	
				<input type="submit" value="SUBMIT" class="btn btn-success" >
			</div>
		</form>
		
	</div>
	
  
  
  
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 