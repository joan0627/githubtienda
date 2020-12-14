<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_inicio extends CI_Model {

 /*FUNCIONES PARA USUARIO*/
 function contarTodosUsuarios(){

    $this->db->select('count(idUsuario) as numUsuario');
    $this->db->from('usuario'); 

    $consulta = $this->db->get();
    return $consulta->result();
 }

 function contarUsuariosDeshabilitados(){

    $this->db->select('count(idUsuario) as numUsuario_deshabilitado');
    $this->db->from('usuario'); 
    $this->db->where('estado',0);
    $consulta = $this->db->get();
    return $consulta->result();
 }


 /*FUNCIONES PARA PRODUCTO*/
 function contarTodosProductos(){

   $this->db->select('count(idProducto) as numProducto');
   $this->db->from('producto'); 

   $consulta = $this->db->get();
   return $consulta->result();
}


function contarProductosHoy($fecha){

   $this->db->select('count(idProducto) as resgistros_hoy');
   $this->db->from('producto'); 
   $this->db->where('DATE(fechaRegistro)',$fecha);
   $consulta = $this->db->get();
   return $consulta->result();
}

/*FUNCIONES PARA CITA*/
function contarTodascitas(){

   $this->db->select('count(id) as numCitas');
   $this->db->from('citaprueba'); 

   $consulta = $this->db->get();
   return $consulta->result();
}


function contarCitasmes($fecha, $ano){

   $this->db->select('count(id) as resgistros_mes');
   $this->db->from('citaprueba'); 
   $this->db->where('MONTH(start)',$fecha);
   $this->db->where('YEAR(start)',$ano);
   $consulta = $this->db->get();
   return $consulta->result();
}



/*FUNCIONES PARA ventas*/
function contarTodasVentas(){

   $this->db->select('count(idFactura) as numVentas');
   $this->db->from('venta'); 
   $this->db->where('estado',1);
   $consulta = $this->db->get();
   return $consulta->result();
}

function contarTodasVentas_servicios(){

   $this->db->select('count(idFactura) as numVentas_servicio');
   $this->db->from('ventaservicio'); 
   $this->db->where('estado',1);
   $consulta = $this->db->get();
   return $consulta->result();
}

function sumarVentas(){

   $this->db->select('sum(totalGlobal) as totalventa');
   $this->db->from('venta'); 
   $this->db->where('estado',1);
   $consulta = $this->db->get();
   return $consulta->result();
}


function sumarVentas_servicios(){

   $this->db->select('sum(totalGlobal) as totalventaServicio');
   $this->db->from('ventaservicio'); 
   $this->db->where('estado',1);
   $consulta = $this->db->get();
   return $consulta->result();

}





}

?>