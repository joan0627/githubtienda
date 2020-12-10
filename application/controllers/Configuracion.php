<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_usuario');
		$this->load->model('Model_login');
		$this->load->model('Model_agenda');
		$this->load->model('Model_maestras');
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
	/*Protección Módulo si el usuario es Empleado*/
	if($this->session->userdata("idRol") == 200)
	{
		redirect(base_url().'errors/error_404');
					
	}
		
		$data = $this->Model_agenda->BuscarDisponibilidad();

		echo json_encode($data);
	
	}

	public function disponibilidad()
	{
		/*Protección Módulo si el usuario es Empleado*/
		if($this->session->userdata("idRol") == 200)
		{
			redirect(base_url().'errors/error_404');
						
		}
	
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



	public function informacion()
	{
		/*Protección Módulo si el usuario es Empleado*/
		if($this->session->userdata("idRol") == 200)
		{
			redirect(base_url().'errors/error_404');
						
		}


		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/datoseinfo_view');
		$this->load->view('layouts/footer');

		
	}

	/********************************************
	 *******Funciones de tipo documento**********
	 *******************************************/


	public function listadoTipoDocumento(){
   
		$data= $this->Model_maestras->BuscarTiposDocumentos();
	
		echo($data);  
	  

	}

	public  function registrarTdocumento(){

		$_valorDescripcion = $this->input->post("descripcion");

		$datosTipoDocumento = array(		
		
			'descripcion' => $_valorDescripcion
		); 

			$this->Model_maestras->insertarTipoDocumento($datosTipoDocumento);
		
	}

	public function actualizarTdocumento(){

		$_valorId= $this->input->post("id");
		$_valorDescripcion = $this->input->post("descripcion");


		$this->Model_maestras->actualizarTipoDocumento($_valorId, $_valorDescripcion);

	}

	public function delete(){

		$_id= $this->input->post('id',true);
	
		if(empty($_id)){
			$this->output
			->set_status_header(400)
			->set_output(json_encode(array ('msg'=>'El id del tipo de documento no puede ser vacío.')));
		}
		else
		{
			$this->Model_maestras->borrar($_id);
			$this->output->set_status_header(200);
			
		}
	}


	/********************************************
	 **********Funciones de Categoria************
	 *******************************************/


	public function listadoCategoria(){
   
		$data= $this->Model_maestras->BuscarCategorias();
	
		echo($data); 
	  

	}


	public  function registrarCategoria(){

		$valorDescripcion = $this->input->post("descripcionCategoria");


		$datosCategoria = array(		
		
			'descripcion' => $valorDescripcion
		); 

		$this->Model_maestras->insertarCategoria($datosCategoria);
		
	}

	public function actualizarCategoria(){

		$valorId= $this->input->post("id");
		$valorDescripcion = $this->input->post("descripcionCategoria");


		
		$this->Model_maestras->actualizarCategoria($valorId, $valorDescripcion);

	}

	public function deleteCategoria(){

		$_id= $this->input->post('id',true);
	
		if(empty($_id)){
			$this->output
			->set_status_header(400)
			->set_output(json_encode(array ('msg'=>'El id de la categoria no puede ser vacío.')));
		}
		else
		{
			$this->Model_maestras->borrarCategoria($_id);
			$this->output->set_status_header(200);
			
		}
	}


	

	/********************************************
	 **********Funciones de Marca****************
	 *******************************************/



	 public function listadoMarca(){
   
		$data= $this->Model_maestras->BuscarMarcas();
	
		echo($data); 
	  

	}


	public  function registrarMarca(){

		$valorDescripcion = $this->input->post("descripcionMarca");


		$datosMarca = array(		
		
			'descripcionMarca' => $valorDescripcion
		); 

		$this->Model_maestras->insertarMarca($datosMarca);
		
	}


	public function actualizarMarca(){

		$valorId= $this->input->post("id");
		$valorDescripcion = $this->input->post("descripcionMarca");


		$this->Model_maestras->actualizarMarca($valorId, $valorDescripcion);

	}

	public function deleteMarca(){

		$_id= $this->input->post('id',true);
	
		if(empty($_id)){
			$this->output
			->set_status_header(400)
			->set_output(json_encode(array ('msg'=>'El id de la marca no puede ser vacío.')));
		}
		else
		{
			$this->Model_maestras->borrarMarca($_id);
			$this->output->set_status_header(200);
			
		}
	}


	/********************************************
	 **********Funciones de Presentación*********
	 *******************************************/



	public function listadoPresentacion(){
   
		$data= $this->Model_maestras->BuscarPresentacion();
	
		echo($data); 
	  

	}


	public  function registrarPresentacion(){

		$valorDescripcion = $this->input->post("descripcionPresentacion");


		$datosPresentacion = array(		
		
			'descripcionPresentacion' => $valorDescripcion
		); 

		$this->Model_maestras->insertarPresentacion($datosPresentacion);
		
	}


	public function actualizarPresentacion(){

		$valorId= $this->input->post("id");
		$valorDescripcion = $this->input->post("descripcionPresentacion");


		$this->Model_maestras->actualizarPresentacion($valorId, $valorDescripcion);

	}

	public function deletePresentacion(){

		$_id= $this->input->post('id',true);
	
		if(empty($_id)){
			$this->output
			->set_status_header(400)
			->set_output(json_encode(array ('msg'=>'El id de la presentacion no puede ser vacío.')));
		}
		else
		{
			$this->Model_maestras->borrarPresentacion($_id);
			$this->output->set_status_header(200);
			
		}
	}



	
	/********************************************
	 **********Funciones de unidad de medida*****
	 *******************************************/



	public function listadoUnidadmedida(){
   
		$data= $this->Model_maestras->BuscarUmedida();
	
		echo($data); 
	  

	}


	public  function registrarUmedida(){

		$valorDescripcion = $this->input->post("descripcionUmedida");


		$datosUmedida = array(		
		
			'descripcionUnidadMedida' => $valorDescripcion
		); 

		$this->Model_maestras->insertarUmedida($datosUmedida);
		
	}


	public function actualizarUmedida(){

		$valorId= $this->input->post("id");
		$valorDescripcion = $this->input->post("descripcionUmedida");


		$this->Model_maestras->actualizarUmedida($valorId, $valorDescripcion);

	}

	public function deleteUmedida(){

		$_id= $this->input->post('id',true);
	
		if(empty($_id)){
			$this->output
			->set_status_header(400)
			->set_output(json_encode(array ('msg'=>'El id de la unidad de medida no puede ser vacío.')));
		}
		else
		{
			$this->Model_maestras->borrarUmedida($_id);
			$this->output->set_status_header(200);
			
		}
	}



	/********************************************
	 **********Funciones de unidad de raza*****
	 *******************************************/



	public function listadoRaza(){
   
		$data= $this->Model_maestras->BuscarRaza();
	
		echo($data); 
	  

	}


	public  function registrarRaza(){

		$valorDescripcion = $this->input->post("descripcionRaza");


		$datosRaza = array(		
		
			'descripcionRaza' => $valorDescripcion
		); 

		$this->Model_maestras->insertarRaza($datosRaza);
		
	}


	public function actualizarRaza(){

		$valorId= $this->input->post("id");
		$valorDescripcion = $this->input->post("descripcionRaza");


		$this->Model_maestras->actualizarRaza($valorId, $valorDescripcion);

	}

	public function deleteRaza(){

		$_id= $this->input->post('id',true);
	
		if(empty($_id)){
			$this->output
			->set_status_header(400)
			->set_output(json_encode(array ('msg'=>'El id de la raza no puede ser vacío.')));
		}
		else
		{
			$this->Model_maestras->borrarRaza($_id);
			$this->output->set_status_header(200);
			
		}
	}


	
	/********************************************
	 **********Funciones de especie**************
	 *******************************************/



	public function listadoEspecie(){
   
		$data= $this->Model_maestras->BuscarEspecie();
	
		echo($data); 
	  

	}


	public  function registrarEspecie(){

		$valorDescripcion = $this->input->post("descripcionEspecie");


		$datosEspecie = array(		
		
			'descripcionEspecie' => $valorDescripcion
		); 

		$this->Model_maestras->insertarEspecie($datosEspecie);
		
	}


	public function actualizarEspecie(){

		$valorId= $this->input->post("id");
		$valorDescripcion = $this->input->post("descripcionEspecie");


		$this->Model_maestras->actualizarEspecie($valorId, $valorDescripcion);

	}

	public function deleteEspecie(){

		$_id= $this->input->post('id',true);
	
		if(empty($_id)){
			$this->output
			->set_status_header(400)
			->set_output(json_encode(array ('msg'=>'El id de la especie no puede ser vacío.')));
		}
		else
		{
			$this->Model_maestras->borrarEspecie($_id);
			$this->output->set_status_header(200);
			
		}
	}




}