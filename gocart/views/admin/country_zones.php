<div class="row">
	<div class="col-md-12">
		


		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('zones') ?>
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
				<div class="btn-group" style="float:right;">
				<a class="btn btn-warning" href="<?php echo site_url($this->config->item('admin_folder').'/locations/country_form'); ?>"><i class="fa fa-plus"></i> <?php echo lang('add_new_country');?></a>
					<a class="btn btn-warning" href="<?php echo site_url($this->config->item('admin_folder').'/locations/zone_form'); ?>"><i class="fa fa-plus"></i> <?php echo lang('add_new_zone');?></a>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th><?php echo lang('name');?></th>
								<th><?php echo lang('code');?></th>
								<th><?php echo lang('tax');?></th>
								<th><?php echo lang('status');?></th>
								<th class="gc_cell_right"></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($zones as $location):?>
								<tr>
									<td class="gc_cell_left"><?php echo  $location->name; ?></td>
									<td><?php echo $location->code;?></td>
									<td><?php echo $location->tax+0;?>%</td>
									<td><?php echo ((bool)$location->status)?'enabled':'disabled';?></td>
									<td>
										<div class="btn-group" style="float:right;">
											<a class="btn btn-success" href="<?php echo site_url($this->config->item('admin_folder').'/locations/zone_form/'.$location->id); ?>"><i class="fa fa-pencil"></i> <?php echo lang('edit');?></a>
											<a class="btn btn-info" href="<?php echo site_url($this->config->item('admin_folder').'/locations/zone_areas/'.$location->id); ?>"><i class="fa fa-map-marker"></i> <?php echo lang('zone_areas');?></a>
											<a class="btn btn-danger" href="<?php echo site_url($this->config->item('admin_folder').'/locations/delete_zone/'.$location->id); ?>" onclick="return areyousure();"><i class="fa fa-trash-o"></i> <?php echo lang('delete');?></a>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="text-right">
					<a class="btn btn-large btn-success " href="<?php echo site_url(config_item('admin_folder').'/orders');?>"><?php echo lang('view_all_orders');?></a>
				</div>
				
			</div>

			<!-- /panel body -->
		</div>

	</div>
</div>
<script type="text/javascript">
	function areyousure()
	{
		return confirm('<?php echo lang('confirm_delete_zone');?>');
	}
</script>