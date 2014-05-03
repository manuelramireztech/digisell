<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('forgot_password');?>
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
				
			<?php echo form_open('secure/forgot_password', 'class="form-horizontal"') ?>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email"><?php echo lang('email');?></label>
						<div class="col-sm-4">
							<input type="text" name="email" class="form-control" required/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="hidden" value="submitted" name="submitted"/>
							<input type="submit" value="<?php echo lang('reset_password');?>" name="submit" class="btn btn-primary"/>
						</div>
					</div>
			</form>
			<!-- /panel body -->
			<div style="text-align:center;">
				<a class='btn btn-info' href="<?php echo site_url('secure/login'); ?>"><?php echo lang('return_to_login');?></a>
			</div>
			</div>
		</div>
	</div>
</div>