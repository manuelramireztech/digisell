<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
			<?php if ($this->session->flashdata('message')):?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('message');?>
                </div>
           	<?php endif;?>
           	<?php if ($this->session->flashdata('error')):?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('error');?>
                </div>
           	<?php endif;?>
        <div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	Application Settings
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
		  		<form id="form_settings" class="form-horizontal" method="post" action="<?php echo base_url('index.php').'/admin_config/save'; ?>">
			  		<?php  
			  			if($info)
			  			{
			  				$date = $info->date_format;
			  				$name = $info->site_name;
			  				$email = $info->default_email;
			  			}
			  			else
			  			{
			  				$date = '';
			  				$name = '';
			  				$email = '';
			  			}
			  		?>
				  <div class="form-group">
				    <label for="date_format" class="col-sm-2 control-label">Choose Date Format</label>
				    <div class="col-sm-1">
				      	<?php  
				      		$args = array(
				      				'd-m-Y'=>($date == 'd-m-Y') ? '* d-m-Y' : 'd-m-Y',
				      				'm-d-Y'=>($date == 'm-d-Y') ? '* m-d-Y' : 'm-d-Y',
				      				'M d Y'=>($date == 'M d Y') ? '* M d Y' : 'M d Y',
				      				'd M Y'=>($date == 'd M Y') ? '* d M Y' : 'd M Y'
				      			);
				      		echo form_dropdown('date_format', $args, $date, 'class="form-control drp"');
				      	?>
				    </div>
				  </div>

				  <div class="form-group">
				  	<label for="site_name" class="col-sm-2 control-label">Default Site Title</label>
				  	<div class="col-sm-4">
				  		<?php 
				  			$inp = array(
				  				'name'=>'site_name',
				  				'id'=>'site_name',
				  				'class'=>'form-control',
				  				'value'=>$name
				  				);
				  		?>
				  		<?php echo form_input($inp); ?>
				  	</div>
				  </div>

				  <div class="form-group">
				  	<label for="default_email" class="col-sm-2 control-label">Default Email</label>
				  	<div class="col-sm-4">
				  		<?php 
				  			$inp = array(
				  				'name'=>'default_email',
				  				'id'=>'default_email',
				  				'class'=>'form-control',
				  				'value'=>$email
				  				);
				  		?>
				  		<?php echo form_input($inp); ?>
				  	</div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-xs btn-primary">Save</button>
				    </div>
				  </div>
				</form>
		  </div>
		</div> 
			<?php if ($this->session->flashdata('news_message')):?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('news_message');?>
                </div>
           	<?php endif;?>
           	<?php if ($this->session->flashdata('news_error')):?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('news_error');?>
                </div>
           	<?php endif;?>
		<div class="panel">
			<div class="panel-heading">
			    <h3 class="panel-title">
			    	News Information
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
				<form id="form_news" class="form-horizontal" method="post" action="<?php echo base_url('index.php').'/admin_config/save_news' ?>">
					<div class="from-group">
						<div class="col-sm-12">
							<textarea name="news" id="news" class="form-control" cols="30" rows="8"><?php echo ($news) ? $news->news : ''; ?></textarea>
						</div>
					</div>   	
				  	<div class="form-group">
				    	<div class="col-sm-offset-2 col-sm-10">
				      		<br><button id="btn_news" type="submit" class="btn btn-xs btn-primary">Save</button>
				    	</div>
				  	</div>
				</form>
		  	</div>	
		</div>  	
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>