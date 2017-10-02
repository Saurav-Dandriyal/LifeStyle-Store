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
			
			<title>Lifestyle Store | Login</title>
			
			<link rel="stylesheet" type="text/css" href="index.css">
		</head>
		
		<body>
			<?php include 'header.php';?>
			
				<div class="container-fluid container-login">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-3 col-md-4 col-md-offset-4">
							<div class="panel panel-primary">
								<div class="panel-heading">LOGIN</div>
								
								<div class="panel-body">
									<p class="text-warning">Login to make a purchase</p>
									<form method="POST" action="login_submit.php">
										<div class="form-group">
											<input type="email" name="e-mail" class="form-control" placeholder="Email" required="true" >
											<div style="color:red;"><?php echo $_GET['email_error']; ?></div>

										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control" placeholder="Password" required="true">
										</div>
										<div class="form-group" style="color:red;"><i><?php echo $_GET['wrong']; ?></i></div>
										<button type="submit" class="btn btn-primary">Login</button><br/>
										<div style="margin-top:7px;"><a href="forgot-password.php" style="color:blue;">Forgot Password?</a></div>
									</form>
								</div>
								
								<div class="panel-footer">
									Don't have an account? <a href="signup.php?email_error=&password_error=" style="color:blue;">Register</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<div  class="navbar-fixed-bottom">	
				<?php include 'footer.php';?>
			</div>		
		</body>
	</html>