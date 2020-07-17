<?php

class Proveedor extends CI_controller
{

	public function listaproveedoresu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoProvedores_view');
		$this->load->view('layouts/footer');
		
	}
	
	public function registrarproveedor()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProveedor_view');
		$this->load->view('layouts/footer');
		
	}

	public function actualizarproveedor()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarProveedor_view');
		$this->load->view('layouts/footer');
		
	}

	public function verDetalleproveedor()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verdetalleproveedor_view');
		$this->load->view('layouts/footer');
		
	}


}

?>

