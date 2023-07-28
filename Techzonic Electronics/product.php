<?php
    session_start();

    if(!isset($_SESSION['email'])){
      header('Location:login.php');   
  }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <link rel="stylesheet" href="product.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    .dis {
    line-height: 1;
    padding: 10px 0;
    font-size: 15px;
    color: black;
}
.button {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-top: 10px;
}

.button a {
    flex: 1 1 40px;
    padding: 5px;
    font-size: 12px;
    color: black;
    border: 4px solid black;
}

.button a.cart {
    background: white;
    color: black;
}

.button a.cart:hover {
    background: black;
    color: white;
}
.button a.buy:hover {
    background: black;
    color: white;
}
</style>

</head>

<body>

    <?php
include_once "./navBar.php";?>
    <div class="container">
        <div class="content-box">
            <h3>OUR COLLECTIONS</h3>
            <div class="products-container">

                <?php include_once "./conection.php";

//sql query
$sql="SELECT * FROM `products`";

//execute the query against the database
$result=mysqli_query($con, $sql);

if (mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_assoc($result)) {
    ?>
                <div class="products" data-name="<?php echo $row["pid"]?>">
                    <img src="<?php echo $row["imgPath"]?>">
                    <h3><?php echo $row["pName"]?></h3>
                    <div class="price">Rs.<?php echo $row["price"]?></div>
                    <p class="dis"><?php echo $row["description"]?>.</p>
                    <div class="button">
                    <a href="#" class="buy">BUY NOW </a><i class="bx bxs-cart"></i><br>
                    <a href="addToCart.php?id=<?php echo $row["pid"]?>" class="cart">Add to Cart </a><i class="bx bxs-plus-circle"></i>
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
   
    

</body>

</html>