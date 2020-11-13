$(document).ready(function () {



		/***********************************************************/
		/***************Registrar Cliente y mascotas***************/
		/***********************************************************/


	//Inicializar el DataTable.
	var table = $("#tableDetalleMascota").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},
		bInfo: false,
		bFilter: false,
		bPaginate: false,
		dom: "Bfrtip",

		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [8] },
			{ className: "hide_column", targets: [9] },
			{ className: "hide_column", targets: [10] },
			{ className: "hide_column", targets: [11] },
			{ className: "hide_column", targets: [12] },
			{ className: "hide_column", targets: [13] },
			//{ className: "hide_column", targets: [14] },
		],

		buttons: [
			{
				text: "<i class='fas fa-plus'></i> Añadir mascota",
				className: "btn btn-success",

				action: function (e, dt, node, config) {
					$("#modalMascota").modal("show");
					$("#formMascota")[0].reset();
					$("#btnAnadirMascota").attr("action", "addFila");
					validar_formulario.resetForm();
				},
			},
		],

		columns: [
			{ title: "Tipo" },
			{ title: "Nombre" },
			{ title: "Raza" },
			{ title: "sexo" },
			{ title: "Peso", width: 110 },
			{ title: "Cumpleaños" },
			{ title: "Edad", width: 110 },
			{ title: "Observación" },
			{ title: "Unidad" },
			{ title: "peso" },
			{ title: "edad" },
			{ title: "tiempo" },
			{ title: "tipomascota" },
			{ title: "raza1" },
			//{ title: "id" },

			{
				title: "Acción",

				//user 'render' to append Edit/Delete buttons for each entry
				render: (
					data
				) => `<button action='edit' data-toggle='tooltip' title='Editar'class='editarMascota btn btn-primary btn-sm'> <i class='fas fa-pencil-alt'></i></button>			
					<button data-toggle='tooltip' title='Quitar'class='QuitarMascota btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i></button>`,
			},
		],
	});
	

	/**
	 *
	 * Declaración de validaciones del formulario
	 *
	 *
	 **/

	 //reglas de validación del form de mascota
	var validar_formulario = $("#formMascota").validate({
		ignore: [],
		rules: {
			tipoMascota: { required: true },
			nombreM: { required: true },
			razaM: { required: true },
			sexoM: { required: true },
			unidadMascota: { required: true },
			tiempoM: { required: true },
			pesoM: { required: true, min: 0, number: true },
			edadM: { required: true },

		},

		messages: {
			tipoMascota: "El campo tipo de mascota es obligatorio.",
			nombreM: "El campo nombre es obligatorio.",
			razaM: "El campo raza es obligatorio.",
			sexoM: "El campo sexo es obligatorio.",
			tiempoM: "El campo tiempo es obligatorio.",
			unidadMascota: "El campo unidad de medida es obligatorio.",
			pesoM: {
				required: "El campo peso es obligatorio.",
				min: "El campo peso no puede ser menor a 0.",
				number: "Ingresa un numero valido.",
			},
			edadM: {
				required: "El campo edad es obligatorio.",
				min: "El campo edad no puede ser menor a 0.",
				number: "Ingresa un numero valido.",
			},
		
		},
		errorElement: "p",
	});


	


	jQuery.validator.addMethod("noSpace", function(value, element) { 
	return value.indexOf(" ") < 0 && value != ""; });
	  

	 //reglas de validación del form de cliente
	var validar_form = $("#form_registroCliente").validate({
		ignore: [],
		rules: {
			tipoDocumentoC: { required: true },
			//documentoC: { required: true, noSpace: true},
			nombreC: { required: true },
			celularC: { required: true },
			correoC: {email:true},

		},

		messages: {

			tipoDocumentoC: "El campo tipo de documento es obligatorio.",

			/*documentoC: {
				required: "El campo documento es obligatorio.",
				noSpace: "Ingresa un valor valido, verifique que no tenga espacios en blanco.",
			},*/

			nombreC: "El campo nombre es obligatorio.",
			celularC: "El campo celular es obligatorio.",
			correoC: "Ingrese un correo valido.",

			

		
		},
		errorElement: "p",
	});


	/**
	 *
	 * Función para agregar y actualizar datos a la tabla detalle.
	 *
	 *
	 **/

	//Cuando se presiona el boton añadir se ejecuta este codigo.
	$("#btnAnadirMascota").on("click", function (ev) {
		ev.preventDefault();

		if (validar_formulario.form()) {
			//Cuando se presiona el boton añadir mascota hace las validaciones y
			// agrega y dibuja la tabla.
			if ($(this).attr("action") == "addFila") {


					table.row
					.add([
						$('#tipoMascota option:selected').text(),
						$("#nombreM").val(),
						$('#razaM option:selected').text(),
						$("#sexoM").val(),
						$("#pesoM").val() + " " + $("#unidadM option:selected").text(),
						$("#cumpleanosM").val(),
						$("#edadM").val() + " " + $("#tiempoM").val(),
						$("#observacionesM").val(),
						$('#unidadM option:selected').val(),
						$("#pesoM").val(),
						$("#edadM ").val(),
						$("#tiempoM").val(),
						$("#tipoMascota option:selected").val(),
						$("#razaM option:selected").val(),
						

					])
					.draw();
					
				$("#modalMascota").modal("toggle");
			}

			//Cuando se presiona el boton añadir compara que action trae, el action confirmEdit,
			//Se declara más abajo
			if ($(this).attr("action") == "confirmEdit") {
				//Catura lo datos que actualizamos y redibuja la tabla.
				table
					.row($(this).attr("rowindex"))
					.data([
						$('#tipoMascota option:selected').text(),						
						$("#nombreM").val(),
						$('#razaM option:selected').text(),
						$("#sexoM").val(),
						$("#pesoM").val() + " " + $("#unidadM option:selected").text(),
						$("#cumpleanosM").val(),
						$("#edadM").val() + " " + $("#tiempoM").val(),
						$("#observacionesM").val(),
						$('#unidadM option:selected').val(),
						$("#pesoM").val(),
						$("#edadM ").val(),
						$("#tiempoM").val(),
						$("#tipoMascota option:selected").val(),
						$("#razaM option:selected").val(),
					])
					.draw();

				$("#modalMascota").modal("toggle");

				//Se limpia la tabla, setiando los campos a vacio.
					$("#tipoMascota").val("");
					$("#nombreM").val("");
					$("#razaM").val(""),
					$("#sexoM").val(""),
					$("#cumpleanosM").val(""),
					$("#edadM").val(""),
					$("#tiempoM").val(""),
					$("#observacionesM").val(""),
					$("#unidadM ").val(""),
					$("#pesoM").val(""),
					$("#edadM ").val(""),
					$("#tiempoM").val(""),
				
					$("#btnAnadirMascota").attr("action", "addFila");
			}

			//Esta función se desencadena al presionar el boton editar.
			$("#tableDetalleMascota").on(
				"click",
				'tbody tr button[action="edit"]',
				function (ev) {
					ev.preventDefault();
					validar_formulario.resetForm();
					$("#modalMascota").modal("show");

					//Obtiene los datos de la fila afectada.
					const row = table.row($(event.target).closest("tr"));

					// obtiene la fila afectada. index () y agrega eso a los atributos del botón 'Enviar'.
					$("#btnAnadirMascota").attr("rowindex", row.index());

					//Al boton Añadir en el atributo action lo hacemos igual a "confirmEdit".
					$("#btnAnadirMascota").attr("action", "confirmEdit");

					//Setiamos los valores que vamos a mandar a sus respectivos campos.
					//$("#tipoMascota").val(row.data()[0]);
					$("#nombreM").val(row.data()[1]);					
					$("#sexoM").val(row.data()[3]);
					$("#cumpleanosM").val(row.data()[5]);
					$("#observacionesM").val(row.data()[7]);
					$("#unidadM").val(row.data()[8]);
					$("#pesoM").val(row.data()[9]);
					$("#edadM").val(row.data()[10]);
					$("#tiempoM").val(row.data()[11]);
					$("#tipoMascota").val(row.data()[12]);
					$("#razaM").val(row.data()[13]);
					
	
				}
			);
		}
	});

	/**
	 *
	 * Función quitar detalle del cliente.
	 *
	 */

	$("#tableDetalleMascota").on("click", ".QuitarMascota", function () {
		var table = $("#tableDetalleMascota").DataTable();
		let $tr = $(this).closest("tr");
		
		// Le pedimos al DataTable que borre la fila

		$("#tableDetalleMascota tbody tr").each(function () {

				$(this).closest("tr").removeClass("selected");
		
		});

		table.row($tr).remove().draw(false);
	});


	/**
	 *
	 * Función Registrar cliente y detalle mascota
	 *
	 *
	 */

	$("#btnRegistroCliente").click(function (ev) {
		ev.preventDefault();

		var tipodocumento = $("#tipoDocumentoC").val();
		var documento = $("#documentoC").val();
		var nombreC = $("#nombreC").val();
		var telefono = $("#telefonoC").val();
		var celular = $("#celularC").val();
		var direccion = $("#direccionC").val();
		var correo = $("#correoC").val();


		var tabladetalleMascota = $("#tableDetalleMascota").DataTable();

		if (validar_form.form()) {
			//asi se comprueba si el form esta validado o no
			if (tabladetalleMascota.rows().count() > 0) {
				Swal.fire({
					title: "¡Atención!",
					text: "¿Estás seguro que deseas registrar el cliente "+ nombreC +"?",
					type: "question",
					showCancelButton: true,
					confirmButtonColor: "#28a745",
					cancelButtonColor: "#28a745",
					confirmButtonText: "Si",
					cancelButtonText: "No",
				}).then((result) => {
					if (result.value) {

	
						$.ajax({
							type: "POST",
							url: "/tienda/Cliente/registro_Cliente/",
							data: {
								tipodocumento: tipodocumento,
								documento: documento,
								nombreC: nombreC,
								telefono: telefono,
								celular: celular,
								direccion: direccion,
								correo: correo,
							},

							
							success: function () {

								//CODIGO PARA REGISTRAR EL DETALLE
								$("#tableDetalleMascota tbody tr").each(function () {
								
									var tipomascota = $(this).closest("tr").find("td:eq(12)").text();
									var nombreM = $(this).closest("tr").find("td:eq(1)").text();
									var sexo = $(this).closest("tr").find("td:eq(3)").text();
									var cumpleanos = $(this).closest("tr").find("td:eq(5)").text();
									var observaciones = $(this).closest("tr").find("td:eq(7)").text();
									var unidadMedida = $(this).closest("tr").find("td:eq(8)").text();
									var peso = $(this).closest("tr").find("td:eq(9)").text();
									var edad = $(this).closest("tr").find("td:eq(10)").text();
									var tiempo = $(this).closest("tr").find("td:eq(11)").text();
									var tipomascota = $(this).closest("tr").find("td:eq(12)").text();
									var raza = $(this).closest("tr").find("td:eq(13)").text();
									var documento = $("#documentoC").val();

									var numRows= tabladetalleMascota.rows().count();
								
									$.ajax({
										type: "POST",
										url: "/tienda/Cliente/registro_mascota/",
										data: {
											tipomascota: tipomascota,
											nombreM: nombreM,
											raza: raza,
											sexo: sexo,
											cumpleanos: cumpleanos,
											observaciones: observaciones,
											unidadMedida: unidadMedida,
											peso: peso,
											edad: edad,
											tiempo: tiempo,
											documento:documento,
											numRows:numRows
											
										},

										

										success: function () {
											Swal.fire({
												title: "¡Proceso completado!",
												text: "El cliente " +nombreC+" se ha registrado exitosamente.",
												type: "success",
												confirmButtonColor: "#28a745",
											})
										},

										error: function () {
											Swal.fire({
												title: "¡Proceso no completado!",
												text: "El cliente no se pudo registrar.",
												type: "warning",
												confirmButtonColor: "#28a745",
											});
											
											
											// Este codigo se ejecuta cuando hay un error a nivel de programación
											$.ajax({
												type: "POST",
												url: "/tienda/Cliente/Eliminar_datos/",
												data: {
													documento:documento
													
												},


											});
											/*Se debe proceder a eliminar el registro del encabezado fallido 
											
											se realizaria el envio de el id de la compra para eliminar el ultimo registro,
											es decir, el registro fallido
											MI TRABAJO AQUI ESTA HECHO ADIOS
											PD: Lo envia por ajax
									
											*/ 
										},
										statusCode: {
											400: function (data) {
												var json = JSON.parse(data.responseText);
												Swal.fire("¡Error!", json.msg, "error");
											},
										},
									});
								});
							},//

						});
						
					}
				});
			} else {
				Swal.fire({
					title: "¡Proceso no completado!",
					text: "No se puede registrar por que no hay una mascota en la tabla",
					type: "warning",
					confirmButtonColor: "#28a745",
				});
			}
		}
	});





			/***********************************************************/
			/***************Actualizar Cliente y mascotas***************/
			/***********************************************************/


			//Inicializar el DataTable.
	var tablaActualizar = $("#ActualizarTablaDetalleMascota").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},
		bInfo: false,
		bFilter: false,
		bPaginate: false,
		dom: "Bfrtip",
