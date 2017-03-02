<?php

/**
* author : ahmad bastiar
*/
class Programkerja extends CI_Controller
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
		$this->load->model('m_programkerja');
		$this->load->library('template');
	}
	public function index()
	{
		$listprogramkerja = $this->m_programkerja->get_programkerja();
		$this->template->view_admin('ikamaselogin/setting/programkerja/list',['data'=>$listprogramkerja]);
	}
	public function add()
	{
		$this->template->view_admin('ikamaselogin/setting/programkerja/add');
	}
}