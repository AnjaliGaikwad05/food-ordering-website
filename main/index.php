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
  <title>Take-a-way</title>
</head>

<body>
  <!------------ including navbar in page ------------------------>

  <?php require '../partials/nav.php' ?>

  <!------x------ including navbar in page ---------x--------------->


  <!----------------------------- Main Site Section ------------------------------>

  <main>

    <!------------------------ Site Title ---------------------->

    <section class="site-title bg-danger">
      <div class="site-background mx-3">
        <h3>Take-A-Way</h3>
        <h1>Grab your Delicious Food</h1>
        <button class="btn"><a style="text-decoration:none; color:white" href="../loginsystem/login.php"><strong>Order Your Delight</strong></a></button>
      </div>
    </section>

    <!------------x----------- Site Title ----------x----------->

  </main>

  <!---------------x------------- Main Site Section ---------------x-------------->

  <!-------------------- including footer to page ------------------------->

  <?php require '../partials/footer.php' ?>

  <!-------------x------- including footer to page -----------x-------------->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>