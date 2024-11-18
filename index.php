<?php
session_start();
include 'database.php';

// If the user is already logged in, redirect to the home page
if (isset($_SESSION['user_id'])) {
    header("Location: doctor-dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Doccure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat." />
    <meta name="keywords"
        content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template" />
    <meta name="author" content="Practo Clone HTML Template - Doctor Booking Template" />
    <meta property="og:url" content="https://doccure.dreamguystech.com/html/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure" />
    <meta property="og:description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat." />
    <meta property="og:image" content="assets/img/preview-banner.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="https://doccure.dreamguystech.com/html/" />
    <meta property="twitter:url" content="https://doccure.dreamguystech.com/html/" />
    <meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure" />
    <meta name="twitter:description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat." />
    <meta name="twitter:image" content="assets/img/preview-banner.jpg" />

    <link href="assets/img/favicon.png" rel="icon" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/feather.css" />

    <link rel="stylesheet" href="assets/css/custom.css" />
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
                                    <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login" />
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3>Login <span>Doccure</span></h3>
                                    </div>

                                    <?php
// Start the session to manage user session after login


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    if (empty($email) || empty($password)) {
        echo '<div class="alert alert-danger">Both fields are required</div';
    } else {
        // Check if the user exists
        $query = "SELECT * FROM register WHERE email = '$email' AND status = 'A'";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Successful login, start the session and redirect to home page
                $_SESSION['user_id'] = $user['id']; // Store user ID in session
                // Insert user into database
                $query = "INSERT INTO login (email, password, status, doc) VALUES ('$email',  '$password', 'A', NOW())";
                mysqli_query($conn, $query);
                // header("Location: doctor-dashboard.php");
                exit;
            } else {
                echo '<div class="container my-3"><div class="alert alert-danger">Incorrect password</div></div>';
            }
        } else {
            echo '<div class="container my-3"><div class="alert alert-danger">No account found with that email</div></div>';
        }
    }
}
?>



                                    <form action="index.php" method="post">
                                        <div class="mb-3 form-focus">
                                            <input name="email" type="email" class="form-control floating" />
                                            <label class="focus-label">Email</label>
                                        </div>
                                        <div class="mb-3 form-focus">
                                            <input name="password" type="password" class="form-control floating" />
                                            <label class="focus-label">Password</label>
                                        </div>
                                        <div class="text-end">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                        </div>
                                        <button class="btn btn-primary w-100 btn-lg login-btn" type="submit"
                                            name="login">
                                            Login
                                        </button>
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
                                        <div class="text-center dont-have">
                                            Don’t have an account?
                                            <a href="doctor-register.php">Register</a>
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

<!-- Mirrored from doccure.dreamguystech.com/html/template/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 20:43:57 GMT -->

</html>