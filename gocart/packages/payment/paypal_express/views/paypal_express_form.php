<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('enabled');?></label>
	<div class="col-sm-10">
		<select name="enabled" class="input-sm drp">
			<option value="1"<?php echo((bool)$settings['enabled'])?' selected="selected"':'';?>><?php echo lang('enabled');?></option>
			<option value="0"<?php echo((bool)$settings['enabled'])?'':' selected="selected"';?>><?php echo lang('disabled');?></option>
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('test_mode_label') ?></label>
	<div class="col-sm-10">
		<select name="SANDBOX" class="input-sm drp">
			<option value="1"<?php echo((bool)$settings['SANDBOX'])?' selected="selected"':'';?>><?php echo lang('test_mode');?></option>
			<option value="0"<?php echo((bool)$settings['SANDBOX'])?'':' selected="selected"';?>><?php echo lang('live_mode');?></option>
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('pp_username') ?></label>
	<div class="col-sm-10">
		<input class="form-control" name="username" type="text" value="<?php echo @$settings["username"] ?>" size="50" >
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('pp_password') ?></label>
	<div class="col-sm-10">
		<input class="form-control" name="password" type="text" value="<?php echo @$settings["password"] ?>" size="50">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('pp_key') ?></label>
	<div class="col-sm-10">
		<input class="form-control" name="signature" type="text" value="<?php echo @$settings["signature"] ?>" size="50" />
	</div>
</div>

