<!DOCTYPE html>
<html>
<head>
    <title>Digisell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <!-- Styles -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/styles/glDatePicker.default.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>less/style.less" rel="stylesheet"  title="lessCss" id="lessCss">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
              <![endif]-->
              
          </head>
          <body>
            <?php $admin_url = site_url($this->config->item('admin_folder')).'/';?>
            <div class="site-holder">
                <!-- .navbar -->
                <nav class="navbar  navbar-default nav-delighted " role="navigation">
                    <a href="#" class="toggle-left-sidebar">
                        <i class="fa fa-th-list"></i>
                    </a>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo base_url(); ?>images/logoed.png" alt=""></a>
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
                                    <a href="<?php echo site_url($this->config->item('admin_folder').'/login/logout');?>" class="logout">
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
                                        <div class="username"><?php echo "Admin"; ?></div>
                                    </div>
                                    <div class="user-status">
                                        <i class="fa fa-circle "></i>
                                    </div>
                                </div>
                                <!-- /.User   -->

                                <!-- Menu -->
                                <ul class="nav  nav-list">
                                    <li class=''>
                                        <a href="<?php echo $admin_url; ?>" data-original-title='Dashboard'>
                                            <i class='fa fa-dashboard'></i>

                                            <span class='hidden-minibar'>Dashboard</span>
                                        </a>
                                    </li>
                                    <li class='submenu'>
                                        <a class='dropdown' onClick='return false;' href='#' data-original-title='Delighted-Gold'>
                                            <i class='fa fa-shopping-cart'></i>
                                            <span class='hidden-minibar'>Sales
                                                <i class='fa fa-chevron-right  pull-right'></i>
                                            </span>
                                        </a>
                                        <ul class="animated fadeInDown">
                                            <li class=' '>
                                                <a href="<?php echo $admin_url;?>orders" data-original-title='Tasks'>
                                                    <i class='fa fa-truck'></i>
                                                    <span class='hidden-minibar'>Orders</span>
                                                </a>
                                            </li>
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>customers' data-original-title='Inbox'>
                                                    <i class='fa fa-user'></i>
                                                    <span class='hidden-minibar'>Customers</span>
                                                </a>
                                            </li>
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>customers/groups' data-original-title='Profile'>
                                                    <i class='fa fa-group'></i>
                                                    <span class='hidden-minibar'>Groups</span>
                                                </a>
                                            </li>
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>reports' data-original-title='Invoice'>
                                                    <i class='fa fa-list-alt'></i>
                                                    <span class='hidden-minibar'>Reports</span>
                                                </a>
                                            </li>
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>coupons' data-original-title='Timeline'>
                                                    <i class='fa fa-star'></i>
                                                    <span class='hidden-minibar'>Coupons</span>
                                                </a>
                                            </li>
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>giftcards' data-original-title='Animations'>
                                                    <i class='fa fa-money'></i>
                                                    <span class='hidden-minibar'>Gift Cards</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class='submenu'>
                                        <a class='dropdown' onClick='return false;' href='#' data-original-title='UI-KITS'>
                                            <i class='fa fa-book'></i>
                                            <span class='hidden-minibar'>Catalog
                                                <i class='fa fa-chevron-right  pull-right'></i>
                                            </span>
                                        </a>
                                        <ul  class="animated fadeInDown">
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>categories' data-original-title='General-Elements'>
                                                    <i class='fa fa-list'></i>
                                                    <span class='hidden-minibar'>Categories</span>
                                                </a>
                                            </li>
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>products' data-original-title='Buttons'>
                                                    <i class='fa fa-tags'></i>
                                                    <span class='hidden-minibar'>Products</span>
                                                </a>
                                            </li>
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>digital_products' data-original-title='Tree-View'>
                                                    <i class='fa fa-desktop'></i>
                                                    <span class='hidden-minibar'>Digital Products</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class='submenu'>
                                        <a class='dropdown' onClick='return false;' href='#' data-original-title='Delighted-Pages'>
                                            <i class="fa fa-folder"></i>
                                            <span class='hidden-minibar'>Content
                                                <i class='fa fa-chevron-right  pull-right'></i>
                                            </span>
                                        </a>
                                        <ul  class="animated fadeInDown">
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>banners' data-original-title=' Login'>
                                                    <i class="fa fa-film"></i>
                                                    <span class='hidden-minibar'>Banners</span>
                                                </a>
                                            </li>
                                            <li class=' '>
                                                <a href='<?php echo $admin_url;?>pages' data-original-title='Register'>
                                                    <i class="fa fa-files-o"></i>
                                                    <span class='hidden-minibar'>Pages</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li><!-- delighted pages -->
                                    <li class='submenu'>
                                        <a class='dropdown' onClick='return false;' href='#' data-original-title='Components'>
                                            <i class="fa fa-cogs"></i>
                                            <span class='hidden-minibar'>Settings
                                                <i class='fa fa-chevron-right  pull-right'></i>
                                            </span>
                                        </a>
                                        <ul  class="animated fadeInDown">


                                           <li class=' '>
                                            <a href='<?php echo $admin_url;?>settings' data-original-title='Drop Zone'>
                                                <i class="fa fa-wrench"></i>
                                                <span class='hidden-minibar'>DigiSell Configuration</span>
                                            </a>
                                        </li>
                                        <li class=' '>
                                            <a href='<?php echo $admin_url;?>shipping' data-original-title='image-crop'>
                                                <i class='fa fa-truck'></i>
                                                <span class='hidden-minibar'>Shipping Modules</span>
                                            </a>
                                        </li>
                                        <li class=' '>
                                            <a href='<?php echo $admin_url;?>payment' data-original-title='File-Manager'>
                                                <i class="fa fa-money"></i>
                                                <span class='hidden-minibar'>Payment Modules</span>
                                            </a>
                                        </li>

                                        <li class=' '>
                                            <a href='<?php echo $admin_url;?>settings/canned_messages' data-original-title='Grid'>
                                             <i class="fa fa-filter"></i>
                                             <span class='hidden-minibar'>Canned Messages</span>
                                         </a>
                                     </li> 
                                     <li class=' '>
                                        <a href='<?php echo $admin_url;?>locations' data-original-title='Info-Boxes'>
                                            <i class="fa fa-globe"></i>
                                            <span class='hidden-minibar'>Locations</span>
                                        </a>
                                    </li>    
                                    <li class=' '>
                                        <a href='<?php echo $admin_url;?>admin' data-original-title='Wysiwyg'>
                                            <i class="fa fa-user-md"></i>
                                            <span class='hidden-minibar'>Administrators</span>
                                        </a>
                                    </li>  
                                </ul>
                            </li><!-- components -->
                            <li class=' '>
                                <a href='<?php echo site_url();?>' data-original-title='Documentation' target="_blank">
                                    <i class="fa fa-location-arrow"></i>
                                    <span class='hidden-minibar'>Front End
                                    </span>
                                </a>
                            </li>


                        </ul>

                        <!-- /.Menu -->

                    </div>
                    <!-- /.left-sidebar Holder-->
                </div>
                <!-- /.left-sidebar -->

                <!-- .right-sidebar -->
                <div class="user-details user-details-close animated fadeInLeft">
                    <div class="right-sidebar-holder">
                        <div class="panel-group" id="accordion">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                  Personalize
                              </a>
                              <i class="fa fa-times close-right-user text-danger pull-right"></i>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <ul class="list-inline text-center">
                                <li>Status</li>
                                <li><input type="checkbox" name="my-checkbox"  data-on-text="Online" data-off-text="Offline" data-size="medium" checked data-on-color="success" data-off-color="danger" class="status-mode"></li>
                            </ul>
                            <hr>

                            <h5 class="text-center">
                                Theme Options
                                <a  href="#"  class="theme-panel-close text-danger pull-right"><strong><i class="fa fa-times"></i></strong></a>
                            </h5>

                            <ul class="list-group theme-options">
                                <li class="list-group-item" >   
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="fixedTopSide" value=""> Fixed Top Side
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="miniSidebar" value=""> Mini Sidebar
                                        </label>
                                    </div>

                                </li>
                                <li class="list-group-item" >Predefined Themes
                                    <ul class="list-inline predefined-themes"> 
                                        <li><a class="badge" style="background-color:#23bab5" data-color-primary="#23bab5" data-color-secondary="#232b2d" data-color-link="#80969c"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#e96363" data-color-primary="#e96363" data-color-secondary="#232b2d" data-color-link="#AFB5AA"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#5cb85c" data-color-primary="#5cb85c" data-color-secondary="#232b2d" data-color-link="#777e88"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#e97436" data-color-primary="#e97436" data-color-secondary="#232b2d" data-color-link="#80969c"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#2FA2D1" data-color-primary="#2FA2D1" data-color-secondary="#232b2d" data-color-link="#A5B1B7"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#2f343b" data-color-primary="#2f343b" data-color-secondary="#FFFFFF" data-color-link="#232b2d"> &nbsp; </a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="list-group contact-list  animated fadeInBig">
                                <a class="list-group-item  text-primary">Profile <i class="fa fa-user pull-right"></i></a>
                                <a class="list-group-item  text-info">Inbox <i class="fa fa-envelope pull-right"></i></a>
                            </div>
                            <hr>
                            Server Load
                            <div class="live-pie-chart">
                                <div class="user-canvas user-chart" data-percent="73" >73%</div>  
                            </div>

                            Users Load
                            <div class="live-pie-chart">
                                <div class="user-canvas-two user-chart" data-percent="36" >36%</div>  
                            </div>


                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          Contacts
                          <i class="fa fa-users pull-right"></i>
                      </a>
                  </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body no-padding">
                    <div class="list-group contact-list">
                        <a class="list-group-item">
                            <img src="<?php echo base_url(); ?>images/profiles/one.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">Available</span>
                                <i class="fa fa-dot-circle-o"></i>
                            </div>
                        </a>
                        <a class="list-group-item contact">
                            <img src="<?php echo base_url(); ?>images/profiles/two.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">Available</span>
                                <i class="fa fa-dot-circle-o online"></i>
                            </div>
                        </a>
                        <a class="list-group-item contact">
                            <img src="<?php echo base_url(); ?>images/profiles/three.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">busy</span>
                                <i class="fa fa-dot-circle-o busy"></i>
                            </div>
                        </a>
                        <a class="list-group-item">
                            <img src="<?php echo base_url(); ?>images/profiles/four.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">offline</span>
                                <i class="fa fa-dot-circle-o offline"></i>
                            </div>
                        </a>
                        <a class="list-group-item contact">
                            <img src="<?php echo base_url(); ?>images/profiles/five.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">Unavailable</span>
                                <i class="fa fa-dot-circle-o"></i>
                            </div>
                        </a>
                        <a class="list-group-item contact">
                            <img src="<?php echo base_url(); ?>images/profiles/six.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">Unavailable</span>
                                <i class="fa fa-dot-circle-o"></i>
                            </div>
                        </a>
                        <a class="list-group-item">
                            <img src="<?php echo base_url(); ?>images/profiles/seven.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">Offline</span>
                                <i class="fa fa-dot-circle-o offline"></i>
                            </div>
                        </a>
                        <a class="list-group-item contact">
                            <img src="<?php echo base_url(); ?>images/profiles/eight.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">busy</span>
                                <i class="fa fa-dot-circle-o busy"></i>
                            </div>
                        </a>
                        <a class="list-group-item contact">
                            <img src="<?php echo base_url(); ?>images/profiles/nine.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">offline</span>
                                <i class="fa fa-dot-circle-o offline"></i>
                            </div>
                        </a>
                        <a class="list-group-item">
                            <img src="<?php echo base_url(); ?>images/profiles/ten.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">online</span>
                                <i class="fa fa-dot-circle-o online"></i>
                            </div>
                        </a>
                        <a class="list-group-item contact">
                            <img src="<?php echo base_url(); ?>images/profiles/eleven.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">unvailable</span>
                                <i class="fa fa-dot-circle-o"></i>
                            </div>
                        </a>
                        <a class="list-group-item contact">
                            <img src="<?php echo base_url(); ?>images/profiles/twelve.png" class="chat-user-avatar" alt="">
                            <div class="contact-info">
                                <span class="name">John Deo</span>
                                <span class="status">unavailable</span>
                                <i class="fa fa-dot-circle-o"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                  Settings
                  <i class="fa fa-cogs pull-right"></i>
              </a>
          </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse">
          <div class="panel-body no-padding">
            <table class="table switches-table">
                <tr>
                    <td> Wi-fi</td>                
                    <td><input type="checkbox" name="my-checkbox" data-size="mini" checked data-on-color="success" data-off-color="danger"></td>
                </tr>
                <tr>
                    <td> Data</td>                
                    <td><input type="checkbox" name="my-checkbox" data-size="mini" unchecked data-on-color="success" data-off-color="danger"></td>
                </tr>
                <tr>
                    <td> Music</td>                
                    <td><input type="checkbox" name="my-checkbox" data-size="mini" unchecked data-on-color="success" data-off-color="danger"></td>
                </tr>
                <tr>
                    <td> Flight mode</td>                
                    <td><input type="checkbox" name="my-checkbox" data-size="mini" unchecked data-on-color="success" data-off-color="danger"></td>
                </tr>
                <tr>
                    <td> Roaming</td>                
                    <td><input type="checkbox" name="my-checkbox" data-size="mini" checked data-on-color="success" data-off-color="danger"></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Current Projects
          <i class="fa fa-clock-o pull-right"></i>
      </a>
  </h4>
</div>
<div id="collapseThree" class="panel-collapse collapse">
  <div class="panel-body no-padding">
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
</div>
</div>
</div>
</div>


</div>
<!-- /.right-sidebar-holder -->
</div>
<!-- /.right-sidebar -->

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

        
            <?php
    //lets have the flashdata overright "$message" if it exists
            if($this->session->flashdata('message'))
            {
                $message    = $this->session->flashdata('message');
            }

            if($this->session->flashdata('error'))
            {
                $error  = $this->session->flashdata('error');
            }

            if(function_exists('validation_errors') && validation_errors() != '')
            {
                $error  = validation_errors();
            }
            ?>

            <div id="js_error_container" class="alert alert-error" style="display:none;"> 
                <p id="js_error"></p>
            </div>

            <div id="js_note_container" class="alert alert-note" style="display:none;">

            </div>


            <?php if (!empty($message)): ?>
            
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Warning!</strong> <?php echo $message; ?>
            </div>

            <?php endif; ?>

            <?php if (!empty($error)): ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>



