<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<form class="form-inline pull-right">
					<div class="form-group">
						<input class="form-control" type="text"  id="best_sellers_start" placeholder="<?php echo lang('from');?>"/>
						<input type="hidden" name="best_sellers_start" id="best_sellers_start_alt" /> 
					</div>
					<div class="form-group">
						<input class="form-control" type="text" id="best_sellers_end" placeholder="<?php echo lang('to');?>"/>
						<input type="hidden" name="best_sellers_end" id="best_sellers_end_alt" /> 
					</div>	
					<input class="btn btn-primary" type="button" value="<?php echo lang('get_best_sellers');?>" onclick="get_best_sellers()"/>
				</form>
			</div>
		</div>

		</br>
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title ">
							<?php echo lang('best_sellers');?>
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
							<div class="col-md-12" id="best_sellers"></div>
						</div>

					</div>
				</div>
			</div>

		</div>


		


		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<form class="form-inline pull-right">
					<select name="year" id="sales_year" class="">
						<?php foreach($years as $y):?>
							<option value="<?php echo $y;?>"><?php echo $y;?></option>
						<?php endforeach;?>
					</select>
					<input class="btn btn-primary" type="button" value="<?php echo lang('get_monthly_sales');?>" onclick="get_monthly_sales()"/>
				</form>
			</div>
		</div>
		
		</br>
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title ">
							<?php echo lang('sales');?>
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
							<div class="col-md-12" id="sales_container"></div>
						</div>

					</div>
				</div>
			</div>

		</div>
		


		<script type="text/javascript">

			$(document).ready(function(){
				get_best_sellers();
				get_monthly_sales();
				$('input:button').button();
				$('#best_sellers_start').datepicker({ dateFormat: 'mm-dd-yy', altField: '#best_sellers_start_alt', altFormat: 'yy-mm-dd' });
				$('#best_sellers_end').datepicker({ dateFormat: 'mm-dd-yy', altField: '#best_sellers_end_alt', altFormat: 'yy-mm-dd' });
			});

			function get_best_sellers()
			{
				show_animation();
				$.post('<?php echo site_url($this->config->item('admin_folder').'/reports/best_sellers');?>',{start:$('#best_sellers_start_alt').val(), end:$('#best_sellers_end_alt').val()}, function(data){
					$('#best_sellers').html(data);
					setTimeout('hide_animation()', 500);
				});
			}

			function get_monthly_sales()
			{
				show_animation();
				$.post('<?php echo site_url($this->config->item('admin_folder').'/reports/sales');?>',{year:$('#sales_year').val()}, function(data){
					$('#sales_container').html(data);
					setTimeout('hide_animation()', 500);
				});
			}

			function show_animation()
			{
				$('#saving_container').css('display', 'block');
				$('#saving').css('opacity', '.8');
			}

			function hide_animation()
			{
				$('#saving_container').fadeOut();
			}

		</script>

		<div id="saving_container" style="display:none;">
			<div id="saving" style="background-color:#000; position:fixed; width:100%; height:100%; top:0px; left:0px;z-index:100000"></div>
			<img id="saving_animation" src="<?php echo base_url('assets/img/storing_animation.gif');?>" alt="saving" style="z-index:100001; margin-left:-32px; margin-top:-32px; position:fixed; left:50%; top:50%"/>
			<div id="saving_text" style="text-align:center; width:100%; position:fixed; left:0px; top:50%; margin-top:40px; color:#fff; z-index:100001"><?php echo lang('loading');?></div>
		</div>
	</div>
</div>