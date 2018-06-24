<?php
    


?>


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
  <div class="right-panel" id="right-panel">
    <header id="header" class="header">
      <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                      </div>

    </header>
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add events</h1>
                    </div>
                </div>
            </div>


  </div>
  <div class="card">
                      <div class="card-header">
                        Add Event
                      </div>
                      <div class="card-body card-block">
                        <form action="eventadd.php" method="post" class="">
                          <div class="form-group"><label for="title" class=" form-control-label">Title</label><input type="text" id="nf-email" name="title" placeholder="Enter Title.." class="form-control"></div>
                          <div class="col col-md-3"><label for="file-input" class=" form-control-label">Upload image</label></div>
                          <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Post</label></div>
                            <div class="col-12 col-md-9"><textarea name="post" id="textarea-input" rows="9" placeholder="Content..." class="form-control">Text</textarea></div>
                        </form>
                      </div>
                      <div class="card-footer">
                        <input type="submit">
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
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
