<?php
		session_start();
		if (!isset($_SESSION['email'])) { 
			header('location: index.php');}
		require 'common.php';
		$user_id=$_SESSION['user_id'];
		$select_query="SELECT ui.item_id,i.name,i.price,ui.id,ui.status FROM items i INNER JOIN users_items ui ON ui.item_id=i.id WHERE ui.user_id='$user_id'";
		$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
		$num_rows=mysqli_num_rows($select_query_result);
		mysqli_close($con);
		$counter=1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<title>Lifestyle Store | Cart</title>	
		<link rel="stylesheet" type="text/css" href="index.css">
    </head>
	<body>
		<?php include 'header.php';?>
		
		<?php if($num_rows==0){?>
			<div class="container success_container">
				<div class="jumbotron text-center">
					<h3><b>You have not ordered anything yet.</b></h3>
					<p><i><a href="products.php">Click here</a> to purchase any Product(s).<i></p>
				</div>
			</div>
			<div  class="navbar-fixed-bottom">
				<?php include 'footer.php';?>				
			</div>
		<?php } else {?>
		    
			<div class="container cart_container">
				<div class="row">
					<div class="col-xs-6 col-xs-offset-3">
						<table class="table table-striped">
							<tbody>
							<?php while($row=mysqli_fetch_array($select_query_result)) {?>
								<tr>
									<th>Item Number</th>
									<th>Item Name</th>
									<th>Price</th>
									<th><a href="cancel-order.php?id=<?php echo $row['id']?>" class="close" style="color:#FF0000; float:right;">&times;</a></th>
								</tr>
								<tr>
									<td><?php echo $counter; $counter+=1;?></td>
									<td><?php echo $row['name']?></td>
									<td><?php echo "RS.".$row['price']?></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td>Total</td>
									<td><?php echo "RS.".$row['price']?></td>
									<td><?php if($row['status']!='Confirmed'){?><a href="success.php?id=<?php echo $row['item_id']?>" class="btn btn-success">Confirm Order</a>
										<?php }else{?><button class="btn btn-success" disabled>Order Confirmed</button><?php }?>
									</td>
								</tr>
								<th/>
								<th/>
							<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		<div  class="navbar-fixed-bottom">
			<?php include 'footer.php';}?>				
		</div>
	</body>
</html>