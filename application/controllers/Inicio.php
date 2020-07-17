<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


    
	public function index()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/aside');
		$this->load->view('errors/pagina404_view');
		$this->load->view('layouts/footer');
	}


	/* Inicio de métodos del rol de Super Administrador */
	public function principalsuper()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/inicio_view');
		$this->load->view('layouts/footer');
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
