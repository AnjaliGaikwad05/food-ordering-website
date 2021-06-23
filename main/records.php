<?php

include '../database/_dbconnect.php';
include '../database/_dbSessionCheck.php';

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS DATATABLE JQUERY-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <ink rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Record</title>
</head>

<body>
  <!----------------------- NAVBAR --------------------------->

  <?php require '../partials/nav.php' ?>
  <!-----------X------------ NAVBAR ----------X----------------->
  <div class="record-bg">
    <div class="container-fluid my-4 ">
      <div class="container-fluid text-secondary text-center my-3 py-3">
        <h2 class="my-4 text-white"><strong>Records of your Purchase</strong></h2>
      </div>
    </div>

    <!------------------------- RECORD TABLE ----------------------->
    <div class="container mb-5 mt-3 bg-light shadow-lg rounded p-3  px-4 py-4">
      <table class="table table-striped table-bordered" id="myTable">
        <thead>
          <tr>
            <th scope="col">SR no.</th>
            <th scope="col">Item Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Price</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include '../database/mainpages_database/record_page_database/_dbrecords_table.php';
          ?>


        </tbody>
      </table>
    </div>
    <!-----------X-------------- RECORD TABLE ----------X------------->


    <!--------------------- FOOTER ------------------------>

    <?php require '../partials/footer.php' ?>
  </div>
  <!------------X--------- FOOTER ------------X------------>


  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-------------------- SCRIPT FOR TABLE ------------------------->
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
      $('#my-table').DataTable({
        "pagingType": "simple"
      });
    });
  </script>

  <!--------X------------ SCRIPT FOR TABLE -----------X-------------->


</body>

</html>