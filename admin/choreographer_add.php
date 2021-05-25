<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Add Choreographer | THUNDERLINES</title>
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
                                    <li class="nav nav-active">
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
                            <li>
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
                <h2>Add Choreographer</h2>

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

                            <h2 class="panel-title">Add Choreographer</h2>
                        </header>
                        <form class="form-horizontal form-bordered" method="post">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="choreoname">Full Name <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="choreoname" name="choreoname" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="choreodob">Date of Birth <span class="required">*</span> </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                            <input id="tstrdob" type="date" class="form-control" name="choreodob"  required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="address">Address <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="address" name="address" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="place">Place <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="place" name="place" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="pincode">Pin <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="number"   class="form-control" id="pincode" name="pincode" maxlength="6" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="dst">District <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="dst" name="dst" required>
                                            <option value="nothing" selected>Select District</option>
                                            <option value="Alappuzha">Alappuzha</option>
                                            <option value="Ernamkulam">Ernamkulam</option>
                                            <option value="Idukki">Idukki</option>
                                            <option value="Kannur">Kannur</option>
                                            <option value="Kasargod">Kasargod</option>
                                            <option value="Kollam">Kollam</option>
                                            <option value="Kottayam">Kottayam</option>
                                            <option value="Kozhikode">Kozhikode</option>
                                            <option value="Malappuram">Malappuram</option>
                                            <option value="Palakkad">Palakkad</option>
                                            <option value="Pathanamthitta">Pathanamthitta</option>
                                            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                            <option value="Thrissur">Thrissur</option>
                                            <option value="Wayanad">Wayanad</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="phone">Phone <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="number"  class="form-control" id="phone" name="phone" maxlength="10" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="mail">Email <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="email"  class="form-control" id="mail" name="mail" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="sallary">Sallary <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" id="sallary" name="sallary" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="qualification">Qualification <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="qualification" name="qualification" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="pass">Password <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="password"  class="form-control" id="pass" name="pass" placeholder="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="cpass">Confirm Password <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="password"  class="form-control" id="cpass" name="cpass" placeholder="" required>
                                    </div>
                                </div>

                            </div>


                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input class="btn btn-primary" type="submit" name="add_choreo">
                                        <button type="reset" class="btn btn-default">Reset</button>
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

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "dance-academy";

$conn = new mysqli($server_name, $user_name, $password, $database);

if (isset($_POST['add_choreo']))
{
    $choreo_name = $_POST['choreoname'];
    $choreo_dob = $_POST['choreodob'];
    $choreo_addr = $_POST['address'];
    $choreo_place = $_POST['place'];
    $choreo_pin = $_POST['pincode'];
    $choreo_dst = $_POST['dst'];
    $choreo_phone = $_POST['phone'];
    $choreo_mail = $_POST['mail'];
    $choreo_sallary = $_POST['sallary'];
    $choreo_qualification = $_POST['qualification'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $log_role = "CHOREOGRAPHER";
    $check_mail = "select * from login where user_name='$choreo_mail'";
    $mail_res = mysqli_query($conn, $check_mail);
    if ($mail_res->num_rows > 0)
    {
        echo "<script>alert('An account with the same email address is found.' +
 'try with another email.')</script>";
    }
    else if ($choreo_dst=="nothing")
    {
        echo "<script>alert('Please select a district...')</script>";
    }
    else if($pass != $cpass)
    {
        echo "<script>alert('Please confirm your password...')</script>";
        echo  "<script>document.getElementById('pass').value=''</script>";

    }
    else
    {
        $choreo_pass = $pass;
        $ins_choreo =  "INSERT INTO choreographer (choreographer_name,choreographer_dob,address,place,pincode,district, mobile,email, sallary, qualification) values ('$choreo_name','$choreo_dob','$choreo_addr','$choreo_place','$choreo_pin','$choreo_dst','$choreo_phone','$choreo_mail','$choreo_sallary','$choreo_qualification')";
        $ins_login = "INSERT INTO login (user_name,password,user_type) values ('$choreo_mail','$choreo_pass','$log_role')";
        $reg = mysqli_query($conn, $ins_choreo);
        $log = mysqli_query($conn, $ins_login);

        if($log == true && $reg == true)
        {
            echo "<script>alert('Choreographer registered Successfully...')</script>";
            echo "<script>window.location='choreographer_list.php'</script>";
        }
        else
        {
            echo "<script>alert('Error in registration')</script>";
        }
    }
}
