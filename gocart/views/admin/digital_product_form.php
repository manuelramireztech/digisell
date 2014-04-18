<div class="row">
	<div class="col-md-12">
		<?php 
		echo form_open_multipart($this->config->item('admin_folder').'/digital_products/form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('digital_products_form') ?>
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
				<div class="form-group">
					<?php if($id==0) : ?>
						<label for="file" class="col-sm-2 control-label"><?php echo lang('file_label');?> </label>
						<div class="col-sm-10">
							<?php 	$data = array('id'=>'file', 'name'=>'userfile');
							echo form_upload($data);
							?>
						<?php else : ?>
							<label for="file" class="col-sm-2 control-label"><?php echo lang('file_label');?> </label>
							<?php echo $filename ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-sm-2 control-label"><?php echo lang('title');?></label>
					<div class="col-sm-10">
						<?php
						$data	= array('id'=>'title', 'name'=>'title', 'value'=>set_value('title', $title), 'class'=>'form-control');
						echo form_input($data);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-sm-2 control-label"><?php echo lang('max_downloads');?></label>
					<div class="col-sm-10">
						<?php
						$data	= array('id'=>'max_downloads', 'name'=>'max_downloads', 'value'=>set_value('max_downloads', $max_downloads), 'class'=>'form-control');
						echo form_input($data);
						?><span class="help-inline"><?php echo lang('max_downloads_note');?></span>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
					</div>
				</div>
				
				<div class="span5 alert alert-warning">
					<?php echo sprintf(lang('file_size_warning'), ini_get('post_max_size'), ini_get('upload_max_filesize')); ?>
				</div>
			</div>


		</div>

		<!-- /panel body -->
	</div>


</form>


</div>
</div>