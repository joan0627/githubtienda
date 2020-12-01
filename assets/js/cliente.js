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

					var max_chars = 0;

					$(".contadorR").hide();

					$("#observacionesM").keyup(function () {
						$(".contadorR").show();
						var chars = $(this).val().length;
						var diff = max_chars + chars;
						$("#contadorR").html(diff);
					});
				},
			},
		],

		columns: [
			{ title: "Especie" },
			{ title: "Nombre" },
			{ title: "Raza" },
			{ title: "sexo" },
			{ title: "Peso", width: 110 },
			{ title: "Cumpleaños" },
			{ title: "Edad"},
			{ title: "Observaciones" },
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
			nombreM: { required: true, onlyChar:true },
			razaM: { required: true },
			sexoM: { required: true },
			unidadMascota: { required: true },
			tiempoM: { required: true },
			pesoM: { required: true, min: 0, number: true },
			edadM: {  required: true, min: 0, number: true  },
		},

		messages: {

			tipoMascota: "El campo tipo de mascota es obligatorio.",
			nombreM: {

				required: "El campo nombre es obligatorio."	,
				onlyChar :"El campo nombre soló puede contener alfabéticos y espacios."
			},
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

	//Add reglas manuales
	jQuery.validator.addMethod("noSpace", function (value, element) {
		return value.indexOf(" ") < 0 && value != "";
	});



	jQuery.validator.addMethod("noCharacters", function(value, element) { 
		return this.optional(element) || /^[a-z, 0-9 ]+$/i.test(value); 
	}); 


	jQuery.validator.addMethod("onlyChar", function(value, element) { 
		return this.optional(element) || /^[a-z, " "]+$/i.test(value); 
	}); 


	//reglas de validación del form de cliente
	var validar_form = $("#form_registroCliente").validate({
		ignore: [],

		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {

				documentoC: {
					required: true,					
					noSpace: true,
					noCharacters: true,
					
					
					remote: {
						url:"/tienda/cliente/documento_exist",
						type: "post",
		 
					
					},

				},
		
			tipoDocumentoC: { required: true },



			nombreC: { required: true, onlyChar :true,},
			celularC: { required: true },
			correoC: { email: true },
		},

		messages: {
			tipoDocumentoC: "El campo tipo de documento es obligatorio.",

			documentoC: {
				//checkExists: "igual",
				
            	required: "El campo documento es obligatorio.",
				noSpace: "El campo documento sólo puede contener caracteres alfanuméricos",
				noCharacters: "El campo documento sólo puede contener caracteres alfanuméricos.",
				remote: function() { return $.validator.format("El documento ya se encuentra registrado.")},
		
            },

			nombreC:{
				required: "El campo nombre es obligatorio.",
				onlyChar :"El campo nombre soló puede contener caracteres alfabéticos y espacios.",
			}, 
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
						$("#tipoMascota option:selected").text(),
						$("#nombreM").val(),
						$("#razaM option:selected").text(),
						$("#sexoM").val(),
						$("#pesoM").val() + " " + $("#unidadM option:selected").text(),
						$("#cumpleanosM").val(),
						$("#edadM").val() + " " + $("#tiempoM").val(),
						$("#observacionesM").val(),
						$("#unidadM option:selected").val(),
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
						$("#tipoMascota option:selected").text(),
						$("#nombreM").val(),
						$("#razaM option:selected").text(),
						$("#sexoM").val(),
						$("#pesoM").val() + " " + $("#unidadM option:selected").text(),
						$("#cumpleanosM").val(),
						$("#edadM").val() + " " + $("#tiempoM").val(),
						$("#observacionesM").val(),
						$("#unidadM option:selected").val(),
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

					var max_chars = 0;

					$(".contadorR").hide();

					$("#observacionesM").keyup(function () {
						$(".contadorR").show();
						var chars = $(this).val().length;
						var diff = max_chars + chars;
						$("#contadorR").html(diff);
					});
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

		var numMascotas = tabladetalleMascota.rows().count();

		if (validar_form.form()) {
			//asi se comprueba si el form esta validado o no
			if (tabladetalleMascota.rows().count() > 0) {
				Swal.fire({
					title: "¡Atención!",
					text: "¿Está seguro que desea registrar el cliente " + nombreC + "?",
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
								numMascotas: numMascotas,
							},

							success: function () {
								//CODIGO PARA REGISTRAR EL DETALLE
								$("#tableDetalleMascota tbody tr").each(function () {
									var tipomascota = $(this)
										.closest("tr")
										.find("td:eq(12)")
										.text();
									var nombreM = $(this).closest("tr").find("td:eq(1)").text();
									var sexo = $(this).closest("tr").find("td:eq(3)").text();
									var cumpleanos = $(this)
										.closest("tr")
										.find("td:eq(5)")
										.text();
									var observaciones = $(this)
										.closest("tr")
										.find("td:eq(7)")
										.text();
									var unidadMedida = $(this)
										.closest("tr")
										.find("td:eq(8)")
										.text();
									var peso = $(this).closest("tr").find("td:eq(9)").text();
									var edad = $(this).closest("tr").find("td:eq(10)").text();
									var tiempo = $(this).closest("tr").find("td:eq(11)").text();
									var tipomascota = $(this)
										.closest("tr")
										.find("td:eq(12)")
										.text();
									var raza = $(this).closest("tr").find("td:eq(13)").text();
									var documento = $("#documentoC").val();

									var numRows = tabladetalleMascota.rows().count();

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
											documento: documento,
											numRows: numRows,
										},

										success: function () {
											Swal.fire({
												title: "¡Proceso completado!",
												text:
													"El cliente " +
													nombreC +
													" se ha registrado exitosamente.",
												type: "success",
												confirmButtonColor: "#28a745",
											}).then(function () {
												window.location =
													"http://localhost:8888/tienda/cliente/";
											});
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
													documento: documento,
												},
											});
										},
										statusCode: {
											400: function (data) {
												var json = JSON.parse(data.responseText);
												Swal.fire("¡Error!", json.msg, "error");
											},
										},
									});
								});
							}, //
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

	var documentoC = $("#documentoClienteA").val();

	var tablaActualizar = $("#ActualizarTablaDetalleMascota").DataTable({
		responsive: true,
		bInfo: false,
		bFilter: false,
		bPaginate: false,
		dom: "Bfrtip",

		ajax: {
			type: "POST",
			url: "/tienda/Cliente/llenardetalle/",
			data: {
				documento: documentoC,
			},
		},

		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [10] },
		],

		buttons: [
			{
				text: "<i class='fas fa-plus'></i> Añadir mascota",
				className: "btn btn-success",

				action: function (e, dt, node, config) {
					$("#modalActualizarMascota").modal("show");
					$("#FormActualizarMascota")[0].reset();
					validar_FormMascota.resetForm();

					$("#btnActualizarAnadirMascota").html("Añadir");
					$("#nameEtiqueta").html("Registrar mascota");

					var max_chars = 0;

					$(".contador").hide();

					$("#observacionesActualizar").keyup(function () {
						$(".contador").show();
						var chars = $(this).val().length;
						var diff = max_chars + chars;
						$("#contador").html(diff);
					});

					control = 1;

					//validar_formulario.resetForm();
				},
			},
		],

		columns: [
			{ data: "descripcion" },
			{ data: "nombreMascota" },
			{ data: "descripcionRaza" },
			{ data: "sexo" },

			{
				render: function (data, type, row) {
					return row.peso + " " + row.descripcionUnidadmedida;
				},
			},

			{ data: "fechaCumpleanos" },

			{
				render: function (data, type, row) {
					return row.edad + " " + row.tiempo;
				},
			},

			{ data: "observaciones" },

			{
				render: function (data, type, row) {
					if (row.estadoMascota == 1) {
						return "<span  class='badge badge-success'>Habilitada</span>";
					} else {
						return "<span  class='badge badge-danger'>Deshabilitada</span>";
					}
				},
			},

			{
				render: function (data, type, row) {
					if (row.estadoMascota == 1) {
						return (
							"<button action='editar' data-toggle='tooltip' title='Editar'class='btneditar btn btn-primary btn-sm'> <i class='fas fa-pencil-alt'></i></button>" +
							" " +
							"<button data-toggle='tooltip'  title='Deshabilitar' class='DeshabilitarMascota btn btn-danger btn-sm'><i class='fas fa-ban'></i></button>"
						);
					} else {
						return (
							"<button action='editar' data-toggle='tooltip' title='Editar'class='btneditar btn btn-primary btn-sm'> <i class='fas fa-pencil-alt'></i></button>" +
							" " +
							"<button data-toggle='tooltip'  title='Habilitar' class='HabilitarMascota btn btn-success btn-sm'><i class='fas fa-check-circle'></i></button>"
						);
					}
				},
			},

			{ data: "idMascota" },
		],
	});

	//reglas de validación del form de cliente
	var validar_FormMascota = $("#FormActualizarMascota").validate({
		ignore: [],
		rules: {
			tipoMascotaActualizar: { required: true },
			nombreActualizar: { required: true },
			razaActualizar: { required: true },
			sexoActualizar: { required: true },
			unidadActualizar: { required: true },
			tiempoActualizar: { required: true },
			pesoActualizar: { required: true, min: 0, number: true },
			edadActualizar: {required: true, min: 0, number: true },
			//observacionesActualizar: {  maxlength: 100 },
		},

		messages: {
			tipoMascotaActualizar: "El campo tipo de mascota es obligatorio.",
			nombreActualizar: "El campo nombre es obligatorio.",
			razaActualizar: "El campo raza es obligatorio.",
			sexoActualizar: "El campo sexo es obligatorio.",
			tiempoActualizar: "El campo tiempo es obligatorio.",
			unidadActualizar: "El campo unidad de medida es obligatorio.",
			pesoActualizar: {
				required: "El campo peso es obligatorio.",
				min: "El campo peso no puede ser menor a 0.",
				number: "Ingresa un numero valido.",
			},
			edadActualizar: {
				required: "El campo edad es obligatorio.",
				min: "El campo edad no puede ser menor a 0.",
				number: "Ingresa un numero valido.",
			},
		},

		errorElement: "p",
	});

	//reglas de validación del form de cliente
	var validar_Form_A_cliente = $("#FormActualizarCliente").validate({
		ignore: [],

		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			nombreClienteA: { required: true },
			celularClienteA: { required: true },
			correoClienteA: { email: true },
		},

		messages: {
			nombreClienteA: "El campo nombre es obligatorio.",
			celularClienteA: "El campo celular es obligatorio.",
			correoClienteA: "Ingresa un correo valido",
		},

		errorElement: "p",
	});

	/**
	 *
	 * Función para Registrar y actualizar datos a la tabla detalle.
	 *
	 *
	 **/

	//Setiamos el formulario con los valores
	$("#ActualizarTablaDetalleMascota tbody").on("click", ".btneditar", function (
		ev
	) {
		ev.preventDefault();

		$(".contador").hide();

		$("#btnActualizarAnadirMascota").html("Actualizar");
		$("#nameEtiqueta").html("Actualizar mascota");

		validar_FormMascota.resetForm();

		control = 2;

		var data = tablaActualizar.row($(this).parents("tr")).data();

		$("#idActualizar").val(data.idMascota);
		$("#nombreActualizar").val(data.nombreMascota);
		$("#sexoActualizar").val(data.sexo);
		$("#cumpleanosActualizar").val(data.fechaCumpleanos);
		$("#observacionesActualizar").val(data.observaciones);
		$("#unidadActualizar").val(data.idUnidadMedida);
		$("#pesoActualizar").val(data.peso);
		$("#edadActualizar").val(data.edad);
		$("#tiempoActualizar").val(data.tiempo);
		$("#tipoMascotaActualizar").val(data.idTipoMascota);
		$("#razaActualizar").val(data.idraza);

		$("#modalActualizarMascota").modal("show");

		var max_chars = 0;

		$("#observacionesActualizar").keyup(function () {
			$(".contador").show();
			var chars = $(this).val().length;
			var diff = max_chars + chars;
			$("#contador").html(diff);
		});
	});

	//Cuando se presiona el boton añadir se ejecuta este codigo.
	$("#btnActualizarAnadirMascota").on("click", function (ev) {
		ev.preventDefault();

		if (validar_FormMascota.form()) {
			if (control == 1) {
				var tipoMascotaA = $("#tipoMascotaActualizar").val();
				var nombreA = $("#nombreActualizar").val();
				var razaA = $("#razaActualizar").val();
				var sexoA = $("#sexoActualizar").val();
				var pesoA = $("#pesoActualizar").val();
				var unidadA = $("#unidadActualizar").val();
				var cumpleanosA = $("#cumpleanosActualizar").val();
				var edadA = $("#edadActualizar").val();
				var tiempoA = $("#tiempoActualizar").val();
				var observacionesA = $("#observacionesActualizar").val();
				var documento = $("#documentoClienteA").val();

				Swal.fire({
					title: "¡Atención!",
					text: "¿Está seguro que desea añadir esta nueva mascota?",
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
							url: "/tienda/Cliente/registro_mascota/",
							data: {
								tipomascota: tipoMascotaA,
								nombreM: nombreA,
								raza: razaA,
								sexo: sexoA,
								cumpleanos: cumpleanosA,
								observaciones: observacionesA,
								unidadMedida: unidadA,
								peso: pesoA,
								edad: edadA,
								tiempo: tiempoA,
								documento: documento,
							},

							success: function () {
								var numMascotas = 1;
								var documentoC = $("#documentoClienteA").val();

								console.log(numMascotas);
								$.ajax({
									type: "POST",
									url: "/tienda/Cliente/actualizar_numMascotas/",
									data: {
										numMascotas: numMascotas,
										documentoC: documentoC,
									},
									success: function () {
										Swal.fire({
											title: "¡Proceso completado!",
											text:
												"La mascota " +
												nombreA +
												" se ha registrado exitosamente.",
											type: "success",
											confirmButtonColor: "#28a745",
										}).then(function () {
											$("#modalActualizarMascota").modal("toggle");
		
											$("#ActualizarTablaDetalleMascota").DataTable().ajax.reload();
										});	

									},

									error: function () {
										Swal.fire({
											title: "¡Proceso no completado!",
											text: "La mascota no se pudo registrar.",
											type: "warning",
											confirmButtonColor: "#28a745",
										});
									},
								});
							},
						});
					}
				});
			} else {
				//Capturar datos del form
				var idMascota = $("#idActualizar").val();
				var tipoMascotaA = $("#tipoMascotaActualizar").val();
				var nombreA = $("#nombreActualizar").val();
				var razaA = $("#razaActualizar").val();
				var sexoA = $("#sexoActualizar").val();
				var pesoA = $("#pesoActualizar").val();
				var unidadA = $("#unidadActualizar").val();
				var cumpleanosA = $("#cumpleanosActualizar").val();
				var edadA = $("#edadActualizar").val();
				var tiempoA = $("#tiempoActualizar").val();
				var observacionesA = $("#observacionesActualizar").val();

				Swal.fire({
					title: "¡Atención!",
					text: "¿Está seguro que desea actualizar esta mascota?",
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
							url: "/tienda/Cliente/actualizar_mascota/",
							data: {
								idMascota: idMascota,
								tipomascota: tipoMascotaA,
								nombreM: nombreA,
								raza: razaA,
								sexo: sexoA,
								cumpleanos: cumpleanosA,
								observaciones: observacionesA,
								unidadMedida: unidadA,
								peso: pesoA,
								edad: edadA,
								tiempo: tiempoA,
							},

							success: function () {
								Swal.fire({
									title: "¡Proceso completado!",
									text:"La mascota " +nombreA +" se ha actualizado exitosamente.",
									type: "success",
									confirmButtonColor: "#28a745",
								}).then(function () {
									$("#modalActualizarMascota").modal("toggle");

									$("#ActualizarTablaDetalleMascota").DataTable().ajax.reload();
								});
								

							
								
							},

							

							error: function () {
								Swal.fire({
									title: "¡Proceso no completado!",
									text: "La mascota no se pudo actualizar.",
									type: "warning",
									confirmButtonColor: "#28a745",
								});
							},
						});


					
					}
				});
			}
		}
	});

	/**
	 *
	 * Función para deshabiliotar o habilitar una mascota
	 */

	//Deshabilitar una mascota
	$("#ActualizarTablaDetalleMascota").on(
		"click",
		".DeshabilitarMascota",
		function (ev) {
			ev.preventDefault();
			var nombreM = $(this).parents("tr").find("td:eq(1)").text();
			var estado = $(this).parents("tr").find("td:eq(8)").text();
			var idMascota = $(this).parents("tr").find("td:eq(10)").text();

			if (estado == "Habilitada") {
				estado = 0;

				Swal.fire({
					title: "¡Atención!",
					text:
						"¿Está seguro que desea deshabilitar esta mascota " +
						nombreM +
						" ?",
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
							url: "/tienda/cliente/actualizar_estado",
							data: {
								idMascota: idMascota,
								estado: estado,
							},

							success: function () {
								Swal.fire({
									title: "¡Proceso completado!",
									text:
										"La mascota " +
										nombreM +
										" se ha deshabilitado exitosamente.",
									type: "success",
									confirmButtonColor: "#28a745",
								});
								$("#ActualizarTablaDetalleMascota").DataTable().ajax.reload();
							},
							error: function () {
								Swal.fire({
									title: "¡Proceso no completado!",
									text:
										"La mascota " +
										nombreM +
										" no se puede deshabilitar porque está asociada a otro proceso.",
									type: "warning",
									confirmButtonColor: "#28a745",
								});
							},
							statusCode: {
								400: function (data) {
									var json = JSON.parse(data.responseText);
									Swal.fire("¡Error!", json.msg, "error");
								},
							},
						});
					}
				});
			}
		}
	);

	//Habilitar una mascota
	$("#ActualizarTablaDetalleMascota").on(
		"click",
		".HabilitarMascota",
		function (ev) {
			ev.preventDefault();
			var nombreM = $(this).parents("tr").find("td:eq(1)").text();
			var estado = $(this).parents("tr").find("td:eq(8)").text();
			var idMascota = $(this).parents("tr").find("td:eq(10)").text();

			if (estado == "Deshabilitada") {
				estado = 1;

				Swal.fire({
					title: "¡Atención!",
					text:
						"¿Está seguro que desea habilitar esta mascota " + nombreM + " ?",
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
							url: "/tienda/cliente/actualizar_estado",
							data: {
								idMascota: idMascota,
								estado: estado,
							},

							success: function () {
								Swal.fire({
									title: "¡Proceso completado!",
									text:
										"La mascota " + nombreM + " se ha habilitado exitosamente.",
									type: "success",
									confirmButtonColor: "#28a745",
								});
								$("#ActualizarTablaDetalleMascota").DataTable().ajax.reload();
							},
							error: function () {
								Swal.fire({
									title: "¡Proceso no completado!",
									text:
										"La mascota " +
										nombreM +
										" no se puede habilitar porque está asociada a otro proceso.",
									type: "warning",
									confirmButtonColor: "#28a745",
								});
							},
							statusCode: {
								400: function (data) {
									var json = JSON.parse(data.responseText);
									Swal.fire("¡Error!", json.msg, "error");
								},
							},
						});
					}
				});
			}
		}
	);

	/**
	 *
	 * Función para actualizar un cliente
	 */
	$("#botonActualizarCliente").on("click", function (ev) {
		ev.preventDefault();
		if (validar_Form_A_cliente.form()) {
			var documentoC = $("#documentoClienteA").val();
			var nombreClienteA = $("#nombreClienteA").val();
			var telefonoClienteA = $("#telefonoClienteA").val();
			var celularClienteA = $("#celularClienteA").val();
			var direccionClienteA = $("#direccionClienteA").val();
			var correoclienteA = $("#correoClienteA").val();

			Swal.fire({
				title: "¡Atención!",
				text: "¿Está seguro que desea actualizar este cliente ?",
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
						url: "/tienda/Cliente/Actualizar_cliente/",
						data: {
							nombreClienteA: nombreClienteA,
							telefonoClienteA: telefonoClienteA,
							celularClienteA: celularClienteA,
							direccionClienteA: direccionClienteA,
							correoclienteA: correoclienteA,
							documentoC: documentoC,
						},

						success: function () {
							Swal.fire({
								title: "¡Proceso completado!",
								text:
									"El cliente " +
									nombreClienteA +
									" se ha actualizado exitosamente.",
								type: "success",
								confirmButtonColor: "#28a745",
							}).then(function () {
								window.location = "http://localhost:8888/tienda/cliente/";
							});
						},

						error: function () {
							alert("No se registro el proveedor");
						},
					});
				}
			});
		}
	});

	/**
	 *
	 * Función para ver el detalle de un cliente y sus mascotas
	 */

	//Inicializar el DataTable.

	var documentoC = $("#documentoCDetalle").val();

	$("#tableDetalle").DataTable({

		language: {
			url: "../../assets/plugins/datatables/Spanish.lang",
		},
	
		bInfo: false,
		bFilter: false,
		bPaginate: false,
		dom: "frtip",

		ajax: {
			type: "POST",
			url: "/tienda/Cliente/llenarVerdetalle/",
			data: {
				documento: documentoC,
			},
		},

		columns: [
			{ data: "descripcion" },
			{ data: "nombreMascota" },
			{ data: "descripcionRaza" },
			{ data: "sexo" },

			{
				render: function (data, type, row) {
					return row.peso + " " + row.descripcionUnidadmedida;
				},
			},

			{ data: "fechaCumpleanos" },

			{
				render: function (data, type, row) {
					return row.edad + " " + row.tiempo;
				},
			},

			{ data: "observaciones" },

			{
				render: function (data, type, row) {
					if (row.estadoMascota == 1) {
						return "<span  class='badge badge-success'>Habilitada</span>";
					} else {
						return "<span  class='badge badge-danger'>Deshabilitada</span>";
					}
				},
			},
		],
	});

	/**
	 *
	 * Función para deshabilitar un cliente
	 */

	$("#tablaListadoClientes").on("click", ".deshabilitarCliente", function (ev) {
		ev.preventDefault();

		Swal.fire({
			title: "¡Atención!",
			text: "¿Está seguro que desea deshabilitar este cliente?",
			type: "question",
			showCancelButton: true,
			confirmButtonColor: "#28a745",
			cancelButtonColor: "#28a745",
			confirmButtonText: "Si",
			cancelButtonText: "No",
		}).then((result) => {
			if (result.value) {
				var documento = $(this).attr("data-documentoC");
				
				$.ajax({
					type: "POST",
					url: "/tienda/cliente/numEstadoMascotas",
					data: {
						documento: documento,
					},
					dataType: "JSON",
					success: function (data) {
						$.each(data, function (i, item) {
				

							if (item.numMascotas == item.deshabilitados) {
													
						
								var estado = 0;
								$.ajax({
									type: "POST",
									url: "/tienda/cliente/estado_cliente",
									data: {
										documento: documento,
										estado: estado,
									},
									success: function () {

										
										
										Swal.fire({
											title: "¡Proceso completado!",
											text: "El cliente ha sido deshabilitado exitosamente.",
											type: "success",
											confirmButtonColor: "#28a745",
										});
										$("#estadoCliente" + documento).replaceWith(
											"<span class='badge badge-danger' id='estadoCliente" +
												documento +
												"'>Deshabilitado</span>"
										);
										
										$("#deshabilitarCliente" + documento).replaceWith(
											" <button style='width:41%'  class='habilitarCliente btn btn-success btn-sm'  data-documentoC='" +
												documento +
												"' id='habilitarCliente" +
												documento +
												"'><i class='fas fa-check-circle'></i> Habilitar</button>"
										);

										$("#editarCliente" + documento).addClass("isDisabled");
										
									},

									error: function () {
										Swal.fire({
											title: "¡Proceso no completado!",
											text: "Ha sucedido un error al deshabilitar el cliente",
											type: "warning",
											confirmButtonColor: "#28a745",
										});
									},
									statusCode: {
										400: function (data) {
											var json = JSON.parse(data.responseText);
											Swal.fire("¡Error!", json.msg, "error");
										},
									},
								});
							} else {
								Swal.fire({
									title: "¡Proceso no completado!",
									html:
										"No se puede deshabilitar este cliente ya que tiene mascotas habilitadas.<br> Deshabilite todas las mascotas para completar este proceso.",
									type: "warning",
									confirmButtonColor: "#28a745",
								});
							}
						});
					},

					error: function () {
						alert("Error");
					},
				});
			}
		});
	});

	/**
	 *
	 * Función para habilitar un cliente
	 */

	$("#tablaListadoClientes").on("click", ".habilitarCliente", function (ev) {
		ev.preventDefault();

		var documento = $(this).attr("data-documentoC");
		var estado = 1;

		Swal.fire({
			title: "¡Atención!",
			text: "¿Está seguro que desea habilitar este cliente?",
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
					url: "/tienda/cliente/estado_cliente",
					data: {
						documento: documento,
						estado: estado,
					},
					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "El cliente ha sido habilitado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#estadoCliente" + documento).replaceWith(
							"<span class='badge badge-success' id='estadoCliente" +
								documento +
								"'>Habilitado</span>"
						);
						$("#habilitarCliente" + documento).replaceWith(
							" <button style='width:41%'  class='deshabilitarCliente btn btn-danger btn-sm'  data-documentoC='" +
								documento +
								"' id='deshabilitarCliente" +
								documento +
								"'><i class='fas fa-ban'></i> Deshabilitar</button>"
						);

						$("#editarCliente" + documento).removeClass("isDisabled");
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "Ha sucedido un error al habilitar el cliente",
							type: "warning",
							confirmButtonColor: "#28a745",
						});
					},
					statusCode: {
						400: function (data) {
							var json = JSON.parse(data.responseText);
							Swal.fire("¡Error!", json.msg, "error");
						},
					},
				});
			}
		});
	});



	/**
	 *
	 * Cargar el detalle clinico de mascotas
	 */

	var idMascotaH = $("#idMascotaHistorial").val();
	

	$("#tableHistorialMascota").DataTable({

		language: {
			url: "../../assets/plugins/datatables/Spanish.lang",
		},
	
		bInfo: false,
		bFilter: false,
		bPaginate: false,
		dom: "frtip",

		ajax: {
			type: "POST",
			url: "/tienda/Cliente/llenar_historial/",
			data: {
				idMascotaH: idMascotaH,
			},
		},

		columns: [
			{ data: "nombreServicio"},
			{ data: "nombreProducto",  className: "text-center"  },

			{
				render: function (data, type, row) {
					return row.dosis + " " + row.descripcionUnidadmedida;
				},
			},
		
			{ data: "fechaAplicacion",  className: "text-center"  },

			

			{ data: "fechaProxima",  className: "text-center"  },

			{ data: "observaciones",  className: "text-center" },

		],
	});
	


});
