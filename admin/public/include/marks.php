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
                                <input type="text" name="type_of_marks" class="form-control" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Student</div>
                            <div class="col-md-9">
                                <input type="text" name="student" class="form-control" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Lecturer</div>
                            <div class="col-md-9">
                                <input type="text" name="lecturer" class="form-control" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Course</div>
                            <div class="col-md-9">
                                <input type="text" name="course" class="form-control" />
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