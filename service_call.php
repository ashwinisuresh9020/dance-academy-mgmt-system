<?php

require_once 'Database_Connect.php';
$response = array();

if(isset($_GET['servicecall']))
{
    switch($_GET['servicecall'])
    {

        case "student_login":

            if (isTheseParametersAvailable(array('email','password'))) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $stmt5 = $conn->prepare("SELECT * from login where user_type='STUDENT' and user_name=? and password=?");
                $stmt5->bind_param("ss", $email, $password);
                $stmt5->execute();
                $stmt5->store_result();
                if ($stmt5->num_rows > 0) {
                    $stmt = $conn->prepare("SELECT student_id, student_name,student_dob,student_gender,address,place,pincode,district,email_address,mobile_number, nearest_branch from student where email_address=?" );
                    $stmt->bind_param("s",$email);
                    $stmt->execute();
                    $stmt->bind_result($stud_id, $stud_name,$stud_dob,$stud_gender,$stud_address,$stud_place,$stud_pincode,$stud_district,$stud_email,$stud_mobile, $stud_branch);
                    $stmt->fetch();

                    $student = array
                    (
                        'stud_id'=>$stud_id,
                        'stud_name'=>$stud_name,
                        'stud_dob'=>$stud_dob,
                        'stud_gender'=>$stud_gender,
                        'stud_address'=>$stud_address,
                        'stud_place'=>$stud_place,
                        'stud_pin'=>$stud_pincode,
                        'stud_dst'=>$stud_district,
                        'stud_mobile'=>$stud_mobile,
                        'stud_email'=>$stud_email,
                        'stud_branch'=>$stud_branch
                    );

                    $stmt->close();

                    $response['error'] = false;
                    $response['message'] = 'Succesfully logged in';
                    $response['student'] = $student;
                    $stmt5->close();
                }
                else
                {
                    $response['error'] = true;
                    $response['message'] = 'Check username/password';
                    $stmt5->close();
                }
            }
            else
            {
                $response['error'] = true;
                $response['message'] = 'required parameters are not available';
            }
            break;

        case 'student_register':

            if(isTheseParametersAvailable(array('full_name', 'date_of_birth', 'gender', 'address','place','pincode','district','email','mobile','password','nearest_branch')))
            {
                $user_name = $_POST['full_name'];
                $user_dob = $_POST['date_of_birth'];
                $user_gender = $_POST['gender'];
                $user_address = $_POST['address'];
                $user_place = $_POST['place'];
                $user_pincode = $_POST['pincode'];
                $user_district = $_POST['district'];
                $user_email = $_POST['email'];
                $user_mobile = $_POST['mobile'];
                $user_password = $_POST['password'];
                //$user_profile_pic = $_POST['profile_pic'];
                $user_branch = $_POST['nearest_branch'];
                $role = 'STUDENT';

                $stmt = $conn->prepare("SELECT * FROM login where user_name=?");
                $stmt->bind_param("s", $user_email);
                $stmt->execute();
                $stmt->store_result();

                if($stmt->num_rows>0)
                {
                    $response['error'] = true;
                    $response['message'] = 'Student Already Registered';
                    $stmt->close();
                }
                else
                {
                    $stmt = $conn->prepare("INSERT INTO student(student_name,student_dob,student_gender,address,place,pincode,district,email_address,mobile_number,nearest_branch) VALUES (?,?,?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("ssssssssss",$user_name,$user_dob,$user_gender,$user_address,$user_place,$user_pincode,$user_district,$user_email,$user_mobile,$user_branch);
                    $stmt1 = $conn->prepare("INSERT INTO login(user_name,password,user_type) VALUES (?,?,?)");
                    $stmt1->bind_param("sss",$user_email,$user_password,$role);

                    if ($stmt->execute() && $stmt1->execute() )
                    {

                        $stmt->close();

                        $response['error']= false;
                        $response['message'] = 'User registered Successfully';
                    }
                }
            }
            else
            {
                $response['error'] = true;
                $response['message'] = 'required parameters are not available';

            }
        break;

        case "get_branches":

            $stmt2 = "select * from branch";
            $branch = array();
            $res_stmt2 = mysqli_query($conn, $stmt2);
            $temp = array();
            if($res_stmt2)
            {
                while ($row_stmt2 = mysqli_fetch_array($res_stmt2))
                {
                    $temp['branch_id'] = $row_stmt2[0];
                    $temp['branch_landmark'] = $row_stmt2[1];
                    $temp['branch_place'] = $row_stmt2[3];
                    $temp['branch_pincode'] = $row_stmt2[2];
                    $temp['branch_district'] = $row_stmt2[4];
                    array_push($branch,$temp);
                }
                $response =$branch;
            }
        break;

        case "get_dances":

            $stmt3 = "select dance_id, dance_name from dance";
            $dance = array();
            $temp = array();
            $res_stmt3 = $conn->query($stmt3);
            if ($res_stmt3)
            {
                while ($row_stmt3 = $res_stmt3->fetch_array())
                {
                    $temp['dance_id'] = $row_stmt3[0];
                    $temp['dance_name'] = $row_stmt3[1];
                    array_push($dance, $temp);
                }
                $response = $dance;
            }
        break;

        case "get_events":

            $stmt7 = "select * from events where event_status='1'";
            $events = array();
            $temp = array();
            $res_stmt7 = $conn->query($stmt7);
            if ($res_stmt7)
            {
                while ($row_stmt7 = $res_stmt7->fetch_array())
                {
                    $temp['event_id'] = $row_stmt7[0];
                    $temp['event_name'] = $row_stmt7[1];
                    $temp['event_desc'] = $row_stmt7[3];
                    $temp['event_poster'] = $row_stmt7[2];
                    $temp['event_date'] = $row_stmt7[4];
                    array_push($events,$temp);
                }
                $response = $events;
            }
        break;

        case "add_student_dance":
            if (isTheseParametersAvailable(array('student_id','dance_id')))
            {
                $student_id = $_POST['student_id'];
                $dance_id = $_POST['dance_id'];

                $stmt4 = $conn->prepare("insert into student_dance(student_id,dance_id) values (?,?)");
                $stmt4->bind_param("ss",$student_id,$dance_id);
                if ($stmt4->execute())
                {
                    $response['error'] = false;
                    $response['message'] = 'Dance added successfully...';
                }
                else
                {
                    $response['error'] = true;
                    $response['message'] = 'Something went wrong!';
                }
            }
            else
            {
                $response['error'] = true;
                $response['message'] = 'required parameters are not available';
            }
        break;

        case "get_fee_dues":

            if (isTheseParametersAvailable(array('user_id')))
            {
                $user = $_POST['user_id'];

                $stmt6 = "select * from messages where from_id='111' and message_title='fee_dues' and to_id='$user' and message_status='1'";
                $res_stmt6 = $conn->query($stmt6);
                $row_stmt6 = $res_stmt6->fetch_array();
                if (mysqli_num_rows($res_stmt6) == 0)
                {
                    $response['error'] = true;
                    $response['message'] = 'No fee dues...';
                }
                else
                {
                    $response['error'] = false;
                    $response['message'] = $row_stmt6[4];
                }
            }
            else
            {
                $response['error'] = true;
                $response['message'] = 'required parameters are not available';
            }
    }
}
else
{
    $response['error'] = true;
    $response['message'] = 'Invalid API Call';
}

echo json_encode($response);

function isTheseParametersAvailable($params)
{
    foreach($params as $param)
    {
        if (!isset($_POST[$param]))
        {
            return false;
        }
    }

    return true;
}

?>