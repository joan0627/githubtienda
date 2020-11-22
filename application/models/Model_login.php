<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public $tablaUsuario = 'usuario';
	public $idUsuarioPK = 'idUsuario';

	public $tablaRespuesta = 'respuesta';
	public $respuesta ='respuesta.respuesta';
	public $nombreUsuario= 'nombreUsuario';
	public $tablaPreguntaSeguridad = 'preguntaseguridad';
	
	public function login($username,$password)
	{
		$this->db->where('nombreUsuario', $username);
		$this->db->where('contrasena', $password);
		

		$resultados = $this->db->get('usuario');


		if($resultados->num_rows()>0)
		{
			 	return $resultados->row();

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
			
				$this->db->select();
				$this->db->from($this->tablaUsuario);
				$this->db->join($this->tablaRespuesta, 'respuesta.idUsuario = usuario.idUsuario');
				$this->db->join($this->tablaPreguntaSeguridad, 'respuesta.idPreguntaSeguridad = preguntaseguridad.idPreguntaSeguridad');
				$this->db->where($this->nombreUsuario,$nombreUsuario);
				$consulta2= $this->db->get();

				if($consulta2->num_rows()>0)
				{

					return	$verificacion='ExistePregunta';
				
					

				}
				else
				{
					return	$verificacion='NoExistePregunta';
					
				}
			
			
		}

		else
		{
			return $verificacion='NoExisteUsuario';
		}
		
		

		

		
		

	}


	public function traerPregunta($nombreUsuario)
	{
		
		
		$this->db->select();
		$this->db->from($this->tablaUsuario);
		$this->db->join($this->tablaRespuesta, 'respuesta.idUsuario = usuario.idUsuario');
		$this->db->join($this->tablaPreguntaSeguridad, 'respuesta.idPreguntaSeguridad = preguntaseguridad.idPreguntaSeguridad');
		$this->db->where($this->nombreUsuario,$nombreUsuario);
	

		$resultado= $this->db->get();

		return $resultado->row_array();

		

	}
		
	public function actualizarpassword($idUsuario, $contrasenaNueva){
	
			$this->db->set('contrasena', $contrasenaNueva);
			$this->db->where('idUsuario', $idUsuario);
			$this->db->update('usuario'); 
	
			
	}
	

	public function setlogueos($idUsuario, $logueo){

		$this->db->set('logueos', $logueo);
		$this->db->where('idUsuario', $idUsuario);
		$this->db->update('usuario'); 	
	
	}

	public function consultalogueos($idUsuario){
		$this->db->select('logueos');
		$this->db->where('idUsuario', $idUsuario);
		$resultado = $this->db->get('usuario');	

		return $resultado->row_array();
	
	}

	public function buscarPreguntasSeguridad()
	{
		$this->db->select();
		$this->db->from($this->tablaPreguntaSeguridad);
		$consulta = $this->db->get();
		
		return $consulta->result();
	}


	
	function insertarRespuesta($datos){

		$this->db->insert($this->tablaRespuesta, $datos);
		return $this->db->insert_id();
	}


	public function contrasenaActual($contraseñaactual)
	{
		$this->db->select();
		$this->db->from($this->tablaUsuario);
		$this->db->where('contrasena', $contraseñaactual);

		$consulta = $this->db->get();
		return $consulta->result();
	}


	public function consultacontrasena($idUsuario)
	{
		$this->db->select();
		$this->db->from($this->tablaUsuario);
		$this->db->where('idUsuario',$idUsuario);

		$consulta = $this->db->get();
		return $consulta->result();
	}

	public function actualizarPreguntaRespuesta($idUsuario,$data){
	
		$this->db->where('idUsuario', $idUsuario);
		$this->db->update('respuesta', $data);
		
}





}