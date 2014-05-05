<!DOCTYPE html>
<html>
<head>
	<title>Digisell</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
	<!-- Styles -->
	<link href="<?php echo base_url(); ?>css/style_front.css" rel="stylesheet">

	<!-- Custom Styles -->
	<link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
     
	

<?php echo theme_js('jquery.js', true);?>
<?php echo theme_js('bootstrap.min.js', true);?>
<?php echo theme_js('squard.js', true);?>
<?php echo theme_js('equal_heights.js', true);?>     
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
              <![endif]-->
              
          </head>
          <body>

          	<div class="site-holder">
          		<!-- .navbar -->
          		<nav class="navbar  navbar-default nav-delighted " role="navigation">
          			<div class="container">
                  <a href="#" class="toggle-left-sidebar">
                              <i class="fa fa-th-list"></i>
                         </a>
                         <!-- Brand and toggle get grouped for better mobile display -->
                         <div class="navbar-header">
                              <a class="navbar-brand" href="<?php echo site_url();?>">
                                   <?php echo $this->config->item('company_name');?>
                              </a>
                              <ul class="nav navbar-nav">
                                   <li class='active'>
                                        <a href="<?php echo site_url('cart');?>" data-original-title='Home'>
                                             

                                             <span class='hidden-minibar'>Home</span>
                                        </a>
                                   </li>
                                   <li class='dropdown'>
                                        <?php if(isset($this->categories[0])):?>
                                             
                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('catalog');?> <b class="caret"></b></a>
                                             <ul class="dropdown-menu">
                                                  <?php foreach($this->categories[0] as $cat_menu):?>
                                                       <li <?php echo $cat_menu->active ? 'class="active"' : false; ?>><a href="<?php echo site_url($cat_menu->slug);?>"> <?php echo $cat_menu->name;?></a></li>
                                                  <?php endforeach;?>
                                             </ul>
                                             <?php
                                             endif; ?>
                                             
                                   </li>   
                                   <li class="dropdown">
                                        <?php
                                             if(isset($this->pages[0]))
                                             { ?>
                                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo 'Pages';?> <b class="caret"></b></a>
                                                  <ul class=dropdown-menu>
                                                  <?php foreach($this->pages[0] as $menu_page):?>
                                                  
                                                       <?php if(empty($menu_page->content)):?>
                                                            <li><a href="<?php echo $menu_page->url;?>" <?php if($menu_page->new_window ==1){echo 'target="_blank"';} ?>><?php echo $menu_page->menu_title;?></a></li>
                                                       <?php else:?>
                                                            <li><a href="<?php echo site_url($menu_page->slug);?>"><?php echo $menu_page->menu_title;?></a></li>
                                                       <?php endif;?>
                                                  

                                             <?php endforeach;   
                                             }
                                             ?>
                                             </ul>
                                   </li>
                                              
                              </ul>
                         </div>

                         <!-- Collect the nav links, forms, and other content for toggling -->
                         <div class="collapse navbar-collapse">
                              <ul class="nav navbar-nav navbar-right">

                                   <li>
                                       <a href='<?php echo site_url('cart/view_cart');?>' data-original-title='Cart' class="btn-lg">
                                                  <i class="fa fa-shopping-cart cart"></i>
                                                  <span class='hidden-minibar cart'>
                                                       <?php
                                                            if ($this->go_cart->total_items()==0)
                                                            {
                                                                 echo 'cart <span class="badge btn-primary">'.'0'.'</span>';
                                                            }
                                                            else
                                                            {
                                                                 if($this->go_cart->total_items() > 1)
                                                                 {
                                                                      //echo sprintf (lang('multiple_items'), $this->go_cart->total_items());
                                                                      echo 'cart <span class="badge btn-info">'.$this->go_cart->total_items().'</span>';
                                                                 }
                                                                 else
                                                                 {
                                                                      //echo sprintf (lang('single_item'), $this->go_cart->total_items());
                                                                      echo 'cart <span class="badge btn-info">'.$this->go_cart->total_items().'</span>';
                                                                 }
                                                            }
                                                            ?>
                                                  </span>
                                             </a>
                                   </li>
                                   <li>
                                        <?php echo form_open('cart/search', 'class="search-form"');?>
                                        
                                             <div class="form-group">
                                                  <input type="text" name="term" class="form-control  nav-input-searchs" placeholder="Search Products"/>
                                                  <i class="fa fa-search"></i>
                                             </div>
                                        </form>
                                   </li>
                                   <?php if($this->Customer_model->is_logged_in(false, false)):?>
                                   <li class='dropdown'>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo lang('account');?> <b class="caret"></b></a>
                                        <ul  class="dropdown-menu">
                                             <li class=' '>
                                                  <a href='<?php echo  site_url('secure/my_account');?>' data-original-title=' my_Account'>
                                                       
                                                       <span class='hidden-minibar'><?php echo lang('my_account')?></span>
                                                  </a>
                                             </li>
                                             <li class=' '>
                                                  <a href='<?php echo  site_url('secure/my_downloads');?>' data-original-title='my_downloads'>
                                                       
                                                       <span class='hidden-minibar'><?php echo lang('my_downloads')?></span>
                                                  </a>
                                             </li>
                                             <li>
                                        <a href="<?php echo site_url('secure/logout');?>">
                                             Logout
                                        </a>
                                   </li>
                                        </ul>
                                   </li>
                                        <?php endif; ?>
                                   <?php if(!($this->Customer_model->is_logged_in(false, false))):?>
                                   <li>
                                        
                                        <a href="<?php echo site_url('secure/login_customer');?>" ><?php echo lang('login');?> </a>
                                   </li>
                                             
                                        <?php endif; ?>
                                   
                              </ul>
                         </div>
                         <!-- /.navbar-collapse -->            
                         </div>
          		</nav>

          		<!-- .box-holder -->
          		<div class="box-holder">

          			<div class="content  animated fadeInBig">
                                                  <div class="container">
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
								<?php if(!empty($base_url) && is_array($base_url)):?>
          							<div class="row">
          								<div class="col-md-12">
          									<ul class="breadcrumb">
          										<?php
          										$url_path	= '';
          										$count	 	= 1;
          										foreach($base_url as $bc):
          											$url_path .= '/'.$bc;
          										if($count == count($base_url)):?>
          										<li class="active"><?php echo $bc;?></li>
          									<?php else:?>
          										<li><a href="<?php echo site_url($url_path);?>"><?php echo $bc;?></a></li> <span class="divider">/</span>
          									<?php endif;
          									$count++;
          									endforeach;?>
          								</ul>
          							</div>
          						</div>
          					<?php endif;?>
</div>
<div class="row">
     <div class="col-md-12">
                                   <?php if ($this->session->flashdata('message')):?>
                                        <div class="alert alert-info">
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

                                   <?php if (!empty($error)):?>
                                        <div class="alert alert-danger">
                                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                             <?php echo $error;?>
                                        </div>
                                   <?php endif;?>

     </div>
</div>
          					

          					
          					