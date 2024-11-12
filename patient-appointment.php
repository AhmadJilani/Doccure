<h4 class="mb-4">Patient Appoinment</h4>
    <div class="appointment-tab">

        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
            <li class="nav-item">
                <a class="nav-link active" href="#upcoming-appointments"
                    data-bs-toggle="tab">Upcoming</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#today-appointments"
                    data-bs-toggle="tab">Today</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane show active" id="upcoming-appointments">
                <div class="card card-table mb-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                            // Include the database connection file
                            include 'database.php';

                            // Execute the query to fetch appointment data
                            $query = "SELECT * FROM `patient_appointment`";
                            $result = mysqli_query($conn, $query);

                            if (!$result) {
                            die("Query failed: " . mysqli_error($conn));
                            }
                            ?>
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Appt Date</th>
                                        <th>Purpose</th>
                                        <th>Type</th>
                                        <th>Paid Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Check if the query returned any results
                                    if (mysqli_num_rows($result) > 0) {
                                    // Output data for each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    $formattedDate = date("d M Y", strtotime($row['apptDate']));
                                    $formattedTime = date("h:i A", strtotime($row['apptDate']));
                                    echo "<tr>
                                    <td>
                                    <h2 class='table-avatar'>
                                    <a href='patient-profile.php' class='avatar avatar-sm me-2'>
                                    <img class='avatar-img rounded-circle' src='assets/img/patients/patient.jpg' alt='User Image'>
                                    </a>
                                    <a href='patient-profile.php'>" . htmlspecialchars($row['patientName']) . " <span>#PT" . rand(1000, 9999) . "</span></a>
                                    </h2>
                                    </td>
                                    <td>$formattedDate <span class='d-block text-info'>$formattedTime</span></td>
                                    <td>" . htmlspecialchars($row['purpose']) . "</td>
                                    <td>" . htmlspecialchars($row['type']) . "</td>
                                    <td>$" . htmlspecialchars($row['paidAmount']) . "</td>
                                    <td>
                                    <div class='table-action'>
                                    <a href='javascript:void(0);' class='btn btn-sm bg-info-light'>
                                    <i class='far fa-eye'></i> View
                                    </a>
                                    <a href='javascript:void(0);' class='btn btn-sm bg-success-light'>                                
                                    <i class='fas fa-check'></i> Accept
                                    </a>
                                    <a href='javascript:void(0);' class='btn btn-sm bg-danger-light'>
                                    <i class='fas fa-times'></i> Cancel
                                    </a>
                                    </div>
                                    </td>
                                    </tr>";
                                    }
                                    } else {
                                    echo "<tr><td colspan='6'>No appointments found.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <div class="tab-pane" id="today-appointments">
                <div class="card card-table mb-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                            // Include the database connection file
                            include 'database.php';

                            // Get today's date in the format YYYY-MM-DD
                            $today = date("Y-m-d");

                            // Query to get appointments for today
                            $query = "SELECT * FROM `patient_appointment` WHERE DATE(apptDate) = '$today'";
                            $result = mysqli_query($conn, $query);

                            if (!$result) {
                            die("Query failed: " . mysqli_error($conn));
                            }
                            ?>
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Appt Date</th>
                                        <th>Purpose</th>
                                        <th>Type</th>
                                        <th>Paid Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Check if the query returned any results
                                    if (mysqli_num_rows($result) > 0) {
                                    // Output data for each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    $formattedDate = date("d M Y", strtotime($row['apptDate']));
                                    $formattedTime = date("h:i A", strtotime($row['apptDate']));
                                    echo "<tr>
                                    <td>
                                    <h2 class='table-avatar'>
                                    <a href='patient-profile.php' class='avatar avatar-sm me-2'>
                                    <img class='avatar-img rounded-circle' src='assets/img/patients/patient.jpg' alt='User Image'>
                                    </a>
                                    <a href='patient-profile.php'>" . htmlspecialchars($row['patientName']) . " <span>#PT" . rand(1000, 9999) . "</span></a>
                                    </h2>
                                    </td>
                                    <td>$formattedDate <span class='d-block text-info'>$formattedTime</span></td>
                                    <td>" . htmlspecialchars($row['purpose']) . "</td>
                                    <td>" . htmlspecialchars($row['type']) . "</td>
                                    <td>$" . htmlspecialchars($row['paidAmount']) . "</td>
                                    <td>
                                    <div class='table-action'>
                                    <a href='javascript:void(0);' class='btn btn-sm bg-info-light'>
                                    <i class='far fa-eye'></i> View
                                    </a>
                                    <a href='javascript:void(0);' class='btn btn-sm bg-success-light'>
                                    <i class='fas fa-check'></i> Accept
                                    </a>
                                    <a href='javascript:void(0);' class='btn btn-sm bg-danger-light'>
                                    <i class='fas fa-times'></i> Cancel
                                    </a>
                                    </div>
                                    </td>
                                    </tr>";
                                    }
                                    } else {
                                    echo "<tr><td colspan='6'>No appointments for today.</td></tr>";
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>