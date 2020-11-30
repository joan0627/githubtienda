<?php

class Model_venta extends Ci_model
{

	public $tablaVenta = 'venta';
	public $tablaFormaPago = "formapago";
	public $tabladetalleVenta = 'detalleventaproducto';


	public $ventaPk = "idFactura";

	public function _construct()
	{
		
    }
    
    //Funcion para buscar todo los usuarios

    function BuscarTodosUsuarios($documento){
		$this->db->select();
		//$this->db->from($this->tablaProveedor);
		$this->db->join($this->TablatipoDocumento, 'proveedor.idTipoDocumento = tipodocumento.idTipoDocumento');
		$resultado = $this->db->get_where('proveedor', array('proveedor.documento' => $documento), 1);

		
		return $resultado->row_array();

	}


	function obtenerIdVenta()
	{

	   $this->db->select_max('idFactura');
	   $this->db->from($this->tablaVenta);
	   $consulta = $this->db->get();

	   if($consulta->num_rows()==0)
	   {

		   $this->session->set_flashdata('codigoVenta', 1);

	   }

	   return $consulta->row_array();
	}


	
	function BuscarFormapago() {

		$this->db->select();
		$this->db->from($this->tablaFormaPago);

		$consulta = $this->db->get();
		return $consulta->result();
		
	}





		//Función insertar el encabezado de la venta
		function insertarVenta($datosVenta){

			$this->db->insert($this->tablaVenta, $datosVenta);
			 return $this->db->insert_id();
		}


		//Función insertar el detalle de la venta

		function insertarDetalleVenta($datosDetalleVenta){

			$this->db->insert($this->tabladetalleVenta, $datosDetalleVenta);
			 return $this->db->insert_id();
		}


		
	//Función para buscar registros en el campo de busqueda
	function BuscarDatosVenta($buscar) {
	
		//$this->db->select();
		$this->db->select('v.*, u.nombre, f.descripcion');
		$this->db->from('venta v');
		$this->db->join('usuario u', ' u.idUsuario = v.vendedor');	
		$this->db->join('formapago f', ' f.idFormaPago = v.formapago');	
		$this->db->or_like("v.idFactura",$buscar,'none');
		$this->db->or_like("u.nombre",$buscar);
		$this->db->or_like("v.totalGlobal",$buscar,'none');
		$this->db->or_like("f.descripcion",$buscar);
		$this->db->or_like("v.estado",$buscar,'none');
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


	function anularVenta($idFactura, $estado){

		$this->db->set('estado', $estado);	
		$this->db->where('idFactura' ,$idFactura);
		$this->db->update($this->tablaVenta);
	}


	function cantida_producto($codigo){
		$this->db->select('existencia');
		$this->db->from('producto');    
		$this->db->where('idProducto', $codigo); 

		$consulta = $this->db->get();
		return $consulta->result();
	}


	//Informe venta


	
function buscarDatosEncabezadoVenta($idventa) {

	$this->db->select('v.*,u.nombre,v.observaciones as observacionesCompra');
	$this->db->from('venta v');
	$this->db->join('usuario u', ' u.idUsuario = v.vendedor');
	$this->db->where($this->ventaPk,$idventa);		
	$consulta = $this->db->get();
	

	return $consulta->result();

	
}


function buscarVentaDetalle($idventa)
{


	$this->db->select();
	$this->db->from('venta v');
	$this->db->join('detalleventaproducto dvp', 'v.idFactura=dvp.factura');		
	$this->db->join('producto p', 'p.idProducto = dvp.producto');
	$this->db->join('categoria ca', 'p.idCategoria = ca.idCategoria');
	$this->db->join('marca m', 'p.marca = m.idMarca');
	$this->db->join('presentacion pr', 'p.idPresentacion = pr.idPresentacion');
	$this->db->join('unidadmedida u', 'p.idUnidadMedida = u.idUnidadMedida');
	
	$this->db->where($this->ventaPk ,$idventa);
	$consulta = $this->db->get();

	return $consulta->result();


}



}
