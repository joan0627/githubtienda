<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_usuario');
		$this->load->model('Model_login');
		$this->load->model('Model_agenda');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->library('session');
	

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}


		/*Reglas de validación*/

		$this->form_validation->set_rules('preguntaSeguridad', 'pregunta de seguridad', 'required');
		$this->form_validation->set_rules('respuesta', 'respuesta', 'required');

	}


	public function index()
	{
	   /*404 view*/
	}

	public function seguridad()
	{
		//$datosCarga["idPreguntaSeguridad"]  = $datosCarga["respuesta"] =  $datosCarga["respuestaconf"] = $datosCarga["contrasenaactual"]=
		//$datosCarga["nuevacontrasena"]=$datosCarga["confirmcontrasena"]="";
		
		
	/*	$datosCarga["idPreguntaSeguridad"] = $this->input->post("contrasenaactual");
		$datosCarga["nuevacontrasena"] = $this->input->post("nuevacontrasena");
		$datosCarga["confirmcontrasena"] = $this->input->post("confirmcontrasena");
		$datosCarga["respuesta"] = $this->input->post("respuesta");*/
/*
		if ($this->form_validation->run()) {
		

			$dataNueva["idPreguntaSeguridad"] = $this->input->post("preguntaSeguridad");
			$dataNueva["respuesta"] = $this->input->post("respuesta");
	


			$this->Model_login->actualizarPreguntaRespuesta($this->session->userdata("idUsuario"),$dataNueva);
			
			$this->session->set_flashdata('preguntaupdate','Su pregunta de seguridad ha sido actualizada exitosamente.');

			redirect(base_url().'inicio');
		}

		else
		{
*/
			//$datos=$this->Model_login->traerPregunta($this->session->userdata("nombreUsuario"));
			$datosCarga['preguntas']=$this->Model_login->buscarPreguntasSeguridad();
			$datosCarga['preguntaactual']=$this->Model_login->traerPregunta2($this->session->userdata("nombreUsuario"));

			

			$this->load->view('layouts/superadministrador/header');
			$this->load->view('layouts/superadministrador/aside');
			$this->load->view('superadministrador/formularios/seguridad_view',$datosCarga);
			$this->load->view('layouts/footer');
		//}

	

	
	}


	public function pregunta()
	{

		$contrasena = md5($this->input->post("contrasenaactualpre"));


		$resultado = $this->Model_login->login($this->session->userdata("nombreUsuario"),$contrasena);

		if(!$resultado){

			$return = false;
		}

		else
		{
			$return = true;

			$dataNueva["idPreguntaSeguridad"] = $this->input->post("preguntaSeguridad");
			$dataNueva["respuesta"] = $this->input->post("respuesta");
		
			$this->Model_login->actualizarPreguntaRespuesta($this->session->userdata("idUsuario"),$dataNueva);
		
			$this->session->set_flashdata('preguntaupdate','Su pregunta de seguridad ha sido actualizada exitosamente.');
	
		}

	
		die(json_encode(array('return' => $return)));
		
	}


	public function cambiarcontrasena()
	{

		$contrasena = md5($this->input->post("contrasenaactual"));


		$resultado = $this->Model_login->login($this->session->userdata("nombreUsuario"),$contrasena);

		if(!$resultado){

			//$this->session->set_flashdata('contrasenacambioerror','La contraseña actual ingresada es errónea.');
			
			$return = false;
			
			
			
		}

		else
		{

			$return = true;

			$contrasenaNueva= md5($this->input->post("nuevacontrasena"));
		
			$this->Model_login->actualizarpassword($this->session->userdata("idUsuario"),$contrasenaNueva);
			
			$this->session->set_flashdata('contrasenanew','Su contraseña ha sido actualizada exitosamente.');
		
		}
		//echo json_encode($return);
		die(json_encode(array('return' => $return)));
		

	}


	public function cargardisponibilidad()
	{
		$data = $this->Model_agenda->BuscarDisponibilidad();

		echo json_encode($data);
	
	}

	public function disponibilidad()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/disponibilidadAgenda_view.php');
		$this->load->view('layouts/footer');
		
	}


	
	public function registrardisponibilidad()
	{
		$datosDisponibilidad["idDisponibilidad"] ="";
		$datosDisponibilidad["title"] = $this->input->post("title");
		$datosDisponibilidad["start"] = $this->input->post("start");
		$datosDisponibilidad["end"] = $this->input->post("end");
		$datosDisponibilidad["rendering"] = $this->input->post("rendering");

	
		$res= $this->Model_agenda->insertardisponibilidad($datosDisponibilidad);

		echo json_encode($res);

		
	}


	public function home()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarHome_view.php');
		$this->load->view('layouts/footer');
	}
	public function informacion()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/datoseinfo_view');
		$this->load->view('layouts/footer');
		
	}
}
