<?php

class Informe extends CI_controller
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
		
		
	}

	public function generarinformesu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/informes_view.php');
		$this->load->view('layouts/footer');
		
	}
	
}

?>

