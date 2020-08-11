<?php

class Proveedor extends CI_controller
{


	public function __construct()
	{

		/*************************************************************/
		// **Aqui se cargan todas las librerias que vamos a utilizar // **
		/*************************************************************/
		parent::__construct();
		$this->load->model('model_proveedor');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');

		
		//Validaciones para los campos de la tabla proveedor
		$this->form_validation->set_rules('tipoDocumento', 'tipo documento', 'required');
		$this->form_validation->set_rules('documento', 'documento', 'required|is_unique[proveedor.documento]');
		$this->form_validation->set_rules('nombre', 'nombre completo', 'required');
		$this->form_validation->set_rules('celular', 'celular', 'required');
		$this->form_validation->set_rules('nombreContacto', 'nombre de contacto', 'required');
		$this->form_validation->set_rules('diaVisita', 'dia visita', 'required');
		$this->form_validation->set_rules('correo', 'correo', 'valid_email');
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
		$datosProveedor['resultado'] = $this->model_proveedor->BuscarTodosProveedor();

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoProveedores_view', $datosProveedor);
		$this->load->view('layouts/footer');
	}

	public function registrar()
	{

		$datosCarga["idTipoDocumento"] = $datosCarga["documento"] = $datosCarga["nombre"] = $datosCarga["telefono"] =
			$datosCarga["celular"] = $datosCarga["direccion"] = $datosCarga["correo"] = $datosCarga["nombreContacto"] =
			$datosCarga["diaVisita"] = $datosCarga["observaciones"] = "";



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
			// **			Validacion de los campos					 // **
			/*************************************************************/
			if ($this->form_validation->run()) {	
				$this->model_proveedor->insertarProveedor($datosProveedor);
				redirect("Proveedor/listaproveedoresu");
			}
		}

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProveedor_view', $datosCarga);
		$this->load->view('layouts/footer');
	}

	public function actualizar($documento = "")
	
	{
		
		
		echo "Primera fase";
	
		if (isset($documento)) {

			$resultado = $this->model_proveedor->buscarPersonaProveedor($documento);

			echo "Segunda fase";
	
			if (isset($resultado)) {

				echo "Tercera fase";


				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/actualizarProveedor_view', array('clave' => $resultado));
				$this->load->view('layouts/footer');

				//$this->model_usuario->actualizarPersona($idUsuario, $data);
			
			} 
			else {
				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('errors/pagina404_view');
				$this->load->view('layouts/footer');

		
			}




		

		if ($this->input->server("REQUEST_METHOD") == "POST") {
			echo "Cuarta fase";
 
			//Estos arreglos toman los valores de los input
			$datosPersona["nombre"] = $this->input->post("nombre");
			$datosPersona["telefono"] = $this->input->post("telefono");
			$datosPersona["celular"] = $this->input->post("celular");
			$datosPersona["direccion"] = $this->input->post("direccion");
			$datosPersona["correo"] = $this->input->post("correo");

			$datosProveedor["nombreContacto"] = $this->input->post("nombreContacto");
			$datosProveedor["diaVisita"] = $this->input->post("diaVisita");
			$datosProveedor["observaciones"] = $this->input->post("observaciones");

			$datosCarga["nombre"] = $this->input->post("nombre");
			$datosCarga["telefono"] = $this->input->post("telefono");
			$datosCarga["celular"] = $this->input->post("celular");
			$datosCarga["direccion"] = $this->input->post("direccion");
			$datosCarga["correo"] = $this->input->post("correo");
	        $datosCarga["nombreContacto"] = $this->input->post("nombreContacto");
			$datosCarga["diaVisita"] = $this->input->post("diaVisita");
			$datosCarga["observaciones"] = $this->input->post("observaciones");

			echo var_dump($datosCarga);


			if ($this->form_validation->run()) {
				
		


					
					$this->model_proveedor->actualizarProveedor($documento, $datosProveedor);
					redirect("Proveedor/listaproveedoresu");
			

			}
			else 
			{
				

			}

		
		
		}

		
	}

		echo "Validaciones malas";

	
		
	

	}

	public function detalle($documento = "")
	{

		if (isset($documento)) {

			$resultado = $this->model_proveedor->buscarPersonaProveedor($documento);


			if (isset($resultado)) {

				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/verdetalleProveedor_view', array('clave' => $resultado));
				$this->load->view('layouts/footer');
			}
		}
	}
}
