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
	public $documento = 'documento';

	public function _construct()
	{
		
	}


	
	/*********************/
	// *Funciones de producto// *
	/**********************/


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
		$this->db->or_like("idProducto",$buscar,'none');
		$this->db->or_like("nombreProducto",$buscar);
		$this->db->or_like("categoria.descripcion",$buscar,'none');
		$this->db->or_like("marca.descripcionMarca",$buscar,'none');
		$this->db->or_like("precio",$buscar,'none');
		$this->db->or_like("estado",$buscar,'none');
		$this->db->order_by('fechaRegistro', 'DESC');
		$consulta = $this->db->get();

		if($consulta->num_rows()==0)
		{

			$this->session->set_flashdata('busqueda', 'No hay resultados');

		}else{

			$this->session->set_flashdata('busqueda', '');
		}
		return $consulta->result();

		
		
	}
 
	
	

	function buscarDatosProducto($idProducto){
		$this->db->select();
		$this->db->join($this->tablaCategoria, 'producto.idCategoria = categoria.idCategoria');
		$this->db->join($this->tablaMarca, 'producto.marca = marca.idMarca');
		$this->db->join($this->tablaPresentacion, 'producto.idPresentacion = presentacion.idPresentacion');
		$this->db->join($this->tablaUnidadMedida, 'producto.idUnidadMedida = unidadmedida.idUnidadMedida');
		$this->db->join($this->tablaEspecieproducto, 'producto.idEspecieProducto = especieproducto.idEspecieProducto');
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



	/*********************/
	// *			Funciones para cargar los selects		  // *
	/**********************/

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


public function consultaExistencia($idProducto){
	$this->db->select('existencia');
	$this->db->from($this->tablaProducto);
	$this->db->where('idProducto', $idProducto);
	$resultado = $this->db->get();	

	return $resultado->row_array();

}

public function actualizarExistencia($idProducto, $cantidad){

	$this->db->set('existencia', $cantidad);
	$this->db->where('idProducto', $idProducto);
	$this->db->update('producto'); 	

}

public function buscarproductosmarca($documento)
{
	$this->db->select();
	$this->db->from($this->tablaProducto);
	$this->db->join($this->tablaCategoria, 'producto.idCategoria = categoria.idCategoria');
	$this->db->join($this->tablaMarca, 'producto.marca = marca.idMarca');
	$this->db->join('detalleproveedormarca', 'marca.idMarca = detalleproveedormarca.idMarca');
	$this->db->join($this->tablaPresentacion, 'producto.idPresentacion = presentacion.idPresentacion');
	$this->db->join($this->tablaUnidadmedida, 'producto.idUnidadMedida = unidadmedida.idUnidadMedida');
	$this->db->where('detalleproveedormarca.documentoProveedor', $documento);
	$resultado = $this->db->get();	
	return $resultado->result_array();
}

function ActualizaEstadoProducto($idProducto, $estadoP){

	$this->db->set('estado', $estadoP);	
	$this->db->where($this->ProductoPK ,$idProducto);
	$this->db->update($this->tablaProducto);
}


//Consultas para ventas

function ProductoVenta(){
	$this->db->select();
	$this->db->from($this->tablaProducto);
	$this->db->join($this->tablaCategoria, 'producto.idCategoria = categoria.idCategoria');
	$this->db->join($this->tablaMarca, 'producto.marca = marca.idMarca');
	$this->db->join($this->tablaPresentacion, 'producto.idPresentacion = presentacion.idPresentacion');
	$this->db->join($this->tablaUnidadMedida, 'producto.idUnidadMedida = unidadmedida.idUnidadMedida');
	$this->db->join($this->tablaEspecieproducto, 'producto.idEspecieProducto = especieproducto.idEspecieProducto');
	$this->db->where('estado', 1);
	$this->db->where('existencia >',0);
	
	$resultado = $this->db->get();	
	return $resultado->result_array();


}

	


}

?>