<?php 
/**
* author : ahmad bastiar
*/
class M_berita extends CI_Model
{
	
	public function get_berita()
	{
		$query = "SELECT * FROM berita b join kategori k on b.idkategori  = k.idkategori order by idberita DESC";
		return $this->db->query($query)->result_array();
	}
	public function lihat_komentar($param)
	{
		return $this->db
					->where('idberita',$param)
					->get('berita')
					->result_array();
	}
}