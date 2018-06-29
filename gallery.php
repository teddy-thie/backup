<?php
$connect = mysqli_connect("localhost", "root", "", "hc1");
if(isset($_POST["insert"]))
{
    $name = $_POST['name'];
    $artist = $_POST['artist'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
     $query = "INSERT INTO gallery(image,name,artist,price,quantity) VALUES ('$file','$name','$artist','$price','$quantity')";
     if(mysqli_query($connect, $query))
     {
          echo '<script>alert("Image Inserted into Database")</script>';
     }else {
       echo("Error description: " . mysqli_error($connect));   }
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
                    <li class="active">
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
                    <li>
                        <a href="shopping_cart.php">
                            Shopping Cart
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
        <div class="col-lg-10 body_block  align-content-center">
          <h1>Browse and Buy Art Here</h1>
          <p>_______</p>
          <br>
          <?php
                $query = "SELECT * FROM gallery ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                     while($row = mysqli_fetch_array($result))
                     {
                        ?>
                     <form method="post" action="shopping_cart.php?action=add&id=<?php echo $row["id"]; ?>"  align-content-center>
                          <div style="border:5px solid #333; background-color:white;  padding:5px;" align="center" >
                        <table>
                            <tr>

                            <td>   <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row["image"]).'" width="250" height="250"/> ';?>
                               <h3 class="text-info"><?php echo $row["name"]; ?></h3>
                               <h4>by</h4>
                               <h4 class="text-info"><?php echo $row["artist"]; ?></h4>
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                               <input type="number" name="quantity" class="form-control" value="1" min="1" max="<?php echo $row["quantity"]; ?>" />
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /><td></tr>

                               </table>

                          </div>
                     </form>
                <?php
                     }
                }
                ?>

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
<script>
$(document).ready(function(){
     $('#insert').click(function(){
          var image_name = $('#image').val();
          if(image_name == '')
          {
               alert("Please Select Image");
               return false;
          }
          else
          {
               var extension = $('#image').val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
               {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
               }
          }
     });
});
</script>
