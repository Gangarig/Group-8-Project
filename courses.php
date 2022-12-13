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
    <section id="header">
      <!-- Header start -->
      <div class="header-top">
        <div class="container d-flex justify-content-between">
          <a href="">
            <img class="logo" src="images/first_aid_navbar-logo.png" alt="" />
          </a>
          <div class="d-inline-flex ml-auto">
            <div class="headCont bi bi-telephone-fill">
              Call us for free:<br /><a href="tel:+43 1 645 645"
                >+43 1 645 645</a
              >
            </div>
            <div class="headCont bi bi-envelope-at-fill">
              Send us an e-mail: <br /><a href="mailto:firstaidcourses@mail.com"
                >firstaidcourses@mail.com</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- Header end -->

      <!-- Navbar start -->
      <nav class="navbar navbar-expand-lg navbar-light navbar-top">
        <div class="container nav-wrapper p-0">
          <a href="" class="nav-link" id="collapsed-home-link">Home</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarToggler"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="" class="nav-link" id="expanded-home-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Courses</a>
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
            <div class="my-btn ms-auto">
              <a href="" class="nav-link">Login</a>
            </div>
            <div class="my-btn ms-left">
              <a href="" class="nav-link">Register</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar end -->
    </section>
    <div id="banner"></div>
    <!-- Main start -->
    <div class="cards-course">
    <?php
      require_once 'actions/components/db_connect.php';

      session_start();
      if(isset($_SESSION["status"])){
        $role= $_SESSION['status'];
        if($role == 'ADMIN'){
            echo '<a href="/Group-8-Project/create_courses.php">Create course</a>';
        }
      }
      $result = mysqli_query($link, "SELECT * FROM courses");

      while($row = mysqli_fetch_array($result)) { 
      ?>
      <div class="card-course card-1">
        <div class="card__icon bi bi-currency-euro">
          <?php 
            if(isset($role)){ ?>
          <span><b><?= $role === 'PRIVATE' ? $row['price_private'] : ($role === 'BUSINESS' ? $row['price_business'] : ($role === 'STUDENT' ? $row['price_student'] : 'Please login'))?></b></span>
          <?php } ?>
        </div>
        <p class="card__exit bi bi-alarm"><?= $row['duration']?></p>
        <h2 class="card__title"><?= $row['name']?></h2>
        <p class="card_info"><?= $row['description']?></p>
        <p class="card__apply">
          <?php if(isset($role)){ ?><a class="card__link btn btn-secondary" href="#">Apply Now <i class="fas fa-arrow-right"></i></a><?php } ?>
        </p>
        
      </div>
      <?php
        }
      ?>
    </div>

    <!-- Main end -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div class="first">
              <h4>Courses</h4>
              <p>First Aid Driving License</p>
              <p>How to use a defibrillator</p>
              <p>First Aid at Work (FAW)</p>
              <p>Safety for babies & children</p>
              <p>First Aid Course</p>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="second">
              <h4>Navigate</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Registration course</a></li>
                <li><a href="#">Reservations</a></li>
                <li><a href="#">Students</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="third">
              <h4>Contact</h4>
              <ul>
                <li>Rose Warner</li>
                <li></li>

                <li>
                  <i class="bi bi-envelope" style="padding-right: 10px; color: #f5cb5c"> </i>  firstaidcourses@mail.com
                </li>
                <li><i class="bi bi-telephone-fill"style="padding-right: 10px; color: #f5cb5c"> </i> +43 1 645 645</li>

                <li><i class="bi bi-geo-alt-fill"style="padding-right: 10px; color: #f5cb5c"> </i> Vienna, AT</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="line"></div>
            <div class="second2">
              <a href="https://intagram.com" target="_blank">
                <i class="bi bi-instagram" style="font-size: 40px; color: #333533""></i
              ></a>
              <a href="https://youtube.com/" target="_blank">
                <i class="bi bi-youtube" style="font-size: 40px; color: #333533""></i
              ></a>
              <a
                href="https://www.linkedin.com"
                target="_blank"
              >
                <i class="bi bi-linkedin" style="font-size: 40px; color: #333533"></i
              ></a>
              <a
                href="https://www.facebook.com"
                target="_blank"
                ><i class="bi bi-facebook" style="font-size: 40px; color: #333533"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>