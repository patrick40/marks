<br/>
<div class="container">
<br/>
    <div class="card">
        <div class="card-header"><i class="ti-user"></i> My Profile</div>
        <div class="card-body">
            <form action="functions/update_profile.php" method="post">
                <?php
                if($_SESSION['usertype'] == 1){ //Student form
                ?>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">First Name</div>
                            <div class="col-md-9">
                                <input type="text" name="first_name" value="<?php echo $userDetails[0]->first_name; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Last Name</div>
                            <div class="col-md-9">
                                <input type="text" name="last_name" value="<?php echo $userDetails[0]->last_name; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Reg Number</div>
                            <div class="col-md-9">
                                <input type="text" name="reg_number" value="<?php echo $userDetails[0]->reg_number; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-4">Gender</div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6 custom-control custom-radio">
                                        <input type="radio" <?php if($userDetails[0]->gender == "m") { echo "checked"; } ?> value="m" id="customRadio1" name="gender" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                    </div>
                                    <div class="col-md-6 custom-control custom-radio">
                                        <input type="radio" <?php if($userDetails[0]->gender == "f") { echo "checked"; } ?> value="f" id="customRadio2" name="gender"  class="custom-control-input">
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
                                <input type="text" name="student_level" value="<?php echo $userDetails[0]->student_level; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Email</div>
                            <div class="col-md-9">
                                <input type="email" name="email" value="<?php echo $userDetails[0]->email; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Phone</div>
                            <div class="col-md-9">
                                <input type="text" name="phone" value="<?php echo $userDetails[0]->phone; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <?php
                        errors();
                        message();
                        ?>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" name="update_profile" class="btn btn-primary pull-right"><i class="fa fa-edit"></i> Update</button>
                            </div>
                        </div><br/>
                    </div>
                </div>
                <?php
                }
                elseif($_SESSION['usertype'] == 2){ //Lecturer form
                ?>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">First Name</div>
                            <div class="col-md-9">
                                <input type="text" name="first_name" value="<?php echo $userDetails[0]->first_name; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Last Name</div>
                            <div class="col-md-9">
                                <input type="text" name="last_name" value="<?php echo $userDetails[0]->last_name; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                       
                        <div class="row">
                            <div class="col-md-4">Gender</div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6 custom-control custom-radio">
                                        <input type="radio" <?php if($userDetails[0]->gender == "m") { echo "checked"; } ?> value="m" id="customRadio1" name="gender" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                    </div>
                                    <div class="col-md-6 custom-control custom-radio">
                                        <input type="radio" <?php if($userDetails[0]->gender == "f") { echo "checked"; } ?> value="f" id="customRadio2" name="gender"  class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div><br/>
                        
                        <div class="row">
                            <div class="col-md-3">Email</div>
                            <div class="col-md-9">
                                <input type="email" name="email" value="<?php echo $userDetails[0]->email; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Phone</div>
                            <div class="col-md-9">
                                <input type="text" name="phone" value="<?php echo $userDetails[0]->phone; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <?php
                        errors();
                        message();
                        ?>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" name="update_profile" class="btn btn-primary pull-right"><i class="fa fa-edit"></i> Update</button>
                            </div>
                        </div><br/>
                    </div>
                </div>

                <?php
                }
                elseif($_SESSION['usertype'] == 3){ //HOD form
                ?>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">First Name</div>
                            <div class="col-md-9">
                                <input type="text" name="first_name" value="<?php echo $userDetails[0]->first_name; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Last Name</div>
                            <div class="col-md-9">
                                <input type="text" name="last_name" value="<?php echo $userDetails[0]->last_name; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        
                        <div class="row">
                            <div class="col-md-3">Email</div>
                            <div class="col-md-9">
                                <input type="email" name="email" value="<?php echo $userDetails[0]->email; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-md-3">Phone</div>
                            <div class="col-md-9">
                                <input type="text" name="phone" value="<?php echo $userDetails[0]->phone; ?>" class="form-control"/>
                            </div>
                        </div><br/>
                        <?php
                        errors();
                        message();
                        ?>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" name="update_profile" class="btn btn-primary pull-right"><i class="fa fa-edit"></i> Update</button>
                            </div>
                        </div><br/>
                    </div>
                </div>

                <?php
                }
                ?>
            </form>
        </div>
    </div>
</div>