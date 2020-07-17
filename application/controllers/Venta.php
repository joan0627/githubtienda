<?php

class Venta extends CI_controller
{

	public function index()
	{

	}


	public function historialventasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoVentas_view');
		$this->load->view('layouts/footer');
	}

	public function registrarventasu(){
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroVenta_view');
		$this->load->view('layouts/footer');

	}

	public function actualizarventasu(){
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarVenta_view');
		$this->load->view('layouts/footer');

	}


	public function registrarventaservicio(){
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside'); 
		$this->load->view('superadministrador/formularios/ventaservicio_view');
		$this->load->view('layouts/footer');

	}

}




?>
