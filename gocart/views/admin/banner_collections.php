<div class="row">
	<div class="col-md-12">
		
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('banner_collections') ?>
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
			<a style="float:right;" class="btn btn-primary" href="<?php echo site_url(config_item('admin_folder').'/banners/banner_collection_form'); ?>"><i class="icon-plus-sign"></i> <?php echo lang('add_new_banner_collection');?></a>
				<div class="table-responsive">
					<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo lang('name');?></th>
					<th></th>
				</tr>
			</thead>
			<?php echo (count($banner_collections) < 1)?'<tr><td style="text-align:center;" colspan="5">'.lang('no_banner_collections').'</td></tr>':''?>
			<?php if ($banner_collections): ?>
				<tbody>
					<?php

					foreach ($banner_collections as $banner_collection):?>
					<tr>
						<td><?php echo $banner_collection->name;?></td>
						<td>
							<div class="btn-group" style="float:right">
								<a class="btn btn-info" href="<?php echo base_url(config_item('admin_folder').'/banners/banner_collection/'.$banner_collection->banner_collection_id);?>"><i class="icon-picture"></i> <?php echo lang('banners');?></a>

								<a class="btn btn-success" href="<?php echo site_url(config_item('admin_folder').'/banners/banner_collection_form/'.$banner_collection->banner_collection_id);?>"><i class="icon-pencil"></i> <?php echo lang('edit');?></a>

								<a class="btn btn-danger" href="<?php echo site_url(config_item('admin_folder').'/banners/delete_banner_collection/'.$banner_collection->banner_collection_id);?>" onclick="return areyousure();"><i class="icon-trash icon-white"></i> <?php echo lang('delete');?></a>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		<?php endif;?>
	</table>
				</div>
				
				
			</div>

			<!-- /panel body -->
		</div>
		

	<script type="text/javascript">
		function areyousure(){
			return confirm('<?php echo lang('confirm_delete_banner_collection');?>');
		}
	</script>
</div>
</div>