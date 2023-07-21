<?php
session_start();
?>

<html>

<head>
  <title> Home | Malacca Traditional Food </title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </button>
  <script type="text/javascript">
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Malacca Traditional Food.</a>
      </div>

      <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About</a></li>
          <li class="active"><a href="events.php">Events</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contactus.php">Contact Us</a></li>

        </ul>

        <?php
        if (isset($_SESSION['login_user1'])) {

        ?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else if (isset($_SESSION['login_user2'])) {
        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
                (<?php
                  if (isset($_SESSION["cart"])) {
                    $count = count($_SESSION["cart"]);
                    echo "$count";
                  } else
                    echo "0";
                  ?>)
              </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else {

        ?>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
              <ul class="dropdown-menu">
                <li> <a href="customersignup.php"> User Sign-up</a></li>
                <li> <a href="managersignup.php"> Manager Sign-up</a></li>

              </ul>
            </li>

            <li><a href="javascript:void(0);" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="customerlogin.php"> User Login</a></li>
                <li> <a href="managerlogin.php"> Manager Login</a></li>

              </ul>
            </li>
          </ul>

        <?php
        }
        ?>
      </div>

    </div>
  </nav>

  <!-- ======= Events Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Events</h2>
        <p>Share <span>Your Moments</span> In Our Restaurant</p>
      </div>

      <div class="row gy-10">
        <div class="col-md-6">
          <!-- Example Image: Replace the src attribute with the URL of your image -->
          <img src="assets/img/Restaurant-1.jpg" alt="Malacca Food" style="width: 550px; height: auto;">
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <h3> Nyonya Laksa by Calanthe Art Cafe</h3>

            <p class="description">
              Enjoy the best Nyonya food melaka at the Calanthe Art Cafe, which serves its traditional Nyonya Laksa and other famous dishes. You can also taste a wide variety of traditional coffee, premium coffee here. The cozy atmosphere here is definitely a good place for your afternoon tea. It is located near Jonker walk Melaka.
            </p>

          </div>
        </div>
      </div><!-- End Event Section -->

      <div class="row gy-10">
        <div class="col-md-6">
          <!-- Example Image: Replace the src attribute with the URL of your image -->
          <img src="assets/img/Restaurant-2.jpg" alt="Malacca Food" style="width: 550px; height: auto;">
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <h3> Chicken Rice Ball by Famosa Chicken Rice Ball</h3>

            <p class="description">
            This wholesome dish is a must-try and best food in Malacca! Chicken Rice balls melaka is an intricate and delicious dish, so you won’t miss when visiting Melaka. This dish from China is commonly found in Hainanese, Malaysian, and Singaporean cuisine and is popular among people who love to eat, especially chicken.

          </div>
        </div>
      </div><!-- End Event Section -->

  <div class="row gy-10">
        <div class="col-md-6">
          <!-- Example Image: Replace the src attribute with the URL of your image -->
          <img src="assets/img/Restaurant-3.jpg" alt="Malacca Food" style="width: 550px; height: auto;">
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <h3> Nasi Lemak by New Wang Food Court 88</h3>

            <p class="description">
            A flavorful rice dish that is cooked in coconut milk and pandan leaves is popular in Malaysia, particularly Nasi lemak in Malacca. Because it is considered as one of the best local food in Malacca. Try the best Nasi Lemak at New Wang Food Court is highly recommended. This is also a Chinese food court in Malacca.

          </div>
        </div>
      </div><!-- End Event Section -->

      <div class="row gy-10">
        <div class="col-md-6">
          <!-- Example Image: Replace the src attribute with the URL of your image -->
          <img src="assets/img/Restaurant-4.jpg" alt="Malacca Food" style="width: 550px; height: auto;">
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <h3> Duck Noddles by Tengkera Duck Noodle Restaurant</h3>

            <p class="description">
            Image Credit: Tengkera Duck Noodle Restaurant

                Tengkera Duck Noodle Restaurant is famous for serving Malacca-style Duck Noodles, and you can choose between having it in soup or dry form. The dry version is tossed in a thick sauce and topped with shredded duck meat, and it comes with a small bowl of soup.

          </div>
        </div>
      </div><!-- End Event Section -->

      <div class="row gy-10">
        <div class="col-md-6">
          <!-- Example Image: Replace the src attribute with the URL of your image -->
          <img src="assets/img/Restaurant-5.jpg" alt="Malacca Food" style="width: 550px; height: auto;">
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <h3> Satay Celup by Capitol Satay Celup Restaurant</h3>

            <p class="description">
            Capitol Satay is known for serving the best Satay Celup Melaka. Capitol uses its own secret recipe like peanuts mixed with a secret blend of spice powders. Satay Celup is a dish where various raw and partially cooked seafood, meats, and vegetables are skewered and then immersed in a pot of hot satay sauce.
          </div>
        </div>
      </div><!-- End Event Section -->

      <div class="row gy-10">
        <div class="col-md-6">
          <!-- Example Image: Replace the src attribute with the URL of your image -->
          <img src="assets/img/Restaurant-6.jpg" alt="Malacca Food" style="width: 550px; height: auto;">
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <h3> Shaved Ice Balls by Taibak Corner</h3>

            <p class="description">
            The weather in Malacca is very hot, but Tai Pak Kok has everything you need to “relieve the heat”! Taibak and shaved ice balls are the best Peranakan desserts in Melaka. So I recommend ordering Tabaik, which is sticky and tasteless and is usually served with jelly or yataji (palm seeds). It is very delicious and affordable price.

          </div>
        </div>
      </div><!-- End Event Section -->


    </div>
  </section><!-- End Event Section -->
  

  <br>
  <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button"> Order Now </a></center>
  </div>



</body>

</html>