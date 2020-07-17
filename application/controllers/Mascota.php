<?php

class Mascota extends CI_controller
{

	
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


