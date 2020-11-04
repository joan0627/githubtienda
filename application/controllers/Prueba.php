<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Prueba extends CI_Controller {

	

	public function index()
	{

    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('<h1>Hola este es un pdf generado con html!</h1>');
    $mpdf->Output();
	
	}

}
