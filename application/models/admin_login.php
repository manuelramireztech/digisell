<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_login extends CI_Model
{
	function login($uname,$password)
	{
		$this->db->select('*');
		$this->db->where('email', $uname);
		$this->db->where('password', md5($password));
		$data['email'] = $uname;
		$data['password'] = $password;
		
		$result = $this->db->get('admin');
		if($result->num_rows == 1)
		{
			$this->session->set_userdata($data);
			return $result->row();						
		}
		else
		{
			return false;
		}
	}
}



?>