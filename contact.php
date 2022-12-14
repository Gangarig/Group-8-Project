<?php 
session_start();
require_once('./actions/components/boot.php');
require_once('./actions/components/db_connect.php');
require_once('./actions/components/navbar.php');
require_once('./actions/components/footer.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <form class="contact-form" id="form" method="post" action="/Group-8-Project/actions/contact_create.php" enctype="multipart/form-data">
      <label for="name">Name:</label><br>
      <input class="form-control" type="text" id="name" name="name" value=""><br><br>
      <label for="surname">Surname:</label><br>
      <input class="form-control" type="text" id="surname" name="surname" value=""><br><br>
      <label for="email">E-mail:</label><br>
      <input class="form-control" type="text" id="email" name="email" value=""><br><br>
      <label for="text">Text:</label><br>
      <textarea class="form-control" name="text" cols:"30" rows="10"></textarea>
      <input class="btn btn-block btn-dark" type="submit" value="Send">
    </form>

    <!-- Footer start -->
    <!-- This variable comes from the footer.php in components -->
    <?= $footer ?>
    <!-- Footer end -->

  </body>
</html>