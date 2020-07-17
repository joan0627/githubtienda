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


	function insertarPersona($datosPersona)
	{
		$this->db->insert($this->tablaPersona, $datosPersona);
		return true;

		
	}

	function insertarProveedor($datosProveedor){

		$this->db->insert($this->tablaProveedor, $datosProveedor);
		 return $this->db->insert_id();
	}

}
