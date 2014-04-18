<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/settings/canned_message_form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('canned_message_form') ?>
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
					<label for="name" class="col-sm-2 control-label"><?php echo lang('label_canned_name');?></label>
					<div class="col-sm-10">
						<?php
						$name_array = array('name' =>'name', 'class'=>'input-xlarge form-control', 'value'=>set_value('name', $name));

						if(!$deletable) {
							$name_array['class']	= "input-xlarge form-control disabled";
							$name_array['readonly']	= "readonly";
						}
						echo form_input($name_array);?>
					</div>
				</div>
				<div class="form-group">
					<label for="subject" class="col-sm-2 control-label"><?php echo lang('label_canned_subject');?></label>
					<div class="col-sm-10">
						<?php echo form_input(array('name'=>'subject', 'class'=>'input-xlarge form-control', 'value'=>set_value('subject', $subject)));?>
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<?php
						$data	= array('id'=>'description', 'name'=>'content', 'class'=>'redactor form-control drp', 'value'=>set_value('content', $content));
						echo form_textarea($data);
						?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
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