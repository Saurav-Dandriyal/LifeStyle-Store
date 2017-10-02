<?php
		require 'common.php';
		$id=$_GET['id'];
		$query="DELETE FROM users_items WHERE id='$id'";
		$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
		mysqli_close($con);
		header('location:cart.php');
?>