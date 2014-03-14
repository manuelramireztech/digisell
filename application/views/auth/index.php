<?php include('partials/header.php'); ?>  
  						<!-- /header -->
  						<div class="row">
  							<div class="col-mod-12">

  								<ul class="breadcrumb">
  									<li><a href="index.php">Dashboard</a></li>
  									<li><a href="template.php">Basic Template</a></li>
  									<li class="active">BreadCrumb</li>
  								</ul>

  								<div class="form-group hiddn-minibar pull-right">
  									<input type="text" class="form-control form-cascade-control nav-input-search" size="20" placeholder="Search through site" />

  									<span class="input-icon fui-search"></span>
  								</div>

  								<h3 class="page-header"> Admin Control Panel <i class="fa fa-info-circle animated bounceInDown show-info"></i> </h3>

  								<blockquote class="page-information hidden">
  									<p>
  										<b>Admin Control Panel</b> is the basic page where you can add more pages according to your requirements easily within this division.
  									</p>
  								</blockquote>

  							</div>
  						</div>

  						<!-- Demo Panel -->
  						<div class="row">
  							<div class="col-md-12">
  								<div class="panel panel-cascade">
  									<div class="panel-heading">
  										
									<h1><?php echo lang('index_heading');?></h1>
<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table class="table table-striped">
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
	<?php endforeach;?>
</table>
</br>
<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>

<p><?php echo anchor("auth/change_password/".$user->id, lang('reset_password_heading'))?></p>


								







  									</div>
  									<div class="panel-body panel-border">
  										This is a admin page allows you to change user details.
  									</div> <!-- /panel body	
  								</div>	
  							</div>
  						</div>

  					</div>  --><!-- /.content -->

  					<!-- .right-sidebar -->
  					<div class="right-sidebar right-sidebar-hidden">
  						<div class="right-sidebar-holder">

  							<!-- @Demo part only The part from here can be removed till end of the @demo  -->
  							<a href="screens.php" class="btn btn-danger btn-block">Logout </a>


  							<h4 class="page-header text-primary text-center">
  								Theme Options
  								<a  href="#"  class="theme-panel-close text-primary pull-right"><strong><i class="fa fa-times"></i></strong></a>
  							</h4>

  							<ul class="list-group theme-options">
  								<li class="list-group-item" href="#">	
  									<div class="checkbox">
  										<label>
  											<input type="checkbox" id="fixedNavbar" value=""> Fixed Top Navbar
  										</label>
  									</div>
  									<div class="checkbox">
  										<label>
  											<input type="checkbox" id="fixedNavbarBottom" value=""> Fixed Bottom Navbar
  										</label>
  									</div>
  									<div class="checkbox">
  										<label>
  											<input type="checkbox" id="boxed" value=""> Boxed Version
  										</label>
  									</div>
  									
  									<div class="form-group backgroundImage hidden" >
  										<label class="control-label">Paste Image Url and then hit enter</label>
  										<input type="text" class="form-control" id="backgroundImageUrl" />
  									</div>
				<!-- 
				<div class="checkbox">
					<label>
						<input type="checkbox" id="responsive" value=""> Disable Responsiveness
					</label>
				</div> 
			-->			
		</li>
		<li class="list-group-item" href="#">Predefined Themes
			<ul class="list-inline predefined-themes"> 
				<li><a class="badge" style="background-color:#54b5df" data-color-primary="#54b5df" data-color-secondary="#2f4051" data-color-link="#FFFFFF"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#d85f5c" data-color-primary="#d85f5c" data-color-secondary="#f0f0f0" data-color-link="#474747"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#3d4a5d" data-color-primary="#3d4a5d" data-color-secondary="#edf0f1" data-color-link="#777e88"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#A0B448" data-color-primary="#A0B448" data-color-secondary="#485257" data-color-link="#AFB5AA"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#2FA2D1" data-color-primary="#2FA2D1" data-color-secondary="#484D51" data-color-link="#A5B1B7"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#2f343b" data-color-primary="#2f343b" data-color-secondary="#525a65" data-color-link="#FFFFFF"> &nbsp; </a></li>
			</ul>
		</li>
		<li class="list-group-item" href="#">Change Primary Color
			<div class="input-group colorpicker-component bscp" data-color="#54728c" data-color-format="hex" id="colr">
				<span class="input-group-addon"><i style="background-color: #54728c"></i></span>
				<input type="text" value="#54728c" id="primaryColor" readonly class="form-control" />

			</div>
		</li>
		<li class="list-group-item" href="#">Change LeftSidebar Background
			<div class="input-group colorpicker-component bscp" data-color="#f9f9f9" data-color-format="hex" id="Scolr">
				<span class="input-group-addon"><i style="background-color: #f9f9f9"></i></span>
				<input type="text" value="#f9f9f9" id="secondaryColor" readonly class="form-control" />

			</div>
		</li>
		<li class="list-group-item" href="#">Change Leftsidebar Link Color
			<div class="input-group colorpicker-component bscp" data-color="#54728c" data-color-format="hex" id="Lcolr">
				<span class="input-group-addon"><i style="background-color: #54728c"></i></span>
				<input type="text" value="#54728c" id="linkColor" readonly class="form-control" />

			</div>
		</li>
		<li class="list-group-item" href="#">Change RightSidebar Background
			<div class="input-group colorpicker-component bscp" data-color="#f9f9f9" data-color-format="hex" id="Rcolr">
				<span class="input-group-addon"><i style="background-color: #f9f9f9"></i></span>
				<input type="text" value="#f9f9f9" id="rightsidebarColor" readonly class="form-control" />

			</div>
		</li>
	</li>
