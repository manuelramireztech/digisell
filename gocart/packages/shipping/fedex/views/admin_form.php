<div class="col-md-3">
	<h4><span class="label label-primary label-lg">Account Credentials</span></h4>
	<div class="form-group">
		<label for="" class=""><?php echo lang('fedex_key');?></label>
		<?php echo form_input('key', $key, 'class="form-control"');?>
	</div>
	<div class="form-group">
		<label for="" class=""><?php echo lang('fedex_account');?></label>
		<?php echo form_input('shipaccount', $shipaccount, 'class="form-control"');?>
	</div>
	<div class="form-group">
		<label for="" class=""><?php echo lang('fedex_meter');?></label>
		<?php echo form_input('meter', $meter, 'class="form-control"');?>
		<?php echo form_input('password', $password, 'class="form-control"');?>
	</div>
</div>
<div class="col-md-3">
	<h4><span class="label label-primary label-lg"><?php echo lang('fedex_services');?></span></h4>
	<div class="form-group">
		<?php  foreach($service_list as $id=>$opt):?>
			<label class="checkbox">
				<input type="checkbox" name="service[]" value="<?php echo $id;?>" <?php echo (in_array($id, $service))?'checked="checked"':'';?> />
			<?php echo $opt;?>
		</label>
		<?php endforeach;?>
	</div>
</div>
<div class="col-md-3">
	<h4><span class="label label-primary label-lg"><?php echo lang('container');?></span></h4>
	<div class="form-group">
		<?php echo form_dropdown('package', $package_types, $package, 'class="input-sm drp"');?>
	</div>
	<div class="form-group">
		<span class="label label-info label-lg"><?php echo lang('dimensions');?></span></br>
	</div>
	<div class="form-group">
		<?php echo lang('height');?> (<?php echo $this->config->item('dimension_unit');?>)
		<?php echo form_input('height', $height, 'class="form-control"');?>
	</div>
	<div class="form-group">
		<?php echo lang('width');?> (<?php echo $this->config->item('dimension_unit');?>)
		<?php echo form_input('width', $width, 'class="form-control"');?>
	</div>
	<div class="form-group">
		<?php echo lang('length');?> (<?php echo $this->config->item('dimension_unit');?>)
		<?php echo form_input('length', $length, 'class="form-control"');?>
	</div>
</div>
<div class="col-md-3">
	<h4><span class="label label-primary label-lg"><?php echo lang('packageopts') ?></span></h4>
	<div class="form-group">
		<label><?php echo lang('dropofftype') ?></label><br>
		<?php echo form_dropdown('dropofftype', $dropoff_types, $dropofftype, 'class="input-sm drp"');?>
	</div>
	<div class="form-group">
		<label><?php echo lang('fee');?></label><br>
		<?php echo form_dropdown('handling_method', array('Price'=>'Price', 'Percent'=>'Percent'), $handling_method, 'class="input-sm drp"');?>
	</div>
	<div class="form-group">
		<label><?php echo lang('fee_amount') ?></label><br>
		<?php echo form_input('handling_fee', $handling_amount, 'class="form-control"') ?>
	</div>
	<div class="form-group">
		<label><?php echo lang('insurance');?> <?php echo form_checkbox(array(
									'name' => 'insurance',
									'value' => 'yes',
									'checked' => ($insurance=='yes')
								)); ?> </label>
	</div>
	<div class="form-group">
		<label><?php echo lang('enabled');?></label>
		<?php echo form_dropdown('enabled', array(lang('disabled'), lang('enabled')), $enabled, 'class="input-sm drp"');?>
	</div>
</div>
