<?php

class Usuario extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_usuario');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->library('session');


		//Validaciones para los campos de la tabla Persona
		$this->form_validation->set_rules('nombre', 'nombre completo', 'required');
		$this->form_validation->set_rules('celular', 'celular', 'required');

		//Validaciones para los campos de la tabla Usuario
		$this->form_validation->set_rules('username', 'nombre de usuario', 'required|is_unique[usuario.nombreUsuario]');
		$this->form_validation->set_rules('contrasena', 'contraseña', 'required|min_length[8]');
		$this->form_validation->set_rules('confirmarcontrasena', 'confirmar contraseña', 'required|min_length[8]');
		$this->form_validation->set_rules('rol', 'rol', 'required');
	}

	public function index()
	{

		$buscar = $this->input->get("buscar");

		$datosUsuario['resultado'] = $this->Model_usuario->BuscarDatos($buscar);

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoUsuarios_view', $datosUsuario);
		$this->load->view('layouts/footer');
	}



	/* Inicio de métodos del rol de Super Administrador */


	public function registro()
	{
	

		$datosCarga['idRoles'] = $this->Model_usuario->BuscarRoles();
		
		if ($this->form_validation->run()) {

			$datosCarga["nombre"]  = $datosCarga["celular"] =  $datosCarga["nombreUsuario"] =
			$datosCarga["contrasena"] = $datosCarga["idRol"] = "";

	
			
			$datosUsuario["nombre"] = $this->input->post("nombre");
			$datosUsuario["celular"] = $this->input->post("celular");
			$datosUsuario["nombreUsuario"] = $this->input->post("username");
			$datosUsuario["contrasena"] = password_hash($this->input->post("contrasena"),PASSWORD_DEFAULT);
			
			$datosUsuario["idRol"] = $this->input->post("rol");

			$this->Model_usuario->insertarUsuario($datosUsuario);

			$this->session->set_flashdata('message', 'El usuario ' .$datosUsuario["nombreUsuario"].' se ha registrado correctamente.');

			redirect("usuario");
		}
		else
		{


			$datosCarga["nombre"] = $this->input->post("nombre");
			$datosCarga["celular"] = $this->input->post("celular");
			$datosCarga["nombreUsuario"] = $this->input->post("username");
			$datosCarga["contrasena"] = $this->input->post("contrasena");
			$datosCarga["idRol"] = $this->input->post("rol");


			$this->load->view('layouts/superadministrador/header');
			$this->load->view('layouts/superadministrador/aside');
			$this->load->view('superadministrador/formularios/registroUsuario_view', $datosCarga);
			$this->load->view('layouts/footer');

		}






	}


	public function actualizar($idUsuario = "")
	{
		if($this->form_validation->run())
		{
			$datosUsuario["nombre"] = $this->input->post("nombre");
			$datosUsuario["celular"] = $this->input->post("celular");
			$datosUsuario["nombreUsuario"] = $this->input->post("username");
			$datosUsuario["contrasena"] = password_hash($this->input->post("contrasena"),PASSWORD_DEFAULT);

			$this->Model_usuario->actualizarUsuario($idUsuario, $datosUsuario);

			$this->session->set_flashdata('actualizar', 'El usuario ' .$datosUsuario["nombreUsuario"].' se ha actualizado correctamente.');

			redirect("usuario");
		}
		else
		{
			$datosUsuario1 = $this->Model_usuario->buscarDatosUsuario($idUsuario);
			 //Esta es la vista que carga los datos de los input
			 $data['clave']= $datosUsuario1;

			 $this->load->view('layouts/superadministrador/header');
			 $this->load->view('layouts/superadministrador/aside');
			 $this->load->view('superadministrador/formularios/actualizarUsuario_view',$data);
			 $this->load->view('layouts/footer');
		}
		

	}


	


	public function verdetalleusuariosu($documento = "")
	{

		if (isset($documento)) {

			$resultado = $this->model_usuario->buscarPersonaUsuario($documento);


			if (isset($resultado)) {

				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/verdetalleUsuario_view', array('clave' => $resultado));
				$this->load->view('layouts/footer');
			} else {
				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/aside');
				$this->load->view('errors/pagina404_view');
				$this->load->view('layouts/footer');

				//Hacer esta validacion


			}
		}

		if ($this->input->server("REQUEST_METHOD") == "POST") {



			$datosPersona["nombre"] = $this->input->post("nombre");
			$datosPersona["celular"] = $this->input->post("celular");


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


	public function perfilusuariosu()
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
