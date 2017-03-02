<?php 

/**
* author : ahmad bastiar
*/
class User extends CI_Controller
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
		$this->load->model('m_user');
		$this->load->library('template');
	}
	public function index()
	{
		$listpengguna = $this->m_user->get_pengguna();
		$this->template->view_admin('ikamaselogin/setting/user/list',['data'=>$listpengguna]);
	}
	public function add()
	{
		$this->template->view_admin('ikamaselogin/setting/user/add');
	}
	public function simpan()
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('contact','contact','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');	
		if ( $this->form_validation->run() == FALSE ) {
			$this->template->view('ikamaselogin/setting/user/add');	
		}else{
			$values = array(	
						
						'name' 	=> $this->input->post('name') ,
						'address'	=> $this->input->post('address'),
						'contact'	=> $this->input->post('contact'),
						'email'=>$this->input->post('email'),
						'password'	=> $this->input->post('password'));
			$insert = $this->m_user->simpan($values);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Disimpan. </div>");
			redirect('login/user');
		}
			
	}
	public function delete($where)
	{
		$data = $this->m_user->delete($where);
		$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Dihapus. </div>");
			redirect('login/user');	
		
	}
	public function edituser($param)
	{
		$data = $this->m_user->show_edit($param);
		$this->template->view_admin('ikamaselogin/setting/user/edit',['data'=>$data]);
	}
}