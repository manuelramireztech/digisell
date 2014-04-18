<div class="row">
	<div class="col-md-12">
		<?php echo form_open_multipart(config_item('admin_folder').'/banners/banner_collection_form/'.$banner_collection_id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('banner_collection_form') ?>
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
				<?php
				$name			= array('name'=>'name', 'value' => set_value('name', $name), 'class'=>'form-control');
				?>
				<div class="form-group">
					<label for="title" class="col-sm-2 control-label"><?php echo lang('name');?></label>
					<div class="col-sm-10">
						<?php echo form_input($name); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
					</div>
				</div>
				
			</div>

			<!-- /panel body -->
		</div>
		

	</form>
</div>
</div>