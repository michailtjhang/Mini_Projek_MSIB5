<?php  

session_start();

unset($_SESSION["member"]);
session_unset();
session_destroy();

header('location:index.php?hal=home');

?>