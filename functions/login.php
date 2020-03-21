<?php
require_once ("session.php");
require_once ("db_connection.php");
require_once ("functions.php");
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Validation
    if(empty($username)){
        $_SESSION['err'] = "Please enter username";
    }
    elseif(empty($password)){
        $_SESSION['err'] = "Please enter password";
    }
    else{
        //check user type
        switch(userType($username)){
            case 1: //User is a student
                $check_student = $conn->prepare("SELECT * FROM student WHERE (reg_number = :username AND password = :password) OR (email = :username AND password = :password)");
                $check_student->execute(array(
                    ':username' => $username,
                    ':password' => $password
                ));
                if($student_row = $check_student->fetch(PDO::FETCH_OBJ)){
                    $_SESSION['user_id'] = $student_row->student_id;
                    $_SESSION['usertype'] = 1; //Student -> 1
                    $_SESSION['msg'] = "Hey ".$student_row->last_name.", you are logged successfully, You are a student";
                    header("Location: ../admin/");
                }
                else{
                    $_SESSION['err'] = "Incorrect password";
                }
            break;
            case 2: //User is a lecturer
                $check_lecturer = $conn->prepare("SELECT * FROM lecturer WHERE (email = :username AND password = :password) OR (phone = :username AND password = :password)");
                $check_lecturer->execute(array(
                    ':username' => $username,
                    ':password' => $password
                ));
                if($lecturer_row = $check_lecturer->fetch(PDO::FETCH_OBJ)){
                    $_SESSION['user_id'] = $lecturer_row->lecturer_id;
                    $_SESSION['usertype'] = 2; //Lecturer -> 2
                    $_SESSION['msg'] = "Hey ".$lecturer_row->last_name.", you are logged successfully, You are a lecturer";
                    header("Location: ../admin/");
                }
                else{
                    $_SESSION['err'] = "Incorrect password";
                }
            break;
            case 3: //User is a hod
                $check_hod = $conn->prepare("SELECT * FROM hod WHERE (email = :username AND password = :password) OR (phone = :username AND password = :password)");
                $check_hod->execute(array(
                    ':username' => $username,
                    ':password' => $password
                ));
                if($hod_row = $check_hod->fetch(PDO::FETCH_OBJ)){
                    $_SESSION['user_id'] = $hod_row->hod_id;
                    $_SESSION['usertype'] = 3; //HOD -> 3
                    $_SESSION['msg'] = "Hey ".$hod_row->last_name.", you are logged successfully, You are a HOD";
                    header("Location: ../admin/");
                }
                else{
                    $_SESSION['err'] = "Incorrect password";
                }
            break; 
            //User not found
            default: $_SESSION['err'] = "User ".$username." not found!";
        }
    }
}
else{
    $_SESSION['error'] = "Action denied";
}
if(isset($_SESSION['err'])){
    header("Location: ../");
}
?>