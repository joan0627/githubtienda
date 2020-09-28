<?php

class Model_compra extends Ci_model
{

	public $tablaCompra = 'compras';
	public $idCompraPK = 'idCompras';


    public $tablaProveedor = 'proveedor';
	public $idProveedorPK = 'documento';

	public $tablaDetalle = 'detallecompra';
	public $idDetallePK = 'idDetalleCompra';


	public function _construct()
	{
		
	}


	/*************************************************************/
	// **Aqui comienza las consultas sql para la tabla compras // **
	/********
	 * 
	 * *****************************************************/


	function obtenerId()
	{

	   $this->db->select_max('idCompras');
	   $this->db->from($this->tablaCompra);
	   $consulta = $this->db->get();

	   if($consulta->num_rows()==0)
	   {

		   $this->session->set_flashdata('codigoCompra', 1);

	   }

	   return $consulta->row_array();
	}

	//Función insertar el encabezado de la compra
	function insertarCompra($datosCompra){

		$this->db->insert($this->tablaCompra, $datosCompra);
		 return $this->db->insert_id();
	}

	//Función insertar el detalle de la compra
	function insertarDetalle($datosDetalle){

		$this->db->insert($this->tablaDetalle, $datosDetalle);
		 return $this->db->insert_id();
		 //OJO AQUI PUEDE TAMBIEN IR EL INSERT BATCH
	}



	//Función para buscar todos los proveedores: Select * from proveedor
	 function BuscarTodasCompras()
	 {

		$this->db->select();
		$this->db->from($this->tablaCompra);
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
