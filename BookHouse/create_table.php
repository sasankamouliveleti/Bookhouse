?>
<?php
	require_once("connection.php");
	$sql = "CREATE TABLE admin 
	(PID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	Name CHAR(50) NOT NULL,
	Email CHAR(50) NOT NULL UNIQUE,
	Password CHAR(50) NOT NULL,
	Contact CHAR(50) NOT NULL,
	City CHAR(50) NOT NULL,
	Address CHAR(100) NOT NULL)";
	$row=mysqli_query($con,$sql);
	if($row){
		echo "table persons created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($con);
	}
	
	$sql = "CREATE TABLE user 
	(PID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	Name CHAR(50) NOT NULL,
	Email CHAR(50) NOT NULL UNIQUE,
	Password CHAR(50) NOT NULL,
	Contact CHAR(50) NOT NULL,
	City CHAR(50) NOT NULL,
	Address CHAR(100) NOT NULL)";
	$row=mysqli_query($con,$sql);
	if($row){
		echo "table persons created successfully";
	}
	else{
		echo "error in creating the table".mysqli_error($con);
	}
	
?>
<script type="text/javascript"></script>