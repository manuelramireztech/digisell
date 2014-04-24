<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('form_checkout') ?>
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
				<div class="table-responsive">
					<?php include('order_details.php');?>
		<?php include('summary.php');?>

		<div class="form-group row">
			<div class="col-md-1">
				<a class="btn btn-primary btn-large btn-block" href="<?php echo site_url('checkout/place_order');?>"><?php echo lang('submit_order');?></a>
			</div>
		</div>
				
			</div>

			<!-- /panel body -->
		</div>
	
		
	</div>
</div>