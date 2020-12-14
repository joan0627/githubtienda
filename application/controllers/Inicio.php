<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		
		$this->load->model('Model_login');
		$this->load->model('Model_inicio');
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
					$this->session->set_flashdata('contrasena', 'Su contraseña ha sido actualizada exitosamente.');
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





	/* FUNCIONES DE INICIO MINI INFORME DE USUARIO*/ 

	public function todos_usuarios (){

		$data = $this->Model_inicio->contarTodosUsuarios();

		echo json_encode($data);

	}

	public function usuarios_deshabilitados (){

		$data = $this->Model_inicio->contarUsuariosDeshabilitados();

		echo json_encode($data);

	}


		/* FUNCIONES DE INICIO MINI INFORME DE PRODUCTO*/ 

		public function todos_productos (){

			$data = $this->Model_inicio->contarTodosProductos();
	
			echo json_encode($data);
	
		}
	
		public function productos_hoy (){

			$fecha = $this->input->post("fechaActualF");
			$data = $this->Model_inicio->contarProductosHoy($fecha);
	
			echo json_encode($data);
	
		}


			/* FUNCIONES DE INICIO MINI INFORME DE CITAS*/ 

			public function todas_citas (){

				$data = $this->Model_inicio->contarTodascitas();
		
				echo json_encode($data);
		
			}
		
			public function citas_mes (){
	
				$fecha = $this->input->post("mesActualF");
				$ano = $this->input->post("AnoActualF");
				$data = $this->Model_inicio->contarCitasmes($fecha,$ano);
		
				echo json_encode($data);
		
			}


			/* FUNCIONES DE INICIO MINI INFORME DE VENTAS*/ 

			public function todas_ventas (){

				$data = $this->Model_inicio->contarTodasVentas();
				
			
				echo json_encode($data);
				
			}
				


			public function todas_ventas_servicios (){

				$data = $this->Model_inicio->contarTodasVentas_servicios();
				
				echo json_encode($data);
				
			}

			public function suma (){

				$res['ventas'] = $this->Model_inicio->sumarVentas();
				$res['ventaServicios'] = $this->Model_inicio->sumarVentas_servicios();

				echo json_encode($res);
				
			}
			


	

}

