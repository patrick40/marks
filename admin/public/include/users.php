<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if(!isset($_SESSION['user_check_type'])) { echo "active"; } ?>" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lecturer-tab" data-toggle="tab" href="#lecturer" role="tab" aria-controls="lecturer" aria-selected="false">Lecturer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="hod-tab" data-toggle="tab" href="#hod" role="tab" aria-controls="hod" aria-selected="false">HOD</a>
                </li>
            </ul>
            <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade <?php if(!isset($_SESSION['user_check_type'])) { echo "show active"; } ?>" id="student" role="tabpanel" aria-labelledby="student-tab">
                    <p>
                        <div class="col-md-12 mt-1">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Students</h4>
                                    <div id="accordion2" class="according accordion-s2">
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#accordion21">
                                                    Register student</a>
                                            </div>
                                            <div id="accordion21" class="collapse <?php if(!isset($_SESSION['hide_student_form'])){ echo "show"; } ?>" data-parent="#accordion2">
                                            <form action="functions/users.php" method="post">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                        <?php
                                                            if(!isset($_SESSION['user_check_type'])){
                                                                echo "<br/>";
                                                                errors();
                                                            }
                                                        ?>
                                                            <div class="row">
                                                                <div class="col-md-3">First name</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="first_name" value="<?php if(isset($_SESSION['first_name'])){ echo $_SESSION['first_name']; $_SESSION['first_name'] = null; } ?>" class="form-control">
                                                                </div>
                                                            </div><br/>
                                                            <div class="row">
                                                                <div class="col-md-3">Last name</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="last_name" value="<?php if(isset($_SESSION['last_name'])){ echo $_SESSION['last_name']; $_SESSION['last_name'] = null; } ?>" class="form-control">
                                                                </div>
                                                            </div><br/>
                                                            <div class="row">
                                                                <div class="col-md-3">Reg number</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="reg_number" value="<?php if(isset($_SESSION['reg_number'])){ echo $_SESSION['reg_number']; $_SESSION['reg_number'] = null; } ?>" class="form-control">
                                                                </div>
                                                            </div><br/>
                                                            <div class="row">
                                                                <div class="col-md-4">Gender</div>
                                                                <div class="col-md-4">
                                                                    <div class="row">
                                                                        <div class="col-md-6 custom-control custom-radio">
                                                                            <input type="radio" value="m" id="customRadio1" name="gender" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                                                        </div>
                                                                        <div class="col-md-6 custom-control custom-radio">
                                                                            <input type="radio" value="f" id="customRadio2" name="gender"  class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><br/>
                                                            <div class="row">
                                                                <div class="col-md-3">Date Of Birth</div>
                                                                <div class="col-md-9">
                                                                    <input type="date" name="date_of_birth" class="form-control">
                                                                </div>
                                                            </div><br/>
                                                            <div class="row">
                                                                <div class="col-md-3">Level</div>
                                                                <div class="col-md-9">
                                                                    <select name="student_level" class="form-control custom-select">                      
                                                                        <option value="">Select level</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                    </select>
                                                                </div>
                                                            </div><br/>
                                                            <div class="row">
                                                                <div class="col-md-3">Email</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; $_SESSION['email'] = null; } ?>" class="form-control">
                                                                </div>
                                                            </div><br/>
                                                            <div class="row">
                                                                <div class="col-md-3">Phone</div>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="phone" value="<?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone']; $_SESSION['phone'] = null; } ?>" class="form-control">
                                                                </div>
                                                            </div><br/>
                                                            <div class="row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-9">
                                                                    <button type="submit" name="add_student" class="btn btn-primary pull-right"><i class="ti-save"></i> Register</button>
                                                                </div>
                                                            </div><br/>

                                                            
                                                        </div>
                                                        <div class="col-md-3"></div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#accordion22">
                                                    Students List</a>
                                            </div>
                                            <div id="accordion22" class="collapse <?php if(!isset($_SESSION['user_check_type'])){ if(isset($_SESSION['msg'])) { echo "show"; } } ?>" data-parent="#accordion2">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <!-- data table start -->
                                                        <div class="col-12 mt-3">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="header-title">Student List</h4>
                                                                    <div class="data-tables table-responsive">
                                                                    <?php
                                                                    if(!isset($_SESSION['user_check_type'])){
                                                                        message();
                                                                    }
                                                                    ?>
                                                                        <table id="dataTable0" class="DataTable text-center">
                                                                            <thead class="bg-light text-capitalize">
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th>First Name</th>
                                                                                    <th>Last Name</th>
                                                                                    <th>Reg Number</th>
                                                                                    <th>Gender</th>
                                                                                    <th>Level</th>
                                                                                    <th>Email</th>
                                                                                    <th>Phone</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                $students = $conn->prepare("SELECT * FROM student WHERE status = '1' ORDER BY student_id DESC");
                                                                                $students->execute();
                                                                                $i = 1;
                                                                                while($students_rows = $students->fetch(PDO::FETCH_ASSOC)){
                                                                                    $student_id=$students_rows['student_id'];
                                                                                    $student_first_name = $students_rows['first_name'];
                                                                                    $student_last_name= $students_rows['last_name'];
                                                                                    $student_reg_number = $students_rows['reg_number'];
                                                                                    if($students_rows['gender'] == "m"){
                                                                                        $student_gender = "Male";
                                                                                    }
                                                                                    else{
                                                                                        $student_gender= "Female";
                                                                                    }
                                                                                    $student_level = $students_rows['student_level'];
                                                                                    $student_email = $students_rows['email'];
                                                                                    $student_phone = $students_rows['phone'];
                                                                                    echo "
                                                                                    <tr>
                                                                                        <td>$i</td>
                                                                                        <td>$student_first_name</td>
                                                                                        <td>$student_last_name</td>
                                                                                        <td>$student_reg_number</td>
                                                                                        <td>$student_gender</td>
                                                                                        <td>$student_level</td>
                                                                                        <td>$student_email</td>
                                                                                        <td>$student_phone</td>
                                                                                        
                                                                                        <td>
                                                                                            <button class='btn btn-primary btn-xs'><i class='fa fa-edit'></i></button>
                                                                                            <button user_id='$student_id' utype='1' class='btn btn-danger btn-xs user_delete_id' data-toggle='modal' data-target='#delete_user_modal'><i class='fa fa-trash'></i></button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    ";
                                                                                    $i += 1;
                                                                                }
                                                                                ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>
                </div>
                <div class="tab-pane fade <?php if(isset($_SESSION['user_check_type'])) { if($_SESSION['user_check_type'] == 2) { echo "show active"; } } ?>" id="lecturer" role="tabpanel" aria-labelledby="lecturer-tab">
                        <p>
                            <div class="col-md-12 mt-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Lecturer</h4>
                                        <div id="accordion4" class="according accordion-s2">
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="card-link" data-toggle="collapse" href="#accordion24">
                                                        Register lecturer</a>
                                                </div>
                                                <div id="accordion24" class="collapse <?php if(!isset($_SESSION['hide_lecturer_form'])){ echo "show"; } ?>" data-parent="#accordion4">
                                                <form action="functions/users.php" method="post">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-6">
                                                            <?php
                                                                if(isset($_SESSION['user_check_type'])){
                                                                    if($_SESSION['user_check_type'] == 2){
                                                                        echo "<br/>";
                                                                        errors();
                                                                    }
                                                                }
                                                            ?>
                                                                <div class="row">
                                                                    <div class="col-md-3">First name</div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="first_name" value="<?php if(isset($_SESSION['lecturer_first_name'])){ echo $_SESSION['lecturer_first_name']; $_SESSION['lecturer_first_name'] = null; } ?>" class="form-control">
                                                                    </div>
                                                                </div><br/>
                                                                <div class="row">
                                                                    <div class="col-md-3">Last name</div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="last_name" value="<?php if(isset($_SESSION['lecturer_last_name'])){ echo $_SESSION['lecturer_last_name']; $_SESSION['lecturer_last_name'] = null; } ?>" class="form-control">
                                                                    </div>
                                                                </div><br/>
                                                                <div class="row">
                                                                    <div class="col-md-4">Gender</div>
                                                                    <div class="col-md-4">
                                                                        <div class="row">
                                                                            <div class="col-md-6 custom-control custom-radio">
                                                                                <input type="radio" value="m" id="customRadio3" name="gender" class="custom-control-input">
                                                                                <label class="custom-control-label" for="customRadio3">Male</label>
                                                                            </div>
                                                                            <div class="col-md-6 custom-control custom-radio">
                                                                                <input type="radio" value="f" id="customRadio4" name="gender"  class="custom-control-input">
                                                                                <label class="custom-control-label" for="customRadio4">Female</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><br/>
                                                                <div class="row">
                                                                    <div class="col-md-3">Email</div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="email" value="<?php if(isset($_SESSION['lecturer_email'])){ echo $_SESSION['lecturer_email']; $_SESSION['lecturer_email'] = null; } ?>" class="form-control">
                                                                    </div>
                                                                </div><br/>
                                                                <div class="row">
                                                                    <div class="col-md-3">Phone</div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="phone" value="<?php if(isset($_SESSION['lecturer_phone'])){ echo $_SESSION['lecturer_phone']; $_SESSION['lecturer_phone'] = null; } ?>" class="form-control">
                                                                    </div>
                                                                </div><br/>
                                                                <div class="row">
                                                                    <div class="col-md-3"></div>
                                                                    <div class="col-md-9">
                                                                        <button type="submit" name="add_lecturer" class="btn btn-primary pull-right"><i class="ti-save"></i> Register</button>
                                                                    </div>
                                                                </div><br/>

                                                                
                                                            </div>
                                                            <div class="col-md-3"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#accordion25">
                                                        Lecturers List</a>
                                                </div>
                                                <div id="accordion25" class="collapse <?php if(isset($_SESSION['user_check_type'])){ if($_SESSION['user_check_type'] == 2){ if(isset($_SESSION['msg'])) { echo "show"; } } } ?>" data-parent="#accordion4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- data table start -->
                                                            <div class="col-12 mt-3">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="header-title">Lecturers List</h4>
                                                                        <div class="data-tables">
                                                                        <?php
                                                                        if(isset($_SESSION['user_check_type'])){
                                                                            if($_SESSION['user_check_type'] == 2){
                                                                                message();
                                                                            }
                                                                        }
                                                                        ?>
                                                                            <table id="dataTable1" class="DataTable text-center">
                                                                                <thead class="bg-light text-capitalize">
                                                                                    <tr>
                                                                                        <th>No</th>
                                                                                        <th>First Name</th>
                                                                                        <th>Last Name</th>
                                                                                        <th>Gender</th>
                                                                                        <th>Email</th>
                                                                                        <th>Phone</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php
                                                                                    $lecturers = $conn->prepare("SELECT * FROM lecturer WHERE status = '1' ORDER BY lecturer_id DESC");
                                                                                    $lecturers->execute();
                                                                                    $i = 1;
                                                                                    while($lecturer_rows = $lecturers->fetch(PDO::FETCH_ASSOC)){
                                                                                        $lecturer_id=$lecturer_rows['lecturer_id'];
                                                                                        $lecturer_first_name = $lecturer_rows['first_name'];
                                                                                        $lecturer_last_name= $lecturer_rows['last_name'];
                                                                                        if($lecturer_rows['gender'] == "m"){
                                                                                            $lecturer_gender = "Male";
                                                                                        }
                                                                                        else{
                                                                                            $lecturer_gender= "Female";
                                                                                        }
                                                                                        $lecturer_email = $lecturer_rows['email'];
                                                                                        $lecturer_phone = $lecturer_rows['phone'];
                                                                                        echo "
                                                                                        <tr>
                                                                                            <td>$i</td>
                                                                                            <td>$lecturer_first_name</td>
                                                                                            <td>$lecturer_last_name</td>
                                                                                            <td>$lecturer_gender</td>
                                                                                            <td>$lecturer_email</td>
                                                                                            <td>$lecturer_phone</td>
                                                                                            
                                                                                            <td>
                                                                                                <button class='btn btn-primary btn-xs'><i class='fa fa-edit'></i></button>
                                                                                                <button user_id='$lecturer_id' utype='2' class='btn btn-danger btn-xs user_delete_id' data-toggle='modal' data-target='#delete_user_modal'><i class='fa fa-trash'></i></button>
                                                                                            </td>
                                                                                        </tr>
                                                                                        ";
                                                                                        $i += 1;
                                                                                    }
                                                                                    ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                         
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                <div class="tab-pane fade <?php if(isset($_SESSION['user_check_type'])) { if($_SESSION['user_check_type'] == 3) { echo "show active"; } } ?>" id="hod" role="tabpanel" aria-labelledby="hod-tab">
                <p>
                            <div class="col-md-12 mt-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">HOD</h4>
                                        <div id="accordion6" class="according accordion-s2">
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="card-link" data-toggle="collapse" href="#accordion26">
                                                        Register HOD</a>
                                                </div>
                                                <div id="accordion26" class="collapse <?php if(!isset($_SESSION['hide_hod_form'])){ echo "show"; } ?>" data-parent="#accordion6">
                                                <form action="functions/users.php" method="post">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-6">
                                                            <?php
                                                                if(isset($_SESSION['user_check_type'])){
                                                                    if($_SESSION['user_check_type'] == 3){
                                                                        echo "<br/>";
                                                                        errors();
                                                                    }
                                                                }
                                                            ?>
                                                                <div class="row">
                                                                    <div class="col-md-3">First name</div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="first_name" value="<?php if(isset($_SESSION['hod_first_name'])){ echo $_SESSION['hod_first_name']; $_SESSION['hod_first_name'] = null; } ?>" class="form-control">
                                                                    </div>
                                                                </div><br/>
                                                                <div class="row">
                                                                    <div class="col-md-3">Last name</div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="last_name" value="<?php if(isset($_SESSION['hod_last_name'])){ echo $_SESSION['hod_last_name']; $_SESSION['hod_last_name'] = null; } ?>" class="form-control">
                                                                    </div>
                                                                </div><br/>
                                                                <div class="row">
                                                                    <div class="col-md-3">Email</div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="email" value="<?php if(isset($_SESSION['hod_email'])){ echo $_SESSION['hod_email']; $_SESSION['hod_email'] = null; } ?>" class="form-control">
                                                                    </div>
                                                                </div><br/>
                                                                <div class="row">
                                                                    <div class="col-md-3">Phone</div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="phone" value="<?php if(isset($_SESSION['hod_phone'])){ echo $_SESSION['hod_phone']; $_SESSION['hod_phone'] = null; } ?>" class="form-control">
                                                                    </div>
                                                                </div><br/>
                                                                <div class="row">
                                                                    <div class="col-md-3"></div>
                                                                    <div class="col-md-9">
                                                                        <button type="submit" name="add_hod" class="btn btn-primary pull-right"><i class="ti-save"></i> Register</button>
                                                                    </div>
                                                                </div><br/>

                                                                
                                                            </div>
                                                            <div class="col-md-3"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#accordion27">
                                                        HOD List</a>
                                                </div>
                                                <div id="accordion27" class="collapse <?php if(isset($_SESSION['user_check_type'])){ if($_SESSION['user_check_type'] == 3){ if(isset($_SESSION['msg'])) { echo "show"; } } } ?>" data-parent="#accordion6">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <!-- data table start -->
                                                            <div class="col-12 mt-3">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="header-title">HOD List</h4>
                                                                        <div class="data-tables">
                                                                        <?php
                                                                        if(isset($_SESSION['user_check_type'])){
                                                                            if($_SESSION['user_check_type'] == 3){
                                                                                message();
                                                                            }
                                                                        }
                                                                        ?>
                                                                            <table id="dataTable2" class="DataTable text-center">
                                                                                <thead class="bg-light text-capitalize">
                                                                                    <tr>
                                                                                        <th>No</th>
                                                                                        <th>First Name</th>
                                                                                        <th>Last Name</th>
                                                                                        <th>Email</th>
                                                                                        <th>Phone</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php
                                                                                    $hod = $conn->prepare("SELECT * FROM hod WHERE status = '1' ORDER BY hod_id DESC");
                                                                                    $hod->execute();
                                                                                    $i = 1;
                                                                                    while($hod_rows = $hod->fetch(PDO::FETCH_ASSOC)){
                                                                                        $hod_id = $hod_rows['hod_id'];
                                                                                        $hod_first_name = $hod_rows['first_name'];
                                                                                        $hod_last_name= $hod_rows['last_name'];
                                                                                        $hod_email = $hod_rows['email'];
                                                                                        $hod_phone = $hod_rows['phone'];
                                                                                        echo "
                                                                                        <tr>
                                                                                            <td>$i</td>
                                                                                            <td>$hod_first_name</td>
                                                                                            <td>$hod_last_name</td>
                                                                                            <td>$hod_email</td>
                                                                                            <td>$hod_phone</td>
                                                                                            
                                                                                            <td>
                                                                                                <button class='btn btn-primary btn-xs'><i class='fa fa-edit'></i></button>
                                                                                                <button user_id='$hod_id' utype='3' class='btn btn-danger btn-xs user_delete_id' data-toggle='modal' data-target='#delete_user_modal'><i class='fa fa-trash'></i></button>
                                                                                            </td>
                                                                                        </tr>
                                                                                        ";
                                                                                        $i += 1;
                                                                                    }
                                                                                    ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                         
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete_user_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="functions/users.php">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete User</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="delete_user_content"><!--user to be deleted here--></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
                        <button type="submit" name="delete_user" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>