<?php

// if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ayur-Earth</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="index.php"><img id="logo" src="images/Screenshot 2023-09-05 at 4.27.52 PM-PhotoRoom.png-PhotoRoom.png" alt="Ayurvedic Logo" width="70"></a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>

  <section class="top-bar-section">
  
    <ul class="right">
      <li><a href="about.php">About</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="cart.php">View Cart</a></li>
      <li><a href="orders.php">My Orders</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php

      if (isset($_SESSION['username'])) {
        echo '<li><a href="account.php">My Account</a></li>';
        echo '<li><a href="logout.php">Log Out</a></li>';
      } else {
        echo '<li><a href="login.php">Log In</a></li>';
        echo '<li><a href="register.php">Register</a></li>';
      }
      ?>
    </ul>

  </section>
</nav>

<img data-interchange="[images/au.png, (retina)], [images/au.png, (large)], [images/au.png, (mobile)], [images/au.png, (medium)]" width="1920" height="750">

<div class="footer" >
  

  <footer style=" background-color: #333; color: #fff; padding: 20px;">
  <div class="row">
    <div class="small-12 medium-4 large-4 columns">
      <h4 style="color:#b5efa4;">Ayur-Earth</h4>
      <p style="color:#79f6fc;padding:0 ; margin:0;">Nature's Healing Treasure</p>
      <p style="padding:0 ; margin:0; color:#d1eaf0 "> Plot no:5, Phase:2, Sai-Vrundavan Colony</p>
      <p style="color:#d1eaf0"> Aurangabad - 431010</p>

    </div>

    <div class="small-12 medium-4 large-4 columns">
      <h4 style="color:#b5efa4;">Quick Links</h4>
      <ul>
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">View Cart</a></li>
        <li><a href="orders.php">My Orders</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php
        if (isset($_SESSION['username'])) {
          echo '<li><a href="account.php">My Account</a></li>';

        } else {
          echo '<li><a href="login.php">Log In</a></li>';
          echo '<li><a href="register.php">Register</a></li>';
        }
        ?>
      </ul>
    </div>

    <div class="small-12 medium-4 large-4 columns">
      <h4 style="color:#b5efa4;">Connect with Us</h4>
    
      <a href="#" target="_blank"><img src="images/fblogo.png" alt="Facebook" width="30"></a>
      <a href="#" target="_blank"><img src="images/twt.png" alt="Twitter" width="30"></a>
      <a href="#" target="instagram"><img src="images/instalogo.png" alt="Instagram" width="40"></a>
    </div>
  </div>

  
  </div>
</footer>


</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
</body>
</html>
