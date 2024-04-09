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
    <!-- css -->
    <link rel="stylesheet" href="public/sass/style.css" />
</head>

<body>
    <div id="preloadder" role="status" aria-live="polite"></div>

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

    <main role="main">
        <section class="tour hreview-aggregate" id="tour">
            <div class="main-text">
                <h1>Tours</h1>
            </div>
            <div class="main-container">
                <?php
                include_once 'config.php';
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //Fetch tour data from the database
                $sql = "SELECT * FROM Tours";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="tour-cards" data-name="' . $row["name"] . '" data-description="' . $row["description"] . '" data-image="' . $row["image"] . 'id="' . urlencode($row["id"]) . '"">';
                        echo '<div class="image-box">';
                        echo '<a href="tour_details.php?name=' . urlencode($row["name"]) . '&description=' . urlencode($row["description"]) . '&image=' . urlencode($row["image"]) . '">';
                        echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '" />';
                        echo '</a>';
                        echo '<div class="overlay"></div>';
                        echo '<div class="image-box-text">';
                        echo '<h2>' . $row["name"] . '</h2>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="tour-cards-text">';
                        echo '<a href="tour_details.php?name=' . urlencode($row["name"]) . '&description=' . urlencode($row["description"]) . '&image=' . urlencode($row["image"]) . '">';
                        echo '<h1>' . $row["name"] . '</h1>';
                        echo '</a>';
                        echo '<p>' . $row["description"] . '</p>';
                        echo '  <a href="#" class="btn-map">';
                        echo '  <svg';
                        echo '    xmlns="http://www.w3.org/2000/svg"';
                        echo '    class="h-6 w-6"';
                        echo '    fill="none"';
                        echo '    viewBox="0 0 24 24"';
                        echo '    stroke="currentColor"';
                        echo '    stroke-width="2"';
                        echo '    aria-label="View Route Map"';
                        echo '  >';
                        echo '    <path';
                        echo '      stroke-linecap="round"';
                        echo '      stroke-linejoin="round"';
                        echo '      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"';
                        echo '    />';
                        echo '    <path';
                        echo '      stroke-linecap="round"';
                        echo '      stroke-linejoin="round"';
                        echo '      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"';
                        echo '    />';
                        echo '  </svg>';
                        echo '  <span>View Route Map</span>';
                        echo '</a>';
                        echo '<div class="price">';
                        echo '  <p>$450 <span>Per person</span></p>';
                        echo '  <h2>3 Days 2 Nights</h2>';
                        echo '</div>';
                        echo '<a href="tour_details.php?name=' . urlencode($row["name"]) . '&description=' . urlencode($row["description"]) . '&image=' . urlencode($row["image"]) . '" class="btn-map">View Details</a>';
                        echo '</div>';
                        echo '</div>';
                    }

                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
            <div class="individual-tours">
                <a href="contact.php">Contact us</a> for Individual Tours
            </div>
        </section>
    </main>

    <footer class="hcard" role="contentinfo">
        <!-- Footer Content -->
    </footer>

    <script src="public/js/main.js"></script>
</body>

</html>