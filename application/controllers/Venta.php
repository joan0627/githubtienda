<?php

class Venta extends CI_controller
{


	public function __construct(){

		parent::__construct();
		$this->load->model('Model_producto');
		$this->load->model('Model_venta');
		$this->load->model('Model_usuario');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}


	}


	public function index()
	{

	}


	public function registrarventa(){


		$data['usuarios'] = $this->Model_usuario->BuscarTodosUsuarios();
	
		
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroVenta_view',$data);
		$this->load->view('layouts/footer');

	}

	
	public function todosProductos()
	{
	

		$datosCarga["data"] = [];
		$datosCarga['data'] = $this->Model_producto->ProductoVenta();

		echo json_encode($datosCarga);
	
	
	}	

	public function historialventasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoVentas_view');
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
