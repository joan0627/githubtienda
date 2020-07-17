<?php

class Proveedor extends CI_controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_proveedor');
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

	public function registrarproveedor()
	{
	
		$datosCarga["tipoDocumento"]= $datosCarga["documento"] = $datosCarga["nombre"] = $datosCarga["telefono"] =
		$datosCarga["celular"] = $datosCarga["direccion"] = $datosCarga["correo"] = $datosCarga["nombrecontacto"] =
		$datosCarga["diavisita"] = $datosCarga["observaciones"] = "";

	
		
		//Campos del formulario
		if ($this->input->server("REQUEST_METHOD") == "POST") {

			/*Arreglos para guardar informacion en las dos tablas: Persona y Proveedor
			Aqui se necesitan dos arreglos diferentes ya que los datos van 
			para dos tablas diferentes
			*/
			$datosPersona["tipoDocumento"] = $this->input->post("tipoDocumento");
			$datosPersona["documento"] = $this->input->post("documento");
			$datosPersona["nombre"] = $this->input->post("nombre");
			$datosPersona["telefono"] = $this->input->post("telefono");
			$datosPersona["celular"] = $this->input->post("celular");
			$datosPersona["direccion"] = $this->input->post("direccion");
			$datosPersona["correo"] = $this->input->post("correo");
			$datosPersona["tipoPersona"] = 3; // Se especifica el tipo de persona como 3 para Proveedor

			$datosProveedor["documento"] = $datosPersona["documento"];
			$datosProveedor["nombreContacto"] = $this->input->post("nombreContacto");
			$datosProveedor["diaVisita"] = $this->input->post("diaVisita");
			$datosProveedor["observaciones"] = $this->input->post("observaciones");


			/*Arreglos para cargar la información a los campos 
			 Aqui no necesitamos dos arreglos diferentes con sólo un arreglo 
			 podemos cargar los datos a los campos
		

			$datosCarga["documento"] = $this->input->post("documento");
			$datosCarga["tipoDocumento"] = $this->input->post("tipoDocumento");
			$datosCarga["nombre"] = $this->input->post("nombre");
			$datosCarga["telefono"] = $this->input->post("telefono");
			$datosCarga["celular"] = $this->input->post("celular");
			$datosCarga["direccion"] = $this->input->post("direccion");
			$datosCarga["correo"] = $this->input->post("correo");
		
			$datosCarga["username"] = $this->input->post("username");
			$datosCarga["contrasena"] = $this->input->post("contrasena");
			$datosCarga["rol"] = $this->input->post("rol");

	*/

			if ($this->form_validation->run()) {
			
				
				$this->model_proveedor->insertarPersona($datosPersona);
				$this->model_proveedor->insertarProveedor($datosProveedor);
				//redirect("proveedor/listaproveedoresu");
			}
			
	
			
		}

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProveedor_view',$datosCarga);
		$this->load->view('layouts/footer');	
		
	}


}

?>

