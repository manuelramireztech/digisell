<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/shipping/settings/'. $module, 'class="form"');?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('shipping_settings_title') ?>
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
				echo $form;
				?>
				<div class="form-group ">
				    <div class="col-sm-12 ">
				      <input class="btn btn-primary " type="submit" value="<?php echo lang('save');?>"/>
				    </div>
				  </div>
				
				
			</div>

			<!-- /panel body -->
		</div>
		
	</form>
</div>
</div>