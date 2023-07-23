<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="KuehRaye by MaverickCoder">

	<!-- title -->
	<title>News</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
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
								<li><a href="../index.php">Home</a></li>
								</li>

								<li><a href="about.php">About</a></li>

								</li>
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
										<a class="mobile-hide" href="pages/logout.php"><i
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
						<p>STAY INFORMED & GET EXCITED!</p>
						<h1><span class="orange-text">News</span> Article</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.php"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.php">KuehRaye Unveils Exclusive Eid al-Adha Delights: Experience the Perfect Blend of Tradition and Innovation.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">As the joyous occasion of Eid al-Adha approaches, KuehRaye, the renowned purveyor of delectable traditional treats, has unveiled an exclusive range of Eid al-Adha delights that promise to captivate taste buds and celebrate the essence of this auspicious festival.</p>
							<a href="single-news.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.php"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.php">Discover the Essence of Eid al-Adha with KuehRaye: Delight in Unforgettable Flavors and Celebrate the Joy of the Season</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 20th June, 2022</span>
							</p>
							<p class="excerpt">KuehRaye, the esteemed purveyor of delectable traditional treats, invites you to embark on a culinary journey of taste and tradition with their limited edition Eid al-Adha collection.</p>
							<a href="single-news.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.php"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.php">Celebrating Ramadan with KuehRaye's Irresistible Kueh Raya: Elevate Your Festive Season with Exquisite Sweet Treats</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">As the holy month of Ramadan unfolds, KuehRaye, the esteemed purveyor of delectable traditional treats, is delighted to present their exquisite collection of Kueh Raya, specially curated to enhance the joy and sweetness of the festive season.</p>
							<a href="single-news.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>

			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a href="#">Prev</a></li>
									<li><a class="active" href="#">1</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

<br><br><br>

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
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="../index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="shop.php">Shop</a></li>
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
					<p>Copyrights &copy; 2023 - <a href="https://github.com/">MaverickCoder</a>,  All Rights Reserved.</p>
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

</body>
</html>