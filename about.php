<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || Ayur-Earth</title>
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
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
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




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <P >"At Ayur-Earth, we are dedicated to preserving and sharing the ancient wisdom of Ayurveda, deeply rooted in India's cultural heritage. Our journey is fueled by a passion for holistic well-being, combining centuries-old traditions with modern insights to offer authentic Ayurvedic solutions.</p>

        <p>At the heart of Ayur-Earth lies a commitment to your overall health—mind, body, and spirit. Each product we curate is a testament to the healing power of nature, meticulously crafted to bring balance and vitality to your everyday life. Join us on this enriching path as we blend tradition and innovation, guiding you towards a harmonious and healthier lifestyle.</P>
        
      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
