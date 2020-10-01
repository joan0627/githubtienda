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
	   //return $consulta->result_array();
	   return json_encode($consulta->result());

	}

	function obtenerIdTipoDocumento()
	{

	   $this->db->select_max('idTipoDocumento');
	   $this->db->from($this->tablaTipoDocumento);
	   $consulta = $this->db->get();

	   if($consulta->num_rows()==0)
	   {

		   $this->session->set_flashdata('idTipoDocumento', 1);

	   }

	   return $consulta->row_array();
	}

	function insertarTipoDocumento($datosTipoDocumento){

		$this->db->insert($this->tablaTipoDocumento, $datosTipoDocumento);
		 return $this->db->insert_id();
	}


		//Función para borrar un proveedor
		function borrar($id){
			$this->db->select();
			$this->db->from($this->tablaTipoDocumento);
			$this->db->where($this->tipoDocumentoPK,$id);
			$this->db->delete($this->tablaTipoDocumento);
	
	
		}

}

?>