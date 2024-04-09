<?php
// Retrieve tour details from URL parameters
$tour_name = $_GET['name'];
$tour_description = $_GET['description'];
$tour_image = $_GET['image'];
?>
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Details</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="public/sass/style.css">
    <!-- Include any other necessary CSS or scripts here -->
</head>

<body>
    <div id="preloader">
    </div>

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
                        <li><a href="profile.php">
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
        <!-- Tour Details Content -->
        <section class="explore h-entry" id="section1">
            <div class="image-box img-position2">
                <img src="<?php echo $tour_image; ?>" alt="<?php echo $tour_name; ?>">

                <div class="overlay"></div>
                <div class="image-box-text">
                    <h2>
                        <?php echo $tour_name; ?>
                    </h2>
                </div>

            </div>
            <div class="txt-position-tour-detail">
                <p class="input-info">
                    <?php echo $tour_description; ?>
                </p>
            </div>
        </section>

        <!-- Book Tour Button -->
        <div class="book-tour">
            <button class="btn btn-get" onclick="window.location.href='booking.php'">Book Tour</button>
        </div>
    </main>

</body>

</html>