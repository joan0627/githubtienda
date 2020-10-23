<?php

class Cliente extends CI_controller
{

	public function __construct()
	{
		parent::__construct();

	

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}


	}

	public function index()
	{

		
	}



	public function listaclientesu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoClientes_view');
		$this->load->view('layouts/footer');
		

		
	}

	public function suma (){
	$num = 1;
	$num2 = 2;
	$resultado = $num + $num2;

	echo $resultado;

	}
	
	public function crearclientesu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroCliente_view');
		$this->load->view('layouts/footer');
		
	}

	public function actualizarclientesu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarCliente_view');
		$this->load->view('layouts/footer');
		
	}

	public function verdetalleclientesu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verdetalleCliente_view');
		$this->load->view('layouts/footer');
		
	}

	public function historialcliente()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/historialclientes_view');
		$this->load->view('layouts/footer');
		
	}









}















?>
