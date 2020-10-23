<?php

class Mascota extends CI_controller
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

		
	public function registrarmascota()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroMascota_view');
		$this->load->view('layouts/footer');
		
	}


	public function actualizar()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarMascota_view');
		$this->load->view('layouts/footer');
		
	}

	public function verDetalle()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verDetalleMascota_view');
		$this->load->view('layouts/footer');
		
	}



}


