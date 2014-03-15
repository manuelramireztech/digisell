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
<title>Digisell: Forgot Password</title>
<body>
  <div class="pass-box">
    <h1><i class='fa fa-bookmark'></i>&nbsp;Welcome To Digisell </h1><hr>
    <?php echo heading(lang('forgot_password_heading'),5);?>
    <div class="pass-rec-box">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
          <?php 
          $attributes = array('class' => 'form-horizontal');
          echo form_open("auth/forgot_password");
          ?>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class='fa fa-envelope'></i></span>
            <?php echo form_input($email);?>
            
          </div>
          <?php 
          if($message)
            { ?>

          <div class="alert alert-danger">

            <?php 

            $list = array($message);

            $attributes = array(
              'id'    => 'mylist',
              'class' => 'list-unstyled',
              );
            echo ul($list,$attributes); 
            ?>
          </div> 
          <?php } ?>
          <div class="form-group">
            <?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn  btn-block  btn-submit pull-right"');?>
          </div>
          <?php echo form_close();?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>