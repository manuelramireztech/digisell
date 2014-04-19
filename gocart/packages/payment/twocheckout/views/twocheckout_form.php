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
	<label class="col-sm-2 control-label"><?php echo lang('currency') ?></label>
	<div class="col-sm-10">
		<input class="form-control" name="currency" value="<?php echo @$settings["currency"] ?>" /> <?php echo lang('currency_label') ?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('sid') ?></label>
	<div class="col-sm-10">
		<input class="form-control" name="sid" type="text" value="<?php echo @$settings["sid"] ?>" size="50" >
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('secret') ?></label>
	<div class="col-sm-10">
		<input class="form-control" name="secret" type="text" value="<?php echo @$settings["secret"] ?>" size="50">
	</div>
</div>
