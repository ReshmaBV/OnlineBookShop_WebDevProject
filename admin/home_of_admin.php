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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags 
	
	charset-specifies type of character encoding for the html document
	http-eq :Provides an HTTP header for the information/value of the content attribute-->
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
					<li class="active"><a href="home_of_admin.php"> ADMIN</a></li>
					<li><a href="category.php">CATEGORY</a></li>
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
	

				
	</div>
	
	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 