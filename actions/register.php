<?php
session_start(); // start a new session or continues the previous
if (isset($_SESSION['user']) != "") {
    header("Location: home.php"); // redirects to home.php
}
if (isset($_SESSION['admin']) != "") {
    header("Location: dashboard.php"); // redirects to home.php
}
require_once 'db_connect.php';
require_once 'file_upload.php';
require_once 'boot.php';

$error = false;
$name = $birth_date = $email = $address = $password = $picture = $phone_number = $address =  '';
$nameError = $birth_dateError = $emailError = $addressError = $passwordError = $picError = $phone_numberError = $passwordError = '';
if (isset($_POST['signup'])) {

    // sanitise user input to prevent sql injection
    // trim - strips whitespace (or other characters) from the beginning and end of a string
    $name = trim($_POST['name']);


    // strip_tags -- strips HTML and PHP tags from a string
    $name = strip_tags($name);

    // htmlspecialchars converts special characters to HTML entities
    $name = htmlspecialchars($name);

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $address = trim($_POST['address']);
    $address = strip_tags($address);
    $address = htmlspecialchars($address);

    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    $phone_number = strip_tags($_POST['phone_number']);
    $phone_number = htmlspecialchars($phone_number);
    
    $birth_date = trim($_POST['birth_date']);

    $uploadError = '';
    $picture = file_upload($_FILES['profile_img']);

    // basic name validation
    if (empty($name)) {
        $error = true;
        $nameError = "Please enter your full name and surname";
    } else if (strlen($name) < 3 ) {
        $error = true;
        $nameError = "Name and surname must have at least 3 characters.";
    } else if (!preg_match("/^[a-zA-Z]+$/", $name) ) {
        $error = true;
        $nameError = "Name and surname must contain only letters and no spaces.";
    }

    // basic email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
    } else {
        // checks whether the email exists or not
        $query = "SELECT email FROM user WHERE email='$email'";
        $result = mysqli_query($link, $query);
        $count = mysqli_num_rows($result);
        if ($count != 0) {
            $error = true;
            $emailError = "Provided Email is already in use.";
        }
    }

    // checks if the address input was left empty
    if (empty($address)) {
        $error = true;
        $addressError = "Please enter your address.";
    }
    if (empty($phone_number)) {
        $error = true;
        $phone_numberError = "Please enter your phone number.";
    }
    if (empty($birth_date)) {
        $error = true;
        $birth_dateError = "Please enter your birth date.";
    }
    

    // password validation
    if (empty($password)) {
        $error = true;
        $passwordError = "Please enter password.";
    } else if (strlen($password) < 6) {
        $error = true;
        $passwordError = "Password must have at least 6 characters.";
    }

    // password hashing for security
        $password = hash('sha256', $password);
    // if there's no error, continue to signup
    if (!$error) {

        $query = "INSERT INTO user(name, birth_date, email, phone_number, address, profile_img ,password)
                  VALUES ('$name','$birth_date','$email','$phone_number','$address','$picture->fileName','$password')";
        $res = mysqli_query($link, $query);

        if ($res) {
            $errTyp = "success";
            $errMSG = "Successfully registered, you may login now";
            $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";
            $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
        }
    }
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration System</title>
</head>

<body>
       
    <div class="container mt-5 pt-5 d-flex flex-column align-items-center justify-content-center">
        <form class="w-50" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
            <h2>Sign Up.</h2>
            <?php
            if (isset($errMSG)) {
            ?>
                <div class="alert alert-<?php echo $errTyp ?>">
                    <p><?php echo $errMSG; ?></p>
                    <p><?php echo $uploadError; ?></p>
                </div>

            <?php
            }
            ?>
            <input type="text" name="name" class="form-control m-1 " placeholder="First Name and Last Name" maxlength="50" value="<?php echo $name ?>" />
            <span class="text-danger"> <?php echo $nameError; ?> </span>
            <input type="email" name="email" class="form-control m-1" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
            <span class="text-danger"> <?php echo $emailError; ?> </span>
            <input type="text" name="phone_number" class="form-control m-1" placeholder="Enter your phone number"  value="<?php echo $phone_number ?>" />
            <span class="text-danger"> <?php echo $phone_numberError; ?> </span>
            <input type="date" name="birth_date" class="form-control m-1" value="<?php echo $birth_date ?>" />
            <span class="text-danger"> <?php echo $birth_dateError; ?> </span>
            
            <div class="d-flex">
                <input class='form-control m-1 w-50' type="text" name="address" placeholder="Enter Your Address" value="<?php echo $address ?>" />
                <span class="text-danger"> <?php echo $addressError; ?> </span>
                <input class='form-control m-1 w-50' type="file" name="profile_img">
                <span class="text-danger"> <?php echo $picError; ?> </span>
            </div>
            <input type="password" name="password" class="form-control m-1" placeholder="Enter your Password" maxlength="15" />
            <span class="text-danger"> <?php echo $passwordError; ?> </span>
            <div class="m-1">
            <button type="submit" class="btn btn-block btn-dark" name="signup">Sign Up</button>
            <a class="btn-dark btn" href="Login.php">Login here</a>
            </div>
        </form>
    </div>

</body>
</html>