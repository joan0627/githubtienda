<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pruebain extends CI_Controller {


public function __construct()

{
	parent::__construct();
	$this->load->library('pdf_report');



}
	public function index() {	

		$this->load->view('superadministrador/informes/v_report');
		
	}
}