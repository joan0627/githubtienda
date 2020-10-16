<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public $tablaUsuario = 'usuario';
	public $nombreUsuario= 'nombreUsuario';
	
	public function login($username,$password)
	{
		$this->db->where('nombreUsuario', $username);
		$this->db->where('contrasena', $password);
		

		$resultados = $this->db->get('usuario');


		if($resultados->num_rows()>0)
		{
			 	return $resultados->row();;

			/*
			foreach($resultados	->result()as $row)
			{
				$sess = array('username'=>$row->username,'password'=>$row->password);

			}
			$this->session->get_userdata($sess);
			 redirect('welcome');
			 */
		}

		else
		{

			return false;
			//$this->session->set_flashdata('info','Nombre de usuario o contraseña incorrectos. Por favor verifique sus datos nuevamente.');
			// redirect('login');
		}
		}

	public function BuscarUsuario($nombreUsuario)
	{
		
	
		$this->db->select();
		$this->db->from($this->tablaUsuario);
		$this->db->where($this->nombreUsuario,$nombreUsuario);

		$consulta= $this->db->get();

		if($consulta->num_rows()>0)
		{
			return true;

		}
		else
		{
			return false;
		}
		

	}

	
		

}



