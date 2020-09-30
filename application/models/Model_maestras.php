<?php

class Model_maestras extends Ci_model
{

	//Nombre de la tabla
	public $tablaTipoDocumento = 'tipodocumento';
	public $tablaPrueba = 'prueba';

	//Nombre de la llave primaria
	public $tipoDocumentoPK = 'idTipoDocumento';


	/*************************************************************/
	// **			Funciones de producto		  				// **
	/**************************************************************/

        
    function BuscarTiposDocumentos()
	{

	   $this->db->select();
	   $this->db->from($this->tablaTipoDocumento);
	   $consulta = $this->db->get();
	   return $consulta->result_array();


	}

	/*function insertarPrueba($datosPrueba){

		$this->db->insert($this->tablaPrueba, $datosPrueba);
		 return $this->db->insert_id();
	}*/
}

?>