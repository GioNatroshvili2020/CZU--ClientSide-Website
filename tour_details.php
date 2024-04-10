<?php
session_start();
include_once 'config.php';

// Check if tour ID is provided in the URL
if (isset($_GET['id'])) {
    // Sanitize and store the tour ID from the URL
    $id = $_GET['id'];
    
    // Fetch tour data from the database based on the provided tour ID
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Tours WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Tour data found, fetch and display it
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $info = $row["info"]; // Assuming you have this information stored in the database
        $description = $row["description"];
        $imageUrl = $row["image"];
        $price = $row["price"];
        $duration = $row["duration"];
    } else {
        // Tour not found with the provided ID, handle this case (e.g., redirect or show error)
        header("Location: error.php");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    // Tour ID not provided in the URL, handle this case (e.g., redirect or show error)
    header("Location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The project is made by students and it is used for teaching only." />
    <title>Kazbegi Travel</title>
    <link rel="shortcut icon" href="public/images/logo/mountain-fav.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="public/sass/style.css" />
</head>
<body>
    <div id="preloadder"></div>

    <header class="primary-header">
        <div class="left-part">
            <a href="index.php">
                <img src="public/images/logo/mountain.png" alt="Kazbegi Logo" />
                <div class="logo">
                    <h1>Kazbegi</h1>
                </div>
            </a>
        </div>
        <div class="right-part">
            <div class="navbar" role="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="sights.php">Sights</a></li>
                    <li><a href="footage.php">Footage</a></li>
                    <li><a href="tours.php">Tours</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                        <li><a href="#">
                                <?php echo $_SESSION['user_name']; ?>
                            </a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="sign_in.php">Sign In</a></li>
                        <li><a href="sign_up.php">Sign Up</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="ham-menu">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>
        </div>
    </header>
    <main>
        <section class="explore h-entry" id="<?php echo $sectionId; ?>">
            <div class="image-box image-1 img-position">
                <img src="<?php echo $imageUrl; ?>" alt="<?php echo $name; ?>" />
                <div class="overlay"></div>
                <div class="image-box-text">
                    <h2><?php echo $name; ?></h2>
                    <p><?php echo $info; ?></p>
                    <p><strong>Price:</strong> <?php echo $price; ?></p>
                    <p><strong>Duration:</strong> <?php echo $duration; ?></p>
                </div>
            </div>
            <div class="txt-position">
                <p class="input-info"><?php echo $description; ?></p>
                <br />
                <a class="input-info btn btn-get update-button" href="update-tours-description.php?name=<?php echo urlencode($name); ?>&id=<?php echo urlencode($id); ?>&info=<?php echo urlencode($info); ?>&description=<?php echo urlencode($description); ?>&imageUrl=<?php echo urlencode($imageUrl); ?>&price=<?php echo urlencode($price); ?>&duration=<?php echo urlencode($duration); ?>"><span>Update info</span></a>
            </div>
        </section>
    </main>
    <script src="public/js/main.js"></script>
    <script src="public/js/sights-description.js"></script>
    <!-- <script src="public/js/common-description.js"></script> -->
</body>
</html>
