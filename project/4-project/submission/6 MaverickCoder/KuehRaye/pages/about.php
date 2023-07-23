<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="KuehRaye by MaverickCoder">

	<!-- title -->
	<title>About</title>

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

								<li class="current-list-item"><a href="about.php">About</a></li>

								<li><a href="news.php">News</a>
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
						<p>GET TO KNOW US</p>
						<h1><span class="orange-text">About</span> Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->



 <!-- We Are KuehRaye section -->

		<br><br>
                <div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-justify
				<div class="abt-text">
						<p class="top-sub">Since Year 2015</p>
						<h2>We are <span class="orange-text">Kueh</span>Raye</h2>
						<p>At KuehRaye, we are deeply committed to curating the finest selection of "kuih" that not only delights your taste buds but also strengthens the bonds with your loved ones. We understand the importance of shared moments and the joy that comes from indulging in delicious treats together. That's why we take pride in offering you an extensive range of delectable options to choose from.</p>
						<p>From our best-selling classics like Almond London, Nutella Pod, Dahlia, and Honey Cornflakes to a tantalizing array of flavors, textures, and shapes, we strive to cater to every palate. Whether you're seeking traditional favorites or unique creations, our diverse collection ensures there's something for everyone to savor and enjoy.</p>
			                        <p>Since our establishment in 2015, KuehRaye has steadily grown and evolved to become a trusted name in the world of "kuih". Our journey has been guided by a deep-rooted passion for delivering exceptional taste experiences and creating lasting memories.</p>
                                                <p>With each passing year, we have expanded our repertoire, refining our recipes and exploring innovative flavors to bring you the very best. Our dedication to quality has remained unwavering, and we take pride in sourcing the finest ingredients to ensure that every bite of our "kuih" is a burst of deliciousness</p>
                                                <p>From joyful family gatherings to special celebrations, our "kuih" have become an integral part of countless cherished moments. We understand that these treats hold the power to bring people together, bridging the gap between generations and strengthening the bonds of love and togetherness.</p>
                                                <p>As we move forward, our commitment to excellence remains steadfast. We continue to prioritize the satisfaction of our customers, ensuring that each interaction with KuehRaye leaves you with a sense of delight and fulfillment. Join us as we embark on this delectable journey together, celebrating the flavors of tradition and innovation since 2015.</p>


				</div>
                         </div>
                 </div>




	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">Why <span class="orange-text">Kueh</span>Raye</h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-shipping-fast"></i>
									</div>
									<div class="content">
										<h3>Home Delivery</h3>
										<p>With just few clicks away, you're able to enjoy our delicious, mouth-watering kueh right at your doorstep!</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-money-bill-alt"></i>
									</div>
									<div class="content">
										<h3>Best Price</h3>
										<p>We are proud to offer our passionate customers the best prices for our all kueh!</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-briefcase"></i>
									</div>
									<div class="content">
										<h3>Custom Box</h3>
										<p>Special occasions? Customize your box to be gift-ready!</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-sync-alt"></i>
									</div>
									<div class="content">
										<h3>Quick Refund</h3>
										<p>Having any issues with our kueh parcels? Drop us a message for a refund, quick and easy!</p>
										<p>T&C applies.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end featured section -->

<!-- ----------------------------------------------Divider------------------------------------------- -->

	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>Eid al-Adha SALE is On!</h3>
            <div class="sale-percent"><span>Buy 5 Bottles & Get</span>10% Off</span></div>
            <a href="shop.php" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
	<!-- end shop banner -->

<!-- ----------------------------------------------Divider------------------------------------------- -->



 <!-- team section -->
<div class="mt-150">
	<div class="container">
	  <div class="row">
		<div class="col-lg-8 offset-lg-2 text-center">
		  <div class="section-title">
			<h3>Our <span class="orange-text">Team</span></h3>
			<p>Introducing our talented team of IT students from UTM Malaysia. With a passion for technology and a love for traditional and modern cookies, we are excited to bring you the best of both worlds on our Kueh Raye website. From innovative web design to mouthwatering treats, our team is dedicated to creating a delightful experience for you. Join us as we blend technology and tradition to satisfy your taste buds and bring joy to your celebrations.</p>
		  </div>
		</div>
	  </div>
	  <div class="row">
		<div class="col-sm-4">
		  <div class="single-team-item">
			<div class="team-bg team-bg-1"></div>
			<h4>Dzin Syafika<span>Chief Financial Officer</span></h4>
			<ul class="social-link-team">
			  <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
			  <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
			  <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
			</ul>
		  </div>
		</div>
		<div class="col-sm-4">
		  <div class="single-team-item">
			<div class="team-bg team-bg-2"></div>
			<h4>El Insyiraah<span>Chief Executive Officer</span></h4>
			<ul class="social-link-team">
			  <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
			  <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
			  <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
			</ul>
		  </div>
		</div>
		<div class="col-sm-4">
		  <div class="single-team-item">
			<div class="team-bg team-bg-3"></div>
			<h4>Mohamed Haris<span>Co - Chief Executive Officer</span></h4>
			<ul class="social-link-team">
			  <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
			  <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
			  <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
			</ul>
		  </div>
		</div>
		<div class="col-sm-4 offset-sm-4">
		  <div class="single-team-item">
			<div class="team-bg team-bg-4"></div>
			<h4>Faiz Fitri<span>Chief Operations Officer</span></h4>
			<ul class="social-link-team">
			  <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
			  <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
			  <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <!-- end team section -->



	<!-- testimonial-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="../images/avatars/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Saira Hakim<span>Housewife</span></h3>
								<p class="testimonial-body">
									"I have tried many cookies, but KuehRaye's cookies are in a league of their own! The perfect balance of flavors and textures makes each bite an absolute delight. I can't get enough of their mouthwatering creations."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="../images/avatars/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Adam Mirza<span>Engineer</span></h3>
								<p class="testimonial-body">
									"KuehRaye have become a staple in my family's gatherings. The incredible variety of flavors ensures that there is something for everyone, and they never disappoint. These "kueh raya" have elevated our celebrations to a whole new level!"
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="../images/avatars/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Aisha Jawwad<span>Local shop owner</span></h3>
								<p class="testimonial-body">
									"I was searching for cookies that capture the essence of tradition while offering a modern twist, and KuehRaye exceeded my expectations. Their cookies are a testament to their commitment to quality and innovation. I highly recommend trying them!"
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<br>

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
						<p>Since our establishment in 2015, KuehRaye has steadily grown and evolved to become a trusted name in the world of "kuih". Our journey has been guided by a deep-rooted passion for delivering exceptional taste experiences and creating lasting memories.</p>
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
						<form action="../index.php">
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
					<p>Copyrights &copy; 2023 - <b><span class="orange-text">KuehRaye</span></b>,  All Rights Reserved.</p>
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