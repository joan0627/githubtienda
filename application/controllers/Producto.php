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
		$this->form_validation->set_rules('unidadDeMedida', 'unidad de medida', 'required');
		$this->form_validation->set_rules('valorDeMedida', 'valor de medida', 'required');
		$this->form_validation->set_rules('presentacion', 'presentación', 'required');
		$this->form_validation->set_rules('costo', 'costo', 'required');
		$this->form_validation->set_rules('utilidad', 'utilidad', 'required');
	


	}

	public function registrarproductosu()
	{

		    $datosCarga["idProducto"] = $datosCarga["nombreProducto"] = $datosCarga["descripcion"] = $datosCarga["categoria"] =
			$datosCarga["marca"] = $datosCarga["proveedor"] = $datosCarga["existencia"] = $datosCarga["unidadMedida"] =
			$datosCarga["valorMedida"] = $datosCarga["presentacion"] = $datosCarga["costo"] = $datosCarga["utilidad"] = $datosCarga["precio"] =  "";

			$datosCarga["img"] ="http://placehold.it/250x200";
			
			$datosCarga['categorias'] = $this->model_producto->buscarTodasCategorias();
			$datosCarga['marcas'] = $this->model_producto->buscarTodasMarcas();
			$datosCarga['proveedores'] = $this->model_producto->buscarProveedores();
			$datosCarga['unidadesmedidas'] = $this->model_producto->buscarUnidadesMedidas();
			$datosCarga['presentaciones'] = $this->model_producto->buscarPresentaciones();

		//Campos del formulario
		if ($this->input->server("REQUEST_METHOD") == "POST") {

			/*Arreglos para guardar informacion en las dos tabla: Producto
			solo se sutiliza un arreglo por que solo es una roducto
			*/
			$datosProducto["idProducto"] = $this->input->post("codigo");
			$datosProducto["nombreProducto"] = $this->input->post("nombre");
			$datosProducto["descripcion"] = $this->input->post("descripcion");
			$datosProducto["categoria"] = $this->input->post("categoria");
			$datosProducto["marca"] = $this->input->post("marca");
			$datosProducto["proveedor"] = $this->input->post("proveedor");
			$datosProducto["existencia"] = $this->input->post("existencia");
			$datosProducto["unidadMedida"] = $this->input->post("unidadDeMedida");
			$datosProducto["valorMedida"] = $this->input->post("valorDeMedida");
			$datosProducto["presentacion"] = $this->input->post("presentacion");
			$datosProducto["costo"] = $this->input->post("costo");
			$datosProducto["utilidad"] = $this->input->post("utilidad");
			$datosProducto["precio"] = $this->input->post("precioVenta");

			//Cargar la imagen 
			$mi_archivo = 'cargaimagenproducto';
			$config['upload_path'] = "assets/img/productos";
			//$config['file_name'] = "Nombre_File";
			$config['allowed_types'] = "jpg|png|jpeg";
			$config['max_size'] = "5000";
			$config['max_width'] = "2000";
			$config['max_height'] = "2000";
	
			$this->load->library('upload', $config);
			
			$this->upload->do_upload($mi_archivo);
	

			$file_data = $this->upload->data();

			if($file_data['file_name']=="")
			{
				
				$rutaImagen = $datosProducto["imagen"] = base_url() . "assets/img/productos/" . $file_data['file_name'];
				$datosCarga["img"] = $rutaImagen;
	
			}

			else
			{
				
			}


		

			//Cargar la ruta al arreglo de datos que se va insertar en la base de datos
			$datosProducto["imagen"] = base_url()."assets/img/productos/".$file_data['file_name'];


			
		
			//Se mantienen los datos al hacer una validación//
			$datosCarga["idProducto"] = $this->input->post("codigo");
			$datosCarga["nombreProducto"] = $this->input->post("nombre");
			$datosCarga["descripcion"] = $this->input->post("descripcion");
			$datosCarga["categoria"] = $this->input->post("categoria");
			$datosCarga["marca"] = $this->input->post("marca");
			$datosCarga["proveedor"] = $this->input->post("proveedor");
			$datosCarga["existencia"] = $this->input->post("existencia");
			$datosCarga["unidadMedida"] = $this->input->post("unidadDeMedida");
			$datosCarga["valorMedida"] = $this->input->post("valorDeMedida");
			$datosCarga["presentacion"] = $this->input->post("presentacion");
			$datosCarga["costo"] = $this->input->post("costo");
			$datosCarga["utilidad"] = $this->input->post("utilidad");
			$datosCarga["precio"] = $this->input->post("precioVenta");

		



			/*************************************************************/
			// **			Validaciónn de los campos					**// 
			/*************************************************************/
			if ($this->form_validation->run()) {

				$this->model_producto->insertarProducto($datosProducto);
				//redirect("Producto/listaproductosu");
			}


		}

	

		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/formularios/registroProducto_view', $datosCarga );
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
