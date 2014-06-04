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
		  <?php  
		  	$lic = unserialize(html_entity_decode($license->license_array));
		  ?>
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
				  				<td class='dash-border'><?php echo date('d-m-Y H:i:s',$license->created) ?></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License Activated On :</td>
				  				<td class='dash-border'><?php echo date('d-m-Y H:i:s',$license->activated) ?></td>
				  			</tr>
				  			<tr>
				  				<td class="active">License Expires On :</td>
				  				<td class='dash-border'>
				  					<?php echo ($license->expires=='never') ? 'Never Expires' : $license->expires ?>
				  				</td>
				  			</tr>
				  			<tr>
				  				<td class="active">Licensing Type :</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">Licensing Method:</td>
				  				<td class='dash-border'><?php echo $lic['license_method'] ?></td>
				  			</tr>
				  			<tr>
				  				<td class="active">Enable DNS Spoof Detection:</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">Server Clustering Support:</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">E-mail Options:</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  			<tr>
				  				<td class="active">Modify License Status:</td>
				  				<td class='dash-border'></td>
				  			</tr>
				  		</tbody>
				  	</table>
				  	<table class="table">
				  		<tbody>
				  			<tr>
				  				<td class='active'>
				  					Manage License Key <span class='pull-right'><a href="#" class='btn btn-xs btn-default'>Quick Save</a></span><br>
				  					<textarea name="license_key" id="license_key" cols="2" style="width:100%;margin-top:5px;"><?php echo $license->license_key ?></textarea>
				  				</td>
				  			</tr>
				  			<tr>
				  				<td class='active'>
				  					Valid Registered Host(s) <span class='text-danger pull-right'>Use Comma Seperated Format</span><br>
				  					<textarea name="reg_host" id="reg_host" cols="2" style="width:100%;margin-top:5px;"></textarea>
				  				</td>
				  			</tr>
				  			<tr>
				  				<td class='active'>
				  					Valid Registered Mac Addresse(s) <span class='text-danger pull-right'>Use Comma Seperated Format</span><br>
				  					<textarea name="reg_mac" id="reg_mac" cols="2" style="width:100%;margin-top:5px;"></textarea>
				  				</td>
				  			</tr>
				  			<tr>
				  				<td class='active'>
				  					Custom Field(s) <span class='text-danger pull-right'>example: copyright_removal|yes, variable|value</span><br>
				  					<textarea name="reg_mac" id="reg_mac" cols="2" style="width:100%;margin-top:5px;"></textarea>
				  				</td>
				  			</tr>
				  			<tr>
				  				<td class='active'>
				  					License Notes <br>
				  					<textarea name="reg_mac" id="reg_mac" cols="2" style="width:100%;margin-top:5px;"></textarea>
				  				</td>
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
			<?php var_dump($lic); ?>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>