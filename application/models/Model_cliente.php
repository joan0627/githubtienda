<?php

class Model_cliente extends Ci_model
{

	//Nombre de la tabla
    public $tablaTipoMascota= 'tipomascota';
    public $tablaMascota = 'mascota';
    public $tablaRaza = 'raza';

    //Nombre llave primaria



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


}

?>