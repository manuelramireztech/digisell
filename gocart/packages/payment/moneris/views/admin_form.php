<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('enabled');?></label>
	<div class="col-sm-10">
		<select name="enabled" class="input-sm drp">
			<option value="1" <?php echo((bool)$settings['enabled'])?' selected="selected"':'';?>><?php echo lang('enabled');?></option>
			<option value="0" <?php echo((bool)$settings['enabled'])?'':' selected="selected"';?>><?php echo lang('disabled');?></option>
		</select>
	</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label"><?php echo lang('mode');?></label>
	<div class="col-sm-10">	
		<select name="mode" class="input-sm drp">
			<option value="test" <?php echo($settings['mode']=='test')?'selected="selected"':'';?>><?php echo lang('test_mode');?></option>
			<option value="production" <?php echo($settings['mode']!='production')?'':'selected="selected"';?>><?php echo lang('production');?></option>
		</select>
	</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label"><?php echo lang('site_id') ?></label>
	<div class="col-sm-10">
		<?php
			echo form_input('site_id', $settings['site_id'], 'class="form-control"');
		?>
	</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label"><?php echo lang('api_key') ?></label>
	<div class="col-sm-10">
		<?php
			echo form_input('api_key', $settings['api_key'], 'class="form-control"');
		?>
	</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label"><?php echo lang('descriptor') ?></label>
	<div class="col-sm-10">
		<?php
			echo form_input('descriptor', $settings['descriptor'], 'class="form-control"');
		?>
	</div>
</div>