<div class="row">
	<div class="col-md-12">
		<script type="text/javascript">
			function areyousure()
			{
				return confirm('<?php echo lang('confirm_delete_customer');?>');
			}
		</script>
		
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('customers') ?>
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
					<div class="col-md-5">
						<a class="btn btn-primary" href="<?php echo site_url($this->config->item('admin_folder').'/customers/export_xml');?>"><i class="icon-download"></i> <?php echo lang('xml_download');?></a>
						<a class="btn btn-success" href="<?php echo site_url($this->config->item('admin_folder').'/customers/get_subscriber_list');?>"><i class="icon-download"></i> <?php echo lang('subscriber_download');?></a>
						<a class="btn btn-primary" href="<?php echo site_url($this->config->item('admin_folder').'/customers/form'); ?>"><i class="icon-plus-sign"></i> <?php echo lang('add_new_customer');?></a>
					</div>
					<div class="col-md-7">
					<form method="post" action="<?php echo site_url($this->config->item('admin_folder').'/customers/index/'); ?>">
						<div class="col-lg-6 pull-right">
							<div class="input-group">
							  <input type="text" name="txtSearch" id="txtSearch" class="form-control" placeholder="Search Client">
							  <div class="input-group-btn">
							    <!-- Button and dropdown menu -->
							    
							    <select name="searchBy" id="searchBy" class="form-control csearch">
							    	<option value="firstname">First Name</option>
							    	<option value="lastname">Last Name</option>
							    </select>
							    <button class="btn btn-success csbtn" type="submit">Go!</button>
							    <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Search By <span class="caret"></span></button>
							  	<ul class="dropdown-menu pull-right">
						          <li><a href="#">First Name</a></li>
						          <li><a href="#">Last Name</a></li>
						        </ul> -->
							  </div>
							</div>	
						    
						</div><!-- /.col-lg-4 -->
					</form>
					</div>
				</div>
				<br>
				<form method="post" action="<?php echo site_url($this->config->item('admin_folder').'/customers/delete/'); ?>">
				<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<thead>
							<tr class="active">

								<?php
								if($by=='ASC')
								{
									$by='DESC';
								}
								else
								{
									$by='ASC';
								}
								?>

								<th width="10px">
									
									
									<?php  
										$data = array(
						    														'type'        => 'submit',
						    														'value'       => 'x',
						    														'checked'     => false,
						    														'onclick'	  => "return areyousure();",
						    														'class'		  => 'btn btn-sm btn-danger',
						    														'title'		  => 'Delete',
							    											 );
																echo form_submit($data);
									?>
								</th>
								<th><a href="<?php echo site_url($this->config->item('admin_folder').'/customers/index/firstname/');?>/<?php echo ($field == 'firstname')?$by:'';?>"><?php echo lang('firstname');?>
									<?php if($field == 'firstname'){ echo ($by == 'ASC')?'<i class="fa fa-chevron-up"></i>':'<i class="fa fa-chevron-down"></i>';} ?></a></th>
								<th><a href="<?php echo site_url($this->config->item('admin_folder').'/customers/index/lastname/');?>/<?php echo ($field == 'lastname')?$by:'';?>"><?php echo lang('lastname');?>
									<?php if($field == 'lastname'){ echo ($by == 'ASC')?'<i class="fa fa-chevron-up"></i>':'<i class="fa fa-chevron-down"></i>';} ?> </a></th>

												
													<?php if($field == 'email'){ echo ($by == 'ASC')?'<i class="icon-chevron-up"></i>':'<i class="icon-chevron-down"></i>';} ?></a></th>
														<th><?php echo 'Created On' ?></th>
														
														<th width="20%"></th>
													</tr>
												</thead>

												<tbody>
													<?php
													$page_links	= $this->pagination->create_links();

													if($page_links != ''):?>
													<tr><td colspan="5" style="text-align:center"><?php echo $page_links;?></td></tr>
												<?php endif;?>
												<?php echo (count($customers) < 1)?'<tr><td style="text-align:center;" colspan="5">'.lang('no_customers').'</td></tr>':''?>
												<?php foreach ($customers as $customer):?>
													<tr class="user-row">
														<?php /*<td style="width:16px;"><?php echo  $customer->id; ?></td>*/?>
														<td>
															<?php
																$data = array(
						    														'name'        => 'clt[]',
						    														'id'		  => 'clt',
						    														'value'       => $customer->id,
						    														'checked'     => false,
						    														'class'       => 'checkbox-inline',
							    											 );
																echo form_checkbox($data); 
															?>
															
														</td>
														<td class="gc_cell_left"><?php echo  $customer->firstname; ?></td>
														<td><?php echo  $customer->lastname; ?></td>
														
														<td><?php echo  $customer->created_on; ?></td>
														
														<td>
															<div class="btn-group" style="float:right">
																<a class="btn  btn-primary" href="<?php echo site_url($this->config->item('admin_folder').'/customers/form/'.$customer->id); ?>"><i class="fa fa-edit"></i> <?php echo lang('edit');?></a>

																<a class="btn  btn-success" href="<?php echo site_url($this->config->item('admin_folder').'/customers/addresses/'.$customer->id); ?>"><i class="fa fa-envelope"></i> <?php echo lang('addresses');?></a>

																<a class="btn  btn-danger" href="<?php echo site_url($this->config->item('admin_folder').'/customers/delete/'.$customer->id); ?>" onclick="return areyousure();"><i class="fa fa-trash-o"></i> <?php echo lang('delete');?></a>
															</div>
														</td>
													</tr>
												<?php endforeach;
												if($page_links != ''):?>
												<tr><td colspan="5" style="text-align:center"><?php echo $page_links;?></td></tr>
											<?php endif;?>
										</tbody>
									</table>
								</div>
								</form>

							</div>

							<!-- /panel body -->
						</div>


					</div>
				</div>
				<script type="text/javascript">
		$(document).ready(function(){
				
				$('.user-row').on('click',function(){
						if($(this).find('.checkbox-inline').attr('checked'))
						{
							$(this).find('.checkbox-inline').removeAttr('checked','checked');
						}
						else
						{
							$(this).find('.checkbox-inline').attr('checked','checked');	
						}
						
				});

				

	});

	</script>