<?php
$output = NULL;


if (isset($_POST['submit'])) {
  $mysqli = NEW MySQLi('localhost','root','','hc1');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $query = $mysqli->query("SELECT * FROM contact WHERE name = '$name'");

  if(empty($name) or empty($email)or empty($subject)or empty($message)){
    $output = "Please fill in all the fields.";
  }
  elseif($query->num_rows != 0) {
    $output = "That artist's name has already been registered";
  }
  else {
    //Insertion of the record
    $insert = $mysqli->query("INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')");

      if($insert != TRUE){
        $output = "There was a problem <br />";
        $output .= $mysqli->error;
      }else {
        $output = "You have been rightfully registered!";
      }
  }
}

 ?>
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
                    <li>
                        <a href="artists.php">
                            Artists
                        </a>
                    </li>
                    <li class="active">
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
                    <div class="copy_right">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
            <!--social and copyright end -->

        </div>
        <!--=================== side menu end====================-->

        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div>
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">
                            <!--=================== contact info and form start====================-->
                            <div class="content_box">
                                <div class="content_box_inner">
                                    <div>
                                        <h3>
                                            Get in touch with us
                                        </h3>
                                        <p>_______</p>
                                        <br>
                                        <h2>
                                            Contacting “the pearl among the art galleries in Nairobi”
                                        </h2>
                                        <p>
                                        On this page you will find our address, a map, and a contact form.

We are present on Facebook, Google Plus, and on Twitter. Do “like” us, and do “follow” us there.

We also send out Newsletters, regularly, with updates on exhibitions, new features on Social Media, etcetera. Do sign up, if you’d like to know what we are up to.

We are keen to hear from you!
Banana Hill Art Gallery: among the best art galleries in Nairobi!
                                        </p>

                                        <ul class="nosyely_list pt50">
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="assets/img/icons/satelite.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            Banana Raini Road<br/>
                                                            Nairobi, Kenya
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="assets/img/icons/scheme.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                        info@bananahillartgallery.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="assets/img/icons/smartphone.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                        +254 711756911 <br>
                                                        +254 733882660 <br>
                                                        +254700807362

                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
<form class="" action="contact.php" method="POST">

                                        <div class="mt75 row justify-content-center">
                                            <div class="col-lg-6 col-12">
                                                <input type="text" name="name" placeholder="Name" class="form-control">
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="email" name="email" placeholder="E-Mail" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="subject" placeholder="Subject" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <textarea  placeholder="Message" name="message" class="form-control" cols="4" rows="4"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                          </form>
                            <!--=================== contact info and form end====================-->
                        </div>
                        <div class="col-md-6 col-5 img_section" style="background-color:#000;">
                            <!--map -->
                            <div id="map" data-lon="36.7602961" data-lat="-1.1774571" class="map"></div>
                            <!--map end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>



<!-- jquery -->
<script data-cfasync="false" src="/cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
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
<!--map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuahgsm_qfH1F3iywCKzZNMdgsCfnjuUA"></script>
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
