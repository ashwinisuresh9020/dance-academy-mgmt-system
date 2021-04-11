<?php


$conn = mysqli_connect("localhost","root",'',"dance-academy");

if(isset($_POST['submit']))
{
    $username = $_POST['uname'];
    $pass = $_POST['pwd'];
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
        if($row_login_stmt[2]=="CHOREOGRAPHER")
        {
            echo "<script>window.location.href='choreographer/homepage.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Please check the credentials...')</script>";
        echo "<script>window.location.href='contact.html'</script>";
    }
}
?>