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

    <h3 class="page-header"> <?php echo lang('edit_group_heading');?> <i class="fa fa-info-circle animated bounceInDown show-info"></i> </h3>

    <blockquote class="page-information hidden">
      <p>
        <b>Edit Group</b> allows you to edit the group details.
      </p>
    </blockquote>

  </div>
</div>

<!-- Demo Panel -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-cascade">
      <div class="panel-heading">
        
        
        

        <div id="infoMessage"><?php echo $message;?></div>
        <?php 
        $attributes = array('class' => 'form-horizontal');
        echo form_open(current_url(),$attributes);
        ?>
        <div class="form-group">
          <?php
          $lbl_gname = array('for' => 'group_name', 'class' => 'col-sm-2 control-label');
          echo form_label(lang('edit_group_name_label'), 'group_name', $lbl_gname);
          ?>
          <div class="col-sm-10">
            <?php echo form_input($group_name);?>
          </div>
        </div>
        <div class="form-group">
          <?php
          $lbl_lname = array('for' => 'description', 'class' => 'col-sm-2 control-label');
          echo form_label(lang('edit_group_desc_label'), 'description', $lbl_lname);
          ?>
          <div class="col-sm-10">
            <?php echo form_input($group_description);?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <?php echo form_submit('submit', lang('edit_group_submit_btn'), 'class="btn btn-primary"');?>
          </div>
        </div>
        <?php echo form_close();?>






      </div>
      <div class="panel-body panel-border">
        This is where you can change group details.
                    </div> <!-- /panel body 
                  </div>  
                </div>
              </div>

            </div>  --><!-- /.content -->

            

          </div> <!-- /.box-holder -->
        </div><!-- /.site-holder -->



        <?php include('partials/footer.php') ?>