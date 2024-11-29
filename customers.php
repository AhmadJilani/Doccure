<?php
include 'database.php';
$ip = $_SERVER['REMOTE_ADDR'];
session_start();
if ($_SESSION["user_id"] == '') {
    header("Location: index.php");
}
?>
<?php
if (isset($_POST['submit'])) {
$fullname = $_POST['name'];                                    
$cell = $_POST['cell'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$company = $_POST['company'];
$user_type = $_POST['user_type'];

// Insert the form data into the customers table                            
$query = "INSERT INTO customers SET name = '$fullname', cell = '$cell', email = '$email', address = '$address', city = '$city', company = '$company', user_type = '$user_type', userid = '$_SESSION[user_id]'";

// Execute the query and check for success
if (mysqli_query($conn, $query)) {
    echo '<script>window.location.href="customers.php?success=1";</script>';
} else {
    echo '<script>window.location.href="customers.php?success=0";</script>';

}

// Close the database connection
mysqli_close($conn);
}
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

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="assets/plugins/dropzone/dropzone.min.css">

    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <div class="main-wrapper">

        <?php include_once 'header2.php'; ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row inner-banner">
                    <div class="col-md-12 col-12 p-0 d-flex justify-content-between align-items-center">
                        <h2 class="breadcrumb-title align-items-start">Accounts</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Accounts</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                        <?php include_once 'sidebar.php'; ?>

                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <?php
                    if (isset($_GET['success']) && $_GET['success'] == 1) {
                        echo '<div class="alert alert-success">Product added successfully.</div>';
                        // Redirect to login page after successful registration
                        echo '<script>
                        setTimeout(function() {
                        window.location.href = "customers.php";
                        }, 1000);
                        </script>';
                    }else{

                    }
                    ?>

                        <?php if($_GET['addCustomer']==1){ ?>
                        <form action="customers.php" method="post">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Customer Information</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Name <span class="text-danger">*</span></label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Cell <span class="text-danger">*</span></label>
                                                <input type="text" name="cell" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Address <span class="text-danger">*</span></label>
                                                <input type="text" name="address" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">City <span class="text-danger">*</span></label>
                                                <input type="text" name="city" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Company <span class="text-danger">*</span></label>
                                                <input type="text" name="company" class="form-control" required>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="user_type" class="mb-2">User Type: <span class="text-danger">*</span></label>
                                                <select class="form-control" name="user_type" required>
                                                    <option value="vendor">Vendor</option>
                                                    <option value="customer">Customer</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="user_type" class="mb-2">User Type: <span class="text-danger">*</span></label>
                                                <select class="form-control" name="user_type" required>
                                                    <option value="customer">Customer</option>
                                                    <option value="vendor">Vendor</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mt-2 submit-section submit-btn-bottom">
                                            <button type="submit" name="submit" class="btn btn-primary prime-btn">Save
                                                Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php }	?>

                        <div class="col-md-7 col-lg-8 col-xl-12">
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Customers</h3>
                                    <div class="text-end">
                                        <a title="Add Product" class="btn btn-primary btn-sm" data-bs-toggle="modal"><i
                                                class="fas fa-plus-circle"></i> <a
                                                href="customers.php?addCustomer=1">Add
                                                Customer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Sr.</th>
                                                    <th>User Type</th>
                                                    <th>Name</th>
                                                    <th>Cell</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th>Company</th>  
                                                    <th>BCODE</th>                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $sr =0;
													$queryproducts = "SELECT * FROM customers";
													$resultproducts = mysqli_query($conn, $queryproducts);
													while ($dataproducts = mysqli_fetch_assoc($resultproducts)) : 
                                                    $sr++
                                                    ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $sr; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['user_type']; ?>
                                                    </td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="patient-profile.php" class="avatar avatar-sm me-2">
                                                                <img class="avatar-img rounded-circle"
                                                                    src="assets/img/patients/patient.jpg"
                                                                    alt="User Image">
                                                            </a>
                                                            <a href="patient-profile.php"><?php echo $dataproducts['name']; ?>
                                                                <span>#<?php echo $dataproducts['id']; ?></span></a>
                                                        </h2>
                                                    </td>
                                                    <td>
                                                        <?php echo $subCatId=$dataproducts['cell']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['email']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['address']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['city']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['company']; ?>
                                                    </td>
                                                    <?php $userid = $dataproducts['userid'];
                                                    $query_members = "SELECT * FROM register WHERE id = '$userid'";
                                                    $result_members = mysqli_query($conn, $query_members);
                                                    $data_members = mysqli_fetch_object($result_members);
                                                    $bcode=$data_members->BCODE;
                                                    ?>
                                                    <td title=<?php echo $data_members->name; ?>>
                                                    <?php echo $bcode ; ?>                                                        
                                                    </td>                          
                                                </tr>
                                                <?php endwhile; ?>


                                            </tbody>
                                        </table>
                                    </div>

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

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/plugins/dropzone/dropzone.min.js"></script>

    <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <script src="assets/js/profile-settings.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>