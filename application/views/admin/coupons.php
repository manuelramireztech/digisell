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
		    	Manage Coupons
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
				  		<a href='<?php echo base_url('index.php').'/admin_coupon/add_coupon' ?>' class="btn btn-success pull-right">Add New Coupon</a>
				  	</div>
			  	</div>
			  <form action='<?php echo base_url('index.php').'/admin_coupon/delete' ?>' method="post">
		  		<div class="table-responsive col-md-9">
		  			<table class="table">
		  				<thead>
		  					<tr class="warning">
		  						<td width="100px">
		  							<input type="checkbox" id="selecctall" name="selectall" />
									<button type="submit" class="btn btn-xs btn-danger"><i class="ion-android-close"></i></button>
		  						</td>
		  						<td>Coupon Code</td>
		  						<td>Expires</td>
		  						<td>Discount</td>
		  						<td>Options</td>
		  					</tr>
		  				</thead>
		  				<tbody>
		  					<?php foreach ($coupons as $coupon ) { ?>
			  					<tr>
			  						<td>
			  							<?php
											$data = array(
																'name'        => 'cop[]',
																'id'		  => 'cop',
																'value'       => $coupon->coupon_code,
																'checked'     => false,
																'class'       => 'cb1',
		    											 );
											echo form_checkbox($data); 
										?>
			  						</td>
			  						<td>
			  							<?php echo $coupon->coupon_code; ?>
			  						</td>
			  						<td>
			  							<?php echo date('d-m-Y',$coupon->expires_on); ?>
			  						</td>
			  						<td>
			  							<?php echo $coupon->discount.' % '.$coupon->coupon_type; ?>
			  						</td>
			  						<td><a href='<?php echo base_url('index.php').'/admin_coupon/add_coupon/'.$coupon->coupon_code ?>' class="btn btn-xs btn-default">Manage</a></td>
			  					</tr>
		  					<?php } ?>
		  				</tbody>
		  			</table>
		  		</div>
		  	  </form>  
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>
<script type="text/javascript">
	function areyousure()
	{
		return confirm('Are You Sure');
	}

	$(document).ready(function(){
				$('.user-row').on('click',function(){
						if($(this).find('.cb1').attr('checked'))
						{
							$(this).find('.cb1').removeAttr('checked','checked');
						}
						else
						{
							$(this).find('.cb1').attr('checked','checked');	
						}
						
				});
				$('#selecctall').click(function() {  //on click 
			        if(this.checked) { // check select status
			            $('.cb1').each(function() { //loop through each checkbox
			                this.checked = true;  //select all checkboxes with class "cb1"               
			            });
			        }else{
			            $('.cb1').each(function() { //loop through each checkbox
			                this.checked = false; //deselect all checkboxes with class "cb1"                       
			            });         
			        }
			    });

	});
</script>