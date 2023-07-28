<?php


  if (empty($_SESSION['email'])) {
    $logBtn="Login";
    $logLink="login.php";
  }
  else {
    $logBtn="LOGOUT";
    $logLink="logout.php";
}
?>

<img src="A tech logo,circuit logo.png" class="tech">  
<nav>
        <label class="logo"> Techzonic Electronics</label>
        
            <ul>
                <li><a class="active"  href="<?php echo $logLink?>"><?php echo $logBtn?></a></li>
                <li><a href="cartmy.php">store</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>                            
            </ul>
        </nav>
         