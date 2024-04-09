<!-- signin_process.php -->
<?php
session_start();

// Include database connection
include_once 'config.php';

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve user from database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) == 1) {
    // User found
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password_hash'])) {
        // Password is correct, start session and set user data
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['logged_in'] = true;
        // Redirect to dashboard or any other page
        header('Location: dashboard.php');
        exit();
    } else {
        // Password is incorrect
        echo "Invalid email or password";
    }
} else {
    // User not found
    echo "Invalid email or password";
}

// Close connection
mysqli_close($connection);
?>
