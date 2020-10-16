<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
public function __construct()
{
	parent::__construct();
	$this->load->model('Model_login');
	$this->load->library('session');
	$this->load->library('form_validation');


	$this->form_validation->set_rules('username', 'nombre de usuario', 'required');
	$this->form_validation->set_rules('password', 'contraseña', 'required');
}


	public function index()
	{
		/*if($this->session->userdata('login'))
		{
			redirect(base_url().'inicio');
			
			//redirect(base_url().'pruebas');

		}
		else
		{*/

		$datosCarga["username"] = "";
		$datosCarga["contrasena"] = "";
		
			$this->load->view('login_view',$datosCarga);


		//}

		

		
	}

	public function iniciarsesion()
	{

		$username= $this->input->post('username');
		$contrasena = md5($this->input->post("password"));

	
		
		if ($this->form_validation->run())
				{



					$res= $this->Model_login->login($username,$contrasena);
	

					if(!$res)
					{
						$this->session->set_flashdata('erroriniciosesion', 'El nombre de usuario o contraseña son incorrectos.');
			
						redirect(base_url()."login");
						
					}
					
					else
					{
			
					
					  
			
						$data = array (
						'idUsuario'=>$res->idUsuario,
						'nombre'=>$res->nombre,
						'estado'=>$res->estado,
						'idRol'=>$res->idRol,
						'login'=>TRUE);
			
						if($data["estado"]==2)
						{
							$this->session->set_flashdata('authiniciosesioninv','Usuario inactivo. Por favor póngase en contacto con el administrador.');
							redirect(base_url()."login");
						}
						else
						{
							
			
							
							$this->session->set_userdata($data);
							$this->session->set_flashdata('authiniciosesion',$data["nombre"]);
							
							
							
							redirect(base_url()."inicio",$data);
						}
					}
			
				}
				else
				{
				
					$datosCarga["username"] = $this->input->post("username");
					$datosCarga["contrasena"] = $this->input->post("password");

					$this->load->view('login_view',$datosCarga);
					//$this->load->view('superadministrador/formularios/validationprueba');

				}
				
				

		
		
	
			
		


		
	}

	public function cerrarsesion()
	{
		$this->session->sess_destroy();	
		redirect(base_url());
	}

	public function establecerpregunta()
	{
		$this->load->view('pregunta_view');
	}



	public function restablecer()
	{
		$this->load->view('rcontrasena1_view');

		$nombreUsuario = $this->input->post("usernamev");

		$res = $this->Model_login->BuscarUsuario($nombreUsuario);

		if(!$res)
		{

			$this->session->set_flashdata('verificacionusuario','Este nombre de usuario no está registrado en la base de datos.');
		}
		else
		{
			$this->load->view('rcontrasena2_view');
		}


	





	}


	


}