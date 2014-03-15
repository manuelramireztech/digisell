<?php include('partials/header.php'); ?>  
<!-- /header -->
<div class="row">
  <div class="col-mod-12">

    <ul class="breadcrumb">
      <li><a href="auth">Dashboard</a></li>
      <li><a href="template.php">Basic Template</a></li>
      <li class="active">BreadCrumb</li>
    </ul>

    <div class="form-group hiddn-minibar pull-right">
      <input type="text" class="form-control form-cascade-control nav-input-search" size="20" placeholder="Search through site" />

      <span class="input-icon fui-search"></span>
    </div>

    <h3 class="page-header"> <?php echo lang('deactivate_heading');?> <i class="fa fa-info-circle animated bounceInDown show-info"></i> </h3>

    <blockquote class="page-information hidden">
      <p>
        <b>Template Page</b> is the basic page where you can add more pages according to your requirements easily within this division.
      </p>
    </blockquote>

  </div>
</div>

<!-- Demo Panel -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-cascade">
      <div class="panel-heading">
        
        
        

        <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
        <?php 
        $attributes = array('class' => 'form-horizontal');
        echo form_open("auth/deactivate/".$user->id,$attributes);
        ?>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
            <input type="radio" name="confirm" value="yes" checked="checked" />
            <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
            <input type="radio" name="confirm" value="no" />
          </div>
        </div>
        
        <?php echo form_hidden($csrf); ?>
        <?php echo form_hidden(array('id'=>$user->id)); ?>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-primary"');?>
          </div>
        </div>
        <?php echo form_close();?>






      </div>
      <div class="panel-body panel-border">
        This is a basic template page to quick start your project.
                    </div> <!-- /panel body 
                  </div>  
                </div>
              </div>

            </div>  --><!-- /.content -->

            

          </div> <!-- /.box-holder -->
        </div><!-- /.site-holder -->



        <?php include('partials/footer.php') ?>