<?php include('partials/header.php'); ?>  
<!-- /header -->
<div class="row">
  <div class="col-mod-12">

    <ul class="breadcrumb">
      <li><a href="index.php">Dashboard</a></li>
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
        This is a basic template page to quick start your project.
                    </div> <!-- /panel body 
                  </div>  
                </div>
              </div>

            </div>  --><!-- /.content -->

            

          </div> <!-- /.box-holder -->
        </div><!-- /.site-holder -->



        <!-- Load JS here for Faster site load =============================-->
        <script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?php echo base_url(); ?>js/less-1.5.0.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-switch.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.tagsinput.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.placeholder.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>
        <script src="<?php echo base_url(); ?>js/application.js"></script>
        <script src="<?php echo base_url(); ?>js/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.sortable.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.gritter.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url(); ?>js/skylo.js"></script>
        <script src="<?php echo base_url(); ?>js/prettify.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>
        <script src="<?php echo base_url(); ?>js/bic_calendar.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.accordion.js"></script>
        <script src="<?php echo base_url(); ?>js/theme-options.js"></script>

        <script src="<?php echo base_url(); ?>js/bootstrap-progressbar.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-progressbar-custom.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-colorpicker-custom.js"></script>

        <!-- Core Jquery File  =============================-->
        <script src="<?php echo base_url(); ?>js/core.js"></script>


      </body>
      </html>