<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	Manage Products
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
			  		<a href="#" class="btn btn-success">Add New Product</a>
			  	</div>
		  	</div>
		  	<div class="table-responsive col-md-6">
		  		<table class="table">
		  			<thead>
		  				<tr class="success">
		  					<th width='100px'>
		  						<input type="checkbox" id="selecctall" name="selectall" />
								<button type="submit" class="btn btn-xs btn-danger"><i class="ion-android-close"></i></button>
		  					</th>
		  					<th>Product Name</th>
		  					<th>Options</th>
		  				</tr>
		  			</thead>
		  			<tbody>
		  				<?php foreach($products as $product) { ?>
		  				<tr>
		  					<td>
		  						<?php
									$data = array(
														'name'        => 'clt[]',
														'id'		  => 'clt',
														'value'       => $product->product_id,
														'checked'     => false,
														'class'       => 'cb1',
    											 );
									echo form_checkbox($data); 
								?>
		  					</td>
		  					<td><?php echo $product->product_name; ?></td>
		  					<td><a href="#" class="btn btn-default">Manage</a></td>
		  				</tr>
		  				<?php } ?>
		  			</tbody>
		  		</table>
		  	</div>
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