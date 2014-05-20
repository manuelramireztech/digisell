<?php
class Client extends CI_Model
{
	function get_clients($limit=0, $offset=0)
	{
		$this->db->order_by('client_id', 'ASC');
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
		$result = $this->db->get('clients');
		return $result->result();
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
}
?>