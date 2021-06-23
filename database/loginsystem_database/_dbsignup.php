<?php

$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../database/_dbconnect.php';
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];

  /*-------------check that this user exists------------------*/
  $existSql = "Select * from usertable where email='$email'";
  $result = mysqli_query($conn, $existSql);
  //compares rows if email entered already exits and stores it in numExistsRows
  $numExitsRows = mysqli_num_rows($result);
  if ($numExitsRows > 0) {
    //shows error when user already exists
    $showError = "Username already exists";
  } else {
    if (($password == $cpassword)) {
      //generates password hash for security
      $hash = password_hash($password, PASSWORD_DEFAULT);
      /*---------------------inserts data of new user in database usertable--------------------------*/
      $sql = "INSERT INTO `usertable` ( `username`, `email`, `password`, `date`) VALUES ('$username', '$email', '$hash', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      /*-----------------------gives alert to user if signuped or not------------------------------ */
      if ($result) {
        //gives alert when signup completes
        $showAlert = true;
      }
    } else {
      //gives error when password does not match 
      $showError = "Passwords do not match ";
    }
  }
}
