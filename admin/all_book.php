<?php 
	session_start();
	require('includes/config.php');

	$q="select * from book";
	$res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	
	$q2="call book_count(@total)";
	$res2=mysqli_query($conn,$q2) or die("Can't Execute Query...");
	//$row2=mysqli_fetch_assoc($res2);
	
	$q3="select @total";
	$res3=mysqli_query($conn,$q3) or die("Can't Execute Query...");
	$row3=mysqli_fetch_assoc($res3);
	
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
	
		<?php
			echo "<h3><i>There are a total of ".$row3['@total']." books in inventory</i></h3>";
		
		?>
		
		<table class="table table-bordered">
			<tr><td><a href="addbook.php">Add a new Book</a></td></tr>
		</table>
		<table class="table table-bordered table-hover">
			<thead>
			<tr>
				<td align="center"><b>SR.NO</b></td>
				<td align="center"><b>NAME</b></td>
				<td align="center"><b>PUBLISHER</b></td>
				<td align="center"><b>ISBN</b></td>
				<td align="center"><b>PRICE</b></td>
				<td align="center"><b>IMAGE</b></td>
				<td align="center"><b>DELETE</b></td>				
			</tr>
			</thead>
			<tbody>
			<?php
				$count=1;
				while($row=mysqli_fetch_assoc($res))
				{
				echo '<tr>
							<td>'.$count.'</td>
							<td>'.$row['b_nm'].'</td>
							<td>'.$row['b_publisher'].'</td>
							<td>'.$row['b_isbn'].'</td>
							<td>'.$row['b_price'].'</td>';
							echo "<td><img src='../$row[b_img]' width='50'/>";																			
							echo 	'<td align="center"><a href="process_del_book.php?sid='.$row['b_id'].'"><img src="images/drop.png" ></a>												
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