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
					<li><a href="home_of_user.php">CATALOGUE</a></li>
					<li class="active"><a href="viewcart.php">VIEW CART</a></li>
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
		
			<div class="col-md-3">
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
			
			<div class="col-md-9">
				<h3><b>CART<b></h3>
				<form action="process_cart.php" method="POST">
						<table class="table table-bordered">
							<tr >
								<Td> <b>SNo.</td>
								<td> <b>Category</td>
								<td> <b>Product</td>
								<td> <b>Qty</td>
								<td> <b>Rate</td>
								<td> <b>Price</td>
								<td> <b>Delete</td>
							</tr>
							
						
							<?php
								$tot = 0;
								$i = 1;
								
								if(isset($_SESSION['cart']))
								{

								foreach($_SESSION['cart'] as $id=>$x)
								{	
									echo '
											<tr>
											<Td> '.$i.'</td>
											<td> '.$x['cat'].'</td>
											<td> '.$x['nm'].'</td>   
											<td><input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'"></td>   
											<td> '.$x['rate'].'</td>   
											<td> '.($x['qty']*$x['rate']).'</td>   
											<td>  <a href="process_cart.php?id='.$id.'">Delete</a></td>   
										 
											
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
										$_SESSION["total_bill"]=$tot;
									
								}
								}
								/*<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>*/
								
							
							?>
						</table>
						
						<table class="table table-bordered">	
						<tr>
						<td align="right">
						TOTAL :
						</td>
						<td><?php echo $tot; ?></td>
						</tr>
						</table>						

						<br>
						<center>
						<input type="submit" class="btn btn-success" value=" Re-Calculate " > 
						<a href="shipping.php">CONFIRM & PROCEED TO PAYMENT<a/>
						</center>
						</form>
				
				
			</div>
		</div>
	
	</div>
	
	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 