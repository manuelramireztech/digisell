<?php
class Coupons extends CI_Model
{
	function get_coupons($limit=0, $offset=0)
	{
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
		$result = $this->db->get('coupons');
		return $result->result();
	}

	function total_coupons()
	{
		$this->db->select('*');
		$result = $this->db->get('coupons');
		return $result->num_rows();
	}

	function get_coupon($code)
	{
		$this->db->where('coupon_code',$code);
		$result = $this->db->get('coupons');
		return $result->row();
	}

	function delete_coupons($id)
	{
		$this->db->where('coupon_code', $id);
        $result = $this->db->delete('coupons');
        if(!$result)
        {
        	return false;
        }
        else
        {
        	return true;
        }
	}

	function save($data)
	{
		if($this->db->insert('coupons',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function edit($data)
	{
		print_r($data);
		die();
		$this->db->where('coupon_code',$data['coupon_code']);
		$this->db->set('expires_on',$data['expires_on']);
		$this->db->set('coupon_type',$data['coupon_type']);
		$this->db->set('coupon_code',$data['coupon_code']);
		$this->db->set('discount',$data['discount']);
		if($this->db->update('coupons',$data))
		{
			return true;
		}
	 	else
        {
        	return false;
        }
	}
}
?>