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
		    
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>