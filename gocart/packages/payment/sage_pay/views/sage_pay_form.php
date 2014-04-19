<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
 /**
* GoCart Sage Pay Admin Form
*
* This class is part of the sage pay payment module.
* 
*
* @package GoCart Sage Pay payment module
* @subpackage 
* @categoryPackages/Payment
* @authorswicks@devicesoftware.com
* @version 0.2
* 
*/


 //enabled
 $enabled_options = array(0 => lang('disabled'), 1 => lang('enabled'));

 //protocol (save hidden to keep in settings)
 echo form_hidden('vps_protocol', $settings['vps_protocol']);

 //system
 //$service_options = array('direct' => lang('direct'), 'form' => lang('form'), 'server' => lang('server'));
 // currently only direct - form and server to follow...
 $service_options = array('direct' => lang('direct'));
 //mode
 $mode_options = array('simulator' => lang('simulator'), 'test' => lang('test'), 'live' => lang('live'));
 //type
 $type_options = array('PAYMENT' => lang('payment'), 'DEFFERRED' => lang('deferred'), 'AUTHENTICATE' => lang('authenticate'));
 //available card types
 $available_card_types = explode(',', SAGE_PAY_CARD_TYPES);
 for ($i=0; $i < count($available_card_types); $i+=2) 
 $acts[$available_card_types[$i]]=$available_card_types[$i+1]; 
 //currency
 $available_currency_types = explode(',', SAGE_PAY_CURRENCY);
 for ($i=0; $i < count($available_currency_types); $i+=2) 
 $currency_options[$available_currency_types[$i]]=$available_currency_types[$i+1]; 

?>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('enabled'); ?></label>
	<div class="col-sm-10">
		<?php echo form_dropdown('enabled', $enabled_options, $settings['enabled'], 'class="input-sm drp"'); ?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('system'); ?></label>
	<div class="col-sm-10">
		<?php echo form_dropdown('service', $service_options, $settings['service'], 'class="input-sm drp"'); ?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('vps_protocol'); ?></label>
	<div class="col-sm-10">
		 <p><?php echo $settings['vps_protocol']; ?></p>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('vendor_name'); ?></label>
	<div class="col-sm-4" style="margin-left:15px">
		<?php echo form_input('vendor', $settings['vendor'], 'class="form-control inpgrp"'); ?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('supported_cards'); ?></label>
	<div class="col-sm-10">
		<?php foreach($acts as $key=>$value):?>
		<label class="checkbox">
			<?php echo form_checkbox('card_types[]', $key, isset($settings['card_types'][$key]));?>
			<?php echo $value;?>
		</label>
	<?php endforeach;?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('mode'); ?></label>
	<div class="col-sm-10">
		<?php echo form_dropdown('mode', $mode_options, $settings['mode'], 'class="input-sm drp"'); ?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('type'); ?></label>
	<div class="col-sm-10">
		<?php echo form_dropdown('tx_type', $type_options, $settings['tx_type'], 'class="input-sm drp"'); ?>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"><?php echo lang('currency'); ?></label>
	<div class="col-sm-10">
		<?php echo form_dropdown('currency', $currency_options, $settings['currency'], 'class="input-sm drp"'); ?>
	</div>
</div>
