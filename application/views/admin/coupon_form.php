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
		    	Manage Coupons &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i>
		    	<?php 
		    		echo ($coupon) ? 'Edit Coupon&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;'.$coupon->coupon_code : 'Add Coupon' 
		    	?>
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
		  	  <div class="col-md-10">
		  	  	<?php $code = ($coupon) ? $coupon->coupon_code : ''; ?>
		  		<form action='<?php echo base_url('index.php').'/admin_coupon/add_new/'.$code ?>' class="form-horizontal" method='post' role="form">
					<div class="form-group">
					    <label class="col-sm-3 control-label">Total Discount</label>
					    <div class="col-sm-5">
					      <input name="discount" id="discount" type="text" 
					      value='<?php echo ($coupon) ? set_value('discount',$coupon->discount) : ''; ?>' 
					      class="form-control" placeholder="Enter Discount Percentage ( % )">
					    </div>
					    <span class="col-sm-4 text-danger">
					    	
					    </span>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Expires On</label>
					    <div class="col-sm-5">
					      <input name="expires_on" id="expires_on" type="text" 
						  value='<?php echo ($coupon) ? set_value('expires_on',date('m-d-Y',$coupon->expires_on)) : ''; ?>'	
					      class="datepicker form-control" placeholder="Expires On" data-date-format="mm/dd/yyyy">
						</div>
						<span class="col-sm-4 text-danger">
					    	
					    </span>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Coupon Code</label>
					    <div class="col-sm-5">
					      <input name="coupon_code" id="coupon_code" type="text"
					      value='<?php echo ($coupon) ? set_value('coupon_code',$coupon->coupon_code) : ''; ?>' 
					      class="form-control" placeholder="Enter Coupon Code">
						</div>
						<span class="col-sm-4 text-danger">
					    	
					    </span>
					</div>
					<div class="form-group">
					    <label class="col-sm-3 control-label">Coupon Discounts</label>
					    <div class="col-sm-5">
					      	<?php
					      		if($coupon)
					      		{
					      			$type = $coupon->coupon_type;
					      		}
					      		else
					      		{
					      			$type = null;
					      		}
								$coupon_type = array(
									"one_time_fee" => ($type=='one_time_fee') ? "* The One Time Fee" : "The One Time Fee",
									"recurring_fee" => ($type=='recurring_fee') ? "* The Recurring Fee" : "The Recurring Fee",
									"both" => ($type=='both') ? "* Both the one time fee and the recurring fee" : "Both the one time fee and the recurring fee"
								);
			 					echo form_dropdown('coupon_type', $coupon_type, ($coupon) ? $coupon->coupon_type : '', 'class="form-control drp"'); 
						  	?>
						</div>
						<span class="col-sm-4 text-danger">
					    	
					    </span>
					</div>
					<div class="form-group">
					    <div class="col-sm-offset-3 col-sm-9">
					      <button type="submit" class="btn btn-success">Save</button>
					    </div>
					</div>
				</form>
			  </div>	
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>
<script type="text/javascript">
  $(document).ready(function(){
       
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
        });
  });
</script>]