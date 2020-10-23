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
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->library('session');


		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
						
		}
		
		//Validaciones para los campos de la tabla proveedor
		$this->form_validation->set_rules('tipoDocumento', 'tipo documento', 'required');
	
		$this->form_validation->set_rules('nombre', 'nombre completo', 'required');
		$this->form_validation->set_rules('celular', 'celular', 'required');
		$this->form_validation->set_rules('nombreContacto', 'nombre de contacto', 'required');
		$this->form_validation->set_rules('diaVisita', 'dia visita', 'required');
		$this->form_validation->set_rules('correo', 'correo', 'valid_email');
		$this->form_validation->set_rules('observaciones', 'observaciones', 'max_length[120]');
	}

	public function index($page=1)
	{
		
		$page_size=2;
		$offset=0* $page_size;


		  $buscar = $this->input->get("buscar");


		  //$datosProveedor['resultado'] = $this->Model_proveedor->BuscarTodosProveedor();
	   
		   $datosProveedor['resultado'] = $this->Model_proveedor->BuscarDatos($buscar);

		   //$paginacion = $this->Model_proveedor->paginacion($page_size,$offset);
		  // $datosProveedor['resultado']=  $paginacion;

	   
		   $this->load->view('layouts/superadministrador/header');
		   $this->load->view('layouts/superadministrador/aside');
		   $this->load->view('superadministrador/general/listadoProveedores_view', $datosProveedor);
		   $this->load->view('layouts/footer');
	   
	}

	

	public function registro()
	{

		$this->form_validation->set_rules('documento', 'documento', 'required|is_unique[proveedor.documento]');

		    $datosCarga["idTipoDocumento"] = $datosCarga["documento"] = $datosCarga["nombre"] = $datosCarga["telefono"] =
			$datosCarga["celular"] = $datosCarga["direccion"] = $datosCarga["correo"] = $datosCarga["nombreContacto"] =
			$datosCarga["diaVisita"] = $datosCarga["observaciones"] = "";

			$datosCarga['idTiposDocumentos'] = $this->Model_proveedor->BuscarTiposDocumentos();


		//Campos del formulario
		if ($this->input->server("REQUEST_METHOD") == "POST") {

			/*Arreglos para guardar informacion en las dos tablas: Persona y Proveedor
			Aqui se necesitan dos arreglos diferentes ya que los datos van 
			para dos tablas diferentes
			*/
			$datosProveedor["idTipoDocumento"] = $this->input->post("tipoDocumento");
			$datosProveedor["documento"] = $this->input->post("documento");
			$datosProveedor["nombre"] = $this->input->post("nombre");
			$datosProveedor["telefono"] = $this->input->post("telefono");
			$datosProveedor["celular"] = $this->input->post("celular");
			$datosProveedor["direccion"] = $this->input->post("direccion");
			$datosProveedor["correo"] = $this->input->post("correo");
			$datosProveedor["nombreContacto"] = $this->input->post("nombreContacto");
			$datosProveedor["diaVisita"] = $this->input->post("diaVisita");
			$datosProveedor["observaciones"] = $this->input->post("observaciones");


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

			


			/*************************************************************/
			// **			Validacion de los campos				  // **
			/**************************************************************/
			if ($this->form_validation->run()) {

				$this->Model_proveedor->insertarProveedor($datosProveedor);
				
				$this->session->set_flashdata('message', 'El proveedor ' .$datosCarga["nombre"].' se ha registrado correctamente.');

				redirect("proveedor");
			
			}
			
		}



		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProveedor_view', $datosCarga);
		$this->load->view('layouts/footer');
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
		
		/*if ($this->input->server("REQUEST_METHOD") == "POST") {
		
			//$datosProveedor['idTiposDocumentos'] = $this->Model_proveedor->BuscarTiposDocumentos();
			//Estos arreglos toman los valores de los input
			//$datosProveedor["idTipoDocumento"] = $this->input->post("tipoDocumento");

			$datosProveedor1 = $this->Model_proveedor->buscarDatosProveedor($documento);
			
			
			

			if ($this->form_validation->run()) {
				
			
				

			}

			else
			{
				

					 
				
			}
			



		}

		
		else{

			if (isset($documento)) {

				$resultado = $this->Model_proveedor->buscarDatosProveedor($documento);
	

		    // echo var_dump($resultado);
		
		
				if (isset($resultado)) {
	
				
					//$resultado['idTiposDocumentos'] = $this->Model_proveedor->BuscarTiposDocumentos();
						  //Esta es la vista que carga los datos de la base de datos
						  $this->load->view('layouts/superadministrador/header');
						  $this->load->view('layouts/superadministrador/aside');
						  $this->load->view('superadministrador/formularios/actualizarProveedor_view', array('clave' => $resultado));
						  $this->load->view('layouts/footer');
	   
			
					
	
					 
	
	
					
				
				}
	
				else {
					$this->load->view('layouts/superadministrador/header');
					$this->load->view('layouts/superadministrador/aside');
					$this->load->view('errors/pagina404_view');
					$this->load->view('layouts/footer');
	
			
				}
			
		}

		}*/

	


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

	/*
	public function eliminar($documento = null)
	{
		$this->Model_proveedor->borrar($documento);
		redirect("Proveedor/listaproveedoresu");
	}*/
}
