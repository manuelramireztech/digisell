<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
			<div class="panel">
			  	<div class="panel-heading">
				    <h3 class="panel-title">
				    	Manage Clients
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
						<?php	$page_links	= $this->pagination->create_links();

							if($page_links != ''):?>
							<tr><td colspan="5" style="text-align:center"><?php echo $page_links;?></td></tr>
						<?php endif;?>
			    		<table class="table table-striped" cellpadding="10" cellspacing="5">
			    			<thead>
				    			<tr>
				    				<th>
				    					<input type="checkbox" id="selecctall"/>
										<button type="submit" onclick="return areyousure();" class="btn btn-xs btn-danger"><i class="ion-android-close"></i>
										</button>
				    				</th>
				    				<th>First Name</th>
				    				<th>Last Name</th>
				    				<th>Created</th>
				    				<th>Options</th>
				    			</tr>
			    			</thead>
			    			<tbody>
			    				<?php foreach ($clients as $client) { ?>
			    					<tr>
										<td>
											<?php
												$data = array(
		    														'name'        => 'clt[]',
		    														'id'		  => 'clt',
		    														'value'       => $client->client_id,
		    														'checked'     => false,
		    														'class'       => 'cb1',
			    											 );
												echo form_checkbox($data); 
											?>
										</td>
										<td><?php echo $client->first_name; ?></td>
										<td><?php echo $client->last_name; ?></td>
										<td><?php echo date('d-m-Y',$client->created); ?></td>
										<td>1</td>
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
		return confirm('<?php echo lang('confirm_delete_customer');?>');
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

				$('#selecctall').click(function(event) {  //on click 
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