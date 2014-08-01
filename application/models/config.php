<?php
class Config extends CI_Model
{
	function get_data()
	{
		$this->db->select('*');
		$result = $this->db->get('settings');
		if($result)
		{
			return $result->row();			
		}
		else
		{
			return false;
		}
	}

	function get_news()
	{
		$this->db->select('*');
		$result = $this->db->get('news');
		if($result)
		{
			return $result->row();			
		}
		else
		{
			return false;
		}
	}

	function save($data)
	{
		if($this->get_data())
		{
			if($this->db->update('settings',$data))
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
			if($this->db->insert('settings',$data))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	function save_news($data)
	{
		if($this->get_news())
		{
			if($this->db->update('news',$data))
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
			if($this->db->insert('news',$data))
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