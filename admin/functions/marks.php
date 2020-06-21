<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(isset($_POST['add_marks'])){
    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
        //Data
        if($_SESSION['usertype'] == 2){
            $marks = $_POST['marks'];
            $marks_out_of = $_POST['out_of'];
            $type_of_marks = $_POST['type_of_marks'];
            $student = $_POST['student'];
            $lecturer = $_SESSION['lecturer'];
            $course = $_POST['course'];
            $semester = $_POST['term'];
            $academic = $_POST['academic'];
        
            $_SESSION['marks'] = $marks;
            $_SESSION['out_of'] = $marks_out_of;
            $_SESSION['type_of_marks'] = $type_of_marks;
            $_SESSION['student'] = $student;
            $_SESSION['lecturer'] = $lecturer;
            $_SESSION['course'] = $course;
            $_SESSION['term'] = $semester;
            $_SESSION['academic'] = $academic;

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

            elseif(empty($course)){
                $_SESSION['err'] = "Please slect course";
                
            }
            elseif(empty($semester)){
                $_SESSION['err'] = "Please select semester";
            }

            elseif(empty($academic)){
                $_SESSION['err'] = "Please Fill in academic year";
                
            }
            elseif($marks > $marks_out_of){
                $_SESSION['err'] = "Please marks should not be greater than out of marks!";
            }
            else{
                //check marks
                $add_marks = $conn->prepare("INSERT INTO marks (marks, marks_out_of, mark_type_id, student_id, lecturer_id, course_id, term_id, academic_year) VALUES (:Marks, :out_of, :marks_type, :Student, :Lecturer, :Course, :term, :academic)");
                $add_marks->execute(array(
                    ':Marks' => $marks,
                    ':out_of' => $marks_out_of,
                    ':marks_type' => $type_of_marks,
                    ':Student' => $student,
                    ':Lecturer' => $_SESSION['user_id'],
                    ':Course' => $course,
                    ':term' => $semester,
                    ':academic' =>$academic
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