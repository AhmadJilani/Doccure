<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="header header-custom header-fixed header-one">
<div class="container">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
    <a id="mobile_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>
    <a href="index.html" class="navbar-brand logo">
        <img src="assets/img/logo.png" class="img-fluid" alt="Logo" />
    </a>
</div>
<div class="main-menu-wrapper">
    <div class="menu-header">
        <a href="index.html" class="menu-logo">
            <img src="assets/img/logo.png" class="img-fluid" alt="Logo" />
        </a>
        <a id="menu_close" class="menu-close" href="javascript:void(0);">
            <i class="fas fa-times"></i>
        </a>
    </div>
    <ul class="main-nav">        
        <li class="has-submenu <?php echo in_array($current_page, [ 'purchases.php','catagorty.php','subcatagorty.php', 'product.php', 'customers.php', 'sales.php', 'chat-doctor.html', 'invoices.php', 'doctor-profile-settings.php', 'reviews.html', 'doctor-register.php']) ? 'active' : ''; ?>">
            <a href="javascript:void(0);">Accounts <i class="fas fa-chevron-down"></i></a>
            <ul class="submenu">                
                <li><a href="customers.php" class="<?php echo $current_page === 'customers.php' ? 'active' : ''; ?>">Customers</a></li>
                <li><a href="purchases.php" class="<?php echo $current_page === 'purchases.php' ? 'active' : ''; ?>">Purchases</a></li>
                <li><a href="catagorty.php" class="<?php echo $current_page === 'catagorty.php' ? 'active' : ''; ?>">Catagorty</a></li>
                <li><a href="subcatagorty.php" class="<?php echo $current_page === 'subcatagorty.php' ? 'active' : ''; ?>">Sub Catagorty</a></li>
                <li><a href="product.php" class="<?php echo $current_page === 'product.php' ? 'active' : ''; ?>">Products</a></li>
                <li><a href="sales.php" class="<?php echo $current_page === 'sales.php' ? 'active' : ''; ?>">Sales</a></li>
                <!-- <li><a href="products-ledger.php" class="<?php echo $current_page === 'products-ledger.php' ? 'active' : ''; ?>">Products Ledger</a></li> -->
                <li><a href="chat-doctor.html" class="<?php echo $current_page === 'chat-doctor.html' ? 'active' : ''; ?>">Chat</a></li>
                <li><a href="invoices.php" class="<?php echo $current_page === 'invoices.php' ? 'active' : ''; ?>">Invoices</a></li>
                <li><a href="doctor-profile-settings.php" class="<?php echo $current_page === 'doctor-profile-settings.php' ? 'active' : ''; ?>">Profile Settings</a></li>
                <li><a href="reviews.html" class="<?php echo $current_page === 'reviews.html' ? 'active' : ''; ?>">Reviews</a></li>
                <li><a href="doctor-register.php" class="<?php echo $current_page === 'doctor-register.php' ? 'active' : ''; ?>">Doctor Register</a></li>
            </ul>
        </li>
        <li class="has-submenu <?php echo in_array($current_page, ['appointments.php', 'schedule-timings.php', 'my-patients.php', 'patient-profile.php', 'chat-doctor.html', 'invoices.php', 'doctor-profile-settings.php', 'reviews.html', 'doctor-register.php']) ? 'active' : ''; ?>">
            <a href="javascript:void(0);">Doctors <i class="fas fa-chevron-down"></i></a>
            <ul class="submenu">                
                <li><a href="appointments.php" class="<?php echo $current_page === 'appointments.php' ? 'active' : ''; ?>">Appointments</a></li>
                <li><a href="schedule-timings.php" class="<?php echo $current_page === 'schedule-timings.php' ? 'active' : ''; ?>">Schedule Timing</a></li>
                <li><a href="my-patients.php" class="<?php echo $current_page === 'my-patients.php' ? 'active' : ''; ?>">Patients List</a></li>
                <li><a href="patient-profile.php" class="<?php echo $current_page === 'patient-profile.php' ? 'active' : ''; ?>">Patients Profile</a></li>
                <li><a href="chat-doctor.html" class="<?php echo $current_page === 'chat-doctor.html' ? 'active' : ''; ?>">Chat</a></li>
                <li><a href="invoices.php" class="<?php echo $current_page === 'invoices.php' ? 'active' : ''; ?>">Invoices</a></li>
                <li><a href="doctor-profile-settings.php" class="<?php echo $current_page === 'doctor-profile-settings.php' ? 'active' : ''; ?>">Profile Settings</a></li>
                <li><a href="reviews.html" class="<?php echo $current_page === 'reviews.html' ? 'active' : ''; ?>">Reviews</a></li>
                <li><a href="doctor-register.php" class="<?php echo $current_page === 'doctor-register.php' ? 'active' : ''; ?>">Doctor Register</a></li>
            </ul>
        </li>
        <li class="has-submenu <?php echo in_array($current_page, ['map-grid.html', 'map-list.html', 'search.html', 'search-2.html']) ? 'active' : ''; ?>">
            <a href="javascript:void(0);">Patients <i class="fas fa-chevron-down"></i></a>
            <ul class="submenu">
                <li class="has-submenu <?php echo in_array($current_page, ['map-grid.html', 'map-list.html']) ? 'active' : ''; ?>">
                    <a href="javascript:void(0);">Doctors</a>
                    <ul class="submenu inner-submenu">
                        <li><a href="map-grid.html" class="<?php echo $current_page === 'map-grid.html' ? 'active' : ''; ?>">Map Grid</a></li>
                        <li><a href="map-list.html" class="<?php echo $current_page === 'map-list.html' ? 'active' : ''; ?>">Map List</a></li>
                    </ul>
                </li>
                <li class="has-submenu <?php echo in_array($current_page, ['search.html', 'search-2.html']) ? 'active' : ''; ?>">
                    <a href="javascript:void(0);">Search Doctor</a>
                    <ul class="submenu inner-submenu">
                        <li><a href="search.html" class="<?php echo $current_page === 'search.html' ? 'active' : ''; ?>">Search Doctor 1</a></li>
                        <li><a href="search-2.html" class="<?php echo $current_page === 'search-2.html' ? 'active' : ''; ?>">Search Doctor 2</a></li>
                    </ul>
                </li>                
                <!-- Add more submenu items as needed -->
            </ul>
        </li>
        
        <li class="login-link">
            <a href="index.php">Login / Signup</a>
        </li>
        <li class="register-btn">
            <a href="doctor-register.php" class="btn reg-btn"><i class="feather-user"></i>Register</a>
        </li>
        <li class="register-btn">            
            <a href="logout.php" class="btn btn-primary log-btn"><i class="feather-lock"></i>Logout</a>                        
        </li>
    </ul>
</div>
</nav>
</div>
</header>
