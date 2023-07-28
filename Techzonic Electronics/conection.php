<?php
  $con = mysqli_connect("localhost:3306","root","","website");
	if(!$con)//check data base connection
	{
		die("Sorry ,We are faceting a technical issue");
	}
?>