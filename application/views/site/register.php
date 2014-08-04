<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
  <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <div class="login-page">
    <div class="header-section">
      <a href="#">DigiSell</a>
      <ul class="menu">
        <li><a href="<?php echo base_url(); ?>" class="sign-in">Home</a></li>
        <li><a href="<?php echo base_url('index.php').'/client_login'; ?>" class="sign-in">Login</a></li>
      </ul>
    </div><!--end of header -section-->
    <?php echo form_open('client_login/registration','autocomplete="off"'); ?>
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
           <?php if ($this->session->flashdata('warning')):?>
                <div class="alert alert-warning">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('warning');?>
                </div>
           <?php endif;?>

        <div class="form-inputs">
          <h4>Register Here !!!</h4>
          <div class="input-group">
            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
          </div>
          <div class="input-group">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
          </div>
          <div class="input-group">
            <input type="text" name="email" class="form-control" placeholder="E mail" autocomplete="off" required>
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          </div>
          <div class="input-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          </div>
          
          
          <input class="polaris-input" type="checkbox" name="accept" value="I Agree"> <span class="check-text">Accept Terms & Conditions</span> 
          <button type="submit" class="btn btn-info pull-right">Register</button>
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