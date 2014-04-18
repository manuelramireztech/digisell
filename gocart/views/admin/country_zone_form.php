<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/locations/zone_form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('zone_form') ?>
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
					<label for="country_id" class="col-sm-2 control-label"><?php echo lang('country');?></label>
					<div class="col-sm-4">
						<?php

						$country_ids	= array();
						foreach($countries as $c)
						{
							$country_ids[$c->id] = $c->name;
						}

						?>
						<?php echo form_dropdown('country_id', $country_ids, set_value('country_id', $country_id) ,'class="form-control drp"');?>
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label"><?php echo lang('name');?></label>
					<div class="col-sm-4">
						<?php
						$data	= array('id'=>'name', 'name'=>'name', 'value'=>set_value('name', $name), 'class'=>'form-control');
						echo form_input($data);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="code" class="col-sm-2 control-label"><?php echo lang('code');?></label>
					<div class="col-sm-4">
						<?php
						$data	= array( 'name'=>'code', 'class'=>'form-control', 'value'=>set_value('code', $code));
						echo form_input($data);
						?>
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
				<label for="country_id"></label>
				

				<label for="name"></label>
				

				
				

				
				
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