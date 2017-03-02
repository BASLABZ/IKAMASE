<?php 

/**
* model profil : author = Ahmad Bastiar
*/
class M_profil extends CI_Model
{
	public function get_profil()
	{
		$query = "SELECT * FROM profil order by idprofil ASC";
		return $this->db->query($query)->result_array();
	}
	public function simpan($data)
	{
		 return $this->db
                    ->insert('profil',$data);
	}

}