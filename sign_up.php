<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kazbegi Travel - Sign Up</title>
    <link rel="shortcut icon" href="public/images/logo/mountain-fav.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="public/sass/style.css">
</head>

<body>
    <div id="preloader">
    </div>

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
                    <li><a href="sights.html">Sights</a></li>
                    <li><a href="footage.html">Footage</a></li>
                    <li><a href="tours.php">Tours</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="signin.html">Sign In</a></li>
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
        <section class="contact h-card" id="contact">
            <div class="main-text">
                <h1>Sign Up</h1>
            </div>
            <div class="main-container">
                <form action="#">
                    <div class="name">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Enter your name" id="name" name="name" />
                    </div>
                    <div class="email">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your email" id="email" name="email" />
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" />
                    </div>
                    <div class="confirm-password">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password"
                            placeholder="Confirm your password" />
                    </div>
                    <button class="btn-send">Sign Up</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="hcard">
        <!-- Footer content -->
    </footer>

    <script src="public/js/main.js"></script>
</body>

</html>
