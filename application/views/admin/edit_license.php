<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	<a href='<?php echo base_url('index.php').'/admin_license' ?>'><b>Manage License</b></a> &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i> <span class='text-danger'>Edit License: #<?php echo $license->license_id; ?></span>
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
		    <form class="form-horizontal" role="form">
				<div class="table-responsive col-md-6">
					<table class="table">
				  		<tbody>
				  			<tr>
				  				<td class="active">License is for product :</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License Created On :</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License Activated On :</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License Expires On :</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">Licensing Type :</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License is for product</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License is for product</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License is for product</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License is for product</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License is for product</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License is for product</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License is for product</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License is for product</td>
				  				<td class='dash-border'></td>
				  			</tr>

				  		</tbody>
				  	</table>
				</div>	  
			  
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-success">Save Changes</button>
			    </div>
			  </div>
			</form>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>