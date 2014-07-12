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
		    	Digisell Addons > <?php echo ($addons) ? 'Update' : 'Add New'; ?>
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
		  		<div class="form-group">
		  			<label class="col-sm-3 control-label">Addon Name</label>
		  			<div class="col-sm-4">
		  				<input type="text" name="addon_name" value='<?php echo ($addons) ? set_value('addon_name', html_entity_decode($addons->addon_name)) : '' ?>' id="addon_name" class="form-control">
		  			</div>
		  		</div>
		  		<div class="form-group">
		  			<label class="col-sm-3 control-label">Addon Description</label>
		  			<div class="col-sm-4">
		  				<textarea name="addon_description" id="addon_description" class="summernote_addon">
		  					<?php echo ($addons) ? set_value('addon_description', html_entity_decode($addons->addon_description)) : '' ?>
		  				</textarea>
		  			</div>
		  		</div>
		  		<div class="form-group">
		  			<label class="col-sm-3 control-label">Addon Type</label>
		  			<div class="col-sm-4">
		  				<?php
				      		if($addons)
				      		{
				      			$type = $addons->addon_type;
				      		}
				      		else
				      		{
				      			$type = null;
				      		}
							$addon_type = array(
								"free" => ($type=='free') ? "* Free" : "Free",
								"one_time" => ($type=='one_time') ? "* One Time" : "One Time",
								"recurring" => ($type=='recurring') ? "* Recurring" : "Recurring"
							);
		 					echo form_dropdown('addon_type', $addon_type, ($addons) ? $addons->addon_type : '', 'class="form-control drp"'); 
					  	?>
		  			</div>
		  		</div>
		  		<div class="form-group">
		  			<label class="col-sm-3 control-label">Addon Cost</label>
		  			<div class="col-sm-4">
		  				<input type="text" name="addon_cost" value='<?php echo ($addons) ? set_value('addon_cost', html_entity_decode($addons->addon_cost)) : '' ?>' id="addon_cost" class="form-control">
		  			</div>
		  		</div>
		  		<div class="form-group">
		  			<div class="col-xs-offset-3">
		  				<div class="row">
					  		<div class="table-responsive col-md-6">
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
				  						if($addons)
				  						{
				  							$d=0;
			  								$downl = $addons->download_array;
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
        $('.summernote_addon').summernote({
              height: 250,
        });
  });
</script>