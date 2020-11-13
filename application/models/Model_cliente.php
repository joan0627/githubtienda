<?php

class Model_cliente extends Ci_model
{

	//Nombre de la tabla
    public $tablaTipoMascota= 'tipomascota';
    public $tablaMascota = 'mascota';
    public $tablaRaza = 'raza';
    public $tablaDetalleMascota = 'detallemascotacliente';
    public $tablaCliente = 'cliente';
    

    //Nombre llave primaria
    public $idClientePK = 'documento';




	public function _construct()
	{
		
    }
    

    
    function TipoMascota() {

        $this->db->select();
        $this->db->from($this->tablaTipoMascota);
    
        $consulta = $this->db->get();
        return $consulta->result();
        
    }

    function raza() {

        $this->db->select();
        $this->db->from($this->tablaRaza);
    
        $consulta = $this->db->get();
        return $consulta->result();
        
    }

    
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
    

    function insertarDetalleMascota ($datos){

		$this->db->insert($this->tablaDetalleMascota, $datos);
		 return $this->db->insert_id();
    }
    


    function obtenerId()
	{

	   $this->db->select_max('idMascota');
	   $this->db->from($this->tablaMascota);
	   $consulta = $this->db->get();

	   if($consulta->num_rows()==0)
	   {

		   $this->session->set_flashdata('codigoMascota', 1);

	   }

	   return $consulta->row_array();
    }
    

    function idMascota()
	{

	   $this->db->select_max('idMascota');
	   $this->db->from($this->tablaMascota);
	   $consulta = $this->db->get();

	  
	}

	
    function consultarRows($limite)
	{
	
	   $this->db->select('idMascota');
	   $this->db->order_by('idMascota', 'DESC');
	   $consulta = $this->db->get('mascota', $limite);

   		return $consulta->row_array();
	}






}

?>