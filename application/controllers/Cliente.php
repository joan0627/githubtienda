<?php

class Cliente extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_cliente');
		$this->load->model('Model_producto');
		$this->load->model('Model_proveedor');
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
		$datosCarga['idTiposDocumentos'] = $this->Model_proveedor->BuscarTiposDocumentos();

		$resultado = $this->Model_cliente->obtenerId();
		$datosCarga['clave']= $resultado;

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroCliente_view',$datosCarga);
		$this->load->view('layouts/footer');
		
	}

	public function registro_Cliente(){

		$tipodocumento = $this->input->post("tipodocumento");
		$documento = $this->input->post("documento");
		$nombreC  = $this->input->post("nombreC");
		$telefono  = $this->input->post("telefono");
		$celular  = $this->input->post("celular");
		$direccion  = $this->input->post("direccion");
		$correo = $this->input->post("correo");
		


		$datosCliente = array(
			'TipoDocumento' => $tipodocumento,
			 'documento' => $documento,
			 'nombre' => $nombreC,
			 'telefono' => $telefono,
			 'celular' => $celular,
			 'direccion' => $direccion,
			 'correo' => $correo,

		);

		$this->Model_cliente->insertarCliente($datosCliente);


	}

	public function registro_mascota(){

	
		$tipoMascota = $this->input->post("tipomascota");
		$nombreM = $this->input->post("nombreM");
		$raza  = $this->input->post("raza");
		$sexo  = $this->input->post("sexo");
		$cumpleanos = $this->input->post("cumpleanos");
		$observaciones = $this->input->post("observaciones");
		$unidadMedida  = $this->input->post("unidadMedida");
		$peso  = $this->input->post("peso");
		$edad = $this->input->post("edad");
		$tiempo = $this->input->post("tiempo");
		$documento = $this->input->post("documento");
		$numRows = $this->input->post("numRows");
		$estado = true;

		


		$datosMascota= array(
			'idMascota' => '',
			'idTipoMascota' => $tipoMascota,
			 'nombreMascota' => $nombreM,
			 'idraza' => $raza,
			 'sexo' => $sexo,
			 'fechaCumpleanos' => $cumpleanos,
			 'observaciones' => $observaciones,
			// 'unidad' => $unidadMedida,
			 'peso' => $peso,
			 'edad' => $edad,
			 'estado' => $estado,
			 
			// 'tiempoM' => $tiempo,

										
		);

		$this->Model_cliente->insertarMascota($datosMascota);
		$limite = $this->Model_cliente->consultarRows($numRows);
  	
	
		
		$datosDetalleMascota= array(
			'idDetalleMascotaCliente'=>'',
			'idMascota' => $limite["idMascota"],
			'documentoCliente' => $documento,					
		);

	
		$this->Model_cliente->insertarDetalleMascota($datosDetalleMascota);
		

	}

	public function Eliminar_datos(){

		$documento = $this->input->post("documento");
		$this->Model_cliente->elimarDatoErroneo($documento);


	} 



	public function actualizar()
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
