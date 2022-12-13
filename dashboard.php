<?php 
session_start ();

require_once ('./actions/components/boot.php');
require_once ('./actions/components/db_connect.php');
if (isset($_SESSION['user']) != "") {
    header("Location: index.html"); // redirects to home.php
}



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <a  class="btn btn-dark"  href="">User list</a>
            <a  class="btn btn-dark"  href="">Reservations</a>
            <a  class="btn btn-dark"  href="">Registrations</a>
            <a  class="btn btn-dark"  href="">Course list</a>
            <a class="btn btn-dark"  href="">Trainers</a>
        </div>
    </body>
</html>