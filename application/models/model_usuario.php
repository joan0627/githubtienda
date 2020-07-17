<?php

class model_usuario extends Ci_model {
	public $tablaPersona = 'persona';
	public $tablaUsuario = 'usuario';
	public $tablaTipoDocumento = 'tipodocumento';
	public $tablaTipoPersona = 'tipopersona';

	public $idUsuarioPK= 'idUsuario';
	public $documentoPK = 'documento';
	public $idTipodocumentoPK = 'idTipoDocumento';
	public $idTipoUsuarioPK= 'idTipoPersona';
	public $personaDocumento= 'personaDocumento';

	public $tipoDocumentoPersona= 'tipoDocumento';

	public function _construct() {
	
	}

	// Aqui comieza las consultas sql para la tabla persona
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

	function insertarPersona($datosPersona){

		$this->db->insert($this->tablaPersona, $datosPersona);
		return true;
	}

	// Aqui comieza las consultas sql para la tabla usuario
	function BuscarUsuario ($id) {

		$this->db->select();
		$this->db->from($this->tablaUsuario);
		$this->db->where($this->idUsuarioPK,$id);

		$consulta= $this->db->get();
		return $consulta->row();
	}


	function BuscarTodosUsuarios() {

		$this->db->select();
		$this->db->from($this->tablaUsuario);

		$consulta = $this->db->get();
		return $consulta->result();
		
	}

	
	function insertarUsuario($datosUsuario){

		$this->db->insert($this->tablaUsuario, $datosUsuario);
		return $this->db->insert_id();
	}

	function buscarTodoPersonaUsuario(){
		$this->db->select();
		$this->db->from($this->tablaPersona);
		$this->db->join($this->tablaTipoDocumento, 'persona.tipoDocumento = tipodocumento.idTipoDocumento');
		$this->db->join($this->tablaUsuario, 'persona.documento = usuario.personaDocumento');
		$this->db->join($this->tablaTipoPersona, 'persona.tipoPersona = tipopersona.idTipoPersona');
		$resultado = $this->db->get();
		
		return $resultado->result();


	}

	function buscarPersonaUsuario($documento){
		$this->db->select();
		//$this->db->from($this->tablaPersona);
		$this->db->join($this->tablaTipoDocumento, 'persona.tipoDocumento = tipodocumento.idTipoDocumento');
		$this->db->join($this->tablaUsuario, 'persona.documento = usuario.personaDocumento');
		$this->db->join($this->tablaTipoPersona, 'persona.tipoPersona = tipopersona.idTipoPersona');
		$resultado = $this->db->get_where('persona', array('persona.documento' => $documento),1);
		
		return $resultado->row_array();

	}


	function actualizarPersona($documento, $datosPersona){
		//$this->db->join($this->tablaUsuario, 'persona.documento = usuario.personaDocumento');
		$this->db->where($this->documentoPK	,$documento);
		$this->db->update($this->tablaPersona, $datosPersona);	

	}

	function actualizarUsuario($id, $datosUsuario){
		$this->db->where($this->personaDocumento,$id);
		$this->db->update($this->tablaUsuario, $datosUsuario);

		
	}

	function borrar($documento){
		$this->db->select();
		$this->db->from($this->tablaPersona);
		$this->db->join($this->tablaTipoDocumento, 'persona.tipoDocumento = tipodocumento.idTipoDocumento');
		$this->db->join($this->tablaUsuario, 'persona.documento = usuario.personaDocumento');
		$this->db->join($this->tablaTipoPersona, 'persona.tipoPersona = tipopersona.idTipoPersona');
		$this->db->where($this->documentoPK,$documento);
		$this->db->delete($this->tablaPersona);


	}

}

?>
