<?php session_start();
	require('includes/config.php');
	
	$id=$_GET['id'];
	
	$q2="select * from book where b_id=$id";
	
	$res2=mysqli_query($conn,$q2) or die("Can't Execute Query..");
	$row2=mysqli_fetch_assoc($res2);
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
	
		<?php 
			if(isset($_SESSION['status']))
			{
				if($_SESSION['unm']!='admin') {
					$user=strtoupper($_SESSION['unm']); 
				}
			}
		?>
	
	<div class="container">
	  <div class="jumbotron">
		<?php
			echo "<h2><center><b>WELCOME ".$user.",TO OUR VIRTUAL BOOK STORE</b></center></h2>";
		?>
	  </div> 
	</div>
	
	
	
	<div class="container">
	
		<div class="row">
		
			<div class="col-md-2">
				<h3><b>CATALOGUE<b></h3>
				<ul class="list-group">
					<?php
					
						$query="select * from category ";
						$res=mysqli_query($conn,$query);
							
						while($row=mysqli_fetch_assoc($res))
							{
								echo '<a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row['cat_nm'].'"'.' class="list-group-item">'.$row['cat_nm'].'</a>';
								//pass catid not catnm 
							}

							mysqli_close($conn);
					?>
				
				</ul>
			</div>
			
			<div class="col-md-10">
				<h3><b>BOOKS<b></h3><br>
				<?php echo "<h4><b>".$row2['b_nm']."</b></h4>";?><br>
			
				<h4><center>Item Details</center></h4>
				
				<?php
					echo '<table class="table table-bordered"><tr> 	
						<td valign="top" width="20%" align="center">
							<img src="'.$row2['b_img'].'" width="120" height="130" class="img-rounded">
						
						</td>
						</tr></table>
						<table class="table table-bordered">
						<tr> 								
							<td align="right">NAME : </td>
							<td align="left">'.$row2['b_nm'].'</td>
						</tr>
								
						<tr>
							<td align="right">ISBN : </td>						
							<td align="left">'.$row2['b_isbn'].'</td>
							
						</tr>
						
												
						<tr>
							<td align="right">Publisher : </td>
							<td align="left">'.$row2['b_publisher'].'</td>
							
						</tr>											
						
						<tr>
							<td align="right"> Edition : </td>
							<td align="left">'.$row2['b_edition'].'</td>
							
						</tr>
									
						<tr>
							<td align="right">PAGES : </td>
							<td align="left">'.$row2['b_page'].'</td>
						</tr>
						
						<tr>
							<td align="right"> PRICE : </td>
							<td align="left">'.$row2['b_price'].'</td>
						</tr>
						</table>';
											
				?>
						
				<br>		
				<h4><center>Description</center></h4>
				<table class="table table-bordered"><tr> 	
				<td>
					<?php
					echo $row2['b_desc'];
					?>
				
				</td>
				</tr></table>	
				
				<br>
				<table class="table table-bordered"><tr> 	
				<td align="center"><?php
				echo '<a href="process_cart.php?nm='.$row2['b_nm'].'&cat='.$_GET['cat'].'&rate='.$row2['b_price'].'"><img src="images/addcart.jpg"></a>';
				?>
				</td>
				</tr></table>
						
					
				

			</div>
		</div>
	
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
<html> 