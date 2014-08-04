<?php
class Client extends CI_Model
{
	function login($email, $password)
	{
		$this->db->select('*');
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		
		
		$result = $this->db->get('clients');
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

	function check_duplication($email)
	{
		$this->db->where('email',$email);
		$result = $this->db->get('clients');
		if($result->num_rows == 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	function register($data)
	{
		$data = array(
					'profile_array'		=>	'',
					'first_name'	=>	$data['first_name'],
					'last_name'		=>	$data['last_name'],
					'org'			=>	'',
					'address_1'		=>	'',
					'city'			=>	'',
					'state'			=>	'',
					'province'		=>	'',
					'zip'			=>	'',
					'country'		=>	'',
					'phone'			=>	'',
					'fax'			=>	'',
					'anon_key'		=>	'',
					'credit_card'	=>	'',
					'email'			=>	$data['email'],
					'password'		=>	$data['password'],
					'staff_notes'	=>	'',
					'notes'			=>	'',
					'created'		=>	strtotime(date('d-m-Y')),
						);
		if($this->db->insert('clients',$data))
		{
			return true;
		}
	 	else
        {
        	return false;
        }
	}

	function get_clients($limit=0, $offset=0)
	{
		$this->db->order_by('client_id', 'DESC');
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
		$result = $this->db->get('clients');
		return $result->result();
	}

	function client_area_news($limit=0, $offset=0)
	{
		$this->db->order_by('news_id', 'DESC');
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
		$result = $this->db->get('client_news');
		return $result->result();
	}

	function total_client_news()
	{
		$this->db->select('*');
		$result = $this->db->get('client_news');
		return $result->num_rows();
	}

	function save_client_area_news($data)
	{
		if($this->db->insert('client_news',$data))
		{
			return true;
		}
	 	else
        {
        	return false;
        }
	}

	function edit_client_area_news($id,$data)
	{
		$this->db->where('news_id',$id);
		$this->db->set('profile_id',$data['profile_id']);
		$this->db->set('news_title',$data['news_title']);
		$this->db->set('news_body',$data['news_body']);
		$this->db->set('created',$data['created']);
		$this->db->set('status',$data['status']);
		if($this->db->update('client_news',$data))
		{
			return true;
		}
	 	else
        {
        	return false;
        }
	}

	function area_news($id)
	{
		$this->db->select('*');
		$this->db->where('news_id', $id);
		$result = $this->db->get('client_news');
		return $result->row();
	}

	function search($limit=0, $offset=0, $search, $like)
	{
		$this->db->order_by('client_id', 'ASC');
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
        $this->db->like($like, $search);
		$result = $this->db->get('clients');
		return $result->result();
	}

	function delete_news($id)
	{
		$this->db->where('news_id', $id);
        $result = $this->db->delete('client_news');
        if(!$result)
        {
        	return false;
        }
        else
        {
        	return true;
        }
	}

	function delete_client($id)
	{
		$this->db->where('client_id', $id);
        $result = $this->db->delete('clients');
        if(!$result)
        {
        	return false;
        }
        else
        {
        	return true;
        }
	}

	function get_client($id)
	{
		$this->db->where('client_id', $id);
        $result = $this->db->get('clients');
        return $result->row();
	}

	function profiles()
	{
		$result = $this->db->get('profiles');
        return $result->result();
	}

	function change_email($id,$email)
	{
		$this->db->where('client_id', $id);
		$this->db->set('email',$email);
		
        if($this->db->update('clients'))
        {
        	return true;
        }
        else
        {
        	return false;
        }
	}

	function recent_licence($id)
	{
		$this->db->from('license');
        $this->db->where('client_id',$id);
        $this->db->join('licensing_types', 'licensing_types.licensing_id = license.licensing_id');
        $this->db->order_by('client_id', 'ASC');
        $this->db->limit(1);
        $result = $this->db->get();
        return $result->row();
	}

	function recent_invoice($id)
	{
		$this->db->where('client_id', $id);
        $result = $this->db->get('invoice');
        return $result->row();
	}

	function register_balance($id)
	{
		$this->db->where('client_id', $id);
		$this->db->select_sum('invoice_amount');
		$query = $this->db->get('invoice')->row();
		return $query->invoice_amount;
	}

	function save_staff_note($id,$client_note)
	{
		$this->db->where('client_id', $id);
		$this->db->set('staff_notes',$client_note);
		
        if($this->db->update('clients'))
        {
        	return true;
        }
        else
        {
        	return false;
        }
	}
	
	function save_note($id,$admin_note)
	{
		$this->db->where('client_id', $id);
		$this->db->set('notes',$admin_note);
		
        if($this->db->update('clients'))
        {
        	return true;
        }
        else
        {
        	return false;
        }
	}

	function total_invoice_due($id)
	{
		$this->db->select_sum('amount');
		$this->db->where('client_id', $id);
		$this->db->where('transaction_type', 'due');
		$query = $this->db->get('register')->row();
		return $query->amount;
	}

	function total_invoice_paid($id)
	{
		$this->db->select_sum('amount');
		$this->db->where('client_id', $id);
		$this->db->where('transaction_type', 'paid');
		$query = $this->db->get('register')->row();
		return $query->amount;
	}

	function total($id)
	{
		$this->db->select_sum('amount');
		$this->db->where('client_id', $id);
		$query = $this->db->get('register')->row();
		return $query->amount;
	}

	function total_invoice_credit($id)
	{
		$this->db->select('*');
		$this->db->where('client_id', $id);
		$this->db->where('transaction_type', 'credit');
		$result = $this->db->get('register');
		return $result->num_rows();
	}

	function order_active($id)
	{
		$this->db->select('*');
		$this->db->where('client_id', $id);
		$this->db->where('status', 'active');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_pending($id)
	{
		$this->db->select('*');
		$this->db->where('client_id', $id);
		$this->db->where('status', 'pending');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_suspended($id)
	{
		$this->db->select('*');
		$this->db->where('client_id', $id);
		$this->db->where('status', 'suspended');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_cancelled($id)
	{
		$this->db->select('*');
		$this->db->where('client_id', $id);
		$this->db->where('status', 'cancelled');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_refunded($id)
	{
		$this->db->select('*');
		$this->db->where('client_id', $id);
		$this->db->where('status', 'refunded');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_fraud($id)
	{
		$this->db->select('*');
		$this->db->where('client_id', $id);
		$this->db->where('status', 'fraud');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function order_incomplete($id)
	{
		$this->db->select('*');
		$this->db->where('client_id', $id);
		$this->db->where('status', 'incomplete');
		$result = $this->db->get('order');
		return $result->num_rows();
	}

	function save($profiles,$first_name,$last_name,$org,$address_1,$city,$state,$province,$zip,$country,$phone,$fax,$email,$password,$client_notes,$admin_notes)
	{
		$data = array(
					'profile_array'		=>	'',
					'first_name'	=>	$first_name,
					'last_name'		=>	$last_name,
					'org'			=>	$org,
					'address_1'		=>	$address_1,
					'city'			=>	$city,
					'state'			=>	$state,
					'province'		=>	$province,
					'zip'			=>	$zip,
					'country'		=>	$country,
					'phone'			=>	$phone,
					'fax'			=>	$fax,
					'anon_key'		=>	'',
					'credit_card'	=>	'',
					'email'			=>	$email,
					'password'		=>	md5($password),
					'staff_notes'	=>	$client_notes,
					'notes'			=>	$admin_notes,
					'created'		=>	strtotime(date('d-m-Y')),
						);
		if($this->db->insert('clients',$data))
		{
			return true;
		}
	 	else
        {
        	return false;
        }
	}

	function update($id,$profiles,$first_name,$last_name,$org,$address_1,$city,$state,$province,$zip,$country,$phone,$fax,$email,$password,$client_notes,$admin_notes)
	{
		if($password=='')
		{
			$this->db->where('client_id', $id);
			$this->db->set('profile_array',$profiles);
			$this->db->set('first_name',$first_name);
			$this->db->set('last_name',$last_name);
			$this->db->set('org',$org);
			$this->db->set('address_1',$address_1);
			$this->db->set('city',$city);
			$this->db->set('state',$state);
			$this->db->set('province',$province);
			$this->db->set('zip',$zip);
			$this->db->set('country',$country);
			$this->db->set('phone',$phone);
			$this->db->set('fax',$fax);
			$this->db->set('email',$email);
			$this->db->set('staff_notes',$client_notes);
			$this->db->set('notes',$admin_notes);
			
	        if($this->db->update('clients'))
	        {
	        	return true;
	        }
	        else
	        {
	        	return false;
	        }
		}
		else
		{
			$this->db->where('client_id', $id);
			$this->db->set('profile_array',$profiles);
			$this->db->set('first_name',$first_name);
			$this->db->set('last_name',$last_name);
			$this->db->set('org',$org);
			$this->db->set('address_1',$address_1);
			$this->db->set('city',$city);
			$this->db->set('state',$state);
			$this->db->set('province',$province);
			$this->db->set('zip',$zip);
			$this->db->set('country',$country);
			$this->db->set('phone',$phone);
			$this->db->set('fax',$fax);
			$this->db->set('email',$email);
			$this->db->set('password',md5($password));
			$this->db->set('staff_notes',$client_notes);
			$this->db->set('notes',$admin_notes);
			
	        if($this->db->update('clients'))
	        {
	        	return true;
	        }
	        else
	        {
	        	return false;
	        }
		}
	}


}
?>