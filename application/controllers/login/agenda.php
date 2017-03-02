<?php 
/**
* author : ahmad bastiar
*/
class Agenda extends CI_Controller
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
		$this->load->model('m_agenda');
		$this->load->library('template');
	}
	public function index()
	{
		$listagenda = $this->m_agenda->get_agenda();
		$this->template->view_admin('ikamaselogin/agenda/list',['data'=>$listagenda]);
	}
	public function add()
	{
		$this->template->view_admin('ikamaselogin/agenda/add');
	}
}