<?php
include_once 'config.php';
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$captcha = $_POST['captcha'];

session_start();
if ($_SESSION['captcha'] != $captcha) {
    header('Location: sign_up.php');
    die("Invalid captcha. Please try again.");
}

$sql_check_email = "SELECT * FROM users WHERE email = '$email'";
$result_check_email = mysqli_query($connection, $sql_check_email);

if (mysqli_num_rows($result_check_email) > 0) {
    echo "Email is already registered";
    header('Location: sign_up.php');
} else {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password_hash) VALUES ('$name', '$email', '$hashed_password')";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "User registered successfully";
        header('Location: sign_up.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        header('Location: sign_up.php');
    }
}

mysqli_close($connection);
?>