</ul>
<!-- /.@Demo part only The part to here can be removed   -->
<div id="bic_calendar_right" class="bg-white"></div>

<h4 class="page-header text-primary">Current Projects </h4>

<div class="list-group projects">
	<a class="list-group-item" href="#">	
		<p> Archon <span class="pull-right label bg-success">90%</span></p>
		<div class="progress progress-mini">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
				<span class="sr-only">90% Complete</span>
			</div>
		</div>

	</a>
	<a class="list-group-item" href="#">	
		<p> Banshee <span class="pull-right label bg-warning">40%</span></p>
		<div class="progress progress-mini">
			<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
				<span class="sr-only">40% Complete</span>
			</div>
		</div>

	</a>
	<a class="list-group-item" href="#">	
		<p> Cascade <span class="pull-right label bg-primary">40%</span></p>
		<div class="progress progress-mini">
			<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
				<span class="sr-only">75% Complete</span>
			</div>
		</div>
	</a>
</div>
<h4 class="page-header">Contacts</h4>
<div class="list-group contact-list">
	<a class="list-group-item">
		<img src="images/profiles/one.png" class="chat-user-avatar" alt="">
		Jane Doe
		<i class="fa fa-circle"></i>
	</a>
	<a class="list-group-item contact">
		<img src="images/profiles/two.png" class="chat-user-avatar" alt="">
		Jenny
		<i class="fa fa-circle online"></i>
	</a>
	<a class="list-group-item contact">
		<img src="images/profiles/three.png" class="chat-user-avatar" alt="">
		Vijay
		<i class="fa fa-circle busy"></i>
	</a>
	<a class="list-group-item">
		<img src="images/profiles/four.png" class="chat-user-avatar" alt="">
		Nikky
		<i class="fa fa-circle offline"></i>
	</a>
	<a class="list-group-item contact">
		<img src="images/profiles/five.png" class="chat-user-avatar" alt="">
		John
		<i class="fa fa-circle"></i>
	</a>
	<a class="list-group-item contact">
		<img src="images/profiles/six.png" class="chat-user-avatar" alt="">
		Anusha
		<i class="fa fa-circle"></i>
	</a>
	<a class="list-group-item">
		<img src="images/profiles/seven.png" class="chat-user-avatar" alt="">
		Antony
		<i class="fa fa-circle offline"></i>
	</a>
	<a class="list-group-item contact">
		<img src="images/profiles/eight.png" class="chat-user-avatar" alt="">
		Fana
		<i class="fa fa-circle busy"></i>
	</a>
	<a class="list-group-item contact">
		<img src="images/profiles/nine.png" class="chat-user-avatar" alt="">
		Chris
		<i class="fa fa-circle offline"></i>
	</a>
	<a class="list-group-item">
		<img src="images/profiles/ten.png" class="chat-user-avatar" alt="">
		Sandy
		<i class="fa fa-circle online"></i>
	</a>
	<a class="list-group-item contact">
		<img src="images/profiles/eleven.png" class="chat-user-avatar" alt="">
		Ajay
		<i class="fa fa-circle"></i>
	</a>
	<a class="list-group-item contact">
		<img src="images/profiles/twelve.png" class="chat-user-avatar" alt="">
		Sanju
		<i class="fa fa-circle"></i>
	</a>
</div>
</div>


</div>	<!-- /.right-sidebar-holder -->
</div>  <!-- /.right-sidebar -->

<!-- /rightside bar -->

</div> <!-- /.box-holder -->
</div><!-- /.site-holder -->



<!-- Load JS here for Faster site load =============================-->
<script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url(); ?>js/less-1.5.0.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-switch.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.tagsinput.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.placeholder.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>
<script src="<?php echo base_url(); ?>js/application.js"></script>
<script src="<?php echo base_url(); ?>js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.sortable.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.gritter.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>js/skylo.js"></script>
<script src="<?php echo base_url(); ?>js/prettify.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>
<script src="<?php echo base_url(); ?>js/bic_calendar.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.accordion.js"></script>
<script src="<?php echo base_url(); ?>js/theme-options.js"></script>

<script src="<?php echo base_url(); ?>js/bootstrap-progressbar.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-progressbar-custom.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-colorpicker-custom.js"></script>

<!-- Core Jquery File  =============================-->
<script src="<?php echo base_url(); ?>js/core.js"></script>


</body>
</html>