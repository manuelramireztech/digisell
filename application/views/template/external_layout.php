<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php echo $meta_charset; ?>">
	<title><?php echo $site_title; ?></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="<?php echo $site_description; ?>" />
	<meta name="keywords" content="<?php echo $site_keywords; ?>" />
	<?php echo $meta_tag; ?>

	<?php echo $styles; ?>

	<?php echo $scripts_header; ?>
</head>
<body>
	<?php 
	$menuList = Array(
    0 => Array(
        'title' => 'Dashboard',
        'link' => 'index.php',
        'icon' => 'dashboard',
        'children' => Array()
    ),
    1 => Array(
        'title' => 'Top Navbar',
        'link' => 'top-navbar.php',
        'icon' => 'indent',
        'children' => Array()
            
    ),
    2 => Array(
        'title' => 'Pages',
        'link' => '#',
        'icon' => 'book',
        'children' => Array(
            0 => Array(
                'title' => 'Calendar',
                'link' => 'calendar.php',
                'icon' => 'calendar',
                'children' => Array(),
            ),
            1 => Array(
                'title' => 'Chat',
                'link' => 'chat.php',
                'icon' => 'comment',
                'children' => Array()
            ),
            2 => Array(
                'title' => 'Profile',
                'link' => 'profile.php',
                'icon' => 'user',
                'children' => Array()
            ),
            3 => Array(
                'title' => 'Gallery',
                'link' => 'gallery.php',
                'icon' => 'th',
                'children' => Array()
            ),
            4 => Array(
                'title' => 'Grid',
                'link' => 'grids.php',
                'icon' => 'th-large',
                'children' => Array()
            ),
            5 => Array(
                'title' => 'Images',
                'link' => 'images.php',
                'icon' => 'picture-o',
                'children' => Array()
            ),
            6 => Array(
                'title' => 'Inbox',
                'link' => 'inbox.php',
                'icon' => 'envelope',
                'children' => Array()
            ),
            7 => Array(
                'title' => 'Invoice',
                'link' => 'invoice.php',
                'icon' => 'credit-card',
                'children' => Array()
            ),
            8 => Array(
                'title' => 'Pricing',
                'link' => 'pricing-table.php',
                'icon' => 'money',
                'children' => Array()
            ),
            9 => Array(
                'title' => 'Support',
                'link' => 'support.php',
                'icon' => 'gears',
                'children' => Array()
            ),
            10 => Array(
                'title' => 'Typography',
                'link' => 'typography.php',
                'icon' => 'text-width',
                'children' => Array()
            )
        )
    ),
    3 => Array(
        'title' => 'Utility',
        'link' => '#',
        'icon' => 'tint',
        'children' => Array(
            0 => Array(
                'title' => '404',
                'link' => '404.php',
                'icon' => 'exclamation-circle',
                'children' => Array(),
            ),
            1 => Array(
                'title' => '505',
                'link' => '505.php',
                'icon' => 'exclamation-circle',
                'children' => Array()
           ),
            2 => Array(
                'title' => 'FAQ',
                'link' => 'faq.php',
                'icon' => 'question',
                'children' => Array()
           ),
            3 => Array(
                'title' => 'Lock Screen',
                'link' => 'screens.php',
                'icon' => 'lock',
                'children' => Array()
           ),
            4 => Array(
                'title' => 'Signin',
                'link' => 'screens.php',
                'icon' => 'sign-in',
                'children' => Array()
           ),
            5 => Array(
                'title' => 'Sign Up',
                'link' => 'screens.php',
                'icon' => 'smile-o',
                'children' => Array()
           ),
            6 => Array(
                'title' => 'Template',
                'link' => 'template.php',
                'icon' => 'pagelines',
                'children' => Array()
           ),
        )
    ),
    4 => Array(
        'title' => 'UI Elements',
        'link' => '#',
        'icon' => 'user',
        'children' => Array(
            0 => Array(
                'title' => 'Alerts',
                'link' => 'alerts.php',
                'icon' => 'exclamation-triangle',
                'children' => Array(),
            ),
            1 => Array(
                'title' => 'Animations',
                'link' => 'animations.php',
                'icon' => 'font',
                'children' => Array()
           ),
            2 => Array(
                'title' => 'BreadCrubms',
                'link' => 'breadcrumbs-jumbotron.php',
                'icon' => 'chain',
                'children' => Array()
           ),
            3 => Array(
                'title' => 'Buttons',
                'link' => 'buttons.php',
                'icon' => 'lock',
                'children' => Array()
           ),
            4 => Array(
                'title' => 'Carousel',
                'link' => 'carousel.php',
                'icon' => 'coffee',
                'children' => Array()
           ),
            5 => Array(
                'title' => 'Notifications',
                'link' => 'notifications.php',
                'icon' => 'bell-o',
                'children' => Array()
           ),
            6 => Array(
                'title' => 'Labels Badges',
                'link' => 'labels-badges.php',
                'icon' => 'phone-square',
                'children' => Array()
           ),
            7 => Array(
                'title' => 'List Groups',
                'link' => 'list-groups.php',
                'icon' => 'dot-circle-o',
                'children' => Array()
           ),
            8 => Array(
                'title' => 'Pagination',
                'link' => 'pagination.php',
                'icon' => 'sort-numeric-asc',
                'children' => Array()
           ),
            9 => Array(
                'title' => 'Panels',
                'link' => 'panels.php',
                'icon' => 'windows',
                'children' => Array()
           ),
            10 => Array(
                'title' => 'Progress Bars',
                'link' => 'progress-bars.php',
                'icon' => 'ruble',
                'children' => Array()
           ),
            11 => Array(
                'title' => 'Sliders',
                'link' => 'sliders.php',
                'icon' => 'exchange',
                'children' => Array()
           ),
            12 => Array(
                'title' => 'Tabs Accordians',
                'link' => 'tabs-accordians.php',
                'icon' => 'check',
                'children' => Array()
           ),
            13 => Array(
                'title' => 'Info Boxes',
                'link' => 'info-boxes.php',
                'icon' => 'bullseye',
                'children' => Array()
           ),
            14 => Array(
                'title' => 'Tooltips Popovers',
                'link' => 'tooltips-popovers.php',
                'icon' => 'asterisk',
                'children' => Array()
           ),
            15 => Array(
                'title' => 'Wells',
                'link' => 'wells.php',
                'icon' => 'beer',
                'children' => Array()
           ),
        )
    ),
   5 => Array(
        'title' => 'Tables',
        'link' => '#',
        'icon' => 'table',
        'children' => Array(
            0 => Array(
                'title' => 'Basic Tables',
                'link' => 'basic-tables.php',
                'icon' => 'table',
                'children' => Array(),
            ),
            1 => Array(
                'title' => 'Editable Tables',
                'link' => 'editable-tables.php',
                'icon' => 'table',
                'children' => Array(),
            ),
            2 => Array(
                'title' => 'Dynamic Tables',
                'link' => 'dynamic-tables.php',
                'icon' => 'table',
                'children' => Array(),
            ),
        )
    ),
   6 => Array(
        'title' => 'Unlimited Menu',
        'link' => '#',
        'icon' => 'sitemap',
        'children' => Array(
            0 => Array(
                'title' => 'Submenu',
                'link' => '#',
                'icon' => 'android',
                'children' => Array(),
            ),
            2 => Array(
                'title' => 'Submenu',
                'link' => '#',
                'icon' => 'apple',
                'children' => Array(),
            ),
            3 => Array(
                'title' => 'One More',
                'link' => '#',
                'icon' => 'android',
                'children' => Array(
                    0 => Array(
                        'title' => 'Submenu',
                        'link' => '#',
                        'icon' => 'android',
                        'children' => Array(),
                    ),
                    2 => Array(
                        'title' => 'Submenu',
                        'link' => '#',
                        'icon' => 'apple',
                        'children' => Array(),
                    ),
                    3 => Array(
                        'title' => 'One More',
                        'link' => '#',
                        'icon' => 'android',
                        'children' => Array(
                            0 => Array(
                                'title' => 'Submenu',
                                'link' => '#',
                                'icon' => 'android',
                                'children' => Array(),
                            ),
                            2 => Array(
                                'title' => 'Submenu',
                                'link' => '#',
                                'icon' => 'apple',
                                'children' => Array(),
                            ),
                            3 => Array(
                              'title' => 'Trust Me &amp; More',
                              'link' => '#',
                              'icon' => 'android',
                              'children' => Array(),
                            )
                        ),
                    )
                ),
            ),
        )
    ),
   7 => Array(
        'title' => 'Forms',
        'link' => '#',
        'icon' => 'list-alt',
        'children' => Array(
            0 => Array(
                'title' => 'Dropzone File Upload',
                'link' => 'dropzone-file-upload.php',
                'icon' => 'level-down',
                'children' => Array(),
            ),
            1 => Array(
                'title' => 'Form Input Masks',
                'link' => 'form-input-masks.php',
                'icon' => 'pencil-square',
                'children' => Array(),
            ),
            2 => Array(
                'title' => 'Form Validation',
                'link' => 'form-validation.php',
                'icon' => 'warning',
                'children' => Array(),
            ),
            3 => Array(
                'title' => 'Form Wizard',
                'link' => 'form-wizard.php',
                'icon' => 'indent',
                'children' => Array(),
            ),
            4 => Array(
                'title' => 'Input Groups',
                'link' => 'input-groups.php',
                'icon' => 'group',
                'children' => Array(),
            ),
            5 => Array(
                'title' => 'Layouts &nbsp; Elements',
                'link' => 'layouts-elements.php',
                'icon' => 'indent',
                'children' => Array(),
            ),
            6 => Array(
                'title' => 'Multiple File Upload',
                'link' => 'multiple-file-upload.php',
                'icon' => 'cloud-upload',
                'children' => Array(),
            ),
            7 => Array(
                'title' => 'Pickers',
                'link' => 'pickers.php',
                'icon' => 'eye',
                'children' => Array(),
            ),
            8 => Array(
                'title' => 'Wysiwyg &amp; Markdown',
                'link' => 'wysiwyg-markdown.php',
                'icon' => 'pencil-square',
                'children' => Array(),
            ),
        )
    ),
   8 => Array(
        'title' => 'Charts',
        'link' => '#',
        'icon' => 'bar-chart-o',
        'children' => Array(
            0 => Array(
                'title' => 'Basic Charts',
                'link' => 'basic-charts.php',
                'icon' => 'bar-chart-o',
                'children' => Array(),
            ),
            1 => Array(
                'title' => 'Live Charts',
                'link' => 'live-charts.php',
                'icon' => 'bar-chart-o',
                'children' => Array(),
            ),
            2 => Array(
                'title' => 'Morris Charts',
                'link' => 'morris.php',
                'icon' => 'bar-chart-o',
                'children' => Array(),
            ),
            3 => Array(
                'title' => 'Pie Charts',
                'link' => 'pie-charts.php',
                'icon' => 'bar-chart-o',
                'children' => Array(),
            ),
            4 => Array(
                'title' => 'Spark Lines',
                'link' => 'sparklines.php',
                'icon' => 'bar-chart-o',
                'children' => Array(),
            ),
            5 => Array(
                'title' => 'NVD3 Charts',
                'link' => 'nvd3.php',
                'icon' => 'bar-chart-o',
                'children' => Array(),
            )
        )
    ),
   9 => Array(
        'title' => 'Maps',
        'link' => '#',
        'icon' => 'map-marker',
        'children' => Array(
            0 => Array(
                'title' => 'Google Maps',
                'link' => 'google-maps.php',
                'icon' => 'google-plus',
                'children' => Array(),
            ),
            1 => Array(
                'title' => 'Vector Maps',
                'link' => 'vector-maps.php',
                'icon' => 'vimeo-square',
                'children' => Array(),
            )
        )
    ),
   10 => Array(
        'title' => 'Icons',
        'link' => 'icons.php',
        'icon' => 'truck',
        'children' => Array()
    )
);
?>
<div class="site-holder">
      <!-- this is a dummy text -->
      <!-- .navbar -->
      <nav class="navbar" role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><i class="fa fa-list btn-nav-toggle-responsive text-white"></i> <span class="logo">Cas<strong>ca</strong>de <i class="fa fa-bookmark"></i></span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav user-menu navbar-right ">

            <li><a href="#" class="user dropdown-toggle" data-toggle="dropdown"><span class="username"><img src="images/profiles/eleven.png" class="user-avatar" alt="">  Vijay Kumar </span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
                <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#" class="text-danger"><i class="fa fa-lock"></i> Logout</a></li>
              </ul>
              <li><a href="#" class="settings dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge bg-pink">4</span></a>
                <ul class="dropdown-menu inbox">
                  <li>
                    <a href="inbox.php">     
                      <img src="images/profiles/three.png" alt="" class="avatar">
                      <div class="message">
                        <span class="username">John Deo</span> 
                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                        <span class="time pull-right"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.php">     
                      <img src="images/profiles/four.png" alt="" class="avatar">
                      <div class="message">
                        <span class="username">Jane Deo</span> 
                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                        <span class="time pull-right"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.php">     
                      <img src="images/profiles/five.png" alt="" class="avatar">
                      <div class="message">
                        <span class="username">Mr Deo</span> 
                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                        <span class="time pull-right"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.php">     
                      <img src="images/profiles/six.png" alt="" class="avatar">
                      <div class="message">
                        <span class="username">Miss Deo</span> 
                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                        <span class="time pull-right"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                      </div>
                    </a>
                  </li>
                  <li><a href="inbox.php" class="btn bg-primary">View All</a></li>
                </ul>
                <li><a href="#" class="settings dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell animated shake"></i><span class="badge bg-success">10</span></a>
                  <ul class="dropdown-menu notifications">
                    <li>
                      <a href="#">
                        <i class="fa fa-user noty-icon bg-primary"></i> 
                        <span class="description">10 Users are registered</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-danger">
                        <i class="fa fa-inbox noty-icon bg-pink"></i> 
                        <span class="description">Your disk space has been exceeeded</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-info">
                        <i class="fa fa-comment noty-icon bg-purple"></i> 
                        <span class="description">58 new comments</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-warning">
                        <i class="fa fa-user noty-icon bg-warning"></i> 
                        <span class="description">User deleted</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-success">
                        <i class="fa fa-bookmark-o noty-icon bg-seagreen"></i> 
                        <span class="description">You have a new badge</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-info">
                        <i class="fa fa-envelope noty-icon bg-info"></i> 
                        <span class="description">24 Unread mails</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-success">
                        <i class="fa fa-link noty-icon bg-purple"></i> 
                        <span class="description">Urls forwarding activated</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-warning">
                        <i class="fa fa-clock-o noty-icon bg-yellow"></i> 
                        <span class="description">Action</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-danger">
                        <i class="fa fa-exclamation noty-icon bg-danger"></i> 
                        <span class="description">3 domains expired</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-success">
                        <i class="fa fa-clock-o noty-icon bg-success"></i> 
                        <span class="description">Your have $950 as outstanding amount</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>

                    <li><a href="#" class="btn bg-primary">View All</a></li>
                  </ul>
                </li>
                <li><a href="#" class="settings"><i class="fa fa-cogs settings-toggle"></i><span class="badge bg-info">20</span></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav> <!-- /.navbar -->

          <!-- .box-holder -->
          <div class="box-holder">

            <!-- .left-sidebar -->
            <div class="left-sidebar">
              <div class="sidebar-holder">
                <ul class="nav  nav-list">

                  <!-- sidebar to mini Sidebar toggle -->
                  <li class="nav-toggle">
                    <button class="btn  btn-nav-toggle text-primary"><i class="fa fa-angle-double-left toggle-left"></i> </button>
                  </li>

                    <?php buildMenu($menuList); ?>

                </ul>
              </div>
            </div> <!-- /.left-sidebar -->

            <!-- .content -->
            <div class="content">

		<?php echo $content; ?>
	
  		</div> <!-- /.content -->

</div> <!-- /.box-holder -->
</div><!-- /.site-holder -->



<!-- Load JS here for Faster site load =============================-->
<?php echo $scripts_footer; ?>



</body>
</html>