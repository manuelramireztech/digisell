<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/customers/form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('customer_form') ?>
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
					<div class="col-md-8">
							<?php echo heading('<span class="label label-primary label-width">Client Information</span> - Edit Customer Information',5) ?>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('company');?></label>
							<div class="col-sm-10">
								<?php
								$data	= array('name'=>'company', 'value'=>set_value('company', $company), 'class'=>'form-control');
								echo form_input($data); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('firstname');?></label>
							<div class="col-sm-10">
								<?php
								$data	= array('name'=>'firstname', 'value'=>set_value('firstname', $firstname), 'class'=>'form-control');
								echo form_input($data); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('lastname');?></label>
							<div class="col-sm-10">
								<?php
								$data	= array('name'=>'lastname', 'value'=>set_value('lastname', $lastname), 'class'=>'form-control');
								echo form_input($data); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('email');?></label>
							<div class="col-sm-10">
								<?php
								$data	= array('name'=>'email', 'value'=>set_value('email', $email), 'class'=>'form-control');
								echo form_input($data); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('phone');?></label>
							<div class="col-sm-10">
								<?php
								$data	= array('name'=>'phone', 'value'=>set_value('phone', $phone), 'class'=>'form-control');
								echo form_input($data); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('password');?></label>
							<div class="col-sm-10">
								<?php
								$data	= array('name'=>'password', 'class'=>'form-control');
								echo form_password($data); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('confirm');?></label>
							<div class="col-sm-10">
								<?php
								$data	= array('name'=>'confirm', 'class'=>'form-control');
								echo form_password($data); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<?php $data	= array('name'=>'email_subscribe', 'value'=>1, 'checked'=>(bool)$email_subscribe);
										echo form_checkbox($data).' '.lang('email_subscribed'); ?>
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<?php
										$data	= array('name'=>'active', 'value'=>1, 'checked'=>$active);
										echo form_checkbox($data).' '.lang('active'); ?>
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('group');?></label>
							<div class="col-md-2">
								<?php echo form_dropdown('group_id', $group_list, set_value('group_id',$group_id), 'class="form-control drp"'); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
							</div>
						</div>
						<?php if($orders) { ?>
						<?php echo heading('<span class="label label-primary lable-width">Recent Orders</span> - Recent Order Activity',5) ?>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-1 control-label"></label>
							<div class="col-sm-11">
								<div class="table-responsive">
									<table class="table table-hover table-bordered">
										<thead>
											<tr class="active">
												<th><?php echo 'Order Number'; ?></th>
												<th><?php echo 'Product'; ?></th>
												<th><?php echo 'Status'; ?></th>
												<th><?php echo 'Created On'; ?></th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($orders as $order): ?>
												<tr>
													<td><?php echo $order->order_number; ?></td>
													<td>
														<?php
															echo '<a href="'.base_url('index.php').'/admin/products/form/'.$order->product_id.'">'.'#'.$order->product_id.'</a>';
														?>
													</td>
													<td><?php echo $order->status; ?></td>
													<td><?php echo $order->ordered_on; ?></td>
												</tr>
											<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>
							

						</div>
						<div class="">
						<?php echo heading('<span class="label pull-left label-primary lable-width">Recent Invoices</span> - Recent Invoices Activity',5) ?>
						
							
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-1 control-label"></label>
							<div class="col-sm-11">
								<div class="table-responsive">
									<table class="table table-hover table-bordered">
										<thead>
											<tr class="active">
												<th><?php echo 'Order Number'; ?></th>
												<th><?php echo 'Invoice'; ?></th>
												<th><?php echo 'Status'; ?></th>
												<th><?php echo 'Created On'; ?></th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($orders as $order): ?>
												<tr>
													<td><?php echo $order->order_number; ?></td>
													<td>
														<?php
															echo '<a href="'.base_url('index.php').'/admin/orders/order/'.$order->order_id.'">'.'#'.$order->order_number.' </a>';
														?>
													</td>
													<td><?php echo $order->status; ?></td>
													<td><?php echo $order->ordered_on; ?></td>
												</tr>
											<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<?php echo heading('<span class="label label-primary lable-width">Client Notes</span> - Visible to the Client',5) ?>
				</div>
				<div class="col-md-4">
					<div class="table-responsive cinfo-border">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td class="active">Total Register Balance:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Total Invoices Paid:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Total Invoices Due:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Total Invoices With Credit:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>

							</tbody>
						</table>
						<hr>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td class="active">Total Active Orders:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Total Pending Orders:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Total Suspended Orders:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Total Cancelled Orders:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Total Refunded Orders:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Total Fraud Orders:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Total Incomplete Orders:</td>
									<td width="15%" align="right">
										<?php echo anchor('#','0'); ?>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
				<?php }?>

			</div>				
				<!-- /panel body -->
			</div>

		</form>
	</div>
</div>
