<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('zone_area_form') ?>
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
				<a class="btn btn-info" href="<?php echo site_url($this->config->item('admin_folder').'/locations/country_form'); ?>"><i class="fa fa-plus"></i> <?php echo lang('add_new_country');?></a>
				<a class="btn btn-info" href="<?php echo site_url($this->config->item('admin_folder').'/locations/zone_form'); ?>"><i class="fa fa-plus"></i> <?php echo lang('add_new_zone');?></a>
				<a class="btn btn-info" href="<?php echo site_url($this->config->item('admin_folder').'/locations/zone_area_form/'.$zone->id);?>"><i class="fa fa-plus"></i> <?php echo lang('add_new_zone_area');?></a>
				</div>
				<div class="table-responsive">

					<table class="table table-striped" cellspacing="0" cellpadding="0">
						<thead>
							<tr>
								<th><?php echo lang('code');?></th>
								<th><?php echo lang('tax');?></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($areas as $location):?>
								<tr>
									<td><?php echo  $location->code; ?></td>
									<td><?php echo $location->tax+0;?>%</td>
									<td>
										<div class="btn-group" style="float:right;">
											<a class="btn btn-info" href="<?php echo  site_url($this->config->item('admin_folder').'/locations/zone_area_form/'.$zone->id.'/'.$location->id); ?>"><i class="fa fa-edit"></i> <?php echo lang('edit');?></a>
											<a class="btn btn-danger" href="<?php echo  site_url($this->config->item('admin_folder').'/locations/delete_zone_area/'.$location->id); ?>" onclick="return areyousure();"><i class="fa fa-trash-o"></i> <?php echo lang('delete');?></a>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
							<?php if(count($areas) == 0):?>
								<tr>
									<td colspan="2">
										<?php echo lang('no_zone_areas');?>
										<td>
										</tr>
									<?php endif;?>
								</tbody>
							</table>
						</div>


					</div>

					<!-- /panel body -->
				</div>




			</div>
		</div>
		<script type="text/javascript">
			function areyousure()
			{
				return confirm('<?php echo lang('confirm_delete_zone_area');?>');
			}
		</script>