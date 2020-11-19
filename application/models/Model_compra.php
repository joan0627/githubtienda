<?php

class Model_compra extends Ci_model
{

	public $tablaCompra = 'compras';
	public $idCompraPK = 'idCompras';

	public $tablaPrueba = 'prueba';

	public $tablaUsuario = 'usuario';
	public $idUsuarioPK = 'idUsuario';
	

    public $tablaProveedor = 'proveedor';
	public $idProveedorPK = 'documento';

	public $tablaDetalle = 'detallecompra';
	public $idDetallePK = 'idDetalleCompra';

	public $tablaDetallecompra = 'detallecompra';
	public $idDetallecompra = 'idDetalleCompra';

	public $tablaProducto = 'producto';
	public $tablaCategoria= 'categoria';
	public $tablaMarca= 'marca'; 
	public $tablaUnidadmedida = 'unidadmedida';
	public $tablaPresentacion= 'presentacion';

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

	function insertarPrueba($datos){

		$this->db->insert($this->tablaPrueba, $datos);
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
	function BuscarDatosCompra($buscar) {
	
		//$this->db->select();
		$this->db->select('c.*,p.nombre as nombreP,u.nombre nombreU');
		$this->db->from('compras c');
		$this->db->join('proveedor p', ' p.documento = c.documentoProveedor');		
		$this->db->join('usuario u', ' u.idUsuario = c.idUsuario');
		$this->db->or_like("c.idCompras",$buscar);
		//$this->db->or_like("fechaRegistroCompra",$buscar);
		$this->db->or_like("p.nombre",$buscar);
		$this->db->or_like("u.nombre",$buscar);
		//$this->db->or_like("valor",$buscar);
		$this->db->order_by('fechahora', 'DESC');
		$consulta = $this->db->get();
		


		if($consulta->num_rows()==0)
		{

			$this->session->set_flashdata('busqueda', 'No hay resultados ');

		}
		else
		{
			$this->session->set_flashdata('busqueda', '');
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

// Función para un producto 
function actualizarEstado($idCompra, $estado){

	$this->db->set('estado', $estado);	
	$this->db->where($this->idCompraPK ,$idCompra);
	$this->db->update($this->tablaCompra);
}



function buscarDatosEncabezado($idCompra) {

	$this->db->select('c.*,p.*,p.nombre as nombreProveedor,u.nombre,c.observaciones as observacionesCompra');
	$this->db->from('compras c');
	$this->db->join('proveedor p', ' p.documento = c.documentoProveedor');
	$this->db->join('usuario u', ' u.idUsuario = c.idUsuario');
	$this->db->where($this->idCompraPK,$idCompra);		
	$consulta = $this->db->get();
	

	return $consulta->result();

	
}


function buscarCompraDetalle($idCompra)
{


	$this->db->select();
	$this->db->from('compras c');
	$this->db->join('detallecompra dc', 'c.idCompras=dc.idCompra');		
	$this->db->join('producto p', 'p.idProducto = dc.idProducto');
	$this->db->join('categoria ca', 'p.idCategoria = ca.idCategoria');
	$this->db->join('marca m', 'p.marca = m.idMarca');
	$this->db->join('presentacion pr', 'p.idPresentacion = pr.idPresentacion');
	$this->db->join('unidadmedida u', 'p.idUnidadMedida = u.idUnidadMedida');
	//$this->db->join($this->tablaEspecieproducto, 'producto.idEspecieProducto = especieproducto.idEspecieProducto');		
	$this->db->where($this->idCompraPK ,$idCompra);
	$consulta = $this->db->get();

	return $consulta->result();
	


}



}
