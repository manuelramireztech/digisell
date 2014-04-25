<div class="row">
	<div class="col-md-12">
		<?php
		$f_company	= array('name'=>'company','class'=>'form-control', 'value'=> set_value('company',$company));
		$f_address1	= array('name'=>'address1', 'class'=>'form-control','value'=>set_value('address1',$address1));
		$f_address2	= array('name'=>'address2', 'class'=>'form-control','value'=> set_value('address2',$address2));
		$f_first	= array('name'=>'firstname', 'class'=>'form-control','value'=> set_value('firstname',$firstname));
		$f_last		= array('name'=>'lastname', 'class'=>'form-control','value'=> set_value('lastname',$lastname));
		$f_email	= array('name'=>'email', 'class'=>'form-control','value'=>set_value('email',$email));
		$f_phone	= array('name'=>'phone', 'class'=>'form-control','value'=> set_value('phone',$phone));
		$f_city		= array('name'=>'city','class'=>'form-control', 'value'=>set_value('city',$city));
		$f_zip		= array('maxlength'=>'10', 'class'=>'form-control', 'name'=>'zip', 'value'=> set_value('zip',$zip));
		?>
		<?php echo form_open($this->config->item('admin_folder').'/customers/address_form/'.$customer_id.'/'.$id, 'class="form-horizontal"');?>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('address_form') ?>
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
					<label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('company');?></label>
					<div class="col-sm-10">
						<?php echo form_input($f_company);?>
					</div>
				</div>
				<input type="hidden" value="">
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('firstname');?></label>
					<div class="col-sm-10">
						<?php echo form_input($f_first);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('lastname');?></label>
					<div class="col-sm-10">
						<?php echo form_input($f_last);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('email');?></label>
					<div class="col-sm-10">
						<?php echo form_input($f_email);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('phone');?></label>
					<div class="col-sm-10">
						<?php echo form_input($f_phone);?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"><?php echo lang('country');?></label>
					<div class="col-sm-3">
						<?php echo form_dropdown('country_id', $countries_menu, set_value('country_id', $country_id), 'id="f_country_id" class="form-control drp"');?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('address');?></label>
					<div class="col-sm-10">
						<?php echo form_input($f_address1);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('');?></label>
					<div class="col-sm-10">
						<?php echo form_input($f_address2);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('city');?></label>
					<div class="col-sm-10">
						<?php echo form_input($f_city);?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('state');?></label>
					<div class="col-sm-3">
						<?php echo form_dropdown('zone_id', $zones_menu, set_value('zone_id', $zone_id), 'id="f_zone_id" class="form-control drp"');?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('zip');?></label>
					<div class="col-sm-10">
						<?php echo form_input($f_zip);?>
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

		<script type="text/javascript">
			$(document).ready(function(){
				$('#f_country_id').change(function(){
					$.post('<?php echo site_url(config_item('admin_folder').'/locations/get_zone_menu');?>',{id:$('#f_country_id').val()}, function(data) {
						$('#f_zone_id').html(data);
					});

				});
			});
		</script>
	</form>
</div>
</div>