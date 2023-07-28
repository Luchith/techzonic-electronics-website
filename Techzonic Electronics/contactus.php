<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact Us</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="contactus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <img src="A tech logo,circuit logo.png" class="tech">     
  <?php
include_once "./navBar.php";?>
  <section class="contact">
    <div class="contact-form">
      <h1>Contact <span>Us</span></h1> 
      <p>Connect with me via phone:076-2566128</p>  
     <form action="">
        <input type=""  placeholder="Your Name" autocomplete="off" required>
        <input type="email" name="email" placeholder="Email" autocomplete="off" required>
        <input type="" placeholder="write a subject"  autocomplete="off" required>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" required>
        </textarea>
        <input type="submit" value="submit" class="btn">
      </form>
 </div> 
 
    <div class="contact-img">
      <img src="contact1.jpg">
    </div>
  </section>
  <footer class="text-center">
    <p>Copyright &copy; 2023 All rights reserved by Luchith Dilpahan Inc. </p>
</footer> 
</body>
</html>