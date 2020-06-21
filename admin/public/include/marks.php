<br/>
<div class="container">
    <br/>
    <div class="card">
        <div class="card-header"><i class="ti-slice"></i> Add Marks</div>
        <div class="card-body">
            <form class="submit-marks" action="functions/marks.php" method="post">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">Semester</div>
                            <div class="col-md-9">
                                <select name="term" class="form-control semester">                      
                                        <?php
                                    if (isset($_SESSION['term'])) {
                                        $semester_selected = $conn->prepare("SELECT * FROM term WHERE term_id = :term_id AND status = 1 ORDER BY term_id ASC");
                                        $semester_selected->execute(array(
                                            ':term_id' => $_SESSION['term']
                                        ));
                                        
                                        if($semester_selected_rows = $semester_selected->fetch(PDO::FETCH_ASSOC)){
                                            $semester_selected_id = $semester_selected_rows['term_id'];
                                            $semester_selected_name = $semester_selected_rows['term_name'];
                                            echo "
                                            <option value='$semester_selected_id'>$semester_selected_name</option>
                                            "; 
                                        }
                                    }
                                    else{
                                        echo "<option value=''>Select Semester</option>";
                                    }
                                    $semester = $conn->prepare("SELECT * FROM term WHERE status = 1 ORDER BY term_id ASC");
                                    $semester->execute();
                                    
                                    while($semester_rows = $semester->fetch(PDO::FETCH_ASSOC)){
                                        $semester_id = $semester_rows['term_id'];
                                        $semester_name = $semester_rows['term_name'];
                                        echo "
                                        <option value='$semester_id'>$semester_name</option>
                                        ";
                                        
                                    }
                                    ?>
                                </select>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Academic Year</div>
                            <div class="col-md-9">
                                <input type="text" name="academic" class="form-control academic_year" value="<?php if(isset($_SESSION['academic'])) { echo $_SESSION['academic']; } ?>" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Course</div>
                            <div class="col-md-9">
                            <select name="course" class="form-control custom-select">                      
                                
                                <?php
                                if(isset($_SESSION['course'])){
                                    $courses_selected = $conn->prepare("SELECT * FROM course WHERE course_id = :course_id AND status = 1 ORDER BY course_name ASC");
                                    $courses_selected->execute(array(
                                        ':course_id' => $_SESSION['course']
                                    ));
                                    if($courses_selected_rows = $courses_selected->fetch(PDO::FETCH_ASSOC)){
                                        $course_selected_id = $courses_selected_rows['course_id'];
                                        $course_selected_code = $courses_selected_rows['course_code'];
                                        $course_selected_name = $courses_selected_rows['course_name'];
                                        echo "
                                        <option value='$course_selected_id'>$course_selected_code $course_selected_name</option>
                                        ";
                                        
                                    }
                                }
                                else{
                                    echo "<option value=''>Select Course</option>";
                                }
                                $courses = $conn->prepare("SELECT * FROM course WHERE status = 1 ORDER BY course_name ASC");
                                $courses->execute();
                                $i = 1;
                                while($courses_rows = $courses->fetch(PDO::FETCH_ASSOC)){
                                    $course_id = $courses_rows['course_id'];
                                    $course_code = $courses_rows['course_code'];
                                    $course_name = $courses_rows['course_name'];
                                    echo "
                                    <option value='$course_id'>$course_code $course_name</option>
                                    ";
                                    
                                }
                                ?>
                            </select>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Type Of Marks</div>
                            <div class="col-md-9">
                                <select name="type_of_marks" class="form-control type_of_marks">                      
                                    
                                        <?php
                                        if(isset($_SESSION['type_of_marks'])){
                                            $marks_selected_type = $conn->prepare("SELECT * FROM mark_type WHERE mark_type_id = :mark_type_id AND status = 1 ORDER BY mark_type_id ASC");
                                            $marks_selected_type->execute(array(
                                                ':mark_type_id' => $_SESSION['type_of_marks']
                                            ));
                                            
                                            if($marks_selected_type_rows = $marks_selected_type->fetch(PDO::FETCH_ASSOC)){
                                                $mark_selected_type_id = $marks_selected_type_rows['mark_type_id'];
                                                $mark_selected_type = $marks_selected_type_rows['mark_type'];
                                                echo "
                                                <option value='$mark_selected_type_id'>$mark_selected_type</option>
                                                ";
                                                
                                            }
                                        }
                                        else{
                                            echo "<option value=''>Select type of marks</option>";
                                        }
                                    $marks_type = $conn->prepare("SELECT * FROM mark_type WHERE status = 1 ORDER BY mark_type_id ASC");
                                    $marks_type->execute();
                                    
                                    while($marks_type_rows = $marks_type->fetch(PDO::FETCH_ASSOC)){
                                        $mark_type_id = $marks_type_rows['mark_type_id'];
                                        $mark_type = $marks_type_rows['mark_type'];
                                        echo "
                                        <option value='$mark_type_id'>$mark_type</option>
                                        ";
                                        
                                    }
                                    ?>
                                </select>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Out Of</div>
                            <div class="col-md-9">
                                <input type="text" name="out_of" value="<?php if(isset($_SESSION['out_of'])) { echo $_SESSION['out_of']; } ?>" class="form-control out_of" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Student</div>
                            <div class="col-md-9">
                            <select name="student" class="form-control custom-select student_selected"> 
                                    <option value="">select student</option>
                                        <?php
                                            $students = $conn->prepare("SELECT * FROM student WHERE status = '1' ORDER BY first_name ASC");
                                            $students->execute();
                                            
                                            while($students_rows = $students->fetch(PDO::FETCH_ASSOC)){
                                                $student_id=$students_rows['student_id'];
                                                $student_first_name = $students_rows['first_name'];
                                                $student_last_name= $students_rows['last_name'];
                                                echo "
                                                     <option value='$student_id'>$student_first_name $student_last_name</option>
                                                ";
                                                }
                                                ?>                    
                                </select>
                            </div>
                        </div><br/>
                        

                        <div class="row">
                            <div class="col-md-3">Marks</div>
                            <div class="col-md-9">
                                <input type="text" name="marks" class="form-control check-marks" />
                            </div>
                        </div><div style="height: 45px" class="marks_status"></div><br/>
                        
                        <?php
                        errors();
                        message();
                        ?>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" name="add_marks" class="btn btn-primary pull-right"><i class="ti-save"></i> Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
let get_year = document.querySelector(".semester");
get_year.addEventListener("change", function(){
    let d = new Date();
    let current_year = d.getFullYear();
    academic_year = document.querySelector(".academic_year");
    ( get_year.value == 1 ) ? ( academic_year.value = current_year + " - " + ( current_year + 1 ) ) : ( academic_year.value = ( current_year - 1 ) + " - " + current_year );
});
</script>