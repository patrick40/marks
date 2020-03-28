<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(isset($_POST['user_id']));{
    $username = $_POST['username'];
}
switch(userType($username)){
        case 1: // if a User is a student
                    $check_student = $conn->prepare("SELECT * FROM student WHERE (reg_number = :username ");
                    $check_student->execute(array(
                        ':username' => $username
                    ));
                    if($student_row = $check_student->fetch(PDO::FETCH_OBJ)){
                        if($student_row->status == 1) {
                            $_SESSION['usertype'] = 1; //Student -> 1
                        }
            if(isset($_POST['delete_user_id'])){
                $deleted_user = $_POST['delete_user_id'];
                $deleted_user_details = $conn->prepare("SELECT * FROM student WHERE student_id = :user_id");
                $deleted_user_details->execute(array(
                    ':user_id' => $deleted_user
                ));
                if($deleted_user_details_row = $deleted_user_details->fetch(PDO::FETCH_OBJ)){
                    echo "Are you sure you want to delete user <b>".$deleted_user_details_row->last_name." ?</b>";
                    echo "<input type='text' name='selected_deleted_user' value='$deleted_user' class='form-control' style='display: none' />";
                }
            }
            elseif(isset($_POST['delete_user'])){
                if(isset($_POST['selected_deleted_user'])){
                    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
                        if($_SESSION['usertype'] == 3){
                            $delete_user = $conn->prepare("UPDATE student SET status = :status WHERE student_id = :user_id");
                            $delete_user->execute(array(
                                ':status' => 0,
                                ':user_id' => $_POST['selected_deleted_user']
                            ));
                            if($delete_user){
                                $_SESSION['hide_student_form'] = 1;
                                $_SESSION['msg'] = "User deleted successfully";
                            }
                        }
                    }
                    
                }
            }
            break;
            case 2:// if a User is a lecturer
                $check_lecturer = $conn->prepare("SELECT * FROM lecturer WHERE (lecturer_id = :username ");
                $check_lecturer->execute(array(
                    ':username' => $username
                ));
                if($lecturer_row = $check_lecturer->fetch(PDO::FETCH_OBJ)){
                    if($lecturer_row->status == 1) {
                        $_SESSION['usertype'] = 2; //lecturer -> 2
                    } 
        if(isset($_POST['delete_user_id'])){
            $deleted_user = $_POST['delete_user_id'];
            $deleted_user_details = $conn->prepare("SELECT * FROM lecturer WHERE lecturer_id = :user_id");
            $deleted_user_details->execute(array(
                ':user_id' => $deleted_user
            ));
            if($deleted_user_details_row = $deleted_user_details->fetch(PDO::FETCH_OBJ)){
                echo "Are you sure you want to delete user <b>".$deleted_user_details_row->last_name." ?</b>";
                echo "<input type='text' name='selected_deleted_user' value='$deleted_user' class='form-control' style='display: none' />";
            }
        }
        elseif(isset($_POST['delete_user'])){
            if(isset($_POST['selected_deleted_user'])){
                if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
                    if($_SESSION['usertype'] == 3){
                        $delete_user = $conn->prepare("UPDATE lecturer SET status = :status WHERE lecturer_id = :user_id");
                        $delete_user->execute(array(
                            ':status' => 0,
                            ':user_id' => $_POST['selected_deleted_user']
                        ));
                        if($delete_user){
                            $_SESSION['hide_lecturer_form'] = 1;
                            $_SESSION['msg'] = "User deleted successfully";
                        }
                    }
                }
            }
        }
        break;
        case 1: // if a User is hod
            $check_hod = $conn->prepare("SELECT * FROM hod WHERE (last_name = :username ");
            $check_hod->execute(array(
                ':username' => $username
            ));
            if($hod_row = $check_hod->fetch(PDO::FETCH_OBJ)){
                if($hod_row->status == 1) {
                    $_SESSION['usertype'] = 3; //hod -> 3
                }
    if(isset($_POST['delete_user_id'])){
        $deleted_user = $_POST['delete_user_id'];
        $deleted_user_details = $conn->prepare("SELECT * FROM hod WHERE hod_id = :user_id");
        $deleted_user_details->execute(array(
            ':user_id' => $deleted_user
        ));
        if($deleted_user_details_row = $deleted_user_details->fetch(PDO::FETCH_OBJ)){
            echo "Are you sure you want to delete user <b>".$deleted_user_details_row->last_name." ?</b>";
            echo "<input type='text' name='selected_deleted_user' value='$deleted_user' class='form-control' style='display: none' />";
        }
    }
    elseif(isset($_POST['delete_user'])){
        if(isset($_POST['selected_deleted_user'])){
            if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
                if($_SESSION['usertype'] == 3){
                    $delete_user = $conn->prepare("UPDATE hod SET status = :status WHERE hod_id = :user_id");
                    $delete_user->execute(array(
                        ':status' => 0,
                        ':user_id' => $_POST['selected_deleted_user']
                    ));
                    if($delete_user){
                        $_SESSION['hide_hod_form'] = 1;
                        $_SESSION['msg'] = "User deleted successfully";
                    }
                }
            }
        }
    }
}
}
    header("Location: ../users");
