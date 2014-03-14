<?php
function buildMenu($menuList)
{
  // Get the link name
  $pieces = explode('/',$_SERVER['REQUEST_URI']);  
  $page=end($pieces); 

    foreach ($menuList as $val=>$node)
    {
      $active=(strpos($page,$node['link']) !== false) ? "active" : " ";  

        //Running array for Main parent links
        if (! empty($node['children'])) 
        {
          echo " <li class='submenu ". $active ."'><a class='dropdown' href='" . $node['link']. "' data-original-title='" . $node['title'] . "'><i class='fa fa-".$node['icon']."'></i><span class='hidden-minibar'> " . $node['title'] . "  <span class='badge bg-primary pull-right'>".count($node['children'])."</span></span></a>";
        }
        else
        {
          echo "<li class='". $active ."' ><a href='" . $node['link']. "' data-original-title='" . $node['title'] . "'><i class='fa fa-".$node['icon']."'></i><span class='hidden-minibar'> " . $node['title'] . "</span></a>";
        }
        

        // Running submenu
        if ( ! empty($node['children'])) 
        {
            echo "<ul>";
            buildMenu($node['children']);
            echo "</ul>";
        }
        echo "</li>";
    }
}


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
        'title' => 'Front End ',
        'link' => 'frontend/index.html',
        'icon' => 'file',
        'children' => Array()
            
    ),
    3 => Array(
        'title' => 'Email Templates',
        'link' => '#',
        'icon' => 'envelope',
        'children' => Array(
            0 => Array(
                'title' => 'Template #1',
                'link' => 'mail-templates/template-one.html',
                'icon' => 'envelope',
                'children' => Array(),
            ),
                1 => Array(
                'title' => 'Template #2',
                'link' => 'mail-templates/template-two.php',
                'icon' => 'envelope',
                'children' => Array(),
            ),
                2 => Array(
                'title' => 'Template #3',
                'link' => 'mail-templates/template-three.php',
                'icon' => 'envelope',
                'children' => Array(),
            ),
                3 => Array(
                'title' => 'Template #4',
                'link' => 'mail-templates/template-four.php',
                'icon' => 'envelope',
                'children' => Array(),
            ),
        )
    ),
    4 => Array(
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
    5 => Array(
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
                'link' => 'login/lock.html',
                'icon' => 'lock',
                'children' => Array()
           ),
            4 => Array(
                'title' => 'Signin',
                'link' => 'login/login.html',
                'icon' => 'sign-in',
                'children' => Array()
           ),
            5 => Array(
                'title' => 'Sign Up',
                'link' => 'login/registration.html',
                'icon' => 'smile-o',
                'children' => Array()
           ),
            6 => Array(
                'title' => 'Forgot Password',
                'link' => 'login/password-recovery.html',
                'icon' => 'lock',
                'children' => Array()
           ),
            7 => Array(
                'title' => 'Login Model 2',
                'link' => 'screens.php',
                'icon' => 'user',
                'children' => Array()
           ),
            8 => Array(
                'title' => 'Template',
                'link' => 'template.php',
                'icon' => 'pagelines',
                'children' => Array()
           ),
            9 => Array(
                'title' => 'TImeline &nbsp;&nbsp; <span class="badge bg-success text-white">new</span>',
                'link' => 'timeline.php',
                'icon' => 'clock-o',
                'children' => Array()
           ),
            10 => Array(
                'title' => 'My Contacts &nbsp;&nbsp; <span class="badge bg-success text-white">new</span>',
                'link' => 'my-contacts.php',
                'icon' => 'mobile',
                'children' => Array()
           ),
        )
    ),
    6 => Array(
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
                'title' => 'BreadCrumbs',
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
            16 => Array(
                'title' => 'Draggable Portlets',
                'link' => 'draggable-portlets.php',
                'icon' => 'windows',
                'children' => Array()
           ),
            17 => Array(
                'title' => 'Bootbox Modals',
                'link' => 'bootbox-modals.php',
                'icon' => 'windows',
                'children' => Array()
           ),
            18 => Array(
                'title' => 'Extended Modals',
                'link' => 'extended-modals.php',
                'icon' => 'windows',
                'children' => Array()
           ),
            19 => Array(
                'title' => 'Date Paginator',
                'link' => 'date-paginator.php',
                'icon' => 'windows',
                'children' => Array()
           ),
            20 => Array(
                'title' => 'File Manager ',
                'link' => 'file-manager.php',
                'icon' => 'windows',
                'children' => Array()
           ),
            21 => Array(
                'title' => 'Nestable lists ',
                'link' => 'nestable.php',
                'icon' => 'windows',
                'children' => Array()
           ),
           22 => Array(
                'title' => 'Image Crop ',
                'link' => 'image-crop.php',
                'icon' => 'windows',
                'children' => Array()
           ),
           23 => Array(
                'title' => 'RTL ',
                'link' => 'RTL',
                'icon' => 'windows',
                'children' => Array()
           )
        )
    ),
   7 => Array(
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
   8 => Array(
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
   9 => Array(
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
   10 => Array(
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
   11 => Array(
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
   12 => Array(
        'title' => 'Icons',
        'link' => 'icons.php',
        'icon' => 'truck',
        'children' => Array()
    ),
   13 => Array(
        'title' => 'Documentation',
        'link' => 'documentation',
        'icon' => 'file',
        'children' => Array()
    )
);
?>
