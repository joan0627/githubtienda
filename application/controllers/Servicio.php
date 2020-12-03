<?php

class Servicio extends CI_controller
{


	public function __construct()
	{

		/*********************/
		// *Aqui se cargan todas las librerias que vamos a utilizar // *
		/*********************/
		parent::__construct();
		$this->load->model('Model_servicio');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->library('session');

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
							
						
		}

	


		$this->form_validation->set_rules('nombre', 'nombre', 'required');
		$this->form_validation->set_rules('tipoServicio', 'tipo servicio', 'required');
		$this->form_validation->set_rules('descripcion', 'descripción', 'required');
		$this->form_validation->set_rules('precio', 'precio', 'required');

	}

	public function index()
	{
		
	

		$buscar = $this->input->get("buscar");

		if($buscar == 'Habilitado' || $buscar == 'habilitado' || $buscar == 'HABILITADO')
		{
			$buscar=1;
		}
		elseif($buscar == 'Deshabilitado' || $buscar == 'deshabilitado' || $buscar == 'DESHABILITADO')
		{
			$buscar=0;
		}


		  
	   
		   $datosServicio['resultado'] = $this->Model_servicio->BuscarDatos($buscar);

	
		   $this->load->view('layouts/superadministrador/header');
		   $this->load->view('layouts/superadministrador/aside');
		   $this->load->view('superadministrador/general/listadoServicios_view',  $datosServicio);
		   $this->load->view('layouts/footer'); 


	}

	public function registro()
	{
			/*Protección Módulo si el usuario es Empleado*/
			if($this->session->userdata("idRol") == 200)
			{
				redirect(base_url().'errors/error_404');
						
			}
			
			$this->form_validation->set_rules('codigo', 'código', 'required|is_unique[servicio.idServicio]|alpha_dash');

		    $datosCarga["idServicio"] = $datosCarga["nombreServicio"] = $datosCarga["idTipoServicio"] = $datosCarga["descripcion"] =
			$datosCarga["recomendacionesPrevias"] = $datosCarga["recomendacionesPosteriores"] = $datosCarga["precio"]= "";

		
			//Arreglo para recorrer y buscar los select "Tablas fuertes"
			$datosCarga['tipoServicios'] = $this->Model_servicio->buscarTipoServicio();

			//Datos carga en general
			$datosCarga["idServicio"] = $this->input->post("codigo");
			$datosCarga["nombreServicio"] = $this->input->post("nombre");
			$datosCarga["tiposervicio"] = $this->input->post("tipoServicio");
			$datosCarga["descripcion"] = $this->input->post("descripcion");
			$datosCarga["recomendacionesPrevias"] = $this->input->post("recomendacionesPrevias");
			$datosCarga["recomendacionesPosteriores"] = $this->input->post("recomendacionesPosteriores");
			$datosCarga["precio"] = $this->input->post("precio");
			
			
			

		//Validaciónn de los campos

			if ($this->form_validation->run()) {

				$datosServicio["idServicio"] = $this->input->post("codigo");
				$datosServicio["nombreServicio"] = $this->input->post("nombre");
				$datosServicio["idTipoServicio"] = $this->input->post("tipoServicio");
				$datosServicio["descripcion"] = $this->input->post("descripcion");
				$datosServicio["recomendacionesPrevias"] = $this->input->post("recomendacionesPrevias");
				$datosServicio["recomendacionesPosteriores"] = $this->input->post("recomendacionesPosteriores");
				$datosServicio["precio"] = $this->input->post("precio");
				$datosServicio["estado"] = true;
		
				$this->Model_servicio->insertarServicio($datosServicio);
				$this->session->set_flashdata('message', 'El servicio ' .$datosCarga["nombreServicio"].' se ha registrado exitosamente.');
				redirect("Servicio");

			}else{

				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/registroServicio_view', $datosCarga);
				$this->load->view('layouts/footer');

			}
	
	
	}

	public function detalle($idServicio = "")
	{
			/*Protección Módulo si el usuario es Empleado*/
			if($this->session->userdata("idRol") == 200)
			{
				redirect(base_url().'errors/error_404');
						
			}

		if (isset($idServicio)) {

			$resultado = $this->Model_servicio->buscarDatosServicio($idServicio);

			$data['clave']= $resultado;


			if (isset($resultado)) {

				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/verdetalleServicio_view', $data);
				$this->load->view('layouts/footer');
			}
		}
	}

	public function actualizar($idServicio = "")
	{
			/*Protección Módulo si el usuario es Empleado*/
			if($this->session->userdata("idRol") == 200)
			{
				redirect(base_url().'errors/error_404');
						
			}

		$data["tiposervicio"] = $this->input->post("tipoServicio");

		if($this->form_validation->run())
		{
				$datosServicio["idServicio"] = $this->input->post("codigo");
				$datosServicio["nombreServicio"] = $this->input->post("nombre");
				$datosServicio["idTipoServicio"] = $this->input->post("tipoServicio");
				$datosServicio["descripcion"] = $this->input->post("descripcion");
				$datosServicio["recomendacionesPrevias"] = $this->input->post("recomendacionesPrevias");
				$datosServicio["recomendacionesPosteriores"] = $this->input->post("recomendacionesPosteriores");
				$datosServicio["precio"] = $this->input->post("precio");


			$this->Model_servicio->actualizarServicio($idServicio, $datosServicio);

			$this->session->set_flashdata('actualizar', 'El servicio ' .$datosServicio["nombreServicio"]. ' se ha actualizado exitosamente.');
			
			redirect("servicio");

		}
		else
		{

			
			$data['servicios'] = $this->Model_servicio->buscarDatosServicio($idServicio);
			
			//Esta es la vista que carga los datos de los input

			$data['tipoServicios'] = $this->Model_servicio->buscarTipoServicio();


			 $this->load->view('layouts/superadministrador/header');
			 $this->load->view('layouts/superadministrador/aside');
			 $this->load->view('superadministrador/formularios/actualizarServicio_view',$data);
			 $this->load->view('layouts/footer');
		}


	}

	public function delete(){
		
	/*Protección Módulo si el usuario es Empleado*/
		if($this->session->userdata("idRol") == 200)
		{
			redirect(base_url().'errors/error_404');
						
		}

		$_idServicio= $this->input->post('idServicio',true);
		if(empty($_idServicio)){
			$this->output
			->set_status_header(400)
			->set_output(json_encode(array ('msg'=>'El código no puede ser vacío')));
		}
		else
		{
			$this->Model_servicio->borrar($_idServicio);
			$this->output
			->set_status_header(200);
			
		}
	}	


	public function estado_servicio(){

		$idServicio =$this->input->post("idServicio");
		$estadoS =$this->input->post("estado");

		$this->Model_servicio->ActualizaEstadoServicio( $idServicio, $estadoS);

	}

	


	
}


?>