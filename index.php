<?php
session_start();
require_once './actions/components/db_connect.php';
require_once './actions/components/navbar.php';
require_once './actions/components/footer.php';

if (isset($_SESSION["status"])) {
  $role = $_SESSION['status'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="style/style.css" />
  <title>First Aid Courses</title>
</head>

<body>
  <!-- Header & Navbar start -->
  <!-- This variable comes from the navbar.php in components -->
  <?= $navbar ?>
  <!-- Header & Navbar end -->

  <div id="banner"></div>

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
  <!-- Courses end -->

  <!-- Trainer Cards start -->
  <div class="wrapper">
    <div class="card">
      <div class="img-wrapper"><img src="images/profile1.jpg" /></div>
      <div class="details">
        <h3>Rose Warner</h3>
        <h5>Training Manager</h5>
      </div>
    </div>
    <div class="card">
      <div class="img-wrapper"><img src="images/profile2.jpg" /></div>
      <div class="details">
        <h3>Emily Smith</h3>
        <h5>Lead Trainer</h5>
      </div>
    </div>
    <div class="card">
      <div class="img-wrapper"><img src="images/profile3.jpg" /></div>
      <div class="details">
        <h3>Emily Mitchell</h3>
        <h5>Trainer</h5>
      </div>
    </div>
  </div>
  <!-- Trainer Cards end -->

  <!-- Review section start -->
  <div id="myCarousel" class="carousel slide w-50 mx-auto my-5">
    <div class="carousel-inner">
      <!-- First item -->
      <div class="carousel-item active text-center">
        <img src="./images/review-test.jpg" class="img-fluid img-thumbnail rounded-circle review-img" alt="test" />
        <div class="container">
          <div class="carousel-caption">
            <p>
              Here comes the review text. Lorem ipsum dolor sit, amet
              consectetur adipisicing elit. Quos, blanditiis! Lorem ipsum
              dolor sit, amet consectetur adipisicing elit. Eius, nobis.
            </p>
          </div>
          <div class="mt-1">
            <span class="fw-bold">Person</span> |
            <span class="fw-bold">Organization</span> - <span>Course</span> |
            <span>Date</span>
          </div>
        </div>
      </div>
      <!-- Second item -->
      <div class="carousel-item text-center">
        <img src="./images/review-test.jpg" class="img-fluid img-thumbnail rounded-circle review-img" alt="test" />
        <div class="container">
          <div class="carousel-caption">
            <p>
              Here comes the review text. Lorem ipsum dolor sit, amet
              consectetur adipisicing elit. Quos, blanditiis! Lorem ipsum
              dolor sit, amet consectetur adipisicing elit. Eius, nobis.
            </p>
          </div>
          <div class="mt-1">
            <span class="fw-bold">Person</span> |
            <span class="fw-bold">Organization</span> - <span>Course</span> |
            <span>Date</span>
          </div>
        </div>
      </div>
      <!-- Third item -->
      <div class="carousel-item text-center">
        <img src="./images/review-test.jpg" class="img-fluid img-thumbnail rounded-circle review-img" alt="test" />
        <div class="container">
          <div class="carousel-caption">
            <p>
              Here comes the review text. Lorem ipsum dolor sit, amet
              consectetur adipisicing elit. Quos, blanditiis! Lorem ipsum
              dolor sit, amet consectetur adipisicing elit. Eius, nobis.
            </p>
          </div>
        </div>
        <div class="mt-1">
          <span class="fw-bold">Person</span> |
          <span class="fw-bold">Organization</span> - <span>Course</span> |
          <span>Date</span>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Review section end -->

  <!-- Students section start -->
  <!-- <article class="flow">
    <h1>Our Students</h1>
    <p>
    Here are some of the most recent from individuals who attended this course:
    </p>
    <div class="team">
      <ul class="auto-grid" role="list">
        <li>
          <a href="https://www.instagram.com/" target="_blank" class="profile">
            <h2 class="profile__name">Anita Simmons</h2>
            <p>Wien 34 year</p>
            <img alt="Anita Simmons" src="https://source.unsplash.com/BhcutpohYwg/800x800" />
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/" target="_blank" class="profile">
            <h2 class="profile__name">Celina Harris</h2>
            <p>Linz 35 year</p>
            <img alt="Profile shot for Celina Harris" src="https://source.unsplash.com/j5KAuRrYX7g/800x800" />
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/" target="_blank" class="profile">
            <h2 class="profile__name">Ruby Morris</h2>
            <p>Graz 33 year</p>
            <img alt="Profile shot for Ruby Morris" src="https://source.unsplash.com/pQyIutdScOY/800x800" />
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/" target="_blank" class="profile">
            <h2 class="profile__name">Nicholas Castro</h2>
            <p>Wien 30 yea</p>
            <img alt="Profile shot for Nicholas Castro" src="https://source.unsplash.com/55JRsxcAiWE/800x800" />
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/" target="_blank" class="profile">
            <h2 class="profile__name">Marc Dixon</h2>
            <p>Tirol 29 year</p>
            <img alt="Profile shot for Marc Dixon" src="https://source.unsplash.com/5wn6DeAEcmE/800x800" />
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/" target="_blank" class="profile">
            <h2 class="profile__name">Chad Chadson</h2>
            <p>Linz 31 year</p>
            <img alt="Profile shot for Chad" src="https://source.unsplash.com/7jCYw6a2Wao/800x800" />
          </a>
        </li>
      </ul>
    </div>
  </article> -->
  <!-- Students section end -->

  <!-- Footer start -->
  <!-- This variable comes from the footer.php in components -->
  <?= $footer ?>
  <!-- Footer end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>