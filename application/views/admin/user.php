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
           	<?php if ($this->session->flashdata('warning')):?>
                <div class="alert alert-warning">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('warning');?>
                </div>
           	<?php endif;?>
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	Manage Admin Accounts
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
						<form action="<?php echo base_url('index.php').'/admin_user/search' ?>" method="post" class="form-inline">
							<?php $select_admin = array(
															'first_name'	=>	'Fisrt Name',
															'last_name'		=>	'Last Name',
															'email'			=>	'E-mail',
															'status'			=>	'Status',
														); 
							?>
							<div class="form-group pull-right">
								<input type="submit" value="Search" class="btn btn-success">
							</div>
							<div class="form-group pull-right">
								<?php echo form_dropdown('user_select',$select_admin, 'all_client','class="form-control drp-s"') ?>
							</div>
							<div class="form-group pull-right">
								<input type="text" name="user_search" id="user_search" class="form-control" placeholder="Search Admin">
							</div>
						</form>
					</div>
				</div>

				<div class="row">
					<form action="<?php echo base_url('index.php').'/admin_user/bulk_remove' ?>" method="post">
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
				    				<th>Email</th>
				    				<th>Created</th>
				    				<th>Status</th>
				    				<th>Options</th>
				    			</tr>
			    			</thead>
			    			<tbody>
			    				<?php if(!$users) { ?>
			    				<tr>
			    					<td>
			    						<?php echo 'no admins available'; ?>
			    					</td>
			    				</tr>
			    				<?php } ?>
			    				<?php foreach ($users as $user) { ?>
			    					<tr class="user-row">

										<td>
											<?php
												$data = array(
		    														'name'        => 'usr[]',
		    														'id'		  => 'usr',
		    														'value'       => $user->uid,
		    														'checked'     => false,
		    														'class'       => 'cb1',
			    											 );
												echo form_checkbox($data); 
											?>
										</td>
										<td><?php echo $user->first_name; ?></td>
										<td><?php echo $user->last_name; ?></td>
										<td><?php echo $user->email; ?></td>
										<?php $date_format = $this->Config->get_data(); ?>
										<td><?php echo date($date_format->date_format,$user->created); ?></td>
										<td><?php echo $user->status; ?></td>
										<td>
											<a href="<?php echo base_url('index.php').'/admin_user/user_edit/'.$user->uid; ?>"><i class='fa fa-edit'></i></a>&nbsp;&nbsp;
											<a href="<?php echo base_url('index.php').'/admin_user/user_delete/'.$user->uid; ?>">
											<i class='fa fa-trash-o'></i></a>
										</td>
				    				</tr>
			    				<?php } ?>
			    			</tbody>
			    		</table>
					</form>
				</div>

				<div class="row">
					<div class="col-md-6">
						<?php	
							$page_links	= $this->pagination->create_links();
							if($page_links != ''):?>
							<?php echo $page_links;?>
						<?php endif;?>
					</div>
				</div>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>
<script type="text/javascript">
	

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