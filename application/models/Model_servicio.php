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


	
	/*********************/
	// *			Funciones de Servicio		  				// *
	/**********************/


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

	function BuscarDatos($buscar) {

		$this->db->select();
		$this->db->from($this->tablaServicio);
		$this->db->join($this->tablaTiposervicio, 'servicio.idTipoServicio = tiposervicio.idTipoServicio');
		$this->db->or_like("idServicio",$buscar,'none');
		$this->db->or_like("nombreServicio",$buscar);
		$this->db->or_like("tiposervicio.descripcionTipoServicio",$buscar,'none');
		$this->db->or_like("precio",$buscar,'none');
		$this->db->or_like("estado",$buscar,'none');
		$this->db->order_by('fechaRegistro', 'DESC');
		$consulta = $this->db->get();

		if($consulta->num_rows()==0)
		{

			$this->session->set_flashdata('busqueda', 'No hay resultados');

		}else{
			$this->session->set_flashdata('busqueda', '');

		}
		return $consulta->result();

	}

	function buscarDatosServicio($idServicio){ 
		$this->db->select();
		$this->db->from($this->tablaServicio);
		$this->db->join($this->tablaTiposervicio, 'servicio.idTipoServicio = tiposervicio.idTipoServicio');
		$this->db->where($this->ServicioPK,$idServicio);

		$resultado = $this->db->get();	
		return $resultado->row_array();

	}



	//Función para Actualizar un servicio
	function actualizarServicio($idServicio, $datosServicio){
		
		$this->db->where($this->ServicioPK ,$idServicio);
		$this->db->update($this->tablaServicio, $datosServicio);
	}



	function ActualizaEstadoServicio($idServicio, $estadoS){

		$this->db->set('estado', $estadoS);	
		$this->db->where($this->ServicioPK ,$idServicio);
		$this->db->update($this->tablaServicio);
	}


}

?>