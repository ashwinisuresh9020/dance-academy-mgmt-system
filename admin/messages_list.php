<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Messages | THUNDERLINES</title>
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
                                    <li>
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
                                        <a href="sallary_details.php">
                                            Sallary Management
                                        </a>
                                    </li>
                                    <li>
                                        <a href="leaves_list.php">
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
                                    <li class="nav nav-active">
                                        <a href="messages_list.php">
                                            Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="schedules.php">
                                            Schedules
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dances.php">
                                            Dances
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
                                        <a href="student_attendance.php">
                                            Students
                                        </a>
                                    </li>
                                    <li>
                                        <a href="choreographer_attendance.php">
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
                                <a href="fees_details.php">
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
                                <a href="video_lectures.php">
                                    <i class="fa fa-file-video-o" aria-hidden="true"></i>
                                    <span>Video Lectures</span>
                                </a>
                            </li>
                            <li>
                                <a href="video_requests.php">
                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                    <span>Video Requests</span>
                                </a>
                            </li>
                            <li>
                                <a href="event_details.php">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>Events</span>
                                </a>
                            </li>
                            <li>
                                <a href="personal_class_requests.php">
                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                    <span>Personal Class Enquiry</span>
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
                <h2>Message List</h2>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel-heading-transparent">
                        <header class="panel-body">
                            <h2 class="panel-body">Inbox</h2>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
                                    <i class="fa fa-envelope mr-xs"></i>
                                    Compose
                                </a>
                            </div>
                            <section class="content-without-menu mailbox">
                                <div class="content-without-menu-" data-mailbox data-mailbox-view="table">
                                    <div class="body mailbox-folder">
                                        <!-- START: .mailbox-header -->
                                        <!-- END: .mailbox-header -->

                                        <!-- START: .mailbox-actions -->

                                        <!-- END: .mailbox-actions -->

                                        <div id="mailbox-email-list" class="mailbox-email-list">
                                            <div class="nano">
                                                <div class="nano-content">
                                                    <ul id="" class="list-unstyled">
                                                        <?php
                                                        include_once '../Database_Connect.php';

                                                        $res_inbox = $conn->query("select distinct from_id,message from messages where message_title='user_admin' and to_id='111' and from_id in (select distinct from_id from messages where message_title='user_admin' and to_id='111')");
                                                        while ($row_inbox = $res_inbox->fetch_array())
                                                        {
                                                            $row_student = mysqli_fetch_array($conn->query("select student_name from student where student_id='$row_inbox[0]'"));
                                                            echo "<li>";
                                                            echo "<a href='message_details.php?stId=$row_inbox[0]'>";
                                                            echo "<div class='col-sender'>";
                                                            echo "<p class='m-none ib'>$row_student[0]</p>";
                                                            echo "</div>";
                                                            echo "<div class='col-mail'>";
                                                            echo "<p class='m-none mail-content'>";
                                                            echo "<span class='subject'>$row_inbox[1]</span>";
                                                            echo "</p>";
                                                            echo "</div>";
                                                            echo "</a>";
                                                            echo "</li>";
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </header>
                    </section>
                </div>
            </div>
            <!-- start: page -->
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

<?php

