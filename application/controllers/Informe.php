<?php

class Informe extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_informe');
	

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}

	/*Protección Módulo si el usuario es Empleado*/
	if($this->session->userdata("idRol") == 200)
	{	
	redirect(base_url().'errors/error_404');
				
	}

	}
	
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

	/*FUNCIONES DE INFORMES*/

	
	public function informeCompra(){

		$ano = $this->input->post("ano");
		$res['enero']= $this->Model_informe->mesEnero($ano);
		$res['febrero']= $this->Model_informe->mesFebrero($ano);
		$res['marzo']= $this->Model_informe->mesMarzo($ano);
		$res['abril']= $this->Model_informe->mesAbril($ano);
		$res['mayo']= $this->Model_informe->mesMayo($ano);
		$res['junio']= $this->Model_informe->mesJunio($ano);
		$res['julio']= $this->Model_informe->mesJulio($ano);
		$res['agosto']= $this->Model_informe->mesAgosto($ano);
		$res['septiembre']= $this->Model_informe->mesSeptiembre($ano);
		$res['octubre']= $this->Model_informe->mesOctubre($ano);
		$res['noviembre']= $this->Model_informe->mesNoviembre($ano);
		$res['diciembre']= $this->Model_informe->mesDiciembre($ano);

		echo json_encode($res);
		
	}


	public function informeVenta(){

		$ano = $this->input->post("anoVenta");
		$res['eneroV']= $this->Model_informe->mesEneroV($ano);
		$res['febreroV']= $this->Model_informe->mesFebreroV($ano);
		$res['marzoV']= $this->Model_informe->mesMarzoV($ano);
		$res['abrilV']= $this->Model_informe->mesAbrilV($ano);
		$res['mayoV']= $this->Model_informe->mesMayoV($ano);
		$res['junioV']= $this->Model_informe->mesJunioV($ano);
		$res['julioV']= $this->Model_informe->mesJulioV($ano);
		$res['agostoV']= $this->Model_informe->mesAgostoV($ano);
		$res['septiembreV']= $this->Model_informe->mesSeptiembreV($ano);
		$res['octubreV']= $this->Model_informe->mesOctubreV($ano);
		$res['noviembreV']= $this->Model_informe->mesNoviembreV($ano);
		$res['diciembreV']= $this->Model_informe->mesDiciembreV($ano);

		echo json_encode($res);
		
	}


	
	public function informeVentaServicio(){

		$ano = $this->input->post("anoVentaS");
		$res['eneroVS']= $this->Model_informe->mesEneroVS($ano);
		$res['febreroVS']= $this->Model_informe->mesFebreroVS($ano);
		$res['marzoVS']= $this->Model_informe->mesMarzoVS($ano);
		$res['abrilVS']= $this->Model_informe->mesAbrilVS($ano);
		$res['mayoVS']= $this->Model_informe->mesMayoVS($ano);
		$res['junioVS']= $this->Model_informe->mesJunioVS($ano);
		$res['julioVS']= $this->Model_informe->mesJulioVS($ano);
		$res['agostoVS']= $this->Model_informe->mesAgostoVS($ano);
		$res['septiembreVS']= $this->Model_informe->mesSeptiembreVS($ano);
		$res['octubreVS']= $this->Model_informe->mesOctubreVS($ano);
		$res['noviembreVS']= $this->Model_informe->mesNoviembreVS($ano);
		$res['diciembreVS']= $this->Model_informe->mesDiciembreVS($ano);

		echo json_encode($res);
		
	}
	
	
}

?>

