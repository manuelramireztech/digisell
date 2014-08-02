<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<?php if ($this->session->flashdata('error')):?>
	        <div class="alert alert-danger">
	             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	             <?php echo $this->session->flashdata('error');?>
	        </div>
	   	<?php endif;?>
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	Admin Form > Edit
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
				<form class="form-horizontal" role="form" action="<?php echo base_url('index.php').'/admin_user/save/'.$user->uid ?>" method="post">
				  <div class="form-group">
				    <label for="first_name" class="col-sm-2 control-label">First Name</label>
				    <div class="col-sm-10">
				      <input type="text" value="<?php echo $user->first_name; ?>" class="form-control" name="first_name" placeholder="First Name" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
				    <div class="col-sm-10">
				      <input type="text" value="<?php echo $user->last_name; ?>" class="form-control" name="last_name" placeholder="Last Name" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="email" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <input type="email" value="<?php echo $user->email; ?>" class="form-control" name="email" placeholder="Email" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="phone" class="col-sm-2 control-label">Phone</label>
				    <div class="col-sm-10">
				      <input type="text" value="<?php echo $user->phone; ?>" class="form-control" name="phone" placeholder="Phone">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="password" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" name="password" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="confirm_password" class="col-sm-2 control-label">Confirm Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox" name="user_status" id="user_status" <?php echo ($user->status=='enabled') ? 'checked' : '' ?> > Activate This Admin
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success">Update</button>
				    </div>
				  </div>
				</form>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>