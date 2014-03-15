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

		<h3 class="page-header"> Admin Control Panel <i class="fa fa-info-circle animated bounceInDown show-info"></i> </h3>

		<blockquote class="page-information hidden">
			<p>
				<b>Admin Control Panel</b> is the basic page where you can add more pages according to your requirements easily within this division.
			</p>
		</blockquote>

	</div>
</div>

<!-- Demo Panel -->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-cascade">
			<div class="panel-heading">
				
				<h1><?php echo lang('index_heading');?></h1>
				<p><?php echo lang('index_subheading');?></p>

				<div id="infoMessage"><?php echo $message;?></div>

				<table class="table table-striped">
					<tr>
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_email_th');?></th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>
					<?php foreach ($users as $user):?>
						<tr>
							<td><?php echo $user->first_name;?></td>
							<td><?php echo $user->last_name;?></td>
							<td><?php echo $user->email;?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
								<?php endforeach?>
							</td>
							<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
							<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
						</tr>
					<?php endforeach;?>
				</table>
			</br>
			<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>

			<p><?php echo anchor("auth/change_password/".$user->id, lang('reset_password_heading'))?></p>


			







		</div>
		<div class="panel-body panel-border">
			This is a admin page allows you to change user details.
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