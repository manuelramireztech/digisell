<?php 
echo doctype('html5');
?>
<html>
<head>
  <?php
  
  echo link_tag('css/bootstrap.css');
  echo link_tag('login/css/font-awesome.css');
  echo link_tag('login/css/pass-rec.css');
  ?>
</head>
<body>
  <div class="pass-box">
    <h1><i class='fa fa-bookmark'></i>&nbsp;Welcome To Digisell </h1><hr>
    <?php echo heading(lang('forgot_password_heading'),5);?>
    <div class="pass-rec-box">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
          <?php 
          $attributes = array('class' => 'form-horizontal');
          echo form_open('auth/reset_password/' . $code);
          ?>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class='fa fa-envelope'></i></span>
            <?php echo form_input($new_password);?>
            
          </div>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class='fa fa-envelope'></i></span>
            <?php echo form_input($new_password_confirm);?>
            
          </div>
          <?php echo form_input($user_id);?>
          <?php echo form_hidden($csrf); ?>
          <div class="form-group">
            <?php echo form_submit('submit', lang('reset_password_submit_btn'), 'class="btn  btn-block  btn-submit pull-right"');?>
          </div>
          <?php echo form_close();?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>