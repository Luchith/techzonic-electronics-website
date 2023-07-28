<?php
    session_start();

    if($_SESSION['type']==0){
      header('Location:login.php');
    }

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Shoe Gallery</title>
    <link rel="stylesheet" href="shopAdmin.css">

    <style>.newItemBtm{  /* admin only */
  padding: 10px 20px;
  border-radius: 7px;
  left: 45%;
  bottom: 2%;
  position: relative;
  border: none;
  width: 150px;
  color: black;
  font-size: 14px;
  text-transform: capitalize;
  cursor: pointer;
  transition: .5s;
  
}

.newItemBtm:hover{
  border: 2px ;
  color: #088F8F;
  background: black;
  
  
}
.normal1{
    padding: 10px 20px;
    border-radius: 7px;
  
  position: relative;
  border: none;
  width: 120px;
  color: black;
  font-size: 14px;
  text-transform: capitalize;
  cursor: pointer;
  
}
.normal1:hover{
  border: 2px ;
  color: #088F8F;
  background: black;
  
}
    .newItembtnDiv {
    background: white;
    padding-top: 2%;
    padding-bottom: 2%;
  }</style>
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href=""><img src="A tech logo,circuit logo.png" width="100px"></a>
                </div>
                <nav>
			<ul>
            <?php


if (empty($_SESSION['email'])) {
  $logBtn="Login";
  $logLink="login.php";
}
else {
  $logBtn="Log Out";
  $logLink="logout.php";
}
?>
				<li><a href=""><b>Manage Products</b></a></li>
				<li><a href="<?php echo $logLink?>"><b><?php echo $logBtn?></b></a></li>
			</ul>
		</nav>
            </div>


            <h1 align="center">Manage Collection</h1>
            <div class="col">

			<?php include_once "./conection.php";

//sql query
$sql="SELECT * FROM `products`";

//execute the query against the database
$result=mysqli_query($con, $sql);

if (mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_assoc($result)) {
	?>




                <div class="col1">
                    <img src="<?php echo $row["imagePath"]?>">
                    <div class="def">
                        <h4 align="center"><?php echo $row["pname"]?></h4><br>
                        <p><b>Rs.<?php echo $row["price"]?></b></p>
                        <br>
                        <div class="abtn">
						<a href="EditAdvertisement.php?id=<?php echo $row["pid"]?>"><button class="normal1">Update</button></a>
                        <a href="DeleteAdvertisement.php?id=<?php echo $row["pid"]?>"><button class="normal1">Delete</button></a>
                        </div>

                    </div>
                </div>
<?php
			}
  }

  mysqli_close($con); // close the connection
  ?>



            </div>

        </div>
    </div>
    <div class="newItembtnDiv"> <button class="newItemBtm" onclick="window.location.href = 'Addnewitem.php'">Add New Item</button>
  </div>
    
</body>

</html>