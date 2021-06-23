<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  /*-------------------------if user is not loggedin it redirects user to index page-----------------------------*/
  header("location: ../main/index.php");
  exit;
}

include '../database/_dbconnect.php';
