
<?php
session_start();
if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
  header("Location: index.php");
  exit;
} else if (isset($_SESSION['user']) != "") {
  header("Location: loggedout.php");
} else if (isset($_SESSION['admin']) != "") {
  header("Location: loggedout.php");
}

if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  unset($_SESSION['admin']);
  session_unset();
  session_destroy();
  header("Location: loggedout.php");
  exit;
}