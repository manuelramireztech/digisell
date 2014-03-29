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

    <h3 class="page-header"> <?php echo lang('create_group_heading');?> <i class="fa fa-info-circle animated bounceInDown show-info"></i> </h3>

    <blockquote class="page-information hidden">
      <p>
        <b>Create Group</b> allows you to create new group.
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
        echo form_open("auth/create_group",$attributes);
        ?>
        <div class="form-group">
          <?php
          $lbl_gname = array('for' => 'group_name', 'class' => 'col-sm-2 control-label');
          echo form_label(lang('create_group_name_label'), 'group_name', $lbl_gname);
          ?>
          <div class="col-sm-10">
            <?php echo form_input($group_name);?>
          </div>
        </div>

        <div class="form-group">
          <?php
          $lbl_desc = array('for' => 'description', 'class' => 'col-sm-2 control-label');
          echo form_label(lang('create_group_desc_label'), 'description', $lbl_desc);
          ?>
          <div class="col-sm-10">
            <?php echo form_input($description);?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <?php echo form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-primary"');?>
          </div>
        </div>
        <?php echo form_close();?>






      </div>
      <div class="panel-body panel-border">
        This is where you can create new group.
                    </div> <!-- /panel body 
                  </div>  
                </div>
              </div>

            </div>  --><!-- /.content -->

            

          </div> <!-- /.box-holder -->
        </div><!-- /.site-holder -->


<?php include('partials/footer.php') ?>