<?php
session_start();
if ($_SESSION["user_id"] == '') {
    header("Location: index.php");
}
include 'database.php';
?>
<?php
if($_GET['inv']){
    $invoiseId = $_GET['inv'];	
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
                        <h2 class="breadcrumb-title align-items-start">Invoice View</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Invoice View</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $query_members = "select * from sales where invNum='$invoiseId' ";
            $query_members = mysqli_query($conn,$query_members) ;
            $rd_members = mysqli_fetch_object($query_members);
            $cstId=$rd_members->cstId;
            $pay_type=$rd_members->pay_type;
            $amount=$rd_members->amount;
            $paid=$rd_members->paid;
            $balance=$rd_members->balance;
            ?>

        <div class="content p-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="invoice-content">
                            <div class="invoice-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="invoice-logo">
                                            <img src="assets/img/logo.png" alt="logo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="invoice-details">
                                            <strong>Order: </strong><?php echo $rd_members->invNum; ?> <br>
                                            <strong>Issued: </strong><?php echo $rd_members->date; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="invoice-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="invoice-info">
                                            <strong class="customer-text">Invoice From</strong>
                                            <p class="invoice-details invoice-details-two">
                                                Dr. Darren Elder <br>
                                                806 Twin Willow Lane, Old Forge,<br>
                                                Newyork, USA <br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="invoice-info invoice-info2">
                                            <strong class="customer-text">Invoice To</strong>
                                            <p class="invoice-details">
                                                <?php 	
                                                    $query_members = "select * from customers where id='$cstId' ";
                                                    $query_members = mysqli_query($conn,$query_members) ;
                                                    $rd_members = mysqli_fetch_object($query_members);
                                                    $Cusname=$rd_members->name;	
                                                    ?>
                                                <?php echo $rd_members->company;?> (<?php echo $rd_members->name;?>)<br>
                                                <?php echo $rd_members->address;?>,<?php echo $rd_members->city;?> <br>
                                                <?php echo $rd_members->cell;?>,<?php echo $rd_members->email;?><br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="invoice-item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="invoice-info">
                                            <strong class="customer-text">Payment Method</strong>
                                            <p class="invoice-details invoice-details-two">
                                                Debit Card <br>
                                                XXXXXXXXXXXX-2541 <br>
                                                HDFC Bank<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="invoice-item invoice-table-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="invoice-table table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>P.Details</th>
                                                        <th class="text-center">P.Price</th>
                                                        <th class="text-center">P.Qty</th>
                                                        <th class="text-center">Total Amount</th>
                                                        <th class="text-center">Discount</th>
                                                        <th class="text-end">Net Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $sr = 0;
                                                        $queryproducts = "SELECT * FROM products_ledger WHERE invNum='$invoiseId'";
                                                        $resultproducts = mysqli_query($conn, $queryproducts);
                                                        $totalDiscount = 0;
                                                        $totalAmount = 0;
                                                        while ($dataproducts = mysqli_fetch_assoc($resultproducts)) :
                                                            $sr++;
                                                            $totalDiscount += $dataproducts['discount'];
                                                            $totalAmount += $dataproducts['totalAmnt'];
                                                        ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                $product_id = $dataproducts['product_id'];
                                                                $query_members = "SELECT * FROM products WHERE id='$product_id'";
                                                                $query_members = mysqli_query($conn, $query_members);
                                                                $rd_members = mysqli_fetch_object($query_members);
                                                                echo $Cusname = $rd_members->name;
                                                                $productname = $rd_members->details;
                                                                ?>
                                                            <br />
                                                            #<?php echo $dataproducts['product_id']; ?>
                                                        </td>
                                                        <td class="text-center"><?php echo $productname; ?>
                                                        <td class="text-center"><?php echo $dataproducts['price']; ?>
                                                        </td>
                                                        <td class="text-center"><?php echo $dataproducts['qty']; ?></td>
                                                        <td class="text-end">$<?php echo $dataproducts['totalAmnt']; ?>
                                                        </td>
                                                        <td class="text-end">$<?php echo $dataproducts['discount']; ?>
                                                        </td>
                                                        <td class="text-end">$<?php echo $dataproducts['netAmount']; ?>
                                                        </td>
                                                    </tr>
                                                    <?php endwhile; ?>
                                                </tbody>
                                            </table>

                                            <div class="col-md-6 col-xl-4 ms-auto">
                                                <div class="table-responsive">
                                                    <table class="invoice-table-two table">
                                                        <tbody>
                                                            <?php
                                                                $query = "SELECT SUM(netAmount) FROM products_ledger WHERE invNum='$invoiseId'";
                                                                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                                                $row = mysqli_fetch_assoc($result);
                                                                $subTotal = $row['SUM(netAmount)'];
                                                                ?>
                                                            <tr>
                                                                <th>Subtotal:</th>
                                                                <td><span>$<?php echo $subTotal; ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Discount:</th>
                                                                <td><span>$<?php echo $totalDiscount; ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total Amount:</th>
                                                                <td><span>$<?php echo $totalAmount; ?></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="other-info">
                                        <h4>Other information</h4>
                                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.
                                            Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non
                                            tellus
                                            dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed
                                            finibus
                                            leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit
                                            amet
                                            lacinia lorem. Nullam finibus pellentesque libero.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <?php include_once 'footer.php'; ?>


            <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
            </script>
            <script src="assets/js/jquery-3.7.0.min.js"></script>

            <script src="assets/js/bootstrap.bundle.min.js"></script>

            <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/invoice-view.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 20:42:46 GMT -->

</html>