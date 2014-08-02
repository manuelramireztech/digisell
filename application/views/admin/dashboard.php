<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	PHP Audit News
		    	<div class="pull-right">
		    		<?php $date_format = $this->Config->get_data(); ?>
		    		Updated : <?php echo date($date_format->date_format, $news->date); ?>
		    	</div>	
		    </h3>
		    
		  </div>
		  <div class="panel-body">
		    <?php echo $news->news; ?>
		  </div>
		</div>
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	PHP Audit Information
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
		  	<div class="col-md-6">
		  		<div class="table-responsive">
			    	<table class="table ">
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
		  	<div class="col-md-6">
		  		<div class="table-responsive">
		  			<table class="table">
						<tbody>
							<tr>
								<td class="active">Total Register Balance:<br><span class="text-danger">Ignoring Multi-Currency</span></td>
								<td width="15%" align="right">
									<div class="dash-border">
										<span class="text-danger"><?php echo heading($balance,4); ?></span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Invoices Paid:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',$total_invoice_paid); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Invoices Due:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',$total_invoice_due); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Invoices With Credit:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',$total_invoice_credit); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Clients In DB:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('admin_client',$total_clients); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Admins In DB:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('admin_user',$total_admins); ?>
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
<?php include('partials_admin/footer.php'); ?>