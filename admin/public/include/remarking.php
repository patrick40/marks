<br/>
<div class="container">
    <br/>
    <div class="card">
        <div class="card-header"><i class="ti-slice"></i> Update Marks</div>
        <div class="card-body">
            <form action="functions/remarking.php" method="post">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">Student</div>
                            <div class="col-md-9">
                            <select name="student" class="form-control"> 
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
                            <div class="col-md-3">CAT</div>
                            <div class="col-md-9">
                                <input type="text" name="cat" value="" class="form-control" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">EXAM</div>
                            <div class="col-md-9">
                                <input type="text" name="exam" value="" class="form-control" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Reason</div>
                            <div class="col-md-9">
                            <select name="reason" class="form-control">                      
                                    <option value="">Select Reason</option>
                                    <?php
                                    $re_marks_type = $conn->prepare("SELECT * FROM re_mark_type WHERE status = 1 ORDER BY re_mark_type_id ASC");
                                    $re_marks_type->execute();
                                    
                                    while($re_marks_type_rows = $re_marks_type->fetch(PDO::FETCH_ASSOC)){
                                        $re_mark_type_id = $re_marks_type_rows['re_mark_type_id'];
                                        $re_mark_type = $re_marks_type_rows['re_mark_type'];
                                        echo "
                                        <option value='$re_mark_type_id'>$re_mark_type</option>
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
                                <button type="submit" name="save_marks" class="btn btn-primary pull-right"><i class="fa fa-edit"></i>Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>