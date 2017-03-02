<?php 

/**
* author : aturan Forum
*/
class M_aturan_forum extends CI_Model
{
	public function get_aturan()
	{
		$query = "SELECT * FROM aturan order by idaturan DESC";
		return $this->db->query($query)->result_array();
	}
}