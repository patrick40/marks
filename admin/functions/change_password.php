<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(isset($_POST['change_password'])){
    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        //Validation
        if(empty($old_password)){
            $_SESSION['err'] = "Please enter old password";
        }
        elseif(empty($new_password)){
            $_SESSION['err'] = "Please enter new password";
        }
        elseif(empty($confirm_password)){
            $_SESSION['err'] = "Please confirm password";
        }
        elseif($new_password != $confirm_password){
            $_SESSION['err'] = "Password mismatch";
        }
        else{
            switch ($_SESSION['usertype']) {
                case 1:
                    $table_name = "student";
                    $col_name = "student_id";
                break;

                case 2:
                    $table_name = "lecturer";
                    $col_name = "lecturer_id";
                break;
                
                case 3:
                    $table_name = "hod";
                    $col_name = "hod_id";
                break;

                default:
                    $table_name = null;
                    $col_name = null;
                break;
            }
            if(isset($table_name) && isset($col_name)){
                //Check old password if exists
                $check_user = $conn->prepare("SELECT * FROM ".$table_name." WHERE ".$col_name." = :user_id AND password = :password");
                $check_user->execute(array(
                    ':user_id' => $_SESSION['user_id'],
                    ':password' => $old_password
                ));
                if($check_user->rowCount() == 1){
                    $user_change_password = $conn->prepare("UPDATE ".$table_name." SET password = :password WHERE ".$col_name." = :user_id");
                    $user_change_password->execute(array(
                        ':password' => $new_password,
                        ':user_id' => $_SESSION['user_id']
                    ));
                    if($user_change_password){
                        $_SESSION['msg'] = "Password changed successfully";
                    }
                }
                else{
                    $_SESSION['err'] = "Incorrect Old Password";
                }
            }
        }
    }
    header("Location: ../change_password");
}
?>