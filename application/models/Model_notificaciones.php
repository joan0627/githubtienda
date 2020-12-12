<?php

class Model_notificaciones extends Ci_model {

	public $tablaCita = 'citaprueba';


	public function _construct() {
	
	}

	function buscarCitasHoy($fechaHoy)
	{

	   $this->db->select('TIME(start) as hora');
       $this->db->from($this->tablaCita);
       $this->db->where('DATE(start)',$fechaHoy);
       $this->db->where('estado =',1);
	   $consulta = $this->db->get();
	   
	   return $consulta->result();
	}



}

?>
