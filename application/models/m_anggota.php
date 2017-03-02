<?php 
/**
* author : ahmad bastiar
*/
class M_anggota extends CI_Model
{
	
	public function get_anggota()
	{
		$query = "SELECT * FROM anggota order by idanggota DESC";
		return $this->db->query($query)->result_array();
	}
}