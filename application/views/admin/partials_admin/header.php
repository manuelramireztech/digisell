<?php echo doctype('html5'); ?>
<html lang="en">
<head>
	<title>Digisell</title>
	<?php 
	$link_bootstrap = array(
		'href' => 'css/bootstrap.css',
		'rel' => 'stylesheet',
		'type' => 'text/css',
		);
	$link_custom = array(
		'href' => 'css/custom.css',
		'rel' => 'stylesheet',
		'type' => 'text/css',
		);
	$link_fstyle = array(
		'href' => 'css/style.css',
		'rel' => 'stylesheet',
		'type' => 'text/css',
		);
	echo link_tag($link_bootstrap);
	echo link_tag($link_fstyle);
	echo link_tag($link_custom);
	
	?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                      <![endif]-->
                      <!-- <script src="js/jquery/jquery.js"></script>
                      <script>
                        $(document).ready(function() {
                            $('.site-holder').hide();                    
                        });
                      </script> -->
                    </head>
                    <body>
                     <div class="site-holder">
                      <!-- .navbar -->
                      <nav class="navbar  navbar-default nav-delighted " role="navigation">
                        <a href="#" class="toggle-left-sidebar">
                          <i class="fa fa-th-list"></i>
                        </a>
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <a class="navbar-brand" href="#">
                            Digisell</a>
                          </div>

                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                              <li>
                                <form role="search" class="search-form">
                                  <div class="form-group">
                                    <input type="text" class="form-control  nav-input-search " placeholder="Search ">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </form>
                              </li>
                              <li>
                                <a href='<?php echo site_url('admin_dashboard/logout'); ?>' class="logout">
                                  <i class="fa fa-power-off"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <!-- /.navbar-collapse -->
                        </nav>                    
                        <!-- .box-holder -->
                        <div class="box-holder">
                          <!-- .left-sidebar -->
                          <div class="left-sidebar">
                            <div class="sidebar-holder">
                              <!-- User   -->
                              <div class="user-menu">
                                <img src="<?php echo base_url(); ?>images/avatar.png" alt="" class="avatar">
                                <div class="user-info">
                                  <div class="welcome">Welcome,</div>
                                  <div class="username"><?php echo $user->first_name; ?></div>
                                </div>
                                <div class="user-status">
                                  <i class="fa fa-circle "></i>
                                </div>
                              </div>
                              <!-- /.User   -->

                              <!-- Menu -->
                              <ul class="nav  nav-list">
                                <li class='<?php echo ($this->uri->segment(2)=="login") ? "active" : "" ; ?>'>
                                  <a href='admin_dashboard' data-original-title='Dashboard'>
                                    <i class='icon ion-home'></i>

                                    <span class='hidden-minibar'>Dashboard</span>
                                  </a>
                                </li>
                                <li class=''>
                                  <a href='admin_dashboard' data-original-title='Dashboard'>
                                    <i class='icon ion-person-stalker'></i>

                                    <span class='hidden-minibar'>Clients</span>
                                  </a>
                                </li>
                                <li class=''>
                                  <a href='admin_dashboard' data-original-title='Dashboard'>
                                    <i class='icon ion-bag'></i>

                                    <span class='hidden-minibar'>Products</span>
                                  </a>
                                </li>
                                <li class=''>
                                  <a href='admin_dashboard' data-original-title='Dashboard'>
                                    <i class='icon ion-card'></i>

                                    <span class='hidden-minibar'>Licensing</span>
                                  </a>
                                </li>
                                <li class=''>
                                  <a href='admin_dashboard' data-original-title='Dashboard'>
                                    <i class='icon ion-clipboard'></i>

                                    <span class='hidden-minibar'>Billing</span>
                                  </a>
                                </li>
                                <li class=''>
                                  <a href='admin_dashboard' data-original-title='Dashboard'>
                                    <i class='icon ion-settings'></i>

                                    <span class='hidden-minibar'>Configuration</span>
                                  </a>
                                </li>
                              </ul>

                          <!-- /.Menu -->

                        </div>
                        <!-- /.left-sidebar Holder-->
                      </div>
                      <!-- /.left-sidebar -->

                      


                      <!-- .content -->
                      <div class="content  animated fadeInBig">
                        <div class=" breadcrumb-holder">
                          <ul class="breadcrumb">
                            <li class="active">DashBoard</li>
                            <li>
                              <a href="#">Dashboard</a>
                            </li>
                            <li>
                              <a href="#">Template</a>
                            </li>
                          </ul>
                          <a href="#" class="options-toggle">
                            <i class="fa fa-th"></i>
                          </a>
                          <a href="#" class="refresh-storage">
                            <i class="fa fa-refresh"></i>
                          </a>
                        </div>
                        <div class="options-holder closed   animated  fadeInLeft  ">
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-blue">
                              <a href="inbox" class="fa-links">
                                <i class="fa fa-3x fa-envelope"></i>
                                <h1>Inbox</h1>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-orange">
                              <a href="form-elements" class="fa-links">
                                <i class="fa fa-3x fa fa-hdd-o"></i>
                              </a>
                              <h1>Forms</h1>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-midnight-blue">
                              <a href="invoice" class="fa-links">
                                <i class="fa fa-3x fa-money"></i>
                                <h1>Invoice</h1>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-amethyst">
                              <a href="profile" class="fa-links">
                                <i class="fa fa-3x fa-users"></i>
                                <h1>Users</h1>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-red">
                              <a href="file-manager" class="fa-links">
                                <i class="fa fa-3x fa-file-o"></i>
                                <h1>Files</h1>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-lime">
                              <a href="dropzone" class="fa-links">
                                <i class="fa fa-3x fa-cloud-upload"></i>
                                <h1>Upload</h1>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="main-content">











