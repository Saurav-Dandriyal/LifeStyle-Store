<?php
		require 'common.php';
		session_start();
		$old_password = md5($_POST['old-password']);
		$new_password = $_POST['new-password'];
		$re_new_password = $_POST['re-new-password'];
		$email=$_SESSION['email'];
		
		$query="SELECT id FROM users WHERE email='$email' AND password='$old_password'";
		$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
		$num_rows=mysqli_num_rows($query_result);
		
		if ($num_rows==0) {
			mysqli_close($con);
			header('location: settings.php?wrong=&pass_wrong=Enter correct password');
			die($email);
		}
		if(md5($new_password)==$old_password){
			mysqli_close($con);
			header('location: settings.php?pass_wrong=&wrong=New password is same as Old');
			die($email);
		}
		if($new_password!=$re_new_password || strlen($new_password)<8){
			mysqli_close($con);
			header('location: settings.php?pass_wrong=&wrong=New passwords does not match');
		}
		else{
			$new_password = md5($_POST['new-password']);
			$query="UPDATE users SET password='$new_password' WHERE password='$old_password'";
			$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
			mysqli_close($con);
			session_unset();
			session_destroy();
			echo "Password Has Been Changed Successfully.";?>
			<a href="login.php?email_error=&wrong=" style="color:blue"><i>Click Here To Login Again.</i></a>
		<?php }
?>