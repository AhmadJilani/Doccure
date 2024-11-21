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
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                                <h3 class="card-title">Account</h3>
                                                <div class="text-end">
                                                    <a title="Edit Profile" class="btn btn-primary btn-sm"
                                                        href="#account_modal" data-bs-toggle="modal"><i
                                                            class="fas fa-pencil"></i> Edit Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="profile-view-bottom">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="info-list">
                                                        <div class="title">Bank Name</div>
                                                        <div class="text" id="bank_name">Wells Fargo & Co</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="info-list">
                                                        <div class="title">Branch Name</div>
                                                        <div class="text" id="branch_name">Lenexa</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="info-list">
                                                        <div class="title">Account Number</div>
                                                        <div class="text" id="account_no">5396 5250 1908 3838</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="info-list">
                                                        <div class="title">Account Name</div>
                                                        <div class="text" id="account_name">Dr. Darren Elder</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="info-list">
                                                        <div class="title">Address</div>
                                                        <div class="text" id="account_name">Street 216 Foordmore Rd
                                                            City/Town Kerhonkson State/Province/Region New York
                                                            Zip/Postal Code 12446 Phone Number (845)626-5641 Country
                                                            United States Latitude 40.842996 Longitude -73.858228</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="card-effect">
                                                    <div class="account-card bg-success-light">
                                                        <span>$90.48</span> Earned
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card-effect">
                                                    <div class="account-card bg-warning-light">
                                                        <span>$0.00</span> Requested
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card-effect">
                                                    <div class="account-card bg-purple-light">
                                                        <span>$90.48</span> Balance
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card-effect">
                                                    <div class="account-card bg-danger-light">
                                                        <span>$90.48</span> Invest
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="card-effect">
                                                    <div class="account-card bg-danger-light">
                                                        <span>$90.48</span> Earned
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card-effect">
                                                    <div class="account-card bg-purple-light">
                                                        <span>$0.00</span> Requested
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card-effect">
                                                    <div class="account-card bg-warning-light">
                                                        <span>$90.48</span> Balance
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card-effect">
                                                    <div class="account-card bg-success-light">
                                                        <span>$90.48</span> Invest
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <a href="#payment_request_modal" class="btn btn-primary request_btn"
                                                    data-bs-toggle="modal">Payment Request</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body pt-0">

                                        <nav class="user-tabs mb-4">
                                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#pat_accounts"
                                                        data-bs-toggle="tab">Accounts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#pat_refundrequest"
                                                        data-bs-toggle="tab">Patients Refund Request</a>
                                                </li>
                                            </ul>
                                        </nav>


                                        <div class="tab-content pt-0">

                                            <div id="pat_accounts" class="tab-pane fade show active">
                                                <div class="card card-table mb-0">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-center mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Patient Name</th>
                                                                        <th>Amount</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>11 Nov 2023 <span
                                                                                class="d-block text-info">10.00
                                                                                AM</span></td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Richard
                                                                                    Wilson <span>#PT0016</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$150</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-success-light">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3 Nov 2023 <span
                                                                                class="d-block text-info">11.00
                                                                                AM</span></td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient1.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Charlene
                                                                                    Reed <span>#PT0001</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$200</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-success-light">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1 Nov 2023 <span
                                                                                class="d-block text-info">1.00 PM</span>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient2.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Travis
                                                                                    Trimble <span>#PT0002</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$75</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-success-light">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>30 Oct 2023 <span
                                                                                class="d-block text-info">9.00 AM</span>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient3.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Carl
                                                                                    Kelly <span>#PT0003</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$100</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-warning-light">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>28 Oct 2023 <span
                                                                                class="d-block text-info">6.00 PM</span>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient4.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Michelle
                                                                                    Fairfax <span>#PT0004</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$350</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-success-light">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>27 Oct 2023 <span
                                                                                class="d-block text-info">8.00 AM</span>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient5.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Gina
                                                                                    Moore <span>#PT0005</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$250</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-danger-light">Refunded</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="tab-pane fade" id="pat_refundrequest">
                                                <div class="card card-table mb-0">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-center mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Patient Name</th>
                                                                        <th>Amount</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>11 Nov 2023 <span
                                                                                class="d-block text-info">10.00
                                                                                AM</span></td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Richard
                                                                                    Wilson <span>#PT0016</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$150</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-success-light">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3 Nov 2023 <span
                                                                                class="d-block text-info">11.00
                                                                                AM</span></td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient1.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Charlene
                                                                                    Reed <span>#PT0001</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$200</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-success-light">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1 Nov 2023 <span
                                                                                class="d-block text-info">1.00 PM</span>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient2.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Travis
                                                                                    Trimble <span>#PT0002</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$75</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-success-light">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>30 Oct 2023 <span
                                                                                class="d-block text-info">9.00 AM</span>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient3.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Carl
                                                                                    Kelly <span>#PT0003</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$100</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-warning-light">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>28 Oct 2023 <span
                                                                                class="d-block text-info">6.00 PM</span>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient4.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Michelle
                                                                                    Fairfax <span>#PT0004</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$350</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-success-light">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>27 Oct 2023 <span
                                                                                class="d-block text-info">8.00 AM</span>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="patient-profile.php"
                                                                                    class="avatar avatar-sm me-2"><img
                                                                                        class="avatar-img rounded-circle"
                                                                                        src="assets/img/patients/patient5.jpg"
                                                                                        alt="User Image"></a>
                                                                                <a href="patient-profile.php">Gina
                                                                                    Moore <span>#PT0005</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>$250</td>
                                                                        <td><span
                                                                                class="badge rounded-pill bg-danger-light">Refunded</span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-success-light">
                                                                                    <i class="fas fa-check"></i> Accept
                                                                                </a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-sm bg-danger-light">
                                                                                    <i class="fas fa-times"></i> Cancel
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
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
                    </div>
                </div>
            </div>
        </div>


        <?php include_once 'footer.php'; ?>

    </div>


    <div class="modal fade custom-modal" id="payment_request_modal" role="dialog" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Payment Request</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="payment_request_form" method="post">
                        <input type="hidden" name="payment_type" id="payment_type" value="1">
                        <div class="mb-3">
                            <label class="mb-2">Request Amount</label>
                            <input type="text" name="request_amount" id="request_amount" class="form-control"
                                maxlength="6"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            <span class="help-block"></span>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">Description (Optional)</label>
                            <textarea class="form-control" name="description" id="description"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" id="request_btn" class="btn btn-primary">Request</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-modal" id="account_modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Account Details</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="accounts_form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="control-label mb-2">Bank Name</label>
                                    <input type="text" name="bank_name" class="form-control bank_name"
                                        value="Wells Fargo & Co">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="control-label mb-2">Branch Name</label>
                                    <input type="text" name="branch_name" class="form-control branch_name"
                                        value="Lenexa">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="control-label mb-2">Account Number</label>
                                    <input type="text" name="account_no" class="form-control account_no"
                                        value="5396 5250 1908 3838">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="control-label mb-2">Account Name</label>
                                    <input type="text" name="account_name" class="form-control acc_name"
                                        value="Dr. Darren Elder">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" id="acc_btn" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>