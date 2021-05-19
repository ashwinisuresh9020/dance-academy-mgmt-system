<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Admin Dashboard | THUNDERLINES</title>
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
				                            <li class="nav nav-active">
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
                                        <a href="#">
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
                        <h2>Batches</h2>

                    </header>

                    <!-- start: page -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                            </div>

                            <h2 class="panel-title">Batches</h2>
                        </header>
                        <form class="form-horizontal form-bordered" method="post">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <select class="form-control" id="studentdetails" name="studentdetails" required>
                                            <option value="nothing"> Select student</option>
                                            <?php

                                            $batch_id = $_GET['bid'];
                                            include_once '../Database_Connect.php';

                                            $sel_batch = "select batch_age_grp, branch_id from batch where batch_id=".htmlspecialchars($_GET['bid']);
                                            $res_batch = $conn->query($sel_batch);
                                            while ($row_batch = $res_batch->fetch_array())
                                            {
                                                if ($row_batch[0]=="4-10 yrs")
                                                {
                                                    $sel_student1 = "SELECT student_id, student_name from student where nearest_branch='$row_batch[1]' AND batch_id='0' and student_dob BETWEEN '2011-04-01' AND '2017-04-19'";
                                                    $res_student1 = $conn->query($sel_student1);
                                                    while ($row_student1 = $res_student1->fetch_array())
                                                    {
                                                        echo "<option value='$row_student1[0]'>$row_student1[1]</option>";
                                                    }
                                                }
                                                else if ($row_batch[0]=="11-15 yrs")
                                                {
                                                    $sel_student2 = "SELECT student_id, student_name from student where nearest_branch='$row_batch[1]' AND batch_id='0' and student_dob BETWEEN '2006-04-01' AND '2011-03-31'";
                                                    $res_student2 = $conn->query($sel_student2);
                                                    while ($row_student2 = $res_student2->fetch_array())
                                                    {
                                                        echo "<option value='$row_student2[0]'>$row_student2[1]</option>";
                                                    }
                                                }
                                                else if ($row_batch[0]=="16-25 yrs")
                                                {
                                                    $sel_student3 = "SELECT student_id, student_name from student where nearest_branch='$row_batch[1]' AND batch_id='0' and student_dob BETWEEN '1996-04-01' AND '2006-03-31'";
                                                    $res_student3 = $conn->query($sel_student3);
                                                    while ($row_student3 = $res_student3->fetch_array())
                                                    {
                                                        echo "<option value='$row_student3[0]'>$row_student3[1]</option>";
                                                    }
                                                }
                                                else if ($row_batch[0]=="25+ yrs male")
                                                {
                                                    $sel_student4 = "SELECT student_id, student_name from student where nearest_branch='$row_batch[1]' AND batch_id='0' and student_gender='Male' and student_dob BETWEEN '1971-04-01' AND '1996-03-31'";
                                                    $res_student4 = $conn->query($sel_student4);
                                                    while ($row_student4 = $res_student4->fetch_array())
                                                    {
                                                        echo "<option value='$row_student4[0]'>$row_student4[1]</option>";
                                                    }
                                                }
                                                else if ($row_batch[0]=="25+ yrs female")
                                                {
                                                    $sel_student5 = "SELECT student_id, student_name from student where nearest_branch='$row_batch[1]' AND batch_id='0' and student_gender='Female' and student_dob BETWEEN '1971-04-01' AND '1996-03-31'";
                                                    $res_student5 = $conn->query($sel_student5);
                                                    while ($row_student5 = $res_student5->fetch_array())
                                                    {
                                                        echo "<option value='$row_student5[0]'>$row_student5[1]</option>";
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>
                                        <div class="mb-md">

                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="submit" value="Add Student" class="btn btn-primary" name="add_stud"></input>
                                        <div class="mb-md">

                                        </div>
                                    </div>

                                </div>
                                <table class="table table-bordered table-striped mb-none" id="tester_table">
                                    <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Date of Birth</th>
                                        <th>Address</th>
                                        <th>Place</th>
                                        <th>Email Address</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $server_name = "localhost";
                                    $user_name = "root";
                                    $password = "";
                                    $database = "dance-academy";

                                    $batch_id = $_GET['bid'];

                                    $conn = new mysqli($server_name, $user_name, $password, $database);
                                    $batch_sel = "select * from student where batch_id=".htmlspecialchars($_GET['bid']);
                                    $res = $conn->query($batch_sel);
                                    while ($row = $res->fetch_array())
                                    {
                                        echo "<tr>";
                                        echo "<td>$row[1]</td>";
                                        echo "<td>$row[2]</td>";
                                        echo "<td>$row[4]</td>";
                                        echo "<td>$row[5]</td>";
                                        echo "<td>$row[9]</td>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </section>
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

require_once '../Database_Connect.php';

if (isset($_POST['add_stud']))
{
    $student_id = $_POST['studentdetails'];
    if ($student_id == "nothing")
    {
        echo "<script>alert('Please select a student...')</script>";
    }
    else
    {
        $ins_stud = "update student set batch_id=".htmlspecialchars($_GET['bid'])." where student_id='$student_id'";
        $stud_res = $conn->query($ins_stud);
        if ($stud_res)
        {
            echo "<script>alert('Student Added Successfully...')</script>";
            echo "<script>window.location='batches.php'</script>";
        }
    }
}
