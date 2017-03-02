<?php 

/**
* author : ahmad bastiar
*/
class jabatan extends CI_Controller
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
		$this->load->model('m_jabatan');
		$this->load->library('template');
	}

	public function index()
	{
		$listjabatan = $this->m_jabatan->get_jabatan();
		$this->template->view_admin('ikamaselogin/setting/jabatan/list',['data'=>$listjabatan]);
	}

	public function add()
	{
		$this->template->view_admin('ikamaselogin/setting/jabatan/add');
	}

	public function simpan($param)
	{
		$this->form_validation->set_rules('jabatan','jabatan','required');
		if ( $this->form_validation->run() == FALSE ) {
			$this->template->view('ikamaselogin/setting/jabatan/add');	
		}else{
		$values = array(		
					'jabatan' 	=> $this->input->post('jabatan'));
					 $insert = $this->m_jabatan->simpan($values);
				 	 $this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data jabatan Berhasil Disimpan. </div>");
					 redirect('login/jabatan');
		}
	}
	public function delete($where)
	{
		$data = $this->m_jabatan->delete($where);
		$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Jabatan Berhasil Dihapus. </div>");
			redirect('login/jabatan');		
	}
	public function showedit($param)
	{
		$data = $this->m_jabatan->showedit($param);
		$this->template->view_admin('ikamaselogin/setting/jabatan/add');
	}
}