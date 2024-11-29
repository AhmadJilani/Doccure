<?php
session_start();
if ($_SESSION["user_id"] == '') {
header("Location: index.php");
}
include 'database.php';
$ip = $_SERVER['REMOTE_ADDR'];
?>

<?php
if (isset($_POST['submit'])) {
$date = $_POST['date'];
$cutomerData = explode(" - ", $_POST['cstId']);
$cstId = $cutomerData[0]; // Extract product ID
$customerName = $cutomerData[1]; // Extract product name/details
$invNum = $_POST['invoice'];
$remarks = $_POST['remarks'];
$pay_type= $_POST['pay_type'];
// Insert the form data into the sales table                            

$query = "SELECT SUM(netAmount) FROM cart";
$result = mysqli_query($conn, $query) or die(mysqli_error()); 
while ($row = mysqli_fetch_array($result)) {
$nettotal = $row['SUM(netAmount)'];
}

if($pay_type=="CASH"){
$querysales = "INSERT INTO sales SET type = 'SI', date = '$date', cstId = '$cstId', cst_name = '$customerName', invNum = '$invNum', details = '$remarks', pay_type = '$pay_type', amount = '$nettotal', paid = '$nettotal' , balance = '0', ip='$ip', userid='$_SESSION[user_id]'";
mysqli_query($conn, $querysales);
}

if($pay_type=="COD"){
$querysales = "INSERT INTO sales SET type = 'SI', date = '$date', cstId = '$cstId', cst_name = '$customerName', invNum = '$invNum', details = '$remarks', pay_type = '$pay_type', amount = '$nettotal', paid = '0' , balance = '$nettotal', ip='$ip', userid='$_SESSION[user_id]'";
mysqli_query($conn, $querysales);
}

$querycart = "SELECT * FROM cart where ip='$ip' ";
$resultproducts = mysqli_query($conn, $querycart);
while ($dataproducts = mysqli_fetch_assoc($resultproducts)):

$product_id=$dataproducts['product_id'];
$quantity=$dataproducts['quantity'];
$price=$dataproducts['price'];
$totalAmount=$dataproducts['totalAmount'];
$discount=$dataproducts['discount'];
$netAmount=$dataproducts['netAmount'];

$query_members = "SELECT * FROM products WHERE id = '$product_id'";
$result_members = mysqli_query($conn, $query_members);
$data_members = mysqli_fetch_object($result_members);
$stock=$data_members->stock;
$quantityOut =  $stock - $quantity;

$queryproduct = "update products SET  stock = '$quantityOut' where id = '$product_id'";
mysqli_query($conn, $queryproduct);

$queryx = "INSERT INTO products_ledger SET type = 'SI', date = '$date', cstId = '$cstId', cst_name = '$customerName', invNum = '$invNum', product_id = '$product_id', price = '$price', qty = '$quantity', qOut = '$quantity', totalAmnt = '$totalAmount' , discount = '$discount', netAmount = '$netAmount' ";
mysqli_query($conn, $queryx);
endwhile; 

//empty cart
$querycartdel = "delete from cart where ip='$ip'";
mysqli_query($conn, $querycartdel);

// Execute the query and check for success
if (mysqli_query($conn, $query)) {
echo '<script>window.location.href="sales.php?success=1";</script>';
} else {
echo '<script>window.location.href="sales.php?success=0";</script>';
}

// Close the database connection
mysqli_close($conn);
}

