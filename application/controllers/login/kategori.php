<?php 
/**
* author : ahmad bastiar
*/
class Kategori extends CI_Controller
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
		$this->load->model('m_kategori');
		$this->load->library('template');
	}
	public function index()
	{
		$listkategori = $this->m_kategori->get_kategori();
		$this->template->view_admin('ikamaselogin/berita/kategori/list',['data'=>$listkategori]);
	}
	public function add()
	{
		$this->template->view_admin('ikamaselogin/berita/kategori/add');
	}
	public function simpan($param)
	{
			$this->form_validation->set_rules('kategori','kategori','required');
			if ( $this->form_validation->run() == FALSE ) {
			$this->template->view('ikamaselogin/berita/kategori/add');	
			}else{
					$values = array(		
					'kategori' 	=> $this->input->post('kategori'));
					$insert = $this->m_kategori->simpan($values);
					$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Kategori Berhasil Disimpan. </div>");
					redirect('login/kategori');
			}
	}
	public function delete($where)
	{
		$data = $this->m_kategori->delete($where);
		$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Kategori Berhasil Dihapus. </div>");
			redirect('login/kategori');	
		
	}

}