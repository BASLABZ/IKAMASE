<?php 
/**
* author : ahmad bastiar
*/
class M_pengurus extends CI_Model
{
	
	public function get_pengurus()
	{
		$query = "SELECT * FROM pengurus p join  jabatan j on p.idjabatan = j.idjabatan order by p.idpengurus ASC";
		return $this->db->query($query)->result_array();
	}
}