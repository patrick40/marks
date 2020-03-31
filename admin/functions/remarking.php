<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(isset($_POST['save_marks'])){
    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
        //Data
        if($_SESSION['usertype'] == 3){
            $re_marks = $_POST['student'];
            $re_marks_id = $_POST['exam'];
            $hod_id = $_POST['hod_id'];
            $re_marks_type_id = $_POST['reason'];
           

            if(empty($re_marks)){
                $_SESSION['err'] = "Please select student";
            }
            elseif(empty($re_marks_id)){
                $_SESSION['err'] = "Please enter marks ";
            }
           
            else{
                $save_marks = $conn->prepare("INSERT INTO re_mark (marks, marks_id, hod_id, re_mark_type_id) VALUES (:Marks, :marks_id, :hod_id, :re_mark_type_id)");
                $save_marks->execute(array(
                    ':Marks' => $re_marks,
                    ':marks_id' => $re_marks_id,
                    ':hod_id' => $_SESSION['user_id'],
                    ':re_mark_type_id' => $re_marks_type_id
                ));
                if($save_marks){
                    $_SESSION['msg'] = "Marks saved successfully";
                }
            }
        }
    }
    header("Location: ../remarking");
}
?>