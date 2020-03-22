<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lecturer-tab" data-toggle="tab" href="#lecturer" role="tab" aria-controls="lecturer" aria-selected="false">Lecturer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="hod-tab" data-toggle="tab" href="#hod" role="tab" aria-controls="hod" aria-selected="false">HOD</a>
                </li>
            </ul>
            <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
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
                                        <div id="accordion21" class="collapse show" data-parent="#accordion2">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-3">First name</div>
                                                            <div class="col-md-9">
                                                                <input type="text" name="first_name" class="form-control">
                                                            </div>
                                                        </div><br/>
                                                        <div class="row">
                                                            <div class="col-md-3">Last name</div>
                                                            <div class="col-md-9">
                                                                <input type="text" name="last_name" class="form-control">
                                                            </div>
                                                        </div><br/>
                                                        <div class="row">
                                                            <div class="col-md-3">Reg number</div>
                                                            <div class="col-md-9">
                                                                <input type="text" name="reg_number" class="form-control">
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
                                                            <div class="col-md-3">Level</div>
                                                            <div class="col-md-9">
                                                                <select name="student_level" class="form-control custom-select">
                                                                    <option value="">Select level</option>
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                </select>
                                                            </div>
                                                        </div><br/>
                                                        <div class="row">
                                                            <div class="col-md-3">Email</div>
                                                            <div class="col-md-9">
                                                                <input type="text" name="email" class="form-control">
                                                            </div>
                                                        </div><br/>
                                                        <div class="row">
                                                            <div class="col-md-3">Phone</div>
                                                            <div class="col-md-9">
                                                                <input type="text" name="phone" class="form-control">
                                                            </div>
                                                        </div><br/>
                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-9">
                                                                <button type="submit" class="btn btn-primary pull-right"><i class="ti-save"></i> Register</button>
                                                            </div>
                                                        </div><br/>

                                                        
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#accordion22">
                                                Students List</a>
                                        </div>
                                        <div id="accordion22" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
                <div class="tab-pane fade" id="lecturer" role="tabpanel" aria-labelledby="lecturer-tab">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                </div>
                <div class="tab-pane fade" id="hod" role="tabpanel" aria-labelledby="hod-tab">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                </div>
            </div>
        </div>
    </div>
</div>