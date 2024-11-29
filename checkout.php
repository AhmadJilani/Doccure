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
    $cstId = $_POST['cstId'];   
    $productId = $_POST['productId'];
    $productPrice = $_POST['productPrice'];
    $qty = $_POST['qty'];
    $totalAmount = $_POST['totalAmount'];       
    $discount = $_POST['discount'];   
    $netAmount = $_POST['netAmount'];  
    $ip = $_SERVER['REMOTE_ADDR'];

    // Insert the form data into the cart table                            
    $query = "INSERT INTO cart SET customer_id = '$cstId', product_id = '$productId', product_name = '$productName' , price = '$productPrice', quantity = '$qty', totalAmount = '$totalAmount', discount = '$discount', netAmount = '$netAmount',ip='$ip'";

    // Execute the query and check for success
    if (mysqli_query($conn, $query)) {
        echo '<script>window.location.href="checkout.php?success=1";</script>';
    } else {
        echo '<script>window.location.href="checkout.php?success=0";</script>';
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
            echo '<script>window.location.href="checkout.php?deleted=1";</script>';
        } else {
            echo '<script>window.location.href="checkout.php?deleted=0";</script>';
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

        <?php include_once 'header2.php'; ?>


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

                                <div class="add-more-item text-end">
                                    <a href="javascript:void(0);" class="add-prescription-1"><i
                                            class="fa fa-plus-circle"></i> Add More</a>
                                </div>


                                <div class="card card-table">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <form action="" method="post">
                                                <table class="table table-hover table-center add-table-prescription">
                                                    <thead>
                                                        <tr>
                                                            <th>Category</th>
                                                            <th>Subcategory</th>
                                                            <th>Products</th>
                                                            <th>Stock</th>
                                                            <th>Price</th>
                                                            <th>Qty</th>
                                                            <th>Amount</th>
                                                            <th>Discount</th>
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
                                                                        data-amount="<?php echo $row['amount']; ?>">
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
                                                                    name="netAmount" class="form-control px-1"
                                                                    id="netAmount" required readonly>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn bg-danger-light trash"><i
                                                                        class="far fa-trash-alt"></i></a>
                                                                <button type="submit" name="submit"
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
                                        <button type="submit" class="btn btn-primary submit-btn">Check Out</button>
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
                                                <?php echo $dataproducts['netAmount']; ?>
                                            </td>
                                            <td>
                                                <div class="table-action">
                                                    <!-- <a href="invoice-view.php" class="btn btn-sm bg-info-light">
                                                                <i class="far fa-eye"></i> View
                                                            </a> -->
                                                    <a href="checkout.php?delete_id=<?php echo $dataproducts['cart_id']; ?>"
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
    document.addEventListener("DOMContentLoaded", function() {
        const addMoreButton = document.querySelector(".add-prescription-1");
        const tableBody = document.querySelector(".add-table-prescription tbody");

        // Function to set up event listeners for a row
        function setupRowListeners(row) {
            const categorySelect = row.querySelector("select[name='catid']");
            const subCategorySelect = row.querySelector("select[name='subCatId']");
            const productSelect = row.querySelector("select[name='productId']");
            const amountField = row.querySelector("input[name='productPrice']");
            const qtyField = row.querySelector("input[name='qty']");
            const totalAmountField = row.querySelector("input[name='totalAmount']");
            const discountField = row.querySelector("input[name='discount']");
            const netAmountField = row.querySelector("input[name='netAmount']");

            // Filter subcategories when a category is selected
            categorySelect.addEventListener("change", function() {
                const selectedCategory = this.value;

                Array.from(subCategorySelect.options).forEach(option => {
                    if (option.value === "" || option.dataset.category === selectedCategory) {
                        option.style.display = "block";
                    } else {
                        option.style.display = "none";
                    }
                });

                subCategorySelect.value = ""; // Reset subcategory
                productSelect.value = ""; // Reset product
            });

            // Filter products when a subcategory is selected
            subCategorySelect.addEventListener("change", function() {
                const selectedSubCategory = this.value;

                Array.from(productSelect.options).forEach(option => {
                    if (option.value === "" || option.dataset.subcategory === selectedSubCategory) {
                        option.style.display = "block";
                    } else {
                        option.style.display = "none";
                    }
                });

                productSelect.value = ""; // Reset product
            });

            // Update amount when a product is selected
            productSelect.addEventListener("change", function() {
                const selectedOption = this.options[this.selectedIndex];
                amountField.value = selectedOption.dataset.amount || 0;
                calculateTotal();
            });

            // Calculate total amount and net amount
            function calculateTotal() {
                const price = parseFloat(amountField.value) || 0;
                const quantity = parseInt(qtyField.value) || 0;
                const discount = parseFloat(discountField.value) || 0;

                const totalAmount = price * quantity;
                const netAmount = totalAmount - discount;

                totalAmountField.value = totalAmount;
                netAmountField.value = netAmount;
            }

            // Attach event listeners for calculation fields
            qtyField.addEventListener("input", calculateTotal);
            discountField.addEventListener("input", calculateTotal);
        }

        // Add a new row when the "Add More" button is clicked
        addMoreButton.addEventListener("click", function() {
            const firstRow = tableBody.querySelector("tr.test");
            const newRow = firstRow.cloneNode(true);

            // Clear input and select values in the new row
            Array.from(newRow.querySelectorAll("input, select")).forEach(input => {
                if (input.tagName === "SELECT") {
                    input.selectedIndex = 0;
                } else {
                    input.value = "";
                }
            });

            // Set up event listeners for the new row
            setupRowListeners(newRow);

            // Append the new row to the table
            tableBody.appendChild(newRow);
        });

        // Attach delete functionality for dynamically added rows
        tableBody.addEventListener("click", function(event) {
            if (event.target.closest(".trash")) {
                const rowToDelete = event.target.closest("tr");
                if (rowToDelete) {
                    rowToDelete.remove();
                }
            }
        });

        // Set up listeners for the initial row
        const initialRow = tableBody.querySelector("tr.test");
        if (initialRow) {
            setupRowListeners(initialRow);
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