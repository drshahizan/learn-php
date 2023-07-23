<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KuehRaye by MaverickCoder">

    <!-- title -->
    <title>Stocks & Inventory</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
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

    // Start the session (if not already started)
    session_start();

    // Check if the user is not logged in
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        // Redirect to the login page
        header("Location: login.php");
        exit; // Ensure that the script stops executing after the redirect
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

                        <div class="header-icons text-white">
							<?php
							$username = $_SESSION['username'];
							$profile_pic = $_SESSION['profile_picture'];
							?>
							Welcome
							<?php echo $username; ?>!
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
                                <?php
                                // Check if the user's role is 'admin'
                                if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin') {
                                    // Display the "Stocks" link for admin
                                    echo '<li><a href="stocks.php">Stocks</a></li>';
                                }
                                ?>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                        <a class="mobile-hide" href="logout.php"><i
												class="fas fa-sign-out-alt"></i></a>
										<a class="mobile-hide" href="#">
											<img class="round-profile-pic" src="../<?php echo $profile_pic; ?>"
												alt="Profile Picture">
										</a>
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
                        <h1><span class="orange-text">Stocks</span> Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- Admin Dashboard for Stocks and Inventory -->
    <div class="admin-dashboard" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Stocks and Inventory</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Stock Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Almond London</td>
                                    <td class="text-center">100</td>
                                </tr>
                                <tr>
                                    <td>Honey Cornflakes</td>
                                    <td class="text-center">75</td>
                                </tr>
                                <tr>
                                    <td>Nutella Pod</td>
                                    <td class="text-center">50</td>
                                </tr>
                                <tr>
                                    <td>Pandan Layer Cake</td>
                                    <td class="text-center">25</td>
                                </tr>
                                <tr>
                                    <td>Dates & Cinnamon Cake</td>
                                    <td class="text-center">10</td>
                                </tr>
                                <!-- Add more rows for other products as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Admin Dashboard for Stocks and Inventory -->


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