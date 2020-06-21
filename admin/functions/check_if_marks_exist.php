<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(empty($_POST['marks'])) {
    echo "<br><div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Please enter marks</div>";
}
else{
    $marks = $_POST['marks'];
    $marks_out_of = $_POST['out_of'];
    $type_of_marks = $_POST['type_of_marks'];
    $student = $_POST['student'];
    $lecturer = $_SESSION['lecturer'];
    $course = $_POST['course'];
    $semester = $_POST['term'];
    $academic = $_POST['academic'];
    //check marks
    $check_marks = $conn->prepare("SELECT * FROM marks WHERE marks = :Marks AND marks_out_of = :out_of AND mark_type_id = :marks_type AND student_id = :Student AND course_id = :Course AND term_id = :term AND academic_year = :academic");
    $check_marks->execute(array(
        ':Marks' => $marks,
        ':out_of' => $marks_out_of,
        ':marks_type' => $type_of_marks,
        ':Student' => $student,
        ':Course' => $course,
        ':term' => $semester,
        ':academic' =>$academic
    ));
    if($check_marks->rowCount() > 0){
        echo "<br><div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Please marks has been already recorded. Please make sure that it is valid!</div>";
    }
    elseif($marks > $marks_out_of){
        echo "<br><div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Please marks can not be greater than marks out of!</div>";
    }
    else{
        echo "<br><div class='alert alert-success'><i class='fa fa-check-circle'></i> Marks is valid!</div>";
    }
}
?>