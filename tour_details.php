<?php
// Retrieve tour details from URL parameters
$tour_name = $_GET['name'];
$tour_description = $_GET['description'];
$tour_image = $_GET['image'];
?>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="public/sass/style.css">

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head content -->
</head>

<body>
    <!-- Tour Details Content -->
    <div class="tour-details">
        <div class="tour-image">
            <!-- Display tour image -->
            <img src="<?php echo $tour_image; ?>" alt="<?php echo $tour_name; ?>">
        </div>
        <div class="tour-description">
            <!-- Display tour description -->
            <h2>
                <?php echo $tour_name; ?>
            </h2>
            <p>
                <?php echo $tour_description; ?>
            </p>
        </div>
    </div>

    <!-- Book Tour Button -->
    <div class="book-tour">
        <button onclick="window.location.href='booking.php'">Book Tour</button>
    </div>
</body>

</html>