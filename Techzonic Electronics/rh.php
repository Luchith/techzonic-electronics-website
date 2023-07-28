<?php session_start(); //start the new session
if(isset($_POST["btnReg"]))
{
	$name=$_POST["txtName"];
	$email=$_POST["txtEmail"];
	$passwd=$_POST["txtPassword"];
	$conNum=$_POST["txtContactNo"];
	
	
	
	include_once "./conection.php";
	
	$sql = "INSERT INTO `user`(`email`, `password`, `type`, `name`, `phone`) VALUES ('".$email."','".$passwd."','0','".$name."','".$conNum."')";
	
	if(mysqli_query($con,$sql)){
	header('location:login.php');}

	else{
		echo "error";
	}
	
	
}
?>