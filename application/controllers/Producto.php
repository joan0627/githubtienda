<?php

class Producto extends CI_controller
{

	public function listaproductosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoProductos_view');
		$this->load->view('layouts/footer');
		
	}
	
	public function registrarproductosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProducto_view');
		$this->load->view('layouts/footer');
		
	}

	public function actualizarproductosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarProducto_view');
		$this->load->view('layouts/footer');
		
	}

	public function verDetalleproductosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verDetalleProducto_view');
		$this->load->view('layouts/footer');
		
	}

	public function precio()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/agregarPrecio_view');
		$this->load->view('layouts/footer');
		
	}

	public function Actualizarprecio()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarPrecio_view');
		$this->load->view('layouts/footer');
		
	}

}

?>
