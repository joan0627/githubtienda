<?php

class Producto extends CI_controller
{


	public function __construct()
	{

		/*************************************************************/
		// **Aqui se cargan todas las librerias que vamos a utilizar // **
		/*************************************************************/
		parent::__construct();
		$this->load->model('Model_producto');
		$this->load->database();
		$this->load->helper("url");
		$this->load->library('form_validation');
		$this->load->library('session');




		$this->form_validation->set_rules('codigo', 'código', 'required|is_unique[producto.idProducto]');
		$this->form_validation->set_rules('nombre', 'nombre', 'required');
		$this->form_validation->set_rules('categoria', 'categoría', 'required');
		$this->form_validation->set_rules('marca', 'marca', 'required');
		$this->form_validation->set_rules('existencia', 'existencia', 'required');
		$this->form_validation->set_rules('unidadDeMedida', 'unidad de medida', 'required');
		$this->form_validation->set_rules('valorDeMedida', 'valor de medida', 'required');
		$this->form_validation->set_rules('presentacion', 'presentación', 'required');

		$this->form_validation->set_rules('tipoespecie', 'tipo especie', 'required');
		$this->form_validation->set_rules('valorDeMedida', 'valor de medida', 'required');
		$this->form_validation->set_rules('presentacion', 'presentación', 'required');

	


	}
	public function index()
	{
		$this->load->view('layouts/superadministrador/header');
		$this->load->view('layouts/superadministrador/aside');
		$this->load->view('superadministrador/general/listadoProductos_view');
		$this->load->view('layouts/footer');
		
	}


	public function registro()
	{

		    $datosCarga["idProducto"] = $datosCarga["nombreProducto"] = $datosCarga["descripcion"] = $datosCarga["idCategoria"] =
			$datosCarga["marca"] = $datosCarga["idPresentacion"] = $datosCarga["valorMedida"] = $datosCarga["idUnidadMedida"] =
			$datosCarga["existencia"] = $datosCarga["idEspecieProducto"] = $datosCarga["indicaciones"] = $datosCarga["contradindicaciones"] = 
			$datosCarga["edadAplicacion"] = $datosCarga["precio"] = "";

			
			
			$datosCarga['categorias'] = $this->Model_producto->buscarTodasCategorias();
			$datosCarga['marcas'] = $this->Model_producto->buscarTodasMarcas();
			//$datosCarga['proveedores'] = $this->model_producto->buscarProveedores();
			$datosCarga['unidadesmedidas'] = $this->Model_producto->buscarUnidadesMedidas();
			$datosCarga['presentaciones'] = $this->Model_producto->buscarPresentaciones();

			$datosCarga["idProducto"] = $this->input->post("codigo");
			$datosCarga["nombreProducto"] = $this->input->post("nombre");
			$datosCarga["descripcion"] = $this->input->post("descripcion");
			$datosCarga["categoria"] = $this->input->post("categoria");
			$datosCarga["marca"] = $this->input->post("marca");
			$datosCarga["unidadMedida"] = $this->input->post("unidadDeMedida");
			$datosCarga["valorMedida"] = $this->input->post("valorDeMedida");
			$datosCarga["presentacion"] = $this->input->post("presentacion");
			$datosCarga["precio"] = $this->input->post("precioVenta");

			

			/*************************************************************/
			// **			Validaciónn de los campos					**// 
			/*************************************************************/

			if ($this->form_validation->run()) {

				$datosProducto["idProducto"] = $this->input->post("codigo");
				$datosProducto["nombreProducto"] = $this->input->post("nombre");
				$datosProducto["descripcion"] = $this->input->post("descripcion");
				$datosProducto["idCategoria"] = $this->input->post("categoria");
				$datosProducto["marca"] = $this->input->post("marca");
				$datosProducto["idPresentacion"] = $this->input->post("presentacion");
				$datosProducto["valorMedida"] = $this->input->post("valorDeMedida");
				$datosProducto["idUnidadMedida"] = $this->input->post("unidadDeMedida");
				$datosProducto["existencia"] = $this->input->post("existencia");
				$datosProducto["idEspecieProducto"] = $this->input->post("tipoespecie");
				$datosProducto["indicaciones"] = $this->input->post("indicaciones");
				$datosProducto["contradindicaciones"] = $this->input->post("contraIndicaciones");
				//Se concatena edad con unidad de tiepo
				$Unidadtiempo = $this->input->post("unidadTiempo");
				//
				$datosProducto["edadAplicacion"] = $this->input->post("edad").' '.$Unidadtiempo; 
				$datosProducto["precio"] = $this->input->post("precioVenta");


				$this->Model_producto->insertarProducto($datosProducto);
				$this->session->set_flashdata('message', 'El producto ' .$datosCarga["nombreProducto"].' se ha registrado correctamente.');
				redirect("Producto");

			}else{


				$this->load->view('layouts/superadministrador/header');
				$this->load->view('layouts/superadministrador/aside');
				$this->load->view('superadministrador/formularios/registroProducto_view', $datosCarga );
				$this->load->view('layouts/footer');

			}

			


			//Campos del formulario 
			/*if ($this->input->server("REQUEST_METHOD") == "POST") {

			Arreglos para guardar informacion en las dos tabla: Producto
			solo se sutiliza un arreglo por que solo es una roducto
			*/
			
			
			/*//Cargar la imagen 
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
				
			}*/

			//Cargar la ruta al arreglo de datos que se va insertar en la base de datos
			//$datosProducto["imagen"] = base_url()."assets/img/productos/".$file_data['file_name'];


			//Se mantienen los datos al hacer una validación//

	
	
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
