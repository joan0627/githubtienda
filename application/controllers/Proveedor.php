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

		//Campos del formulario
		/*if ($this->form_validation->run()) {

			

			/*Arreglos para guardar informacion en las dos tablas: Persona y Proveedor
			Aqui se necesitan dos arreglos diferentes ya que los datos van 
			para dos tablas diferentes
			*/
		/*	$datosProveedor["idTipoDocumento"] = $_POST["tipoDocumento"];
			$datosProveedor["documento"] = $_POST["documento"];
			$datosProveedor["nombre"] = $_POST["nombre"];
			$datosProveedor["telefono"] = $_POST["telefono"];
			$datosProveedor["celular"] = $_POST["celular"];
			$datosProveedor["direccion"] = $_POST["direccion"];
			$datosProveedor["correo"] = $_POST["correo"];
			$datosProveedor["nombreContacto"] = $_POST["nombreContacto"];
			$datosProveedor["diaVisita"] = $_POST["diaVisita"];
			$datosProveedor["observaciones"] = $_POST["observaciones"];*/

			/*$datosMarca["idDetalleProveedorMarca"]='';
			$datosMarca["documentoProveedor"]=	$datosProveedor["documento"];
			$datosMarca["idMarca"] = $_POST["idMarca"];*/

			//Se mantienen los datos al hacer una validación//
			$datosCarga["idTipoDocumento"] = $this->input->post("tipoDocumento");
			$datosCarga["documento"] = $this->input->post("documento");
			$datosCarga["nombre"] = $this->input->post("nombre");
			$datosCarga["telefono"] = $this->input->post("telefono");
			$datosCarga["celular"] = $this->input->post("celular");
			$datosCarga["direccion"] = $this->input->post("direccion");
			$datosCarga["correo"] = $this->input->post("correo");
			$datosCarga["nombreContacto"] = $this->input->post("nombreContacto");
			$datosCarga["diaVisita"] = $this->input->post("diaVisita");
			$datosCarga["observaciones"] = $this->input->post("observaciones");
	
		
		/*	echo $datosMarca["idMarca"];*/
	
			
		/*	$datosMarca["idDetalleProveedorMarca"]='';
			$datosMarca["documentoProveedor"]= 	$datosProveedor["documento"];
			$datosMarca["idMarca"]= $this->input->post("idMarca");*/
		//	echo $datosMarca["documentoProveedor"];

			//$datosMarca["idMarca"] = $this->session->userdata($marca);
		
	
			




			/*************************************************************/
			// **			Validacion de los campos				  // **
			/**************************************************************/
		

				//$this->Model_proveedor->insertarProveedor($datosProveedor);
				
				//$this->Model_proveedor->insertarDetalleMarca($datosMarca);
			

				

				/*$datosMarca = array(
					'idDetalleProveedorMarca' => '',
					'documentoProveedor' => $datosProveedor["documento"],
					'idMarca' => $idMarca
				);*/
		
				

				/*$this->Model_proveedor->insertarDetalleMarca($datosMarca);
				$this->output->set_status_header(200);*/



			//	$this->session->set_flashdata('message', 'El proveedor ' .$datosCarga["nombre"].' se ha registrado correctamente.');

				//redirect("proveedor");
			
			
			
		//}



		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProveedor_view', $datosCarga);
		$this->load->view('layouts/footer');
	}

	public function registroProveedor()
	{
		$this->form_validation->set_rules('documento', 'documento', 'required|is_unique[proveedor.documento]');



		if ($this->form_validation->run()) {

		$datosRegistroCompra["idTipoDocumento"] =$_POST["tipoDocumento"];
		$datosRegistroCompra["documento"] =$_POST["documento"];
		$datosRegistroCompra["nombre"] =$_POST["nombre"];
		$datosRegistroCompra["telefono"] =$_POST["telefono"];
		$datosRegistroCompra["celular"] =$_POST["celular"];
		$datosRegistroCompra["direccion"] =$_POST["direccion"];
		$datosRegistroCompra["correo"] =$_POST["correo"];
		$datosRegistroCompra["nombreContacto"] =$_POST["nombreContacto"];
		$datosRegistroCompra["diaVisita"] =$_POST["diaVisita"];
		$datosRegistroCompra["observaciones"] =$_POST["observaciones"];

		$this->Model_proveedor->insertarProveedor($datosRegistroCompra);
				
		}

		$datosCarga["idTipoDocumento"] = $this->input->post("tipoDocumento");
			$datosCarga["documento"] = $this->input->post("documento");
			$datosCarga["nombre"] = $this->input->post("nombre");
			$datosCarga["telefono"] = $this->input->post("telefono");
			$datosCarga["celular"] = $this->input->post("celular");
			$datosCarga["direccion"] = $this->input->post("direccion");
			$datosCarga["correo"] = $this->input->post("correo");
			$datosCarga["nombreContacto"] = $this->input->post("nombreContacto");
			$datosCarga["diaVisita"] = $this->input->post("diaVisita");
			$datosCarga["observaciones"] = $this->input->post("observaciones");
	
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProveedor_view', $datosCarga);
		$this->load->view('layouts/footer');
		
	

		
			//$this->session->set_flashdata('message', 'El producto ' .$datosCarga["nombreProducto"].' se ha registrado correctamente.');
		//	redirect("compra");
	
	}
		
	
	public function detalleMarca()

	{	

		$datosMarca["idMarca"] = $_POST["idMarca"];
		$datosMarca["documentoProveedor"] = $_POST["documentoProveedor"];
	
		//$this->output->set_status_header(200);

		//$this->load->view('superadministrador/formularios/registroProveedor_view', $datosMarca);
	
		$this->Model_proveedor->insertarDetalleMarca($datosMarca);
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