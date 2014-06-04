<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	Digisell Addons
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
		  <?php if($addons): ?>
		  	<div class="table-responsive">
			  	<table class="table">
			  		<thead>
			  			<tr class="warning">
			  				<th>Addon Name</th>
			  				<th width="50%">Addon Description</th>
			  				<th>Created</th>
			  				<th>Options</th>
			  			</tr>
			  		</thead>
			  		<tbody>
			  			<?php foreach($addons as $addon){ ?>
			  				<tr>
			  					<td><?php echo $addon->addon_name ?></td>
			  					<td><?php echo $addon->addon_description ?></td>
			  					<td><?php echo date('d-m-Y H:i:s',$addon->created) ?></td>
			  					<td>
			  						<a href="#" class="btn btn-xs btn-default">Edit</a>
			  						<a href="#" class="btn btn-xs btn-default">Delete</a>
			  					</td>
			  				</tr>
						<?php } ?>
			  		</tbody>
			  	</table>
			</div>
		  <?php else: ?>
			<p class="text-center">No Addons found in the database. Please <a href="#" class='btn btn-xs btn-default'>Click Here</a> to begin</p>
		  <?php endif; ?>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>