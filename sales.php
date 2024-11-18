<?php
include 'database.php';

// Fetch categories from the database
$query = "SELECT id, name FROM customers";
$result = mysqli_query($conn, $query);

if (isset($_POST['submit'])) {
$cstId = $_POST['cstId'];    
$productId = $_POST['productId'];
$productPrice = $_POST['productPrice'];
$qty = $_POST['qty'];
$totalAmount = $_POST['totalAmount'];       
$discount = $_POST['discount'];   
$netAmount = $_POST['netAmount'];  

// Insert the form data into the sales table                            
$query = "INSERT INTO cart SET customer_id = '$cstId', product_id = '$productId', price = '$productPrice', quantity = '$qty', totalAmount = '$totalAmount', discount = '$discount', netAmount = '$netAmount'";

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
                        <?php if($_GET['addSales']==1){ ?>
                        <form action="" method="post">
                            <div class="card">
                                <div class="card-body p-3">
                                    <h4 class="card-title">Sales Information</h4>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Customer ID & Name</label>
                                                <select class="form-control" id="cstId" name="cstId" required>
                                                    <option value="">Select a Customer</option>
                                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <option value="<?php echo $row['id']; ?>">
                                                        <?php echo $row['id']; ?>
                                                    </option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Products</label>
                                                <select class="form-control" id="productId" name="productId" required>
                                                    <option value="">Select Product</option>
                                                    <?php 
                                                        $query1 = "SELECT * FROM products";
                                                        $result1 = mysqli_query($conn, $query1);
                                                        while ($row = mysqli_fetch_assoc($result1)) : ?>
                                                    <option value="<?php echo $row['id']; ?>"
                                                        data-amount="<?php echo $row['amount']; ?>">
                                                        <?php echo $row['details']; ?>
                                                    </option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Product Price <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" name="productPrice" class="form-control"
                                                    id="amountField" required readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Quantity<span class="text-danger">*</span></label>
                                                <input type="number" name="qty" class="form-control" id="qty" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Total Amount<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" name="totalAmount" class="form-control"
                                                    id="totalAmount" required readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Discount<span class="text-danger">*</span></label>
                                                <input type="number" name="discount" class="form-control" id="discount"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Net Amount<span class="text-danger">*</span></label>
                                                <input type="number" name="netAmount" class="form-control"
                                                    id="netAmount" required readonly>
                                            </div>
                                        </div>

                                        <div class="m-0 submit-section submit-btn-bottom">
                                            <button type="submit" name="submit" class="btn btn-primary prime-btn">Add To
                                                Cart</button>
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
                                                class="fas fa-plus-circle"></i> <a href="sales.php?addSales=1">Add Sales</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-table m-0">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>                                                    
                                                    <th>Product ID</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    <th>Discount</th>
                                                    <th>Net Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
													$queryproducts = "SELECT * FROM cart";
													$resultproducts = mysqli_query($conn, $queryproducts);
													while ($dataproducts = mysqli_fetch_assoc($resultproducts)) : ?>
                                                <tr>                                                   
                                                    <td>
                                                        <?php echo $dataproducts['product_id']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['price']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $subCatId=$dataproducts['quantity']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['totalAmount']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['discount']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['netAmount']; ?>
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

                        <!-- Add to Proceed Button -->
                        <div class="mt-2 d-flex justify-content-end">
                            <a href="transaction.php" class="btn btn-success">Add to Proceed</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <?php include_once 'footer.php'; ?>

    </div>


    <script>
    document.getElementById('productId').addEventListener('change', function() {
        // Get selected product's amount
        var selectedOption = this.options[this.selectedIndex];
        var amount = selectedOption.getAttribute('data-amount');

        // Set the value of the amount field
        document.getElementById('amountField').value = amount;

        // Reset related fields when product changes
        document.getElementById('qty').value = '';
        document.getElementById('totalAmount').value = '';
        document.getElementById('discount').value = '';
        document.getElementById('netAmount').value = '';
    });

    // Calculate total amount when quantity is entered
    document.getElementById('qty').addEventListener('input', function() {
        var amount = parseInt(document.getElementById('amountField').value) || 0;
        var quantity = parseInt(this.value) || 0;
        var totalAmount = amount * quantity;

        document.getElementById('totalAmount').value = totalAmount;

        // Reset net amount when total amount changes
        document.getElementById('netAmount').value = totalAmount;
    });

    // Calculate net amount when discount is entered
    document.getElementById('discount').addEventListener('input', function() {
        var totalAmount = parseInt(document.getElementById('totalAmount').value) || 0;
        var discount = parseInt(this.value) || 0;
        var netAmount = totalAmount - discount;

        // Ensure net amount is not negative
        if (netAmount < 0) {
            netAmount = 0;
        }

        document.getElementById('netAmount').value = netAmount;
    });
    </script>
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