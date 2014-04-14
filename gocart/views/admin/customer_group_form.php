<div class="row">
	<div class="col-md-12">
		<?php 
		$f_name				= form_input('name', set_value('name', $name), 'class="form-control"');
		$f_discount			= form_input('discount', set_value('discount', $discount), 'class="form-control"');
		$f_discount_type	= form_dropdown('discount_type', array('percent'=>'percent','fixed'=>'fixed'), set_value('discount_type', $discount_type), 'class="input-sm"');

		echo form_open($this->config->item('admin_folder').'/customers/edit_group/'.$id, 'class="form-horizontal"'); 

		?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('group') ?>
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
                       <label class="col-sm-2 control-label"><?php echo lang('group_name');?></label>
                       <div class="col-sm-4">
                          <?php echo $f_name; ?>
                      </div>
                  	</div>
                  	<div class="form-group">
                       <label class="col-sm-2 control-label"><?php echo lang('discount');?></label>
                       <div class="col-sm-4">
                          <?php echo $f_discount ?>
                      </div>
                  	</div>
					<div class="form-group">
                       <label class="col-sm-2 control-label"><?php echo lang('discount_type');?></label>
                       <div class="col-sm-4">
                          <?php echo $f_discount_type  ?>
                      </div>
                  	</div>
					<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
					<input class="btn btn-primary" type="submit" value="<?php echo lang('save');?>"/>
      
    </div>
  </div>
					
				</div>
				
				
			</div>

			<!-- /panel body -->
		</div>




	</form>

</div>
</div>