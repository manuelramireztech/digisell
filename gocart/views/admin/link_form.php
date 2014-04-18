<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/pages/link_form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('link_form') ?>
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
					<label for="menu_title" class="col-sm-2 control-label"><?php echo lang('title');?></label>
					<div class="col-sm-10">
						<?php
						$data	= array('id'=>'title', 'name'=>'title', 'value'=>set_value('title', $title), 'class'=>'form-control');
						echo form_input($data);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="url" class="col-sm-2 control-label"><?php echo lang('url');?></label>
					<div class="col-sm-10">
						<?php
						$data	= array('id'=>'url', 'name'=>'url', 'value'=>set_value('url', $url), 'class'=>'form-control'); 
						echo form_input($data);
						?><span class="help-inline"><?php echo lang('url_example');?></span>
					</div>
				</div>
				<div class="form-group">
					<label for="sequence" class="col-sm-2 control-label"><?php echo lang('parent_id');?></label>
					<div class="col-sm-10">
						<?php
						$options	= array();
						$options[0]	= lang('top_level');
						function page_loop($pages, $dash = '', $id=0)
						{
							$options	= array();
							foreach($pages as $page)
							{
			//this is to stop the whole tree of a particular link from showing up while editing it
								if($id != $page->id)
								{
									$options[$page->id]	= $dash.' '.$page->title;
									$options			= $options + page_loop($page->children, $dash.'-', $id);
								}
							}
							return $options;
						}
						$options	= $options + page_loop($pages, '', $id);
						echo form_dropdown('parent_id', $options,  set_value('parent_id', $parent_id, 'class="form-input"'), 'style="margin-left:10px"');
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="sequence" class="col-sm-2 control-label"><?php echo lang('sequence');?></label>
					<div class="col-sm-10">
						<?php
						$data	= array('id'=>'sequence', 'name'=>'sequence', 'value'=>set_value('sequence', $sequence), 'class'=>'form-control');
						echo form_input($data);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<label class="checkbox">
							<?php
							$data	= array('name'=>'new_window', 'class'=>'form-input', 'value'=>'1', 'checked'=>(bool)$new_window);
							echo form_checkbox($data);
							?>
							<?php echo lang('open_in_new_window');?></label>
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
	</div>
</div>