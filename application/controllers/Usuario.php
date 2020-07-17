<?php

class Usuario extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_usuario');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');



		
		//Validaciones para los campos de la tabla Persona
		$this->form_validation->set_rules('documento', 'documento', 'required');
		$this->form_validation->set_rules('tipoDocumento', 'tipo documento', 'required');
		$this->form_validation->set_rules('nombre', 'nombre completo', 'required');
		$this->form_validation->set_rules('celular', 'celular', 'required');

		//Validaciones para los campos de la tabla Usuario
		$this->form_validation->set_rules('username', 'nombre de usuario', 'required');
		$this->form_validation->set_rules('contrasena', 'contraseña', 'required|min_length[8]');
		$this->form_validation->set_rules('rol', 'rol', 'required');

		

	
	}

	public function index()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/aside');
		$this->load->view('listausuarios_view');
		$this->load->view('layouts/footer');
		
	}



	/* Inicio de métodos del rol de Super Administrador */

	public function listausuariosu()
	{
		$datosPersona['resultado'] = $this->model_usuario->buscarTodoPersonaUsuario();

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadousuarios_view', $datosPersona);
		$this->load->view('layouts/footer');

	}
 

	public function crearusuariosu()
	{
	
		$datosCarga["documento"] = $datosCarga["tipoDocumento"] = $datosCarga["nombre"] = $datosCarga["telefono"] =
		$datosCarga["celular"] = $datosCarga["direccion"] = $datosCarga["correo"] = $datosCarga["username"] =
		$datosCarga["contrasena"] = $datosCarga["rol"] = "";

	
		
		//Campos del formulario
		if ($this->input->server("REQUEST_METHOD") == "POST") {

			/*Arreglos para guardar informacion en las dos tablas: Persona y Usuario
			Aqui se necesitan dos arreglos diferentes ya que los datos van 
			para dos tablas diferentes
			*/
			$datosPersona["documento"] = $this->input->post("documento");
			$datosPersona["tipoDocumento"] = $this->input->post("tipoDocumento");
			$datosPersona["nombre"] = $this->input->post("nombre");
			$datosPersona["telefono"] = $this->input->post("telefono");
			$datosPersona["celular"] = $this->input->post("celular");
			$datosPersona["direccion"] = $this->input->post("direccion");
			$datosPersona["correo"] = $this->input->post("correo");
			$datosPersona["tipoPersona"] = 1;

			$datosUsuario["personaDocumento"] = $datosPersona["documento"];
			$datosUsuario["username"] = $this->input->post("username");
			$datosUsuario["contrasena"] = $this->input->post("contrasena");
			$datosUsuario["rol"] = $this->input->post("rol");


			/*Arreglos para cargar la información a los campos 
			 Aqui no necesitamos dos arreglos diferentes con sólo un arreglo 
			 podemos cargar los datos a los campos
			*/

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



			if ($this->form_validation->run()) {
			
				
				$this->model_usuario->insertarPersona($datosPersona);
				$this->model_usuario->insertarUsuario($datosUsuario);
				redirect("Usuario/listausuariosu");
			}
			
	
			
		}

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroUsuario_view',$datosCarga);
		$this->load->view('layouts/footer');	
		
	}

	public function actualizarusuariosu ($documento = "" )
	{	
	
		if (isset($documento)) {
			
			$resultado = $this->model_usuario->buscarPersonaUsuario($documento);
		
			
			if (isset($resultado)) {

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarUsuario_view',array('clave'=> $resultado));
		$this->load->view('layouts/footer');

		//$this->model_usuario->actualizarPersona($idUsuario, $data);

			}
			else
			{
				$this->load->view('layouts/superadministrador/header');
			$this->load->view('layouts/aside');
			$this->load->view('errors/pagina404_view');
			$this->load->view('layouts/footer');
					
	    //Hacer esta validacion


			}


		}

		if ($this->input->server("REQUEST_METHOD") == "POST") {	


			$datosPersona["documento"] =  $this->input->post("documento");
			$datosPersona["tipoDocumento"] = $this->input->post("tipoDocumento");
			$datosPersona["nombre"] = $this->input->post("nombre");
			$datosPersona["telefono"] = $this->input->post("telefono");
			$datosPersona["celular"] = $this->input->post("celular");
			$datosPersona["direccion"] = $this->input->post("direccion");
			$datosPersona["correo"] = $this->input->post("correo");
		
			$datosUsuario["personaDocumento"] = $datosPersona["documento"];
			$datosUsuario["username"] = $this->input->post("username");
			$datosUsuario["rol"] = $this->input->post("rol");
			$datosUsuario["estado"] = $this->input->post("estado");
			
				if (isset($documento)) {
					$this->model_usuario->actualizarPersona($documento, $datosPersona);
					$this->model_usuario->actualizarUsuario($documento, $datosUsuario);
					redirect("usuario/listausuariosu");
				} 
		

	}



}


public function verdetalleusuariosu($documento = "" )
{	

	if (isset($documento)) {
		
		$resultado = $this->model_usuario->buscarPersonaUsuario($documento);
	
		
		if (isset($resultado)) {

	$this->load->view('layouts/superadministrador/header');
	$this->load->view('layouts/superadministrador/aside');
	$this->load->view('superadministrador/formularios/verdetalleUsuario_view',array('clave'=> $resultado));
	$this->load->view('layouts/footer');



		}
		else
		{
			$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/aside');
		$this->load->view('errors/pagina404_view');
		$this->load->view('layouts/footer');
				
	//Hacer esta validacion


		}


	}

	if ($this->input->server("REQUEST_METHOD") == "POST") {	


		$datosPersona["documento"] =  $this->input->post("documento");
		$datosPersona["tipoDocumento"] = $this->input->post("tipoDocumento");
		$datosPersona["nombre"] = $this->input->post("nombre");
		$datosPersona["telefono"] = $this->input->post("telefono");
		$datosPersona["celular"] = $this->input->post("celular");
		$datosPersona["direccion"] = $this->input->post("direccion");
		$datosPersona["correo"] = $this->input->post("correo");
	
		$datosUsuario["personaDocumento"] = $datosPersona["documento"];
		$datosUsuario["username"] = $this->input->post("username");
		$datosUsuario["contrasena"] = $this->input->post("contrasena");
		$datosUsuario["rol"] = $this->input->post("rol");
		$datosUsuario["estado"] = $this->input->post("estado");
		
			if (isset($documento)) {
				$this->model_usuario->actualizarPersona($documento, $datosPersona);
				$this->model_usuario->actualizarUsuario($documento, $datosUsuario);
			} 
	

}



}

public function borrar($documento = null)
	{
		$this->model_usuario->borrar($documento);
		redirect("usuario/listado");
	}

	
	public function perfilusuariosu ()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/perfil_view');
		$this->load->view('layouts/footer');
				
	}

	/* Fin de métodos del rol de Super Administrador */


	/* Inicio de métodos del rol de  Administrador */

	
	
	



	/* Fin de métodos del rol de  Administrador */

	
}
