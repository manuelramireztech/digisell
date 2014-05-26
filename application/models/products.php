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

	
}
?>