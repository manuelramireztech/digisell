<div class="row">
	<div class="col-md-12">
		<script type="text/javascript">
			$(function(){
				$("#datepicker1").datepicker({dateFormat: 'mm-dd-yy', altField: '#datepicker1_alt', altFormat: 'yy-mm-dd'}).attr('readonly', 'readonly');
				$("#datepicker2").datepicker({dateFormat: 'mm-dd-yy', altField: '#datepicker2_alt', altFormat: 'yy-mm-dd'}).attr('readonly', 'readonly');
			});
		</script>

		<?php echo form_open($this->config->item('admin_folder').'/coupons/form/'.$id, 'class="form-horizantal"'); ?>
		<div class="alert alert-info" style="text-align:center;">
			<strong><?php echo sprintf(lang('times_used'), @$num_uses);?></strong>
		</div>
		
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('coupon_form') ?>
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
				<div class="row">
					<div class="col-md-6">
						
								<div class="form-group">
									<label for="code"><?php echo lang('coupon_code');?></label>
									<?php
									$data	= array('name'=>'code', 'value'=>set_value('code', $code), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
								<div class="form-group">
									<label for="max_uses"><?php echo lang('max_uses');?></label>
									<?php
									$data	= array('name'=>'max_uses', 'value'=>set_value('max_uses', $max_uses), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
								<div class="form-group">
									<label for="max_product_instances"><?php echo lang('limit_per_order')?></label>
									<?php
									$data	= array('name'=>'max_product_instances', 'value'=>set_value('max_product_instances', $max_product_instances), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
								<div class="form-group">
									<label for="start_date" class="col-sm-3 control-label"><?php echo lang('enable_on');?></label>
									<div class="col-sm-3">
									<?php
									$data	= array('id'=>'datepicker1', 'value'=>set_value('start_date', reverse_format($start_date)), 'class'=>'form-control');
									echo form_input($data);
									?>
									</div>
									<input type="button" value="Clear" class="btn" onclick="$('#datepicker1_alt').val('');$('#datepicker1').val('');" />
									<input type="hidden" name="start_date" value="<?php echo set_value('start_date', $start_date) ?>" id="datepicker1_alt" readonly />
								</div>
								<div class="form-group">
									<label for="end_date" class="col-sm-3 control-label"><?php echo lang('disable_on');?></label>
									<div class="col-sm-3">
									<?php
									$data	= array('id'=>'datepicker2', 'value'=>set_value('end_date', reverse_format($end_date)), 'class'=>'form-control');
									echo form_input($data);
									?>
									</div>
									<input type="button" value="Clear"  class="btn" onclick="$('#datepicker2_alt').val('');$('#datepicker2').val('');" />
									<input type="hidden" name="end_date" value="<?php echo set_value('end_date', $end_date) ?>" id="datepicker2_alt" readonly />
								</div>	
								<div class="form-group">
									<label for="reduction_target" class="col-sm-3 control-label"><?php echo lang('coupon_type');?></label>
									<div class="col-sm-3">
									<?php
									$options = array(
										'price'  => lang('price_discount'),
										'shipping' => lang('free_shipping')
										);
									echo form_dropdown('reduction_target', $options,  $reduction_target, 'id="gc_coupon_type" class="input-sm"');
									?>
									</div>
								</div>
								<div class="form-group">
									<label for="reduction_amount" class="col-sm-3 control-label"><?php echo lang('reduction_amount')?></label>
									<div class="col-sm-3">
										
											<?php	$options = array(
												'percent'  => lang('percentage'),
												'fixed' => lang('fixed')
												);
											echo ' '.form_dropdown('reduction_type', $options,  $reduction_type, 'class="span2"');
											?>
										
											<?php
											$data	= array('id'=>'reduction_amount', 'name'=>'reduction_amount', 'value'=>set_value('reduction_amount', $reduction_amount), 'class'=>'span1');
											echo form_input($data);?>
										
									</div>
								</div>	

									
									
								
							

						<div class="form-actions">
							<button type="submit" class="btn btn-primary"><?php echo lang('save');?></button>
						</div>
					</div>
					<div class="col-md-6 pull-left">
						<div class="offset1 well">
							<?php
							$options = array(
								'1' => lang('apply_to_whole_order'),
								'0' => lang('apply_to_select_items')
								);
							echo form_dropdown('whole_order_coupon', $options,  set_value(0, $whole_order_coupon), 'id="gc_coupon_appliesto_fields"');
							?>
							<div id="gc_coupon_products">
								<table width="100%" border="0" style="margin-top:10px;" cellspacing="5" cellpadding="0">
									<?php echo $product_rows; ?>
								</table>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>

			<!-- /panel body -->
		</div>




		
	</form>

	<script type="text/javascript">
		$('form').submit(function() {
			$('.btn').attr('disabled', true).addClass('disabled');
		});

		$(document).ready(function(){
			$("#gc_tabs").tabs();

			if($('#gc_coupon_type').val() == 'shipping')
			{
				$('#gc_coupon_price_fields').hide();
			}

			$('#gc_coupon_type').bind('change keyup', function(){
				if($(this).val() == 'price')
				{
					$('#gc_coupon_price_fields').show();
				}
				else
				{
					$('#gc_coupon_price_fields').hide();
				}
			});

			if($('#gc_coupon_appliesto_fields').val() == '1')
			{
				$('#gc_coupon_products').hide();
			}

			$('#gc_coupon_appliesto_fields').bind('change keyup', function(){
				if($(this).val() == 0)
				{
					$('#gc_coupon_products').show();
				}
				else
				{
					$('#gc_coupon_products').hide();
				}
			});
		});

	</script>
</div>
</div>