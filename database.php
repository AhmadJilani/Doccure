<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doccure";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
error_reporting(0);
$query_members = "SELECT * FROM register WHERE id = '$_SESSION[user_id]'";
$result_members = mysqli_query($conn, $query_members);
$data_members = mysqli_fetch_object($result_members);
$data_members->id;
?>


