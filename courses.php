<?php 
session_start();
require_once './actions/components/db_connect.php';
require_once './actions/components/navbar.php';
require_once './actions/components/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style/style.css" />
    <title>First Aid Courses</title>
  </head>

  <body>
    <!-- Header & Navbar start -->
    <!-- This variable comes from the navbar.php in components -->
    <?= $navbar ?>
    <!-- Header & Navbar end -->

    <div id="banner"></div>

    <!-- Main start -->
    <div class="cards-course mt-5">
    <?php
      if(isset($_SESSION["status"])){
        $role= $_SESSION['status'];
        if($role == 'ADMIN'){
            echo '<a href="/Group-8-Project/create_courses.php">Create course</a>';
        }
      }
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
        <div class="card-course card-1">
          <div class="card__icon bi bi-currency-euro">
            <span><b><?= $price ?></b></span>
          </div>
          <p class="card__exit bi bi-alarm"><?= $row['duration'] ?></p>
          <h2 class="card__title"><?= $row['name'] ?></h2>
          <p class="card_info"><?= $row['description'] ?></p>
          <p class="card__apply">
            <?php if (isset($role)) { ?><a class="card__link btn btn-secondary" href="#">Apply Now <i class="fas fa-arrow-right"></i></a><?php } ?>
          </p>
        </div>
      <?php
      }
      ?>
    </div>

    <!-- Main end -->

    <!-- Footer start -->
    <!-- This variable comes from the footer.php in components -->
    <?= $footer ?>
    <!-- Footer end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>