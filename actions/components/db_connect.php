<?php 

$localhost = "127.0.0.1";
$username = "root";
//$password = "";
$password = "root";
$dbname = "first_aid";

// create connection
$link = mysqli_connect($localhost, $username, $password, $dbname);
// check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
// }else {
//     echo "Connected successfully";
}