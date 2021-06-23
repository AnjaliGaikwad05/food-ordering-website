<?php
$insert = false;
$error = false;

include '../database/_dbSessionCheck.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $quantity = $_POST["quantity"];
  $itemid = $_POST["itemid"];
  $user_id = $_SESSION['user_id'];
  if ($quantity) {
    /*----------------------inserts user selected menu item to database----------------------- */
    $sql = "INSERT INTO `ordertable` (`user_id`,  `item_id`, `quantity`, `odate`) VALUES ('$user_id', '$itemid', '$quantity', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      //gives alert when order placed successfully
      $insert = true;
    }
  } else {
    //gives error when quantity is smaller than 1
    $error = "Please enter Quantity greater than 0";
  }
}
