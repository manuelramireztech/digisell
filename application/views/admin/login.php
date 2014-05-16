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
			
		</div><!--end of header -section-->
		<?php echo form_open('admin/dashboard/login'); ?>
		<div class="form-section">
			<div class="container">
			<?php if ($this->session->flashdata('message')):?>
                <div class="alert alert-info">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('message');?>
                </div>
           <?php endif;?>
           <?php if ($this->session->flashdata('error')):?>
                <div class="alert alert-danger">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('error');?>
                </div>
           <?php endif;?>
				<div class="form-inputs">
					<h4>Member Area</h4>
					<div class="input-group">
						<input type="text" name="username" class="form-control" placeholder="E mail" required>
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
					</div>
					<div class="input-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required>
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					</div>

					<input class="polaris-input" type="checkbox" id="inlineCheckbox1" value="option1"> <span class="check-text">Remember me</span> 
					<button type="submit" class="btn btn-info pull-right">Sign In</button>
					<h5><a href="forgot.html" target="_blank">Forgot Your Password ?</a></h5>
				</div>				
			</div>
		</div><!--emd of form-section-->
		</form>
		<div class="footer">
			<p>Copyrights &copy; <a href="#"><strong>Digisell</strong></a> - All Rights Reserved</p>
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
