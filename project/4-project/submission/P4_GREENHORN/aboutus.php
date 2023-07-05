<?php
session_start();
?>

<html>

<head>
  <title> About | Malacca Traditional Food </title>
</head>

<link rel="stylesheet" type="text/css" href="css/aboutus.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
          <li class="active"><a href="aboutus.php">About</a></li>
          <li><a href="events.php">Events</a></li>
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

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Melaka</h2>
          <p>Learn More <span>About Melaka</span></p>
        </div>

        <div class="row gy-10">
        <div class="col-md-6">
          <!-- Example Image: Replace the src attribute with the URL of your image -->
          <img src="assets/img/about.jpg" alt="Malacca Food" style="width: 100%; height: auto;">
        </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Steeped in centuries of diverse heritage, Malacca's culinary heritage reflects the influences of Malay, Chinese, Indian, Portuguese, and Dutch cultures, all of which have left an indelible mark on the region's gastronomy. This amalgamation of flavors and techniques has given birth to a captivating range of dishes that are sure to tantalize the taste buds of locals and visitors alike.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Located on the southwest coast of Peninsular Malaysia, Malacca's traditional cuisine reflects a rich tapestry of cultural influences.</li>
                <li><i class="bi bi-check2-all"></i> Malay, Chinese, Indian, Portuguese, and Dutch heritage have contributed to the unique and delectable array of dishes.</li>
                <li><i class="bi bi-check2-all"></i> Indulge in the delicate and flavorful Baba Nyonya dishes, showcasing the region's balance of tastes.</li>
                <li><i class="bi bi-check2-all"></i> Night markets and quaint eateries offer a diverse culinary adventure.</li>
                <li><i class="bi bi-check2-all"></i> Each dish tells a story and unveils the vibrant history of the region.</li>
              </ul>

            </div>
          </div>
        </div>

        <div>
        <p>Join us as we embark on a culinary adventure through Malacca's rich history and heritage, delving into the stories behind each dish and discovering the vibrant tapestry of flavors that continue to define this remarkable destination. So, prepare your taste buds for a delightful journey as we dive into the world of Malacca's traditional food, where the past comes alive on every plate, and each bite unveils a taste of the city's diverse and captivating past.
        </p>
      </div>

      </div>
    </section><!-- End About Section -->

  <div class="mb-3">
          <iframe style="padding:30px; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d127580.95451018054!2d102.18257838803248!3d2.1897493654571867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x31d1f1e0e79b7485%3A0xb1f4d1ef5e1facc8!2sJln%20Merdeka%2C%20Banda%20Hilir%2C%2075000%20Melaka!3m2!1d2.189751!2d102.252619!5e0!3m2!1sen!2smy!4v1688357806161!5m2!1sen!2smy" frameborder="0" allowfullscreen></iframe>
  </div><!-- End Google Maps -->


</body>

</html>