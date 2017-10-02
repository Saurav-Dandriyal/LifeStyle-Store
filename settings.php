<?php
		session_start();
		if (!isset($_SESSION['email'])) { 
			header('location: index.php');}
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
        
		<title>Lifestyle Store | Settings</title>	
		<link rel="stylesheet" type="text/css" href="index.css">
    </head>
	<body>
		<?php include 'header.php';?>
		
		<div class="container-fluid container-settings">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-3 col-md-4 col-md-offset-4">
					<form method="POST" action="password-change.php">
						<h3>Change Password</h3>						
						<div class="form-group">
							<input type="password" name="old-password" class="form-control" placeholder="Old Password" required="true">
							<div style="color:red;"><i><?php echo $_GET['pass_wrong']; ?></i></div>
						</div>
						<div class="form-group">
							<input type="password" name="new-password" class="form-control" placeholder="New Password"required="true">
						</div>
						<div class="form-group">
							<input type="password" name="re-new-password" class="form-control" placeholder="Re-Type Password" required="true">
						</div>
						<div class="form-group" style="color:red;"><i><?php echo $_GET['wrong']; ?></i></div>
						<button type="submit" class="btn btn-primary">Change</button>						
					</form>
				</div>
			</div>			
		</div>
		
		<div class="navbar-fixed-bottom">
			<?php include 'footer.php';?>
		</div>
		
	</body>
</html>