<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/customers/form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('customer_form') ?>
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
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('company');?></label>
					<div class="col-sm-10">
						<?php
							$data	= array('name'=>'company', 'value'=>set_value('company', $company), 'class'=>'form-control');
							echo form_input($data); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('firstname');?></label>
					<div class="col-sm-10">
						<?php
							$data	= array('name'=>'firstname', 'value'=>set_value('firstname', $firstname), 'class'=>'form-control');
							echo form_input($data); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('lastname');?></label>
					<div class="col-sm-10">
						<?php
							$data	= array('name'=>'lastname', 'value'=>set_value('lastname', $lastname), 'class'=>'form-control');
							echo form_input($data); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('email');?></label>
					<div class="col-sm-10">
						<?php
							$data	= array('name'=>'email', 'value'=>set_value('email', $email), 'class'=>'form-control');
							echo form_input($data); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('phone');?></label>
					<div class="col-sm-10">
						<?php
							$data	= array('name'=>'phone', 'value'=>set_value('phone', $phone), 'class'=>'form-control');
							echo form_input($data); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('password');?></label>
					<div class="col-sm-10">
						<?php
							$data	= array('name'=>'password', 'class'=>'form-control');
							echo form_password($data); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('confirm');?></label>
					<div class="col-sm-10">
						<?php
							$data	= array('name'=>'confirm', 'class'=>'form-control');
							echo form_password($data); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<?php $data	= array('name'=>'email_subscribe', 'value'=>1, 'checked'=>(bool)$email_subscribe);
								echo form_checkbox($data).' '.lang('email_subscribed'); ?>
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<?php
								$data	= array('name'=>'active', 'value'=>1, 'checked'=>$active);
								echo form_checkbox($data).' '.lang('active'); ?>
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('group');?></label>
					<div class="col-md-2">
						<?php echo form_dropdown('group_id', $group_list, set_value('group_id',$group_id), 'class="form-control drp"'); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
					</div>
				</div>





				
				
				
		

			<!-- /panel body -->
		</div>

	</form>
</div>
</div>
