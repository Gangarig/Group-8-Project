<?php
session_start();
require_once './actions/components/db_connect.php';

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
              <a href="actions/login/login.php" class="nav-link">Login</a>
            </div>
            <div class="my-btn ms-left">
              <a href="actions/login/register.php" class="nav-link">Register</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar end -->
    </section>
    <div id="banner"></div>

    <!-- Trainer Cards start -->
    <div class="wrapper">
      <div class="card">
        <div class="img-wrapper"><img src="images/profile1.jpg" /></div>
        <div class="details">
          <h3>Rose Warner</h3>
          <h5>Training Manager</h5>
          <div class="social-icons">
            <button type="button" class="btn btn-secondary">About me</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img-wrapper"><img src="images/profile2.jpg" /></div>
        <div class="details">
          <h3>Emily Smith</h3>
          <h5>Lead Trainer</h5>
          <div class=".about-me">
            <button type="button" class="btn btn-secondary">About me</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img-wrapper"><img src="images/profile3.jpg" /></div>
        <div class="details">
          <h3>Emily Mitchell</h3>
          <h5>Trainer</h5>
          <div class="social-icons">
            <button type="button" class="btn btn-secondary">About me</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Trainer Cards end -->

    <!-- Review section start -->
    <div id="myCarousel" class="carousel slide w-50 mx-auto my-5">
      <div class="carousel-inner">
        <!-- First item -->
        <div class="carousel-item active text-center">
          <img
            src="./images/review-test.jpg"
            class="img-fluid img-thumbnail rounded-circle review-img"
            alt="test"
          />
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
          <img
            src="./images/review-test.jpg"
            class="img-fluid img-thumbnail rounded-circle review-img"
            alt="test"
          />
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
          <img
            src="./images/review-test.jpg"
            class="img-fluid img-thumbnail rounded-circle review-img"
            alt="test"
          />
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
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Review section end -->

    <!-- Students section start -->
    <article class="flow">
      <h1>Our Students</h1>
      <p>
        Here comes the review text. Lorem ipsum dolor sit, amet consectetur
        adipisicing elit. Quos, blanditiis! Lorem ipsum dolor sit, amet
        consectetur adipisicing elit. Eius, nobis.
      </p>
      <div class="team">
        <ul class="auto-grid" role="list">
          <li>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="profile"
            >
              <h2 class="profile__name">Anita Simmons</h2>
              <p>Wien 34 year</p>
              <img
                alt="Anita Simmons"
                src="https://source.unsplash.com/BhcutpohYwg/800x800"
              />
            </a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="profile"
            >
              <h2 class="profile__name">Celina Harris</h2>
              <p>Linz 35 year</p>
              <img
                alt="Profile shot for Celina Harris"
                src="https://source.unsplash.com/j5KAuRrYX7g/800x800"
              />
            </a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="profile"
            >
              <h2 class="profile__name">Ruby Morris</h2>
              <p>Graz 33 year</p>
              <img
                alt="Profile shot for Ruby Morris"
                src="https://source.unsplash.com/pQyIutdScOY/800x800"
              />
            </a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="profile"
            >
              <h2 class="profile__name">Nicholas Castro</h2>
              <p>Wien 30 yea</p>
              <img
                alt="Profile shot for Nicholas Castro"
                src="https://source.unsplash.com/55JRsxcAiWE/800x800"
              />
            </a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="profile"
            >
              <h2 class="profile__name">Marc Dixon</h2>
              <p>Tirol 29 year</p>
              <img
                alt="Profile shot for Marc Dixon"
                src="https://source.unsplash.com/5wn6DeAEcmE/800x800"
              />
            </a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="profile"
            >
              <h2 class="profile__name">Chad Chadson</h2>
              <p>Linz 31 year</p>
              <img
                alt="Profile shot for Chad"
                src="https://source.unsplash.com/7jCYw6a2Wao/800x800"
              />
            </a>
          </li>
        </ul>
      </div>
    </article>
    <!-- Students section end -->

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div class="first">
              <h4>Courses</h4>
              <p>Course 1</p>
              <p>Course 2</p>
              <p>Course 3</p>
              <p>Course 4</p>
              <p>Course 5</p>
              <p>Course 6</p>
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
                  <i
                    class="bi bi-envelope"
                    style="padding-right: 10px; color: #f5cb5c"
                  >
                  </i>
                  firstaidcourses@mail.com
                </li>
                <li>
                  <i
                    class="bi bi-telephone-fill"
                    style="padding-right: 10px; color: #f5cb5c"
                  >
                  </i>
                  +43 1 645 645
                </li>

                <li>
                  <i
                    class="bi bi-geo-alt-fill"
                    style="padding-right: 10px; color: #f5cb5c"
                  >
                  </i>
                  Vienna, AT
                </li>
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
                <i
                  class="bi bi-instagram"
                  style="font-size: 40px; color: #333533"
                ></i
              ></a>
              <a href="https://youtube.com/" target="_blank">
                <i
                  class="bi bi-youtube"
                  style="font-size: 40px; color: #333533"
                ></i
              ></a>
              <a href="https://www.linkedin.com" target="_blank">
                <i
                  class="bi bi-linkedin"
                  style="font-size: 40px; color: #333533"
                ></i
              ></a>
              <a href="https://www.facebook.com" target="_blank"
                ><i
                  class="bi bi-facebook"
                  style="font-size: 40px; color: #333533"
                ></i
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
