<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(isset($_POST['add_marks'])){
    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
        //Data
        if($_SESSION['usertype'] == 2 OR 3){
            $marks = $_POST['marks'];
            $marks_out_of = $_POST['marks_out_of'];
            $type_of_marks = $_POST['mark_type_id'];
            $student = $_POST['student_id'];
            $lecturer = $_POST['lecturer_id'];
            $course = $_POST['course_id'];

            $_SESSION['marks'] = $_marks;
            $_SESSION['marks_out_of'] = $marks_out_of;
            $_SESSION['mark_type_id'] = $type_of_marks;
            $_SESSION['student_id'] = $student;
            $_SESSION['lecturer_id'] = $lecturer;
            $_SESSION['course_id'] = $course;

            if(empty($marks)){
                $_SESSION['err'] = "Please enter marks";
            }
            elseif(empty($marks_out_of)){
                $_SESSION['err'] = "Please enter the marks out of";
            }
            elseif(empty($type_of_marks)){
                $_SESSION['err'] = "is it CAT or Exam Marks?";
            }
            elseif(empty($student)){
                $_SESSION['err'] = "Please enter the stuednt you want to give marks";
            }
            elseif(empty($lecturer)){
                $_SESSION['err'] = "Please enter the course lecturer";
            }
            elseif(empty($course)){
                $_SESSION['err'] = "Please enter the course you are marking";
            }
            else{
                $add_marks = $conn->prepare("INSERT INTO marks (marks, marks_out_of, mark_type_id, student_id, lecturer_id, course_id) VALUES (:Marks, :out_of, :marks_type, :Student, :Lecturer, :Course)");
                $add_marks->execute(array(
                    ':Marks' => $marks,
                    ':out_of' => $marks_out_of,
                    ':marks_type' => $type_of_marks,
                    ':Student' => $student,
                    ':Lecturer' => $lecturer,
                    ':Course' => $course
                    
                ));
                if($add_marks){
                    $_SESSION['msg'] = "Marks added successfully";
                }
            }
        }
    }
    header("Location: ../marks");
}
?>