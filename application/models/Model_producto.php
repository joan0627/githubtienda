<?php

class Model_producto extends Ci_model
{

	//Nombre de la tabla
	public $tablaProducto = 'producto';
	public $tablaCategoria= 'categoria';
	public $tablaMarca= 'marca';
	public $tablaProveedor= 'proveedor';
	public $tablaUnidadMedida= 'unidadmedida';
	public $tablaPresentacion= 'presentacion';

	//Nombre de la llave primaria
	public $ProductoPK = 'idProducto';


	public function _construct()
	{
		
	}

// Método para buscar todas las categorias 
function buscarTodasCategorias() {

	$this->db->select();
	$this->db->from($this->tablaCategoria);

	$consulta = $this->db->get();
	return $consulta->result();
	
}

// Método para buscar todas las marcas 
function buscarTodasMarcas() {

	$this->db->select();
	$this->db->from($this->tablaMarca);

	$consulta = $this->db->get();
	return $consulta->result();
	
}

function buscarProveedores() {

	$this->db->select();
	$this->db->from($this->tablaProveedor);

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




	function insertarProducto($datosProducto)
	{
		$this->db->insert($this->tablaProducto, $datosProducto);
		return true;

		
	}


	


}

?>
