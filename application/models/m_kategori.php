<?php 
/**
* author :ahmad Bastiar
*/
class M_kategori extends CI_Model
{
	
	public function get_kategori()
	{
		$query  = "SELECT * FROM kategori order by idkategori DESC";
		return $this->db->query($query)->result_array();
	}
	public function simpan($param)
	{
		return $this->db
					->insert('kategori',$param);
	}
	public function delete($where)
	{
		return $this->db->where('idkategori',$where)
						->delete('kategori');
	}

}
