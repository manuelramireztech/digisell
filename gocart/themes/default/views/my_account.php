<div class="row">
	<div class="col-md-12">
		

		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
				<?php echo lang('my_account') ?>
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
				<?php echo form_open('secure/my_account','class="form-horizontal"'); ?>
				<?php
				$company	= array('id'=>'company', 'class'=>'form-control', 'name'=>'company', 'value'=> set_value('company', $customer['company']));
				$first		= array('id'=>'firstname', 'class'=>'form-control', 'name'=>'firstname', 'value'=> set_value('firstname', $customer['firstname']));
				$last		= array('id'=>'lastname', 'class'=>'form-control', 'name'=>'lastname', 'value'=> set_value('lastname', $customer['lastname']));
				$email		= array('id'=>'email', 'class'=>'form-control', 'name'=>'email', 'value'=> set_value('email', $customer['email']));
				$phone		= array('id'=>'phone', 'class'=>'form-control', 'name'=>'phone', 'value'=> set_value('phone', $customer['phone']));

				$password	= array('id'=>'password', 'class'=>'form-control', 'name'=>'password', 'value'=>'');
				$confirm	= array('id'=>'confirm', 'class'=>'form-control', 'name'=>'confirm', 'value'=>'');
				?>
				<div class="row">
					<div class="col-md-6">
						<h2><span class="label label-info"><?php echo lang('account_information');?></span></h2>
							<div class="row">
								<div class="col-md-6">
									<label for="company"><?php echo lang('account_company');?></label>
									<?php echo form_input($company);?>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-3">
									<label for="account_firstname"><?php echo lang('account_firstname');?></label>
									<?php echo form_input($first);?>
								</div>

								<div class="col-md-3">
									<label for="account_lastname"><?php echo lang('account_lastname');?></label>
									<?php echo form_input($last);?>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<label for="account_email"><?php echo lang('account_email');?></label>
									<?php echo form_input($email);?>
								</div>

								<div class="col-md-3">
									<label for="account_phone"><?php echo lang('account_phone');?></label>
									<?php echo form_input($phone);?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<label class="checkbox">
										<input type="checkbox" name="email_subscribe" value="1" <?php if((bool)$customer['email_subscribe']) { ?> checked="checked" <?php } ?>/> <?php echo lang('account_newsletter_subscribe');?>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div style="margin:30px 0px 10px; text-align:center;">
										<strong><?php echo lang('account_password_instructions');?></strong>
									</div>
								</div>
							</div>

							<div class="row">	
								<div class="col-md-3">
									<label for="account_password"><?php echo lang('account_password');?></label>
									<?php echo form_password($password);?>
								</div>

								<div class="col-md-3">
									<label for="account_confirm"><?php echo lang('account_confirm');?></label>
									<?php echo form_password($confirm);?>
								</div>
							</div>
							<div class="form-input">
								<div class="col-md-6">
									<br><input type="submit" value="<?php echo lang('form_submit');?>" class="btn btn-primary" />
								</div>
							</div>
							</form>
					</div>
					<div class="col-md-6">
						<h2><span class="label label-info"><?php echo lang('address_manager');?></span></h2>
						<div class="pull-right" style="margin-bottom:10px;">
							<input type="button" class="btn btn-info" rel="0" value="<?php echo lang('add_address');?>"/>
						</div>
						<?php if(count($addresses) > 0):?>
							<table class="table table-bordered table-striped">
								<?php
								$c = 1;
								foreach($addresses as $a):?>
								<tr id="address_<?php echo $a['id'];?>">
									<td width="30%">
										<?php
										$b	= $a['field_data'];
										echo format_address($b, true);
										?>
									</td>
									<td>
										<div class="row-fluid">
											<div class="col-md-12">
												<div class="btn-group pull-right">
													<input type="button" class="btn btn-warning sps" rel="<?php echo $a['id'];?>" value="<?php echo lang('form_edit');?>" />
													<input type="button" class="btn btn-danger sps" rel="<?php echo $a['id'];?>" value="<?php echo lang('form_delete');?>" />
												</div>
											</div>
										</div>
										<div class="row-fluid">
											<div class="col-md-12">
												<div class="pull-right" style="padding-top:10px;">
													<input type="radio" name="bill_chk" onclick="set_default(<?php echo $a['id'] ?>, 'bill')" <?php if($customer['default_billing_address']==$a['id']) echo 'checked="checked"'?> /> <?php echo lang('default_billing');?>
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ship_chk" onclick="set_default(<?php echo $a['id'] ?>,'ship')" <?php if($customer['default_shipping_address']==$a['id']) echo 'checked="checked"'?>/> <?php echo lang('default_shipping');?>
												</div>
											</div>
										</div>
									</td>
								</tr>
							<?php endforeach;?>
						</table>
					<?php endif;?>
					</div>
				</div>	
				

			

		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h2><span class="label label-info"><?php echo lang('order_history');?></span></h2>
				</div>
				<?php if($orders):
				echo $orders_pagination;
				?>
				<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th><?php echo lang('order_date');?></th>
							<th><?php echo lang('order_number');?></th>
							<th><?php echo lang('order_status');?></th>
						</tr>
					</thead>

					<tbody>
						<?php
						foreach($orders as $order): ?>
						<tr>
							<td>
								<?php $d = format_date($order->ordered_on); 

								$d = explode(' ', $d);
								echo $d[0].' '.$d[1].', '.$d[3];

								?>
							</td>
							<td><?php echo $order->order_number; ?></td>
							<td><?php echo $order->status;?></td>
						</tr>

					<?php endforeach;?>
				</tbody>
			</table>
			</div>
		<?php else: ?>
			<?php echo lang('no_order_history');?>
		<?php endif;?>
	</div>
</div>
<div id="address-form-container" class="hide">
</div>
</div>
</div>
</div>

<!-- /panel body -->
</div>


<script>
	$(document).ready(function(){
		$('.delete_address').click(function(){
			if($('.delete_address').length > 1)
			{
				if(confirm('<?php echo lang('delete_address_confirmation');?>'))
				{
					$.post("<?php echo site_url('secure/delete_address');?>", { id: $(this).attr('rel') },
						function(data){
							$('#address_'+data).remove();
							$('#address_list .my_account_address').removeClass('address_bg');
							$('#address_list .my_account_address:even').addClass('address_bg');
						});
				}
			}
			else
			{
				alert('<?php echo lang('error_must_have_address');?>');
			}	
		});

		$('.edit_address').click(function(){
			$.post('<?php echo site_url('secure/address_form'); ?>/'+$(this).attr('rel'),
				function(data){
					$('#address-form-container').html(data).modal('show');
				}
				);
		});
	});


	function set_default(address_id, type)
	{
		$.post('<?php echo site_url('secure/set_default_address') ?>/',{id:address_id, type:type});
	}


</script>