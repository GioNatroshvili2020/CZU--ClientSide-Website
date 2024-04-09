<?php
$id = $_GET['id'];
$name = $_GET['name'];
$capture_by = $_GET['capture_by'];
$description = $_GET['description'];
$imageUrl = $_GET['imageUrl'];
$sectionId = "section" . $id;
?>
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kazbegi Travel</title>
    <link rel="shortcut icon" href="public/images/logo/mountain-fav.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
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
                    <h2>
                        <?php echo $name; ?>
                    </h2>
                    <p>
                        ©
                        <?php echo $capture_by; ?>
                    </p>
                </div>

            </div>
            <div class="txt-position">
                <p class="input-info">
                    <?php echo $description; ?>
                </p>
            </div>
        </section>
    </main>
    <script src="public/js/main.js"></script>
    <script src="public/js/sights-description.js"></script>
    <!-- <script src="public/js/common-description.js"></script> -->
</body>

</html>