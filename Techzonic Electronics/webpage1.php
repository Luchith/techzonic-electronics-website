<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
        
    </head>

    <body>

    <?php
include_once "./navBar.php";?>

        <div class="banner"></div>
        <div class="content">
            <h1>Techzonic Electronics</h1>
            <p>We offer a wide range of electronics products and services to fulfill all of your technological needs.
               <br> press the bell icon to get latest electronics products.
            </p>
            <div>
                
                <button type="button" onclick="window.location.href = 'cartmy.php'"><span></span>Shop Items</button>
            
            </div>
            </div>
            <footer class="text-center">
                <p>Copyright &copy; 2023 All rights reserved by Luchith Dilpahan Inc. </p>
            </footer>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Poppins:ital,wght@1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,400;0,900;1,300;1,400;1,500&display=swap');
              </style>
    </body>
    </html>





        