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
}
?>