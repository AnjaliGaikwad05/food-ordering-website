<?php
include '../database/mainpages_database/menu_page_database/_dbmenu.php';
include '../database/_dbconnect.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/Style.css">

  <title>Take-a-way</title>
</head>

<body>

  <div class="parallax-img my-0">

    <!----------------------including NAVBAR in page ----------------------------->

    <?php require '../partials/nav.php' ?>

    <!----------X------------including NAVBAR in page---------------X-------------->

    <!-------------- gives users alert based on the actions ------------------>
    <?php
    if ($insert) {
      echo ' <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10vh">
  <strong>Success!</strong> Your Order has been placed  
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    if ($error) {
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10vh">
  <strong>Error!</strong>' . $error . ' 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }

    ?>

    <!-------x------- gives users alert based on the actions -------x----------->

    <!------------------- PARALLAX BODY ---------------------->


    <div class="text-light text-center py-3" style="margin-top:9vh;">
      <h1 class="my-4 ">Welcome </h1>
    </div>
    <div class="text-light text-center py-3">
      <h2><strong><?php echo $_SESSION['username'] ?> !</strong></h2>
    </div>

  </div>


  <!---------X---------- PARALLAX BODY --------X-------------->

  <div class="container-fluid">
    <div class="container-fluid text-muted text-center parallax-thought py-3">
      <h4><em>Never break a promise! On the other hand, you can break as many pie crust as you want.</em></h4>
    </div>
  </div>

  <div class="container-fluid my-4 py-4 p-thought-img">
    <div class="container-fluid bg-dark text-light text-center " style="opacity:0.7">
      <h2 class="py-3">Our Menu</h2>
    </div>

    <!------------------ menu card food listing --------------------->
    <div class="row mx-4 px-4" style="height:70vh; margin-top:7vh">
      <?php
      include '../database/mainpages_database/menu_page_database/_dbmenu_listing.php';
      ?>
    </div>
  </div>
  <!---------x--------- menu card food listing -------x-------------->



  <!---------------------- FOOTER ---------------------------------->

  <?php require '../partials/footer.php' ?>

  <!------------X---------- FOOTER ---------------X------------------->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>

</html>