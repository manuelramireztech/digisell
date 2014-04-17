<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/giftcards/form/', 'class="form-horizontal"'); ?>

		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('add_giftcard') ?>
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
					<label for="to_name" class="col-sm-2 control-label"><?php echo lang('recipient_name');?> </label>
					<div class="col-sm-10">
						<?php
						$data	= array('name'=>'to_name', 'value'=>set_value('code'), 'class'=>'form-control');
						echo form_input($data);
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="to_email"><?php echo lang('recipient_email');?></label>
					<div class="col-sm-10">
						<?php
						$data	= array('name'=>'to_email', 'value'=>set_value('to_email'), 'class'=>'form-control');
						echo form_input($data);
						?>
					</div>
				</div>
				
					<div class="form-group">
						<label for="sender_name" class="col-sm-2 control-label"><?php echo lang('sender_name');?></label>
						<div class="col-sm-10">
							<?php
							$data	= array('name'=>'from', 'value'=>set_value('from'), 'class'=>'form-control');
							echo form_input($data);
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="personal_message" class="col-sm-2 control-label"><?php echo lang('personal_message');?></label>
						<div class="col-sm-10">
							<?php
							$data	= array('name'=>'personal_message', 'value'=>set_value('personal_message'), 'class'=>'form-control', 'style'=>'margin-left:11px');
							echo form_textarea($data);
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="beginning_amount" class="col-sm-2 control-label"><?php echo lang('amount');?></label>
						<div class="col-sm-10">
							<?php
							$data	= array('name'=>'beginning_amount', 'value'=>set_value('beginning_amount'), 'class'=>'form-control');
							echo form_input($data);
							?>
						</div>
					</div>
					<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<label class="checkbox">
							<?php
							$data	= array('name'=>'send_notification', 'value'=>'true');
							echo form_checkbox($data);
							?>
							<?php echo lang('send_notification');?></label>
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