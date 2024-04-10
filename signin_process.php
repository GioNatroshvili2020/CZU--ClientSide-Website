<?php
session_start();

include_once 'config.php';
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $connection->query($sql);

if (mysqli_num_rows($result) == 1) {
    echo 'TESt'; 
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password_hash'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['logged_in'] = true;

        header('Location: index.php');
        exit();
    } else {
        $_SESSION['error_message'] = "Invalid email or password";
        header('Location: sign_in.php');
        exit();
    }
} else {
    header('Location: sign_in.php');
    echo "Invalid email or password";
}

mysqli_close($connection);
?>
