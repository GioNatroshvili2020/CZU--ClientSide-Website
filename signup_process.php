<?php
// Include database connection
include 'db_connection.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user into database
$sql = "INSERT INTO users (name, email, password_hash) VALUES ('$name', '$email', '$hashed_password')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "User registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

