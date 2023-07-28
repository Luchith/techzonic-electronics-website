<?php session_start(); //start the new session
include_once "./conection.php";
if(isset($_POST["btnSubmit"]))
{
	$email=$_POST["txtEmail"];
	$password=$_POST["txtPassword"];
	
	
	
	$sql = "SELECT * FROM `user` WHERE `email`='".$email."' and `password`='".$password."'";
	
	$results=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($results) > 0)
	{
		
		$_SESSION["email"]=$email;
		$row = mysqli_fetch_assoc($results);
    	$_SESSION['type']=$row['type'];
		if( $_SESSION['type']==1){
		header('location:shopAdmin.php');
		
		}
		else {
			header('location:webpage1.php');
		}
	}
	else{
		header('location:login.php');
	}
}
else{
	header('location:login.php');
}
?>