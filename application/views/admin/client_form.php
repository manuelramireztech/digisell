<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
			<?php if ($this->session->flashdata('message')):?>
                <div class="alert alert-info">
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
			    	<b>Manage Client</b> <i class='ion-arrow-right-c'></i> <?php echo $client_info->first_name.' '.$client_info->last_name; ?> 
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
		    				[ <a href="#">edit</a> ]	<br><br>
		    				<span class='text-danger'>Credit card: </span> <a href="#">click to view card on file</a> <br><br>
		    				<span class='text-danger'>Address:</span>
		    				<?php echo $client_info->address_1.' , '.$client_info->city.br(1).$client_info->province.' , '.$client_info->state
		    				.br(1).$client_info->country.' ('.$client_info->zip.')'; ?> <br><br>
		    				<span class='text-danger'>Phone: </span><?php echo $client_info->phone ?> <br>
		    				<span class='text-danger'>Email: </span>
		    				<?php echo $client_info->email.' ['.'<a href="#" data-toggle="modal" data-target="#myModal_email">change</a>'.']' ?>
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
													<?php echo '0'; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Invoices Paid:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo '0'; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Invoices Due:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo '0'; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="active">Total Invoices With Credit:</td>
											<td width="15%" align="right">
												<div class="dash-border">
													<?php echo '0'; ?>
												</div>
											</td>
										</tr>

									</tbody>
								</table>
								<hr>
								<?php  
								$order_active = 0;
								$order_pending = 0;
								$order_suspended = 0;
								$order_cancelled = 0;
								$order_refunded = 0;
								$order_fraud = 0;
								$order_incomplete = 0;
								?>
								<table class="table table-bordered">
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
<?php include('partials_admin/footer.php'); ?>
<script>
	$(document).ready(function(){
		$('#myModal_email').modal('hide');
	});
</script>