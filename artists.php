
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Cocoon -Portfolio">
    <meta name="keywords" content="Cocoon , Portfolio">
    <meta name="author" content="Pharaohlab">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> Banana Hill Art Gallery</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <div class="row justify-content-center">
        <!--=================== side menu ====================-->
        <div class="col-lg-2 col-md-3 col-12 menu_block">

            <!--logo -->
            <div class="logo_box">
                <a href="#">
                    <img src="assets/img/logo.png" alt="cocoon">
                </a>
                <p>Banana Hill Art Gallery</p>
            </div>
            <!--logo end-->

            <!--main menu -->
            <div class="side_menu_section">
                <ul class="menu_nav">
                    <li>
                        <a href="home.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="portfolio.php">
                            Portfolio
                        </a>
                    </li>

                    <li>
                        <a href="about.php">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="gallery.php">
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="events.php">
                            Events
                        </a>
                    </li>
                    <li class="active">
                        <a href="artists.php">
                            Artists
                        </a>
                    </li>
                    <li>
                        <a href="contact.php">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="help.php">
                            Help
                        </a>
                    </li>
                </ul>
            </div>
            <!--main menu end -->

            <!--social and copyright -->
            <div class="side_menu_bottom">
                <div class="side_menu_bottom_inner">
                    <ul class="social_menu">
                        <li>
                            <a href="https://plus.google.com/108819026650804640672/"> <i class="ion ion-social-pinterest"></i> </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/BananaHillArtGalleryInNairobi"> <i class="ion ion-social-facebook"></i> </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/BananaHillArt"> <i class="ion ion-social-twitter"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--social and copyright end -->

        </div>
        <!--=================== side menu end====================-->

        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div class="portfolio">
                <div class="container-fluid">

        <div class="col-lg-6">
                          <div class="card">
                              <div class="card-header">
                                  <strong class="card-title">List of Artists</strong>
                              </div>
                              <div class="card-body">
                                  <table class="table table-dark" >
                                    <thead>
                                      <tr>
                                        <th scope="col">Artist Name</th>
                                        <th scope="col">Description</th>
                                      </tr>
                                    </thead>
                                    <tbody>
      <?php
      $con=mysqli_connect("localhost","root","","banana");
      // Check connection
      if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
        $ViewQuery = "SELECT * FROM artists ORDER BY id DESC";
        $Excecute = mysqli_query($con,$ViewQuery);

        while ($DataRows=mysqli_fetch_array($Excecute, MYSQLI_ASSOC)) {
          $aname = $DataRows["aname"];
          $description = $DataRows["description"];

        ?>
                                      <tr>
                                        <td><?php echo $aname ?></td>
                                        <td><?php echo $description ?></td>
                                        <td>
                                      </tr>
                                    <?php } ?>
                                    </tbody>

                                  </table>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  </div>


        <!--=================== content body end ====================-->
    </div>
</div>


<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/slick.min.js"></script>
<!--Portfolio Filter-->
<script src="assets/js/imgloaded.js"></script>
<script src="assets/js/isotope.js"></script>
<!-- Magnific-popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--Counter-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
