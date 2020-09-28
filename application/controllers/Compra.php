<?php

class Compra extends CI_controller
{


	public function __construct()
	{

		/*************************************************************/
		// **Aqui se cargan todas las librerias que vamos a utilizar // **
		/*************************************************************/
		parent::__construct();
		$this->load->model('Model_proveedor');
		$this->load->model('Model_producto');
		$this->load->model('Model_compra');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->form_validation->set_rules('proveedor', 'proveedor', 'required');
		$this->form_validation->set_rules('facturaProveedor', 'factura N°', 'required');
		$this->form_validation->set_rules('fechafacturaProveedor', 'fecha factura', 'required');

	
	}

	public function index()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoCompras_view');
		$this->load->view('layouts/footer');
		
	}


	public function buscarProducto(){
		$buscar = $this->input->get("buscar");

		$datosProducto['resultado'] = $this->Model_producto->BuscarDatos($buscar);
		   
		  $this->load->view('layouts/superadministrador/header');
		  $this->load->view('layouts/superadministrador/aside');
		  $this->load->view('superadministrador/formularios/registroCompra_view',$datosProducto);
		  $this->load->view('layouts/footer');
	}


	public function busqueda(){
		
	}

	public function registro()
	{

		
	

			$resultado = $this->Model_compra->obtenerId();
			$resultado1 = $this->Model_proveedor->BuscarTodosProveedor();

			//Carga de los productos en el MODAL de compras
			$buscar = $this->input->get("buscar");
			$resultado2 = $this->Model_producto->BuscarDatos($buscar);

			$datosCarga['clave']= $resultado;
			$datosCarga['proveedores']= $resultado1;
			$datosCarga['Productos']= $resultado2;

			$datosCarga['Proveedores'] = $this->Model_proveedor->BuscarTodosProveedor();
			$datosCarga['Productos'] = $this->Model_producto->BuscarDatos($buscar);


			$datosCarga["idCompras"] = $datosCarga["documentoProveedor"] = $datosCarga["facturaProveedor"] = 
			$datosCarga["fechaFacturaProveedor"] = $datosCarga["fechaRegistroCompra"] = "";
			

			//Datos carga en general
			$datosCarga["fechaRegistroCompra"] = $this->input->post("fechaCompra");
			$datosCarga["idCompras"] = $this->input->post("idCompra");
			$datosCarga["documentoProveedor"] = $this->input->post("proveedor");
			$datosCarga["facturaProveedor"] = $this->input->post("facturaProveedor");
			$datosCarga["fechaFacturaProveedor"] = $this->input->post("fechafacturaProveedor");


			//Guardar el detalle

			$data= $this->input->post();

			$codigo= $this->input->post('codigo',true);

		

			if(empty($codigo)){
				$this->output
				->set_status_header(400)
				->set_output(json_encode(array ('msg'=>'El codigo esta vacío')));
			}

			else
			{
			   echo("no esta vacio");
			}

			$datosCompra = array(
			
			);

			/*********************/
			// *			Validación de los campos					*// 
			/*********************/
	
			if ($this->form_validation->run()) {

				$datosCompra["fechaRegistroCompra"] = $this->input->post("fechaCompra");
				$datosCompra["idCompras"] = $this->input->post("idCompra");
				$datosCompra["documentoProveedor"] = $this->input->post("proveedor");
				$datosCompra["facturaProveedor"] = $this->input->post("facturaProveedor");
				$datosCompra["fechaFacturaProveedor"] = $this->input->post("fechafacturaProveedor");
				$datosCompra["estado"] = true;
	
				$this->Model_compra->insertarCompra($datosCompra);
				//$this->session->set_flashdata('message', 'El producto ' .$datosCarga["nombreProducto"].' se ha registrado correctamente.');
				redirect("compra");

			}
			else
			{


				$this->load->view('layouts/superadministrador/header');
				//$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/registroCompra_view',$datosCarga);
				$this->load->view('layouts/footer');

			}

	}


	public function actualizarcomprasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarServicio_view');
		$this->load->view('layouts/footer');
		
	}

	public function verDetallecomprasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verdetalleServicio_view');
		$this->load->view('layouts/footer');
		
	}
	

}















?>
