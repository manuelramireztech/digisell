<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method($var = 'Helper Class Data')
    {
        return $var;
    }   
}

if(!function_exists('breadcrumb_status'))
{
	function breadcrumb_status()
	{
		$ci=& get_instance();
		$data=$ci->router->class;
		$data1=$ci->router->method;

		$output = '<li><small style="text-transform:Capitalize">'.str_replace(array('_'),' ',$data).'</small></li>';
		if($data1!="index")
		{
			$output.='<li><small style="text-transform:Capitalize">'.str_replace(array('_'),' ',$data1).'</small></li>';
		}

		return $output;
	}
}