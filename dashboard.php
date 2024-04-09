<!-- dashboard.php -->
<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirect to sign-in page if not logged in
    header('Location: sign_in.php');
    exit();
}

// Display dashboard content
echo "Welcome, " . $_SESSION['user_name'];
?>
