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

		/*Protección URL*/
		if(!$this->session->userdata('login') )
		{
			redirect(base_url().'login');
			
		}

		/*Protección Módulo si el usuario es Empleado*/
		if($this->session->userdata("idRol") == 200)
		{
			redirect(base_url().'errors/error_404');
				
		}
	


		//Validaciones para los campos de la tabla Usuario
	//	$this->form_validation->set_rules('username', 'nombre de usuario', 'required|is_unique[usuario.nombreUsuario]');
		$this->form_validation->set_rules('nombre', 'nombre completo', 'required|myAlpha');
		$this->form_validation->set_rules('celular', 'celular', 'required');
	


		
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
				$buscar=100;
			}
		
		if($buscar == 'Administrador' || $buscar == 'administrador' || $buscar == 'ADMINISTRADOR')
		{
			$buscar=100;
		}
		elseif($buscar == 'Empleado' || $buscar == 'empleado' || $buscar == 'EMPLEADO')
			{
				$buscar=200;
			}

			

			
		$datosUsuario['resultado'] = $this->Model_usuario->BuscarDatos($buscar);

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoUsuarios_view', $datosUsuario);
		$this->load->view('layouts/footer');
	}




	/* Inicio de métodos del rol de Super Administrador */


	public function registro()
	{
		$this->form_validation->set_rules('username', 'nombre de usuario', 'required|is_unique[usuario.nombreUsuario]');
		$this->form_validation->set_rules('contrasena', 'contraseña', 'required|min_length[8]');
		$this->form_validation->set_rules('confirmarcontrasena', 'confirmar contraseña', 'required|min_length[8]|matches[contrasena]');
		$this->form_validation->set_rules('rol', 'rol', 'required');

		$datosCarga['idRoles'] = $this->Model_usuario->BuscarRoles();
		
		if ($this->form_validation->run()) {

			$datosCarga["nombre"]  = $datosCarga["celular"] =  $datosCarga["nombreUsuario"] =
			$datosCarga["contrasena"] = $datosCarga["idRol"] = "";

	
			
			$datosUsuario["nombre"] =ucwords(strtolower($this->input->post("nombre")));
			$datosUsuario["celular"] = $this->input->post("celular");
			$datosUsuario["nombreUsuario"] = strtolower($this->input->post("username"));
			$datosUsuario["contrasena"] = md5($this->input->post("contrasena"));
			$datosUsuario["idRol"] = $this->input->post("rol");
			$datosUsuario["estado"] = true;
			

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


		$comprobacion= $this->Model_usuario->BuscarUsuario($idUsuario);

		if($comprobacion)
		{

			if($this->form_validation->run())
			{
				$datosUsuario["nombre"] =ucwords(strtolower($this->input->post("nombre")));	
				$datosUsuario["celular"] = $this->input->post("celular");
				$NombreCompleto = $this->input->post("username");
				//$datosUsuario["contrasena"] = password_hash($this->input->post("contrasena"),PASSWORD_DEFAULT);
				$datosUsuario["idRol"] = $this->input->post("rol");
				
	
				$this->Model_usuario->actualizarUsuario( $idUsuario,$datosUsuario);
	
				$this->session->set_flashdata('actualizar', 'El usuario ' .$NombreCompleto.' se ha actualizado correctamente.');
	
				
				redirect("usuario");
			}
			else
			{
				
				if($idUsuario == 1)
				{
					
					$this->session->set_flashdata('deny', 'No tiene permisos para editar este usuario.');
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
			
	

		}
		else
		{

			$this->load->view('layouts/superadministrador/header');
			$this->load->view('layouts/superadministrador/aside');
			$this->load->view('errors//cli/pagina404_view');
			$this->load->view('layouts/footer');
		

		
		}


	}



	public function detalle($idUsuario = "")
	{

		if (isset($idUsuario)) {

			$resultado = $this->Model_usuario->buscarDatosUsuario($idUsuario);

			$data['clave']= $resultado;


			if (isset($resultado)) {

				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/verdetalleUsuario_view', $data);
				$this->load->view('layouts/footer');
			}
		}
	}


	

	public function estadoUsuario(){

		$idUsuario =$this->input->post("idUsuario");
		$estado =$this->input->post("estado");

		if($this->session->userdata("idUsuario")==$idUsuario or	 $idUsuario==1) 
		{
			$data['deny']=false;
			echo json_encode($data);

		}
		else
		{
			$data['deny']=true;
			echo json_encode($data);
			$this->Model_usuario->actualizarEstado( $idUsuario, $estado);
		}

		

	}
	/* Fin de métodos del rol de Super Administrador */


	/* Inicio de métodos del rol de  Administrador */


	/* Fin de métodos del rol de  Administrador */
}
