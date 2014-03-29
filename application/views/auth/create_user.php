<?php include('partials/header.php'); ?>  
<!-- /header -->
<div class="row">
  <div class="col-mod-12">

    <ul class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>index.php/auth">Dashboard</a></li>
      <li><a href="template.php">Basic Template</a></li>
      <li class="active">BreadCrumb</li>
    </ul>

    <div class="form-group hiddn-minibar pull-right">
      <input type="text" class="form-control form-cascade-control nav-input-search" size="20" placeholder="Search through site" />

      <span class="input-icon fui-search"></span>
    </div>

    <h3 class="page-header"> <?php echo lang('create_user_heading');?> <i class="fa fa-info-circle animated bounceInDown show-info"></i> </h3>

    <blockquote class="page-information hidden">
      <p>
        <b>Create User</b> allows you to create new user.
      </p>
    </blockquote>

  </div>
</div>

<!-- Demo Panel -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-cascade">
      <div class="panel-heading">
        
        
        <?php if($message)
            { ?>
        <div id="infoMessage" class="alert alert-danger"><?php echo $message;?></div>
        <?php } ?>


        <?php 
        $attributes = array('class' => 'form-horizontal');
        echo form_open("auth/create_user",$attributes);
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
          </div>
        </div>
        
        <?php echo form_close();?>






      </div>
      <div class="panel-body panel-border">
        This is where yo ucan create new user.
                    </div> <!-- /panel body 
                  </div>  
                </div>
              </div>

            </div>  --><!-- /.content -->

            

          </div> <!-- /.box-holder -->
        </div><!-- /.site-holder -->



       <?php include('partials/footer.php') ?>