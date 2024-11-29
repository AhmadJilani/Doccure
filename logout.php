<?php
session_start(); // Start the session

// Unset specific session variables
unset($_SESSION['user_id']);
unset($_SESSION['email']);
unset($_SESSION['name']);

// Unset all session variables (alternative to unset each)
session_unset();

// Destroy the session
session_destroy();

// Redirect to the index page
header("Location: index.php");
exit();
?>
