<?php
session_start();
 $connect = mysqli_connect("localhost", "root", "", "hc1");
 if(isset($_POST["add_ticket"]))
 {
      if(isset($_SESSION["tickets"]))
      {
           $item_array_id = array_column($_SESSION["tickets"], "id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["tickets"]);
                $item_array = array(
                     'id'               =>     $_GET["id"],
                     'event'               =>     $_POST["hidden_name"],
                     'price'          =>     $_POST["hidden_price"],
                     'tickets'          =>     $_POST["tickets"]
                );
                $_SESSION["tickets"][$count] = $item_array;
           }
           else
           {
                echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="events.php"</script>';
           }
      }
      else
      {
           $item_array = array(
                'id'               =>     $_GET["id"],
                'event'               =>     $_POST["hidden_name"],
                'price'          =>     $_POST["hidden_price"],
                'tickets'          =>     $_POST["tickets"]
           );
           $_SESSION["tickets"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["tickets"] as $keys => $values)
           {
                if($values["id"] == $_GET["id"])
                {
                     unset($_SESSION["tickets"][$keys]);
                     echo '<script>alert("Item Removed")</script>';
                     echo '<script>window.location="tickets.php"</script>';
                }
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
            </div>
            <!--logo end-->

            <!--main menu -->
            <div class="side_menu_section">
                <ul class="menu_nav">
                    <li class="active">
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
                    <li>
                        <a href="contact.php">
                            Contact
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
            <div class="portfolio">
                <div class="container-fluid">
                    <!--=================== masaonry portfolio start====================-->

                    <div style="clear:both"></div>
                    <br />
                    <h3>Order Details</h3>
                    <div class="table-responsive">
                         <table class="table table-bordered">
                              <tr>
                                   <th width="40%">Event Name</th>
                                   <th width="10%">Tickets</th>
                                   <th width="20%">Price</th>
                                   <th width="15%">Total</th>
                                   <th width="5%">Action</th>
                              </tr>
                              <?php
                              if(!empty($_SESSION["tickets"]))
                              {
                                   $total = 0;
                                   foreach($_SESSION["tickets"] as $keys => $values)
                                   {
                              ?>
                              <tr>
                                   <td><?php echo $values["event"]; ?></td>
                                   <td><?php echo $values["tickets"]; ?></td>
                                   <td>$ <?php echo $values["price"]; ?></td>
                                   <td>$ <?php echo number_format($values["tickets"] * $values["price"], 2); ?></td>
                                   <td><a href="tickets.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="text-danger">Remove</span></a></td>
                              </tr>
                              <?php
                                        $total = $total + ($values["tickets"] * $values["price"]);
                                   }
                              ?>
                              <tr>
                                   <td colspan="3" align="right">Total</td>
                                   <td align="right">$ <?php echo number_format($total, 2); ?></td>
                                   <td></td>
                              </tr>
                              <?php
                              }
                              ?>
                         </table>
                    </div>

                    <button type="button" name="button"><a href="checkout.php?action=delete&id=<?php echo $values["item_id"]; ?>">Checkout</a></button>
               </div>
               <br />
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
