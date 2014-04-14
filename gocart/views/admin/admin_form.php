<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/admin/form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('admin_form') ?>
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

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('firstname');?></label>
						<div class="col-sm-10">
							<?php
							$data	= array('name'=>'firstname', 'value'=>set_value('firstname', $firstname), 'class'=>'form-control');
							echo form_input($data);
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('lastname');?></label>
						<div class="col-sm-10">
							<?php
					$data	= array('name'=>'lastname', 'value'=>set_value('lastname', $lastname), 'class'=>'form-control');
					echo form_input($data);
					?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('username');?></label>
						<div class="col-sm-10">
							<?php
					$data	= array('name'=>'username', 'value'=>set_value('username', $username), 'class'=>'form-control');
					echo form_input($data);
					?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('email');?></label>
						<div class="col-sm-10">
							<?php
					$data	= array('name'=>'email', 'value'=>set_value('email', $email), 'class'=>'form-control');
					echo form_input($data);
					?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('password');?></label>
						<div class="col-sm-10">
							<?php
					$data	= array('name'=>'password', 'class'=>'form-control');
					echo form_password($data);
					?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('confirm_password');?></label>
						<div class="col-sm-10">
							<?php
					$data	= array('name'=>'confirm', 'class'=>'form-control');
					echo form_password($data);
					?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('access');?></label>
						<div class="col-sm-10">
							<?php
					$options = array(	'Admin'		=> 'Admin',
						'Orders'	=> 'Orders'
						);
					echo form_dropdown('access', $options, set_value('phone', $access), 'class="input-sm"');
					?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
						</div>
					</div>



				</div>
				
				
			</div>

			<!-- /panel body -->
		</div>
		

	</form>
	<script type="text/javascript">
		$('form').submit(function() {
			$('.btn').attr('disabled', true).addClass('disabled');
		});
	</script>
</div>
</div>