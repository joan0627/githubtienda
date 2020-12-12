<?php

class Notificaciones extends CI_controller
{


	public function __construct(){

        parent::__construct();
		$this->load->model('Model_notificaciones');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('session');
	

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}


	}


    
     function cargarcitasdia()
	{
		$fechaHoy = $this->input->post("fechaHoy");
	
		echo json_encode ($this->Model_notificaciones->buscarCitasHoy($fechaHoy));

	}

	
}




?>
