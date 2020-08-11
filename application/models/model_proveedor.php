<?php

class Model_proveedor extends Ci_model
{

	public $tablaProveedor = 'proveedor';
	public $idProveedorPK = 'idProveedor';
	public $idTipodocumentoPK = 'idTipoDocumento';
	public $tipoDocumentoPersona = 'tipoDocumento';

	public function _construct()
	{
		
	}


	/*************************************************************/
	// **Aqui comienza las consultas sql para la tabla proveedor // **
	/*************************************************************/

	function insertarProveedor($datosProveedor){

		$this->db->insert($this->tablaProveedor, $datosProveedor);
		 return $this->db->insert_id();
	}

	

	function BuscarProveedor ($id) {

		$this->db->select();
		$this->db->from($this->tablaProveedor);
		$this->db->where($this->idProveedorPK,$id);

		$consulta= $this->db->get();
		return $consulta->row();
	}


	function BuscarTodosProveedor() {

		$this->db->select();
		$this->db->from($this->tablaProveedor);

		$consulta = $this->db->get();
		return $consulta->result();
		
	}

	function actualizarProveedor($id, $datosProveedor){
		$this->db->where($this->documentoPK,$id);
		$this->db->update($this->tablaProveedor, $datosProveedor);

		
	}



	//* Funciones de ambas tablas*//

	


}
