<br/>
<div class="container">
    <br/>
    <div class="card">
        <div class="card-header"><i class="ti-user"></i> Change Password</div>
        <div class="card-body">
            <form action="functions/change_password.php" method="post">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">Old password</div>
                            <div class="col-md-9">
                                <input type="password" name="old_password" class="form-control" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">New password</div>
                            <div class="col-md-9">
                                <input type="password" name="new_password" class="form-control" />
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Confirm password</div>
                            <div class="col-md-9">
                                <input type="password" name="confirm_password" class="form-control" />
                            </div>
                        </div><br/>
                        <?php
                        errors();
                        message();
                        ?>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" name="change_password" class="btn btn-primary pull-right"><i class="fa fa-edit"></i> Change</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>