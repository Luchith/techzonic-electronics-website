<?php session_start();

//connect with the database
include_once "./conection.php";
//sql query
$sql="DELETE FROM `products` WHERE `pid` = '".$_GET["id"]."'";

//execute the query against the database
if(mysqli_query($con,$sql));
	{
		header('Location:shopAdmin.php');
	}


?>