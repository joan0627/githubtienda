<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


		$this->load->model('Model_login');
		$this->load->library('session');
		$this->load->library('form_validation');
	

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}
	

		
		//Validaciones para los campos de la tabla Usuario
		$this->form_validation->set_rules('contrasenaactual', 'contraseña actual', 'required');
		$this->form_validation->set_rules('nuevacontrasena', 'nueva contraseña', 'required|min_length[8]');
		$this->form_validation->set_rules('confirmcontrasena', 'confirmar contraseña', 'required|matches[nuevacontrasena]');

	}


	
	


	public function index()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/inicio_view');
		$this->load->view('layouts/footer');
	}

	public function cambiocontrasena(){
	
		$datos["idUsuario"]=$this->input->post("idUsuario");
		$datos["nombre"]=$this->input->post("nombre");
		$datos["nombreUsuario"]=$this->input->post("nombreUsuario");
		$contrasena = md5($this->input->post("contrasenaactual"));
		$contrasenaNueva = md5($this->input->post("nuevacontrasena"));
		$confirmarcontrasena = $this->input->post("confirmcontrasena");

	
		if ($this->form_validation->run()) 
		{
			
			$resultado = $this->Model_login->login($datos["nombreUsuario"],$contrasena);

			if(!$resultado){

				$this->session->set_flashdata('contrasenaerror','La contraseña actual ingresada es errónea.');
				

				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/general/vistaModal_view.php',$datos);
				$this->load->view('layouts/footer');

				$this->session->set_flashdata('contrasenaerror',FALSE);
			
				
			}
			else
			{
			
					$res= $this->Model_login->actualizarpassword($datos["idUsuario"],$contrasenaNueva);
				

					$this->Model_login->setlogueos($datos["idUsuario"],$logueos["logueos"]=2);

					$this->session->set_flashdata('authiniciosesion',$datos["nombre"]);
					$this->session->set_flashdata('contrasena', 'Su contraseña ha sido actualizada con éxito.');
					redirect(base_url().'inicio');
					

				/*$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/general/inicio_view');
				$this->load->view('layouts/footer');*/
			}


		}

		else
		{
			
			$this->load->view('layouts/superadministrador/header');
			$this->load->view('layouts/superadministrador/aside');
			$this->load->view('superadministrador/general/vistaModal_view.php',$datos);
			$this->load->view('layouts/footer');
		}







		
	}
	
	/* Fin de métodos del rol de Super Administrador */


	/* Inicio de métodos del rol de Administrador */

	public function principaladmin()
	{
		$this->load->view('layouts/administrador/header');
		$this->load->view('layouts/administrador/aside');
		$this->load->view('administrador/general/inicio_view');
		$this->load->view('layouts/footer');
	}


	/* Fin de métodos del rol de Administrador */

}