// Handle delete request
if (isset($_GET['delete_id'])) {
$deleteId = $_GET['delete_id'];

// Delete the item from the cart table
$deleteQuery = "DELETE FROM cart WHERE cart_id = '$deleteId'";
if (mysqli_query($conn, $deleteQuery)) {
echo '<script>window.location.href="transaction.php?deleted=1";</script>';
} else {
echo '<script>window.location.href="transaction.php?deleted=0";</script>';
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

<form action="" method="post">
<div class="card">
<div class="card-body p-3">
<h4 class="card-title">Transaction Information</h4>
<div class="row">

<div class="col-md-6">
<div class="mb-3">
<label class="mb-2">Customer ID & Name</label>
<select class="form-control" id="cstId" name="cstId" required>
<option value="">Select a Customer</option>
<?php
// Fetch categories from the database
$query = "SELECT id, name FROM customers";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) : ?>
<option value="<?php echo $row['id'] . " - " . $row['name']; ?>">
<?php echo $row['id'] . " - " . $row['name']; ?>
</option>
<?php endwhile; ?>
</select>
</div>
</div>
<!-- <div class="col-md-6">
<div class="mb-3">
<label class="mb-2">Products</label>
<select class="form-control" id="productId" name="productId" required>
<option value="">Select Product</option>
<?php 
$query1 = "SELECT * FROM products";
$result1 = mysqli_query($conn, $query1);
while ($row = mysqli_fetch_assoc($result1)) : ?>
<option value="<?php echo $row['id'] . " - " . $row['details']; ?>"
data-amount="<?php echo $row['amount']; ?>">
<?php echo $row['id'] . " - " . $row['details']; ?>
</option>
<?php endwhile; ?>
</select>
</div>
</div> -->

<div class="col-md-6">
<div class="mb-3">
<label for="date" class="mb-2">Date:</label>
<input type="date" name="date" class="form-control fw-bold" id="date">
</div>
</div>

<div class="col-md-6">
<div class="mb-3">
<label for="date" class="mb-2">Invoice:</label>
<?php
$date = date('Ymd'); // Format date as YYYYMMDD
$time = microtime(true) * 10000; // Get the current time with microsecond precision
$random = rand(100, 999); // Add a random three-digit number
$invoice = "SINV" . $date . $random . substr($time, -4); // Append the last 4 digits of the time
?>
<input type="text" name="invoice" value="<?php echo $invoice; ?>"
class="form-control fw-bold">

</div>
</div>

<div class="col-md-6">
<div class="mb-3">
<label class="mb-2">Remarks:</label>
<input type="text" name="remarks" class="form-control fw-bold">
</div>
</div>

<div class="col-md-6">
<div class="mb-3">
<label class="mb-2">Sale Type</label>
<select class="form-control" id="cstId" name="pay_type" required>
<option value="COD">COD</option>
<option value="CASH">CASH</option>

</select>
</div>
</div>

<div class="col-md-6">
<div class="mb-3">
<input type="submit" name="submit" id="amount" value="Checkout"
class="btn btn-primary prime-btn">
</div>
</div>

<!-- <div class="m-0 submit-section submit-btn-bottom">
<button type="submit" name="submit"
class="btn btn-primary prime-btn">Checkout</button>
</div> -->
</div>
</div>
</div>
</form>


<div class="col-md-7 col-lg-8 col-xl-12">
<div class="card card-table m-0">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Cart ID</th>
<th>Product ID</th>
<th>Product Name</th>
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
$sr=0;
$queryproducts = "SELECT * FROM cart where ip='$ip'";
$resultproducts = mysqli_query($conn, $queryproducts);
while ($dataproducts = mysqli_fetch_assoc($resultproducts)) :  $sr++;?>
<tr>
<td>
<?php echo $sr; ?>
</td>
<td>
<?php echo $dataproducts['product_id']; ?>
</td>
<td>
<?php echo $dataproducts['product_name']; ?>
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

<a href="transaction.php?delete_id=<?php echo $dataproducts['cart_id']; ?>"
class="btn btn-sm bg-danger-light"
onclick="return confirm('Are you sure you want to delete this item?');">
<i class="fas fa-times"></i> Delete
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
<!-- <div class="mt-2 d-flex justify-content-end">
<a href="transaction.php" class="btn btn-success">Add to Proceed</a>
</div> -->


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