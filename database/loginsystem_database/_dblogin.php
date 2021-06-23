<?php

$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../database/_dbconnect.php';
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

/*-----------------------compares users data from database and allows it to login-------------------------------- */

  $sql = "Select * from usertable where username='$username' AND email='$email'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['password'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $username;
/*------------------------redirects user to menu page once login is done ----------------------------------- */
        header("location: ../main/menu.php");
      } else {
        //shows error when password does not match
        $showError = "invalid credantials";
      }
    }
  } else {
    //shows error when user does not exists
    $showError = "invalid credantials";
  }
}

?>
