<?php

include '../Database_Connect.php';

$action = $_GET['action'];
$img_id = $_GET['gid'];

if ($action == "enable")
{
    $res_enable = $conn->query("update gallery set image_status=1 where image_id='$img_id'");
    if ($res_enable)
    {
        echo "<script>window.location='gallery.php'</script>";
    }
}

if ($action == "disable")
{
    $res_enable = $conn->query("update gallery set image_status=0 where image_id='$img_id'");
    if ($res_enable)
    {
        echo "<script>window.location='gallery.php'</script>";
    }
}

if ($action == "delete")
{
    $res_enable = $conn->query("delete from gallery where image_id='$img_id'");
    if ($res_enable)
    {
        echo "<script>window.location='gallery.php'</script>";
    }
}
