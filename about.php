<?php
session_start();
require_once './actions/components/db_connect.php';

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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css" />
    <title>First Aid Courses</title>
  </head>

  <body>
    <section id="header">
      <!-- Header start -->
      <div class="header-top">
        <div class="container d-flex justify-content-between flex-wrap">
          <a href="">
            <img class="logo" src="images/first_aid_navbar-logo.png" alt="" />
          </a>
          <div class="d-block d-lg-inline-flex ms-0 ms-lg-auto">
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
            <div class="my-btn ms-lg-auto">
              <a href="actions/login/login.php" class="nav-link">Login</a>
            </div>
            <div class="my-btn">
              <a href="actions/login/register.php" class="nav-link">Register</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar end -->
    </section>
    <div id="banner"></div>

    <!-- Courses start -->
    <div class="back">
      <div class="container" style="margin-top: 30px;">
        <div class="row">
          <div class="col-1"></div>
          <div class="col-4">
          <div class="card mb-4">
                        <div class="card-body text-center">
          <img src="images/profile1.jpg" align="right" class="responsive"/>
                        </div>
          </div>
          </div>
          <div class="col-6">
            <h2>Who am I?</h2>
          <p style="font-family: Roboto Condensed;">With over 20 years experience, Accredited First Aid Courses has been a pioneer among the Independent First Aid Training Providers.
    With a long history of looking after the needs of Victorian’s and their Occupational Safety, Accredited First Aid Course continues to maintain high training Standards with a clear focus on client needs. <br><br>
    
    Being a smaller company gives Accredited First Aid Courses the real opportunity to be “hands on” with the needs of all their clients: an attribute that has seen the company flourish over the years.
    The focus at Accredited First Aid Courses is to train clients in a friendly environment where all learners feel comfortable, regardless of background or physical capabilities. 
    Trainers strive to bring out the best in all participants with clear instruction, practical application of skills and through role play and scenario’s.
    It is the aim that all people trained by Accredited First Aid Courses will walk away with the confidence that they can perform their First Aid Duties to the utmost of their personal ability. <br><br>
    Underlying all of Accredited First Aid Courses training is the philosophy of care and humanity.
    In 1999, Rose Warner of Lower Austria attended a First Aid Class while she was expecting her first child. “I was worried that if something happened to my baby I wouldn’t know what to do.”
    Rose developed an interest in First Aid which grew stronger by the day so she booked herself into an Advanced First Aid class to improve her knowledge and skills. <br><br> The more Rose spoke to people at work and home about what she was learning, the more she realised how little most of them knew of what to do in a First Aid emergency.
    “I was constantly being told that I should teach First Aid as I had a strong passion for it and had a way of stimulating other people’s interest. <br><br> It was then that I decided to take up further study and start up my own training company, Accredited First Aid Courses.
    A nationally recognised training organisation, Accredited First Aid Courses has now been operating for over 20 years. It has become highly respected in the First Aid Industry and delivers its courses to a vast range of Business and organizations ranging from Day Care Centres, Personal Trainers, Massage Schools, School teachers, Students, Office Staff, Mothers groups and the list goes on. 
    In fact there is no industry that is exempt from learning First Aid especially in light of stringent Occupational Health and Safety laws. 
    “In the workforce or at home, we all have a Duty of Care to look after the people in our lives,”  adds Rose.</p>
          </div>
        </div>
      </div>
    
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
