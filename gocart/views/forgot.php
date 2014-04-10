

<!DOCTYPE html>
<html>
<head>
  <title>forgot</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
  <!-- Styles -->
  <link href="<?php echo base_url(); ?>css/forgot.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
</head>
<body>
  <div class="forgot-password">
    <div class="forgot-nav">
      <ul class="list-unstyled ">
        <li class="pull-left"><a href="#"><img src="<?php echo base_url(); ?>images/loginlogo.png" alt=""></a></li>
        <li class="pull-right"><a href="<?php echo base_url('index.php'); ?>/secure/register">Sign Up</a></li>
        <li class="pull-right"><a href="<?php echo base_url('index.php'); ?>/secure/login_customer">Sign In</a></li>
      </ul> 
    </div>
    <!-- forgot-nav -->
    <?php echo form_open('secure/forgot_password', 'class="form-horizontal"') ?>
    <div class="forgot-content">
      <div class="container">
        <div class="forgot-info ">
          <h4>Forgot Your Password?</h4>
          <p>Enter your email address and we&#39;ll send you a link to reset your password</p>
          <div class="form-group ">
            <div class="col-sm-12">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="EMAIL ADDRESS">
                <span class="input-group-addon"><i class=" fa fa-envelope "></i></span>
              </div>
            </div>
          </div>
          <input type="hidden" value="submitted" name="submitted"/>
          <button type="submit" class="btn btn-default">Send Link</button>
        </div>
        <!-- forgot-info -->
        <?php echo  form_close(); ?>
      </div>
    </div>
    <!-- forgot-content -->
    <div class="footer ">
      <li class="pull-left list-unstyled"><p>Copyrights &copy; <a href="#"><strong>Bootstrapguru</strong></a> - All Rights Reserved</p></li>
      <ul class="list-inline pull-right">
        <li><a href="#">Privacy & Terms</a></li>
				<li><a href="#">Help</a></li>
				<li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <!-- forgot password -->
</body>
</html>
