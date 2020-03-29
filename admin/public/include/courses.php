
<br/>
<div class="container">
    <br/>
    <div class="card">
        <div class="card-header"><i class="ti-user"></i> Courses</div>
        <div class="card-body">
            <form action="functions/courses.php" method="post">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <input type="text" name="course_code" value="" class="form-control" placeholder="Course code" />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="course_name" value="" class="form-control" placeholder="Course Name" />
                    </div>
                    <div class="col-md-3">
                        <button type="submit" name="add_course" class="btn btn-primary"><i class="ti-save"></i> Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    echo "<br/>";
    errors();
    message();
    ?>
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Courses List</h4>
                    <div class="data-tables">
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $courses = $conn->prepare("SELECT * FROM course WHERE status = 1 ORDER BY course_name ASC");
                                $courses->execute();
                                $i = 1;
                                while($courses_rows = $courses->fetch(PDO::FETCH_ASSOC)){
                                    $course_id = $courses_rows['course_id'];
                                    $course_code = $courses_rows['course_code'];
                                    $course_name = $courses_rows['course_name'];
                                    echo "
                                    <tr>
                                        <td>$i</td>
                                        <td>$course_code</td>
                                        <td>$course_name</td>
                                        <td>
                                            <button course_id='$course_id' class='btn btn-primary btn-xs course_edit' data-toggle='modal' data-target='#course_modal_edit'><i class='fa fa-edit'></i></button>
                                            <button course_id='$course_id' class='btn btn-danger btn-xs course_id' data-toggle='modal' data-target='#course_modal'><i class='fa fa-trash'></i></button>
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
    <!-- Modal -->
    <div class="modal fade" id="course_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="functions/courses.php">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete course</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="course_content"><!--Course to be deleted here--></div>
                        <!-- <p>Are you sure you want to delete ?</p> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
                        <button type="submit" name="course_delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal edit course -->
    <div class="modal fade" id="course_modal_edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="functions/courses.php">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit course</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div id="edit_course_content"><!--Course form here--></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
                        <button type="submit" name="update_course" class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>