<?php
include 'database.php';
session_start();

// Process login form submission
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    if (empty($email) || empty($password)) {
        echo '<div class="alert alert-danger">Both fields are required</div>';
    } else {
        // Check if the user exists
        $query = "SELECT * FROM register WHERE email = '$email' AND status = 'A'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Successful login, start the session and redirect to the dashboard
                $_SESSION['user_id'] = $user['id']; // Store user ID in session
                $_SESSION['email'] = $user['email'];
                

                // Insert user into login table
                $query = "INSERT INTO login (email, password, status, doc) VALUES ('$email', '$password', 'A', NOW())";
                mysqli_query($conn, $query);

                header("Location: doctor-dashboard.php");
                exit();
            } else {
                echo '<div class="container my-3"><div class="alert alert-danger">Incorrect password</div></div>';
            }
        } else {
            echo '<div class="container my-3"><div class="alert alert-danger">No account found with that email</div></div>';
        }
    }
}
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Doccure</title>
    <!-- other meta tags -->
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

                                    <form action="" method="post">
                                        <div class="mb-3 form-focus">
                                            <input name="email" type="email" class="form-control floating" required />
                                            <label class="focus-label">Email</label>
                                        </div>
                                        <div class="mb-3 form-focus">
                                            <input name="password" type="password" class="form-control floating" required />
                                            <label class="focus-label">Password</label>
                                        </div>
                                        <div class="text-end">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <button class="btn btn-primary w-100 btn-lg login-btn" type="submit" name="login">
                                            Login
                                        </button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="row social-login">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-facebook w-100">
                                                    <i class="fab fa-facebook-f me-1"></i> Login
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-google w-100">
                                                    <i class="fab fa-google me-1"></i> Login
                                                </a>
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

</html>
