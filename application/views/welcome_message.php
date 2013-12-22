

<div class="row">
	<ul class="breadcrumb">
		<?php echo create_breadcrumb($this->uri->uri_string()); ?>
	</ul>

	<div class="form-group hiddn-minibar pull-right">
		<input type="text" class="form-control form-cascade-control nav-input-search" size="20" placeholder="Search through site" />
	</div>

	<h3 class="page-header"><i class="fa fa fa-dashboard"></i>  <?php echo ucfirst($this->uri->segment(2));?> </h3>

</div>

<div class="row">
	<div class="col-md-12">
		<div id="container">
			<h1>Welcome to CodeIgniter!</h1>

				<?php echo form_input(array(
		'class'=>'form-control form-cascade-control',
		'name'=>'company_name',
		'id'=>'company_name_input',
		'value'=>'987698')
	);?>

			<div id="body">
				<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

				<p>If you would like to edit this page you'll find it located at:</p>
				<code>application/views/welcome_message.php</code>

				<p>The corresponding controller for this page is found at:</p>
				<code>application/controllers/welcome.php</code>

				<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			</div>


		</div>
	</div>

</div>