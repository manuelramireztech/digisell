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
}
?>