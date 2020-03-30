<br/>
<div class="container">
    <br/>
    <div class="card">
        <div class="card-header"><i class="ti-slice"></i> Add Marks</div>
        <div class="card-body">
            <form action="functions/marks.php" method="post">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">Marks</div>
                            <div class="col-md-9">
                                <input type="text" name="marks" class="form-control" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Out Of</div>
                            <div class="col-md-9">
                                <input type="text" name="out_of" class="form-control" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Type Of Marks</div>
                            <div class="col-md-9">
                                <select name="type_of_marks" class="form-control">                      
                                    <option value="">Select type of marks</option>
                                        <?php
                                    $marks_type = $conn->prepare("SELECT * FROM mark_type WHERE status = 1 ORDER BY mark_type_id ASC");
                                    $marks_type->execute();
                                    
                                    while($marks_type_rows = $marks_type->fetch(PDO::FETCH_ASSOC)){
                                        $mark_type_id = $marks_type_rows['mark_type_id'];
                                        $mark_type = $marks_type_rows['mark_type'];
                                        echo "
                                        <option>$mark_type</option>
                                        ";
                                        
                                    }
                                    ?>
                                </select>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Student</div>
                            <div class="col-md-9">
                            <select name="student" class="form-control custom-select"> 
                                    <option>select student</option>
                                        <?php
                                            $students = $conn->prepare("SELECT * FROM student WHERE status = '1' ORDER BY first_name ASC");
                                            $students->execute();
                                            
                                            while($students_rows = $students->fetch(PDO::FETCH_ASSOC)){
                                                $student_id=$students_rows['student_id'];
                                                $student_first_name = $students_rows['first_name'];
                                                $student_last_name= $students_rows['last_name'];
                                                echo "
                                                     <option>$student_first_name $student_last_name</option>
                                                ";
                                                }
                                                ?>                    
                                </select>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Lecturer</div>
                            <div class="col-md-9">
                            <select name="lecturer" class="form-control custom-select">                      
                                <option>select lecturer</option>
                                        <?php
                                            $lecturers = $conn->prepare("SELECT * FROM lecturer WHERE status = '1' ORDER BY lecturer_id DESC");
                                            $lecturers->execute();
                                            while($lecturer_rows = $lecturers->fetch(PDO::FETCH_ASSOC)){
                                                $lecturer_id=$lecturer_rows['lecturer_id'];
                                                $lecturer_first_name = $lecturer_rows['first_name'];
                                                $lecturer_last_name= $lecturer_rows['last_name'];
                                                echo "
                                                     <option>$lecturer_first_name $lecturer_last_name</option>
                                                ";
                                            }
                                        ?>           
                            </select>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Course</div>
                            <div class="col-md-9">
                            <select name="course" class="form-control custom-select">                      
                                    <option value="">Select Course</option>
                                    <?php
                                $courses = $conn->prepare("SELECT * FROM course WHERE status = 1 ORDER BY course_name ASC");
                                $courses->execute();
                                $i = 1;
                                while($courses_rows = $courses->fetch(PDO::FETCH_ASSOC)){
                                    $course_id = $courses_rows['course_id'];
                                    $course_code = $courses_rows['course_code'];
                                    $course_name = $courses_rows['course_name'];
                                    echo "
                                    <option>$course_code $course_name</option>
                                    ";
                                    
                                }
                                ?>
                            </select>
                            </div>
                        </div><br/>
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