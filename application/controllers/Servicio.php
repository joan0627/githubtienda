<?php

class Servicio extends CI_controller
{

	public function index()
	{
	
	}

	public function crearserviciosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroServicio_view');
		$this->load->view('layouts/footer');
	}


	
	public function listaserviciosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoServicios_view');
		$this->load->view('layouts/footer');
	}

	public function actualizarserviciosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarServicio_view');
		$this->load->view('layouts/footer');
		
	}

	public function verDetalleserviciosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verdetalleServicio_view');
		$this->load->view('layouts/footer');
		
	}

	public function crearvacuna()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registrovacuna_view');
		$this->load->view('layouts/footer');
		
	}

	
	public function listasvacunas()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadovacunas_view');
		$this->load->view('layouts/footer');
	}


	public function crearmedicamento()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroMedicamento_view');
		$this->load->view('layouts/footer');
	}

	
	public function listamedicamentos()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadomedicamentos_view');
		$this->load->view('layouts/footer');
	}



	
}




?>
