<?php

class Errors extends CI_controller
{


	public function __construct(){

		parent::__construct();

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}


	}


    
     function error_404()
	{
        $this->load->view('layouts/superadministrador/header');
        $this->load->view('layouts/superadministrador/aside');
        $this->load->view('errors//cli/pagina404_view');
        $this->load->view('layouts/footer');

	}

	
}




?>
