<?php 
/**
* authir : ahmad bastiar
*/
class Anggota extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) 
		{
		redirect(site_url('auth'));
		}		
		//load model
		$this->load->library('encrypt');
		$this->load->model('m_anggota');
		$this->load->library('template');
	}
	public function index()
	{
		$listanggota = $this->m_anggota->get_anggota();
		$this->template->view_admin('ikamaselogin/anggota/list',['data'=>$listanggota]);
	}


}