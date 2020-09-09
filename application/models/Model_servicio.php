<?php

class Model_servicio extends Ci_model
{

	//Nombre de la tabla
	public $tablaServicio = 'servicio';
	public $tablaTiposervicio = 'tiposervicio';
	//Nombre de la llave primaria
	public $ServicioPK = 'idServicio';


	public function _construct()
	{
		
	}


	
	/*************************************************************/
	// **			Funciones de Servicio		  				// **
	/**************************************************************/


    //Función para insertar un producto

	function insertarServicio($datosServicio){

		$this->db->insert($this->tablaServicio, $datosServicio);
		 return $this->db->insert_id();
	}

	function buscarTipoServicio() {

		$this->db->select();
		$this->db->from($this->tablaTiposervicio);
	
		$consulta = $this->db->get();
		return $consulta->result();
		
	}




}

?>
