<?php

class model_proveedor extends Ci_model
{


	public $tablaPersona = 'persona';
	public $tablaProveedor = 'proveedor';
	public $tablaTipoDocumento = 'tipodocumento';
	public $tablaTipoPersona = 'tipopersona';


	public $documentoPK = 'documento';
	public $idProveedorPK = 'idProveedor';
	public $idTipodocumentoPK = 'idTipoDocumento';
	public $idTipoPersonaPK = 'idTipoPersona';
	public $personaDocumento = 'personaDocumento';

	public $tipoDocumentoPersona = 'tipoDocumento';

	public function _construct()
	{
		
	}
	/*************************************************************/
	// **Aqui comienza las consultas sql para la tabla persona // **
	/*************************************************************/

	function insertarPersona($datosPersona)
	{
		$this->db->insert($this->tablaPersona, $datosPersona);
		return true;

		
	}

	function BuscarPersona ($documento) {

		$this->db->select();
		$this->db->from($this->tablaPersona);
		$this->db->where($this->documentoPK,$documento);
		$consulta = $this->db->get();
		return $consulta->row();

	}

	function BuscarTodasPersonas() {

		$this->db->select();
		$this->db->from($this->tablaPersona);

		$consulta = $this->db->get();
		return $consulta->result();
		
	}

	function actualizarPersona($documento, $datosPersona){
		//$this->db->join($this->tablaUsuario, 'persona.documento = usuario.personaDocumento');
		$this->db->where($this->documentoPK	,$documento);
		$this->db->update($this->tablaPersona, $datosPersona);	

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

	function buscarTodoPersonaProveedor(){
		$this->db->select();
		$this->db->from($this->tablaPersona);
		$this->db->join($this->tablaTipoDocumento, 'persona.tipoDocumento = tipodocumento.idTipoDocumento');
		$this->db->join($this->tablaProveedor, 'persona.documento = proveedor.documento');
		$this->db->join($this->tablaTipoPersona, 'persona.tipoPersona = tipopersona.idTipoPersona');
		$resultado = $this->db->get();
		
		return $resultado->result();


	}

	function buscarPersonaProveedor($documento){
		$this->db->select();
		//$this->db->from($this->tablaPersona);
		$this->db->join($this->tablaTipoDocumento, 'persona.tipoDocumento = tipodocumento.idTipoDocumento');
		$this->db->join($this->tablaProveedor, 'persona.documento = proveedor.documento');
		$this->db->join($this->tablaTipoPersona, 'persona.tipoPersona = tipopersona.idTipoPersona');
		$resultado = $this->db->get_where('persona', array('persona.documento' => $documento),1);
		
		return $resultado->row_array();

	}


}
