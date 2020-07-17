<?php

class Compras extends CI_controller
{

	public function index()
	{
		
	}


	
	public function historialcomprasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoCompras_view');
		$this->load->view('layouts/footer');
		
		
	}


	
	public function registrarcomprasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroCompra_view');
		$this->load->view('layouts/footer');	
		
	}
	
	public function actualizarcomprasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarServicio_view');
		$this->load->view('layouts/footer');
		
	}

	public function verDetallecomprasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verdetalleServicio_view');
		$this->load->view('layouts/footer');
		
	}
	

}















?>
