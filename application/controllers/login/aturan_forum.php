<?php 
/**
* author: ahmad bastiar
*/
class Aturan_forum extends CI_Controller
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
		$this->load->model('m_aturan_forum');
		$this->load->library('template');
	}
	public function index()
	{
		$listaturan = $this->m_aturan_forum->get_aturan();
		$this->template->view_admin('ikamaselogin/aturan/list',['data'=>$listaturan]);
	}
	public function add()
	{
		$this->template->view_admin('ikamaselogin/aturan/add');
	}
	
}