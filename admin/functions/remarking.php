<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(isset($_POST['save_marks'])){
    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
        //Data
        if($_SESSION['usertype'] == 3){
            $student = $_POST['student'];
            $cat = $_POST['cat'];
            $exam =$_POST['exam'];
            $reason = $_POST['reason'];

            $_SESSION['student']= $student;
            $_SESSION['cat'] = $cat;
            $_SESSION['exam'] = $exam;
            $_SESSION['reason'] = $reason;
           

            if(empty($student)){
                $_SESSION['err'] = "Please select student";
            }elseif(empty($exam)){
                $_SESSION['err'] = "Please enter marks ";
            }

            else{
                $save_marks = $conn->prepare("INSERT INTO re_mark (marks, marks_id, hod_id, re_mark_type_id) VALUES (:Marks, :marks_id, :hod_id, :re_mark_type_id)");
                $save_marks->execute(array(
                    ':Marks' => $exam,
                    ':marks_id' => $student,
                    ':hod_id' => $_SESSION['user_id'],
                    ':re_mark_type_id' => $reason
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