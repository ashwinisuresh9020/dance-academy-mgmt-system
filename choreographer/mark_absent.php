<?php

include_once '../Database_Connect.php';

$student = $_GET['sid'];
$today_date = date("Y-m-d");
$sel_attendance = $conn->query("select count(*) from attendance where stud_id ='$student' and attendance_date='$today_date'");
$res_attendance = $sel_attendance->fetch_array();
$upd_present = $conn->query("insert into attendance(attendance_date,stud_id,attendance_status) values ('$today_date','$student','0')");
if ($upd_present)
{
    echo "<script>alert('Attendance marked successfully...')</script>";
    echo "<script>window.location='student_attendance.php'</script>";
}