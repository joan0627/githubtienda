<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	
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

	public function calendario()
	{
        $this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/calendario_view.php');
		
		
	}

	
	public function registrarcita()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroCitas_view');
		$this->load->view('layouts/footer');

		
	}

	public function historialcitasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/historialCitas_view');
		$this->load->view('layouts/footer');
		
	}

	
	public function verdetallecita()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verDetalleCita_view.php');
		$this->load->view('layouts/footer');
		
	}

	public function actualizarcita()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarCita_view.php');
		$this->load->view('layouts/footer');
		
	}

	public function disponibilidad()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/disponibilidadAgenda_view.php');
	
		
	}
}
