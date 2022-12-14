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
    <style>
        .contact-form {
            margin: 3rem;
        }
    </style>
    <title>First Aid Courses</title>
  </head>

  <body>

    <!-- Header & Navbar start -->
    <!-- This variable comes from the navbar.php in components -->
    <?= $navbar ?>
    <!-- Header & Navbar end -->

    <div id="banner"></div>

    <!-- Courses start -->
    <div id="back">
    <img src="images/profile1.jpg" align="right" class="responsive"/><p>With over 20 years experience, Accredited First Aid Courses has been a pioneer among the Independent First Aid Training Providers.
    With a long history of looking after the needs of Victorian’s and their Occupational Safety, Accredited First Aid Course continues to maintain high training Standards with a clear focus on client needs.
    <br></p>
    
    <p>Being a smaller company gives Accredited First Aid Courses the real opportunity to be <b><em> “hands on”</em></b> with the needs of all their clients: an attribute that has seen the company flourish over the years.
    The focus at Accredited First Aid Courses is to train clients in a friendly environment where all learners feel comfortable, regardless of background or physical capabilities. 
    Trainers strive to bring out the best in all participants with clear instruction, practical application of skills and through role play and scenario’s.
    It is the aim that all people trained by Accredited First Aid Courses will walk away with the confidence that they can perform their First Aid Duties to the utmost of their personal ability.
    Underlying all of Accredited First Aid Courses training is the philosophy of care and humanity.</p> 
    <p>In 1999, Rose Warner of Lower Austria attended a First Aid Class while she was expecting her first child. <em>“I was worried that if something happened to my baby I wouldn’t know what to do.”</em> 
    Rose developed an interest in First Aid which grew stronger by the day so she booked herself into an Advanced First Aid class to improve her knowledge and skills. The more Rose spoke to people at work and home about what she was learning, the more she realised how little most of them knew of what to do in a First Aid emergency.
    <em> “I was constantly being told that I should teach First Aid as I had a strong passion for it and had a way of stimulating other people’s interest"</em>. It was then that I decided to take up further study and start up my own training company, Accredited First Aid Courses.</p> 
    <p>A nationally recognised training organisation, Accredited First Aid Courses has now been operating for over 20 years. It has become highly respected in the First Aid Industry and delivers its courses to a vast range of Business and organizations ranging from Day Care Centres, Personal Trainers, Massage Schools, School teachers, Students, Office Staff, Mothers groups and the list goes on. 
    In fact there is no industry that is exempt from learning First Aid especially in light of stringent Occupational Health and Safety laws. 
    <em>“In the workforce or at home, we all have a Duty of Care to look after the people in our lives,”</em>  adds Rose.</p>
  </div>
    <!-- Review section end -->

    <!-- Students section start -->
    <article class="flow">
      <h1>Our Students</h1>
      <p>
      Here are some of the most recent from individuals who attended this course:
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
