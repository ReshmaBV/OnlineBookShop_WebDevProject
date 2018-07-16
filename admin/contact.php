<?php 
	session_start();
	require('includes/config.php');

	$q="select * from contact";
	$res=mysqli_query($conn,$q) or die("Can't Execute Query...");
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
					<li><a href="all_book.php">BOOK</a></li>
					<li><a href="user_details.php">USER-DETAILS</a></li>
					<li class="active"><a href="contact.php">CONTACT</a></li>
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
		<table class="table table-bordered table-hover">
			<thead>
			<tr>
				<td align="center"><b>SR.NO</b></td>
				<td align="center"><b>NAME</b></td>
				<td align="center"><b>EMAIL</b></td>
				<td align="center"><b>CONTACT_NO.</b></td>
				<td align="center"><b>QUERY</b></td>
				<td align="center"><b>DELETE</b></td>				
			</tr>
			</thead>
			<tbody>
			<?php
				$count=1;
				while($row=mysqli_fetch_assoc($res))
				{
				echo '<tr>
							<td align="center">'.$count.'</td>
							<td>'.$row['con_nm'].'</td>
							<td>'.$row['con_email'].'</td>
							<td>'.$row['con_phone'].'</td>
							<td>'.$row['con_query'].'</td>
							<td align="center"><a href="process_del_contact.php?sid='.$row['con_id'].'"><img src="images/drop.png" ></a></td>					
					</tr>';
					$count++;
				}
			?>
			</tbody>
		
		</table>

				
	</div>
	
	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 