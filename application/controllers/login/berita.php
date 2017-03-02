<?php 
/**
* author : ahmad bastiar
*/
class Berita extends CI_Controller
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
		$this->load->model('m_berita');
		$this->load->model('m_kategori');
		$this->load->library('template');
	}
	public function index()
	{
		$listberita = $this->m_berita->get_berita();
		$this->template->view_admin('ikamaselogin/berita/list',['data'=>$listberita]);
	}

	public function add()
	{
		$kategori  = $this->m_kategori->get_kategori();
		$this->template->view_admin('ikamaselogin/berita/add',['kategori'=>$kategori]);
	}
	public function komentar()
	{
		$this->template->view_admin('ikamaselogin/berita/komentar');

	}

}
