<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KuehRaye by MaverickCoder">

    <!-- title -->
    <title>Member Portal</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="../css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>

    <?php
    // Include the database configuration and connection file
    require_once '../database/db_config.php';
    require_once '../database/db_connection.php';

    // Start a session to store user authentication data
    session_start();

    // Function to validate login credentials
    function validateLogin($username, $password)
    {
        global $link;

        // Prepare and execute a SELECT query to get the user record for the given username
        $sql = "SELECT users.id, users.password, role, profile_pic.profile_pic_url AS profile_picture
                FROM users
                JOIN profile_pic ON users.profile_pic_id = profile_pic.id
                WHERE users.username = ?;";
        $stmt = mysqli_prepare($link, $sql);

        if (!$stmt) {
            die("ERROR: Could not prepare statement. " . mysqli_error($link));
        }

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        // Check if a row with the given username exists
        if (mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $userId, $storedPassword, $role, $profilePicture);
            mysqli_stmt_fetch($stmt);

            // Verify the entered password against the stored password (in plain text)
            if ($password === $storedPassword) {
                // Password is correct, set user authentication data in the session
                $_SESSION['user_id'] = $userId;
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                $_SESSION['profile_picture'] = $profilePicture;

                // Regenerate session ID for enhanced security
                session_regenerate_id();

                return true;
            }
        }

        // Invalid credentials
        return false;
    }

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (validateLogin($username, $password)) {
            // Set the 'loggedin' session variable to true upon successful login
            $_SESSION['loggedin'] = true;

            // Redirect to the index or the desired page upon successful login
            header('Location: ../index.php'); // Change "index.php" to your desired page

            exit;
        } else {
            // Invalid credentials, show an error message or redirect back to the login page
            echo "Invalid username or password.";
        }
    }
    ?>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="../index.php">
                                <img src="../images/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li><a href="../index.php">Home</a>
                                </li>
                                <li><a href="about.php">About</a></li>

                                <li class="current-list-item"><a href="news.php">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="news.php">News</a></li>
                                        <li><a href="single-news.php">News of the Week</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="shop.php">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="checkout.php">Check Out</a></li>
                                        <li><a href="cart.php">My Cart</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="cart.php"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" id="searchInput" placeholder="Keywords">
                            <button type="submit" id="searchBtn"><i class="fas fa-search"></i>
                                Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="searchResults" class="results-container"></div>
    </div>
    <!-- end search area -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Get More Discounts</p>
                        <h1><span class="orange-text">Member</span> Portal</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- Membership registration/login section -->
    <div class="membership-section" style="padding-top: 100px; padding-bottom: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="membership-form">
                        <!-- Login form -->
                        <div class="login-form">
                            <h2 class="text-center"><span class="orange-text">Member</span> Login</h2>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                        required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-orange">Login</button>
                                </div>
                            </form>
                            <p class="text-center">New member? <a href="#" onclick="showSignUpForm()">Sign Up</a></p>
                        </div>

                        <!-- Sign-up form -->
                        <div class="signup-form" style="display: none;">
                            <h2 class="text-center"><span class="orange-text">Member</span> Sign Up</h2>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fullname" placeholder="Full Name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                        required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-orange">Sign Up</button>
                                </div>
                            </form>
                            <p class="text-center">Already a member? <a href="#" onclick="showLoginForm()">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Membership registration/login section -->

    <!-- logo carousel -->


    <div class="logo-carousel-section">
        <div class="container">

            <center>
                <div class="section-title">
                    <h3><span class="orange-text">Find Our Kueh</span>Raye Near You</h3>
                </div>
            </center>

            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="../images/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="../images/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="../images/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="../images/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="../images/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>Since our establishment in 2015, KuehRaye has steadily grown and evolved to become a trusted
                            name in the world of "kuih". Our journey has been guided by a deep-rooted passion for
                            delivering exceptional taste experiences and creating lasting memories.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>KuehRaye HQ:<br>123 Jalan Delima, Taman Perindustrian, Kuala Lumpur 50200, Malaysia</li>
                            <li>support@kuehraye.com</li>
                            <li>+60 1362 29954</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="services.php">Shop</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Subscribe</h2>
                        <p>Subscribe to our mailing list to get the latest updates.</p>
                        <form action="index.php">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2023 - <b><span class="orange-text">KuehRaye</span></b>, All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="../js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="../js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="../js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="../js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="../js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="../js/sticker.js"></script>
    <!-- main js -->
    <script src="../js/main.js"></script>

    <!-- Membership registration/login toggle script -->
    <script>
        function showSignUpForm() {
            document.querySelector('.login-form').style.display = 'none';
            document.querySelector('.signup-form').style.display = 'block';
        }

        function showLoginForm() {
            document.querySelector('.signup-form').style.display = 'none';
            document.querySelector('.login-form').style.display = 'block';
        }
    </script>


</body>

</html>