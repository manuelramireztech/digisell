<div class="row">
	<div class="col-md-12">
		


<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('form_checkout') ?>
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
			<?php include('order_details.php');?>
				<?php echo form_open('checkout/step_2');?>
	<div class="row">
		<div class="col-md-6">
				<h2><?php echo lang('shipping_method');?></h2>
				<div class="alert alert-error" id="shipping_error_box" style="display:none"></div>
				<table class="table">
					<?php
					foreach($shipping_methods as $key=>$val):
						$ship_encoded	= md5(json_encode(array($key, $val)));
					
						if($ship_encoded == $shipping_code)
						{
							$checked = true;
						}
						else
						{
							$checked = false;
						}
					?>
					<tr style="cursor:pointer">
						<td style="width:16px;">
							<label class="radio"><?php echo form_radio('shipping_method', $ship_encoded, set_radio('shipping_method', $ship_encoded, $checked), 'id="s'.$ship_encoded.'"');?></label>
						</td>
						<td onclick="toggle_shipping('s<?php echo $ship_encoded;?>');"><?php echo $key;?></td>
						<td onclick="toggle_shipping('s<?php echo $ship_encoded;?>');"><strong><?php echo $val['str'];?></strong></td>
					</tr>
					<?php endforeach;?>
				</table>
		</div>
		<div class="col-md-6">
			<h2><?php echo lang('shipping_instructions')?></h2>
			<?php echo form_textarea(array('name'=>'shipping_notes', 'value'=>set_value('shipping_notes', $this->go_cart->get_additional_detail('shipping_notes')), 'class'=>'col-md-6 form-control', 'style'=>'height:75px;'));?>
		</div>
	</div>
	<div class="col-sm-3">
		<input class="btn btn-block btn-primary" type="submit" value="<?php echo lang('form_continue');?>"/>	
	</div>
	
</form>
				
			</div>

			<!-- /panel body -->
		</div>

<script>
	function toggle_shipping(key)
	{
		var check = $('#'+key);
		if(!check.attr('checked'))
		{
			check.attr('checked', true);
		}
	}
</script>
	</div>
</div>