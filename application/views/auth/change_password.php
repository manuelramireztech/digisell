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

    <h3 class="page-header"> <?php echo lang('change_password_heading');?> <i class="fa fa-info-circle animated bounceInDown show-info"></i> </h3>

    <blockquote class="page-information hidden">
      <p>
        <b>Change Password</b> allows to change your password.
      </p>
    </blockquote>

  </div>
</div>

<!-- Demo Panel -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-cascade">
      <div class="panel-heading">
        
        
        
        <h1></h1>

        <div id="infoMessage"><?php echo $message;?></div>
        <?php 
        $attributes = array('class' => 'form-horizontal');
        echo form_open("auth/change_password",$attributes);
        ?>
        <div class="form-group">
          <?php
          $lbl_oldp = array('for' => 'old_password', 'class' => 'col-sm-2 control-label');
          echo form_label(lang('change_password_old_password_label'), 'old_password', $lbl_oldp);
          ?>
          <div class="col-sm-10">
            <?php echo form_input($old_password);?>
          </div>
        </div>
        <div class="form-group">
          <?php
          $lbl_newp = array('for' => 'new_password', 'class' => 'col-sm-2 control-label');
          echo form_label(sprintf(lang('change_password_new_password_label'), $min_password_length),'new_password', $lbl_newp);
          ?>
          <div class="col-sm-10">
            <?php echo form_input($new_password);?>
          </div>
        </div>
        <div class="form-group">
          <?php
          $lbl_cnewp = array('for' => 'new_password_confirm', 'class' => 'col-sm-2 control-label');
          echo form_label(lang('change_password_new_password_confirm_label'), 'new_password_confirm', $lbl_cnewp);
          ?>
          <div class="col-sm-10">
            <?php echo form_input($new_password_confirm);?>
          </div>
        </div>
        
        <?php echo form_input($user_id);?>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary"');?>
          </div>
        </div>
        <?php echo form_close();?>






      </div>
      <div class="panel-body panel-border">
        This is where you can change your password.
                    </div> <!-- /panel body 
                  </div>  
                </div>
              </div>

            </div>  --><!-- /.content -->

            

          </div> <!-- /.box-holder -->
        </div><!-- /.site-holder -->


<?php include('partials/footer.php') ?>