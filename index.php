<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<?php
			include "includes/config.php";
	?>
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
					<li class="active"><a href="index.php"><span class="glyphicon glyphicon-user"></span>SIGN UP</a></li>
					<li><a href="register.php">REGISTRATION FOR NEW USER</a></li>
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
	
		<h1><b>LOGIN IN<b></h1>
		<form action="process_login.php" method="POST">
			<div class="form-group">
				<label for="usernm">User Name</label>
				<input type="text" class="form-control" name="usernm">
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" class="form-control"  name="pwd">
				
			</div>
			
			<div class="form-group">
				
				<input type="submit" value="Log In" class="btn btn-success">
				
			</div>
		</form>
		<!--<br><br>
		<table class="table table-striped table-bordered table-hover">
			<tr><th>Name</th><th>Sec</th></tr>
			<tr><td>Reshma</td><td>a</td></tr>
			<tr><td>Himaja</td><td>b</td></tr>
			<tr><td>shreya</td><td>c</td></tr>
		</table>-->
	</div>
  
  
  
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 