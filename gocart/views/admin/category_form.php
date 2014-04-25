<div class="row">
	<div class="col-md-12">
		<?php echo form_open_multipart($this->config->item('admin_folder').'/categories/form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('category_form') ?>
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
				<div class="tabbable">

					<ul class="nav nav-tabs">
						<li class="active"><a href="#description_tab" data-toggle="tab"><?php echo lang('description');?></a></li>
						<li><a href="#attributes_tab" data-toggle="tab"><?php echo lang('attributes');?></a></li>
						<li><a href="#seo_tab" data-toggle="tab"><?php echo lang('seo');?></a></li>
					</ul>

					<div class="tab-content navbar-category">
						<div class="tab-pane active" id="description_tab">
							<div class="form-group ">
								<label for="name" class="col-sm-2 control-label"><?php echo lang('name');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'name', 'value'=>set_value('name', $name), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
							</div>
							<div class="form-group ">
								<label for="description" class="col-sm-2 control-label"><?php echo lang('description');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'description', 'class'=>'redactor form-control', 'style'=>'margin-left:10px', 'value'=>set_value('description', $description));
									echo form_textarea($data);
									?>
								</div>
							</div>
							<div class="form-group ">
								<label for="enabled" class="col-sm-2 control-label"><?php echo lang('enabled');?> </label>
								<div class="col-sm-1">
									<?php echo form_dropdown('enabled', array('0' => lang('disabled'), '1' => lang('enabled')),  set_value('enabled',$enabled), 'class="form-control drp"'); ?>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="attributes_tab">
							<div class="form-group">
								<label for="slug" class="col-sm-2 control-label"><?php echo lang('slug');?> </label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'slug', 'value'=>set_value('slug', $slug), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="sequence" class="col-sm-2 control-label"><?php echo lang('sequence');?> </label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'sequence', 'value'=>set_value('sequence', $sequence), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="parent_id" class="col-sm-2 control-label"><?php echo lang('parent');?> </label>
								<div class="col-sm-10">
									<?php
									$data	= array(0 => lang('top_level_category'));
									foreach($categories as $parent)
									{
										if($parent->id != $id)
										{
											$data[$parent->id] = $parent->name;
										}
									}
									echo form_dropdown('parent_id', $data, $parent_id);
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="excerpt" class="col-sm-2 control-label"><?php echo lang('excerpt');?> </label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'excerpt', 'value'=>set_value('excerpt', $excerpt), 'class'=>'form-control', 'rows'=>3);
									echo form_textarea($data);
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="image" class="col-sm-2 control-label"><?php echo lang('image');?> </label>
								<div class="col-sm-10">
									<div class="input-append">
										<?php echo form_upload(array('name'=>'image'));?><span class="add-on"><?php echo lang('max_file_size');?> <?php echo  $this->config->item('size_limit')/1024; ?>kb</span>
									</div>

									<?php if($id && $image != ''):?>

										<div style="text-align:center; padding:5px; border:1px solid #ddd;"><img src="<?php echo base_url('uploads/images/small/'.$image);?>" alt="current"/><br/><?php echo lang('current_file');?></div>

									<?php endif;?>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="seo_tab">
							<div class="form-group">
								<label for="seo_title" class="col-sm-2 control-label"><?php echo lang('seo_title');?> </label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'seo_title', 'value'=>set_value('seo_title', $seo_title), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"><?php echo lang('meta');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('rows'=>3, 'name'=>'meta', 'value'=>set_value('meta', html_entity_decode($meta)), 'class'=>'form-control');
									echo form_textarea($data);
									?>
									<label class="label label-info"><?php echo lang('meta_data_description');?></label>
								</div>
							</div>
						</div>
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