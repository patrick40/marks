<?php
function userType($username) {
    global $conn;
    $usertType = 0; //Default, No user selected

    //Check if a user is a student
    $check_if_student = $conn->prepare("SELECT * FROM student WHERE reg_number = :studentUser OR email = :studentUser");
    $check_if_student->execute(array(
        ':studentUser' => $username
    ));
    $n_student = $check_if_student->rowCount();
    if($n_student == 1 && $usertType == 0){
        $usertType = 1; //Student
    }

    //Check if a  user is a lecturer
    $check_if_lecturer = $conn->prepare("SELECT * FROM lecturer WHERE email = :lecturerUser OR phone = :lecturerUser");
    $check_if_lecturer->execute(array(
        ':lecturerUser' => $username
    ));
    $n_lecturer = $check_if_lecturer->rowCount();
    if($n_lecturer == 1 && $usertType == 0){
        $usertType = 2; //Lecturer
    }

    //Check if a user is HOD
    $check_if_hod = $conn->prepare("SELECT * FROM hod WHERE email = :hodUser OR phone = :hodUser");
    $check_if_hod->execute(array(
        ':hodUser' => $username
    ));
    $n_hod = $check_if_hod->rowCount();
    if($n_hod == 1 && $usertType == 0){
        $usertType = 3; //HOD
    }
    
    //Result
    return $usertType;
}
?>