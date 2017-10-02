<!DOCTYPE html>
<html lang="eng">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Lifestyle Store | Forgot Password</title>
			
		<link rel="stylesheet" type="text/css" href="index.css">
		<style>
			#email{
				padding:5px 5px;
				font-size:15px;
				
			}

			#butn{
				border:none;
				padding:6px;
				font-size:16px;
				margin:4px -4px;
				color:#fff;
				background-color:green;
			}
		</style>
	</head>
	
	<body class="cart_container container">
		<?php include 'header.php';?>
		
			<h2> Forgot Password? No Need To Worry</h2>
			<p>Just enter your registered e-mail id in the box below.A link will be sent to the email address to change your password.</p></br>
			<div class="col-xs-offset-2 col-xs-5">
				<h4>Enter The Registered E-mail</h4>
				<form method="POST" action="forgot.php">
					<input type="email" name="e-mail"  id="email" placeholder="Email" required="true" >
					<input type="submit" name="Send" id="butn" value="Send Mail">
				</form>
			</div>
			
		<div  class="navbar-fixed-bottom">	
				<?php include 'footer.php';?>
		</div>
	</body>
<html>