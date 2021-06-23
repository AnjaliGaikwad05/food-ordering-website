<?php
session_start();

session_unset();
session_destroy();
/*------------------redirects user to index page one's logout--------------------------- */
header("location: ../main/index.php");
exit;
?>