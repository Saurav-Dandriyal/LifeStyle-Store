<?php
		require 'common.php';
		$email = $_POST['e-mail'];
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		if (!preg_match($regex_email, $email)) {
		  header('location: login.php?wrong=&email_error=Enter correct email');
		  die("12345");
		}
		$email = mysqli_real_escape_string($con, $email);
		$password = md5(mysqli_real_escape_string($con,$_POST['password']));
		$query="SELECT id,email FROM users WHERE email='$email' AND password='$password'";
		$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
		$num_rows=mysqli_num_rows($query_result);
		if($num_rows==0){
			mysqli_close($con);
			header('location: login.php?email_error=&wrong=No User Found');
		}
		else{
			$row=mysqli_fetch_array($query_result);
			session_start();
			$_SESSION['user_id']=$row['id'];
			$_SESSION['email']=$row['email'];
			mysqli_close($con);
			header('location:products.php');			  
		}
?>