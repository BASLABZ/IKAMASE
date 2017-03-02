<?php 

/**
* autor : ahmad bastiar
*/
class M_jabatan extends CI_Model
{
	
	public function get_jabatan()
	{
		$query = "SELECT * FROM jabatan order by idjabatan ASC";
		return $this->db->query($query)->result_array();
	}
	public function simpan($param)
	{
		return $this->db
					->insert('jabatan',$param);
	}
	public function delete($where)
	{
		return $this->db->where('idjabatan',$where)
						->delete('jabatan');
	}
	public function showedit($param)
	{
		$query = "SELECT * FROM jabatan where idjabatan='".$param."'";
		return $this->db->query($query);
	}
}