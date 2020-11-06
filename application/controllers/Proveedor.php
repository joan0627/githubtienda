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
		
		
	}

	public function index($page=1)
	{
		
		$page_size=2;
		$offset=0* $page_size;


		  $buscar = $this->input->get("buscar");


	   
		   $datosProveedor['resultado'] = $this->Model_proveedor->BuscarDatos($buscar);


	   
		   $this->load->view('layouts/superadministrador/header');
		   $this->load->view('layouts/superadministrador/aside');
		   $this->load->view('superadministrador/general/listadoProveedores_view', $datosProveedor);
		   $this->load->view('layouts/footer');
	   
	}

	

	public function registro()
	{

			$datosCarga["idTipoDocumento"] = $datosCarga["documento"] = $datosCarga["nombre"] = $datosCarga["telefono"] =
			$datosCarga["celular"] = $datosCarga["direccion"] = $datosCarga["correo"] = $datosCarga["nombreContacto"] =
			$datosCarga["diaVisita"] = $datosCarga["observaciones"] = "";

			$datosCarga['idTiposDocumentos'] = $this->Model_proveedor->BuscarTiposDocumentos();
			$datosCarga['marcas'] = $this->Model_producto->buscarTodasMarcas();




		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProveedor_view', $datosCarga);
		$this->load->view('layouts/footer');
	}



	function registroCompra(){

		$tipoDocumento = $this->input->post('tipoDocumento');
		$documentoProveedor = $this->input->post('documentoProveedor');
		$nombre = $this->input->post('nombre');
		$telefono = $this->input->post('telefono');
		$celular = $this->input->post('celular');
		$direccion = $this->input->post('direccion');
		$correo = $this->input->post('correo');
		$nombreContacto = $this->input->post('nombreContacto');
		$diaVisita = $this->input->post('diaVisita');
		$observaciones = $this->input->post('observaciones');

		$_proveedor = $this->input->post('documentoProveedor');

		$datosRegistroCompra = array(
			'idTipoDocumento' =>$tipoDocumento,
			'documento' => $documentoProveedor,
			'nombre' => $nombre,
			'telefono' => $telefono,
			'celular' => $celular,
			'direccion' => $direccion,
			'correo' => $correo,
			'nombreContacto' => $nombreContacto,
			'diaVisita' => $diaVisita,
			'observaciones' => $observaciones,
		);

		$this->Model_proveedor->insertarProveedor($datosRegistroCompra);
		$this->output->set_status_header(200);

	}


	function detalleMarca(){
		$documentoProveedor = $this->input->post('documentoProveedor');
		$_marca = $this->input->post('idMarca');
		$_proveedor = $documentoProveedor ;

		$datosMarca = array(
			'idDetalleProveedorMarca' => '',
			'documentoProveedor' => $_proveedor,
			'idMarca' => $_marca
		);

		$this->Model_proveedor->insertarDetalleMarca($datosMarca);
		$this->output->set_status_header(200);

		
	}













	public function actualizar($documento = "")
	{
		if($this->form_validation->run())
		{
			$datosProveedor["documento"] = $this->input->post("documento");
			$datosProveedor["nombre"] = $this->input->post("nombre");
			$datosProveedor["telefono"] = $this->input->post("telefono");
			$datosProveedor["celular"] = $this->input->post("celular");
			$datosProveedor["direccion"] = $this->input->post("direccion");
			$datosProveedor["correo"] = $this->input->post("correo");
			$datosProveedor["nombreContacto"] = $this->input->post("nombreContacto");
			$datosProveedor["diaVisita"] = $this->input->post("diaVisita");
			$datosProveedor["observaciones"] = $this->input->post("observaciones");

			$this->Model_proveedor->actualizarProveedor($documento, $datosProveedor);

			$this->session->set_flashdata('actualizar', 'El proveedor ' .$datosProveedor["nombre"].' se ha actualizado correctamente.');

			redirect("proveedor");
		}
		else
		{
			$datosProveedor1 = $this->Model_proveedor->buscarDatosProveedor($documento);
			 //Esta es la vista que carga los datos de los input
			 $data['clave']= $datosProveedor1;

			 $this->load->view('layouts/superadministrador/header');
			 $this->load->view('layouts/superadministrador/aside');
			 $this->load->view('superadministrador/formularios/actualizarProveedor_view',$data);
			 $this->load->view('layouts/footer');
		}
		

	}

	public function detalle($documento = "")
	{

		if (isset($documento)) {

			$resultado = $this->Model_proveedor->buscarDatosProveedor($documento);

			var_dump($resultado);

			$data['clave']= $resultado;


			if (isset($resultado)) {

				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/verdetalleProveedor_view', $data);
				$this->load->view('layouts/footer');
			}
		}
	}

	public function delete(){

		$_documento= $this->input->post('documento',true);
		if(empty($_documento)){
			$this->output
			->set_status_header(400)
			->set_output(json_encode(array ('msg'=>'El documento no puede ser vacío')));
		}
		else
		{
			$this->Model_proveedor->borrar($_documento);
			$this->output->set_status_header(200);
			
		}
	}

	


	



}