<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}

include 'config.php';

if (isset($_SESSION['cart'])) {

  $total = 0;

  foreach ($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = " . $product_id);

    if ($result) {

      if ($obj = $result->fetch_object()) {

        $cost = $obj->price * $quantity;

        $user = $_SESSION["username"];

        $insertQuery = $mysqli->prepare("INSERT INTO orders (product_code, product_name, product_desc, price, units, total, email) VALUES (?, ?, ?, ?, ?, ?, ?)");

        if ($insertQuery) {
          $insertQuery->bind_param("ssssdss", $obj->product_code, $obj->product_name, $obj->product_desc, $obj->price, $quantity, $cost, $user);

          if ($insertQuery->execute()) {
            $newqty = $obj->qty - $quantity;

            $updateQuery = $mysqli->prepare("UPDATE products SET qty = ? WHERE id = ?");
            if ($updateQuery) {
              $updateQuery->bind_param("ii", $newqty, $product_id);
              $updateQuery->execute();
            }
          } else {
            echo "Error executing insert query: " . $insertQuery->error;
          }

          $insertQuery->close();
        } else {
          echo "Error preparing insert query: " . $mysqli->error;
        }


        $query = $mysqli->query("SELECT * from orders order by date desc");
        if ($query) {
          while ($obj = $query->fetch_object()) {

          }
        }
      }
    }
  }
}

unset($_SESSION['cart']);
header("location:success.php");
?>
