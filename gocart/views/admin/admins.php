<div class="row">
	<div class="col-md-12">
		<script type="text/javascript">
			function areyousure()
			{
				return confirm('<?php echo lang('confirm_delete');?>');
			}
		</script>



		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('admins') ?>
					<span class="panel-options">
						<a href="#" class="panel-minimize">
							<i class="fa fa-chevron-up"></i>
						</a>
						<a href="#" class="panel-close">
							<i class="fa fa-times"></i>
						</a>
					</span>
				</h3>
			</div>
			<div class="panel-body">
				<div style="text-align:right;">
					<a class="btn btn-info" href="<?php echo site_url($this->config->item('admin_folder').'/admin/form'); ?>"><i class="icon-plus-sign"></i> <?php echo lang('add_new_admin');?></a>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th><?php echo lang('firstname');?></th>
								<th><?php echo lang('lastname');?></th>
								<th><?php echo lang('email');?></th>
								<th><?php echo lang('username');?></th>
								<th><?php echo lang('access');?></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($admins as $admin):?>
								<tr>
									<td><?php echo $admin->firstname; ?></td>
									<td><?php echo $admin->lastname; ?></td>
									<td><a href="mailto:<?php echo $admin->email;?>"><?php echo $admin->email; ?></a></td>
									<td><?php echo $admin->username; ?></td>
									<td><?php echo $admin->access; ?></td>
									<td>
										<div class="btn-group" style="float:right;">
											<a class="btn btn-success" href="<?php echo site_url($this->config->item('admin_folder').'/admin/form/'.$admin->id);?>"><i class="icon-pencil"></i> <?php echo lang('edit');?></a>	
											<?php
											$current_admin	= $this->session->userdata('admin');
											$margin			= 30;
											if ($current_admin['id'] != $admin->id): ?>
											<a class="btn btn-danger" href="<?php echo site_url($this->config->item('admin_folder').'/admin/delete/'.$admin->id); ?>" onclick="return areyousure();"><i class="icon-trash icon-white"></i> <?php echo lang('delete');?></a>
										<?php endif; ?>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

		</div>

		<!-- /panel body -->
	</div>

</div>
</div>