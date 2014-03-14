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
<h1><?php echo 'Register User';?></h1>
<p><?php echo lang('create_user_subheading');?></p>
<?php echo $message;?>

<?php 
      $attributes = array('class' => 'form-horizontal');
      echo form_open("auth/register",$attributes);
?>
<div class="form-group">
      <?php
            $lbl_fname = array('for' => 'first_name', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_fname_label'), 'first_name', $lbl_fname);
      ?>
    <div class="col-sm-10">
      <?php echo form_input($first_name);?>
    </div>
</div>
<div class="form-group">
      <?php
            $lbl_lname = array('for' => 'last_name', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_lname_label'), 'last_name', $lbl_lname);
      ?>
    <div class="col-sm-10">
      <?php echo form_input($last_name);?>
    </div>
</div>
<div class="form-group">
      <?php
            $lbl_cname = array('for' => 'company', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_company_label'), 'company', $lbl_cname);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($company);?>
      </div>
</div>
<div class="form-group">
      <?php
            $lbl_email = array('for' => 'email', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_email_label'), 'email', $lbl_email);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($email);?>
      </div>
</div>
<div class="form-group">
      <?php
            $lbl_phone = array('for' => 'phone', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_phone_label'), 'phone', $lbl_phone);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($phone);?>
      </div>
</div>
<div class="form-group">
      <?php
            $lbl_pswd = array('for' => 'password', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_password_label'), 'password', $lbl_pswd);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($password);?>
      </div>
</div>
<div class="form-group">
      <?php
            $lbl_cpswd = array('for' => 'password_confirm', 'class' => 'col-sm-2 control-label');
            echo form_label(lang('create_user_password_confirm_label'), 'password_confirm', $lbl_cpswd);
      ?>
      <div class="col-sm-10">
            <?php echo form_input($password_confirm);?>
      </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_submit('submit', 'Register User', 'class="btn btn-primary"');?>
      <?php echo nbs(6).anchor('/auth', 'No Thanks', 'title="News title"'); ?>
    </div>
</div>
<?php echo form_close();?>
</body>
</html>