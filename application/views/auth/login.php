<?php 
  echo doctype('html5');
?>
<html>
<head>
<?php
  
  echo link_tag('login/css/bootstrap.css');
  echo link_tag('login/css/font-awesome.css');
  echo link_tag('login/css/login.css');
?>
<link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
</head>
<body>
<div class="login-box">
<h1><i class='fa fa-bookmark'></i>&nbsp;Welcome To Digisell </h1><hr>
<div class="input-box">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
<?php
  echo heading(lang('login_heading'),5);
  // echo lang('login_subheading');
  //echo $message;
  $attributes = array('id' => 'myform');
  echo form_open("auth/login",$attributes);?>
  
    
      <div class="input-group form-group">
              <span class="input-group-addon"><i class='fa fa-envelope'></i></span>
              <?php echo form_input($identity);?>
      </div>
    
  

  
      <div class="input-group form-group">
              <span class="input-group-addon"><i class='fa fa-key'></i></span>
              <?php echo form_input($password);?>
      </div>
    
  <div class="form-group">
    
      <div class="checkbox">
        
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> 
          <?php echo form_label(lang('login_remember_label'), 'remember');?>
        
      </div>
    
  </div>
  <?php echo $message; ?>
  <div class="form-group">
    <div class="">
    <?php $data = array('name' => 'submit','value' => lang('login_submit_btn'),'id' => 'btnSubmit','class' => 'btn  btn-block  btn-submit pull-right');  echo form_submit($data);?>
    </div>
  </div>
<?php echo form_close();?>
  <div class="input-group form-group">
    <div class="">
        <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>&nbsp;&nbsp;&nbsp;
        <a href="register">Register</a>
    </div>
  </div>


</div>
</div>
</div>
</div>
</body>
</html>