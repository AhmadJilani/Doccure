<?php 
include 'database.php';
?>

<?php
session_start();
if ($_SESSION["user_id"] == '') {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Doccure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="keywords"
        content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template">
    <meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
    <meta property="og:url" content="https://doccure.dreamguystech.com/html/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure">
    <meta property="og:description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta property="og:image" content="assets/img/preview-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://doccure.dreamguystech.com/html/">
    <meta property="twitter:url" content="https://doccure.dreamguystech.com/html/">
    <meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure">
    <meta name="twitter:description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="twitter:image" content="assets/img/preview-banner.jpg">

    <link href="assets/img/favicon.png" rel="icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="account-page">
    <div class="main-wrapper">

        <?php include_once 'header1.php'; ?>

        <div class="content top-space">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="assets/img/login-banner.png" class="img-fluid" alt="Login Banner">
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3>Register</h3>
                                    </div>

                                    <?php
                                    if (isset($_POST['submit'])) {
                                    $fullname = $_POST['name'];
                                    $cellphone = $_POST['cellphone'];
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];
                                    $user_type = $_POST['user_type']; // Capture user type
                                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                                    $errors = array();

                                    // Validation checks
                                    if (empty($fullname) || empty($cellphone) || empty($email) || empty($password) || empty($user_type)) {
                                    array_push($errors, "All fields are required");
                                    }
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    array_push($errors, "Invalid email format");
                                    }
                                    if (strlen($password) < 4) { // Corrected password length check
                                    array_push($errors, "Password must be at least 8 characters");
                                    }

                                    // Check if the user_type is valid (either 'doctor' or 'patient')
                                    if ($user_type !== 'doctor' && $user_type !== 'patient') {
                                    array_push($errors, "Invalid user type selected");
                                    }

                                    // Display errors or proceed with registration
                                    echo '<div class="my-3">';
                                    if (count($errors) > 0) {
                                    foreach ($errors as $error) {
                                    echo '<div class="alert alert-danger">' . $error . '</div>';
                                    }                                
                                    } else {
                                    // Insert user into database
                                    $query = "INSERT INTO register (name, cell, email, password, status, user_type) 
                                    VALUES ('$fullname', '$cellphone', '$email', '$passwordHash', 'A', '$user_type')";

                                    if (mysqli_query($conn, $query)) {                                    
                                    echo '<div class="alert alert-success">Registration successful</div>';                                   

                                    // Redirect to login page after successful registration
                                    echo '<script>
                                    setTimeout(function() {
                                    window.location.href = "index.php";
                                    }, 1000);
                                    </script>';
                                    } else {                                    
                                    echo '<div class="alert alert-danger">Registration failed: ' . mysqli_error($conn) . '</div>';                                    
                                    }
                                    }
                                    echo '</div>';
                                    }
                                    ?>


                                    <form action="doctor-register.php" method="post">
                                        <div class="mb-3 form-focus">
                                            <input name="name" type="text" id="name" class="form-control floating">
                                            <label class="focus-label">Name</label>
                                        </div>
                                        <div class="mb-3 form-focus">
                                            <input name="cellphone" type="text" id="cellphone"
                                                class="form-control floating">
                                            <label class="focus-label">Mobile Number</label>
                                        </div>
                                        <div class="mb-3 form-focus">
                                            <input name="email" type="email" id="email" class="form-control floating">
                                            <label class="focus-label">Email</label>
                                        </div>
                                        <div class="mb-3 form-focus">
                                            <input name="password" type="password" id="password"
                                                class="form-control floating">
                                            <label class="focus-label">Create Password</label>
                                        </div>
                                        <label for="user_type">User Type:</label>
                                        <select name="user_type" required>
                                            <option value="doctor">Doctor</option>
                                            <option value="patient">Patient</option>
                                        </select>
                                        <div class="text-end">
                                            <a class="forgot-link" href="index.php">Already have an account?</a>
                                        </div>
                                        <button class="btn btn-primary w-100 btn-lg login-btn" name="submit"
                                            type="submit">Signup</button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="row social-login">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-facebook w-100"><i
                                                        class="fab fa-facebook-f me-1"></i> Login</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-google w-100"><i
                                                        class="fab fa-google me-1"></i> Login</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php include_once 'footer.php'; ?>

    </div>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>