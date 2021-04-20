<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Choreographer Details | THUNDERLINES</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="assets/vendor/morris.js/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="homepage.php" class="logo">
                <img src="assets/images/new_logo.png" alt="Porto Admin" height="40"/>
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    Navigation
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">

                        <ul class="nav nav-main ">
                            <li class="nav-parent ">
                                <a href="#">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                    <span>Choreographer</span>
                                </a>
                                <ul class="nav nav-children ">
                                    <li class="nav nav-active">
                                        <a href="choreographer_list.php">
                                            Choreographer List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="choreographer_add.php">
                                            Add Choreographer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="assign_batch.php">
                                            Assign batch
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Leave Management
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <span>Students</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="batches.php">
                                            Batches
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Fee Dues
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a href="#">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    <span>Attendance Management</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a href="#">
                                            Students
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Choreographers
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="branches.php">
                                    <i class="fa fa-building-o" aria-hidden="true"></i>
                                    <span>Branches</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    <span>Fee details</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-image" aria-hidden="true"></i>
                                    <span>Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>Events</span>
                                </a>
                            </li>
                            <li>
                                <a href="../login.html">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <script>
                    // Maintain Scroll Position
                    if (typeof localStorage !== 'undefined') {
                        if (localStorage.getItem('sidebar-left-position') !== null) {
                            var initialPosition = localStorage.getItem('sidebar-left-position'),
                                sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                            sidebarLeft.scrollTop = initialPosition;
                        }
                    }
                </script>


            </div>

        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Choreographers</h2>

            </header>

            <!-- start: page -->

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                            </div>

                            <h2 class="panel-title">Choreographer Details</h2>
                        </header>
                        <form class="form-horizontal form-bordered" method="post">
                            <div class="panel-body">
                                <div class="form-group">
                                    <?php
                                    $cid = $_GET['id'];
                                    $server_name = "localhost";
                                    $user_name = "root";
                                    $password = "";
                                    $database = "dance-academy";

                                    $conn = new mysqli($server_name, $user_name, $password, $database);

                                    $choreographer = "select choreographer_name, choreographer_dob, address, place, pincode, district, mobile, email, sallary, qualification from choreographer where choreographer_id='$cid'";
                                    $res = $conn->query($choreographer);
                                    $choreographer_data = $res->fetch_row();
                                    $choreo_name = $choreographer_data[0];
                                    $choreo_dob = $choreographer_data[1];
                                    $choreo_address = $choreographer_data[2];
                                    $choreo_place = $choreographer_data[3];
                                    $choreo_pincode = $choreographer_data[4];
                                    $choreo_dst = $choreographer_data[5];
                                    $choreo_mob = $choreographer_data[6];
                                    $choreo_mail = $choreographer_data[7];
                                    $choreo_sal = $choreographer_data[8];
                                    $choreo_qual = $choreographer_data[9];
                                    ?>
                                    <label class='col-md-3 control-label' for='testername'>Full Name</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_name</label>";
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Date of Birth</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_dob</label>";
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Address</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_address</label>";
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Place</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_place</label>";
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Pin</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_pincode</label>";
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">District</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_dst</label>";
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label class='col-md-3 control-label'>Phone</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_mob</label>";
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label class='col-md-3 control-label'>Email</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_mail</label>";
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label class='col-md-3 control-label'>Sallary</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_sal</label>";
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label class='col-md-3 control-label'>Qualification</label>
                                    <?php
                                    echo "<label class='col-md-3 control-label'>$choreo_qual</label>";
                                    ?>
                                </div>

                            </div>
                        </form>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-6">
                                    <a href="choreographer_list.php">
                                        <button class="btn btn-primary" name="choreo_list">Go back <i class="fa fa-arrow-left"></i> </button>
                                    </a>
                                </div>
                            </div>
                        </footer>
                    </section>
                </div>
            </div>

            <!-- end: page -->
        </section>
    </div>

</section>

<!-- Vendor -->
<script src="assets/vendor/jquery/jquery.js"></script>
<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="assets/vendor/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
<script src="assets/vendor/jquery-appear/jquery-appear.js"></script>
<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="assets/vendor/flot/jquery.flot.js"></script>
<script src="assets/vendor/flot.tooltip/flot.tooltip.js"></script>
<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
<script src="assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>
<script src="assets/vendor/raphael/raphael.js"></script>
<script src="assets/vendor/morris.js/morris.js"></script>
<script src="assets/vendor/gauge/gauge.js"></script>
<script src="assets/vendor/snap.svg/snap.svg.js"></script>
<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="assets/javascripts/theme.init.js"></script>

<!-- Examples -->
<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>

</body>
</html>
