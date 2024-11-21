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

<body>

    <div class="main-wrapper">

        <?php include_once 'header2.php'; ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row inner-banner">
                    <div class="col-md-12 col-12 p-0 d-flex justify-content-between align-items-center">
                        <h2 class="breadcrumb-title align-items-start">Invoices</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Invoices</li>
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
                        <div class="card card-table">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Serial #</th>
                                                <th>Invoice No</th>
                                                <th>Customers</th>
                                                <th>Amount</th>
                                                <th>Paid On</th>
                                                <th>Mode</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $serial = 0;
                                        $queryinvoice = "SELECT * FROM sales";
                                        $resultinvoice = mysqli_query($conn, $queryinvoice);
                                        while ($datainvoice = mysqli_fetch_assoc($resultinvoice)) : $serial++ ;
                                        $pay_type=$datainvoice['pay_type']; 
                                        $cstId=$datainvoice['cstId'];	

                                        $query_members = "SELECT * FROM customers WHERE id = '$cstId'";
                                        $result_members = mysqli_query($conn, $query_members);
                                        $data_members = mysqli_fetch_object($result_members);
                                        $Cusname=$data_members->name;
                                        ?>
                                            <tr>
                                                <td><?php echo $serial; ?></td>
                                                </td>
                                                <td>
                                                    <?php echo $datainvoice['invNum']; ?>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/img/patients/patient.jpg" alt="User Image">
                                                        </a>
                                                        <a href=""><?php echo $Cusname; ?>
                                                            <span><?php echo $datainvoice['cstId']; ?></span></a>
                                                    </h2>
                                                </td>
                                                <td>$<?php echo $datainvoice['amount']; ?></td>
                                                <td><?php echo $datainvoice['date']; ?></td>

                                                <td><?php if($pay_type=='COD'){?>
                                                    <span
                                                        class="badge rounded-pill bg-success-light"><?php echo $pay_type=$datainvoice['pay_type']; ?></span><?php }?>
                                                    <?php if($pay_type=='CASH'){?>
                                                    <span
                                                        class="badge rounded-pill bg-danger-light"><?php echo $pay_type=$datainvoice['pay_type']; ?></span><?php }?>
                                                </td>
                                                <td>
                                                    <div class="table-action">
                                                        <a href="invoice-view.php?inv=<?php echo $datainvoice['invNum']; ?>" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye"></i> View
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-sm bg-primary-light">
                                                            <i class="fas fa-print"></i> Print
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

        <?php include_once 'footer.php'; ?>

    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/invoices.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 20:41:35 GMT -->

</html>