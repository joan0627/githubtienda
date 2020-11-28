<?php

class Model_venta extends Ci_model
{

	public $tablaCompra = 'compras';


	public function _construct()
	{
		
    }
    
    //Funcion para buscar todo los usuarios

    function BuscarTodosUsuarios($documento){
		$this->db->select();
		//$this->db->from($this->tablaProveedor);
		$this->db->join($this->TablatipoDocumento, 'proveedor.idTipoDocumento = tipodocumento.idTipoDocumento');
		$resultado = $this->db->get_where('proveedor', array('proveedor.documento' => $documento), 1);

		
		return $resultado->row_array();

	}



}
