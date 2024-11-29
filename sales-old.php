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
    // Split the combined value into ID and name
    $productData = explode(" - ", $_POST['productId']);
    $productId = $productData[0]; // Extract product ID
    $productName = $productData[1]; // Extract product name/details    
    $productId = $_POST['productId'];
    $productPrice = $_POST['productPrice'];
    $qty = $_POST['qty'];
    $totalAmount = $_POST['totalAmount'];       
    $discount = $_POST['discount'];   
    $netAmount = $_POST['netAmount'];  
    $ip = $_SERVER['REMOTE_ADDR'];

    
    // Insert the form data into the sales table                            
    $query = "INSERT INTO cart SET product_id = '$productId', product_name = '$productName' , price = '$productPrice', quantity = '$qty', totalAmount = '$totalAmount', discount = '$discount', netAmount = '$netAmount',ip='$ip', userid='$_SESSION[user_id]'";

    // Execute the query and check for success
    if (mysqli_query($conn, $query)) {
        echo '<script>window.location.href="sales.php?success=1";</script>';
    } else {
        echo '<script>window.location.href = "sales.php?success=0";</script>';
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
            echo '<script>window.location.href = "sales.php?deleted=1";</script>';
        } else {
            echo '<script>window.location.href = "sales.php?deleted=0";</script>';
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
                                                <label class="mb-2">Category</label>
                                                <select class="form-control" id="catid" name="catid" required>
                                                    <option value="">Select Category</option>
                                                    <?php 
                                                        $query1 = "SELECT * FROM categories";
                                                        $result1 = mysqli_query($conn, $query1);
                                                        while ($row = mysqli_fetch_assoc($result1)) : ?>
                                                    <option value="<?php echo $row['id']; ?>">
                                                        <?php echo $row['name']; ?>
                                                    </option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Subcategory</label>
                                                <select class="form-control" id="subCatId" name="subCatId" required>
                                                    <option value="">Select Subcategory</option>
                                                    <?php 
                                                        $query2 = "SELECT * FROM sub_categories";
                                                        $result2 = mysqli_query($conn, $query2);
                                                        while ($row = mysqli_fetch_assoc($result2)) : ?>
                                                    <option value="<?php echo $row['id']; ?>"
                                                        data-category="<?php echo $row['catId']; ?>">
                                                        <?php echo $row['name']; ?>
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
                                                        $query3 = "SELECT * FROM products";
                                                        $result3 = mysqli_query($conn, $query3);
                                                        while ($row = mysqli_fetch_assoc($result3)) : 
                                                    ?>
                                                    <option value="<?php echo $row['id'] . " - " . $row['details']; ?>"
                                                        data-subcategory="<?php echo $row['subCatId']; ?>"
                                                        data-amount="<?php echo $row['amount']; ?>"
                                                        data-stock="<?php echo $row['stock']; ?>">
                                                        <?php echo $row['id'] . " - " . $row['details']; ?>
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
                                                <label class="mb-2">Stock<span class="text-danger">*</span></label>
                                                <input type="number" name="stockId" class="form-control px-1"
                                                    id="stockField" required readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Quantity<span class="text-danger">*</span></label>
                                                <input type="number" name="qty" class="form-control" id="qty" required >
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
                                            <button type="submit" name="submit" id="add_to_cart" class="btn btn-primary prime-btn">Add To
                                                Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            // Wait until the page is fully loaded
                            document.addEventListener('DOMContentLoaded', function () {
                                // Get the dropdown elements
                                var categorySelect = document.getElementById('catid');
                                var subCategorySelect = document.getElementById('subCatId');
                                var productSelect = document.getElementById('productId');

                                // When a category is selected
                                categorySelect.addEventListener('change', function () {
                                    var selectedCategory = categorySelect.value;

                                    // Show or hide subcategories based on the selected category
                                    for (var i = 0; i < subCategorySelect.options.length; i++) {
                                        var option = subCategorySelect.options[i];
                                        if (option.value === "") {
                                            option.style.display =
                                                "block"; // Always show the "Select Subcategory" option
                                        } else if (option.getAttribute('data-category') ===
                                            selectedCategory) {
                                            option.style.display =
                                                "block"; // Show if it matches the selected category
                                        } else {
                                            option.style.display = "none"; // Hide otherwise
                                        }
                                    }

                                    subCategorySelect.value = ""; // Reset subcategory dropdown
                                    productSelect.value = ""; // Reset product dropdown
                                    filterProducts(); // Update the product dropdown
                                });

                                // When a subcategory is selected
                                subCategorySelect.addEventListener('change', filterProducts);

                                // Filter products based on the selected subcategory
                                function filterProducts() {
                                    var selectedSubCategory = subCategorySelect.value;

                                    // Show or hide products based on the selected subcategory
                                    for (var i = 0; i < productSelect.options.length; i++) {
                                        var option = productSelect.options[i];
                                        if (option.value === "") {
                                            option.style.display =
                                                "block"; // Always show the "Select Product" option
                                        } else if (option.getAttribute('data-subcategory') ===
                                            selectedSubCategory) {
                                            option.style.display =
                                                "block"; // Show if it matches the selected subcategory
                                        } else {
                                            option.style.display = "none"; // Hide otherwise
                                        }
                                    }

                                    productSelect.value = ""; // Reset product dropdown
                                }
                            });
                        </script>



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
                            <div class="card card-table m-0">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
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
													$queryproducts = "SELECT * FROM cart where ip='$ip' order by cart_id ";
													$resultproducts = mysqli_query($conn, $queryproducts);
													while ($dataproducts = mysqli_fetch_assoc($resultproducts)) : $sr++;?>
                                                <tr>
                                                    <td>
                                                        <?php echo $sr; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dataproducts['product_id']; ?>-
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
                                                            <!-- <a href="invoice-view.php" class="btn btn-sm bg-info-light">
                                                                <i class="far fa-eye"></i> View
                                                            </a> -->
                                                            <a href="sales.php?delete_id=<?php echo $dataproducts['cart_id']; ?>"
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
                        <div class="mt-2 d-flex justify-content-end">
                            <?php $querycart = "SELECT * FROM cart where cart_id='';" 
                            ?>
                            <a href="transaction.php" id="add_to_procced" class="btn btn-success">Add to Proceed</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <?php include_once 'footer.php'; ?>

    </div>


    <script>
        document.getElementById('productId').addEventListener('change', function () {
            // Get selected product's amount
            var selectedOption = this.options[this.selectedIndex];
            var amount = selectedOption.getAttribute('data-amount');
            var stock = parseInt(selectedOption.getAttribute('data-stock')) || 0;
            var addToCartButton = document.getElementById('add_to_cart');
            var addToProccedButton = document.getElementById('add_to_procced');          

            // Set the value of the amount field
            document.getElementById('amountField').value = amount;
            document.getElementById('stockField').value = stock;

            // Reset related fields when product changes
            document.getElementById('qty').value = '';
            document.getElementById('totalAmount').value = '';
            document.getElementById('discount').value = '';
            document.getElementById('netAmount').value = '';

            var isDisabled = stock === 0;
            document.getElementById('qty').disabled = isDisabled;
            document.getElementById('totalAmount').disabled = isDisabled;
            document.getElementById('discount').disabled = isDisabled;
            document.getElementById('netAmount').disabled = isDisabled;
            addToCartButton.disabled = isDisabled;
            addToProccedButton.disabled = isDisabled;
            
            addToCartButton.style.backgroundColor = isDisabled ? 'gray' : '';
            addToCartButton.style.color = isDisabled ? 'not-allowed' : 'pointer';

            addToProccedButton.style.backgroundColor = isDisabled ? 'gray' : '';
            addToProccedButton.style.color = isDisabled ? 'not-allowed' : 'pointer';
            
            addToCartButton.addEventListener('click', function(event) {
                if(isDisabled){
                    event.preventDefault();
                }
            })
            addToProccedButton.addEventListener('click', function(event) {
                if(isDisabled){
                    event.preventDefault();
                }
            })
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
        document.getElementById('discount').addEventListener('input', function () {
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