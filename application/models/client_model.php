<?php  
class Client_model extends CI_Model
{
	public function client()
	{
		$this->db->select('*');

		$this->db->from('users');

		$this->db->where('role', 0 );


		$query = $this->db->get();

		if ( $query->num_rows() > 0 )
		{
			return $query;
		}

	}
}
?>