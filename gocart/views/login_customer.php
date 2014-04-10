<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
	<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<div class="login-page">
		<div class="header-section">
			<a href="#"><img src="<?php echo base_url(); ?>images/loginlogo.png" alt=""></a>
			<ul class="menu">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url('index.php'); ?>/secure/register">Sign up</a></li>
			</ul>
		</div><!--end of header -section-->
		<div class="form-section">
			<div class="container">

			<?php echo form_open('secure/login_customer', 'class="form-horizontal"'); ?>
				<div class="form-inputs">
					<h4>Member Area</h4>
					<div class="input-group">
						<input type="text" name="email" class="form-control" placeholder="Email">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
					</div>
					<div class="input-group">
						<input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					</div>

					<input class="polaris-input" type="checkbox" name="remember" value="true" /> <span class="check-text">Remember me</span> 
					<input class="btn btn-info pull-right" name="submit" type="submit" value="Sign In"/>
					<h5><a href="forgot" target="_parent">Forgot Your Password ?</a></h5>
				</div>
									
				
					
					<input type="hidden" value="<?php echo $redirect; ?>" name="redirect"/>
				<input type="hidden" value="submitted" name="submitted"/>
			<?php echo  form_close(); ?>	
						
			</div>
		</div><!--emd of form-section-->
		<div class="footer">
			<p>Copyrights &copy; <a href="#"><strong>Bootstrapguru</strong></a> - All Rights Reserved</p>
			<ul class="pull-right">
				<li><a href="#">Privacy & Terms</a></li>
				<li><a href="#">Help</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</div><!--cnd of login-page-->
	
</body>
<script src="<?php echo base_url(); ?>js/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>js/icheck/icheck.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $('.polaris-input').iCheck({
         checkboxClass: 'icheckbox_polaris',
    radioClass: 'iradio_polaris',
        increaseArea: '20%' // optional
      });
});
</script>
</html>
