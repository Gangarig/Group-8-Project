<?php
session_start();
require_once('../components/boot.php');
require_once('../components/db_connect.php');

// if session is not set this will redirect to login page
if (!isset($_SESSION['admin']) && !isset($_SESSION['user']) && !isset($_SESSION['trainer'])) {
    header("Location: ../login/login.php");
    exit;
}
if (isset($_SESSION['user'])) {
    header("Location: ../../index.php"); // redirects to index.php
}
//fetch and populate

$result = mysqli_query($link, "SELECT * FROM reservations");
$list ='';
while ($row = mysqli_fetch_array($result)) {


    $sql_user = "SELECT * FROM user WHERE id = {$row['fk_user']}";
    $result_user = mysqli_query($connect, $sql_user);
    $data_user = mysqli_fetch_assoc($result_user);

    $sql_course = "SELECT * FROM courses WHERE id = {$row['fk_course']}";
    $result_course = mysqli_query($connect, $sql_course);
    $data_course = mysqli_fetch_assoc($result_course);

$list .="
  <table class='table m-5 table-striped'>

    <tr>
        <th>Customer</th>
        <td class='col-4'>".$data_user['fname']." </td>
        <td class='col-4'>".$data_user['lname']." </td>
    </tr>
    <tr>
        <th>Course</th>
        <td class='col-4'>".$data_course['name']."</td>
        <td class='col-4'>
        <a class=' m-1 btn btn-dark' href='delete.php? id=".$row['id']."' >Delete</a><a class='btn btn-dark' href='confirm.php? id=".$row['id']."' >Confirm</a>
        </td>

    </tr>

  </table>

";}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Reservations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php echo $list; ?>
    <div class="w-100 text-center">
    <a class=" btn btn-dark" href="../../dashboard.php">Back</a>
    </div>
    </body>
</html>