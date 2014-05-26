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
		  	<?php 
		  		$res = $license->license_array;
		  		echo $res;
		  		
		  		
		  		var_dump(unserialize($res));
		  	?>
		    <form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">License is for product</label>
			    <div class="col-sm-10">
			      <i class='fa fa-search drp'></i>&nbsp;
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox"> Remember me
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Sign in</button>
			    </div>
			  </div>
			</form>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>