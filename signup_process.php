<?php
// Include database connection
include_once 'config.php';
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$captcha = $_POST['captcha']; // Add captcha field

// Verify captcha
session_start();
if ($_SESSION['captcha'] != $captcha) {
    die("Invalid captcha. Please try again.");
}

// Check if the email is already registered
$sql_check_email = "SELECT * FROM users WHERE email = '$email'";
$result_check_email = mysqli_query($connection, $sql_check_email);

if (mysqli_num_rows($result_check_email) > 0) {
    // Email is already registered
    echo "Email is already registered";
} else {
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $sql = "INSERT INTO users (name, email, password_hash) VALUES ('$name', '$email', '$hashed_password')";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

// Close connection
mysqli_close($connection);
?>
