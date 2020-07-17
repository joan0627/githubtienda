<?php

class Informe extends CI_controller
{

	public function index()
	{
		
		
	}

	public function generarinformesu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/informes_view.php');
		$this->load->view('layouts/footer');
		
	}
	
}

?>

