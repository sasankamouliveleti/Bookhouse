<?php
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$email = $_POST['e-mail'];
		$password = $_POST['password'];
	 $password=md5($password);

		$query = "SELECT Email, Password FROM user WHERE Email='{$email}' and Password='{$password}'";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);
		if ($num == 0) // that is if no records found in database
			header('location: error.php');
		else{
			$row = mysqli_fetch_array($result);
			session_start();
			$_SESSION['email']=$row['Email'];
			header('location: mainin.php');
		}
	}
?>