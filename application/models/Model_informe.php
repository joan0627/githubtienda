<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_informe extends CI_Model {

    function mesEnero($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',1);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesFebrero($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',2);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesMarzo($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',3);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesAbril($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',4);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesMayo($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',5);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesJunio($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',6);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesJulio($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',7);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesAgosto($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',8);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesSeptiembre($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',9);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesOctubre($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',10);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesNoviembre($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',11);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesDiciembre($ano){

        $this->db->select('sum(totalGlobal) as totalCompra');
        $this->db->from('compras'); 
        $this->db->where('MONTH(fechaRegistroCompra)',12);
        $this->db->where('YEAR(fechaRegistroCompra)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    /*INFORME DE VENTA DE PRODUCTOS*/

    function mesEneroV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',1);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);

        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesFebreroV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',2);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesMarzoV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',3);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesAbrilV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',4);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesMayoV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',5);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesJunioV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',6);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesJulioV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',7);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesAgostoV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',8);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesSeptiembreV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',9);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesOctubreV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',10);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesNoviembreV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',11);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesDiciembreV($ano){

        $this->db->select('sum(totalGlobal) as totalVenta');
        $this->db->from('venta'); 
        $this->db->where('MONTH(fechahora)',12);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }


    /*INFORME DE VENTA DE SERVICIOS*/

    function mesEneroVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',1);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesFebreroVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',2);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesMarzoVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',3);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesAbrilVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',4);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);

        $consulta = $this->db->get();
       


        return $consulta->result();
     
    }

    function mesMayoVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',5);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesJunioVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',6);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesJulioVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',7);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesAgostoVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',8);
        $this->db->where('estado',1);
        $this->db->where('YEAR(fechahora)',$ano);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesSeptiembreVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',9);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesOctubreVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',10);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();


        return $consulta->result();
     
    }

    function mesNoviembreVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',11);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();
    

        return $consulta->result();
     
    }

    function mesDiciembreVS($ano){

        $this->db->select('sum(totalGlobal) as totalVentaServicio');
        $this->db->from('ventaservicio'); 
        $this->db->where('MONTH(fechahora)',12);
        $this->db->where('YEAR(fechahora)',$ano);
        $this->db->where('estado',1);
        $consulta = $this->db->get();
    


        return $consulta->result();
     
    }

}

?>