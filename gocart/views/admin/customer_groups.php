<div class="row">
	<div class="col-md-12">
		<script type="text/javascript">
			function areyousure()
			{
				return confirm('<?php echo lang('confirm_delete_group');?>');
			}

		</script>

		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-success" style="float:right;" href="<?php echo site_url( $this->config->item('admin_folder').'/customers/edit_group'); ?>"><i class="icon-plus-sign"></i> <?php echo lang('add_new_group');?></a>
			</div>
		</div>		
		</br>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('customer_groups') ?>
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
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th><?php echo lang('group_name');?></th>
								<th><?php echo lang('discount');?></th>
								<th><?php echo lang('discount_type');?></th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($groups as $group):?>
					<tr>
						<td><?php echo $group->name;?></td>
						<td><?php echo $group->discount ?></td>
						<td><?php echo $group->discount_type ?></td>
						<td>
							<div class="btn-group" style="float:right;">

								<a class="btn btn-success" href="<?php echo site_url($this->config->item('admin_folder').'/customers/edit_group/'.$group->id); ?>"><i class="fa fa-edit"></i> <?php echo lang('edit');?></a>

								<?php if($group->id != 1) : ?>
									<a class="btn btn-danger" href="<?php echo site_url($this->config->item('admin_folder').'/customers/delete_group/'.$group->id); ?>" onclick="return areyousure();"><i class="fa fa-trash-o"></i> <?php echo lang('delete');?></a>
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