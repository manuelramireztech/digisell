<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	PHP Audit News & Information
		    	<div class="pull-right">
		    		Updated : <?php echo $news->date; ?>
		    	</div>
				
		    </h3>
		    
		  </div>
		  <div class="panel-body">
		    <?php echo $news->news; ?>
		  </div>
		</div>
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	PHP Audit News & Information
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
		    	<table class="table table-bordered">
		    		<tbody>
		    			<tr>
		    				<td>hi</td>
		    				<td></td>
		    			</tr>
		    			<tr>
		    				<td>hi</td>
		    				<td></td>
		    			</tr>
		    		</tbody>
		    	</table>
		    </div>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>