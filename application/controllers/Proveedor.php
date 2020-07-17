<?php

class Proveedor extends CI_controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_usuario');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');



		//Validaciones para los campos de la tabla Persona
		$this->form_validation->set_rules('tipoDocumento', 'tipo documento', 'required');
		$this->form_validation->set_rules('documento', 'documento', 'required');
		$this->form_validation->set_rules('nombre', 'nombre completo', 'required');
		$this->form_validation->set_rules('celular', 'celular', 'required');
		
		//Validaciones para los campos de la tabla proveedor
		$this->form_validation->set_rules('nombreContacto', 'nombre de contacto', 'required');
		$this->form_validation->set_rules('diaVisita', 'dia visita', 'required');

	}

	public function index()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('errors/pagina404_view');
		$this->load->view('layouts/footer');
				
	}
	
	//Inicio de los metodos 
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