/*
		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [8] },
			{ className: "hide_column", targets: [9] },
			{ className: "hide_column", targets: [10] },
			{ className: "hide_column", targets: [11] },
			{ className: "hide_column", targets: [12] },
			{ className: "hide_column", targets: [13] },
			//{ className: "hide_column", targets: [14] },
		],
		*/

		buttons: [
			{
				text: "<i class='fas fa-plus'></i> Añadir mascota",
				className: "btn btn-success",

				action: function (e, dt, node, config) {
					$("#modalActualizarMascota").modal("show");
				//	$("#formMascota")[0].reset();
					//$("#btnAnadirMascota").attr("action", "addFila");
					//validar_formulario.resetForm();
				},
			},
		],

		columns: [
			{ title: "Tipo" },
			{ title: "Nombre" },
			{ title: "Raza" },
			{ title: "sexo" },
			{ title: "Peso", width: 110 },
			{ title: "Cumpleaños" },
			{ title: "Edad", width: 110 },
			{ title: "Observación" },
			//{ title: "Unidad" },
			//{ title: "peso" },
			//{ title: "edad" },
			//{ title: "tiempo" },
			//{ title: "tipomascota" },
			//{ title: "raza1" },
			//{ title: "id" },

			{
				title: "Acción",

				//user 'render' to append Edit/Delete buttons for each entry
				render: (
					data
				) => `<button action='edit' data-toggle='tooltip' title='Editar'class='editarMascota btn btn-primary btn-sm'> <i class='fas fa-pencil-alt'></i></button>			
					<button data-toggle='tooltip' title='Quitar'class='QuitarMascota btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i></button>`,
			},
		],
	});




});
