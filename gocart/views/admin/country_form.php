<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/locations/country_form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('country_form') ?>
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
						<label for="name" class="col-sm-2 control-label"><?php echo lang('name');?></label>
						<div class="col-sm-10">
							<?php
							$data	= array('name'=>'name', 'value'=>set_value('name', $name), 'class'=>'form-control');
							echo form_input($data);
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="iso_code_2" class="col-sm-2 control-label"><?php echo lang('iso_code_2');?> / <?php echo lang('iso_code_3');?></label>
						<div class="col-sm-2">
							<?php
							$data	= array( 'name'=>'iso_code_2', 'maxlength'=>'2', 'value'=>set_value('iso_code_2', $iso_code_2), 'class'=>'form-control');
							echo form_input($data);
							?>
						</div>
						
						<div class="col-sm-2">
							<?php
							$data	= array('name'=>'iso_code_3', 'maxlength'=>'3', 'value'=>set_value('iso_code_3', $iso_code_3), 'class'=>'form-control');
							echo form_input($data);
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="address_format" class="col-sm-2 control-label"><?php echo lang('address_format');?></label>
						<div class="col-sm-10">
							<?php
							$data	= array('name'=>'address_format', 'style'=>'margin-left:10px',  'value'=>set_value('address_format', $address_format), 'rows'=>6, 'class'=>'form-control');
							echo form_textarea($data);
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"></label>
						<div class="col-sm-10">
							<?php $zip_required = array('name'=>'zip_required', 'value'=>1, 'checked'=>set_checkbox('zip_required', 1, (bool)$zip_required));?>
							<label class="checkbox"><?php echo form_checkbox($zip_required); ?> <?php echo lang('require_zip');?></label>
						</div>
					</div>
					<div class="form-group">
						<label for="tax" class="col-sm-2 control-label"><?php echo lang('tax');?></label>
						<div class="col-sm-2">
							<div class="input-group">
								<?php
								$data	= array('name'=>'tax', 'class'=>'form-control', 'maxlength'=>'10', 'value'=>set_value('tax', $tax));
								echo form_input($data);
								?>
								<span class="input-group-addon">&nbsp;&nbsp;%</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label"></label>
						<div class="col-sm-10">
							<?php $status		= array('name'=>'status', 'value'=>1, 'checked'=>set_checkbox('status', 1, (bool)$status));?>
							<label class="checkbox"><?php echo form_checkbox($status); ?> <?php echo lang('enabled');?></label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary"><?php echo lang('save');?></button>
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