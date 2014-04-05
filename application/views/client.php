<?php include('partials/header.php'); ?>  
<!-- /header -->
<div class="row">
	<div class="col-mod-12">

		<ul class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>index.php/auth">Dashboard</a></li>
			<li><a href="template.php">Basic Template</a></li>
			<li class="active">BreadCrumb</li>
		</ul>
		<form action="<?php echo base_url('index.php'); ?>/client/search" method="post">
			<div class="input-group col-md-2 pull-right">
				<input name="txtSearch" type="text" id="txtSearch" class="form-control" placeholder="Search Client">
				<span class="input-group-btn">
					<input type="submit" name="btnSearch" value="Go" id="btnSearch" class="btn" />
				</span>
				
			</div><!-- /input-group -->
		</form>
		
	

		

		<h3 class="page-header"> Admin Control Panel <i class="fa fa-info-circle animated bounceInDown show-info"></i> </h3>

		<blockquote class="page-information hidden">
			<p>
				<b>Admin Control Panel</b> allows you to change the user permissions. 
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

				<div class="pull-right btn-xs">	
					<?php

					$config['base_url'] = site_url("client/client");
					$config['total_rows'] = $count;
					$config['per_page'] = 2;
					$config["uri_segment"] = 2;

					$this->pagination->initialize($config); 

					echo $this->pagination->create_links();
					?>
				</div>
				<form method="post" action="<?php echo base_url('index.php');?>/auth/delete_user">
				<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th><?php echo form_submit('Submit', 'delete', 'class="btn btn-danger"')?></th>
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_created_th');?></th>
						<th><?php echo lang('index_email_th') ?></th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>
					<?php foreach ($users as $user):?>
						<tr class="user-row">
							<td>
								<?php
									$data = array(
    														'name'        => 'clt[]',
    														'id'		  => 'clt',
    														'value'       => $user->id,
    														'checked'     => false,
    														'class'       => 'checkbox-inline',
    											 );
									echo form_checkbox($data); 
								?>
							</td>
							<td><?php echo $user->first_name?></td>
							<td><?php echo $user->last_name?></td>
							<td><?php echo $user->created_on?></td>
							<td><?php echo $user->email ?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
								<?php endforeach?>
							</td>
							<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
							<td><?php echo anchor("auth/edit_user/".$user->id, '<i class="fa fa-edit"></i>') ;?><?php echo anchor("auth/delete_user/".$user->id, '<i class="fa fa-trash-o"></i>') ;?></td>
						</tr>
					<?php endforeach;?>
				</table>
				</div>
				</form>
			</br>
			

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



  			<?php include('partials/footer.php') ?>

  		<script type="text/javascript">
		$(document).ready(function(){
				
				$('.user-row').on('click',function(){
						if($(this).find('.checkbox-inline').attr('checked'))
						{
							$(this).find('.checkbox-inline').removeAttr('checked','checked');
						}
						else
						{
							$(this).find('.checkbox-inline').attr('checked','checked');	
						}
						
				});

				$('.flat-input').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_flat-blue'
		});

	});

	</script>