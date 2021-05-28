<?php

include_once '../Database_Connect.php';

$action = $_GET['action'];
$student_id = $_GET['sid'];

if ($action=="enable")
{
    $stud_update_enable = $conn->query("update student set student_status=1 where student_id='$student_id'");
    if ($stud_update_enable)
    {
        echo "<script>alert('Updated status successfully...')</script>";
        echo "<script>window.location='student_list.php'</script>";
    }
}

if ($action=="disable")
{
    $stud_update_disable = $conn->query("update student set student_status=0 where student_id='$student_id'");
    if ($stud_update_disable)
    {
        echo "<script>alert('Updated status successfully...')</script>";
        echo "<script>window.location='student_list.php'</script>";
    }
}