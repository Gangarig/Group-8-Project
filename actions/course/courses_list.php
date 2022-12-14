<?php 
session_start ();

require_once ('../components/boot.php');
require_once ('../components/db_connect.php');
// if session is not set this will redirect to login page
if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
    header("Location: actions/components/login.php");
    exit;
}
//if session user exist it shouldn't access dashboard.php
if (isset($_SESSION['status']) == 'user') {
    header("Location: ../../profile.php");
    exit;
}
if (isset($_SESSION['status']) == 'trainer') {
    header("Location: ../../trainer.php");
    exit;
}

$result = mysqli_query($link, "SELECT * FROM courses");
$list ='';
while ($row = mysqli_fetch_array($result)) {


$list .="
  <table class='table m-5 table-striped'>

    <tr>
        <th>ID</th>
        <td class='col-4'>".$row['id']." </td>
    </tr>
    <tr>
        <th>Cours name</th>
        <td class='col-4'>".$row['name']."</td>
    </tr>
    <tr>
        <th>Duration</th>
        <td class='col-4'>".$row['duration']." </td>
    </tr>
    <tr>
        <th>Address</th>
        <td class='col-4'>".$row['address']." </td>
    </tr>
    <tr>
        <th>Start date</th>
        <td class='col-4'>".$row['start_date']." </td>
    </tr>
    <tr>
        <th>End date</th>
        <td class='col-4'>".$row['end_date']." </td>
    </tr>
    <tr>
        <th>Price private</th>
        <td class='col-4'>".$row['price_private']." </td>
    </tr>
    <tr>
        <th>Price business</th>
        <td class='col-4'>".$row['price_business']." </td>
    </tr>
    <tr>
        <th>Price student</th>
        <td class='col-4'>".$row['price_student']." </td>
    </tr>
    <tr>
        <th>Fk trainer</th>
        <td class='col-4'>".$row['fk_trainer']." </td>
    </tr>
    <tr>
        <th>Capacity</th>
        <td class='col-4'>".$row['capacity']." </td>
    </tr>
    <tr>
        <th>Image</th>
        <td class='col-4'>".$row['image']." </td>
    </tr>
    <tr>
        <th>Description</th>
        <td class='col-4'>".$row['description']." </td>
        <td><a class='btn btn-dark' href='delete_course.php?id=".$row['id']."' >Delete</a></td>
        <td><a class='btn btn-dark' href='update_courses.php?id=".$row['id']."' >Update</a></td>


    </tr>
  </table>

";}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registered Accounts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php echo $list; ?>
    <div class="w-100 text-center">
    <td><a class='btn btn-dark' href='create_courses.php?id=".$row['id']."' >Create new course</a></td>
    <a class=" btn btn-dark" href="../../dashboard.php">Back</a>
    </div>
    </body>
</html>