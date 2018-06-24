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
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                           <div class="card">
                               <div class="card-body">
                                   <div class="row">
                                       <div class="col-sm-4">
                                           <h4 class="card-title mb-0">Traffic</h4>
                                           <div class="small text-muted">October 2017</div>
                                       </div>
                                       <!--/.col-->
                                       <div class="col-sm-8 hidden-sm-down">
                                           <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                                           <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                               <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                                   <label class="btn btn-outline-secondary">
                                                       <input type="radio" name="options" id="option1"> Day
                                                   </label>
                                                   <label class="btn btn-outline-secondary active">
                                                       <input type="radio" name="options" id="option2" checked=""> Month
                                                   </label>
                                                   <label class="btn btn-outline-secondary">
                                                       <input type="radio" name="options" id="option3"> Year
                                                   </label>
                                               </div>
                                           </div>
                                       </div><!--/.col-->


                                   </div><!--/.row-->
                                   <div class="chart-wrapper mt-4" >
                                       <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                                   </div>

                               </div>
                               <div class="card-footer">
                                   <ul>
                                       <li>
                                           <div class="text-muted">Visits</div>
                                           <strong>29.703 Users (40%)</strong>
                                           <div class="progress progress-xs mt-2" style="height: 5px;">
                                               <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                       </li>
                                       <li class="hidden-sm-down">
                                           <div class="text-muted">Unique</div>
                                           <strong>24.093 Users (20%)</strong>
                                           <div class="progress progress-xs mt-2" style="height: 5px;">
                                               <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="text-muted">Pageviews</div>
                                           <strong>78.706 Views (60%)</strong>
                                           <div class="progress progress-xs mt-2" style="height: 5px;">
                                               <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                       </li>
                                       <li class="hidden-sm-down">
                                           <div class="text-muted">New Users</div>
                                           <strong>22.123 Users (80%)</strong>
                                           <div class="progress progress-xs mt-2" style="height: 5px;">
                                               <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                       </li>
                                       <li class="hidden-sm-down">
                                           <div class="text-muted">Bounce Rate</div>
                                           <strong>40.15%</strong>
                                           <div class="progress progress-xs mt-2" style="height: 5px;">
                                               <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                       </li>
                                   </ul>
                               </div>
                           </div>
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
