<?php

include_once '../Database_Connect.php';
$id = $_GET['msgid'];

$video_req = $conn->query("update messages set message_status='0' where msg_id='$id'");
if ($video_req)
{
    echo "<script>alert('Request Accepted Successfully...')</script>";
    echo "<script>window.location='video_add.php'</script>";
}
