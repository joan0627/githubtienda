<?php

class Model_cliente extends Ci_model
{

	//Nombre de la tabla
    public $tablaTipoMascota= 'tipomascota';
    public $tablaMascota = 'mascota';
    public $tablaRaza = 'raza';
    public $tablaDetalleMascota = 'detallemascotacliente';
	public $tablaCliente = 'cliente';
	public $tablaUnidadMedida = 'unidadmedida';
	public $tablaTipoDocumento ='tipodocumento';
	public $tabladetallehistorialmascota = 'detallehistorialmascota' ;
    

    //Nombre llave primaria
	public $idClientePK = 'documento';
	public $idMascotaPK = 'idMascota';




	public function _construct()
	{
		
    }
    

    //Buscar tipo de mascota
    function TipoMascota() {

        $this->db->select();
        $this->db->from($this->tablaTipoMascota);
    
        $consulta = $this->db->get();
        return $consulta->result();
        
    }

	//Buscar la raza
    function raza() {

        $this->db->select();
        $this->db->from($this->tablaRaza);
    
        $consulta = $this->db->get();
        return $consulta->result();
        
    }

    //insertar un cliente
	function insertarCliente($datos){

		$this->db->insert($this->tablaCliente, $datos);
		 return $this->db->insert_id();
    }
    
    
	function insertarMascota($datos){

		$this->db->insert($this->tablaMascota, $datos);
		 return $this->db->insert_id();
	}


    //Elimar dato erroneo de cliente y detalle mascota
    function elimarDatoErroneo($documento){
		$this->db->select();
		$this->db->from($this->tablaCliente);
		$this->db->where($this->idClientePK,$documento);
		$this->db->delete($this->tablaCliente);


    }
    

    

	//Buscar el id de la mascota
    function idMascota()
	{

	   $this->db->select_max('idMascota');
	   $this->db->from($this->tablaMascota);
	   $consulta = $this->db->get();

	  
	}

	//Buscar el limite de la mascota para darle un id al detalle
    function consultarRows($limite)
	{
	
	   $this->db->select('idMascota');
	   $this->db->order_by('idMascota', 'DESC');
	   $consulta = $this->db->get('mascota', $limite);

   		return $consulta->row_array();
	}


	//Buscar datos de la la tabla cliente.



	
	//Buscar datos de la la tabla cliente.
	function buscarDatosCliente($id){
		$this->db->select();
		$this->db->from($this->tablaCliente);
		//$this->db->join($this->tablaDetalleMascota, 'detallemascotacliente.documentoCliente = cliente.documento');
		//$this->db->join($this->tablaMascota, 'detallemascotacliente.idMascota = mascota.idMascota');
		$this->db->join($this->tablaTipoDocumento, 'cliente.TipoDocumento = tipodocumento.idTipoDocumento');

		$this->db->where($this->idClientePK,$id);

		$resultado = $this->db->get();	
		return $resultado->row_array();

	}


	function buscarDatosMascota($id){
		$this->db->select();
		$this->db->from($this->tablaMascota);
		$this->db->join($this->tablaTipoMascota, 'mascota.idTipoMascota = tipomascota.idTipoMascota');
		$this->db->join($this->tablaRaza, 'mascota.idraza = raza.idraza');
		$this->db->join($this->tablaUnidadMedida, 'mascota.idUnidadMedida = unidadmedida.idUnidadMedida');
		$this->db->where($this->idMascotaPK,$id);
		$resultado = $this->db->get();	
		return $resultado->row_array();

	}



