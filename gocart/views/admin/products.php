<div class="row">
	<div class="col-md-12">
		<?php
//set "code" for searches
		if(!$code)
		{
			$code = '';
		}
		else
		{
			$code = '/'.$code;
		}
		function sort_url($lang, $by, $sort, $sorder, $code, $admin_folder)
		{
			if ($sort == $by)
			{
				if ($sorder == 'asc')
				{
					$sort	= 'desc';
					$icon	= ' <i class="icon-chevron-up"></i>';
				}
				else
				{
					$sort	= 'asc';
					$icon	= ' <i class="icon-chevron-down"></i>';
				}
			}
			else
			{
				$sort	= 'asc';
				$icon	= '';
			}


			$return = site_url($admin_folder.'/products/index/'.$by.'/'.$sort.'/'.$code);

			echo '<a href="'.$return.'">'.lang($lang).$icon.'</a>';

		}

		if(!empty($term)):
			$term = json_decode($term);
		if(!empty($term->term) || !empty($term->category_id)):?>
		<div class="alert alert-info">
			<?php echo sprintf(lang('search_returned'), intval($total));?>
		</div>
	<?php endif;?>
<?php endif;?>

<script type="text/javascript">
	function areyousure()
	{
		return confirm('<?php echo lang('confirm_delete_product');?>');
	}
</script>
<style type="text/css">
	.pagination {
		margin:0px;
		margin-top:-3px;
	}
</style>

		<div class="row">
			<div class="col-md-4">
				<?php echo $this->pagination->create_links();?>
				
			</div>
			<div class="col-md-8">
				<?php echo form_open($this->config->item('admin_folder').'/products/index', 'class="form-inline pull-right" ');?>
					<?php

					function list_categories($id, $categories, $sub='') {

						foreach ($categories[$id] as $cat):?>
						<option class="input-xs" value="<?php echo $cat->id;?>"><?php echo  $sub.$cat->name; ?></option>
						<?php
						if (isset($categories[$cat->id]) && sizeof($categories[$cat->id]) > 0)
						{
							$sub2 = str_replace('&rarr;&nbsp;', '&nbsp;', $sub);
							$sub2 .=  '&nbsp;&nbsp;&nbsp;&rarr;&nbsp;';
							list_categories($cat->id, $categories, $sub2);
						}
						endforeach;
					}

					if(!empty($categories))
					{
						echo '<div class="form-group"><select name="category_id" class="form-control">';
						echo '<option value="">'.lang('filter_by_category').'</option>';
						list_categories(0, $categories);
						echo '</select></div>';

					}?>
					<div class="form-group">
						<input type="text" class="form-control" name="term" placeholder="<?php echo lang('search_term');?>" /> 
													
					</div>
					<button class="btn" name="submit" value="search"><?php echo lang('search')?></button>
					<a class="btn btn-warning" href="<?php echo site_url($this->config->item('admin_folder').'/products/index');?>">Reset</a>
			</form>
		</div>
	</div>

<div class="btn-group pull-right">
</div>
<br>
<?php echo form_open($this->config->item('admin_folder').'/products/bulk_save', array('id'=>'bulk_form'));?>
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title ">
		<?php echo lang('products') ?>
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
			<table class="table table-striped">
				<thead>
					<tr>
						<th><?php echo sort_url('sku', 'sku', $order_by, $sort_order, $code, $this->config->item('admin_folder'));?></th>
						<th><?php echo sort_url('name', 'name', $order_by, $sort_order, $code, $this->config->item('admin_folder'));?></th>
						<th><?php echo sort_url('price', 'price', $order_by, $sort_order, $code, $this->config->item('admin_folder'));?></th>
						<th><?php echo sort_url('saleprice', 'saleprice', $order_by, $sort_order, $code, $this->config->item('admin_folder'));?></th>
						<th><?php echo sort_url('quantity', 'quantity', $order_by, $sort_order, $code, $this->config->item('admin_folder'));?></th>
						<th><?php echo sort_url('enabled', 'enabled', $order_by, $sort_order, $code, $this->config->item('admin_folder'));?></th>
						<th>
							<span class="btn-group pull-right">
								<button class="btn" href="#"><i class="icon-ok"></i> <?php echo lang('bulk_save');?></button>
								<a class="btn btn-primary" style="font-weight:normal;"href="<?php echo site_url($this->config->item('admin_folder').'/products/form');?>"><i class="icon-plus-sign"></i> <?php echo lang('add_new_product');?></a>
							</span>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php echo (count($products) < 1)?'<tr><td style="text-align:center;" colspan="7">'.lang('no_products').'</td></tr>':''?>
					<?php foreach ($products as $product):?>
						<tr>
							<td><?php echo form_input(array('name'=>'product['.$product->id.'][sku]','value'=>form_decode($product->sku), 'class'=>'input-sm'));?></td>
							<td><?php echo form_input(array('name'=>'product['.$product->id.'][name]','value'=>form_decode($product->name), 'class'=>'input-sm'));?></td>
							<td><?php echo form_input(array('name'=>'product['.$product->id.'][price]', 'value'=>set_value('price', $product->price), 'class'=>'input-sm'));?></td>
							<td><?php echo form_input(array('name'=>'product['.$product->id.'][saleprice]', 'value'=>set_value('saleprice', $product->saleprice), 'class'=>'input-sm'));?></td>
							<td><?php echo ((bool)$product->track_stock)?form_input(array('name'=>'product['.$product->id.'][quantity]', 'value'=>set_value('quantity', $product->quantity), 'class'=>'input-sm')):'N/A';?></td>
							<td>
								<?php
								$options = array(
									'1'	=> lang('enabled'),
									'0'	=> lang('disabled')
									);

								echo form_dropdown('product['.$product->id.'][enabled]', $options, set_value('enabled',$product->enabled), 'class="input-sm"');
								?>
							</td>
							<td>
								<span class="btn-group pull-right">
									<a class="btn btn-primary" href="<?php echo  site_url($this->config->item('admin_folder').'/products/form/'.$product->id);?>"><i class="icon-pencil"></i>  <?php echo lang('edit');?></a>
									<a class="btn btn-primary" href="<?php echo  site_url($this->config->item('admin_folder').'/products/form/'.$product->id.'/1');?>"><i class="icon-share-alt"></i> <?php echo lang('copy');?></a>
									<a class="btn btn-danger" href="<?php echo  site_url($this->config->item('admin_folder').'/products/delete/'.$product->id);?>" onclick="return areyousure();"><i class="icon-trash icon-white"></i> <?php echo lang('delete');?></a>
								</span>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>

	<!-- /panel body -->
</div>

</form>
</div>
</div>