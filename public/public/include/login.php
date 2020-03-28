<div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="login-box">
          <div class="row">
          <div class="col-md-12">
            <div class="alert alert-info">Login page</div>
            <?php
            errors();
            message();
            ?>
          </div>
          </div>
            <form method="post" action="functions/login.php">
              <div class="row">
                <div class="col-md-3">Username</div>
                <div class="col-md-9">
                  <input type="text" name="username" placeholder="Username" value="<?php if(isset($_SESSION['username_login'])){ echo $_SESSION['username_login']; $_SESSION['username_login'] = null; } ?>" class="form-control">
                </div>
              </div><br>

              <div class="row">
                <div class="col-md-3">Password</div>
                <div class="col-md-9">
                  <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
              </div><br>

              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                  <button name="login" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</<button></button></button>
                
              </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>