<?php
/*-------------------connect to database--------------------*/
$server = "localhost";
$username = "root";
$password = "";
$database = "take-a-way";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn)
{
    die("error".mysqli_connect_error());
}

?>