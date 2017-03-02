<?php 

/**
* author : ahmad bastiar
*/
class m_user extends CI_Model
{
	
	public function get_pengguna()
	{
		$query = "SELECT * FROM user order by iduser DESC";
		return $this->db->query($query)->result_array();
	}
	public function simpan($param)
	{
		return $this->db
					->insert('user',$param);
	}
	public function delete($where)
	{
		return $this->db->where('iduser',$where)
						->delete('user');
	}
	public function show_edit($param)
	{
		$query = "SELECT * FROM user where iduser = '".$param."'";
		return $this->db->query($query)->result_array();
	}
}