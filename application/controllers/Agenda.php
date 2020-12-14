<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_agenda');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->library('session');
	


		/*Protección URL*/
		if(!$this->session->userdata('login'))
		{
			redirect(base_url().'login');
			
		}


	}




	public function index()
	{
		$datos['clientes'] = $this->Model_agenda->buscarClientes();
		$datos['tiposservicios'] = $this->Model_agenda->buscartiposervicios();
		$datos['estados']= $this->Model_agenda->buscarestados();
		$datos['formaPago']= $this->Model_agenda->buscarformapago();
		$datos['productos']= $this->Model_agenda->cargarproductos();
		$datos['unidades']= $this->Model_agenda->cargarunidadmedida();

        $this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/calendario_view.php',$datos);
		$this->load->view('layouts/footer');
		
	}


	public function servicios()
	{

		if($this->input->post("idts"))
		{
			$idts = $this->input->post("idts");
			echo  $this->Model_agenda->buscarserviciosportipo($idts);
		
		}

	}

	public function mascotas()
	{

		if($this->input->post("documento"))
		{
			$documento = $this->input->post("documento");
			echo (  $this->Model_agenda->buscarmascotas($documento));
		
		}

	}


	public function cargarestado()
	{

		$idCita = $this->input->post("cita");
	
		$res["estado"]= $this->Model_agenda->cargarEstado($idCita);
		
		echo json_encode ($res);


	}
	

	public function caracteristicasmascota()
	{

		if($this->input->post("idmascota"))
		{
			$idmascota = $this->input->post("idmascota");
			echo json_encode($this->Model_agenda->buscarcaracteristicas($idmascota));
		
		}

	}


	public function cargarcitas()
	{
		$data = $this->Model_agenda->buscarCitas();

		echo json_encode($data);
	
	}


	public function verificardisponibilidad()
	{
		
		$start = $this->input->post("start");
		$end = $this->input->post("end");
		$fecha = $this->input->post("fecha");
		
		
		echo json_encode($this->Model_agenda->verificardisponibilidad($start,$end,$fecha));

	}


	public function verificarcita()
	{
		$id = $this->input->post("id");
		$start = $this->input->post("start");
		$end = $this->input->post("end");
		$fecha= $this->input->post("fecha");
		$idservicio=$this->input->post("idservicio");
		$estado = $this->input->post("estado");
		echo json_encode ($this->Model_agenda->verificar($id,$start, $end,$idservicio,$estado));

	}


	
	public function registrarcita()
	{
		$datosCita["id"] ="";
		$datosCita["idservicio"] = $this->input->post("idservicio");
		$datosCita["title"] = $this->input->post("title");
		$datosCita["mascota"] = $this->input->post("mascota");
		$datosCita["descripcion"] = $this->input->post("descripcion");
		$datosCita["color"] = $this->input->post("color");
		$datosCita["textColor"] = $this->input->post("textColor");
		$datosCita["start"] = $this->input->post("start");
		$datosCita["end"] = $this->input->post("end");
		$datosCita["estado"] = 1; //Cita en estado : "Programada=1" la primera vez que se registra

		/**$datosCita["start"] = date("YYYY-mm-dd", strtotime($this->input->post("start")));
		$datosCita["end"] = date("YYYY-mm-dd", strtotime($this->input->post("end"))); */
	
	

		$res= $this->Model_agenda->insertarcita($datosCita);

		print_r($res);
		echo json_encode($res);

		//var_dump($datosCita);

		/*$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroCitas_view');
		$this->load->view('layouts/footer');*/

		
	}


	public function llenarservicio()
	{
		$id = $this->input->post("id");
	
		$res["servicios"]= $this->Model_agenda->buscarservicios();
		$res["servicio"]= $this->Model_agenda->llenarservicio($id);
		echo json_encode ($res);

	}


	public function llenarmascota()
	{
		$mascota = $this->input->post("mascota");
		$documento = $this->input->post("documento");
	
		$res["mascotas"]= $this->Model_agenda->llenarmascotas($documento);
		$res["mascota"]= $this->Model_agenda->cargarmascota($mascota);
		echo json_encode ($res);

	}

	public function llenarmascotas()
	{
	
		$documento = $this->input->post("documento");
	
		$res["mascotas"]= $this->Model_agenda->llenarmascotas($documento);
		
		echo json_encode ($res);

	}


	public function eliminarcita()

	{
			$id = $this->input->post("id");

			$res= $this->Model_agenda->eliminarcita($id);


			echo json_encode($res);


	}

	public function editarcita()

	{
		$id =$this->input->post("id");
		$datosCita["idservicio"] = $this->input->post("idservicio");
		$datosCita["title"] = $this->input->post("title");
		$datosCita["mascota"] = $this->input->post("mascota");
		$datosCita["descripcion"] = $this->input->post("descripcion");
		$datosCita["color"] = $this->input->post("color");
		$datosCita["textColor"] = $this->input->post("textColor");
		$datosCita["start"] = $this->input->post("start");
		$datosCita["end"] = $this->input->post("end");
		$datosCita["estado"] = $this->input->post("estado");

		$res= $this->Model_agenda->actualizarcita($id,$datosCita);


		echo json_encode($res);


	}

	

	public function cargarprecio()
	{
	
		$servicio = $this->input->post("idservicio");
	
		$res= $this->Model_agenda->buscarprecio($servicio);
		
		echo json_encode ($res);

	}





	public function registrarventa()
	{
		$datosVenta["idFactura"]= "";
		$datosVenta["fecha"]= $this->input->post("datos[fechaVenta]");
		$datosVenta["vendedor"]= $this->input->post("datos[vendedorCita]");
		$datosVenta["idServicio"]= $this->input->post("datos[idServicio]");
		$datosVenta["descuento"]= $this->input->post("datos[descuento]");
		$datosVenta["totalGlobal"]= $this->input->post("datos[total]");
		$datosVenta["formaPago"]= $this->input->post("datos[formapago]");
		$datosVenta["nComprobante"]= $this->input->post("datos[comprobante]");
		$datosVenta["observaciones"]= $this->input->post("datos[observaciones]");
		$datosVenta["idcliente"]= $this->input->post("datos[cliente]");

		
		//$descuento = $this->input->post("descuento");
	
		$res= $this->Model_agenda->registrarventa($datosVenta);
		
		//ENviar de nuevo para comprobar 
		echo json_encode ($res);

	}

	public function registrarhistorial()
	{
		$datosHistorial["idDetalleHistorialMascota"]= "";
		$datosHistorial["idservicio"]= $this->input->post("datos[serviciocita]");
		$datosHistorial["idMascota"]= $this->input->post("datos[mascotacliente]");
		$datosHistorial["idProducto"]= $this->input->post("datos[producto]");
		$datosHistorial["dosis"]= $this->input->post("datos[dosis]");
		$datosHistorial["idUnidadmedida"]= $this->input->post("datos[unidadmedida]");
		$datosHistorial["fechaAplicacion"]= $this->input->post("datos[fechaAplicacion]");
		$datosHistorial["fechaProxima"]= $this->input->post("datos[fechaProxima]");
		$datosHistorial["observaciones"]= $this->input->post("datos[observaciones]");

		
		//$descuento = $this->input->post("descuento");
	
		$res= $this->Model_agenda->registrarhistorial($datosHistorial);
		
		//ENviar de nuevo para comprobar 
		echo json_encode ($res);
		
	}

	

	

	public function historialcitas()
	{

		$buscar = $this->input->get("buscar");

        /*if ($buscar == 'Registrada' || $buscar == 'registrada' || $buscar == 'REGISTRADA') {
            $buscar = 1;
        } elseif ($buscar == 'Anulada' || $buscar == 'anulada' || $buscar == 'ANULADA') {
            $buscar = 0;
		}*/
		
		$datosCitas['resultado'] = $this->Model_agenda->Historialcitas($buscar);

		
	
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/historialCitas_view',$datosCitas);
		$this->load->view('layouts/footer');
		
	}



	
	public function verdetallecita()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verDetalleCita_view.php');
		$this->load->view('layouts/footer');
		
	}

	public function actualizarcita()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarCita_view.php');
		$this->load->view('layouts/footer');
		
	}

	
}
