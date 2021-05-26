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
                            <li class="nav nav-active">
                                <a href="choreographer_details.php">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
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
                <h2>Edit Choreographer</h2>

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

                            <h2 class="panel-title">Edit Choreographer</h2>
                        </header>
                        <?php
                        $server_name = "localhost";
                        $user_name = "root";
                        $password = "";
                        $database = "dance-academy";

                        $conn = new mysqli($server_name, $user_name, $password, $database);

                        $choreo_id = $_GET['cid'];

                        $choreographer = "select choreographer_name, choreographer_dob, address, place, pincode, district, mobile, email, sallary, qualification from choreographer where choreographer_id='$choreo_id'";
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
                        <form class="form-horizontal form-bordered" method="post">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="choreoname">Full Name <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <?php
                                         echo "<input type='text' class='form-control' id='choreoname' name='choreoname' value='$choreo_name' required>";
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="address">Address <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <?php
                                        echo "<input type='text' class='form-control' id='address' name='address' value='$choreo_address' required>";
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="place">Place <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <?php
                                        echo "<input type='text' class='form-control' id='place' name='place' value='$choreo_place' required>";
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="pincode">Pin <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <?php
                                        echo "<input type='number' class='form-control' id='pincode' name='pincode' maxlength='6' value='$choreo_pincode' required>";
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="dst">District <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="dst" name="dst" required>
                                            <?php
                                            echo "<option value='$choreo_dst'>$choreo_dst</option>";
                                            ?>
                                            <option value="nothing">Select District</option>
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
                                        <?php
                                        echo "<input type='number' class='form-control' id='phone' name='phone' maxlength='10' value='$choreo_mob' required>"
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="mail">Email <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <?php
                                        echo "<input type='email' class='form-control' id='mail' name='mail' value='$choreo_mail' required>";
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="qualification">Qualification <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <?php
                                        echo "<input type='text' class='form-control' id='qualification' name='qualification' value='$choreo_qual' required>"
                                        ?>
                                    </div>
                                </div>

                            </div>


                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input class="btn btn-primary" type="submit" name="update_choreo">
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

if (isset($_POST['update_choreo']))
{
    $choreo_name = $_POST['choreoname'];
    $choreo_addr = $_POST['address'];
    $choreo_place = $_POST['place'];
    $choreo_pin = $_POST['pincode'];
    $choreo_dst = $_POST['dst'];
    $choreo_phone = $_POST['phone'];
    $choreo_mail = $_POST['mail'];
    $choreo_qualification = $_POST['qualification'];
    if ($choreo_dst=="nothing")
    {
        echo "<script>alert('Please select a district...')</script>";
    }
    else
    {
        $upd_choreo = "UPDATE choreographer set choreographer_name='$choreo_name',address='$choreo_addr',place='$choreo_place',pincode='$choreo_pin',district='$choreo_dst', mobile='$choreo_phone',email='$choreo_mail', qualification='$choreo_qualification' where choreographer_id='$choreo_id'";
        $upd = mysqli_query($conn, $upd_choreo);

        if($upd==true)
        {
            echo "<script>alert('Choreographer details updated successfully...')</script>";
            echo "<script>window.location='choreographer_details.php'</script>";
        }
        else
        {
            echo "<script>alert('Error in updating details')</script>";
            echo "" . mysqli_error($conn);
        }
    }
}
