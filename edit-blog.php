<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure.dreamguystech.com/html/template/edit-blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 20:44:11 GMT -->

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
                        <h2 class="breadcrumb-title align-items-start">Edit Blog</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Edit Blog</li>
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
                        <div class="doc-review review-listing custom-edit-service">
                            <div class="row mb-5">
                                <div class="col">
                                    <ul class="nav nav-tabs nav-tabs-solid">
                                        <li class="nav-item">
                                            <a class="nav-link" href="doctor-blog.php">Acitive Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="doctor-pending-blog.html">Pending Blog</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <a class="btn btn-primary btn-sm" href="doctor-add-blog.html"><i
                                            class="fas fa-plus me-1"></i> Add Blog</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="pb-3">Edit Blog</h3>
                                    <form method="post" enctype="multipart/form-data" autocomplete="off"
                                        id="update_service"
                                        action="https://doccure.dreamguystech.com/html/template/doctor-blog.php">
                                        <input type="hidden" name="csrf_token_name"
                                            value="0146f123a4c7ae94253b39bca6bd5a5e">
                                        <div class="service-fields mb-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Blog Title <span
                                                                class="text-danger">*</span></label>
                                                        <input type="hidden" name="service_id" id="service_id"
                                                            value="18">
                                                        <input class="form-control" type="text" name="service_title"
                                                            id="service_title"
                                                            value="Doccure – Making your clinic painless visit?"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-fields mb-3">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Category <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select form-control" name="category"
                                                            required>
                                                            <option value>Automobile</option>
                                                            <option value="2" selected="selected">Construction</option>
                                                            <option value="3">Interior</option>
                                                            <option value="4">Cleaning</option>
                                                            <option value="5">Electrical</option>
                                                            <option value="6">Carpentry</option>
                                                            <option value="7">Computer</option>
                                                            <option value="8">Painting</option>
                                                            <option value="9">Car Wash</option>
                                                            <option value="10">Category Test</option>
                                                            <option value="11">dfdf</option>
                                                            <option value="12">Equipment</option>
                                                            <option value="13">Test category1</option>
                                                            <option value="14">Farming</option>
                                                            <option value="15">Test Category02</option>
                                                            <option value="16">Laundry</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Sub Category <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select form-control" name="subcategory">
                                                            <option value="5">Others</option>
                                                            <option value="6">Others</option>
                                                            <option value="7">Others</option>
                                                            <option value="8">House cleaning</option>
                                                            <option value="9">Others</option>
                                                            <option value="10">Others</option>
                                                            <option value="11">Others</option>
                                                            <option value="12">Others</option>
                                                            <option value="13">Full Car Wash</option>
                                                            <option value="14" selected="selected">Testing category
                                                            </option>
                                                            <option value="15">Test Sub category</option>
                                                            <option value="16">Harvesting pine</option>
                                                            <option value="17">Test Sub category name</option>
                                                            <option value="18">Test Sub category name</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-fields mb-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Descriptions <span
                                                                class="text-danger">*</span></label>
                                                        <textarea id="about" class="form-control service-desc"
                                                            name="about">note.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-fields mb-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="service-upload">
                                                        <i class="fas fa-cloud-upload-alt"></i>
                                                        <span>Upload Blog Images *</span>
                                                        <input type="file" name="images[]" id="images" multiple
                                                            accept="image/jpeg, image/png, image/gif">
                                                    </div>
                                                    <div id="uploadPreview">
                                                        <ul class="upload-wrap">
                                                            <li>
                                                                <div class=" upload-images">
                                                                    <img alt="Blog Image" src="assets/img/img-01.jpg">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=" upload-images">
                                                                    <img alt="Blog Image" src="assets/img/img-02.jpg">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=" upload-images">
                                                                    <img alt="Blog Image" src="assets/img/img-03.jpg">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-fields mb-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Video id <span
                                                                class="text-danger">*</span></label>
                                                        <input type="hidden" name="video_id" id="video_id" value="18">
                                                        <input class="form-control" type="text" name="video_id1"
                                                            id="video_id1" value="Rf34rhkWW1" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-btn" type="submit" name="form_submit"
                                                value="submit">Submit</button>
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


    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg"></p>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn btn-success si_accept_confirm">Yes</a>
                    <button type="button" class="btn btn-danger si_accept_cancel"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteNotConfirmModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title">Active Service?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg1">Service is Booked and Inprogress..</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger si_accept_cancel" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/edit-blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 20:44:11 GMT -->

</html>