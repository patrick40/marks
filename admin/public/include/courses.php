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
                                $courses = $conn->prepare("SELECT * FROM course ORDER BY course_name ASC");
                                $courses->execute();
                                $i = 1;
                                while($courses_rows = $courses->fetch(PDO::FETCH_ASSOC)){
                                    $course_code = $courses_rows['course_code'];
                                    $course_name = $courses_rows['course_name'];
                                    echo "
                                    <tr>
                                        <td>$i</td>
                                        <td>$course_code</td>
                                        <td>$course_name</td>
                                        <td>
                                            <button class='btn btn-primary btn-xs'><i class='fa fa-edit'></i></button>
                                            <button class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></button>
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