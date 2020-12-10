<?php

class Proveedor extends CI_controller
{


	public function __construct()
	{

		/*************************************************************/
		// **Aqui se cargan todas las librerias que vamos a utilizar // **
		/*************************************************************/
		parent::__construct();
		$this->load->model('Model_proveedor');
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

		/*Protección Módulo si el usuario es Empleado*/
		if($this->session->userdata("idRol") == 200)
		{
			redirect(base_url().'errors/error_404');
						
		}
		
		
	}

	public function index($page=1)
	{
		
			$page_size=2;
			$offset=0* $page_size;

			$buscar = $this->input->get("buscar");

			if($buscar == 'Habilitado' || $buscar == 'habilitado' || $buscar == 'HABILITADO')
			{
				$buscar=1;
			}
			elseif($buscar == 'Deshabilitado' || $buscar == 'deshabilitado' || $buscar == 'DESHABILITADO')
			{
				$buscar=0;
			}

	   
		   $datosProveedor['resultado'] = $this->Model_proveedor->BuscarDatos($buscar);


	   
		   $this->load->view('layouts/superadministrador/header');
		   $this->load->view('layouts/superadministrador/aside');
		   $this->load->view('superadministrador/general/listadoProveedores_view', $datosProveedor);
		   $this->load->view('layouts/footer');
	   
	}



	public function registro()
	{

		$datosCarga['idTiposDocumentos'] = $this->Model_proveedor->BuscarTiposDocumentos();
		$datosCarga['marcas'] = $this->Model_producto->buscarTodasMarcas();


		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProveedor_view', $datosCarga);
		$this->load->view('layouts/footer');
	}


	public function registroProveedor()
	{

		$idTipodocumento=$this->input->post('idTipodocumento');
		$documentoProveedor=$this->input->post('documentoProveedor');
		$nombreP= $this->input->post('nombreP');
		$telefonoP= $this->input->post('telefonoP');
		$celularP= $this->input->post('celularP');
		$direccionP= $this->input->post('direccionP');
		$correoP = $this->input->post('correoP');
		$nombreContactoP= $this->input->post('nombreContactoP');
		$diaVisitaP= $this->input->post('diaVisitaP');
		$observacionesP = $this->input->post('observacionesP');
		

		$datosRegistroCompra = array(
			'idTipoDocumento' =>$idTipodocumento,
			'documento' =>$documentoProveedor,
			'nombre' => $nombreP,
			'telefono' =>$telefonoP,
			'celular' => $celularP,
			'direccion' =>$direccionP,
			'correo' =>$correoP,
			'nombreContacto'=>$nombreContactoP,
			'diaVisita' => $diaVisitaP,
			'observaciones' =>$observacionesP,
		
			
			
		);


		$this->Model_proveedor->insertarProveedor($datosRegistroCompra);
				

	
	}
		
	
	public function detalleMarca()
	{	

		$documentoProveedor= $this->input->post('documentoProveedor');
		$idMarca= $this->input->post('idMarca');


		$detalleMarca = array (
			'documentoProveedor'=>$documentoProveedor,
			'idMarca'=>$idMarca
		);

		$this->Model_proveedor->insertarDetalleMarca($detalleMarca);

	}
	
	


	public function actualizar($documento = "")
	{
	
			$data['marcas'] = $this->Model_producto->buscarTodasMarcas();
			$datosProveedor1 = $this->Model_proveedor->buscarDatosProveedor($documento);
			 $data['clave']= $datosProveedor1;

			 $this->load->view('layouts/superadministrador/header');
			 $this->load->view('layouts/superadministrador/aside');
			 $this->load->view('superadministrador/formularios/actualizarProveedor_view',$data);
			 $this->load->view('layouts/footer');

	}

	public function detalle($documento = "")
	{

		if (isset($documento)) {

			$resultado = $this->Model_proveedor->buscarDatosProveedor($documento);


			$data['clave']= $resultado;


			if (isset($resultado)) {

				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/verdetalleProveedor_view', $data);
				$this->load->view('layouts/footer');
			}
		}
	}


	public function estado_proveedor(){

		$documentoP =$this->input->post("documento");
		$estadoP =$this->input->post("estado");

		$this->Model_proveedor->ActualizaEstadoProveedor( $documentoP, $estadoP);

	}


	public function deleteDetalleMarca(){

		$_id= $this->input->post('id');
		$idProveedor= $this->input->post('idProveedor');
	

		 $this->Model_proveedor->borrarDetalleMarca($_id,$idProveedor);
		
		
	}


	public function documento_exist(){
		$documento =$this->input->post("documento");

		$data_exist = $this->Model_proveedor->consulta_documento($documento);

		
		if($data_exist == "false"){

			echo 'false';
			exit;
		
		}else{

			echo 'true';
			exit;

		}

		
	}


	public function llenardetalleProveedor()
	{
		$documento = $this->input->post("documento");

		$data['data'] = $this->Model_proveedor->tabladetalleMarcas($documento);
	
		echo json_encode($data);
	}


	public function consulta_Exis_id(){


		$idMarca=$this->input->post('idMarca');
		$documentoProveedor=$this->input->post('documentoProveedor');
		$data=$this->Model_proveedor->consulta_Exis_id($idMarca,$documentoProveedor);
		
		echo json_encode($data);

	}



	public function actualizarProveedor()
	{

		//$idTipodocumento=$this->input->post('idTipodocumento');
		$documentoProveedor=$this->input->post('documentoProveedor');
		$nombreP= $this->input->post('nombreP');
		$telefonoP= $this->input->post('telefonoP');
		$celularP= $this->input->post('celularP');
		$direccionP= $this->input->post('direccionP');
		$correoP = $this->input->post('correoP');
		$nombreContactoP= $this->input->post('nombreContactoP');
		$diaVisitaP= $this->input->post('diaVisitaP');
		$observacionesP = $this->input->post('observacionesP');
	
		$datosActualizarProveedor = array(
			//'idTipoDocumento' =>$idTipodocumento,
			'documento' =>$documentoProveedor,
			'nombre' => $nombreP,
			'telefono' =>$telefonoP,
			'celular' => $celularP,
			'direccion' =>$direccionP,
			'correo' =>$correoP,
			'nombreContacto'=>$nombreContactoP,
			'diaVisita' => $diaVisitaP,
			'observaciones' =>$observacionesP,
			
			
			
		);


		$this->Model_proveedor->actualizarProveedor($documentoProveedor,$datosActualizarProveedor);
				

	
	}
		



	



}