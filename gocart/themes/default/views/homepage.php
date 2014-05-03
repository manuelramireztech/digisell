<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo 'Homepage' ?>
					<span class="panel-options">
						
						
					</span>
				</h3>
			</div>
			<div class="panel-body">
				<div class="row">
			    <div class="col-md-12">
			        <?php $this->banners->show_collection(1, 5);?>
			        
			    </div>
			</div>

			<?php $this->banners->show_collection(2, 3, '3_box_row');?>
				
			</div>

			<!-- /panel body -->
		</div>








