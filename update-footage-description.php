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

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The project is made by students and it is used for teaching only." />
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
                    <li><a href="sign_in.php">Sign In</a></li>
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
            </div>
            <div class="txt-position">
                <form action="" method="post">
                    <input class="real-input" type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
                    <br />
                    <input class="real-input" type="text" name="capture_by"
                        value="<?php echo htmlspecialchars($capture_by) ?>">
                    <br />
                    <textarea class="textarea-info" name="description">
                        <?php echo htmlspecialchars($description); ?>
                    </textarea>
                    <button type="submit" class="save-button btn btn-get"><span>Save</span></button>
                </form>
            </div>
        </section>
    </main>
    <script src="public/js/main.js"></script>
    <script src="public/js/footage-description.js"></script>

</body>

</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Log errors to a file
ini_set('log_errors', 1);
ini_set('error_log', 'error.log');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $capture_by = $_POST['capture_by'];
    $description = $_POST['description'];


    include_once 'config.php';
    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "UPDATE Footage SET name = '$name', capture_by='$capture_by', description = '$description' WHERE id = $id";
    if ($connection->query($sql) === TRUE) {
        echo "<script>window.location.href = 'footage.php';</script>";
        exit;
    } else {
        echo "Error updating record: " . $connection->error;
    }

    // Close connection
    $connection->close();

}
?>