<?php 
/**
* author : ahmad bastiar
*/
class M_agenda extends CI_Model
{
	
	public function get_agenda()
	{
		$query  = "SELECT * FROM agenda order by idagenda DESC";
		return $this->db->query($query)->result_array();
	}
}