<?php
		$email = $_POST['e-mail'];
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		if (!preg_match($regex_email, $email)) {
		  header('location: signup.php?password_error=&email_error=Enter correct Email');
		  die("hello11111");
		}
		$password = $_POST['password'];
		if (strlen($password)<8) {
		  header('location: signup.php?email_error=&password_error=Enter password of length atleast 8');
		  die("hello11111");
		}
		require 'common.php';
		$email = mysqli_real_escape_string($con,$email);
		$query="SELECT id FROM users WHERE email='$email'";
		$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
		$num_rows=mysqli_num_rows($query_result);
		if($num_rows>0){
			mysqli_close($con);
			header('location: signup.php?password_error=&email_error=Email Id Already Exits');
		}
		else{
			$password = md5(mysqli_real_escape_string($con, $password));
			$name=mysqli_real_escape_string($con, $_POST['name']);
			$contact=$_POST['contact'];
			$city=mysqli_real_escape_string($con, $_POST['city']);
			$address=mysqli_real_escape_string($con, $_POST['address']);
			
			$insert_query="INSERT INTO users(name,email,password,contact,city,address) VALUES('$name','$email','$password','$contact','$city','$address')";
			$insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
			
			session_start();
			$_SESSION['email']=$email;
			$_SESSION['user_id']=mysqli_insert_id($con);
			mysqli_close($con);
			header('location:products.php');
		}		
?>