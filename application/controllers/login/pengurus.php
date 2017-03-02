<?php 
/**
* author : ahmad bastiar
*/
class Pengurus extends CI_Controller
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
		$this->load->model('m_pengurus');
		$this->load->model('m_jabatan');
		$this->load->library('template');
	}
	public function index()
	{
		$listpengurus = $this->m_pengurus->get_pengurus();
		$this->template->view_admin('ikamaselogin/setting/pengurus/list',['data'=>$listpengurus]);
	}
	public function add()
	{
		$listjabatan  = $this->m_jabatan->get_jabatan();
		$this->template->view_admin('ikamaselogin/setting/pengurus/add',['jabatan'=>$listjabatan]);
	}

}