<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/giftcards/settings', 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('giftcard_settings') ?>
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
					<label for="predefined_card_amounts" class="col-sm-2 control-label"><?php echo lang('predefined_card_amounts');?></label>
					<div class="col-sm-10">
						<?php 
						$data	= array('name'=>'predefined_card_amounts', 'value'=>set_value('predefined_card_amounts', $predefined_card_amounts), 'class'=>'form-control gc_tf1');
						echo form_input($data);
						?>
						<span class="help-inline"><?php echo lang('predefined_examples');?></span>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<label class="checkbox">
							<?php
							$data	= array('name'=>'allow_custom_amount', 'value'=>'1', 'checked'=>(bool)$allow_custom_amount);
							echo form_checkbox($data);
							?>
							<?php echo lang('allow_custom_amounts');?></label>
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