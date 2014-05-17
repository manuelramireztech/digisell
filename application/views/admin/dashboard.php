<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	PHP Audit News & Information
		    	<div class="pull-right">
		    		Updated : <?php echo $news->date; ?>
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
		    	PHP Audit News & Information
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
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Pending Orders:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Suspended Orders:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Cancelled Orders:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Refunded Orders:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Fraud Orders:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Incomplete Orders:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',0); ?>
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
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Invoices Paid:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Invoices Due:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Invoices With Credit:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',0); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Clients In DB:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',$total_clients); ?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="active">Total Admins In DB:</td>
								<td width="15%" align="right">
									<div class="dash-border">
										<?php echo anchor('#',$total_admins); ?>
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