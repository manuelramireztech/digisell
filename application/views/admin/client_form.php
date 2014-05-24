<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
			<?php if ($this->session->flashdata('message')):?>
                <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('message');?>
                </div>
           <?php endif;?>
           <?php if ($this->session->flashdata('error')):?>
                <div class="alert alert-danger">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('error');?>
                </div>
           <?php endif;?>
		<div class="panel">
		  	<div class="panel-heading">
			    <h3 class="panel-title">
			    	<b>Manage Client</b>&nbsp; <i class='ion-chevron-right'></i>&nbsp; <?php echo $client_info->first_name.' '.$client_info->last_name; ?> 
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
		    			<div class="well">
		    				<b><?php echo $client_info->first_name.' '.$client_info->last_name; ?></b>
		    				<?php echo ' [ ID: '.$client_info->client_id.' ]'; ?>
		    				[ <a href="<?php echo base_url('index.php').'/admin_client/edit_details/'.$client_info->client_id; ?>">edit</a> ]	<br><br>
		    				<span class='text-danger'>Credit card: </span> <a href="#" data-toggle="modal" data-target="#myModal_credit">click to view card on file</a> <br><br>
		    				<span class='text-danger'>Address:</span>
		    				<?php echo $client_info->address_1.' , '.$client_info->city.br(1).$client_info->province.' , '.$client_info->state
		    				.br(1).$client_info->country.' ('.$client_info->zip.')'; ?> <br><br>
		    				<span class='text-danger'>Phone: </span><?php echo $client_info->phone ?> <br>
		    				<span class='text-danger'>Email: </span>
		    				<?php echo $client_info->email.' ['.'<a href="#" data-toggle="modal" data-target="#myModal_email">change</a>'.']' ?>
		    			</div>
		    			<div class="well">
		    				<b>Manage Orders:</b><br><br>
		    				<i class='ion-arrow-right-a'></i> <a href="#">Add a new Order for this client</a><br>
		    				<i class='ion-arrow-right-a'></i> <a href="#">view all Orders for this client</a>
		    			</div>
		    			<div class="well">
		    				<b>Manage Invoices:</b><br><br>
		    				<i class='ion-arrow-right-a'></i> <a href="#">Add a new Invoice for this client</a><br>
		    				<i class='ion-arrow-right-a'></i> <a href="#">view all Invoices for this client</a>
		    			</div>
		    		</div>
		    		<div class="col-md-4">
		    			<div class="">
		    				<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<td class="active">Total Register Balance:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo isset($total) ? $total : '0'; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Invoices Paid:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo isset($paid) ? $paid : '0'; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Invoices Due:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo isset($due) ? $due : '0'; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Invoices With Credit:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo $credit; ?>
												</div>
											</td>
										</tr>

									</tbody>
								</table>
								<hr>
								<?php  
								$order_active = $active;
								$order_pending = $pending;
								$order_suspended = $suspended;
								$order_cancelled = $cancelled;
								$order_refunded = $refunded;
								$order_fraud = $fraud;
								$order_incomplete = $incomplete;
								?>
								<table class="table">
									<tbody>
										<tr>
											<td class="active">Total Active Orders:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo anchor('#',$order_active); ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Pending Orders:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo anchor('#',$order_pending); ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Suspended Orders:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo anchor('#',$order_suspended); ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Cancelled Orders:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo anchor('#',$order_cancelled); ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Refunded Orders:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo anchor('#',$order_refunded); ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Fraud Orders:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo anchor('#',$order_fraud); ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Incomplete Orders:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo anchor('#',$order_incomplete); ?>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
		    			</div>
		    		</div>
		    		<div class="col-md-8">
		    			<hr>
		    			<?php if($licence_info) { ?>
					  	<p class="pull-left">Recent Licence Activity</p>
					 	<input type="submit" value="View All" class="btn btn-default btn-xs pull-right">
		    			<div class="table-responsive">
		    				<table class="table table-bordered">
		    					<thead>
		    						<tr class="active">
		    							<td>Order</td>
		    							<td>Product</td>
		    							<td>Licence Key</td>
		    							<td>Status</td>
		    							<td>Created</td>
		    						</tr>
		    					</thead>
		    					<tbody>
		    						<tr>
		    							<td class='active'><?php echo '#'.$licence_info->order_id; ?></td>
		    							<td><?php echo '#'.$licence_info->product_id; ?></td>
		    							<td><?php echo '<i class="ion-document-text"></i> '.$licence_info->license_key.br(1).'<i class="ion-arrow-right-a"></i> '.$licence_info->name; ?></td>
		    							<td><?php echo $licence_info->status; ?></td>
		    							<td><?php echo date('d-m-Y',$licence_info->created); ?></td>
		    						</tr>
		    					</tbody>
		    				</table>
		    			</div>	
						<p class="pull-left">Recent Order Activity</p>
					 	<input type="submit" value="View All" class="btn btn-default btn-xs pull-right">
		    			<div class="table-responsive">
		    				<table class="table table-bordered">
		    					<thead>
		    						<tr class="active">
		    							<td>Order</td>
		    							<td>Cart</td>
		    							<td>Ordered</td>
		    							<td>Created</td>
		    						</tr>
		    					</thead>
		    					<tbody>
		    						<tr>
		    							<td class='active'><?php echo '#'.$licence_info->order_id; ?></td>
		    							<td><?php echo '#'.$licence_info->cart_id; ?></td>
		    							<td><?php echo '<i class="ion-document-text"></i> '.$licence_info->name; ?></td>
		    							<td><?php echo date('d-m-Y',$licence_info->created); ?></td>
		    						</tr>
		    					</tbody>
		    				</table>
		    			</div>
						<p class="pull-left">Recent Invoice Activity</p>
					 	<input type="submit" value="View All" class="btn btn-default btn-xs pull-right">
		    			<div class="table-responsive">
		    				<table class="table table-bordered">
		    					<thead>
		    						<tr class="active">
		    							<td>Order</td>
		    							<td>Invoice</td>
		    							<td>Ordered</td>
		    							<td>Balance</td>
		    							<td>Created</td>
		    						</tr>
		    					</thead>
		    					<tbody>
		    						<tr>
		    							<td class='active'><?php echo '#'.$licence_info->order_id; ?></td>
		    							<td><?php echo '#'.$invoice_info->invoice_id; ?></td>
		    							<td><?php echo '<i class="ion-document-text"></i> '.$licence_info->name; ?></td>
		    							<td><p class="text-success">$ <?php echo $balance; ?></p></td>
		    							<td><?php echo date('d-m-Y',$invoice_info->created); ?></td>
		    						</tr>
		    					</tbody>
		    				</table>
		    			</div>
						<hr>
						<?php } ?>
						<form action="<?php echo base_url('index.php').'/admin_client/save_client_note/'.$client_info->client_id; ?>" method="post">
						<p class="pull-left">Client Notes <span class='text-danger'>Visible to the client</span></p>
						<input type="submit" value="Save Changes" class="btn btn-default btn-xs pull-right">
						<?php
						$data	= array('name'=>'client_notes', 'value'=>set_value('client_notes', $client_info->staff_notes), 'class'=>'form-control', 'rows'=>5);
						echo form_textarea($data);
						?>
						</form>
						<br>
						<form action="<?php echo base_url('index.php').'/admin_client/save_admin_note/'.$client_info->client_id; ?>" method="post">
						<p class="pull-left">Admin Notes <span class='text-danger'>Invisible to the client</span></p>
						<input type="submit" value="Save Changes" class="btn btn-default btn-xs pull-right">
						<?php
						$data	= array('name'=>'admin_notes', 'value'=>set_value('client_notes', $client_info->notes), 'class'=>'form-control', 'rows'=>5);
						echo form_textarea($data);
						?>
						</form>
		    		</div>
		    	</div>
		  	</div>
		</div>
	</div>
