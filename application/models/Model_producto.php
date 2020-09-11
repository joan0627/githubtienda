<?php

class Model_producto extends Ci_model
{

	//Nombre de la tabla
	public $tablaProducto = 'producto';
	public $tablaCategoria= 'categoria';
	public $tablaMarca= 'marca'; 
	public $tablaUnidadmedida = 'unidadmedida';

	public $tablaEspecieproducto= 'especieproducto';
	//public $tablaProveedor= 'proveedor'; pendiente para borrar
	public $tablaUnidadMedida= 'unidadmedida';
	public $tablaPresentacion= 'presentacion';

	//Nombre de la llave primaria
	public $ProductoPK = 'idProducto';


	public function _construct()
	{
		
	}


	
	/*************************************************************/
	// **			Funciones de producto		  				// **
	/**************************************************************/


//Función para insertar un producto

	function insertarProducto($datosProducto){

		$this->db->insert($this->tablaProducto, $datosProducto);
		 return $this->db->insert_id();
	}

	//Función para buscar registros en el campo de busqueda
	function BuscarDatos($buscar) {

		$this->db->select();
		$this->db->from($this->tablaProducto);
		$this->db->join($this->tablaCategoria, 'producto.idCategoria = categoria.idCategoria');
		$this->db->join($this->tablaMarca, 'producto.marca = marca.idMarca');
		$this->db->join($this->tablaPresentacion, 'producto.idPresentacion = presentacion.idPresentacion');
		$this->db->join($this->tablaUnidadmedida, 'producto.idUnidadMedida = unidadmedida.idUnidadMedida');
		$this->db->or_like("idProducto",$buscar);
		$this->db->or_like("nombreProducto",$buscar);
		$this->db->or_like("categoria.descripcion",$buscar);
		$this->db->or_like("existencia",$buscar);
		$this->db->or_like("marca.descripcionMarca",$buscar);
		$this->db->or_like("presentacion.descripcionPresentacion",$buscar);
		$this->db->or_like("unidadmedida.descripcionUnidadmedida",$buscar);
		$this->db->or_like("precio",$buscar);
		$this->db->order_by('fechaRegistro', 'DESC');
		$consulta = $this->db->get();

		if($consulta->num_rows()==0)
		{

			$this->session->set_flashdata('busqueda', 'No hay resultados');

		}
		return $consulta->result();

		
		
	}
 


	function buscarDatosProducto($idProducto){
		$this->db->select();
		//$this->db->from($this->tablaProveedor);
		$this->db->join($this->tablaCategoria, 'producto.idCategoria = categoria.idCategoria');
		$this->db->join($this->tablaMarca, 'producto.marca = marca.idMarca');
		$this->db->join($this->tablaPresentacion, 'producto.idPresentacion = presentacion.idPresentacion');
		$this->db->join($this->tablaUnidadMedida, 'producto.idUnidadMedida = unidadmedida.idUnidadMedida');
		$resultado = $this->db->get_where('producto', array('producto.idProducto' => $idProducto), 1);

	
		return $resultado->row_array();


	}



// Función para un producto 
	function actualizarProducto($idProducto, $datosProducto){
		
		$this->db->where($this->ProductoPK ,$idProducto);
		$this->db->update($this->tablaProducto, $datosProducto);
	}



// Función para eliminar un producto 
	function borrar($idProducto){
		$this->db->select();
		$this->db->from($this->tablaProducto);
		$this->db->where($this->ProductoPK,$idProducto);
		$this->db->delete($this->tablaProducto);
	}



	/*************************************************************/
	// **			Funciones para cargar los selects		  // **
	/**************************************************************/

// Función para buscar todas las categorias 
function buscarTodasCategorias() {

	$this->db->select();
	$this->db->from($this->tablaCategoria);

	$consulta = $this->db->get();
	return $consulta->result();
	
}

// Función para buscar todas las especies_Producto
function buscarTodasEspecies() {

	$this->db->select();
	$this->db->from($this->tablaEspecieproducto);

	$consulta = $this->db->get();
	return $consulta->result();
	
}


// Función para buscar todas las marcas 
function buscarTodasMarcas() {

	$this->db->select();
	$this->db->from($this->tablaMarca);

	$consulta = $this->db->get();
	return $consulta->result();
	
}


function buscarUnidadesMedidas() {

	$this->db->select();
	$this->db->from($this->tablaUnidadMedida);

	$consulta = $this->db->get();
	return $consulta->result();
	
}

function buscarPresentaciones() {

	$this->db->select();
	$this->db->from($this->tablaPresentacion);

	$consulta = $this->db->get();
	return $consulta->result();
	
}







	


}

?>
