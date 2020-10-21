<?php
  	require_once("connection.php");
  	if(isset($_POST['submit'])){
  		$name = $_POST['name'];
  		$email = $_POST['e-mail'];
  		$password = $_POST['password'];
  		$contact = $_POST['contact'];
  		$city = $_POST['city'];
  		$address = $_POST['address'];
  		if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{5,}$/', $password))
        {
           echo "password should have alphanumerals and caps and atleast 5 characters!!";
        }
        else
        {
              $password=md5($password);


  		$query = "INSERT INTO admin
  		(Name, Email, Password, Contact, City, Address)
  		VALUES
  		('{$name}','{$email}','{$password}','{$contact}','{$city}','{$address}')";
  		if(mysqli_query($con,$query)){
  			session_start();
  			$_SESSION['email']=$email;
  			header('location: maininad.php');
  		}else{
  			echo "error while inserting the records".mysqli_error($con);
  		}
  		}
}
  ?>