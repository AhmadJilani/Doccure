<?php
include 'database.php';

if (isset($_POST['ADD'])) {
    $subCat = $_POST['subCat'];

    $query = "INSERT INTO sub_categories SET name = '$subCat'";
    if (mysqli_query($conn, $query)) {
        echo '<script>window.location.href="subcatagorty.php?success=1";</script>';
    } else {
        echo '<script>window.location.href="subcatagorty.php?success=0";</script>';
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

    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <div class="main-wrapper">

        <?php include_once 'header2.php'; ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row inner-banner">
                    <div class="col-md-12 col-12 p-0 d-flex justify-content-between align-items-center">
                        <h2 class="breadcrumb-title align-items-start">Products Ledger</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Products Ledger</li>
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
                            //if (isset($_GET['success']) && $_GET['success'] == 1) {
                            //echo '<div class="alert alert-success">Product added successfully.</div>';
                            //// Redirect to login page after successful registration
                            //echo '<script>
                            //setTimeout(function() {
                            //window.location.href = "products-ledger.php";
                            //}, 1000);
                            //</script>';
                            //}else{
                            //
                            //}
                            ?>

                        <?php
							if (isset($_GET['success']) && $_GET['success'] == 1) {
							echo '<div class="alert alert-success">Product added successfully.</div>';
							// Redirect to login page after successful registration
							}else{

							}
								
							if (isset($_GET['error']) && $_GET['error'] == 1) {
							echo '<div class="alert alert-danger">Product added successfully.</div>';
							// Redirect to login page after successful registration
							}else{

							}
							?>


                        <?php if ($_GET['suc']==1) {?>
                        <div class="col-sm-12">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>SUCCESS!</strong> DEPOSIT REQ SUCESSFULLY SENT !
                            </div>
                        </div>
                        <?php }?>
                        <?php if ($_GET['error']==4) {?>
                        <div class="col-sm-12 ">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>WARNING!</strong> INVALID WALLET ACCOUNT !
                            </div>
                        </div><?php }?>
                        <?php if ($_GET['error']==2) {?>
                        <div class="col-sm-12 ">
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>WARNING!</strong> INVALID E-PIN !
                            </div>
                        </div><?php }?>

                        <?php if ($_GET['error']==1) {?>
                        <div class="col-sm-12 ">
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>WARNING!</strong> INSUFFICIENT FUNDS IN PURCHASE WALLET!
                            </div>
                        </div>
                        <?php }?>

                        <?php if ($_GET['error']==3) {?>
                        <div class="col-sm-12 ">
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>WARNING!</strong> INSUFFICIENT FUNDS IN BONUS WALLET!
                            </div>
                        </div>
                        <?php }?>


                        <?php if($_GET['add']==1){ ?>
                        <form action="" method="post">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                                <h3 class="card-title">Add Sub Catagory</h3>
                                                <div class="text-end">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-0">
                                                <label class="mb-2">Sub Catagory:</label>
                                                <input type="text" name="subCat" class="form-control fw-bold">
                                            </div>
                                        </div>

                                        <div class="mt-2 submit-section submit-btn-bottom">
                                            <button type="submit" name="ADD" class="btn btn-primary prime-btn">Save
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
                                    <h3 class="card-title">Sub Catagory</h3>
                                    <div class="text-end">
                                        <a title="Add Product" class="btn btn-primary btn-sm" data-bs-toggle="modal"><i
                                                class="fas fa-plus-circle"></i> <a href="subcatagorty.php?add=1">Add
                                                Sub Catagory</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-table">

                                <div class="card-body">

                                    <div class="table-responsive">

                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Cat ID</th>
                                                    <th>Cat Name</th>
                                                    <th>Name</th>
                                                    <th>Sub Cat ID</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
													$queryproducts = "SELECT * FROM sub_categories";
													$resultproducts = mysqli_query($conn, $queryproducts);
													while ($dataproducts = mysqli_fetch_assoc($resultproducts)) : ?>
                                                <tr>
                                                    <?php 
                                                    $queryproducts = "SELECT * FROM categories";
                                                    $resultproducts = mysqli_query($conn, $queryproducts);
                                                    while ($dataproducts1 = mysqli_fetch_assoc($resultproducts)) :                                                    
                                                    ?>
                                                    <td>
                                                        <a href="invoice-view.php"><?php echo $dataproducts1['id']; ?></a>
                                                    </td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="patient-profile.php"><?php echo $dataproducts1['name']; ?></a>
                                                        </h2>
                                                    </td>

                                                    <?php endwhile; ?>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="patient-profile.php" class="avatar avatar-sm me-2">
                                                                <img class="avatar-img rounded-circle"
                                                                src="assets/img/patients/patient.jpg"
                                                                alt="User Image">
                                                            </a>
                                                            <a href="patient-profile.php"><?php echo $dataproducts['name']; ?>
                                                            <span><?php echo $dataproducts['id']; ?></span></a>
                                                        </h2>
                                                    </td>
                                                    <td>
                                                        <a
                                                            href="invoice-view.php"><?php echo $dataproducts['id']; ?></a>
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
    </div>

    <?php include_once 'footer.php'; ?>
    <script>
    // Set today's date in the input field with the format YYYY-MM-DD
    document.getElementById('date').value = new Date().toISOString().split('T')[0];
    </script>
    <script data-cfasync="false" src="assets/plugins/cdn/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>