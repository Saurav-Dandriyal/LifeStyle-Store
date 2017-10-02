<?php
	session_start();
	if (isset($_SESSION['email'])) { 
		header('location: products.php'); 
}
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
        
		<title>Lifestyle Store | Index</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		
    </head>
	<body>
		<?php include 'header.php';?>
	
		<section>
			<div id="banner_image">
				<div class="container">
					<center>
						<div id="banner_content">
							<h1>We sell lifestyle.</h1>
							<p>Flat 40% OFF on premium brands</p>
							<a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
						</div>
					</center>
				</div>
			</div>
		</section>
		
		<?php include 'footer.php';?>
	</body>
</html>