</div>
<!-- Email Modal -->
<form action="<?php echo base_url('index.php').'/admin_client/change_email/'.$client_info->client_id; ?>" method="post">
<div class="modal fade" id="myModal_email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Change Email</h4>
      </div>
      <div class="modal-body">
        <b><?php echo $client_info->first_name.' '.$client_info->last_name; ?></b>
		    				<?php echo ' [ '.$client_info->email.' ]'; ?><br><br>
		<input type="text" name="email_id" id="email_id" class='form-control' placeholder='Change email'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="" method="post">
<div class="modal fade" id="myModal_credit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">View/Change credit card</h4>
      </div>
      <div class="modal-body">
        <b>Card Number</b>

        <div class="col-md-10">
        	<input type="text" name="email_id" id="email_id" class='form-control' placeholder='Credit Card Number'>
        </div>	
		<br><br><br><br>
		<b>Expires</b>
		<div class="col-md-12">
			<div class="col-md-5">
				<input type="text" name="email_id" id="email_id" class='form-control' placeholder='Month'>
			</div>
			
			<div class="col-md-5">
				<input type="text" name="email_id" id="email_id" class='form-control' placeholder='Year'>
			</div>
		</div>
		<br><br><br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<?php include('partials_admin/footer.php'); ?>
<script>
	$(document).ready(function(){
		$('#myModal_email').modal('hide');
		$('#myModal_credit').modal('hide');
	});
</script>