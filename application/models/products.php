<?php
class Products extends CI_Model
{
	function get_products($limit=0, $offset=0)
	{
		$this->db->order_by('product_id', 'ASC');
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
}
?>