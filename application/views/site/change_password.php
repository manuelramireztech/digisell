<?php include('partials_front/header.php'); ?>
<div class="row">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-6">
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
		    	Change Password <i class="fa fa-chevron-right"></i> 
		    	<span class="text-info"><?php echo $client_info->first_name.nbs(2).$client_info->last_name; ?></span>
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
				<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php').'/client_profile/save_password/'.$client_info->client_id; ?>">
				  <div class="form-group">
				    <label for="password" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" name="password" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="confirm_password" class="col-sm-2 control-label">Confirm</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success">Save</button>
				    </div>
				  </div>
				</form>
		  </div>
		</div>
	</div>
	<div class="col-md-3">
		
	</div>
</div>
<?php include('partials_front/footer.php'); ?>