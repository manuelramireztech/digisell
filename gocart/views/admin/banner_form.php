<div class="row">
	<div class="col-md-12">
		<?php
		$name			= array('name'=>'name', 'value' => set_value('name', $name), 'class'=>'form-control');
		$enable_date	= array('name'=>'enable_date', 'id'=>'enable_date', 'value'=>set_value('enable_on', set_value('enable_date', $enable_date)), 'class'=>'form-control');
		$disable_date	= array('name'=>'disable_date', 'id'=>'disable_date', 'value'=>set_value('disable_on', set_value('disable_date', $disable_date)), 'class'=>'form-control');
		$f_image		= array('name'=>'image', 'id'=>'image', 'class'=>'form-control');
		$link			= array('name'=>'link', 'value' => set_value('link', $link), 'class'=>'form-control');	
		$new_window		= array('name'=>'new_window', 'value'=>1, 'checked'=>set_checkbox('new_window', 1, $new_window), 'class'=>'form-input');
		?>
		
		<?php echo form_open_multipart(config_item('admin_folder').'/banners/banner_form/'.$banner_collection_id.'/'.$banner_id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('banner_form') ?>
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
					<label for="name" class="col-sm-2 control-label"><?php echo lang('name');?></label>
					<div class="col-sm-10">
						<?php echo form_input($name); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="link" class="col-sm-2 control-label"><?php echo lang('link');?></label>
					<div class="col-sm-10">
						<?php echo form_input($link); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="enable_date" class="col-sm-2 control-label"><?php echo lang('enable_date');?></label>
					<div class="col-sm-10">
						<?php echo form_input($enable_date); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="disable_date" class="col-sm-2 control-label"><?php echo lang('disable_date');?></label>
					<div class="col-sm-10">
						<?php echo form_input($disable_date); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<label class="checkbox">
							<?php echo form_checkbox($new_window); ?> <?php echo lang('new_window');?>
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="image" class="col-sm-2 control-label"><?php echo lang('image');?></label>
					<div class="col-sm-10">
						<?php echo form_upload($f_image); ?>

						<?php if($banner_id && $image != ''):?>
							<div style="text-align:center; padding:5px; border:1px solid #ccc;"><img src="<?php echo base_url('uploads/'.$image);?>" alt="current"/><br/><?php echo lang('current_file');?></div>
						<?php endif;?>
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
	<script type="text/javascript">
		$(document).ready(function() {
			$("#enable_date").datepicker({ dateFormat: 'mm-dd-yy'});
			$("#disable_date").datepicker({ dateFormat: 'mm-dd-yy'});
		});

		$('form').submit(function() {
			$('.btn').attr('disabled', true).addClass('disabled');
		});
	</script>

</div>
</div>