<?php
$id = $_GET['id'];
$name = $_GET['name'];
$info = $_GET['info'];
$description = $_GET['description'];
$imageUrl = $_GET['imageUrl'];
$price = $_GET['price'];
$duration = $_GET['duration'];
$sectionId = "section" . $id;
?>
<!DOCTYPE html>
<html lang="en">
<!-- Your HTML head here -->
<body>
    <!-- Your HTML body here -->
    <main>
        <section class="explore h-entry" id="<?php echo $sectionId; ?>">
            <!-- Your HTML section here -->
            <div class="txt-position">
                <form action="" method="post">
                    <input class="real-input" type="text" name="info" value="<?php echo htmlspecialchars($info) ?>">
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
    <script src="public/js/sights-description.js"></script></body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Log errors to a file
ini_set('log_errors', 1);
ini_set('error_log', 'error.log');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $info = $_POST['info'];
    $description = $_POST['description'];

    include_once 'config.php';
    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "UPDATE Tours SET  description = '$description' WHERE id = $id";    
    if ($connection->query($sql) === TRUE) {
        header("Location: tours.php");
        exit;
    } else {
        echo "Error updating record: " . $connection->error;
    }
    
    // Close connection
    $connection->close();    
    
}
?>
