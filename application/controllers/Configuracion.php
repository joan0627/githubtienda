<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {



	public function __construct()
	{
		/*************************************************************/
		// **Aqui se cargan todas las librerias que vamos a utilizar // **
		/*************************************************************/
		parent::__construct();
		$this->load->model('Model_maestras');
		$this->load->database();
		$this->load->helper("url");

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

	public function listadoTipoDocumento(){
   
		$data= $this->Model_maestras->BuscarTiposDocumentos();
	
		echo($data);  
	  

	}

	/*public function prueba(){
		$prueba = $this->input->post("prueba");

		$datosPrueba = array(
			
			'id' => "",
			'descripcion' => $prueba
			
		);

		$this->Model_maestras->insertarPrueba($datosPrueba);

	}*/
	

}