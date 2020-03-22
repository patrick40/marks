<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(isset($_POST['add_course'])){
    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
        //Data
        if($_SESSION['usertype'] == 3){
            $course_code = $_POST['course_code'];
            $course_name = $_POST['course_name'];

            if(empty($course_code)){
                $_SESSION['err'] = "Please enter course code";
            }
            elseif(empty($course_name)){
                $_SESSION['err'] = "Please enter course name";
            }
            else{
                $add_course = $conn->prepare("INSERT INTO course (course_code, course_name) VALUES (:course_code, :course_name)");
                $add_course->execute(array(
                    ':course_code' => $course_code,
                    ':course_name' => $course_name
                ));
                if($add_course){
                    $_SESSION['msg'] = "Course added successfully";
                }
            }
        }
    }
    header("Location: ../courses");
}
?>