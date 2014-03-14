<?php 
  echo doctype('html5');
?>
<html>
<head>
<?php
  
  echo link_tag('css/bootstrap.css');
?>
</head>
<body>
<?php 
		$attributes = array('class' => 'form-horizontal');
		echo form_open("auth/forgot_password",$attributes);
?>
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>
<div class="form-group">
    <label for="email" class="col-sm-2 control-label"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label>
    <div class="col-sm-10">
    	<?php echo form_input($email);?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-primary"');?>
    </div>
</div>
<?php echo form_close();?>
</body>
</html>