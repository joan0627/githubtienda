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
		$this->load->library('session');
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
		$resultado = $this->Model_maestras->obtenerIdTipoDocumento();
		$datosCarga['clave']= $resultado;

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/datoseinfo_view', $datosCarga);
		$this->load->view('layouts/footer');

	}

	public function listadoTipoDocumento(){
   
		$data= $this->Model_maestras->BuscarTiposDocumentos();
	
		echo($data);  
	  

	}

	public  function registro_editarTd(){

		$ValorId= $this->input->post("idTipoDocumento");
		$valorDescripcion = $this->input->post("descripcion");
		

		if ($valorDescripcion=="") {
	
			$datosTipoDocumento = array(
				
				'idTipoDocumento' => $ValorId,
				'descripcion' => $valorDescripcion
			); 
			$this->Model_maestras->insertarTipoDocumento($datosTipoDocumento);
		}
		
		else{

			echo "la descripcion es: ". $valorDescripcion;
			echo "El id es: ". $ValorId;

			$datosTipoDocumento = array(
				
				'descripcion' => $valorDescripcion,
				
			);
		
			$this->Model_maestras->actualizarTipoDocumento($ValorId, $datosTipoDocumento);
		}
	
		
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



	/*public function prueba(){
		$prueba = $this->input->post("prueba");

		$datosPrueba = array(
			
			'id' => "",
			'descripcion' => $prueba
			
		);

		$this->Model_maestras->insertarPrueba($datosPrueba);

	}*/
	

}