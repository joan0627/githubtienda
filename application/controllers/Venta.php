<?php

class Venta extends CI_controller
{


	public function __construct(){

		parent::__construct();
		$this->load->model('Model_producto');
		$this->load->model('Model_venta');
		$this->load->model('Model_usuario');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');

		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}


	}




	public function ventaproductos()
	{

		$buscar = $this->input->get("buscar");

        if ($buscar == 'Registrada' || $buscar == 'registrada' || $buscar == 'REGISTRADA') {
            $buscar = 1;
        } elseif ($buscar == 'Anulada' || $buscar == 'anulada' || $buscar == 'ANULADA') {
            $buscar = 0;
        }
		
		 
		$datosVenta['resultado'] = $this->Model_venta->BuscarDatosVenta($buscar);
		
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoVentas_view', $datosVenta);
		$this->load->view('layouts/footer');
		
	}

	public function ventaservicios()
	{

		$buscar = $this->input->get("buscar");

        if ($buscar == 'Registrada' || $buscar == 'registrada' || $buscar == 'REGISTRADA') {
            $buscar = 1;
        } elseif ($buscar == 'Anulada' || $buscar == 'anulada' || $buscar == 'ANULADA') {
            $buscar = 0;
        }
		
		 
		$datosVenta['resultado'] = $this->Model_venta->BuscarDatosVentaServicios($buscar);
		
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoVentasServicios_view', $datosVenta);
		$this->load->view('layouts/footer');
		
	}
	


	public function registrarventa(){



		$resultado = $this->Model_venta->obtenerIdVenta();
		$data['clave']= $resultado;

	
		$data['formaPago'] = $this->Model_venta->BuscarFormapago();
		
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroVenta_view',$data);
		$this->load->view('layouts/footer');

	}




	public function registro_venta()
	{

		$NumVenta=$this->input->post('NumVenta');
		$fecha=$this->input->post('fecha');
		$vendedor= $this->input->post('vendedor');
		$formaPago= $this->input->post('formaPago');
		$comprobante= $this->input->post('comprobante');
		$costoTotal= $this->input->post('costoTotal');
		$observaciones = $this->input->post('observaciones');
		$descuento = $this->input->post('descuento');
	

		$estado = true;

		$datosVenta = array(
			'idFactura' => $NumVenta,
			'fecha' => 	$fecha,
			'vendedor' => $vendedor,
			'formaPago' => $formaPago,
			'nComprobante' => $comprobante,
			'totalGlobal' => $costoTotal,
			'observaciones' => 	$observaciones,
			'descuentoTotal'=> $descuento,
			'estado' => $estado,
			
		);



		$this->Model_venta->insertarVenta($datosVenta);


	}



	public function registro_detalleventa()
	{


		//Guardar el detalle
		$NumVenta=$this->input->post('NumVenta');
		$codProducto=$this->input->post('codProducto');
		$cantidad= $this->input->post('cantidad');
		$costo= $this->input->post('costo');
		
		//$costoTotal= $this->input->post('costoTotal');


		$datosDetalleVenta = array(
			'idDetalleproductofactura' => '',
			'factura' => $NumVenta,
			'producto' => $codProducto,
			'cantidad' => $cantidad,
			'precioVenta' => $costo,
			
	
		);


	

		$this->Model_venta->insertarDetalleVenta($datosDetalleVenta);
	//	$this->output->set_status_header(200);
		

		//Se actualiza la existencia
		$existenciaActual=$this->Model_producto->consultaExistencia($codProducto);
		$this->Model_producto->actualizarExistencia($codProducto,$existenciaActual["existencia"]-$cantidad);


	}

	public function todosProductos()
	{
	

		$datosCarga["data"] = [];
		$datosCarga['data'] = $this->Model_producto->ProductoVenta();

		echo json_encode($datosCarga);
	
	
	}	


		
	public function anular_venta(){

			$estado = 0;
			$idFactura= $this->input->post('idFactura');

			$this->Model_venta->anularVenta($idFactura, $estado);

			// Anular la existencia 
		
			$data = $this->Model_venta->cantidad_codigo($idFactura);
	
			echo json_encode($data);
		
	

	}	


		public function anular_cantidad(){


			$idProducto= $this->input->post('idProducto');
			$cantidad= $this->input->post('cantidad');

			//Se actualiza la existencia
			$existenciaActual=$this->Model_producto->consultaExistencia($idProducto);
			$cantidad = $existenciaActual["existencia"]+$cantidad;
			
			
			$this->Model_venta->actualizarExistencia($idProducto, $cantidad);


			
		}



	function consulta_cantidad(){

		$codigoV = $this->input->post("codigoV");
		//$cantidadV = $this->input->post("cantidadV");
		
		$data = $this->Model_venta->cantida_producto($codigoV);

		echo json_encode($data);


	}

	/* INFORME DE VENTA DE LOS PRODUCTOS*/

	public function InformeVenta($idventa)
	{
	
		$consulta['encabezadoVenta']=$this->Model_venta->buscarDatosEncabezadoVenta($idventa);
        $consulta['detalleVenta']=$this->Model_venta->buscarVentaDetalle($idventa);
	
    
        $stylesheet = file_get_contents('assets/plugins/bootstrap/css/bootstrap.min.css');
        $stylesheet .= file_get_contents('assets/css/invoice.css');
    

		$mpdf = new \Mpdf\Mpdf();
		
		$mpdf->SetDisplayMode('fullpage');
		$html=$this->load->view('superadministrador/informes/venta_view',$consulta,TRUE);
		$mpdf->WriteHTML($stylesheet,1);
		
		$mpdf->WriteHTML($html,2);
		
		$mpdf->Output();

	}

	/*FUNCIONES DE VENTA DE SERVICIOS*/
	/* INFORME DE VENTA DE LOS SERVICIOS*/

	public function informeventaservicio($idventa)
	{
	
		$consulta['encabezadoVentaServicio']=$this->Model_venta->buscarDatosEncabezadoVentaServicio($idventa);
	
    
        $stylesheet = file_get_contents('assets/plugins/bootstrap/css/bootstrap.min.css');
        $stylesheet .= file_get_contents('assets/css/invoice.css');
    

		$mpdf = new \Mpdf\Mpdf();
		
		$mpdf->SetDisplayMode('fullpage');
		$html=$this->load->view('superadministrador/informes/ventaServicio_view',$consulta,TRUE);
		$mpdf->WriteHTML($stylesheet,1);
		
		$mpdf->WriteHTML($html,2);
		
		$mpdf->Output();

	}
	


	public function registrarventaservicio(){
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside'); 
		$this->load->view('superadministrador/formularios/ventaservicio_view');
		$this->load->view('layouts/footer');

	}


	


	public function anular_venta_servicio(){

		$estado = 0;
		$idFactura= $this->input->post('idFactura');

		$this->Model_venta->anularVenta_servicio($idFactura, $estado);

	}
	




}




?>