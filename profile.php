<?php
session_start();
require_once('./actions/components/boot.php');
require_once('./actions/components/db_connect.php');
require_once('./actions/components/navbar.php');
require_once('./actions/components/footer.php');
// if session is not set this will redirect to login page
if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
// if admin will redirect to dashboard
if (isset($_SESSION['admin']) == 'admin') {
    header("Location: dashboard.php");
    exit;
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
        <div id="profile" class="container">
            <h2>Hey, <?php echo $row['fname']?>!</h2>
            <div class="row" style="margin-top: 30px;">
                <div class="col-3">
                    <img style="height: 250px; width: 100% !important;" align="right" src="./actions/images/<?php echo $row['profile_img'] ?>" class="img-fluid w-25" alt="profile.img">
                </div>
                <div class="col-1"></div>
                <div class="col-4" style="margin-top: 30px;">
                    <p style="font-family: Roboto Condensed;font-size: 20px;">Name : <?php echo $row['fname'] . ' ' . $row['lname'] ?></p>
                    <p style="font-family: Roboto Condensed;font-size: 20px;">Birth Date : <?php echo $row['birth_date'] ?></p>
                    <p style="font-family: Roboto Condensed;font-size: 20px;">Email : <?php echo $row['email'] ?></p>
                </div>
                <div class="col-4" style="margin-top: 30px;">
                    <p style="font-family: Roboto Condensed;font-size: 20px;">Address : <?php echo $row['address'] ?></p>
                    <p style="font-family: Roboto Condensed;font-size: 20px;">Phone Number : <?php echo $row['phone_number'] ?></p>
                    <p style="font-family: Roboto Condensed;font-size: 20px;">Profile status : <?php echo $row['status'] ?></p>
                    <a class="btn btn-dark" href="actions/login/Edit.php?id=<?php echo $_SESSION['user'] ?>">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer start -->
    <!-- This variable comes from the footer.php in components -->
    <?= $footer ?>
    <!-- Footer end -->
</body>

</html>