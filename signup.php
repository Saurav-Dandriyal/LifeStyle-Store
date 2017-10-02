<?php 
	session_start();
	if (isset($_SESSION['email'])) { 
	header('location: products.php');}
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
		<title>Lifestyle Store | SignUp</title>
		
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	
	<body>
			
		<?php include 'header.php';?>	
		
		<div class="container container-signup">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2 col-sm-7 col-sm-offset-4 col-md-4 col-md-offset-4">
					<form method="POST" action="signup_script.php">
						<h1>Sign Up</h1>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Name" required="true">
						</div>
						
						<div class="form-group">
							<input type="email" name="e-mail" class="form-control" placeholder="Email" required="true">
							<div style="color:red;"><?php echo $_GET['email_error']; ?></div>
						</div>
						
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Password" required="true">
							<div style="color:red;"><?php echo $_GET['password_error']; ?></div>
						</div>
						
						<div class="form-group">
							<input type="text" name="contact" class="form-control" maxlength="10" placeholder="Contact" required="true">
						</div>
		
						<div class="form-group">
							<input type="text" name="city" class="form-control" placeholder="City" required="true">
						</div>
						
						<div class="form-group">
							<textarea name="address" class="form-control" placeholder="Address" required="true"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>						
					</form>
				</div>
			</div>			
		</div>
		
		<div class="navbar-fixed-bottom">
			<?php include 'footer.php';?>
		</div>
	</body>
</html>