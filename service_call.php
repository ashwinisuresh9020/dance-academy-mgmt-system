<?php

require_once 'Database_Connect.php';
$response = array();

if(isset($_GET['servicecall']))
{
    switch($_GET['servicecall'])
    {
        case 'student_register':

            if(isTheseParametersAvailable(array('full_name', 'date_of_birth', 'address','place','pincode','district','email','mobile','password','nearest_branch')))
            {
                $user_name = $_POST['full_name'];
                $user_dob = $_POST['date_of_birth'];
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
                    $stmt = $conn->prepare("INSERT INTO student(student_name,student_dob,address,place,pincode,district,email_address,mobile_number,nearest_branch) VALUES (?,?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("sssssssss",$user_name,$user_dob,$user_address,$user_place,$user_pincode,$user_district,$user_email,$user_mobile,$user_branch);
                    $stmt1 = $conn->prepare("INSERT INTO login(user_name,password,user_type) VALUES (?,?,?)");
                    $stmt1->bind_param("sss",$user_email,$user_password,$role);

                    if ($stmt->execute() && $stmt1->execute() )
                    {
                        $stmt = $conn->prepare("SELECT student_id, student_name,student_dob,address,place,pincode,district,email_address,mobile_number, nearest_branch from student where email_address=?" );
                        $stmt->bind_param("s",$user_email);
                        $stmt->execute();
                        $stmt->bind_result($stud_id, $stud_name,$stud_dob,$stud_address,$stud_place,$stud_pincode,$stud_district,$stud_email,$stud_mobile, $stud_branch);
                        $stmt->fetch();

                        $student = array
                        (
                            'stud_id'=>$stud_id,
                            'stud_name'=>$stud_name,
                            'stud_dob'=>$stud_dob,
                            'stud_address'=>$stud_address,
                            'stud_place'=>$stud_place,
                            'stud_pin'=>$stud_pincode,
                            'stud_dst'=>$stud_district,
                            'stud_mobile'=>$stud_mobile,
                            'stud_email'=>$stud_email,
                            'stud_branch'=>$stud_branch
                        );

                        $stmt->close();

                        $response['error']= false;
                        $response['message'] = 'User registered Successfully';
                        $response['student'] = $student;
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