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

	
 	//Función para  buscar un proveedor individual
	function BuscarProveedor ($id) {

		$this->db->select();
		$this->db->from($this->tablaProveedor);
		$this->db->where($this->idProveedorPK,$id);

		$consulta= $this->db->get();
		return $consulta->row();
	}

	/*
 	//Función para  buscar un todos los proveedores
	function BuscarTodosProveedor() {

		$this->db->select();
		$this->db->from($this->tablaProveedor);

		$consulta = $this->db->get();
		return $consulta->result();
		
	}*/

	//Función para buscar todos los tipos de documentos
	function BuscarTiposDocumentos()
	{

	   $this->db->select();
	   $this->db->from($this->TablatipoDocumento);
	   $consulta = $this->db->get();
	   
	   return $consulta->result();
	}

	//Función para buscar todos los proveedores: Select * from proveedor
	 function BuscarTodosProveedor()
	 {

		$this->db->select();
		$this->db->from($this->tablaProveedor);
		$consulta = $this->db->get();
		return $consulta->result();
	 }

	//Función para buscar registros en el campo de busqueda
	function BuscarDatos($buscar) {

		$this->db->select();
		$this->db->from($this->tablaProveedor);
		$this->db->or_like("documento",$buscar);
		$this->db->or_like("nombre",$buscar);
		$this->db->or_like("nombreContacto",$buscar);
		$this->db->or_like("diaVisita",$buscar);
		$this->db->order_by('fechaRegistro', 'DESC');
		$consulta = $this->db->get();

		if($consulta->num_rows()==0)
		{

			$this->session->set_flashdata('busqueda', 'No hay resultados ');

		}
		return $consulta->result();

		
		
	}
	
	// Función para llamar los datos de detalle de la tabla proveedor

	function buscarDatosProveedor($documento){
		$this->db->select();
		//$this->db->from($this->tablaProveedor);
		$this->db->join($this->TablatipoDocumento, 'proveedor.idTipoDocumento = tipodocumento.idTipoDocumento');
		$resultado = $this->db->get_where('proveedor', array('proveedor.documento' => $documento), 1);

		
		return $resultado->row_array();

	}

	//Función para Actualizar un proveedor
	function actualizarProveedor($documento, $datosProveedor){
		
		$this->db->where($this->idProveedorPK ,$documento);
		$this->db->update($this->tablaProveedor, $datosProveedor);
	}


	//Función para borrar un proveedor
	function borrar($documento){
		$this->db->select();
		$this->db->from($this->tablaProveedor);
		$this->db->where($this->idProveedorPK,$documento);
		$this->db->delete($this->tablaProveedor);


	}

	function paginacion($pag_size,$offset)
	{

	   $this->db->select();
	   $this->db->from($this->tablaProveedor);
	   $this->db->limit($pag_size,$offset);
	   $consulta = $this->db->get();
	   return $consulta->num_rows();
	}

	function count()
	{

	   $this->db->select();
	   $this->db->from($this->tablaProveedor);
	   $consulta = $this->db->get();
	   return $consulta->num_rows();
	}





}
