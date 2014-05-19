<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
			<?php if ($this->session->flashdata('message')):?>
                <div class="alert alert-info">
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
						<form action="<?php echo base_url('index.php').'/admin_client/delete' ?>" method="post">
				    		<table class="table table-striped" cellpadding="10" cellspacing="5">
				    			<thead>
					    			<tr>
					    				<th width='100px'>
					    					<input type="checkbox" id="selecctall" name="selectall" />
											<button type="submit" class="btn btn-xs btn-danger"><i class="ion-android-close"></i>
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
											<td>
												<a href="#"><i class='fa fa-edit'></i></a>&nbsp;&nbsp;
												<a href="<?php echo base_url('index.php').'/admin_client/delete/'.$client->client_id ?>" onclick="areyousure();">
												<i class='fa fa-trash-o'></i></a>
											</td>
					    				</tr>
				    				<?php } ?>
				    			</tbody>
				    		</table>
			    		</form>
			    		<?php	$page_links	= $this->pagination->create_links();

							if($page_links != ''):?>
							<tr><td colspan="5" style="text-align:center"><?php echo $page_links;?></td></tr>
						<?php endif;?>
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