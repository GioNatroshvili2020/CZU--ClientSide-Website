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
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="public/sass/style.css">
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;
            var email = document.getElementById("email").value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }

            if (!emailRegex.test(email)) {
                alert("Invalid email format");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <div id="preloader"></div>

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
        <section class="contact h-card" id="contact">
            <div class="main-text">
                <h1>Sign Up</h1>
            </div>
            <div class="main-container">
                <form action="signup_process.php" method="POST" onsubmit="return validateForm()">
                    <div class="name">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Enter your name" id="name" name="name" required />
                    </div>
                    <div class="name">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your email" id="email" name="email" required />
                    </div>
                    <div class="name">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required
                            pattern="(?=.*\d)(?=.*[A-Z]).{8,}"
                            title="Password must contain at least 8 characters, including one capital letter and some numbers" />

                    </div>
                    <div class="name">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password"
                            placeholder="Confirm your password" required />
                    </div>
                    <div class="name">
                        <label for="captcha">Captcha</label>
                        <input style="margin: bottom 20px;" type="text" name="captcha" id="captcha"
                            placeholder="Enter the captcha" required />
                        <!-- Display the captcha image -->
                        <img style="  width: 120px; height: 60px;" src="captcha.php" alt="Captcha Image" />
                    </div>
                    <button class="btn-send">Sign Up</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="hcard">
        <div class="main-container">
            <div class="heading-foo org">
                <span>
                    <h1>Kazbegi</h1>
                    <img src="public/images/logo/mountain.png" alt="" />
                </span>
                <p>
                    Kazbegi is amazing, not only with sights but also with cousine and
                    Georgian food.
                </p>
            </div>
            <div class="social-media">
                <h1>Connect with us</h1>
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill">
                            <path
                                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                        </svg>
                    </li>
                </ul>
            </div>
            <div class="main">
                <h1>Quick Links</h1>
                <ul>
                    <li><a href="sights.php">Sights</a></li>
                    <li><a href="footage.php">Footage</a></li>
                    <li><a href="tours.php">Tours</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="contact-info">
                <h1>Contacts</h1>
                <div class="contact-info-text">
                    <p>(+995) 555 123456</p>
                    <p>kazbegi@help.com</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="public/js/main.js"></script>
</body>

</html>