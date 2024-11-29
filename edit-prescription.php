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
    $dpercent = $_POST['percentDiscount'];
    $netAmount = $_POST['netAmount'];  
    $ip = $_SERVER['REMOTE_ADDR'];

    
    $query_members = "SELECT * FROM products WHERE id = '$product_id'";
    $result_members = mysqli_query($conn, $query_members);
    $data_members = mysqli_fetch_object($result_members);
    $stock=$data_members->stock;

    // $query_members = "SELECT * FROM cart WHERE product_id = '$product_id'";
    // $result_members = mysqli_query($conn, $query_members);
    // $data_members = mysqli_fetch_object($result_members);
    // $quantity=$data_members->quantity;
    
    

    // Insert the form data into the cart table                            
    $query = "INSERT INTO cart SET product_id = '$productId', product_name = '$productName' , price = '$productPrice', quantity = '$qty', totalAmount = '$totalAmount', discount = '$discount', dpercent = '$dpercent', netAmount = '$netAmount',ip='$ip', userid='$_SESSION[user_id]'";

    // Execute the query and check for success
    if (mysqli_query($conn, $query)) {
        echo '<script>window.location.href="edit-prescription.php?success=1";</script>';
    } else {
        echo '<script>window.location.href="edit-prescription.php?success=0";</script>';
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
            echo '<script>window.location.href="edit-prescription.php?deleted=1";</script>';
        } else {
            echo '<script>window.location.href="edit-prescription.php?deleted=0";</script>';
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

    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <div class="main-wrapper">

        <?php //include_once 'header2.php'; ?>


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row inner-banner">
                    <div class="col-md-12 col-12 p-0 d-flex justify-content-between align-items-center">
                        <h2 class="breadcrumb-title align-items-start">Sale Products</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Sale Products</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Sale Products</h4>
                            </div>
                            <div class="card-body p-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="biller-info">
                                            <h4 class="d-block">Dr. Darren Elder</h4>
                                            <span class="d-block text-sm text-muted">Dentist</span>
                                            <span class="d-block text-sm text-muted">Newyork, United States</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-end">
                                        <div class="billing-info">
                                            <h4 class="d-block">1 November 2023</h4>
                                            <span class="d-block text-muted">#INV0001</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="add-more-item text-end">
                                    <a href="javascript:void(0);" class="add-prescription-1"><i
                                            class="fa fa-plus-circle"></i> Add More</a>
                                </div> -->


                                <div class="card card-table">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <form action="" method="post">
                                                <table class="table table-hover table-center add-table-prescription">
                                                    <thead>
                                                        <tr>
                                                            <th>Category</th>
                                                            <th>Subcat</th>
                                                            <th>Products</th>
                                                            <th>Stock</th>
                                                            <th>Price</th>
                                                            <th>Qty</th>
                                                            <th>Amount</th>
                                                            <th>Discount</th>                                                            
                                                            <th>Persent Discount</th>
                                                            <th>Net Amount</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="test">
                                                            <td>
                                                                <select style="min-width: 100px;" class="form-control"
                                                                    id="catid" name="catid" required>
                                                                    <option value="">Category</option>
                                                                    <?php
                                                                        $query1 = "SELECT * FROM categories";
                                                                        $result1 = mysqli_query($conn, $query1);
                                                                        while ($row = mysqli_fetch_assoc($result1)) : ?>
                                                                    <option value="<?php echo $row['id']; ?>">
                                                                        <?php echo $row['name']; ?>
                                                                    </option>
                                                                    <?php endwhile; ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select style="min-width: 100px;" class="form-control"
                                                                    id="subCatId" name="subCatId" required>
                                                                    <option value="">Subcat</option>
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
                                                            </td>
                                                            <td>
                                                                <select style="min-width: 130px;" class="form-control"
                                                                    id="productId" name="productId" required>
                                                                    <option value="">Product</option>
                                                                    <?php
                                                                $query3 = "SELECT * FROM products";
                                                                $result3 = mysqli_query($conn, $query3);
                                                                while ($row = mysqli_fetch_assoc($result3)) : ?>
                                                                    <option
                                                                        value="<?php echo $row['id'] . " - " . $row['details']; ?>"
                                                                        data-subcategory="<?php echo $row['subCatId']; ?>"
                                                                        data-amount="<?php echo $row['amount']; ?>"
                                                                        data-stock="<?php echo $row['stock']; ?>">
                                                                        <?php echo $row['id'] . " - " . $row['details']; ?>
                                                                    </option>
                                                                    <?php endwhile; ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input style="width: 100px;" type="number"
                                                                    name="stockId" class="form-control px-1"
                                                                    id="stockId" required readonly>
                                                            </td>
                                                            <td>
                                                                <input style="width: 100px;" type="number"
                                                                    name="productPrice" class="form-control px-1"
                                                                    id="amountField" required readonly>
                                                            </td>
                                                            <td>
                                                                <input style="width: 100px;" type="number" name="qty"
                                                                    class="form-control px-1" id="qty" required>
                                                            </td>
                                                            <td>
                                                                <input style="width: 110px;" type="number"
                                                                    name="totalAmount" class="form-control px-1"
                                                                    id="totalAmount" required readonly>
                                                            </td>
                                                            <td>
                                                                <input style="width: 110px;" type="number"
                                                                    name="discount" class="form-control px-1"
                                                                    id="discount" required>
                                                            </td>
                                                            <td>
                                                                <input style="width: 110px;" type="number"
                                                                    name="percentDiscount" class="form-control px-1"
                                                                    id="percentDiscount" readonly required>
                                                            </td>
                                                            <td>
                                                                <input style="width: 110px;" type="number"
                                                                    name="netAmount" class="form-control px-1"
                                                                    id="netAmount" required readonly>
                                                            </td>
                                                            <td>                                                                
                                                                <button type="submit" name="submit" id="add_to_cart"
                                                                    class="btn btn-primary submit-btn">
                                                                    <i class="fas fa-cart-plus"></i> Add to Cart
                                                                </button>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="transaction.php" id="add_to_procced" type="submit" class="btn btn-primary submit-btn">Go to Procced</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-lg-8 col-xl-12">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Cart</h3>
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
                                            <th>D Percentage</th>
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
                                                <?php echo $dataproducts['product_id']; ?>-<?php echo $dataproducts['product_name']; ?>
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
                                                <?php echo $dataproducts['dpercent']; ?>
                                            </td>
                                            <td>
                                                <?php echo $dataproducts['netAmount']; ?>
                                            </td>
                                            <td>
                                                <div class="table-action">
                                                    <!-- <a href="invoice-view.php" class="btn btn-sm bg-info-light">
                                                                <i class="far fa-eye"></i> View
                                                            </a> -->
                                                    <a href="edit-prescription.php?delete_id=<?php echo $dataproducts['cart_id']; ?>"
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
            </div>
        </div>

        <?php include_once 'footer.php'; ?>

    </div>

<script>
    // Wait until the page is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Get the dropdown elements
        var categorySelect = document.getElementById('catid');
        var subCategorySelect = document.getElementById('subCatId');
        var productSelect = document.getElementById('productId');
        var stockSelect = document.getElementById('stockId');

        // When a category is selected
        categorySelect.addEventListener('change', function() {
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
            stockSelect.value = ""; // Reset stock field
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

<script>
    document.getElementById('productId').addEventListener('change', function() {
        // Get selected product's amount and stock
        var selectedOption = this.options[this.selectedIndex];
        var amount = selectedOption.getAttribute('data-amount');
        var stock = parseInt(selectedOption.getAttribute('data-stock')) || 0;
        var addToCartButton = document.getElementById('add_to_cart');
        var addToProccedButton = document.getElementById('add_to_procced');
        

        // Set the value of the amount field and stock field
        document.getElementById('amountField').value = amount;
        document.getElementById('stockId').value = stock;

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
        var stockqty = document.getElementById('stockId').value || 0;
        if( quantity <= stockqty){
            var totalAmount = amount * quantity;
            document.getElementById('totalAmount').value = totalAmount;    
            // Reset net amount when total amount changes
            document.getElementById('netAmount').value = totalAmount;
        }else{
            document.getElementById('totalAmount').value = '';                
            document.getElementById('discount').value = '';
            document.getElementById('netAmount').value = '';
        }
    });

    // Calculate net amount when discount is entered
    document.getElementById('discount').addEventListener('input', function() {
    var totalAmount = parseInt(document.getElementById('totalAmount').value) || 0;
    var discount = parseInt(this.value) || 0;

    // Ensure discount doesn't exceed 100%
    if (discount >= totalAmount ) {
        discount = totalAmount;  // Set discount to total amount if it exceeds
        document.getElementById('discount').value = discount;
    }
    
    // Calculate the net amount
    var netAmount = totalAmount - discount;
    if (netAmount < 0) {
        netAmount = 0; // Ensure net amount is not negative
    }
    
    document.getElementById('netAmount').value = netAmount;
    
    // Calculate the percentage discount
    var percentDiscount = totalAmount > 0 ? (discount / totalAmount) * 100 : 0;
    
    // Display the percentage discount, rounded to 2 decimal places
    document.getElementById('percentDiscount').value = percentDiscount.toFixed(2);

    // Disable "Add to Cart" and "Proceed" buttons if discount reaches 100%
    var addToCartButton = document.getElementById('add_to_cart');
    var addToProccedButton = document.getElementById('add_to_procced');

    if (percentDiscount >= 100) {
        addToCartButton.disabled = true;
        addToProccedButton.disabled = true;
        addToCartButton.style.backgroundColor = 'gray';
        addToCartButton.style.color = 'not-allowed';
        addToProccedButton.style.backgroundColor = 'gray';
        addToProccedButton.style.color = 'not-allowed';
    } else {
        addToCartButton.disabled = false;
        addToProccedButton.disabled = false;
        addToCartButton.style.backgroundColor = '';
        addToCartButton.style.color = 'pointer';
        addToProccedButton.style.backgroundColor = '';
        addToProccedButton.style.color = 'pointer';
    }
});

</script>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>