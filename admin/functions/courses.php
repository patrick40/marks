<?php
require_once ("../../functions/session.php");
require_once ("../../functions/db_connection.php");
require_once ("../../functions/functions.php");
require_once ("../functions/functions.php");

if(isset($_POST['add_course'])){
    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
        //Data
        if($_SESSION['usertype'] == 3 OR 2){
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
//Delete course 
if(isset($_POST['delete_course'])){
    $deleted_course = $_POST['delete_course'];
    $deleted_course_details = $conn->prepare("SELECT * FROM course WHERE course_id = :course_id");
    $deleted_course_details->execute(array(
        ':course_id' => $deleted_course
    ));
    if($deleted_course_details_row = $deleted_course_details->fetch(PDO::FETCH_OBJ)){
        echo "Are you sure you want to delete course <b>".$deleted_course_details_row->course_name."</b> with code <b>".$deleted_course_details_row->course_code." ?</b>";
        echo "<input type='text' name='selected_deleted_course' value='$deleted_course' class='form-control' style='display: none' />";
    }
}

//Delete course codes

if(isset($_POST['course_delete'])){
    if(isset($_POST['selected_deleted_course'])){
        if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
            if($_SESSION['usertype'] == 3){
                $delete_course = $conn->prepare("UPDATE course SET status = :status WHERE course_id = :course_id");
                $delete_course->execute(array(
                    ':status' => 0,
                    ':course_id' => $_POST['selected_deleted_course']
                ));
                if($delete_course){
                    $_SESSION['msg'] = "Course deleted successfully";
                }
            }
        }
    }
    header("Location: ../courses");
}


if(isset($_POST['edit_course'])){
    $course_to_be_edited = $_POST['edit_course'];
    $course_to_be_edited_query = $conn->prepare("SELECT * FROM course WHERE course_id = :course_id");
    $course_to_be_edited_query->execute(array(
        ':course_id' => $course_to_be_edited
    ));
    if($course_to_be_edited_detail = $course_to_be_edited_query->fetch(PDO::FETCH_OBJ)){
        echo "
        <input type='text' name='edited_course_id' value='$course_to_be_edited' class='form-control' style='display: none' /><br>
        <input type='text' name='edited_course_code' value='".$course_to_be_edited_detail->course_code."' class='form-control' placeholder='Course code' /><br>
        <input type='text' name='edited_course_name' value='".$course_to_be_edited_detail->course_name."' class='form-control' placeholder='Course name' /><br>
        ";
    }
}

//EDIT COURSE
if(isset($_POST['update_course'])){
    if(isset($_SESSION['user_id']) && isset($_SESSION['usertype'])){
        if($_SESSION['usertype'] == 3){
            //Data
            $edited_course_id = $_POST['edited_course_id'];
            $edited_course_code = $_POST['edited_course_code'];
            $edited_course_name = $_POST['edited_course_name'];

            if(empty($edited_course_id)){
                $_SESSION['err'] = "Please select course";
            }
            elseif(empty($edited_course_code)){
                $_SESSION['err'] = "Please enter course code";
            }
            elseif(empty($edited_course_name)){
                $_SESSION['err'] = "Please enter course name";
            }
            else{
                //Update
                $update_course = $conn->prepare("UPDATE course SET course_code = :course_code, course_name = :course_name WHERE course_id = :course_id");
                $update_course->execute(array(
                    ':course_id' => $edited_course_id,
                    ':course_code' => $edited_course_code,
                    ':course_name' => $edited_course_name
                ));
                if($update_course){
                    $_SESSION['msg'] = "Course updated successfully";
                }
            }

        }
    }
    header("Location: ../courses");
}
?>