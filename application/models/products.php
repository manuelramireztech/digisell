<?php
class Products extends CI_Model
{
	function get_products($limit=0, $offset=0)
	{
		$this->db->order_by('product_id', 'DESC');
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
		$result = $this->db->get('products');
		return $result->result();
	}

	function total_products()
	{
		$this->db->select('*');
		$result = $this->db->get('products');
		return $result->num_rows();
	}

	function get_product($id)
	{
		$this->db->select('*');
		$this->db->where('product_id', $id);
		$result = $this->db->get('products');
		return $result->row();
	}

	function delete_products($id)
	{
		$this->db->where('product_id', $id);
        $result = $this->db->delete('products');
        if(!$result)
        {
        	return false;
        }
        else
        {
        	return true;
        }
	}

	function get_test()
	{
		$this->db->where('product_id', 39);
		$result = $this->db->get('products');
		return $result->row();
	}

	function get_licensing_types()
	{
		return $this->db->get('licensing_types')->result();
	}

	function get_downloads()
	{
		return $this->db->get('downloads')->result();
	}

	function get_agreements()
	{
		return $this->db->get('agreements')->result();
	}

	function get_addons()
	{
		return $this->db->get('product_addons')->result();
	}

	function get_upgrade()
	{
		return $this->db->get('upgrade_package')->result();
	}

	function get_support()
	{
		return $this->db->get('support_package')->result();
	}

	function copy($data)
	{
		// var_dump($data);
		// break;
		$this->db->set('product_status',$data->product_status);
		$this->db->set('pricing_array',$data->pricing_array);
		$this->db->set('release','instant');
		$this->db->set('min_purchase',$data->min_purchase);
		$this->db->set('max_purchase',$data->max_purchase);
		$this->db->set('licensing_id',$data->licensing_id);
		$this->db->set('license_qty',$data->license_qty);
		$this->db->set('secret_key',$data->secret_key);
		$this->db->set('email_id',$data->email_id);
		$this->db->set('cc_email',$data->cc_email);
		$this->db->set('product_name',$data->product_name);
		$this->db->set('product_summary',$data->product_summary);
		$this->db->set('product_description',$data->product_description);
		$this->db->set('download_array',$data->download_array);
		$this->db->set('update_array',$data->update_array);
		$this->db->set('upgrade_array',$data->upgrade_array);
		$this->db->set('support_array',$data->support_array);
		$this->db->set('agreement_array',$data->agreement_array);
		$this->db->set('addon_array',$data->addon_array);
		$this->db->set('coupon_array',$data->coupon_array);
		$this->db->set('created',strtotime(date('d-m-Y')));
		if($this->db->insert('products'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function save($id=0,$data)
	{
		if($id)
		{
			$this->db->where('product_id', $id);
			if($this->db->update('products', $data))
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
			$this->db->set('product_status',$data['product_status']);
			$this->db->set('pricing_array',$data['pricing_array']);
			$this->db->set('min_purchase',$data['min_purchase']);
			$this->db->set('max_purchase',$data['max_purchase']);
			$this->db->set('licensing_id',$data['licensing_id']);
			$this->db->set('license_qty',$data['license_qty']);
			$this->db->set('secret_key',$data['secret_key']);
			$this->db->set('email_id',$data['email_id']);
			$this->db->set('cc_email',$data['cc_email']);
			$this->db->set('product_name',$data['product_name']);
			$this->db->set('product_summary',$data['product_summary']);
			$this->db->set('product_description',$data['product_description']);
			$this->db->set('download_array',$data['download_array']);
			$this->db->set('update_array',$data['update_array']);
			$this->db->set('upgrade_array',$data['upgrade_array']);
			$this->db->set('support_array',$data['support_array']);
			$this->db->set('agreement_array',$data['agreement_array']);
			$this->db->set('addon_array',$data['addon_array']);
			$this->db->set('coupon_array',$data['coupon_array']);
			$this->db->set('created',strtotime(date('d-m-Y')));
			if($this->db->insert('products'))
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