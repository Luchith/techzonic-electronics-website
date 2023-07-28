<?php
    session_start();

   

?>

<html>

<head>
    <meta charset="utf-8">
    <title>Edit Account</title>


    <style>
      body{
        margin:0;
        padding:0;
      }
    .logBack {
        width: 100%;
        height: 100vh;

    }

    .logImg {
        width: 100%;
        height: 100vh;
    }

    .logMain {
        top: -80%;
        right: -35%;
        display: flex;
        position: relative;
        width: 400px;
        height: 470px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .5);
        border-radius: 20px;
        backdrop-filter: blur(20px);
        box-shadow: 0 0 30px rgba(0, 0, 0, .5);
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .ErrMsg {
        color: red;
    }
    .inputBox{
  position: relative;
  width: 100%;
  height: 50px;
  border-bottom: 2px solid #fff;
  margin: 30px 0;

}


.inputBox label{
  position: absolute;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  font-size: 1em;
  color: #fff;
  font-weight: 500;
  pointer-events: none;
  transition: .5s;
  
}

.inputBox input:focus~label,
.inputBox input:valid~label{
  top: -5px;
}

.inputBox input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #fff;
  font-weight: 600;
  padding: 0 35px 0 5px;
}
.subBtn{
  width: 100%;
  height: 45px;
  background: #2B5774;
  border: none;
  outline: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 1em;
  color: whitesmoke;
  font-weight: 500;
}
.subBtn:hover{
  border: 2px solid #2B5774;
  background: transparent;
  box-shadow: 0 0 10px #2B5774, 0 0 20px #2B5774, 0 0 40px #2B5774;
  
}
    </style>
</head>

<body>


    <?php
		$_SESSION["id"]=$_GET["id"];
		
	//connect with the database
  include_once './conection.php';

//sql query
		$sql="SELECT * FROM `products` WHERE `pid`='".$_SESSION["id"]."'";

//execute the query against the database
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	
	
	?>

    <div class="logBack">
        <img src="cir.jpg" class="logImg" alt="logIMG" />
        <div class="logMain">
            <div class="logBox">
                <h2>EDIT ADVERTISEMENT</h2>
                <form action="EditHandler.php" method="post" enctype="multipart/form-data">
                    <div class="inputBox">
                        <input type="text" name="pName" id="pName" autocomplete="off" value="<?php echo $row["pname"]?>"
                            required>
                        <label>Product Name</label>

                    </div>
                    <div class="inputBox">
                        <input type="number" name="price" id="price" autocomplete="off"
                            value="<?php echo $row["price"]?>" required>
                        <label>Product Price</label>
                    </div>
                    



                    <div class="inputBox">
                        <input type="file" name="imageFile" placeholder="Change a Picture">

                    </div>
                    <?php 
      $_SESSION["imagePath"]=$row["imagePath"];
      ?>

                    <button type="submit" class="subBtn" name="btnSubmit" onclick="">CONFIRM EDIT</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>