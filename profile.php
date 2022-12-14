<?php
session_start();
require_once('./actions/components/boot.php');
require_once('./actions/components/db_connect.php');
require_once('./actions/components/navbar.php');
require_once('./actions/components/footer.php');

if (isset($_SESSION['']) != "") {
    header("Location: index.html"); // redirects to home.php
}
// select logged-in users details - procedural style
$res = mysqli_query($link, "SELECT * FROM user WHERE id=" . $_SESSION['user']);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>My Profile</title>
</head>

<body>
    <!-- Header & Navbar start -->
    <!-- This variable comes from the navbar.php in components -->
    <?= $navbar ?>
    <!-- Header & Navbar end -->

    <div id="banner"></div>

    <div class="m-5">
        <img src="./actions/images/<?php echo $row['profile_img'] ?>" class="img-fluid w-25" alt="profile.img">
        <p>Name : <?php echo $row['fname'] . ' ' . $row['lname'] ?></p>
        <p>Birth Date : <?php echo $row['birth_date'] ?></p>
        <p>Email : <?php echo $row['email'] ?></p>
        <p>Address : <?php echo $row['address'] ?></p>
        <p>Phone Number : <?php echo $row['phone_number'] ?></p>
        <p>Profile status : <?php echo $row['status'] ?></p>
    </div>
    <a class=" m-5 btn btn-dark" href="actions/login/Edit.php?id">Edit Profile</a>

    <!-- Footer start -->
    <!-- This variable comes from the footer.php in components -->
    <?= $footer ?>
    <!-- Footer end -->
</body>

</html>