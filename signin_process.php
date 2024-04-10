<!-- signin_process.php -->
<?php
session_start();

include_once 'config.php';
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}



$email = $_POST['email'];
$password = $_POST['password'];
// Retrieve user from database

//Fetch tour data from the database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $connection->query($sql);

if (mysqli_num_rows($result) == 1) {
    // User found
    echo 'TESt'; 
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password_hash'])) {
        // Password is correct, start session and set user data
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['logged_in'] = true;

        // Redirect to dashboard or any other page
        header('Location: index.php');
        exit();
    } else {
        // Password is incorrect
        header('Location: sign_in.php');
        echo "Invalid email or password";
    }
} else {
    // User not found
    echo "Invalid email or password";
}

// // Close connection
mysqli_close($connection);
?>
