<?php
    session_start();

   

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADD NEW ITEM</title>
    <script src="js/main.js"></script>
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
  background:#088F8F ;
  border: none;
  outline: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 1em;
  color: whitesmoke;
  font-weight: 500;
}
.subBtn:hover{
  border: 2px solid #088F8F;
  background: transparent;
  box-shadow: #088F8F;
  
}
    </style>
</head>

<body>

 

<div class="logBack">
        <img src="cir.jpg" class="logImg" alt="logIMG" />
        <div class="logMain">
            <div class="logBox">
                <h2>ADD NEW ADVERTISEMENT</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="inputBox">
                        <input type="text" name="pName" id="pName" autocomplete="off" 
                            required>
                        <label>Product Name</label>

                    </div>
                    <div class="inputBox">
                        <input type="number" name="price" id="price" autocomplete="off"
                            value="" required>
                        <label>Product Price</label>
                    </div>

                    <div class="inputBox">
                        <input type="file" name="imageFile" placeholder="Upload a Picture" required>

                    </div>

                    <button type="submit" class="subBtn" name="btnSubmit" onclick="">CONFIRM</button>
                </form>
                <br>
                <p class="ErrMsg">
                    <?php
          if(isset($_POST["btnSubmit"]))
      {
      //read the values user has given and assign to variables
      $pName=$_POST["pName"];
      $price=$_POST["price"];
      
      
      

      $image="uploads/".basename($_FILES["imageFile"]["name"]);
      move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
      
    
      //connect with the database
      include_once './conection.php';
      
      //sql query
      $sql="INSERT INTO `products`(`pid`,`pname`, `price`,`imagePath`) VALUES (NULL,'".$pName."','".$price."','".$image."')";
      
      //execute the query against the database
      if(mysqli_query($con,$sql))
      {
        echo "Advertisment uploaded Successfully";
        header('Location:cartmy.php');
      }
      else
      {
        echo "Opps something is wrong,Please select the file again";
      }
      
      }
        ?>
                </p>
            </div>
        </div>
    </div>



   
</body>

</html>