<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
public function __construct()
{
	parent::__construct();
	$this->load->model('Model_login');
	$this->load->library('session');
	$this->load->library('form_validation');


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


		$this->form_validation->set_rules('username', 'nombre de usuario', 'required');
		$this->form_validation->set_rules('password', 'contraseña', 'required');

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
						'nombreUsuario'=>$res->nombreUsuario,
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
					

							$logueos=$this->Model_login->consultalogueos($data["idUsuario"]);

							$respuesta=$this->Model_login->traerPregunta($data["nombreUsuario"]);

							
							 $this->Model_login->setlogueos($data["idUsuario"],$logueos["logueos"]+1);

							 $logueos=$this->Model_login->consultalogueos($data["idUsuario"]);

							 
							 //Y RESPUESTA ESTA VACIA
							if( is_null($respuesta)) 
							{
							
								$data['informacion']=$this->Model_login->buscarPreguntasSeguridad();
								
								$this->load->view('establecerPregunta_view',$data);
					
							
							}

							else
							{
								
								if($logueos['logueos']==1)
								{
									$this->Model_login->setlogueos($data["idUsuario"],$logueos["logueos"]==0);
									
									$this->load->view('layouts/superadministrador/header');
									$this->load->view('layouts/superadministrador/aside');
									$this->load->view('superadministrador/general/vistaModal_view.php',$data);
									$this->load->view('layouts/footer');
									//redirect(base_url()."inicio/cambiocontrasena",$data);
								
								}
								else
								{
									redirect(base_url()."inicio",$data);
									
								}
								
							}

							//redirect(base_url()."inicio",$data);

						
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

	

	public function establecerpregunta()
	{
		$this->load->view('pregunta_view');
	}




	public function restablecer()
	{

		
			$this->form_validation->set_rules('usernamev', 'nombre de usuario', 'required');
			 $nombreUsuario = $this->input->post("usernamev");

		

			if ($this->form_validation->run())
			{
				$res = $this->Model_login->BuscarUsuario($nombreUsuario);
				if($res=='NoExisteUsuario')
				{
	
			   
				$this->session->set_flashdata('verificacionusuario','El usuario no se encuentra registrado en el sistema.');
			
				$this->load->view('rcontrasena1_view');
				$this->session->sess_destroy();
				}
	
				else
				{
					if($res=='NoExistePregunta')
					
					{
	
					$this->session->set_flashdata('verificacionusuario1','El usuario aún no ha establecido una pregunta de seguridad. <br> Por favor inicie sesión.');
					
					$this->load->view('rcontrasena1_view');
					$this->session->sess_destroy();
					}
					else
					{
						if($res=='ExistePregunta')
						{
					
						
							$resultado = $this->Model_login->traerPregunta($nombreUsuario);
				
							$this->load->view('rcontrasena2_view',$resultado);
							
						
						}
				
					}
				
				
				}
			}
			else
			{

				$this->load->view('rcontrasena1_view');
			}
		
			


		
	

		

		
	}



	public function verificarrespuesta()
	{
		
		 
		if ($this->input->server("REQUEST_METHOD") == "POST") {
	
			$respuestaSeguridad = $this->input->post("respuestaSeguridad");
			$nombreUsuario = $this->input->post("nombreUsuario");

			$resultado = $this->Model_login->traerPregunta($nombreUsuario);


			if($respuestaSeguridad==$resultado["respuesta"])
			{
				$this->load->view('rcontrasena3_view',$resultado);
				

			}
			else
			{

				$resultado = $this->Model_login->traerPregunta($nombreUsuario);
				$this->session->set_flashdata('errorrespuesta','La respuesta no es correcta.');
				$this->load->view('rcontrasena2_view',$resultado);
			    
	
			}
			

		}
		


		}

		public function restablecercontra()
		{

			$this->form_validation->set_rules('nuevacontrasena', 'nueva contraseña', 'required|min_length[8]');
			$this->form_validation->set_rules('confirmarcontrasenanueva', 'confirmar contraseña', 'required|matches[nuevacontrasena]');
			
		
				$idUsuario = $this->input->post("idUsuario");
				$contrasenaNueva = md5($this->input->post("nuevacontrasena"));
				$confirmarcontrasenanueva = $this->input->post("confirmarcontrasenanueva");
				$nombreUsuario = $this->input->post("nombreUsuario");

			if ($this->form_validation->run())
			{
				
				$this->Model_login->actualizarpassword($idUsuario,$contrasenaNueva);

				$this->session->set_flashdata('restablecercontrasenaok','Su contraseña se ha restablecido exitosamente.');
				
				$datosCarga["username"] = "";
				$datosCarga["contrasena"] = "";
				$this->load->view('login_view',$datosCarga);

			}

			else
			{
				
				$resultado = $this->Model_login->traerPregunta($nombreUsuario);
				$this->load->view('rcontrasena3_view',$resultado);
				
			}
			

		}


		public function preguntaSeguridad()
		{


			$data['idPreguntaSeguridad'] = "";
			$this->form_validation->set_rules('pregunta', 'pregunta de seguridad', 'required');
			$this->form_validation->set_rules('respuestaSeguridad', 'respuesta', 'required');

	
			$data['idUsuario']=$this->input->post("idUsuario"); 
			$data['nombreUsuario']=$this->input->post("nombreUsuario");
			$data['nombre']=$this->input->post("nombre");
			$data["pregunta"] = $this->input->post("pregunta");
			$data['informacion']=$this->Model_login->buscarPreguntasSeguridad();


			if ($this->form_validation->run())
			{

				
				$datos["idRespuesta"]  = '';
				$datos["idPreguntaSeguridad"]  = $this->input->post("pregunta");
				$datos["idUsuario"]  = $this->input->post("idUsuario"); 
				$datos["respuesta"]  = $this->input->post("respuestaSeguridad");
			
			
				$this->Model_login->insertarRespuesta($datos);

				$this->session->set_flashdata('msgestablecerpregunta','Su pregunta de seguridad ha sido establecida exitosamente.<br> Recuerde no olvidar nunca su respuesta.');
				$this->session->set_flashdata('authiniciosesion',$data["nombre"]);


				$logueos=$this->Model_login->consultalogueos($data["idUsuario"]);
				$this->Model_login->setlogueos($data["idUsuario"],$logueos["logueos"]==0);
				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/general/vistaModal_view.php',$data);
				$this->load->view('layouts/footer');
		
				//$this->load->view('superadministrador/general/vistaModal_view.php',$data);
				//redirect(base_url('inicio/cambiocontrasena'),$data);
			
			}

			else{

				$this->load->view('establecerPregunta_view', $data);
			}

			
		}



		public function cerrarsesion()
		{
			$this->session->sess_destroy();	
			redirect(base_url('login'));
		}

}