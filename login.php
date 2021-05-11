<?php
session_start();

$conn = mysqli_connect("localhost","root",'',"dance-academy");

if(isset($_POST['submit']))
{
    $username = $_POST['uname'];
    $pass = $_POST['pwd'];
    $tod = date("Y-m-d");
    $login_query = "select * from login where user_name='$username' and password='$pass'";
    $login_stmt = mysqli_query($conn, $login_query);
    $row_login_stmt = mysqli_fetch_array($login_stmt);
    $count = mysqli_num_rows($login_stmt);
    if($count > 0)
    {
        if($row_login_stmt[2]=="ADMIN")
        {
            echo "<script>window.location.href='admin/homepage.php'</script>";
        }
        if($row_login_stmt[2]=="CHOREOGRAPHER") {

            $_SESSION['choreo_mail'] = $username;
            $sel_choreo_id = "select choreographer_id from choreographer where email='$username'";
            $res_choreo_id = $conn->query($sel_choreo_id);
            $row_choreo_id = $res_choreo_id->fetch_array();

            $res_choreo_attendance = $conn->query("select * from attendance where attendance_date='$tod'");
            if ($res_choreo_attendance->num_rows == 0)
            {
                $res_add_attendance = $conn->query("insert into attendance(attendance_date,choreo_id,attendance_status) values ('$tod','$row_choreo_id[0]','1')");
            }
            echo "<script>window.location.href='choreographer/homepage.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Please check the credentials...')</script>";
        echo "<script>window.location.href='index.html'</script>";
    }
}
?>