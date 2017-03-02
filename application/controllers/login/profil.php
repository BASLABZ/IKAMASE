<?php 

/**
* author : ahmad bastiar
*/
class Profil extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		// $this->load->helper(array('form','url'));
		$this->load->helper(array('url')); //load helper url 
		if ($this->session->userdata('logged')<>1) 
		{
		redirect(site_url('auth'));
		}		
		//load model
		$this->load->library('encrypt');
		$this->load->model('m_profil');
		$this->load->library('template');
	}
	public function index()
	{
		$listprofil = $this->m_profil->get_profil();
		$this->template->view_admin('ikamaselogin/setting/profil/list',['data'=>$listprofil]);
	}
	public function add()
	{
		$this->template->view_admin('ikamaselogin/setting/profil/add');
	}
	public function inserts()
	{
		
		$this->template->view_admin('ikamaselogin/setting/profil/add');	
	}
	public function insert()
	{
		        $this->load->library('upload');
		        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
			    $config['upload_path'] = './assets/uploads/'; //path folder
			    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa and sesuaikan
			    $config['max_size'] = '2048'; //maksimum besar file 2M
			    $config['max_width']  = '1288'; //lebar maksimum 1288 px
			    $config['max_height']  = '768'; //tinggi maksimu 768 px
			    $config['file_name'] = $nmfile; //nama yang terupload nantinya
			    $this->upload->initialize($config);
			    if($_FILES['gambar']['name'])
		        {
		        		if ($this->upload->do_upload('gambar')) {
		        			var_dump($_FILES['gambar']['name']);die();
		        		}
		        	 // $this->template->view_admin('ikamaselogin/setting/profil/add');	
		   //          if ($this->upload->do_upload('gambar'))
		   //          {

		   //              $gbr = $this->upload->data();
		   //              $data = array(
		   //                'judul_profil'=>$this->input->post('judul_profil'),
		   //                'deksripsi'=>$this->input->post('deksripsi'),
		   //                'gambar' =>$gbr['file_name']
		   //              );
		   //           	$this->m_profil->simpan($data); //akses model untuk menyimpan ke database
		   //              //pesan yang muncul jika berhasil diupload pada session flashdata
		   //              $this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Profil Berhasil Disimpan. </div>");
					// redirect('login/profil');
		   //          }else{
		   //              //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
		   //              $this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Profil Berhasil Disimpan. </div>");
					// redirect('login/profil/add');
		   //          }
		        }
	}
	// public function simpan()
	// {
	// 		$data  = $this->input->post();
	// 		var_dump($data);
	// 		die();
	// 		$this->load->library('upload');
	//         $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
	//         $config['upload_path'] = './images/'; //path folder
	//         $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	//         $config['max_size'] = '2048'; //maksimum besar file 2M
	//         $config['max_width']  = '1288'; //lebar maksimum 1288 px
	//         $config['max_height']  = '768'; //tinggi maksimu 768 px
	//         $config['file_name'] = $nmfile; //nama yang terupload nantinya
	//         $this->upload->initialize($config);
 //        if($_FILES['gambar']['name'])
 //        {
 //            if ($this->upload->do_upload('gambar'))
 //            {
 //                $gbr = $this->upload->data();
 //                $data = array(
 //                  'judul_profil' =>$this->input->post('judul_profil'),
 //                  'deksripsi' =>$this->input->post('deksripsi'),
 //                  'gambar' =>$gbr['file_name']
 //                );
 //                var_dump($data);
 //                die();
 //                $this->m_profil->simpan($data);
 //                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
 //                redirect('login/simpan'); 
 //            }else{
              
 //                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
 //                redirect('login/profil/add'); //jika gagal maka akan ditampilkan form upload
 //            }
 //        }
 //    }
	}
