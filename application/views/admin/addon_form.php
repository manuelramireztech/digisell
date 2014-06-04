<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
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
		    	Digisell Addons
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
		  	<form action="" method="post" class="form-horizontal">
		  		
		  	</form>		
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>