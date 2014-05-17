<?php
class Admin extends CI_Model
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

	function news()
	{
		$this->db->select('*');
		$result = $this->db->get('news');
		return $result->row();
	}

	function get_data()
	{
		$this->db->select('*');
		$this->db->where('email', $this->session->userdata('email'));
		$result = $this->db->get('admin');
		if($result->num_rows == 1)
		{
			return $result->row();						
		}
		else
		{
			return false;
		}
	}

	function total_admin()
	{
		$this->db->select('*');
		$result = $this->db->get('admin');
		return $result->num_rows();
	}

	function total_client()
	{
		$this->db->select('*');
		$result = $this->db->get('clients');
		return $result->num_rows();
	}
}



?>