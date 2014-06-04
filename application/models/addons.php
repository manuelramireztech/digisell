<?php
class Addons extends CI_Model
{
	function get_addons($limit=0, $offset=0)
	{
		$this->db->order_by('addon_id', 'DESC');
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
		$result = $this->db->get('product_addons');
		return $result->result();
	}
	function total_addons()
	{
		$this->db->select('*');
		$result = $this->db->get('product_addons');
		return $result->num_rows();
	}
}
?>