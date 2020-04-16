<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(isset($_POST['update_profile'])){
    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        switch($_SESSION['usertype']){
            case 1: //Student
                //Data
                $reg_number = $_POST['reg_number'];
                $gender = $_POST['gender'];
                $date_of_birth = $_POST['date_of_birth'];
                $student_level = $_POST['student_level'];

                //Validation
                if(empty($fname)){
                    $_SESSION['err'] = "Please fill first name";
                }elseif(empty($lname)){
                    $_SESSION['err'] = "Please fill last name";
                }elseif(empty($reg_number)){
                    $_SESSION['err'] = "Please fill registration number";
                }elseif(empty($gender)){
                    $_SESSION['err'] = "Please select gender";
                }elseif(empty($date_of_birth)){
                    $_SESSION['err'] = "date of birth is missing";
                }elseif(empty($student_level)){
                    $_SESSION['err'] = "Please fill level";
                }elseif(empty($email)){
                    $_SESSION['err'] = "Please fill email";
                }elseif(empty($phone)){
                    $_SESSION['err'] = "Please fill phone number";
                }else{
                    //Update query
                    $updateStudent = $conn->prepare("UPDATE student SET first_name = :first_name, last_name = :last_name, reg_number = :reg_number, gender = :gender, date_of_birth = :date_of_birth, student_level = :student_level, email = :email, phone = :phone WHERE student_id = :student_id");
                    $updateStudent->execute(array(
                        ':first_name' => $fname,
                        ':last_name' => $lname,
                        ':reg_number' => $reg_number,
                        ':gender' => $gender,
                        ':date_of_birth' => $date_of_birth,
                        ':student_level' => $student_level,
                        ':email' => $email,
                        ':phone' => $phone,
                        ':student_id' => $_SESSION['user_id']
                    ));
                    if($updateStudent){
                        $_SESSION['msg'] = "Your profile has been updated";
                    }
                }
            break;
            case 2: //Lecturer
                //Data
                $gender = $_POST['gender'];

                //Validation
                if(empty($fname)){
                    $_SESSION['err'] = "Please fill first name";
                }elseif(empty($lname)){
                    $_SESSION['err'] = "Please fill last name";
                }elseif(empty($gender)){
                    $_SESSION['err'] = "Please select gender";
                }elseif(empty($email)){
                    $_SESSION['err'] = "Please fill email";
                }elseif(empty($phone)){
                    $_SESSION['err'] = "Please fill phone number";
                }else{
                    //Update query
                    $updateLecturer = $conn->prepare("UPDATE lecturer SET first_name = :first_name, last_name = :last_name, gender = :gender,  email = :email, phone = :phone WHERE lecturer_id = :lecturer_id");
                    $updateLecturer->execute(array(
                        ':first_name' => $fname,
                        ':last_name' => $lname,
                        ':gender' => $gender,
                        ':email' => $email,
                        ':phone' => $phone,
                        ':lecturer_id' => $_SESSION['user_id']
                    ));
                    if($updateLecturer){
                        $_SESSION['msg'] = "Your profile has been updated";
                    }
                }
            break;
            case 3: //HOD
                //Data
            
                //Validation
                if(empty($fname)){
                    $_SESSION['err'] = "Please fill first name";
                }elseif(empty($lname)){
                    $_SESSION['err'] = "Please fill last name";
                }elseif(empty($email)){
                    $_SESSION['err'] = "Please fill email";
                }elseif(empty($phone)){
                    $_SESSION['err'] = "Please fill phone number";
                }else{
                    //Update query
                    $updateHod = $conn->prepare("UPDATE hod SET first_name = :first_name, last_name = :last_name, email = :email, phone = :phone WHERE hod_id = :hod_id");
                    $updateHod->execute(array(
                        ':first_name' => $fname,
                        ':last_name' => $lname,
                        ':email' => $email,
                        ':phone' => $phone,
                        ':hod_id' => $_SESSION['user_id']
                    ));
                    if($updateHod){
                        $_SESSION['msg'] = "Your profile has been updated";
                    }
                }
            break;
        }
        //echo $phone;
        header("Location: ../profile");
    }
}
?>