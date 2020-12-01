<?php

class model_usuario extends Ci_model {

	public $tablaUsuario = 'usuario';
	public $idUsuarioPK= 'idUsuario';

	public $tablaRol= 'rol';
	public $idRol= 'idRol';


	public function _construct() {
	
	}

	function BuscarRoles()
	{

	   $this->db->select();
	   $this->db->from($this->tablaRol);
	   $consulta = $this->db->get();
	   
	   return $consulta->result();
	}

	// Aqui comieza las consultas sql de usuario

	function insertarUsuario($datosUsuario){

		$this->db->insert($this->tablaUsuario, $datosUsuario);
		return $this->db->insert_id();
	}


	/*function cargarAll()
	{
			$this->db->select();
			$this->db->from($this->tablaUsuario);
			$consulta = $this->db->get();
			return $consulta->result();
	}*/
	

		//Función para buscar registros en el campo de busqueda
		function BuscarDatos($buscar) {

			$this->db->select();
			$this->db->from($this->tablaUsuario);
			$this->db->or_like("idUsuario",$buscar, 'none'); 
			$this->db->or_like("nombre",$buscar);
			$this->db->or_like("nombreUsuario",$buscar, 'none');
			$this->db->or_like("idRol",$buscar);
			$this->db->or_like("estado",$buscar, 'none');
			//$this->db->or_where('estado', $buscar);
			$this->db->order_by('fechahora', 'DESC');
			$consulta = $this->db->get();
	
			if($consulta->num_rows()==0)
			{
	
				$this->session->set_flashdata('busqueda', 'No hay resultados ');
	
			}
			else
			{
				$this->session->set_flashdata('busqueda', '');
			}
			return $consulta->result();
	
			
			
		}

			// Función para llamar los datos de detalle de la tabla proveedor

	function buscarDatosUsuario($idUsuario){
		$this->db->select();
		//$this->db->from($this->tablaProveedor);
		$this->db->join($this->tablaRol, 'usuario.idRol = rol.idRol');
		$resultado = $this->db->get_where('usuario', array('usuario.idUsuario' => $idUsuario), 1);

		
		return $resultado->row_array();

	}

		//Función para Actualizar un usuario
		function actualizarUsuario($idUsuario, $datosUsuario)
		{
		
			$this->db->where($this->idUsuarioPK ,$idUsuario);
			$this->db->update($this->tablaUsuario, $datosUsuario);
		}

	


	// Aqui comieza las consultas sql para la tabla usuario
	function BuscarUsuario ($id) {

		$this->db->select();
		$this->db->from($this->tablaUsuario);
		$this->db->where($this->idUsuarioPK,$id);

		$consulta= $this->db->get();

		if($consulta->num_rows()==0)
		{

			return false;
		}

		else
		{

			return $consulta->row();
		}

	}


	function BuscarTodosUsuarios() {

		$this->db->select();
		$this->db->from($this->tablaUsuario);

		$consulta = $this->db->get();
		return $consulta->result();
		
	}

	function actualizarEstado($idUsuario, $estado){

		$this->db->set('estado', $estado);	
		$this->db->where($this->idUsuarioPK ,$idUsuario);
		$this->db->update($this->tablaUsuario);
	}


	/*function borrar($documento){
		$this->db->select();
		$this->db->from($this->tablaPersona);
		$this->db->join($this->tablaTipoDocumento, 'persona.tipoDocumento = tipodocumento.idTipoDocumento');
		$this->db->join($this->tablaUsuario, 'persona.documento = usuario.personaDocumento');
		$this->db->join($this->tablaTipoPersona, 'persona.tipoPersona = tipopersona.idTipoPersona');
		$this->db->where($this->documentoPK,$documento);
		$this->db->delete($this->tablaPersona);


	}*/





}

?>
