<?php
// Retrieve tour details from URL parameters
$id = $_GET['id'];
$name = $_GET['name'];
$info = $_GET['info'];
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
    <!-- css -->
    <link rel="stylesheet" href="public/sass/style.css" />
</head>

<body>
    <div id="preloadder"></div>

    <header class="primary-header">
        <div class="left-part">
            <a href="index.html">
                <img src="public/images/logo/mountain.png" alt="Kazbegi Logo" />
                <div class="logo">
                    <h1>Kazbegi</h1>
                </div>
            </a>
        </div>
        <div class="right-part">
            <div class="navbar" role="navigation">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="sights.php">Sights</a></li>
                    <li><a href="footage.html">Footage</a></li>
                    <li><a href="tours.php">Tours</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="sign_in.php">Sign In</a></li> <!-- Added Sign In item -->
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
                        <?php echo $info; ?>
                    </p>
                </div>

            </div>
            <div class="txt-position">
                <p class="input-info">
                    <?php echo $description; ?>
                </p>
            </div>
        </section>
        <!-- <section class="explore h-entry" id="section2">
            <div class="image-box image-1 img-position">
                <img src="https://images.unsplash.com/photo-1662901984749-0d34b7a39b6f?q=80&w=2572&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Gergeti Trinity Church" />
                <div class="overlay"></div>
                <div class="image-box-text">
                    <h2>Gergeti Trinity</h2>
                    <p>Built in 14th Century</p>
                </div>

            </div>
            <div class="txt-position">
                <p class="input-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Vitae ultricies leo integer malesuada nunc vel risus commodo
                    viverra. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Eget velit
                    aliquet sagittis id consectetur purus ut. Nec feugiat nisl pretium fusce id velit ut tortor
                    pretium. Erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Malesuada
                    fames ac turpis egestas maecenas pharetra convallis posuere. Sed vulputate mi sit amet mauris
                    commodo. Eu consequat ac felis donec et odio. Adipiscing at in tellus integer feugiat. Fames ac
                    turpis egestas maecenas pharetra convallis posuere morbi. Sit amet commodo nulla facilisi.
                    Dapibus ultrices in iaculis nunc sed. In fermentum et sollicitudin ac orci phasellus egestas
                    tellus rutrum. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Ultrices sagittis
                    orci a scelerisque purus semper eget. Arcu cursus vitae congue mauris rhoncus aenean vel. Purus
                    gravida quis blandit turpis. Nam at lectus urna duis convallis convallis tellus id.
                </p>
            </div>
        </section>
        <section class="explore h-entry" id="section3">
            <div class="image-box image-1 img-position">
                <img src="https://www.goingthewholehogg.com/wp-content/uploads/Kelitsadi-Lake-Landscape-Kazbegi-Georgia-M.jpg"
                    alt="Kelitsadi Lake" />
                <div class="overlay"></div>
                <div class="image-box-text">
                    <h2>Kelitsadi Lake</h2>
                    <p>Built in 14th Century</p>
                </div>

            </div>
            <div class="txt-position">
                <p class="input-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Vitae ultricies leo integer malesuada nunc vel risus commodo
                    viverra. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Eget velit
                    aliquet sagittis id consectetur purus ut. Nec feugiat nisl pretium fusce id velit ut tortor
                    pretium. Erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Malesuada
                    fames ac turpis egestas maecenas pharetra convallis posuere. Sed vulputate mi sit amet mauris
                    commodo. Eu consequat ac felis donec et odio. Adipiscing at in tellus integer feugiat. Fames ac
                    turpis egestas maecenas pharetra convallis posuere morbi. Sit amet commodo nulla facilisi.
                    Dapibus ultrices in iaculis nunc sed. In fermentum et sollicitudin ac orci phasellus egestas
                    tellus rutrum. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Ultrices sagittis
                    orci a scelerisque purus semper eget. Arcu cursus vitae congue mauris rhoncus aenean vel. Purus
                    gravida quis blandit turpis. Nam at lectus urna duis convallis convallis tellus id.
                </p>
            </div>
        </section> -->
    </main>
    <script src="public/js/main.js"></script>
    <script src="public/js/sights-description.js"></script>
    <script src="public/js/common-description.js"></script>

</body>

</html>