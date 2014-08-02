<?php
class Admin extends CI_Model
{
	function login($uname,$password)
	{
		$this->db->select('*');
		$this->db->where('email', $uname);
		$this->db->where('password', md5($password));
		
		
		$result = $this->db->get('admin');
		if($result->num_rows == 1)
		{
			$this->session->set_userdata('email',$uname);
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

	function total_admin($s=false,$like=false)
	{
		if($s)
		{
			$this->db->select($like, $s);
			$result = $this->db->get('admin');
			return $result->num_rows();
		}
		else
		{
			$this->db->select('*');
			$result = $this->db->get('admin');
			return $result->num_rows();
		}
	}

	function total_client($s=false,$like=false)
	{
		if($s)
		{
			$this->db->like($like, $s);
			$result = $this->db->get('clients');
			return $result->num_rows();
		}
		else
		{
			$this->db->select('*');
			$result = $this->db->get('clients');
			return $result->num_rows();
		}
	}

	function total_invoice_paid()
	{
		$this->db->select('*');
		$this->db->where('transaction_type', 'paid');
		$result = $this->db->get('register');
		return $result->num_rows();
	}

	function total_invoice_due()
	{
		$this->db->select('*');
		$this->db->where('transaction_type', 'due');
		$result = $this->db->get('register');
		return $result->num_rows();
	}

	function total_invoice_credit()
	{
		$this->db->select('*');
		$this->db->where('transaction_type', 'credit');
		$result = $this->db->get('register');
		return $result->num_rows();
	}

	function register_balance()
	{
		$this->db->select_sum('amount');
		$query = $this->db->get('register')->row();
		return $query->amount;
		
	}

	function order_active()
	{
		$this->db->select('*');
		$this->db->where('status', 'active');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_pending()
	{
		$this->db->select('*');
		$this->db->where('status', 'pending');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_suspended()
	{
		$this->db->select('*');
		$this->db->where('status', 'suspended');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_cancelled()
	{
		$this->db->select('*');
		$this->db->where('status', 'cancelled');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_refunded()
	{
		$this->db->select('*');
		$this->db->where('status', 'refunded');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_fraud()
	{
		$this->db->select('*');
		$this->db->where('status', 'fraud');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_incomplete()
	{
		$this->db->select('*');
		$this->db->where('status', 'incomplete');
		$result = $this->db->get('order');
		return $result->num_rows();
	}
}



?>