<?php

include_once 'Database_Connect.php';

if (isset($_POST['add_personal']))
{
    $name = $_POST['user_name'];
    $mobile = $_POST['user_number'];
    $date = $_POST['user_date'];
    $time = $_POST['user_time'];

    $today_date = date("Y-m-d");

    if (strlen($mobile)!=10)
    {
        echo "<script>alert('Mobile NUmber must be 10 digits...')</script>";
    }
    else if ($date < $today_date)
    {
        echo "<script>alert('Date must be from today...')</script>";
    }
    else
    {
        $res_personal_class = $conn->query("insert into personal_class(user_name, user_mobile, user_date, user_time) values ('$name','$mobile','$date','$time')");
        if ($res_personal_class)
        {
            echo "<script>alert('Enquired personal class successfully...')</script>";
            echo "<script>window.location='personal_class.html'</script>";
        }
    }


}