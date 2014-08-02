<?php
class User extends CI_Model
{
	function get_all($limit=0, $offset=0)
	{
		$this->db->order_by('uid', 'DESC');
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
		$result = $this->db->get('admin');
		return $result->result();
	}

	function search($limit=0, $offset=0, $search, $like)
	{
		$this->db->order_by('uid', 'ASC');
		if($limit>0)
        {
            $this->db->limit($limit, $offset);
        }
        $this->db->like($like, $search);
		$result = $this->db->get('admin');
		return $result->result();
	}

	function single_user($id)
	{
		$this->db->where('uid',$id);
		$result = $this->db->get('admin');
		if($result)
		{
			return $result->row();
		}
		else
		{
			return false;
		}
	}

	function update($id, $data)
	{
		$this->db->where('uid',$id);
		if($this->db->update('admin',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function add($data)
	{
		if($this->db->insert('admin',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function delete($id)
	{
		$this->db->where('uid',$id);
		if($this->db->delete('admin'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function remove($data)
	{
		foreach($data as $key)
		{
			$this->db->where('uid',$key);
			if($this->db->delete('admin'))
			{
				$status = true;
			}
			else
			{
				$status = false;
			}
			return $status;
		}
	}
}
?>