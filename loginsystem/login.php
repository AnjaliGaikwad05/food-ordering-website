<?php
include '../database/_dbconnect.php';
include '../database/loginsystem_database/_dblogin.php';
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- Custom Style   -->
  <link rel="stylesheet" href="../css/Style.css">
  <title>Login</title>
</head>

<body>

  <!------------------------ including NAVBAR and alert  in page ------------------------>
  <?php
  require '../partials/nav.php';

  if ($login) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:9vh">
  <strong>Success!</strong> You are loggedin 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:9vh">
    <strong>Error!</strong> ' . $showError . ' 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>

  <!-----------x------------- including NAVBAR and alert  in page ---------x--------------->

  <!------------------------ login container ---------------------------->

  <div class="login-bg">
    <h2 class="text-center " style="margin-top:9vh">Login</h2>
    <div class="container shadow-lg rounded mb-5 p-3" style="width:520px; background:gray; opacity:0.8">
      <div class="container text-light px-4" style="width:520px">
        <form action="../loginsystem/login.php" method="post">
          <div class="form-group px-4"><strong>
              <label for="username" class="form-label">Username</label>
              <input type="name" maxlength="11" class="form-control" id="username" name="username">
          </div>
          <div class="form-group px-4">
            <label for="email" class="form-label">Email address</label>
            <input type="email" maxlength="20" class="form-control" id="email" name="email">
          </div>
          <div class="form-group px-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" maxlength="18" class="form-control" id="password" name="password">
          </div>
          </strong>
          <button type="submit" class="btn btn-primary mx-5 my-3">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-------------x----------- login container -----------x----------------->

  <!------------------------ including FOOTER in page ------------------------>

  <?php require '../partials/footer.php' ?>

  <!-----------x------------- including FOOTER  in page ---------x--------------->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>

</html>