break;
    elseif($_SESSION['usertype'] == 3){
        if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
            //Data
            if(isset($_POST['add_student'])){ //button clicked
                //Enable student tab
                $_SESSION['user_check_type'] = null;
                $_SESSION['hide_student_form'] = null;
                $_SESSION['hide_lecturer_form'] = null;
                $_SESSION['hide_hod_form'] = null;

                $student_first_name = $_POST['first_name'];
                $student_last_name= $_POST['last_name'];
                $student_reg_number = $_POST['reg_number'];
                $student_gender= $_POST['gender'];
                $student_level = $_POST['student_level'];
                $student_email = $_POST['email'];
                $student_phone = $_POST['phone'];

                $_SESSION['first_name'] = $student_first_name;
                $_SESSION['last_name'] = $student_last_name;
                $_SESSION['reg_number'] = $student_reg_number;
                $_SESSION['email'] = $student_email;
                $_SESSION['phone'] = $student_phone;
            


                if(empty($student_first_name)){
                    $_SESSION['err'] = "Please enter first name";
                }
                elseif(empty($student_last_name)){
                    $_SESSION['err'] = "Please enter last name";
                }
                elseif(empty($student_reg_number)){
                    $_SESSION['err'] = "Please enter registration number";
                }
                elseif(empty($student_gender)){
                    $_SESSION['err'] = "Please select gender";
                }
                elseif(empty($student_level)){
                    $_SESSION['err'] = "Please select level";
                }
                elseif(empty($student_email)){
                    $_SESSION['err'] = "Please enter the email";
                }
                elseif(empty($student_phone)){
                    $_SESSION['err'] = "Please enter the phone";
                }
                else{
                    //Check if user exists
                    $check_student = $conn->prepare("SELECT * FROM student WHERE email = :stud_mail OR reg_number = :stud_reg_number OR phone = :stud_phone");
                    $check_student->execute(array(
                        ':stud_mail' => $student_email,
                        ':stud_reg_number' => $student_reg_number,
                        ':stud_phone' => $student_phone
                    ));
                    if($check_student->rowCount() == 0) {
                        $add_student = $conn->prepare("INSERT INTO student (first_name,last_name,reg_number,gender,student_level,email,phone) VALUES (:first_name, :last_name, :reg_number, :gender, :student_level, :email, :phone)");
                        $add_student->execute(array(
                            ':first_name' => $student_first_name,
                            ':last_name' => $student_last_name,
                            ':reg_number' => $student_reg_number,
                            ':gender' => $student_gender,
                            ':student_level' => $student_level,
                            ':email' => $student_email,
                            ':phone' => $student_phone
                        ));
                        if($add_student){
                            $_SESSION['hide_student_form'] = 1;
                            $_SESSION['msg'] = "student added successfully";
                        }
                    }
                    else{
                        $_SESSION['err'] = "User already exists";
                    }
                }
            }
            elseif(isset($_POST['add_lecturer'])){

                //Enable lecturer tab
                $_SESSION['user_check_type'] = 2;
                $_SESSION['hide_student_form'] = null;
                $_SESSION['hide_lecturer_form'] = null;
                $_SESSION['hide_hod_form'] = null;

                $lecturer_first_name = $_POST['first_name'];
                $lecturer_last_name= $_POST['last_name'];
                $lecturer_gender= $_POST['gender'];
                $lecturer_email = $_POST['email'];
                $lecturer_phone = $_POST['phone'];

                $_SESSION['lecturer_first_name'] = $lecturer_first_name;
                $_SESSION['lecturer_last_name'] = $lecturer_last_name;
                $_SESSION['lecturer_email'] = $lecturer_email;
                $_SESSION['lecturer_phone'] = $lecturer_phone;

                if(empty($lecturer_first_name)){
                    $_SESSION['err'] = "Please enter First name";
                }
                elseif(empty($lecturer_last_name)){
                    $_SESSION['err'] = "Please enter Last name";
                }
                elseif(empty($lecturer_gender)){
                    $_SESSION['err'] = "Please select gender";
                }
                elseif(empty($lecturer_email)){
                    $_SESSION['err'] = "Please enter Email";
                }
                elseif(empty($lecturer_phone)){
                    $_SESSION['err'] = "Please enter Phone number";
                }
                else{
                    //Check if user exists
                    $check_lecturer = $conn->prepare("SELECT * FROM lecturer WHERE email = :lect_mail OR phone = :lect_phone");
                    $check_lecturer->execute(array(
                        ':lect_mail' => $lecturer_email,
                        ':lect_phone' => $lecturer_phone
                    ));
                    if($check_lecturer->rowCount() == 0){
                        $add_lecturer = $conn->prepare("INSERT INTO lecturer (first_name, last_name, gender, email, phone) VALUES (:first_name, :last_name, :gender, :email, :phone)");
                        $add_lecturer->execute(array(
                            ':first_name' => $lecturer_first_name,
                            ':last_name' => $lecturer_last_name,
                            ':gender' => $lecturer_gender,
                            ':email' => $lecturer_email,
                            ':phone' => $lecturer_phone
                        ));
                        if($add_lecturer){
                            $_SESSION['hide_lecturer_form'] = 1;
                            $_SESSION['msg'] = "User added successfully";
                        }
                    }
                    else{
                        $_SESSION['err'] = "User already exists";
                    }
                }
            }
            elseif(isset($_POST['add_hod'])){
                //Enable hod tab
                $_SESSION['user_check_type'] = 3;
                $_SESSION['hide_student_form'] = null;
                $_SESSION['hide_lecturer_form'] = null;
                $_SESSION['hide_hod_form'] = null;

                $hod_first_name = $_POST['first_name'];
                $hod_last_name= $_POST['last_name'];
                $hod_email = $_POST['email'];
                $hod_phone = $_POST['phone'];

                $_SESSION['hod_first_name'] = $hod_first_name;
                $_SESSION['hod_last_name'] = $hod_last_name;
                $_SESSION['hod_email'] = $hod_email;
                $_SESSION['hod_phone'] = $hod_phone;

                if(empty($hod_first_name)){
                    $_SESSION['err'] = "Please enter First name";
                }
                elseif(empty($hod_last_name)){
                    $_SESSION['err'] = "Please enter Last name";
                }
                elseif(empty($hod_email)){
                    $_SESSION['err'] = "Please enter Email";
                }
                elseif(empty($hod_phone)){
                    $_SESSION['err'] = "Please enter Phone number";
                }
                else{
                    //Check if user exists
                    $check_hod = $conn->prepare("SELECT * FROM hod WHERE email = :lect_mail OR phone = :lect_phone");
                    $check_hod->execute(array(
                        ':lect_mail' => $hod_email,
                        ':lect_phone' => $hod_phone
                    ));
                    if($check_hod->rowCount() == 0){
                        $add_hod = $conn->prepare("INSERT INTO hod (first_name, last_name, email, phone) VALUES (:first_name, :last_name, :email, :phone)");
                        $add_hod->execute(array(
                            ':first_name' => $hod_first_name,
                            ':last_name' => $hod_last_name,
                            ':email' => $hod_email,
                            ':phone' => $hod_phone
                        ));
                        if($add_hod){
                            $_SESSION['hide_hod_form'] = 1;
                            $_SESSION['msg'] = "User added successfully";
                        }
                    }
                    else{
                        $_SESSION['err'] = "User already exists";
                    }
                }
            }
            else{
                $_SESSION['err'] = "No button selected";
            }
        }
        header("Location: ../users");
    }
}
?>