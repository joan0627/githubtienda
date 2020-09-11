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

	public function registro()
	{
 
	
		$resultado = $this->Model_compra->obtenerId();
		$resultado1 = $this->Model_proveedor->BuscarTodosProveedor();

		//Carga de los productos en el MODAL de compras
		$buscar = $this->input->get("buscar");
		$resultado2 = $this->Model_producto->BuscarDatos($buscar);
        
		
			$data['clave']= $resultado;
			$data['proveedores']= $resultado1;
			$data['Productos']= $resultado2;

		    $datosCarga["idCompras"] = $datosCarga["documentoProveedor"] = $datosCarga["facturaProveedor"] = $datosCarga["fechaFacturaProveedor"] =
			$datosCarga["fechaRegistroCompra"] = $datosCarga["estado"] = "";
			$datosCarga['Proveedores'] = $this->Model_proveedor->BuscarTodosProveedor();
			$datosCarga['Productos'] = $this->Model_producto->BuscarDatos($buscar);

			


			   

		//Campos del formulario
		if ($this->input->server("REQUEST_METHOD") == "POST") {

			/*Arreglo para guardar informacion en la tabla: Compra */

			$datosCompra["idCompras"] = $this->input->post("idCompra");
			$datosCompra["fechaRegistroCompra"] = $this->input->post("fechaCompra");
			$datosCompra["documentoProveedor"] = $this->input->post("documento");
			$datosCompra["facturaProveedor"] = $this->input->post("facturaProveedor");
			$datosCompra["fechaFacturaProveedor"] = $this->input->post("fechaFacturaProveedor");
	        $datosCompra["estado"] = true;
		
			

			//Se mantienen los datos al hacer una validación//
			$datosCarga["idTipoDocumento"] = $this->input->post("tipoDocumento");
			$datosCarga["documento"] = $this->input->post("documento");
			$datosCarga["nombre"] = $this->input->post("nombre");
			$datosCarga["telefono"] = $this->input->post("telefono");
			$datosCarga["celular"] = $this->input->post("celular");
			$datosCarga["direccion"] = $this->input->post("direccion");
			$datosCarga["correo"] = $this->input->post("correo");
			$datosCarga["nombreContacto"] = $this->input->post("nombreContacto");
			$datosCarga["diaVisita"] = $this->input->post("diaVisita");
			$datosCarga["observaciones"] = $this->input->post("observaciones");

			
			/*************************************************************/
			// **			Validacion de los campos				  // **
			/**************************************************************/
			if ($this->form_validation->run()) {

				//$this->Model_proveedor->insertarProveedor($datosProveedor);
				
				$this->session->set_flashdata('message', 'El proveedor ' .$datosCarga["nombre"].' se ha registrado correctamente.');

				redirect("compra");
			
			}
			
		}



		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroCompra_view',$data);
		$this->load->view('layouts/footer');
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
