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
	function get_addon($id)
	{
		$this->db->select('*');
		$this->db->where('addon_id', $id);
		$result = $this->db->get('product_addons');
		return $result->row();
	}
	function get_downloads()
	{
		return $this->db->get('downloads')->result();
	}
	function save($id=0, $data)
	{
		if($id)
		{
			$this->db->where('addon_id', $id);
			if($this->db->update('product_addons', $data))
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
			if($this->db->insert('product_addons', $data))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	function delete($id)
	{
		$this->db->where('addon_id', $id);
        $result = $this->db->delete('product_addons');
        if(!$result)
        {
        	return false;
        }
        else
        {
        	return true;
        }
	}
}
?>