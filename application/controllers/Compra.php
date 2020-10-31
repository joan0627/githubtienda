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
		//$this->load->library('form_validation');
		$this->load->library('session');

				/*Protección URL*/
				if(!$this->session->userdata('login'))
				{
					redirect(base_url().'login');
					
				
				}
	

		/*$this->form_validation->set_rules('proveedor', 'proveedor', 'required');
		$this->form_validation->set_rules('facturaProveedor', 'factura N°', 'required');
		$this->form_validation->set_rules('fechafacturaProveedor', 'fecha factura', 'required');*/

	
	}


	public function index($page=1)
	{
		
		$page_size=2;
		$offset=0* $page_size;

		
		
		  $buscar = $this->input->get("buscar");
		
		 
			$datosCompra['resultado'] = $this->Model_compra->BuscarDatosCompra($buscar);
			
			//$datosCompra['datosUsuario'] = $this->Model_compra->BuscarUsuario();
		  //var_dump ($datosCompra['resultado'] );
	   
		   $this->load->view('layouts/superadministrador/header');
		   $this->load->view('layouts/superadministrador/aside');
		   $this->load->view('superadministrador/general/listadoCompras_view', $datosCompra);
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


			$datosCarga["idCompras"] = $datosCarga["documentoProveedor"] = $datosCarga["facturaProveedor"] = $datosCarga["fechaRegistroCompra"] = "";
			

			//Datos carga en general
		

				
			/*********************/
			// *			Validación de los campos					*// 
			/*********************/
	


				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/registroCompra_view',$datosCarga);
				$this->load->view('layouts/footer');
			
	
	}

	public function actualizarcomprasu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarServicio_view');
		$this->load->view('layouts/footer');
		
	}

	public function validation()
	{
		//$this->load->view('layouts/superadministrador/header');
		//$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/validationprueba');
		//*$this->load->view('layouts/footer');
		
	}

	public function compra(){
	
		
			$datosCompra["fechaRegistroCompra"] = $this->input->post("fechaCompra");
			$datosCompra["idCompras"] = $this->input->post("codigoCompra");
			$datosCompra["documentoProveedor"] = $this->input->post("proveedor");
			$datosCompra["idUsuario"] = $this->session->userdata("idUsuario");
			$datosCompra["facturaProveedor"] = $this->input->post("facturaProveedor");
			$datosCompra["observaciones"] = $this->input->post("observaciones");	
			$datosCompra["totalGlobal"]=$this->input->post("totalGlobal");
			$datosCompra["estado"] = true;
	
		
				$this->Model_compra->insertarCompra($datosCompra);

		
			//$this->session->set_flashdata('message', 'El producto ' .$datosCarga["nombreProducto"].' se ha registrado correctamente.');
		//	redirect("compra");
	

			
	
		
	}


	public function detalleCompra()
	{

	$datosCompra["idCompras"] = $this->input->post("codigoCompra");
	//Guardar el detalle
	$_idCompra=$datosCompra["idCompras"];
	$_codigo=$this->input->post('codigo');;
	$_cantidad= $this->input->post('cantidad');
	$_costo= $this->input->post('costo');
	$_iva= $this->input->post('iva');




	$datosPrueba = array(
		'idDetalleCompra' => '',
		 'idCompra' => 	$_idCompra,
		 'idProducto' => $_codigo,
		 'cantidad' => $_cantidad,
		 'costoProducto' => $_costo,
		 'iva' => $_iva
	);
	

		$this->output
		->set_status_header(400)
		->set_output(json_encode(array ('msg'=>'El documento no puede ser vacío')));
	

		echo json_encode($datosPrueba);

		$this->Model_compra->insertarDetalle($datosPrueba);
		$this->output->set_status_header(200);
		


	}


	
	public function anular(){

			$estado = 0;
			$idCompra= $this->input->post('idCompras');

			$this->Model_compra->actualizarEstado($idCompra, $estado);

		
	}	

	

}



?>
