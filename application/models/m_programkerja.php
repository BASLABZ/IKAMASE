<?php 
/**
* author  ahmad bastiar
*/
class M_programkerja extends CI_Model
{
	
	public function get_programkerja()
	{
		$query  = "SELECT * FROM programkerja order by idprogramkerja DESC";
		return $this->db->query($query)->result_array();
	}

}