<?php
include 'database.php';
// Get the current file name
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                <img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3>Dr. <?php echo $data_members->name;?>(<?php echo $data_members->id;?>)</h3>
                <div class="patient-details">
                    <h5 class="mb-0"><?php echo $data_members->email;?></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="<?= $current_page == 'doctor-dashboard.php' ? 'active' : '' ?>">
                    <a href="doctor-dashboard.php">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="<?= $current_page == 'accounts.php' ? 'active' : '' ?>">
                    <a href="accounts.php">
                        <i class="fas fa-user-cog"></i>
                        <span>Accounts</span>
                    </a>
                </li>
                <li class="<?= $current_page == 'appointments.php' ? 'active' : '' ?>">
                    <a href="appointments.php">
                        <i class="fas fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li class="<?= $current_page == 'my-patients.php' ? 'active' : '' ?>">
                    <a href="my-patients.php">
                        <i class="fas fa-user-injured"></i>
                        <span>My Patients</span>
                    </a>
                </li>
                <li class="<?= $current_page == 'schedule-timings.php' ? 'active' : '' ?>">
                    <a href="schedule-timings.php">
                        <i class="fas fa-hourglass-start"></i>
                        <span>Schedule Timings</span>
                    </a>
                </li>

                <li class="<?= $current_page == 'invoices.php' ? 'active' : '' ?>">
                    <a href="invoices.php">
                        <i class="fas fa-file-invoice"></i>
                        <span>Invoices</span>
                    </a>
                </li>



                <li class="<?= $current_page == 'doctor-profile-settings.php' ? 'active' : '' ?>">
                    <a href="doctor-profile-settings.php">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>