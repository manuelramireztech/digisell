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
}
?>