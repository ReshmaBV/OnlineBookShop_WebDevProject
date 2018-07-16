<?php
require('includes/config.php');
 session_start();
 
	$cat=$_GET['subcatid'];
	$subcatnm=$_GET['subcatnm'];
	
	$query2="select * from book where b_subcat='$cat'";
	$res2=mysqli_query($conn,$query2) or die("can't execute this query");
	
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
								//echo '<li class="list-group-item"><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
								echo '<a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row['cat_nm'].'"'.' class="list-group-item">'.$row['cat_nm'].'</a>';
								//pass catid not catnm 
							}

							mysqli_close($conn);
					?>
				
				</ul>
			</div>
			
			<div class="col-md-10">
				<h3><b>BOOKS<b></h3><br>
				<?php echo "<h4><b>".$_GET['subcatnm']."</b></h4>";?><br><br>
				<table class="table table-hover table-bordered">
				  <tbody>
						<?php
						while($row2=mysqli_fetch_assoc($res2))
						{
						
							echo '<tr><td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row2['b_id'].'&cat='.$_GET['subcatnm'].'">
														<img src="'.$row2['b_img'].'" width="120" height="130" class="img-rounded">
														<br>'.$row2['b_nm'].'</a>
													</td></tr>';
							
						}
						?>
				  
				  </tbody>
				
				</table>
				
				
			</div>
		</div>
	
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
<html> 