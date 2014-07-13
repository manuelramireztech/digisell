<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	Manage Products &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;<?php echo ($product) ? 'Update' : 'Add New Product' ?>
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
		  	$price = $product->pricing_array;
		  	$price = unserialize(html_entity_decode($price));
		  ?>
		    <form action="<?php echo ($product) ? base_url('index.php').'/admin_product/save/'.$product->product_id : base_url('index.php').'/admin_product/save'; ?>" method="post" class="form-horizontal" role="form">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Product Public Status</label>
			    <div class="col-sm-4">
			      <?php 
			      	if($product)
			      	{
			      		$selected = $product->product_status;
			      	} 
			      	else
			      	{
			      		$selected = '';
			      	}
			      	$status =array(
			      					'public'	=>	($selected=='public') ? '* This is a public viewable product' : 'This is a public viewable product',
			      					'private'	=>	($selected=='private') ? '* This is a private product' : 'This is a private product'
			      					);
			      	echo form_dropdown('status', $status, $selected, 'class="form-control drp"');
			      ?>

			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Product Name</label>
			    <div class="col-sm-5">
			      <input type="text"  name="product_name" value='<?php echo ($product) ? set_value('product_name', html_entity_decode($product->product_name)) : '' ?>' id="product_name" class="form-control" placeholder="Product Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Short Product Summary</label>
			    <div class="col-sm-5">
			      <textarea name="short_summary" id="short_summary" class="summernote">
			      	<?php echo ($product) ? set_value('short_summary',html_entity_decode($product->product_summary)) : '' ?>
			      </textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Full Product Description</label>
			    <div class="col-sm-5">
			      <textarea name="full_desc" id="full_desc" class="summernote_full">
			      	<?php echo ($product) ? set_value('full_desc',html_entity_decode($product->product_description)) : '' ?>
			      </textarea>
			    </div>
			  </div>
			  <?php if($product): ?>
			  <div class="form-group">
			  	<label class="col-sm-2 control-label">Product Pricing <br><br>
			  	<small>(Assumes Profile Currency)</small></label>
			  	<div class="col-sm-6">
			  		<b class="text-danger">Pricing Options:</b>
			  		<div class="well">
			  			<input type="text" name="pricing_label" id="pricing_label" value='<?php echo ($product) ? $price['pricing_label'] : '' ?>' class="form-control" placeholder="Pricing Lable for Order system"><br><br>

			  			<input type="text" name="license_qty" id="license_qty" value='<?php echo ($product) ? $price['license_qty'] : '' ?>' class="form-control" placeholder="How Many Licenses to issue?"><br>
			  			Is this a bulk pricing level?
			  			<?php
			  				$check_bulk = $price['bulk_pricing']; 
			  				$status_bulk =array(
			      					'no'	=>	($check_bulk=='no') ? '* No' : 'No',
			      					'yes'	=>	($check_bulk=='yes') ? '* Yes' : 'Yes'
			      					);
			      			echo form_dropdown('bulk_pricing', $status_bulk, $check_bulk);
			  			?>
			  			<br><br>
			  			<input type="text" name="min_purchase" id="min_purchase" value='<?php echo ($product) ? $price['min_purchase'] : '' ?>' class="form-control" placeholder="Minimum Product Purchase"><br>
			  			<input type="text" name="max_purchase" id="max_purchase" value='<?php echo ($product) ? $price['max_purchase'] : '' ?>' class="form-control" placeholder="Maximum Product Purchase"><br>
			  			Product Release:
			  			<?php
			  				$check_release = $price['release']; 
			  				$status_release =array(
			      					'instant'	=>	($check_release=='instant') ? '* Instantly release the Product' : 'Instantly release the Product',
			      					'approval'	=>	($check_release=='approval') ? '* Release the product upon admin Approval' : 'Release the product upon admin Approval'
			      					);
			      			echo form_dropdown('release', $status_release, $check_release);
			  			?>
			  			<br><br>
			  		</div>
			  		<b class="text-danger">Pricing:</b>
			  		<div class="well">
			  			<input type="text" name="onetime_cost" id="onetime_cost" value='<?php echo ($product) ? $price['onetime_cost'] : '' ?>' class="form-control" placeholder="One Time Cost"><br>
			  			<input type="text" name="recurring_cost" id="recurring_cost" value='<?php echo ($product) ? $price['recurring_cost'] : '' ?>' class="form-control" placeholder="Recurring Cost"><br>
			  			<input type="text" name="recurring_interval" id="recurring_interval" value='<?php echo ($product) ? $price['recurring_interval'] : '' ?>' class="" placeholder="Recurring Interval">
			  			<?php
			  				$check_period = $price['period']; 
			  				$status_period =array(
			      					'days'	=>	($check_period=='days') ? '* Day(s)' : 'Day(s)',
			      					'months'	=>	($check_period=='months') ? '* Month(s)' : 'Month(s)',
			      					'years'	=>	($check_period=='years') ? '* Year(s)' : 'Year(s)'
			      					);
			      			echo form_dropdown('period', $status_period, $check_period);
			  			?>
			  			<br><br>
			  			<input type="text" name="stop_recurring" id="stop_recurring" value='<?php echo ($product) ? $price['stop_recurring'] : '' ?>' placeholder="Stop recurring after">Payments (0 or blank == never stops)
			  		</div>
			  	</div>
			  </div>
			  <?php endif; ?>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-5">
			      <button type="submit" class="btn btn-success pull-right"><?php echo ($product) ? 'Update' : 'Add Product' ?></button>
			    </div>
			  </div>
			  <div class="form-group">
			  	<div class="col-md-8">
			  		<div class="table-responsive">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class="active">
			  						<th>
			  							<span class='text-danger'>Product Licencing</span> &nbsp;Choose a Licensing Type
			  						</th>
			  						<td align='center'>
			  							<span class='text-danger'><b>Secret Pass-Phrase</b></span>
			  						</td>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<?php  
			  						if($product)
			  						{
			  							$pro = $product->licensing_id;
			  						}
			  						else
			  						{
			  							$pro = '';
			  						}
			  					?>
			  					<tr>
			  						<td>
			  							<input type="radio" value="" name="license_type" id="license_type" checked>
			  							This Product Has no License
			  						</td>
			  						<td align='center'>-</td>
			  					</tr>
			  					<?php foreach($licensing_types as $ltype){ ?>
									<tr>
										<td>
											<input type="radio" name="license_type" value='<?php echo $ltype->licensing_id; ?>' id="license_type" <?php echo ($pro==$ltype->licensing_id) ? 'checked' : '' ?>>
											<?php echo $ltype->name; ?>
										</td>
										<td align='center'>-</td>
									</tr>
			  					<?php } ?>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered" >
			  				<thead>
			  					<tr class="active">
			  						<th>
			  							<span class='text-danger'>Downloads</span> &nbsp;Available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
		  						<?php  
		  						if($product)
		  						{
		  							$d=0;
	  								$downl = $product->download_array;
	  								$downl = unserialize(html_entity_decode($downl));
	  								foreach($downl as $dwl)
		  							{
		  								$d++;
		  							}
		  							foreach($downloads as $download){ ?>
									<tr>
										<td>
											<input type="checkbox" name='dwn[]' id='dwn' value='<?php echo $download->did; ?>' <?php for($i=0; $i<$d; $i++) { echo ($downl[$i]==$download->did) ? 'checked' : ''; } ?>>	
				  							<?php echo $download->file_name.nbs(1); ?>
				  							
				  						</td>
				  					</tr>
			  					<?php } 
		  						}
		  						else
		  						{
									 foreach($downloads as $download){ ?>
									<tr>
										<td>
											<?php
												$data = array(
																	'name'        => 'dwn[]',
																	'id'		  => 'dwn',
																	'value'       => $download->did,
																	'checked'     => false,
																	'class'       => 'cb1',
			    											 );
												echo form_checkbox($data); 
											?>	
				  							<?php echo $download->file_name.nbs(1); ?>
				  							
				  						</td>
				  					</tr>
			  					<?php } 
		  						}
		  						?>	
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Updates</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							content to be fixed as soon as possible.
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Upgrade Packages</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							content to be fixed as soon as possible.
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Support Packages</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							content to be fixed as soon as possible.
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Agreements</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							<?php
				  							if($product)
				  							{
				  								$a=0;
				  								$agrement = $product->agreement_array;
				  								$agrement = unserialize(html_entity_decode($agrement));
				  								foreach($agrement as $agr)
					  							{
					  								$a++;
					  							}
				  								foreach($agreements as $agreement)
				  								{ ?>
				  									<input type="checkbox" name='agr[]' id='agr' value='<?php echo $agreement->agreement_id; ?>' <?php for($i=0; $i<$a; $i++) { echo ($agrement[$i]==$agreement->agreement_id) ? 'checked' : ''; } ?>>
				  									<?php echo $agreement->agreement_name; ?>
				  								<?php }
											}
											else
											{
												foreach($agreements as $agreement)
												{ ?>
													<input type="checkbox" name='agr[]' id='agr' value='<?php echo $agreement->agreement_id; ?>' >
				  									<?php echo $agreement->agreement_name; ?>
												<?php }
											}	 
										?>	
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Addons</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							<?php  
			  								if($product)
			  								{
			  									$ad=0;
			  									$adn = $product->addon_array;
			  									$adn = unserialize(html_entity_decode($adn));
			  									foreach($adn as $key)
			  									{
			  										$ad++;
			  									}
			  									foreach($addons as $addon)
					  							{
					  							?>	
					  								<input type="checkbox" name='adon[]' id='adon' value='<?php echo $addon->addon_id ?>' <?php for($i=0; $i<$ad; $i++) { echo ($adn[$i]==$addon->addon_id) ? 'checked' : ''; } ?>>
					  								<?php echo $addon->addon_name ?>
					  							<?php
					  							}
			  								}
			  								else
			  								{
			  									$i=0;
					  							foreach($addons as $addon)
					  							{
					  							?>	
					  								<input type="checkbox" name='adon[]' id='adon' value='<?php echo $addon->addon_id ?>' >
					  								<?php echo $addon->addon_name ?>
					  							<?php
					  							}
			  								}
			  							?>
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Coupon Code discounts</span>&nbsp;available to this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  				<tr><td>
			  					<?php  
			  						if($product)
			  						{
			  							$c=0;
			  							$copn = $product->coupon_array;
			  							$copn = unserialize(html_entity_decode($copn));
			  							foreach($copn as $cop)
			  							{
			  								$c++;
			  							}
		  								foreach($coupons as $coupon)
			  							{
			  							?>	
			  								<input type="checkbox" name='cpn[]' id='cpn' value='<?php echo $coupon->coupon_code ?>' <?php for($i=0; $i<$c; $i++) { echo ($copn[$i]==$coupon->coupon_code) ? 'checked' : ''; } ?>>
			  								<?php echo $coupon->coupon_code ?>
			  								
			  							<?php	
			  							}
			  						}
			  						else
			  						{
			  							$i=0;
			  							foreach($coupons as $coupon)
			  							{
			  							?>	
			  								<input type="checkbox" name='cpn[]' id='cpn' value='<?php echo $coupon->coupon_code ?>' >
			  								<?php echo $coupon->coupon_code ?>
			  							<?php
			  							}
			  						}
			  					?>
			  					</td></tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  		<div class="form-group">
					    <div class="col-sm-offset-2 col-sm-5">
					      <button type="submit" class="btn btn-success pull-right"><?php echo ($product) ? 'Update' : 'Add Product' ?></button>
					    </div>
					</div>
			  </div>
			</form>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>
<script type="text/javascript">
  $(document).ready(function(){
        
        $('.summernote').summernote({
              height: 250,
        });
        $('.summernote_full').summernote({
              height: 250,
        });
        $('#myModal_pricing').modal('hide');
       
  });
</script>