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
if (isset($_SESSION['status']) == 'admin') {
    header("Location: dashboard.php");
    exit;
}

// select logged-in users details - procedural style
$res = mysqli_query($link, "SELECT * FROM user WHERE id=" . $_SESSION['user']);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
$msg ="";

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
    <a class=" m-5 btn btn-dark" href="actions/login/Edit.php?id=<?php echo $_SESSION['user'] ?>">Edit Profile</a>
    <h2 class="tect center"><?php echo  $msg;?></h2>
    <div class="container">
        
              <!-- Courses start -->
                <div class="cards-course mt-5">
                    <?php
                    $result = mysqli_query($link, "SELECT * FROM courses");

                    while ($row = mysqli_fetch_array($result)) {
                    if (isset($role)) {
                        $price = '';
                        if ($role == 'STUDENT')
                        $price = $row['price_student'];
                        elseif ($role == 'PRIVATE')
                        $price = $row['price_private'];
                        elseif ($role == 'BUSINESS')
                        $price = $row['price_business'];
                    } else $price = 'Please login';
                    ?>
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                    <div class="card-course card-1">
                        <div class="card__icon bi bi-currency-euro">
                        <span><b><?= $price ?></b></span>
                        </div>
                        <p class="card__exit bi bi-alarm"><?= $row['duration'] ?></p>
                        <h2 class="card__title"><?= $row['name'] ?></h2>
                        <p class="card_info"><?= $row['description'] ?></p>
                        <p class="card__apply">
                        <a class=" m-5 btn btn-secondary" href="actions\reservations\add.php?id=<?php echo $row['id'] ?>">Apply Profile</a>
                        </p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- Courses end -->
    
    </div>
    <!-- Footer start -->
    <!-- This variable comes from the footer.php in components -->
    <?= $footer ?>
    <!-- Footer end -->
</body>

</html>