<?php include('partials/header.php'); ?>  
<!-- /header -->
<div class="row">
	<div class="col-mod-12">

		<ul class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>index.php/auth">Dashboard</a></li>
			<li class="active">Dashboard</li>
		</ul>

		<div class="form-group hidden-minibar pull-right">
			<input type="text" class="form-control form-cascade-control nav-input-search" size="20" placeholder="Search through site" />

			<span class="input-icon fui-search"></span>
		</div>

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
				<?php if($message)
            { ?>
        <div id="infoMessage" class="alert alert-success"><?php echo $message;?></div>
        <?php } ?>
				<h1><?php echo lang('index_heading');?></h1>
				<p><?php echo lang('index_subheading');?></p>
<?php
    if(isset($_POST['clt'])){
        $clt = $_POST['clt'];
        //print_r($clt);
    }
?>
				<!-- <div id="infoMessage"><?php echo $message;?></div> -->
				<div class="pull-right btn-xs">	
					<?php

					$config['base_url'] = site_url("auth/index");
					$config['total_rows'] = $count;
					$config['per_page'] = 2;
					$config["uri_segment"] = 3;
					$config['full_tag_open'] = '<ul class="pagination">';
					$config['full_tag_close'] = '</ul>';
					$config['prev_link'] = '&lt;';
					$config['prev_tag_open'] = '<li>';
					$config['prev_tag_close'] = '</li>';
					$config['next_link'] = '&gt;';
					$config['next_tag_open'] = '<li>';
					$config['next_tag_close'] = '</li>';
					$config['cur_tag_open'] = '<li class="current"><a href="#">';
					$config['cur_tag_close'] = '</a></li>';
					$config['num_tag_open'] = '<li>';
					$config['num_tag_close'] = '</li>';
					 
					$config['first_tag_open'] = '<li>';
					$config['first_tag_close'] = '</li>';
					$config['last_tag_open'] = '<li>';
					$config['last_tag_close'] = '</li>';
					 
					$config['first_link'] = '&lt;&lt;';
					$config['last_link'] = '&gt;&gt;';

					$this->pagination->initialize($config); 

					echo $this->pagination->create_links();
					?>
				</div>
				<form method="post" action="<?php echo base_url('index.php');?>/auth/delete_user">
				<table class="table table-striped">
					<tr>
					
						<th><?php echo form_submit('Submit', "delete", 'class="btn btn-danger"')?></th>
					
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_created_th');?></th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>
					<?php foreach ($users as $user):?>
						<tr>
							<td class="icheck-buttons list-unstyled">
							
								<?php
									$data = array(
    														'name'        => 'clt[]',
    														'id'		  => 'clt',
    														'value'       => $user->id,
    														'checked'     => false,
    														'class'       => 'flat-input',
    											 );
									echo form_checkbox($data); 
								?>
							
							</td>
							<td><?php echo $user->first_name;?></td>
							<td><?php echo $user->last_name;?></td>
							<td><?php echo $user->created_on;?></td>
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
				</form>
			

			

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
				$('.flat-input').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_flat-blue'
		});
	});

	</script>
  		