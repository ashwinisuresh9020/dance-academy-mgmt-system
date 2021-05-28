<?php
session_start();
?>
    <!doctype html>
    <html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>Choreographer Dashboard | THUNDERLINES</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="../admin/assets/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="../admin/assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="../admin/assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="../admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="../admin/assets/vendor/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="../admin/assets/vendor/jquery-ui/jquery-ui.theme.css" />
        <link rel="stylesheet" href="../admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="../admin/assets/vendor/morris.js/morris.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="../admin/assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="../admin/assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="../admin/assets/stylesheets/theme-custom.css">

        <!-- Head Libs -->
        <script src="../admin/assets/vendor/modernizr/modernizr.js"></script>

    </head>
    <body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="homepage.php" class="logo">
                    <img src="../admin/assets/images/new_logo.png" alt="Porto Admin" height="40"/>
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
                                            <a href="student_attendance.php">
                                                Attendance
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="leaves.php">
                                        <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                        <span>Leave Management</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="choreographer_details.php">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="nav nav-active">
                                    <a href="video_lectures.php">
                                        <i class="fa fa-file-video-o" aria-hidden="true"></i>
                                        <span>Video Lectures</span>
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
                    <h2>Video Class</h2>

                </header>

                <!-- start: page -->
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                        </div>

                        <h2 class="panel-title">Videos</h2>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-md">
                                    <a href="video_request.php">
                                        <button id="reqvideobtn" class="btn btn-primary">Request Video</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped mb-none" id="tester_table">
                            <thead>
                            <tr>
                                <th>Video Title</th>
                                <th>Batch</th>
                                <th>Click to watch</th>
                                <th>Status</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $server_name = "localhost";
                            $user_name = "root";
                            $password = "";
                            $database = "dance-academy";

                            $conn = new mysqli($server_name, $user_name, $password, $database);

                            $choreo_mail = $_SESSION['choreo_mail'];
                            $sel_choreo_id = "select choreographer_id from choreographer where email='$choreo_mail'";
                            $res_choreo_id = $conn->query($sel_choreo_id);
                            $row_choreo_id = $res_choreo_id->fetch_array();

                            $video_sel = "select video_id, video_title, video_location, batch_id, video_status from video_class where batch_id IN(select batch_id from choreographer where choreographer_id='$row_choreo_id[0]')";
                            $res = $conn->query($video_sel);
                            while ($row = $res->fetch_array())
                            {
                                echo "<tr>";
                                echo "<td>$row[1]</td>";
                                $batch_sel = "select batch_name from batch where batch_id ='$row[3]'";
                                $batch_res = mysqli_query($conn, $batch_sel);
                                while ($row_batch = $batch_res->fetch_array())
                                {
                                    echo "<td>$row_batch[0]</td>";
                                }
                                echo  "<td><a href='http://localhost/dance-academy/admin/$row[2]' target='_blank'>Click to watch</a></td>";
                                if ($row[4]==0)
                                {
                                    echo "<td>Completed</td>";
                                }
                                else if($row[4]==1)
                                {
                                    echo "<td>In progress</td>";
                                }
                                echo "<td><a href='update_video_req.php?vid=$row[0]'><button class='btn btn-primary'>Update</button></a></td>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- end: page -->
            </section>
        </div>

    </section>

    <!-- Vendor -->
    <script src="../admin/assets/vendor/jquery/jquery.js"></script>
    <script src="../admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="../admin/assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="../admin/assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="../admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="../admin/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="../admin/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="../admin/assets/vendor/jquery-ui/jquery-ui.js"></script>
    <script src="../admin/assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
    <script src="../admin/assets/vendor/jquery-appear/jquery-appear.js"></script>
    <script src="../admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="../admin/assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../admin/assets/vendor/flot/jquery.flot.js"></script>
    <script src="../admin/assets/vendor/flot.tooltip/flot.tooltip.js"></script>
    <script src="../admin/assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="../admin/assets/vendor/flot/jquery.flot.categories.js"></script>
    <script src="../admin/assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="../admin/assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="../admin/assets/vendor/raphael/raphael.js"></script>
    <script src="../admin/assets/vendor/morris.js/morris.js"></script>
    <script src="../admin/assets/vendor/gauge/gauge.js"></script>
    <script src="../admin/assets/vendor/snap.svg/snap.svg.js"></script>
    <script src="../admin/assets/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="../admin/assets/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="../admin/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="../admin/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="../admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="../admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="../admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="../admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="../admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="../admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="../admin/assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="../admin/assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="../admin/assets/javascripts/theme.init.js"></script>

    <!-- Examples -->
    <script src="../admin/assets/javascripts/dashboard/examples.dashboard.js"></script>

    </body>
    </html>

<?php


