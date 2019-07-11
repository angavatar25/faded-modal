<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body class="body-login-2">
    
    <section class="row row-0 section-login">
      <div class="col-md-6 login-aside">
        <img src="<?php echo $prefix;?>assets/img/brand/logo_antikode-light.png" class="img-fluid login-aside-img" alt="Logo">
      </div>
      <div class="col-md-6 login-main">
        <div class="login-main-content">
          <h1>Login</h1>
          <div class="login-main-forms">
            <div class="form-group">
              <label for="">Email Address</label>
              <input type="email" class="form-control" placeholder="Enter email address">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" placeholder="Retype new password">
              <a href="#modalForgotPassword" data-toggle="modal" class="form-link text-right d-block mt-2">Forgot password?</a>
            </div>
          </div>
          <div class="login-main-actions">
            <a href="#" class="btn btn-primary btn-block">Login</a>
          </div>
        </div>
      </div>
    </section>

    <!--Modal Forgot Password-->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalForgotPassword">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body p-box">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button>
            <h4 class="modal-title mb-3">Reset password</h4>
            <p>Fill in the form below to reset your password.</p>
            <div class="form-group">
              <label class="">Email Address</label>
              <input type="email" class="form-control" placeholder="Enter email address">
            </div>
            <div class="clearfix mt-4">
              <button type="button" class="btn btn-primary">Reset Password</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
