<?php

class model_producto extends Ci_model
{

	//Nombre de la tabla
	public $tablaProducto = 'producto';

	//Nombre de la llave primaria
	public $ProductoPK = 'idProducto';


	public function _construct()
	{
		
	}

	function insertarProducto($datosProducto)
	{
		$this->db->insert($this->tablaProducto, $datosProducto);
		return true;

		
	}

}

?>
