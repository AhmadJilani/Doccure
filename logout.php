<?php
session_start(); // Start the session

// Check if the 'logout' action is triggered
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    // Unset all session variables
    session_unset();  
    
    // Destroy the session
    session_destroy(); 
    
    // Destroy the session cookie by setting its expiration time to the past
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }

    // Redirect to login.php
    header("Location: index.php");
    exit;
}
?>
