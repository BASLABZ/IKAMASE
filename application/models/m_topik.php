<?php 

/**
* author : ahmad Bastiar
*/
class M_topik extends CI_Model
{
	
	public function get_topik()
	{
		$query = "SELECT * FROM topik t 
						join kategori k 
					on  t.idkategori  = k.idkategori 
						join user u 
					on t.iduser = u.iduser
						join anggota a 
					on t.idanggota = a.idanggota
				ORDER BY t.idtopik DESC";
		return $this->db->query($query)->result_array();
	}
}