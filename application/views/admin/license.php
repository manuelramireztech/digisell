<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	Manage License
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
		  			<?php	
						$page_links	= $this->pagination->create_links();
						if($page_links != ''):?>
						<?php echo $page_links;?>
					<?php endif;?>
		  		</div>
		  		<div class="col-md-6">
			  		<a href='#' class="btn btn-success pull-right">Add New Order & License</a>
			  	</div>
		  	</div>
		    <div class="table-responsive">
		    	<table class="table">
		    		<thead>
		    			<tr class="success">
		    				<th>Lic. #</th>
		    				<th>Cart Id</th>
		    				<th>Client [ ZIP Code ]</th>
		    				<th>Created</th>
		    				<th>Status</th>
		    				<th>Options</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php foreach($licenses as $license){ ?>
							<tr class='active'>
								<td><?php echo '# &nbsp;'.$license->license_id; ?></td>
								<td><?php echo '# &nbsp;'.$license->cart_id; ?></td>
								<td>
									<?php  
										echo $this->License->client_info($license->client_id);
									?>
								</td>
								<td><?php echo date('d-m-Y',$license->created); ?></td>
								<td><?php echo $license->status; ?></td>
								<td>
									<a href='<?php echo base_url('index.php').'/admin_license/edit/'.$license->license_id ?>' class='btn btn-default'>Manage</a>
								</td>
							</tr>
		    			<?php } ?>
		    		</tbody>
		    	</table>
		    </div>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>