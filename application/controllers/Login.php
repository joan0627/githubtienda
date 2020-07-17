<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
public function __construct()
{
	parent::__construct();
	$this->load->model('model_login');
}


	public function index()
	{
		if($this->session->userdata('login'))
		{
			redirect(base_url().'inicio/principalsuper');
			
			//redirect(base_url().'pruebas');

		}

		$this->load->view('login_view');


		
	}

	public function iniciarsesion()
	{
		$username= $this->input->post('username');
		$contrasena= $this->input->post('password');
		
		$res= $this->model_login->login($username,$contrasena);

		if(!$res)
		{
			redirect(base_url()."login");

			
		}
		
		else
		{
			$data = array (
			'id'=>$res->id,
			'login'=>TRUE);

			$this->session->set_userdata($data);

			
			redirect(base_url()."inicio/principalsuper",$data);
		}
	}

	public function cerrarsesion()
	{
		$this->session->sess_destroy();	
		redirect(base_url());
	}

	public function establecerpregunta()
	{
		$this->load->view('pregunta_view');
	}
}



