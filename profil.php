<?php
// Start the session
//session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // If the user is not logged in, redirect them to the login page
    header('Location: register.php');
    exit;
}

// If the user is logged in, display the page content
echo 'Welcome! You are logged in.';
?>
