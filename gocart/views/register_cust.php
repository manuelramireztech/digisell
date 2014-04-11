
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register Page</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="login-page">
		<div class="header-section">
			<a href="#"><img src="images/loginlogo.png" alt=""></a>
			<ul class="menu">
				<li><a href="#">Already a member ?</a></li>
				<li><a href="login.html" class="sign-in">Sign In</a></li>
			</ul>
		</div><!--end of header -section-->
		<div class="form-section">
			<div class="container">

				<div class="form-inputs">
					<h4>Register Here</h4>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="User Name">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="E-mail Adress">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Password">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					</div>

					<input class="polaris-input" type="checkbox" id="inlineCheckbox1" value="option1"> <span class="check-text">Terms & Conditions</span> <button type="button" class="btn btn-info pull-right register-btn">Sign Up</button>
				</div>				
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
<script src="bower_components/jquery/jquery.js"></script>
<script src="js/icheck/icheck.js"></script>
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
