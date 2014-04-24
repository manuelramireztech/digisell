
<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('form_checkout') ?>
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
				<?php include('order_details.php');?>

	<div class="row">
		<div class="col-md-12">
			<h2><?php echo lang('payment_method');?></h2>
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
				<?php
				if(empty($payment_method))
				{
					$selected	= key($payment_methods);
				}
				else
				{
					$selected	= $payment_method['module'];
				}
				foreach($payment_methods as $method=>$info):?>
					<li <?php echo ($selected == $method)?'class="active"':'';?>><a href="#payment-<?php echo $method;?>" data-toggle="tab"><?php echo $info['name'];?></a></li>
				<?php endforeach;?>
				</ul>
				<div class="tab-content">
					<?php foreach ($payment_methods as $method=>$info):?>
						<div id="payment-<?php echo $method;?>" class="tab-pane<?php echo ($selected == $method)?' active':'';?>">
							<?php echo form_open('checkout/step_3', 'id="form-'.$method.'"');?>
								<input type="hidden" name="module" value="<?php echo $method;?>" />
								<?php echo $info['form'];?>
								<div class="row" style="margin-top:20px">
									<div class="col-sm-2">
										<input class="btn btn-large btn-success" type="submit" value="<?php echo lang('form_continue');?>"/>
									</div>									
								</div>
								
							</form>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
				
			</div>

			<!-- /panel body -->
		</div>
