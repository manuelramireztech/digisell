<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('form_register') ?>
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
				<?php
				$company	= array('id'=>'bill_company', 'class'=>'form-control', 'name'=>'company', 'value'=> set_value('company'));
				$first		= array('id'=>'bill_firstname', 'class'=>'form-control', 'name'=>'firstname', 'value'=> set_value('firstname'));
				$last		= array('id'=>'bill_lastname', 'class'=>'form-control', 'name'=>'lastname', 'value'=> set_value('lastname'));
				$email		= array('id'=>'bill_email', 'class'=>'form-control', 'name'=>'email', 'value'=>set_value('email'));
				$phone		= array('id'=>'bill_phone', 'class'=>'form-control', 'name'=>'phone', 'value'=> set_value('phone'));
				?>
				<div class="row">
					<div class="col-md-12">

						<?php echo form_open('secure/register', 'class="form-horizontal"'); ?>
						<input type="hidden" name="submitted" value="submitted" />
						<input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
						  <div class="form-group">
						    <label for="company" class="col-sm-2 control-label"><?php echo lang('account_company');?></label>
						    <div class="col-sm-10">
						      <?php echo form_input($company);?>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>

						<fieldset>
							<div class="row">
								<div class="span6">
									
									
								</div>
							</div>
							<div class="row">	
								<div class="span3">
									<label for="account_firstname"><?php echo lang('account_firstname');?></label>
									<?php echo form_input($first);?>
								</div>

								<div class="span3">
									<label for="account_lastname"><?php echo lang('account_lastname');?></label>
									<?php echo form_input($last);?>
								</div>
							</div>

							<div class="row">
								<div class="span3">
									<label for="account_email"><?php echo lang('account_email');?></label>
									<?php echo form_input($email);?>
								</div>

								<div class="span3">
									<label for="account_phone"><?php echo lang('account_phone');?></label>
									<?php echo form_input($phone);?>
								</div>
							</div>

							<div class="row">
								<div class="span7">
									<label class="checkbox">
										<input type="checkbox" name="email_subscribe" value="1" <?php echo set_radio('email_subscribe', '1', TRUE); ?>/> <?php echo lang('account_newsletter_subscribe');?>
									</label>
								</div>
							</div>

							<div class="row">	
								<div class="span3">
									<label for="account_password"><?php echo lang('account_password');?></label>
									<input type="password" name="password" value="" class="form-control" autocomplete="off" />
								</div>

								<div class="span3">
									<label for="account_confirm"><?php echo lang('account_confirm');?></label>
									<input type="password" name="confirm" value="" class="form-control" autocomplete="off" />
								</div>
							</div>

							
						</fieldset>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <input type="submit" value="<?php echo lang('form_register');?>" class="btn btn-primary" />
						    </div>
						  </div>
					</form>

					<div style="text-align:center;">
						<a href="<?php echo site_url('secure/login'); ?>"><?php echo lang('go_to_login');?></a>
					</div>
				</div>
			</div>

		</div>

		<!-- /panel body -->
	</div>

</div>
</div>