<?php
		session_start();
		require 'common.php';
		if (!isset($_SESSION['email'])) { 
			header('location: index.php');}
		$item_id=$_GET['id'];
		$user_id=$_SESSION['user_id'];	
		$query="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id' AND item_id='$item_id'";
		$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
		mysqli_close($con);
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
        
		<title>Lifestyle Store | Success</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		
    </head>
	
	<body>
		<?php include 'header.php';?>
		
		<div class="container success_container">
			<div class="jumbotron text-center">
				<h3><b>Your order is confirmed.Thank you for shoping with us.</b></h3>
				<p><i><a href="products.php">Click here</a> to purchase any other Product(s).<i></p>
			</div>
		</div>
		
		<div class="navbar-fixed-bottom">
			<?php include 'footer.php';?>
		</div>
		
	</body>
</html>