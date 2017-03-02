<?php 
/**
* author Ahmad Bastiar
*/
class Topik extends CI_Controller
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
		$this->load->model('m_topik');
		$this->load->model('m_kategori');
		$this->load->library('template');
	}
	public function index()
	{
		$listtopik = $this->m_topik->get_topik();
		$this->template->view_admin('ikamaselogin/topik/list',['data'=>$listtopik]);
	}
	public function add()
	{
		$kategori = $this->m_kategori->get_kategori();
		$this->template->view_admin('ikamaselogin/topik/add',['kategori'=>$kategori]);
	}

}