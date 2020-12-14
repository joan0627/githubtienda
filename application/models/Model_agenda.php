<?php

class Model_agenda extends Ci_model {

	public $tablaCita = 'citaprueba';
	public $idCitaPK= 'id';

	public $tablaDisponibilidad = 'disponibilidad';
	public $idDisponibilidadPK= 'idDisponibilidad';

	public $tablaCliente = 'cliente';


	public $tablaMascota = 'mascota';
	
	public $tablaServicio = 'servicio';
	public $tablaTiposervicio = 'tiposervicio';
	public $idTiposervicio='idTipoServicio';

	public $tablaEstado='estado';

	public $tablaFormaPago= 'formapago';

	public $tablaVenta = 'ventaservicio';

	public $tablaProducto = 'producto';

	public $tablaUnidadMedida = 'unidadmedida';

	public $tablaHistorial = 'detallehistorialmascota';

	public function _construct() {
	
	}

	//Función para cargar el historial de citas y buscar citas en el campo de busqueda
	function Historialcitas($buscar) {
	
		//$this->db->select();
		$this->db->select('c.*, s.nombreServicio, cl.nombre, m.nombreMascota, e.descripcion as nombreEstado ');
		$this->db->from('citaprueba c');
		$this->db->join('servicio s', ' s.idServicio = c.idservicio');
		$this->db->join('mascota m', ' m.idMascota = c.mascota');
		$this->db->join('cliente cl', ' m.documentoCliente = cl.documento');			
		$this->db->join('estado e', ' e.idEstado = c.estado');	
		$this->db->or_like("c.id",$buscar,'none');
		$this->db->or_like("s.nombreServicio",$buscar);
		$this->db->or_like("c.title",$buscar);
		$this->db->or_like("cl.nombre",$buscar,'none');
		$this->db->or_like("m.nombreMascota",$buscar);
		$this->db->or_like("c.start",$buscar);
		$this->db->order_by('c.start', 'DESC');
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
	
	function buscarClientes()
	{

		$this->db->select();
		$this->db->from($this->tablaCliente);
		$this->db->where('estado <> ', 0);
		$consulta = $this->db->get();
		
		return $consulta->result();
	}

		//Cargar eventos de disponibilidad
		function BuscarDisponibilidad()
		{
	
		   $this->db->from($this->tablaDisponibilidad);
		   $consulta = $this->db->get();
		   
		   return $consulta->result();
		}

	//Cargar eventos de citas
	function BuscarCitas()
	{

	  // $this->db->select("id, title, descripcion, color, textColor, DATE_FORMAT(start,'%d-%m-%Y %T') as start,DATE_FORMAT(end,'%d-%m-%Y %T') as end");
	   $this->db->from($this->tablaCita);
	   $consulta = $this->db->get();
	   
	   return $consulta->result();
	}



	//Función para consultar si hay disponibilidad
	function verificardisponibilidad($start, $end, $fecha)
	{
	
		$this->db->select('start, end');
		
		$this->db->where('DATE(start)',$fecha);
		//EXTRAER FECHA EN WHERE 
		//$this->db->where(" start AND end BETWEEN $start AND $end");
		//$this->db->where( "$accommodation BETWEEN $minvalue AND $maxvalue", NULL, FALSE );

		
		//$this->db->where('idDisponibilidad <> ', $id);
		$consulta = $this->db->get('disponibilidad');

		/*if($consulta->num_rows() > 0)
		{

			return true;
		}

		else
		{
			return false;
		}*/

		
		return $consulta->result();
		
	}



	//Función para consultar si ya existe una cita en esa fecha y hora
	function verificar($id, $start ,$end,$idservicio,$estado)
	{

	//	SELECT * FROM citaprueba as c  WHERE '2020-12-01 08:35:00' BETWEEN c.start and c.end
		//SELECT `start`, `end` FROM `citaprueba` WHERE 2020-12-01 22:33:00 BETWEEN 'start, end' AND `id` <> '
		$this->db->select('start , end , idservicio');
		$this->db->from($this->tablaCita);
		//$this->db->where('start <= ' , $end);
		//$this->db->where('end <=' , $start);
		//$this->db->or_where('end <=' , $start);
		////$this->db->where('start <=' , $start); // 2020-11-28 08:00  ** 2020-11-28 08:12
		//$this->db->where('DATE(start)',$fecha);
		//$this->db->where("'$start' BETWEEN start AND end OR '$end' BETWEEN start AND end");
		//$this->db->or_where("'$end' <= end");
		//$this->db->where('end <=' , $end); 
		//	$this->db->where('start <=' , $start); // 2020-11-28 08:30   ** 2020-11-28 8:25
		$this->db->where('id <> ', $id);
		$this->db->where('estado <>',4 );
		$this->db->where('estado <>',5 );
		$this->db->where('idservicio', $idservicio);
	
		$consulta = $this->db->get();


		return $consulta->result();

		/*if($consulta->num_rows() > 0)
		{

			return true;
		}

		else
		{

			return false;
		}*/
		
	}



	//**DISPONIBILIDAD */

	//Función para registrar la disponibilidad
	function insertardisponibilidad($datosDisponibilidad)
	{

		$this->db->insert($this->tablaDisponibilidad, $datosDisponibilidad);
		return $this->db->insert_id();
		
	}
	//Función para actualizar la disponibilidad
	function actualizardisponibilidad($idDisponibilidad, $datosDisponibilidad)
	{
		
		$this->db->where($this->idDisponibilidadPK ,$idDisponibilidad);
		$this->db->update($this->tablaDisponibilidad, $datosDisponibilidad);
	}

	//Función para eliminar una disponibilidad
	function eliminardisponibilidad($idDisponibilidad)
	{
		
		$this->db->where('idDisponibilidad', $idDisponibilidad);
		$this->db->delete($this->tablaDisponibilidad);

	}


	//**DISPONIBILIDAD */




	//Función para registrar una cita
	function insertarCita($datosCita)
	{

		$this->db->insert($this->tablaCita, $datosCita);
		return $this->db->insert_id();
		
	}

	//Función para eliminar una cita
	function eliminarcita($idCita)
	{
		
		$this->db->where('id', $idCita);
		$this->db->delete($this->tablaCita);

	}

	//Función para buscar y llenar los campos de servicio y tipo de servicio
	function buscarservicios()
	{
		$this->db->select();
		$this->db->from($this->tablaServicio);
		

		$consulta = $this->db->get();
		return $consulta->result();
		
	}


	//Función para llenar los campos de servicio y tipo de servicio
	function llenarservicio($id)
	{
		$this->db->select();
		$this->db->from($this->tablaServicio);
		$this->db->join($this->tablaTiposervicio, 'tiposervicio.idTipoServicio = servicio.idTipoServicio');
		$this->db->where('idServicio', $id);

		$consulta = $this->db->get();
		return $consulta->result();
		
	}


	//Función para buscar y llenar las mascotas del cliente
	function llenarmascotas($documento) {

        $this->db->select();
		$this->db->from('mascota as m');
		//$this->db->join('tipomascota as tm', 'm.idTipoMascota = tm.idTipoMascota');
		//$this->db->join('raza as r', 'm.idraza = r.idraza');
		$this->db->where('documentoCliente',$documento);
		$this->db->order_by('m.nombreMascota','ASC');

		$consulta = $this->db->get();
		
		return $consulta->result();
		
	}


	//Función para cargar la mascota seleccionada
	function cargarmascota($mascota)
	{
		$this->db->select();
		$this->db->from('mascota as m');
		$this->db->join('tipomascota as tm', 'm.idTipoMascota = tm.idTipoMascota');
		$this->db->join('raza as r', 'm.idraza = r.idraza');	
		$this->db->where('idMascota', $mascota);


		$consulta = $this->db->get();
		return $consulta->result();
		
	}

		//Función para cargar los estados de la cita
		function cargarEstado($idCita)
		{
			$this->db->select();
			$this->db->from('citaprueba as c');
			$this->db->join('estado as e', 'c.estado = e.idEstado');
			$this->db->where('id', $idCita);
	
	
			$consulta = $this->db->get();
			return $consulta->result();
			
		}
	

	//Función para actualizar una cita
	function actualizarcita($idCita, $datosCita)
	{
		
		$this->db->where($this->idCitaPK ,$idCita);
		$this->db->update($this->tablaCita, $datosCita);
	}


	/***
	 * Para traer los servicios
	*/

	function buscartiposervicios() {

		$this->db->select();
		$this->db->from($this->tablaTiposervicio);
	
		$consulta = $this->db->get();
		return $consulta->result();
		
	}

	function buscarserviciosportipo($idTipo) {

	
		$this->db->where($this->idTiposervicio ,$idTipo);
		$this->db->order_by('nombreServicio','ASC');
		$consulta = $this->db->get('servicio');
		
		$respuesta = '<option hidden value ="">-Seleccione un servicio-</option>';

		foreach($consulta->result() as $row)
		{
			$respuesta .= '<option value="'.$row->idServicio.'">'.$row->nombreServicio.'</option>';
		}


	
		return $respuesta;

	
		
	}

	function buscarmascotas($documento) {

        $this->db->select('m.idMascota, m.nombreMascota');
		$this->db->from('mascota as m');
		//$this->db->join('tipomascota as tm', 'm.idTipoMascota = tm.idTipoMascota');
		//$this->db->join('raza as r', 'm.idraza = r.idraza');
		$this->db->where('documentoCliente',$documento);
		$this->db->order_by('m.nombreMascota','ASC');

		$consulta = $this->db->get();
		
		$respuesta= '<option hidden value ="">-Seleccione una mascota-</option>';

		foreach($consulta->result() as $row)
		{
			$respuesta.= '<option value="'.$row->idMascota.'">'.$row->nombreMascota.'</option>';
			
			
		}

		

		return $respuesta;
		
	}

	function buscarcaracteristicas($idMascota) {

        $this->db->select('tm.descripcion, r.descripcionRaza');
		$this->db->from('mascota as m');
		$this->db->join('tipomascota as tm', 'm.idTipoMascota = tm.idTipoMascota');
		$this->db->join('raza as r', 'm.idraza = r.idraza');
		$this->db->where('idMascota',$idMascota);
	
		$consulta = $this->db->get();

		return $consulta->result();

	}



	/***
	 * Para traer los estados de la cita
	*/

	function buscarestados() {

		$this->db->select();
		$this->db->from($this->tablaEstado);
	
		$consulta = $this->db->get();
		return $consulta->result();
		
	}

	/***
	 * Para cargar las forma de pago
	*/

	function buscarformapago() {

		$this->db->select();
		$this->db->from($this->tablaFormaPago);
	
		$consulta = $this->db->get();
		return $consulta->result();
		
	}

		/***
	 * Para cargar buscar el precio del servicio
	*/

	function buscarprecio($idServicio) {

		$this->db->select('precio');
		$this->db->from($this->tablaServicio);
		$this->db->where('idServicio',$idServicio);
		
		$consulta = $this->db->get();
		return $consulta->result();
		
	}

	/***
	 * Para registrar el encabezado de la venta de la cita
	*/

	function registrarventa($datosventa) {

		$this->db->insert($this->tablaVenta, $datosventa);
		return $this->db->insert_id();
		
	}



	/*Para cargar los productos para el historial de vacunación*/
	
	function cargarproductos() {

		$this->db->select();
		$this->db->from($this->tablaProducto);
		$this->db->where('estado = ',1);
		$this->db->where('idCategoria = ',1);
		$this->db->or_where('idCategoria = ',2);
		$consulta = $this->db->get();
		return $consulta->result();
		
	}


	/*Para cargar las unidades de medida para el historial de vacunación*/
	
	function cargarunidadmedida() {

		$this->db->select();
		$this->db->from($this->tablaUnidadMedida);
	
		
		$consulta = $this->db->get();
		return $consulta->result();
		
	}


		/*Para registrar el historial de vacunación*/
	

	function registrarhistorial($datoshistorial) {

		$this->db->insert($this->tablaHistorial, $datoshistorial);
		return $this->db->insert_id();
		
	}



}


?>
