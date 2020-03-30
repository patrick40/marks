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
            $marks_out_of = $_POST['out_of'];
            $type_of_marks = $_POST['type_of_marks'];
            $student = $_POST['student'];
            $lecturer = $_POST['lecturer'];
            $course = $_POST['course'];

            $_SESSION['marks'] = $marks;
            $_SESSION['out_of'] = $marks_out_of;
            $_SESSION['type_of_marks'] = $type_of_marks;
            $_SESSION['student'] = $student;
            $_SESSION['lecturer'] = $lecturer;
            $_SESSION['course'] = $course;

            if(empty($marks)){
                $_SESSION['err'] = "Please enter marks";
            }
            elseif(empty($marks_out_of)){
                $_SESSION['err'] = "Please enter the marks out of";
            }
            elseif(empty($type_of_marks)){
                $_SESSION['err'] = "select type of marks";
            }
            elseif(empty($student)){
                $_SESSION['err'] = "Please select a student";
            }
            elseif(empty($lecturer)){
                $_SESSION['err'] = "Please select lecturer";
            }
            elseif(empty($course)){
                $_SESSION['err'] = "Please slect course";
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