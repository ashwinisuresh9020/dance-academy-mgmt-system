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
                                    <li class="nav nav-active">
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
                        <h2>Fees Management</h2>

                    </header>

                    <!-- start: page -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                            </div>

                            <h2 class="panel-title">Fees</h2>
                        </header>
                        <div class="panel-body">
                            <div class="row">
                                <form class="form-horizontal form-bordered" method="post">
                                    <div class="col-sm-3">
                                        <select class="form-control" id="studentdetails" name="studentdetails" required>
                                            <option value="nothiing">Select an option</option>
                                            <option value="1">Paid</option>
                                            <option value="0">Not paid</option>
                                        </select>
                                        <div class="mb-md">

                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="submit" value="Get details" class="btn btn-primary" name="get_details" id="get_details"></input>
                                        <div class="mb-md">

                                        </div>
                                    </div>

                                </form>

                            </div>

                            <table class="table table-bordered table-striped mb-none" id="tester_table">
                                <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Mobile Number</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Notify</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                include_once '../Database_Connect.php';

                                if (isset($_POST['get_details']))
                                {
                                    if ($_POST['studentdetails']==0)
                                    {
                                        $sel_stud_np = "select student_id,student_name, mobile_number from student where fee_status=0";
                                        $res_student_np = $conn->query($sel_stud_np);
                                        while ($row_student_np = $res_student_np->fetch_array())
                                        {
                                            $sel_dues = "select * from messages where message_title='fee_dues' and to_id='$row_student_np[0]'";
                                            $res_sel_dues = $conn->query($sel_dues);
                                            $count_dues = mysqli_num_rows($res_sel_dues);

                                            echo "<tr>";
                                            echo "<td>$row_student_np[1]</td>";
                                            echo "<td>$row_student_np[2]</td>";
                                            echo "<td>Not Paid</td>";
                                            echo "<td><a href='update_fees.php?stid=$row_student_np[0]'><button class='btn btn-primary'>Update</button></a></td>";
                                            if($count_dues > 0)
                                            {
                                                echo "<td><a href='notify_due.php?stid=$row_student_np[0]'><button class='btn btn-warning' disabled>Notified Already</button></a></td>";
                                            }
                                            else
                                            {
                                                echo "<td><a href='notify_due.php?stid=$row_student_np[0]'><button class='btn btn-warning'>Notify</button></a></td>";
                                            }
                                        }
                                    }
                                    if ($_POST['studentdetails']==1)
                                    {
                                        $sel_stud_p = "select student_id,student_name, mobile_number from student where fee_status=1";
                                        $res_student_p = $conn->query($sel_stud_p);
                                        while ($row_student_p = $res_student_p->fetch_array())
                                        {
                                            echo "<tr>";
                                            echo "<td>$row_student_p[1]</td>";
                                            echo "<td>$row_student_p[2]</td>";
                                            echo "<td>Paid</td>";
                                            echo "<td><a href='update_fees.php?stid=$row_student_p[0]'><button class='btn btn-primary'>Update</button></a></td>";
                                            echo "<td><a><button class='btn btn-warning' disabled>Notify</button></a></td>";
                                        }
                                    }
                                }
                                /*$batch_sel = "select student_name,mobile from student where student_id";
                                $res = $conn->query($batch_sel);
                                while ($row = $res->fetch_array())
                                {
                                    echo "<tr>";
                                    echo "<td>$row[1]</td>";
                                    echo "<td>$row[2]</td>";
                                    echo "<td>$row[4]</td>";
                                    echo "<td>$row[5]</td>";
                                    echo "<td>$row[9]</td>";
                                }*/
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