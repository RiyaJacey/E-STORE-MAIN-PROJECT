<?php
// if(isset($_POST['lid']) && isset($_POST['quantity']))
// {
  $lid = $_POST['lid'];
  $quantity = $_POST['quantity'];
  $sql19 = "SELECT stock_quantity FROM stock WHERE product_id = $lid";
  $result19 = mysqli_query($conn, $sql19);
  $row19 = mysqli_fetch_assoc($result19);
  $current_stock_quantity = $row19['stock_quantity'];
  // Calculate the new stock quantity
  $new_stock_quantity = $current_stock_quantity - $quantity;
  // Update the stock quantity in the database
  $sql22 = mysqli_query($conn,"UPDATE stock SET stock_quantity = $new_stock_quantity WHERE product_id = $lid");
  if($sql22)
  {
    ?>
    <script>alert("inserted successfully");</script>
    <?php
  }
  echo "Stock updated successfully";
// }
?>
