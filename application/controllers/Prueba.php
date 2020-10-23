<?php

class Prueba extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login');
    }

    public function index()
    {
        $datos["idUsuario"]=63;
        $datos["contrasena"]=md5('123456789');

        $res= $this->Model_login->actualizarpassword($datos["idUsuario"],$datos["contrasena"]);
	   var_dump($res);
        $this->load->view('superadministrador/formularios/validationprueba');
    
    }

    
}
    

?>