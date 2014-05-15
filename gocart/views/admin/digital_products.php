<div class="row">
	<div class="col-md-12">
		<script type="text/javascript">
			function areyousure()
			{
				return confirm('<?php echo lang('confirm_delete_file');?>');
			}
		</script>


		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('dgtl_pr_header') ?>
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
				<a class="btn btn-info" style="float:right;" href="<?php echo site_url($this->config->item('admin_folder').'/digital_products/form');?>"><i class="icon-plus-sign"></i> <?php echo lang('add_file');?></a>
			
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th><?php echo lang('filename');?></th>
								<th><?php echo lang('title');?></th>
								<th><?php echo lang('size');?></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php echo (count($file_list) < 1)?'<tr><td style="text-align:center;" colspan="4">'.lang('no_files').'</td></tr>':''?>
							<?php foreach ($file_list as $file):?>
								<tr>
									<td><?php echo $file->filename; ?></td>
									<td><?php echo $file->title; ?></td>
									<td><?php echo $file->size; ?> kb</td>
									<td>
										<div class="btn-group" style="float:right">
											<a class="btn btn-primary" href="<?php echo  site_url($this->config->item('admin_folder').'/digital_products/form/'.$file->id);?>"><i class="fa fa-edit"></i> <?php echo lang('edit');?></a>

											<a class="btn btn-danger" href="<?php echo  site_url($this->config->item('admin_folder').'/digital_products/delete/'.$file->id);?>" onclick="return areyousure();"><i class="fa fa-trash-o"></i> <?php echo lang('delete');?></a>
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