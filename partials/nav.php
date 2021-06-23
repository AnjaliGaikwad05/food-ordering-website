<!------------------------------- navbar ---------------------------->
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;
}
echo '
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" style="opacity:0.9">
  <div class="container-fluid">
    <a class="navbar-brand" href="../main/menu.php">Take-A-Way</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">';

/*--------------------- NAVBAR CONTENT IF NOT LOGGEDIN-------------------*/

if (!$loggedin) {
  echo '<li class="nav-item">
          <a class="nav-link" href="../loginsystem/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="../loginsystem/signup.php">Register</a>
        </li>';
}

/*----------X----------- NAVBAR CONTENT IF NOT LOGGEDIN----------X---------*/


/*--------------------- NAVBAR CONTENT IF LOGGEDIN-------------------*/


if ($loggedin) {
  echo '<li class="nav-item">
        <a class="nav-link" href="../main/menu.php">Menu</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="../main/records.php">Records</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="../loginsystem/logout.php">Logout</a>
        </li>';
}

/*------------X--------- NAVBAR CONTENT IF LOGGEDIN--------X-----------*/


echo '</ul>
    </div>
  </div>
</nav>';

?>

<!---------------x------------- navbar ---------------x------------------>