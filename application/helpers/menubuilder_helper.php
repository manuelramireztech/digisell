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
?>
