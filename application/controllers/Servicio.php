<?php

class Servicio extends CI_controller
{


	public function __construct()
	{

		/*************************************************************/
		// **Aqui se cargan todas las librerias que vamos a utilizar // **
		/*************************************************************/
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

		$this->form_validation->set_rules('codigo', 'codigo', 'required');
		/*

		$this->form_validation->set_rules('codigo', 'código', 'required|is_unique[producto.idProducto]|alpha_dash');
	
		$this->form_validation->set_rules('categoria', 'categoría', 'required');
		$this->form_validation->set_rules('marca', 'marca', 'required');
		$this->form_validation->set_rules('existencia', 'existencia', 'required');
		$this->form_validation->set_rules('unidadDeMedida', 'unidad de medida', 'required');
		$this->form_validation->set_rules('valorDeMedida', 'valor de medida', 'required');
		
	*/

	}

	public function index($page=1)
	{
		
		$page_size=2;
		$offset=0* $page_size;


		  $buscar = $this->input->get("buscar");
		  
	   
		   $datosServicio['resultado'] = $this->Model_servicio->BuscarDatos($buscar);

	
		   $this->load->view('layouts/superadministrador/header');
		   $this->load->view('layouts/superadministrador/aside');
		   $this->load->view('superadministrador/general/listadoServicios_view',  $datosServicio);
		   $this->load->view('layouts/footer'); 


	}

	public function registro()
	{
		
		    $datosCarga["idServicio"] = $datosCarga["nombreServicio"] = $datosCarga["idTipoServicio"] = $datosCarga["descripcion"] =
			$datosCarga["recomendacionesPrevias"] = $datosCarga["recomendacionesPosteriores"] = $datosCarga["precio"]= "";

		
			//Arreglo para recorrer y buscar los select "Tablas fuertes"
			$datosCarga['tipoServicios'] = $this->Model_servicio->buscarTipoServicio();

			//Datos carga en general
			$datosCarga["idServicio"] = $this->input->post("codigo");
			$datosCarga["nombreServicio"] = $this->input->post("nombre");
			$datosCarga["idTipoServicio"] = $this->input->post("tipoServicio");
			$datosCarga["descripcion"] = $this->input->post("descripcion");
			$datosCarga["recomendacionesPrevias"] = $this->input->post("recomendacionesPrevias");
			$datosCarga["recomendacionesPosteriores"] = $this->input->post("recomendacionesPosteriores");
			$datosCarga["precio"] = $this->input->post("precio");
			
			
			

			/*************************************************************/
			// **			Validaciónn de los campos					**// 
			/*************************************************************/

			if ($this->form_validation->run()) {

				$datosServicio["idServicio"] = $this->input->post("codigo");
				$datosServicio["nombreServicio"] = $this->input->post("nombre");
				$datosServicio["idTipoServicio"] = $this->input->post("tipoServicio");
				$datosServicio["descripcion"] = $this->input->post("descripcion");
				$datosServicio["recomendacionesPrevias"] = $this->input->post("recomendacionesPrevias");
				$datosServicio["recomendacionesPosteriores"] = $this->input->post("recomendacionesPosteriores");
				$datosServicio["precio"] = $this->input->post("precio");
				$datosServicio["estado"] = true;
				var_dump($datosServicio);

				$this->Model_servicio->insertarServicio($datosServicio);
				$this->session->set_flashdata('message', 'El servicio ' .$datosCarga["nombreServicio"].' se ha registrado correctamente.');
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

	public function delete(){

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

	
}


?>
