<?php

class Cliente extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_cliente');
		$this->load->model('Model_producto');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->library('session');
	

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}


	}

	public function index()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoClientes_view');
		$this->load->view('layouts/footer');
		
	}

	
	public function registro()
	{
		$datosCarga['tipomascotas'] = $this->Model_cliente->TipoMascota();
		$datosCarga['razas'] = $this->Model_cliente->raza();
		$datosCarga['unidadesmedidas'] = $this->Model_producto->buscarUnidadesMedidas();


		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroCliente_view',$datosCarga);
		$this->load->view('layouts/footer');
		
	}

	public function prueba(){


		$tipoMascota = $this->input->post("tipoMascota");
		$nombreMascota = $this->input->post("nombreM");
		$raza  = $this->input->post("razaM");
		$sexo  = $this->input->post("sexoM");
		$peso  = $this->input->post("pesoM");
		$unidad  = $this->input->post("unidadM");
		$cumpleanos = $this->input->post("cumpleanosM");
		$edad = $this->input->post("edadM");
		$tiempoM = $this->input->post("tiempoM");
		$observaciones = $this->input->post("observacionesM");


		$datosPrueba = array(
			'tipoMascota' => $tipoMascota,
			 'nombreMascota' => $nombreMascota,
			 'raza' => $raza,
			 'sexo' => $sexo,
			 'peso' => $peso,
			 'unidad' => $unidad,
			 'cumpleanos' => $cumpleanos,
			 'edad' => $edad,
			 'tiempoM' => $tiempoM,
			 'unidad' => $observaciones
		);


	}

	public function actualizarclientesu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarCliente_view');
		$this->load->view('layouts/footer');
		
	}

	public function verdetalleclientesu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verdetalleCliente_view');
		$this->load->view('layouts/footer');
		
	}

	public function historialcliente()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/historialclientes_view');
		$this->load->view('layouts/footer');
		
	}









}















?>
