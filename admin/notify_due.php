<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Notify Dues | THUNDERLINES</title>
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
                                                <a href="student_list.php">
                                                    Student List
                                                </a>
                                            </li>
                                            <li>
				                                <a href="batches.php">
				                                    Batches
				                                </a>
				                            </li>
				                            <li>
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
                                    <li class="nav nav-active">
                                        <a href="fees_details.php">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span>Fee details</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery.php">
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
                        <h2>Notify Dues</h2>

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

                                    <h2 class="panel-title">Update Fees</h2>
                                </header>
                                <form class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                    <div class="panel-body">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="msg_text">Message</label>
                                            <div class="col-md-6">
                                                <?php
                                                    $stud_id = $_GET['stid'];

                                                    include_once '../Database_Connect.php';

                                                    $sel_stud = "select student_name from student where student_id='$stud_id'";
                                                    $res_stud = $conn->query($sel_stud);
                                                    $row_stud = $res_stud->fetch_array();

                                                    $amount_sel = "SELECT sum(dance_price) from dance where dance_id IN(SELECT dance_id from student_dance where student_id='$stud_id')";
                                                    $res_amount_sel = $conn->query($amount_sel);
                                                    $row_amount_sel = $res_amount_sel->fetch_array();
                                                    $total = $row_amount_sel[0];

                                                    $amount_res_paid = "select sum(amount) from fees where student_id='$stud_id'";
                                                    $amount_res_paid_res = $conn->query($amount_res_paid);
                                                    $row_amount_res_paid = $amount_res_paid_res->fetch_array();

                                                    $stud_name = $row_stud[0];

                                                    if ($row_amount_res_paid[0]==null)
                                                    {
                                                        $due = $total;
                                                    }
                                                    else
                                                    {
                                                        $due = $total - $row_amount_res_paid[0];
                                                    }
                                                    $message_text = "Hello $stud_name, You have a due amount of Rs. $due /-. Please clear the dues soon.
                                                    -Admin";

                                                    echo "<textarea class='form-control' name='msg_text' id='msg_text' rows='4'>$message_text</textarea>";
                                                ?>
                                            </div>
                                        </div>



                                    </div>
                                    <footer class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <input class="btn btn-primary" type="submit" value="notify due" name="notify_due" id="notify_due">
                                            </div>
                                        </div>
                                    </footer>
                                </form>
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

<?php

if (isset($_POST['notify_due']))
{


    $msg_title = "fee_dues";

    //admin num ==> 111

    $ins_dues = "insert into messages(from_id, to_id, message_title, message) values ('111','$stud_id','$msg_title','$message_text')";
    $res_dues = $conn->query($ins_dues);
    if ($res_dues)
    {
        echo "<script>alert('Dues notified successfully...')</script>";
        echo "<script>window.location='fees_details.php'</script>";
    }

}