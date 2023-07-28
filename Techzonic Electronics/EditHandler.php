<?php session_start();
if(isset($_POST["btnSubmit"]))
{
//read the values user has given and assign to variables

	$pName=$_POST["pName"];
	$price=$_POST["price"];
	
	

	if(!file_exists($_FILES["imageFile"]["tmp_name"])|| !is_uploaded_file($_FILES["imageFile"]["tmp_name"]))
	{
		$imageEdit=$_SESSION["imagePath"];
	}
	else{
		
		$imageEdit="uploads/".basename($_FILES["imageFile"]["name"]);
      	move_uploaded_file($_FILES["imageFile"]["tmp_name"],$imageEdit);
	}



//connect with the database
include_once './conection.php';
//sql query
$sql="UPDATE `products` SET `pname`='".$pName."',`price`='".$price."',`imagePath`='".$imageEdit."' WHERE `pid`='".$_SESSION["id"]."'";

//execute the query against the database
 if(mysqli_query($con,$sql));
 	{
		
            
            header('Location:ShopAdmin.php');
        
	}
}

?> 