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

			$buscar = $this->input->get("buscar");

			if($buscar == 'Habilitado' || $buscar == 'habilitado' || $buscar == 'HABILITADO')
			{
				$buscar=1;
			}
			elseif($buscar == 'Deshabilitado' || $buscar == 'deshabilitado' || $buscar == 'DESHABILITADO')
			{
				$buscar=0;
			}

		  

			$datosCliente['resultado'] = $this->Model_cliente->ListarDatosCliente($buscar);
			

			$this->load->view('layouts/superadministrador/header');
			$this->load->view('layouts/superadministrador/aside');
			$this->load->view('superadministrador/general/listadoClientes_view',$datosCliente);
			$this->load->view('layouts/footer');
		
	}

	function numEstadoMascotas(){

		$documento = $this->input->post("documento");

		$data = $this->Model_cliente->Estadomascotas($documento);

		echo json_encode($data);


	}

	
	public function registro()
	{
		$datosCarga['tipomascotas'] = $this->Model_cliente->TipoMascota();
		$datosCarga['razas'] = $this->Model_cliente->raza();
		$datosCarga['unidadesmedidas'] = $this->Model_producto->buscarUnidadesMedidas();
		$datosCarga['idTiposDocumentos'] = $this->Model_proveedor->BuscarTiposDocumentos();


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
		$numMascotas = $this->input->post("numMascotas");
		


		$datosCliente = array(
			'TipoDocumento' => $tipodocumento,
			 'documento' => $documento,
			 'nombre' => $nombreC,
			 'telefono' => $telefono,
			 'celular' => $celular,
			 'direccion' => $direccion,
			 'correo' => $correo,
			 'numMascotas' => $numMascotas,

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
			 
			 'peso' => $peso,
			 'edad' => $edad,
			 'idUnidadMedida' => $unidadMedida,
			 'tiempo' => $tiempo,

										
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



	public function actualizar($id = "")
	{

		$data['cliente'] = $this->Model_cliente->buscarDatosCliente($id);
		$data['idTiposDocumentos'] = $this->Model_proveedor->BuscarTiposDocumentos();

		$data['tipomascotas'] = $this->Model_cliente->TipoMascota();
		$data['razas'] = $this->Model_cliente->raza();
		$data['unidadesmedidas'] = $this->Model_producto->buscarUnidadesMedidas();

		
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarCliente_view',$data);
		$this->load->view('layouts/footer');
		
		
	}
	
	public function detalleCliente($id = "")
	{

		$data['cliente'] = $this->Model_cliente->buscarDatosCliente($id);
		$data['idTiposDocumentos'] = $this->Model_proveedor->BuscarTiposDocumentos();

		$data['tipomascotas'] = $this->Model_cliente->TipoMascota();
		$data['razas'] = $this->Model_cliente->raza();
		$data['unidadesmedidas'] = $this->Model_producto->buscarUnidadesMedidas();

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verdetalleCliente_view',$data);
		$this->load->view('layouts/footer');
		
		
	}

	public function llenarVerdetalle()
	{
		$documento = $this->input->post("documento");

		$data['data'] = $this->Model_cliente->buscarTabladetalle($documento);
	
		echo json_encode($data);
	}




	public function llenardetalle()
	{
		$documento = $this->input->post("documento");

		$data['data'] = $this->Model_cliente->buscarTabladetalle($documento);
	
		echo json_encode($data);
	}


	public function actualizar_mascota(){
		$idMascota = $this->input->post("idMascota");
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
	

		$datosActualizarMascota= array(
			//'idMascota' => '',
			'idTipoMascota' => $tipoMascota,
			'nombreMascota' => $nombreM,
			'idraza' => $raza,
			'sexo' => $sexo,
			'fechaCumpleanos' => $cumpleanos,
			'observaciones' => $observaciones,
			'peso' => $peso,
			'edad' => $edad,
			'idUnidadMedida' => $unidadMedida,
			'tiempo' => $tiempo,

									   
	   );


	   $this->Model_cliente->ActualizarMascota( $idMascota, $datosActualizarMascota);

	}


	public function Actualizar_cliente (){
		$documento =$this->input->post("documentoC");
		$nombre = $this->input->post("nombreClienteA");
		$telefono = $this->input->post("telefonoClienteA");
		$celular = $this->input->post("celularClienteA");
		$direccion  = $this->input->post("direccionClienteA");
		$correo  = $this->input->post("correoclienteA");


		$consultaM=$this->Model_cliente->consultaNumMascotas($documento);

		$consultaM = $consultaM["numMascotas"];

	

		$datosActualizarCliente= array(
		
			'nombre' => $nombre,
			'telefono' => $telefono,
			'celular' => $celular,
			'direccion' => $direccion,
			'correo' => $correo,
			'numMascotas' => $consultaM,
									   
		);

		   
		$this->Model_cliente->ActualizarCliente( $documento, $datosActualizarCliente);

	}

	public function actualizar_numMascotas(){
		
		$numMascotas = $this->input->post("numMascotas");
		$documentoC = $this->input->post("documentoC");

		$consultaM=$this->Model_cliente->consultaNumMascotas($documentoC);

		$consultaM = $consultaM["numMascotas"] + $numMascotas;


		$this->Model_cliente->actualizarNumMascotas($documentoC,$consultaM);


		

	}

	public function actualizar_estado(){

		$idMascota =$this->input->post("idMascota");
		$estado =$this->input->post("estado");


		$this->Model_cliente->ActualizaEstado( $idMascota, $estado);

	}

	public function estado_cliente(){

		$documentoC =$this->input->post("documento");
		$estadoC =$this->input->post("estado");

		$this->Model_cliente->ActualizaEstadoCliente( $documentoC, $estadoC);

	}





	public function documento_exist(){
		$documentoC =$this->input->post("documentoC");

		//echo $documentoC;
		$data_exist = $this->Model_cliente->consulta_documento($documentoC);

		//echo $data_exist;

		if($data_exist == "false"){
		
			echo 'false';
			exit;

		
		}else{

			echo 'true';
			exit;

		}



		
	}



	public function listadoMascota()
	{


		
		$buscar = $this->input->get("buscar");

		if($buscar == 'Habilitado' || $buscar == 'habilitado' || $buscar == 'HABILITADO')
		{
			$buscar=1;
		}
		elseif($buscar == 'Deshabilitado' || $buscar == 'deshabilitado' || $buscar == 'DESHABILITADO')
		{
			$buscar=0;
		}


		$datosMascota['resultado'] = $this->Model_cliente->buscarTodasMascota($buscar);

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoMascotas_view',$datosMascota);
		$this->load->view('layouts/footer');
		
	}


	public function historialMascota($id)
	{


		$data['mascota'] = $this->Model_cliente->buscarDatosMascota($id);


		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/historialMascota_view',$data);
		$this->load->view('layouts/footer');
		
	}



	public function llenar_historial(){


		$idMascotaH = $this->input->post("idMascotaH");

		$data['data'] = $this->Model_cliente->historial_mascota($idMascotaH);
	
		echo json_encode($data);

	
	}








}















?>
