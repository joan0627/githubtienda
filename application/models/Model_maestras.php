

<?php

class Model_maestras extends Ci_model
{

	//Nombre de la tabla
	public $tablaTipoDocumento = 'tipodocumento';
	public $tablaCategoria = 'categoria';
	public $tablaMarca = 'marca';
	public $tablaPresentacion = 'presentacion';
	public $tablaUmedida = 'unidadmedida';
	public $tablaRaza = 'raza'; 
	public $tablaEspecie = 'especieproducto'; 


	//Nombre de la llave primaria
	public $tipoDocumentoPK = 'idTipoDocumento';

	

	/********************************************
	 *******Funciones de tipo documento**********
	 *******************************************/

        
    function BuscarTiposDocumentos()
	{

	   $this->db->select();
	   $this->db->from($this->tablaTipoDocumento);
	   $consulta = $this->db->get();
	   return json_encode($consulta->result());

	}

	

	function insertarTipoDocumento($datosTipoDocumento){

		$this->db->insert($this->tablaTipoDocumento, $datosTipoDocumento);
		 return $this->db->insert_id();
	}


		function borrar($id){
			$this->db->select();
			$this->db->from($this->tablaTipoDocumento);
			$this->db->where($this->tipoDocumentoPK,$id);
			$this->db->delete($this->tablaTipoDocumento);
	
		}

	function actualizarTipoDocumento($valorId, $valorDescripcion){

		$this->db->set('descripcion', $valorDescripcion);	
		$this->db->where($this->tipoDocumentoPK,$valorId);
		$this->db->update('tipodocumento');
	}

	/********************************************
	 **********Funciones de Categoria************
	 *******************************************/


	function BuscarCategorias()
	{

	   $this->db->select();
	   $this->db->from($this->tablaCategoria);
	   $consulta = $this->db->get();
	   return json_encode($consulta->result());

	}

	function insertarCategoria($data){

		$this->db->insert($this->tablaCategoria, $data);
		 return $this->db->insert_id();
	}


	function actualizarCategoria($valorId, $data){

		$this->db->set('descripcion', $data);	
		$this->db->where('idCategoria',$valorId);
		$this->db->update('categoria');
	}

	function borrarCategoria($id){
		$this->db->select();
		$this->db->from($this->tablaCategoria);
		$this->db->where('idCategoria',$id);
		$this->db->delete($this->tablaCategoria);

	}


	/********************************************
	 **********Funciones de Categoria************
	 *******************************************/


	function BuscarMarcas()
	{

	   $this->db->select();
	   $this->db->from($this->tablaMarca);
	   $consulta = $this->db->get();
	   return json_encode($consulta->result());

	}

	function insertarMarca($data){

		$this->db->insert($this->tablaMarca, $data);
		 return $this->db->insert_id();
	}


	function actualizarMarca($valorId, $data){

		$this->db->set('descripcionMarca', $data);	
		$this->db->where('idMarca',$valorId);
		$this->db->update('Marca');
	}


	
	function borrarMarca($id){
		$this->db->select();
		$this->db->from($this->tablaMarca);
		$this->db->where('idMarca',$id);
		$this->db->delete($this->tablaMarca);

	}


	/********************************************
	 **********Funciones de presentacion*********
	 *******************************************/


	function BuscarPresentacion()
	{

	   $this->db->select();
	   $this->db->from($this->tablaPresentacion);
	   $consulta = $this->db->get();
	   return json_encode($consulta->result());

	}

	function insertarPresentacion($data){

		$this->db->insert($this->tablaPresentacion, $data);
		 return $this->db->insert_id();
	}


	function actualizarPresentacion($valorId, $data){

		$this->db->set('descripcionPresentacion', $data);	
		$this->db->where('idPresentacion',$valorId);
		$this->db->update('presentacion');
	}


	
	function borrarPresentacion($id){
		$this->db->select();
		$this->db->from($this->tablaPresentacion);
		$this->db->where('idPresentacion',$id);
		$this->db->delete($this->tablaPresentacion);

	}




	/********************************************
	 **********Funciones de unidad medida********
	 *******************************************/


	function BuscarUmedida()
	{

	   $this->db->select();
	   $this->db->from($this->tablaUmedida);
	   $consulta = $this->db->get();
	   return json_encode($consulta->result());

	}

	function insertarUmedida($data){

		$this->db->insert($this->tablaUmedida, $data);
		 return $this->db->insert_id();
	}


	function actualizarUmedida($valorId, $data){

		$this->db->set('descripcionUnidadmedida', $data);	
		$this->db->where('idUnidadMedida',$valorId);
		$this->db->update('unidadmedida');
	}


	
	function borrarUmedida($id){
		$this->db->select();
		$this->db->from($this->tablaUmedida);
		$this->db->where('idUnidadMedida',$id);
		$this->db->delete($this->tablaUmedida);

	}


	/********************************************
	 **********Funciones dde raza****************
	 *******************************************/


	function BuscarRaza()
	{

	   $this->db->select();
	   $this->db->from($this->tablaRaza);
	   $consulta = $this->db->get();
	   return json_encode($consulta->result());

	}

	function insertarRaza($data){

		$this->db->insert($this->tablaRaza, $data);
		 return $this->db->insert_id();
	}


	function actualizarRaza($valorId, $data){

		$this->db->set('descripcionRaza', $data);	
		$this->db->where('idraza',$valorId);
		$this->db->update('raza');
	}


	
	function borrarRaza($id){
		$this->db->select();
		$this->db->from($this->tablaRaza);
		$this->db->where('idraza',$id);
		$this->db->delete($this->tablaRaza);

	}



	
	/********************************************
	 **********Funciones de especie**************
	 *******************************************/


	function BuscarEspecie()
	{

	   $this->db->select();
	   $this->db->from($this->tablaEspecie);
	   $consulta = $this->db->get();
	   return json_encode($consulta->result());

	}

	function insertarEspecie($data){

		$this->db->insert($this->tablaEspecie, $data);
		 return $this->db->insert_id();
	}


	function actualizarEspecie($valorId, $data){

		$this->db->set('descripcionEspecie', $data);	
		$this->db->where('idEspecieProducto',$valorId);
		$this->db->update('especieproducto');
	}


	
	function borrarEspecie($id){
		$this->db->select();
		$this->db->from($this->tablaEspecie);
		$this->db->where('idEspecieProducto',$id);
		$this->db->delete($this->tablaEspecie);

	}

}

?>