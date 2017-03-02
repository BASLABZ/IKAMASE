<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
   
class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->library('session');
        $this->load->library('template');
    }
    public function index($error = NULL) {
         $data = array(
            'title' => 'Login Page',
            'action' => site_url('login/auth/login'),
            'error' => $error
        );
        $this->template->view_auth_admin('ikamaselogin/auth/index',$data);
    }
    public function login()
    {
        $login  = $this->m_auth->login(
                                            $this->input->post('email'),
                                            $this->input->post('password'));
        if ($login>0) {
            $row = $this->m_auth->data_login($this->input->post('email'),
                                            $this->input->post('password'));
            $data   = array(
                                'logged' => TRUE,
                                'email' => $row->email,
                                'password' => $row->password);
            $this->session->set_userdata($data);
            redirect(site_url('login/home/'));

        }else{
            $error = 'Maaf Login Gagal, email / Password Salah ';
            $this->index($error);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(site_url('login/auth'));
    }

}


