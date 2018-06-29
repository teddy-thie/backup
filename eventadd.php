<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin panel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="asset/css/normalize.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/themify-icons.css">
    <link rel="stylesheet" href="asset/css/flag-icon.min.css">
    <link rel="stylesheet" href="asset/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="asset/scss/style.css">
    <link href="asset/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <title></title>
  </head>
  <body>
    <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <p>Banana Hill Art Gallery</p>
                <a class="navbar-brand" href="./"><img src="assets/img/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">USER ACTIONS</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="adminview.php">View Users</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="adminadd.php">Add Users</a></li>

                            <li><i class="fa fa-puzzle-piece"></i><a href="artistview.php">View Artists</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="artistadd.php">Add Artists</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">GALLERY ACTIONS</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Gallery</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="galleryview.php">View Gallery</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="galleryadd.php">Add to Gallery</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">EVENT ACTIONS</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Events</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="eventview.php">View Events</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="eventadd.php">Add Events</a></li>
                        </ul>
                    </li>
            </div><!-- /.navbar-collapse -->
    </nav>
  </aside>


</div>
<div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Upload an Event</strong>
                      </div>
                      <div class="card-body card-block">
                      <br />
             <form method="post" enctype="multipart/form-data" action="events.php">
               <label>Event<br>
                 <input type="text" name="event" value=""><br>
               </label>
               <br>
               <label>Description<br>
                 <input type="text" name="description" value=""><br>
               </label>
               <br>
              <label>Start Date<br>
                <input type="date" name="start" class="form-control" ><br>
              </label>

              <label>End Date<br>
                <input type="date" name="end" class="form-control"><br>
              </label>
              <br>
                  <input type="file" name="image" id="image" /><br>
                  <br />
                  <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
             </form>

                    </div>











    <script src="asset/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="asset/js/plugins.js"></script>
    <script src="asset/js/main.js"></script>


    <script src="asset/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="asset/js/dashboard.js"></script>
    <script src="asset/js/widgets.js"></script>
    <script src="asset/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="asset/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="asset/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="asset/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
  </body>
</html>
