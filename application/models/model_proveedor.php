<?php

class model_proveedor extends Ci_model
{


	public function _construct()
	{
		$tablaPersona = 'persona';
		$tablaProveedor = 'proveedor';
		$tablaTipoDocumento = 'tipodocumento';
		$tablaTipoPersona = 'tipopersona';


		$documentoPK = 'documento';
		$idProveedorPK = 'idProveedor';
		$idTipodocumentoPK = 'idTipoDocumento';
		$idTipoPersonaPK = 'idTipoPersona';
		$personaDocumento = 'personaDocumento';

		$tipoDocumentoPersona = 'tipoDocumento';
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
