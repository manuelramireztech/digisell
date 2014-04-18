<div class="row">
	<div class="col-md-12">
		
		<?php echo form_open($this->config->item('admin_folder').'/payment/settings/'. $module, 'class="form-horizontal"');?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('settings') ?>
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
					<label for="inputEmail3" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<?php
						echo $form;
						?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
					</div>
				</div>



				<div class="form-actions">
					
				</div>
				
				
			</div>

			<!-- /panel body -->
		</div>

	</form>
	
</div>
</div>