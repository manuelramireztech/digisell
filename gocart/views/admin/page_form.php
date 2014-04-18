<div class="row">
	<div class="col-md-12">
		<?php echo form_open($this->config->item('admin_folder').'/pages/form/'.$id, 'class="form-horizontal"'); ?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('page_form') ?>
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
						<li class="active"><a href="#content_tab" data-toggle="tab"><?php echo lang('content');?></a></li>
						<li><a href="#attributes_tab" data-toggle="tab"><?php echo lang('attributes');?></a></li>
						<li><a href="#seo_tab" data-toggle="tab"><?php echo lang('seo');?></a></li>
					</ul>

					<div class="tab-content navbar-category">
						<div class="tab-pane active" id="content_tab">
							<div class="form-group">
								<label for="title" class="col-sm-2 control-label"><?php echo lang('title');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'title', 'value'=>set_value('title', $title), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="content" class="col-sm-2 control-label"><?php echo lang('content');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'content', 'class'=>'form-control', 'style'=>'margin-left:10px', 'value'=>set_value('content', $content));
									echo form_textarea($data);
									?>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="attributes_tab">
							<div class="form-group">
								<label for="menu_title" class="col-sm-2 control-label"><?php echo lang('menu_title');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'menu_title', 'value'=>set_value('menu_title', $menu_title), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="slug" class="col-sm-2 control-label"><?php echo lang('slug');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'slug', 'value'=>set_value('slug', $slug), 'class'=>'form-control');
									echo form_input($data);
									?>
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
									echo form_dropdown('parent_id', $options,  set_value('parent_id', $parent_id), 'style="margin-left:10px"');
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="sequence" class="col-sm-2 control-label"><?php echo lang('sequence');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'sequence', 'value'=>set_value('sequence', $sequence), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="seo_tab">
							<div class="form-group">
								<label for="code" class="col-sm-2 control-label"><?php echo lang('seo_title');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('name'=>'seo_title', 'value'=>set_value('seo_title', $seo_title), 'class'=>'form-control');
									echo form_input($data);
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="meta" class="col-sm-2 control-label"><?php echo lang('meta');?></label>
								<div class="col-sm-10">
									<?php
									$data	= array('rows'=>'3', 'name'=>'meta', 'class'=>'form-control', 'value'=>set_value('meta', html_entity_decode($meta)), 'style'=>'margin-left:10px');
									echo form_textarea($data);
									?>
								</div>
							</div>
							<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label"></label>
								<div class="col-sm-10">
									<p class="help-block"><?php echo lang('meta_data_description');?></p>
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
</div>
</div>