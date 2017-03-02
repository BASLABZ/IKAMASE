<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		// $this->libauth->cek_login();	
		if ($this->session->userdata('logged')<>1) 
		{
		redirect(site_url('login/auth'));
		}
		$this->load->library('template');
	}

	public function index()
	{
		
		$this->template->view_admin('ikamaselogin/home/index');
		
	}
}
