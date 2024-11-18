<?php
include 'database.php';

if (isset($_POST['submit'])) {
$date = $_POST['date'];                                    
$invNum = $_POST['invNum'];
$cstId = $_POST['cstId'];
$details = $_POST['details'];
$pay_type = $_POST['pay_type'];
$amnt = $_POST['amnt'];

// Insert the form data into the sales table                            
$query = "INSERT INTO sales SET date = '$date', invNum = '$invNum', cstId = '$cstId', details = '$details', pay_type = '$pay_type', amnt = '$amnt'";

// Execute the query and check for success
if (mysqli_query($conn, $query)) {
    echo '<script>window.location.href="sales.php?success=1";</script>';
} else {
    echo '<script>window.location.href="sales.php?success=0";</script>';

}

// Close the database connection
mysqli_close($conn);
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
                        window.location.href = "sales.php";
                        }, 1000);
                        </script>';
                    }else{

                    }
                    ?>
                        <?php if($_GET['addSales']==1){ ?>
                        <form action="" method="post">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sales Information</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-0">
                                                <label for="date" class="mb-2">Date:</label>
                                                <input type="date" name="date" class="form-control fw-bold" id="date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Invoice Number <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="invNum" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Customer ID & Name</label>
                                                <select class="form-control" id="cstId" name="cstId" required>
                                                    <option value="">Select a Customer</option>
                                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <option value="<?php echo $row['id']; ?>">
                                                        <?php echo "ID-" . $row['id'] . ' Name-' . $row['name']; ?>
                                                    </option>
                                                    <?php endwhile; ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Details <span class="text-danger">*</span></label>
                                                <input type="text" name="details" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Payment Method</label>
                                                <select name="pay_type" class="form-control" id="pay_type">
                                                    <option selected>Select mode of payment</option>
                                                    <option>COD</option>
                                                    <option>PAID</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Amount <span class="text-danger">*</span></label>
                                                <input type="number" name="amnt" class="form-control" required>
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
                                    <h3 class="card-title">Sales</h3>
                                    <div class="text-end">
                                        <a title="Add Sales" class="btn btn-primary btn-sm" data-bs-toggle="modal"><i
                                                class="fas fa-plus-circle"></i> <a href="sales.php?addSales=1">Add
                                                Sales</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Customer ID</th>
                                                    <th>User Type</th>
                                                    <th>Name</th>
                                                    <th>Cell</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th>Company</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
													$queryproducts = "SELECT * FROM customers";
													$resultproducts = mysqli_query($conn, $queryproducts);
													while ($dataproducts = mysqli_fetch_assoc($resultproducts)) : ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $catid=$dataproducts['id']; ?>
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
                                                    <td>
                                                        <div class="table-action">
                                                            <a href="invoice-view.php" class="btn btn-sm bg-info-light">
                                                                <i class="far fa-eye"></i> View
                                                            </a>


                                                        </div>


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

<script>
// Set today's date in the input field with the format YYYY-MM-DD
document.getElementById('date').value = new Date().toISOString().split('T')[0];
</script>

</html>