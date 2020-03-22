<?php
//Base URL
function base(){
    echo str_replace("index.php","",$_SERVER['PHP_SELF']);
}

function user($user_id, $userType) {
    global $conn;
    $array = [];
    $myObj = new stdClass();

    switch($userType){
        case 1: //student
            $studentQuery = $conn->prepare("SELECT * FROM student WHERE student_id = :studentUser");
            $studentQuery->execute(array(
                ':studentUser' => $user_id
            ));
            if($studentRow = $studentQuery->fetch(PDO::FETCH_ASSOC)){
                $myObj->student_id = $studentRow['student_id'];
                $myObj->first_name = $studentRow['first_name'];
                $myObj->last_name = $studentRow['last_name'];
                $myObj->reg_number = $studentRow['reg_number'];
                $myObj->gender = $studentRow['gender'];
                $myObj->student_level = $studentRow['student_level'];
                $myObj->email = $studentRow['email'];
                $myObj->phone = $studentRow['phone'];
                $myObj->status = $studentRow['status'];
                
                $jsonData = json_encode($myObj);
                $array[0] = json_decode($jsonData);
            }
        break;
        case 2: //Lecturer
            $lecturerQuery = $conn->prepare("SELECT * FROM lecturer WHERE lecturer_id = :lecturerUser");
            $lecturerQuery->execute(array(
                ':lecturerUser' => $user_id
            ));
            if($lecturerRow = $lecturerQuery->fetch(PDO::FETCH_ASSOC)){
                $myObj->lecturer_id = $lecturerRow['lecturer_id'];
                $myObj->first_name = $lecturerRow['first_name'];
                $myObj->last_name = $lecturerRow['last_name'];
                $myObj->gender = $lecturerRow['gender'];
                $myObj->email = $lecturerRow['email'];
                $myObj->phone = $lecturerRow['phone'];
                $myObj->status = $lecturerRow['status'];
                
                $jsonData = json_encode($myObj);
                $array[0] = json_decode($jsonData);
            }
        break;
        case 3: //HOD
            $hodQuery = $conn->prepare("SELECT * FROM hod WHERE hod_id = :hodUser");
            $hodQuery->execute(array(
                ':hodUser' => $user_id
            ));
            if($hodRow = $hodQuery->fetch(PDO::FETCH_ASSOC)){
                $myObj->hod_id = $hodRow['hod_id'];
                $myObj->first_name = $hodRow['first_name'];
                $myObj->last_name = $hodRow['last_name'];
                $myObj->email = $hodRow['email'];
                $myObj->phone = $hodRow['phone'];
                $myObj->status = $hodRow['status'];
                
                $jsonData = json_encode($myObj);
                $array[0] = json_decode($jsonData);
            }
        break;

    }
    return $array;
}
?>