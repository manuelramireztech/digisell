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
			  		<a href='<?php echo base_url('index.php').'/admin_product/form' ?>' class="btn btn-success pull-right">Add New Product</a>
			  	</div>
		  	</div>
		  	<div class="table-responsive col-md-8">
		  	  <form action='<?php echo base_url('index.php').'/admin_product/delete' ?>' method="post">
		  		<table class="table">
		  			<thead>
		  				<tr class="success">
		  					<th width='100px'>
		  						<input type="checkbox" id="selecctall" name="selectall" />
								<button type="submit" class="btn btn-xs btn-danger"><i class="ion-android-close"></i></button>
		  					</th>
		  					<th>Product Name</th>
		  					<th width="180px">Options</th>
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
		  					<td>
		  						<a href="<?php echo base_url('index.php').'/admin_product/duplicate/'.$product->product_id ?>" class="btn btn-xs btn-default">Clone</a>
		  						<a href="<?php echo base_url('index.php').'/admin_product/edit/'.$product->product_id ?>" class="btn btn-xs btn-default">Manage</a>
		  					</td>
		  				</tr>
		  				<?php } ?>
		  			</tbody>
		  		</table>
		  	  </form>
		  	</div>
		  </div>
		 <?php 
		 	//  $ser = $test->pricing_array; // assume it is the serialization data from database
			// 	$arr_ser = unserialize(html_entity_decode($ser));
			// 	var_dump($arr_ser);
		  	?>
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