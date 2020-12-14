<?php

class Ayuda extends CI_controller
{

	public function __construct()
	{
		parent::__construct();

	

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}


	}
	

	public function index()
	{
        $this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/ayuda_view');
		$this->load->view('layouts/footer');
	}

		


}


