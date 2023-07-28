<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/850a1e8121.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="aboutus.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Poppins:ital,wght@1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,400;0,900;1,300;1,400;1,500&display=swap');
    </style>
</head>
<body>
    <img src="A tech logo,circuit logo.png" class="tech">     
    <?php
include_once "./navBar.php";?>

    <section id="about">
        <div class="about-1">
            <h1>ABOUT US</h1>
            <P> Techzonic is a special e-commerce platform that facilitates the distribution of
            <br>electronic circuit items, wires, and electronic products serving all areas of 
            <br>Sri Lanka. This website will eventually serve as your one-stop shop for all of 
            <br>your electronics and software needs as we continue to grow our company. If you 
            <br>have any questions, please don't hesitate to phone us or send us an email. We 
            <br>are inspired by Technology and we only sell the best quality products that will 
            guarantee customer satisfaction.</P>
        </div>

        <div id="about-2">
            <div class="container">
                <hr class="row">
                <div class="col-md-4">
                    <div class="about-item text-center">
                        <i class="fa fa-book"> </i>
                        <h3>MISSION</h3>
                        <hr>
                        <p>We are lowering obstacles to company ownership because we think that more voices, not fewer, will shape the future of trade, 
                        improving it for all parties.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-item text-center">
                        <i class="fa fa-globe"> </i>
                        <h3>VISION</h3>
                        <hr>
                        <p>You are the focus of all we do. We are committed to you and work to keep you at your best.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
