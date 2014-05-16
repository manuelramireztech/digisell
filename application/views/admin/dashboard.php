<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<?php 
			echo $user->email.br(1); 
			echo $user->first_name.br(1);
			echo $this->session->userdata('email');

		?>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>