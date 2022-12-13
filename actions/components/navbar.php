<?php
// Here we check if the user is logged in. If yes the navbar will have the buttons My Profile and Logout. If not it will have the buttons Login and Register
if (isset($_SESSION["status"])) {
    $profile_buttons = '
    <div class="my-btn ms-lg-auto">
        <a href="profile.php" class="nav-link">My Profile</a>
    </div>
    <div class="my-btn">
        <a href="" class="nav-link">Logout</a>
    </div>
    ';
} else $profile_buttons = '
    <div class="my-btn ms-lg-auto">
        <a href="actions/login/login.php" class="nav-link">Login</a>
    </div>
    <div class="my-btn">
        <a href="actions/login/register.php" class="nav-link">Register</a>
    </div>
    ';

// Here the content of the navbar is saved to this variable, which can be used on all pages where it is required
$navbar = '
<section id="header">

    <!-- Header start -->
    <div class="header-top">
        <div class="container d-flex justify-content-between flex-wrap">
            <a href="index.php">
                <img class="logo" src="images/first_aid_navbar-logo.png" alt="Logo" />
            </a>
            <div class="d-block d-lg-inline-flex ms-0 ms-lg-auto">
                <div class="headCont bi bi-telephone-fill">
                    Call us for free:<br /><a href="tel:+43 1 645 645">+43 1 645 645</a>
                </div>
                <div class="headCont bi bi-envelope-at-fill">
                    Send us an e-mail: <br /><a href="mailto:firstaidcourses@mail.com">firstaidcourses@mail.com</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Header end -->

    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-top">
        <div class="container nav-wrapper p-0">
            <a href="index.php" class="nav-link" id="collapsed-home-link">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link" id="expanded-home-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="courses.php" class="nav-link">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Registration course</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Reservations</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Students</a>
                    </li>
                </ul>
                <!-- Here the buttons from the check at the top of the page are printed -->
                ' . $profile_buttons . '
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
</section>';
