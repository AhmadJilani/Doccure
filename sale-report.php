<?php
include 'database.php';
?>
<?php
$product_id = $_GET['pid'];	
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
        <?php
            $query_members = "select * from products where id='$product_id' ";
            $query_members = mysqli_query($conn,$query_members) ;
            $rd_products = mysqli_fetch_object($query_members);            
        ?>

        <div class="content my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="invoice-content">
                            <div class="invoice-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="invoice-info">
                                            <h2 class="breadcrumb-title align-items-start">Sales Report</h2>
                                            <strong class="customer-text"><?php echo $rd_products->name; ?>
                                                (<?php echo $product_id; ?>)</strong>
                                            <p class="invoice-details invoice-details-two">
                                                <?php echo $rd_products->name; ?> <br>
                                                <?php echo $rd_products->details; ?><br>
                                                <?php echo $rd_products->doc; ?> <br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="invoice-info invoice-info2">
                                            <strong class="customer-text">Sale Report To</strong>
                                            <p class="invoice-details">
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
                                                        <th>Description</th>
                                                        <th>Date</th>
                                                        <th class="text-center">Price</th>
                                                        <th class="text-center">Qty</th>
                                                        <th class="text-center">Total Amount</th>
                                                        <th class="text-center">Discount</th>
                                                        <th class="text-end">Net Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $sr = 0;
                                                        $queryproducts = "SELECT * FROM products_ledger WHERE product_id='$product_id'";
                                                        $resultproducts = mysqli_query($conn, $queryproducts);                                                        
                                                        while ($dataproducts = mysqli_fetch_assoc($resultproducts)) :
                                                            $sr++;
                                                            $invno=$dataproducts['invNum'];                                                            
                                                        ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                                $product_id = $dataproducts['product_id'];
                                                                $query_members = "SELECT * FROM products WHERE id='$product_id'";
                                                                $query_members = mysqli_query($conn, $query_members);
                                                                $rd_members = mysqli_fetch_object($query_members);
                                                                echo $Cusname = $rd_members->name;
                                                                ?>
                                                            <br />
                                                            #<?php echo $cstId = $dataproducts['cstId']; ?>/
                                                            <?php
                                                            $query_members = "SELECT * FROM customers WHERE id='$cstId'"; 
                                                            $query_members = mysqli_query($conn, $query_members);
                                                            $rd_members = mysqli_fetch_object($query_members);
                                                            echo $Cusname = $rd_members->name;
                                                            ?>
                                                        </td>
                                                        <td><?php echo $dataproducts['doc']; ?></td>
                                                        <td class="text-center">$<?php echo $dataproducts['price']; ?>
                                                        </td>
                                                        <td class="text-center"><?php echo $qty=$dataproducts['qty']; ?>
                                                        </td>
                                                        <td class="text-end">
                                                            $<?php echo $totalAmnt=$dataproducts['totalAmnt']; ?></td>
                                                        <td class="text-center">
                                                            $<?php echo $discount=$dataproducts['discount']; ?></td>
                                                        <td class="text-end">
                                                            $<?php echo $netAmount=$dataproducts['netAmount']; ?></td>
                                                    </tr>
                                                    <?php 
                                                        $Totalqty +=$qty;	
                                                        $TotaltotalAmnt +=$totalAmnt;
                                                        $Totaldiscount +=$discount;
                                                        $TotalnetAmount +=$netAmount;	
                                                        endwhile;
                                                        ?>
                                                    <tr>
                                                        <td class="text-center"><strong>Tota Value</strong></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"><?php echo $Totalqty; ?></td>
                                                        <td class="text-end"><?php echo $TotaltotalAmnt; ?></td>
                                                        <td class="text-center"><?php echo $Totaldiscount; ?></td>
                                                        <td class="text-end"><?php echo $TotalnetAmount; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>


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


            <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
            </script>
            <script src="assets/js/jquery-3.7.0.min.js"></script>

            <script src="assets/js/bootstrap.bundle.min.js"></script>

            <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccure.dreamguystech.com/html/template/invoice-view.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 20:42:46 GMT -->

</html>