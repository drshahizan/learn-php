<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Malaysia Tradisional Sport</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="navbar-logo">
                            <a class="navbar-logo-wrap" href="index.html">
                                <img class="navbar-logo-img" src="img/logo.png" alt="Acidus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <!-- Home -->
                                <li class="nav-item">
                                    <!--a class="nav-item-child" href="index.html">
                                        Home
                                    </a-->
                                </li>
                                <!-- End Home -->

                                <!-- About -->
                                <li class="nav-item">
                                    <!--a class="nav-item-child active" href="about.html">
                                        About & Event
                                    </a-->
                                </li>
                                <!-- End About -->

                                <!-- Work -->
                                <li class="nav-item">
                                    <!--a class="nav-item-child" href="news.html">
                                        News
                                    </a-->
                                </li>
                                <!-- End Work -->

                                <!-- Contact -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="readMessage.php">
                                        Read Message
                                    </a>
                                </li>
                                <!-- End Contact -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Slider -->
        <div class="bg-color-sky-light">
            <!--div class="content-md container"-->

                <!-- User Profile Content -->
                <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Active</span><span> </span></div>
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="p-3 py-5">
                            <?php
                            include 'config/conn.php';

                            // Execute a SQL query using mysqli
                            $sql = "SELECT * FROM user WHERE userName='admin'";
                            $result = $conn->query($sql);
                            $counter = 1;

                            if ($result->num_rows > 0) {
                                // Process the query result
                                while ($row = $result->fetch_assoc()) {
                                    // Access individual columns of each row
                                    $userName = $row['userName'];
                                    $userFullName = $row['userFullName'];
                                    $userNickName = $row['userNickName'];
                                    $userPhone = $row['userPhone'];
                                    $userEmail = $row['userEmail'];
                                    $userState = $row['userState'];
                                    $userCity = $row['userCity'];
                                }
                            } else {
                                echo "No results found.";
                            }
                            ?>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                            <br>
                            <h3 class="text-center">Profile Settings</h3>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" value="<?php print $userFullName; ?>" id="fName" name="fName"></div>
                            </div>
                            <div class="row mt-3">
                            <form name="updateUser" method="post" action="updateUser.php">
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" value="<?php print $userPhone; ?>" id="phone"></div>
                                <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" value="<?php print $userEmail; ?>" id="email"></div>
                                <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" value="<?php print $userState; ?>" id="state"></div>
                                <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" value="<?php print $userCity; ?>" id="city"></div>
                            </div>
                            <div class="mt-30 text-center">
                                <input class="btn btn-primary profile-button" type="submit" name="submit" value="Update Profile">
                                </form>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
                
            </div>
        </div>
        <!-- End Slider -->

        <!--========== END PAGE LAYOUT ==========-->
        <footer class="footer">

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo.png" alt="Acidus Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/acidus/">Acidus</a> Theme Powered by: <a class="fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        
    </body>
    <!-- END BODY -->
</html>