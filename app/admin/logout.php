<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost/final-course/app/admin");
?>
<?php
  unset($_SESSION["login"]);
  header("location: ".URL_SITE."/page-login.php");
?>
