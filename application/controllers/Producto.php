<?php

class Producto extends CI_controller
{


	public function __construct()
	{

		/*************************************************************/
		// **Aqui se cargan todas las librerias que vamos a utilizar // **
		/*************************************************************/
		parent::__construct();
		$this->load->model('model_producto');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');



		//Validaciones para los campos de la tabla Producto
		$this->form_validation->set_rules('codigo', 'código', 'required|is_unique[producto.idProducto]');
		$this->form_validation->set_rules('nombre', 'nombre', 'required');

		$this->form_validation->set_rules('categoria', 'categoría', 'required');
		$this->form_validation->set_rules('marca', 'marca', 'required');
		$this->form_validation->set_rules('proveedor', 'proveedor', 'required');
		$this->form_validation->set_rules('existencia', 'existencia', 'required');
		$this->form_validation->set_rules('unidaDeMedida', 'unidad de medida', 'required');
		$this->form_validation->set_rules('valorDeMedida', 'valor de medida', 'required');
		$this->form_validation->set_rules('presentacion', 'presentación', 'required');
		$this->form_validation->set_rules('costo', 'costo', 'required');
		$this->form_validation->set_rules('utilidad', 'utilidad', 'required');

	}

	public function registrarproductosu()
	{

		$datosCarga["codigo"] = $datosCarga["nombre"] = $datosCarga["descripcion"] = $datosCarga["categoria"] =
			$datosCarga["marca"] = $datosCarga["proveedor"] = $datosCarga["existencia"] = $datosCarga["unidaDeMedida"] =
			$datosCarga["valorDeMedida"] = $datosCarga["presentacion"] = $datosCarga["costo"] = $datosCarga["utilidad"] = "";




		//Campos del formulario
		if ($this->input->server("REQUEST_METHOD") == "POST") {

			/*Arreglos para guardar informacion en las dos tabla: Producto
			solo se sutiliza un arreglo por que solo es una tabla.
			*/
			$datosPersona["idProducto"] = $this->input->post("codigo");
			$datosPersona["nombreProducto"] = $this->input->post("nombre");
			$datosPersona["descripcion"] = $this->input->post("descripcion");
			$datosPersona["categoria"] = $this->input->post("categoria");
			$datosPersona["marca"] = $this->input->post("marca");
			$datosPersona["proveedor"] = $this->input->post("proveedor");
			$datosPersona["existencia"] = $this->input->post("existencia");
			$datosPersona["unidadMedida"] = $this->input->post("unidaDeMedida");
			$datosPersona["valorMedida"] = $this->input->post("valorDeMedida");
			$datosPersona["presentacion"] = $this->input->post("presentacion");
			$datosPersona["costo"] = $this->input->post("costo");
			$datosPersona["utilidad"] = $this->input->post("utilidad");
			$datosPersona["precio"] = $this->input->post("precioVenta");


			//Cargar la imagen 
			$mi_archivo = 'cargaimagenproducto';
			$config['upload_path'] = "assets/img/productos";
			//$config['file_name'] = "nombre_archivo";
			$config['allowed_types'] = "jpg|png";
			$config['max_size'] = "5000";
			$config['max_width'] = "2000";
			$config['max_height'] = "2000";
	
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload($mi_archivo)) {
				//*** ocurrio un error
				
				echo $this->upload->display_errors();
				return;
			}
	
			//var_dump( $this->upload->data());

			$file_data = $this->upload->data();

			//Cargar la ruta al arreglo de datos que se va insertar en la base de datos
			$datosPersona["imagen"] = base_url()."assets/img/productos/".$file_data['file_name'];

		

			
		
			/*************************************************************/
			// **			Validaciónn de los campos					 // **
			/*************************************************************/
			if ($this->form_validation->run()) {

				$this->model_producto->insertarProducto($datosPersona);
				redirect("Producto/listaproductosu");
			}
		}

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProducto_view', $datosCarga);
		$this->load->view('layouts/footer');
	}



	public function listaproductosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoProductos_view');
		$this->load->view('layouts/footer');
		
	}
	

	public function actualizarproductosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarProducto_view');
		$this->load->view('layouts/footer');
		
	}

	public function verDetalleproductosu()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/verDetalleProducto_view');
		$this->load->view('layouts/footer');
		
	}

	public function precio()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/agregarPrecio_view');
		$this->load->view('layouts/footer');
		
	}

	public function Actualizarprecio()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/actualizarPrecio_view');
		$this->load->view('layouts/footer');
		
	}




	

}

?>