	function buscarTodasMascota($buscar) {

		$this->db->select('c.nombre, m.nombreMascota, m.estadoMascota, tm.descripcion, m.idMascota, r.descripcionRaza');
		$this->db->from('mascota as m');
		//$this->db->join('detallemascotacliente as dmc', 'dmc.idMascota = m.idMascota');
		$this->db->join('tipomascota as tm', 'm.idTipoMascota = tm.idTipoMascota');
		$this->db->join('cliente as c', 'm.documentoCliente = c.documento');
		$this->db->join('raza as r', 'm.idraza = r.idraza');
		$this->db->or_like("c.nombre",$buscar);
		$this->db->or_like("m.nombreMascota",$buscar);
		$this->db->or_like("tm.descripcion",$buscar,'none');
		$this->db->or_like("descripcionRaza",$buscar,'none');
		$this->db->or_like("m.estadoMascota",$buscar,'none');
		$this->db->order_by('c.nombre', 'DESC');
		$this->db->order_by('m.estadoMascota', 'DESC');
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

	function historial_mascota($idMascotaH){
		$this->db->select('c.nombre, pr.nombreProducto, h.dosis, 
		h.fechaAplicacion, h.fechaProxima, h.observaciones, un.descripcionUnidadmedida, s.nombreServicio');
		$this->db->from('mascota as m');
		$this->db->join('cliente as c', 'm.documentoCliente = c.documento');
		//$this->db->join('mascota as m', 'dmc.idMascota = m.idMascota');
		$this->db->join('detallehistorialmascota as h', 'h.idMascota = m.idMascota');
		$this->db->join('servicio as s', 's.idServicio = h.idServicio');
		$this->db->join('producto as pr', 'h.idProducto = pr.idProducto');
		$this->db->join('unidadmedida as un', 'h.idUnidadMedida = un.idUnidadMedida');
		$this->db->where('h.idMascota',$idMascotaH);
    
        $consulta = $this->db->get();
		return $consulta->result();


	}



    function buscarTabladetalle($id) {

        $this->db->select();
		$this->db->from($this->tablaMascota);
		$this->db->join($this->tablaCliente, 'mascota.documentoCliente = cliente.documento');
		//$this->db->join($this->tablaMascota, 'detallemascotacliente.idMascota = mascota.idMascota');
		$this->db->join($this->tablaTipoMascota, 'mascota.idTipoMascota = tipomascota.idTipoMascota');
		$this->db->join($this->tablaRaza, 'mascota.idraza = raza.idraza');
		$this->db->join($this->tablaUnidadMedida, 'mascota.idUnidadMedida = unidadmedida.idUnidadMedida');
		$this->db->where('documentoCliente',$id);
    
        $consulta = $this->db->get();
		return $consulta->result();
		
	}
		
		
	// Función para actualizar una mascota
	function ActualizarMascota($idMascota, $datosActualizarMascota){
		
		$this->db->where($this->idMascotaPK ,$idMascota);
		$this->db->update($this->tablaMascota, $datosActualizarMascota);
	}

	// Función para actualizar un cliente
	function ActualizarCliente($documento, $datosActualizarCliente){
		
		$this->db->where($this->idClientePK ,$documento);
		$this->db->update($this->tablaCliente, $datosActualizarCliente);
	}


		//Función para Actualizar un proveedor

		function ActualizaEstado($idMascota, $estado){

			$this->db->set('estadoMascota', $estado);	
			$this->db->where($this->idMascotaPK ,$idMascota);
			$this->db->update($this->tablaMascota);
		}
		
		
		function ActualizaEstadoCliente($documentoC, $estadoC){

			$this->db->set('estado', $estadoC);	
			$this->db->where($this->idClientePK ,$documentoC);
			$this->db->update($this->tablaCliente);
		}
	


		function ListarDatosCliente($buscar) {

			$this->db->select();
			$this->db->from($this->tablaCliente);
			$this->db->or_like("documento",$buscar,'none');
			$this->db->or_like("nombre",$buscar);
			//$this->db->or_like("celular",$buscar);
			$this->db->or_like("estado",$buscar);
			//$this->db->or_like("numMascotas",$buscar,'none');
			//$this->db->order_by('fechaRegistro', 'DESC');
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

		function contarMascotas($documentoC){

			$this->db->select('count(idMascota)');
			$this->db->from('detallemascotacliente');       
			$this->db->where('documentoCliente' ,$documentoC); 
			$this->db->group_by('documentoCliente');      
			$consulta = $this->db->get();

			return $consulta->result();

	

		}


		public function consultaNumMascotas($documento){
			$this->db->select('numMascotas');
			$this->db->where('documento', $documento);
			$resultado = $this->db->get('cliente');	
	
			return $resultado->row_array();
		
		}

		public function actualizarNumMascotas($documentoC, $numMascotas){

			$this->db->set('numMascotas', $numMascotas);
			$this->db->where('documento', $documentoC);
			$this->db->update('cliente'); 	
		
		}

		function Estadomascotas($documento){
			$this->db->select('count(mascota.estadoMascota) as deshabilitados, numMascotas');
			$this->db->from('mascota');    
			//$this->db->join("detallemascotacliente", 'mascota.idMascota = detallemascotacliente.idMascota');
			$this->db->join("cliente", 'cliente.documento = mascota.documentoCliente');  
			$this->db->where('documento', $documento); 
			$this->db->where('mascota.estadoMascota', 0);

			$consulta = $this->db->get();

			return $consulta->result();
		}




	function consulta_documento($documento){
		$this->db->select('documento');
		$this->db->from('cliente'); 
		$this->db->where('documento', $documento); 

		$consulta = $this->db->get();

			if($consulta->num_rows()==0)  
			{

				return "true";
	
	
			}else{

				return "false";

			}

		

			

	}
	
	

}

?>