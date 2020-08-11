<?php

class Model_proveedor extends Ci_model
{

	public $tablaProveedor = 'proveedor';
	public $idProveedorPK = 'documento';

	public $TablatipoDocumento = 'tipodocumento';
	public $idTipodocumentoPK = 'idTipoDocumento';


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

	// Función para llamar los datos de detalle de la tabla proveedor

	function buscarDatosProveedor($documento){
		$this->db->select();
		//$this->db->from($this->tablaProveedor);
		$this->db->join($this->TablatipoDocumento, 'proveedor.idTipoDocumento = tipodocumento.idTipoDocumento');
		$resultado = $this->db->get_where('proveedor', array('proveedor.documento' => $documento), 1);
		
		return $resultado->row_array();

	}

	function borrar($documento){
		$this->db->select();
		$this->db->from($this->tablaProveedor);
		$this->db->where($this->idProveedorPK,$documento);
		$this->db->delete($this->tablaProveedor);


	}





}
