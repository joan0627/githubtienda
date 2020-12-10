$(document).ready(function () {

	/********************************************
	 *******Funciones de tipo documento**********
	 *******************************************/
	

	/**
	 *
	 * Función para crear el datatable de la tabla maestra Tipo de documento
	 *
	 */

	$("#tablaMaestra").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,

		lengthChange: false,
		bPaginate: false,
		dom: '<"pull-left"f>B',


		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [0] },
			
		],

		buttons: {
			buttons: [
				{
					text: "<i class='fas fa-plus-circle'></i> Crear",
					action: function (e, dt, node, config) {
						$("#modalRegistroTipoDocumento").modal("show");
		
						$("#descripcionTipoDocumento").val("");

										
						$("#btnRegistroTipoDocumento").html("Registrar");
						$("#etiqueta").html("Registro de tipo de documento");

						 control = 1;

						 validar_tipodocumento.resetForm();
	 
					},
				},
			],
			dom: {
				button: {
					tag: "button",
					className: "btn btn-success",
				},
				buttonLiner: {
					tag: null,
				},
			},
		},

		ajax: {
			type: "POST",
			url: "/tienda/Configuracion/listadoTipoDocumento",
			dataSrc: "",
		},
		columns: [
			{ data: "idTipoDocumento" },
			{ data: "descripcion" },
			{
				defaultContent:
					"<div style='text-align: center;'><button class='btn btn-info btn-sm' id='editartd'><i class='fas fa-pencil-alt'></i> Editar </button> <button id='eliminartd' class='btn btn-danger btn-sm' href=''><i class='fas fa-trash'></i> Eliminar </button></div>",
			},
		],
	});


	//reglas de validación del form de tipo de docuemnto 
	var validar_tipodocumento = $("#Formtipodocumento").validate({
		ignore: [],

		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			descripcionTipoDocumento: { required: true },
		},

		messages: {
			descripcionTipoDocumento: "El campo descripción es obligatorio.",
		},

		errorElement: "p",
	});

	/**
	 *
	 * Acciones al momento de presionar el btn editar
	 *
	 */

	$("#tablaMaestra").on("click", "#editartd", function (ev) {
		ev.preventDefault();


		var id = $(this).parents("tr").find("td:eq(0)").text();
		var descripcion = $(this).parents("tr").find("td:eq(1)").text();

		validar_tipodocumento.resetForm();
		$("#modalRegistroTipoDocumento").modal("show");

		$("#codigoTipoDocumento").val(id);
		$("#descripcionTipoDocumento").val(descripcion);

		$("#btnRegistroTipoDocumento").html("Actualizar");
		$("#etiqueta").html("Actualizar el tipo de documento");

		control = 2;
	});



	$("#btnRegistroTipoDocumento").on("click", function (ev) {

		if (validar_tipodocumento.form()) {
			if (control == 1) {

				/**
				 *
				 * Función para registrar información en la tabla maestra Tipo de documento
				 *
				 */
			
				var descripcion = $("#descripcionTipoDocumento").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/registrarTdocumento",
					data: {
						descripcion: descripcion,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "El tipo documento se ha registrado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});

						$("#modalRegistroTipoDocumento").modal("toggle");
						$("#tablaMaestra").DataTable().ajax.reload();
						

		
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "El tipo documento no se ha podido registrar.",
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


				var id = $("#codigoTipoDocumento").val();
				var descripcion = $("#descripcionTipoDocumento").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/actualizarTdocumento",
					data: {
						id: id,
						descripcion: descripcion,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "El tipo documento se ha actualizado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#modalRegistroTipoDocumento").modal("toggle");
						$("#tablaMaestra").DataTable().ajax.reload();
						
						
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "El tipo documento no se ha podido registrar.",
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
		}
	});

	/**
	 *
	 * Función para eliminar un registro de la tabla maestra Tipo de documento
	 *
	 */
	$("#tablaMaestra").on("click", "#eliminartd", function (ev) {
		ev.preventDefault();
		var id = $(this).parents("tr").find("td:eq(0)").text();
		var TipoDocumento = $(this).parents("tr").find("td:eq(1)").text();

		var self = this;

		Swal.fire({
			title: "¡Atención!",
			text:
				"¿Está seguro que desea eliminar este tipo de documento?",
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
					url: "/tienda/Configuracion/delete",
					data: { id: id },
					success: function () {
						$(self).parents("tr").remove();
						Swal.fire({
							title: "¡Proceso completado!",
							text:
								"El tipo de documento ha sido eliminado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
					},
					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text:
								"El tipo de documento no se puede eliminar porque está asociado a otro proceso.",
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


	/********************************************
	 **********Funciones de Categoria************
	 *******************************************/


	/**
	 *
	 * Función para crear el datatable de la tabla maestra Tipo de documento
	 *
	 */

	$("#tablaMaestra_Categoria").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,

		lengthChange: false,
		bPaginate: false,
		dom: '<"pull-left"f>B',


		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [0] },
	
		],

		buttons: {
			buttons: [
				{
					text: "<i class='fas fa-plus-circle'></i> Crear",
					action: function (e, dt, node, config) {
						$("#modalRegistroCategoria").modal("show");
		
						$("#descripcionCategoria").val("");

										
						$("#btnRegistroCategoria").html("Registrar");
						$("#etiquetaCategoria").html("Registro de categoria");

						 controlCategoria = 1;

						 validar_Categoria.resetForm();
	 					
					},
				},
			],
			dom: {
				button: {
					tag: "button",
					className: "btn btn-success",
				},
				buttonLiner: {
					tag: null,
				},
			},
		},

		ajax: {
			type: "POST",
			url: "/tienda/Configuracion/listadoCategoria",
			dataSrc: "",
		},
		columns: [
			{ data: "idCategoria" },
			{ data: "descripcion" },
			{
				defaultContent:
					"<div style='text-align: center;'><button class='btn btn-info btn-sm' id='editartCategoria'><i class='fas fa-pencil-alt'></i> Editar </button> <button id='eliminarCategoria' class='btn btn-danger btn-sm' href=''><i class='fas fa-trash'></i> Eliminar </button></div>",
			},
		],
	});

		//reglas de validación del form de tipo de docuemnto 
		var validar_Categoria = $("#FormCategoria").validate({
			ignore: [],
	
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				descripcionCategoria: { required: true },
			},
	
			messages: {
				descripcionCategoria: "El campo descripción es obligatorio.",
			},
	
			errorElement: "p",
		});

	$("#tablaMaestra_Categoria").on("click", "#editartCategoria", function (ev) {
		ev.preventDefault();


		var idCategoria = $(this).parents("tr").find("td:eq(0)").text();
		var descripcionCategoria = $(this).parents("tr").find("td:eq(1)").text();

		validar_Categoria.resetForm();
		$("#modalRegistroCategoria").modal("show");

		$("#idCategoria").val(idCategoria);
		$("#descripcionCategoria").val(descripcionCategoria);

		$("#btnRegistroCategoria").html("Actualizar");
		$("#etiquetaCategoria").html("Actualizar la categoria");

		controlCategoria = 2;
	});


	$("#btnRegistroCategoria").on("click", function (ev) {

		if (validar_Categoria.form()) {
			if (controlCategoria == 1) {

				/**
				 *
				 * Función para registrar información en la tabla maestra de categoria
				 *
				 */
			
				var descripcionCategoria = $("#descripcionCategoria").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/registrarCategoria",
					data: {
						descripcionCategoria: descripcionCategoria,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La categoria se ha registrado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});

						$("#modalRegistroCategoria").modal("toggle");
						$("#tablaMaestra_Categoria").DataTable().ajax.reload();
						

		
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La categoria no se ha podido registrar.",
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


				var id = $("#idCategoria").val();
				var descripcionCategoria = $("#descripcionCategoria").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/actualizarCategoria",
					data: {
						id: id,
						descripcionCategoria: descripcionCategoria,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La categoria se ha actualizado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#modalRegistroCategoria").modal("toggle");
						$("#tablaMaestra_Categoria").DataTable().ajax.reload();
						
						
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La categoria no se ha podido registrar.",
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
		}
	});

	/**
	 *
	 * Función para eliminar un registro de la tabla maestra Tipo de documento
	 *
	 */
	$("#tablaMaestra_Categoria").on("click", "#eliminarCategoria", function (ev) {
		ev.preventDefault();
		var id = $(this).parents("tr").find("td:eq(0)").text();

		var self = this;

		Swal.fire({
			title: "¡Atención!",
			text:
				"¿Está seguro que desea eliminar esta categoria?",
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
					url: "/tienda/Configuracion/deleteCategoria",
					data: { id: id },
					success: function () {
						$(self).parents("tr").remove();
						Swal.fire({
							title: "¡Proceso completado!",
							text:
								"La categoria ha sido eliminado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
					},
					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text:
								"La categoria no se puede eliminar porque está asociada a otro proceso.",
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







	/********************************************
	 **********Funciones de Marca****************
	 *******************************************/


	/**
	 *
	 * Función para crear el datatable de la tabla maestra Tipo de documento
	 *
	 */

	$("#tablaMaestra_Marca").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,

		lengthChange: false,
		bPaginate: false,
		dom: '<"pull-left"f>B',


		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [0] },
	
		],

		buttons: {
			buttons: [
				{
					text: "<i class='fas fa-plus-circle'></i> Crear",
					action: function (e, dt, node, config) {
						$("#modalRegistroMarca").modal("show");
		
						$("#descripcionMarca").val("");

										
						$("#btnRegistroMarca").html("Registrar");
						$("#etiquetaMarca").html("Registro de Marca");

						 controlMarca = 1;

						 validar_Marca.resetForm();
	 					
					},
				},
			],
			dom: {
				button: {
					tag: "button",
					className: "btn btn-success",
				},
				buttonLiner: {
					tag: null,
				},
			},
		},

		ajax: {
			type: "POST",
			url: "/tienda/Configuracion/listadoMarca",
			dataSrc: "",
		},
		columns: [
			{ data: "idMarca" },
			{ data: "descripcionMarca" },
			{
				defaultContent:
					"<div style='text-align: center;'><button class='btn btn-info btn-sm' id='editarMarca'><i class='fas fa-pencil-alt'></i> Editar </button> <button id='eliminarMarca' class='btn btn-danger btn-sm' href=''><i class='fas fa-trash'></i> Eliminar </button></div>",
			},
		],
	});


			//reglas de validación del form de tipo de docuemnto 
		var validar_Marca = $("#FormMarca").validate({
			ignore: [],
	
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				descripcionMarca: { required: true },
			},
	
			messages: {
				descripcionMarca: "El campo descripción es obligatorio.",
			},
	
			errorElement: "p",
		});

	$("#tablaMaestra_Marca").on("click", "#editarMarca", function (ev) {
		ev.preventDefault();


		var idMarca = $(this).parents("tr").find("td:eq(0)").text();
		var descripcionMarca = $(this).parents("tr").find("td:eq(1)").text();

		validar_Marca.resetForm();
		$("#modalRegistroMarca").modal("show");

		$("#idMarca").val(idMarca);
		$("#descripcionMarca").val(descripcionMarca);

		$("#btnRegistroMarca").html("Actualizar");
		$("#etiquetaMarca").html("Actualizar la marca");

		controlMarca = 2;
	});


	$("#btnRegistroMarca").on("click", function (ev) {

		if (validar_Marca.form()) {
			if (controlMarca == 1) {

				/**
				 *
				 * Función para registrar información en la tabla maestra de marca
				 *
				 */
			
				var descripcionMarca = $("#descripcionMarca").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/registrarMarca",
					data: {
						descripcionMarca: descripcionMarca,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La marca se ha registrado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});

						$("#modalRegistroMarca").modal("toggle");
						$("#tablaMaestra_Marca").DataTable().ajax.reload();
						

		
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La Marca no se ha podido registrar.",
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


				var id = $("#idMarca").val();
				var descripcionMarca = $("#descripcionMarca").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/actualizarMarca",
					data: {
						id: id,
						descripcionMarca: descripcionMarca,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La marca se ha actualizado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#modalRegistroMarca").modal("toggle");
						$("#tablaMaestra_Marca").DataTable().ajax.reload();
						
						
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La marca no se ha podido registrar.",
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
		}


	});


	
		/**
		 *
		 * Función para eliminar un registro de la tabla maestra marca
		 *
		 */

		$("#tablaMaestra_Marca").on("click", "#eliminarMarca", function (ev) {
			ev.preventDefault();
			var id = $(this).parents("tr").find("td:eq(0)").text();

			var self = this;

			Swal.fire({
				title: "¡Atención!",
				text:
					"¿Está seguro que desea eliminar esta marca?",
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
						url: "/tienda/Configuracion/deleteMarca",
						data: { id: id },
						success: function () {
							$(self).parents("tr").remove();
							Swal.fire({
								title: "¡Proceso completado!",
								text:
									"La marca ha sido eliminada exitosamente.",
								type: "success",
								confirmButtonColor: "#28a745",
							});
						},
						error: function () {
							Swal.fire({
								title: "¡Proceso no completado!",
								text:
									"La marca no se puede eliminar porque está asociado a otro proceso.",
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




	/********************************************
	 **********Funciones de presentacion**********
	 *******************************************/


	/**
	 *
	 * Función para crear el datatable de la tabla maestra presentacion
	 *
	 */

	$("#tablaMaestra_Presentacion").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,

		lengthChange: false,
		bPaginate: false,
		dom: '<"pull-left"f>B',


		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [0] },
	
		],

		buttons: {
			buttons: [
				{
					text: "<i class='fas fa-plus-circle'></i> Crear",
					action: function (e, dt, node, config) {
						$("#modalRegistroPresentacion").modal("show");
		
						$("#descripcionPresentacion").val("");

										
						$("#btnRegistroPresentacion").html("Registrar");
						$("#etiquetaPresentacion").html("Registro de presentación");

						 controlPresentacion = 1;

						 validar_Presentacion.resetForm();
	 					
					},
				},
			],
			dom: {
				button: {
					tag: "button",
					className: "btn btn-success",
				},
				buttonLiner: {
					tag: null,
				},
			},
		},

		ajax: {
			type: "POST",
			url: "/tienda/Configuracion/listadoPresentacion",
			dataSrc: "",
		},
		columns: [
			{ data: "idPresentacion" },
			{ data: "descripcionPresentacion" },
			{
				defaultContent:
					"<div style='text-align: center;'><button class='btn btn-info btn-sm' id='editarPresentacion'><i class='fas fa-pencil-alt'></i> Editar </button> <button id='eliminarPresentacion' class='btn btn-danger btn-sm' href=''><i class='fas fa-trash'></i> Eliminar </button></div>",
			},
		],
	});


			//reglas de validación del form de Presentacion
		var validar_Presentacion= $("#FormPresentacion").validate({
			ignore: [],
	
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				descripcionPresentacion: { required: true },
			},
	
			messages: {
				descripcionPresentacion: "El campo descripción es obligatorio.",
			},
	
			errorElement: "p",
		});

	$("#tablaMaestra_Presentacion").on("click", "#editarPresentacion", function (ev) {
		ev.preventDefault();


		var idPresentacion = $(this).parents("tr").find("td:eq(0)").text();
		var descripcionPresentacion = $(this).parents("tr").find("td:eq(1)").text();

		validar_Presentacion.resetForm();
		$("#modalRegistroPresentacion").modal("show");

		$("#idPresentacion").val(idPresentacion);
		$("#descripcionPresentacion").val(descripcionPresentacion);

		$("#btnRegistroPresentacion").html("Actualizar");
		$("#etiquetaPresentacion").html("Actualizar la presentación");

		controlPresentacion = 2;
	});


	$("#btnRegistroPresentacion").on("click", function (ev) {

		if (validar_Presentacion.form()) {
			if (controlPresentacion == 1) {

				/**
				 *
				 * Función para registrar información en la tabla maestra de presentacion
				 *
				 */
			
				var descripcionPresentacion = $("#descripcionPresentacion").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/registrarPresentacion",
					data: {
						descripcionPresentacion: descripcionPresentacion,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La presentación se ha registrado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});

						$("#modalRegistroPresentacion").modal("toggle");
						$("#tablaMaestra_Presentacion").DataTable().ajax.reload();
						

					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La presentación no se ha podido registrar.",
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


				var id = $("#idPresentacion").val();
				var descripcionPresentacion = $("#descripcionPresentacion").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/actualizarPresentacion",
					data: {
						id: id,
						descripcionPresentacion: descripcionPresentacion,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La presentación se ha actualizado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#modalRegistroPresentacion").modal("toggle");
						$("#tablaMaestra_Presentacion").DataTable().ajax.reload();
						
						
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La presentación no se ha podido registrar.",
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
		}


	});


	
		/**
		 *
		 * Función para eliminar un registro de la tabla maestra presentación
		 *
		 */

		$("#tablaMaestra_Presentacion").on("click", "#eliminarPresentacion", function (ev) {
			ev.preventDefault();
			var id = $(this).parents("tr").find("td:eq(0)").text();

			var self = this;

			Swal.fire({
				title: "¡Atención!",
				text:
					"¿Está seguro que desea eliminar esta presentación?",
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
						url: "/tienda/Configuracion/deletePresentacion",
						data: { id: id },
						success: function () {
							$(self).parents("tr").remove();
							Swal.fire({
								title: "¡Proceso completado!",
								text:
									"La presentación ha sido eliminada exitosamente.",
								type: "success",
								confirmButtonColor: "#28a745",
							});
						},
						error: function () {
							Swal.fire({
								title: "¡Proceso no completado!",
								text:
									"La presentación no se puede eliminar porque está asociada a otro proceso.",
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



	/********************************************
	 **********Funciones de undad de medida******
	 *******************************************/


	/**
	 *
	 * Función para crear el datatable de la tabla maestra de unidad medida
	 *
	 */

	$("#tablaMaestra_Umedida").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,

		lengthChange: false,
		bPaginate: false,
		dom: '<"pull-left"f>B',


		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [0] },
	
		],

		buttons: {
			buttons: [
				{
					text: "<i class='fas fa-plus-circle'></i> Crear",
					action: function (e, dt, node, config) {
						$("#modalRegistroUmedida").modal("show");
		
						$("#descripcionUmedida").val("");

										
						$("#btnRegistroUmedida").html("Registrar");
						$("#etiquetaUmedida").html("Registro de unidad de medida");

						 controlUmedida = 1;

						 validar_Umedida.resetForm();
	 					
					},
				},
			],
			dom: {
				button: {
					tag: "button",
					className: "btn btn-success",
				},
				buttonLiner: {
					tag: null,
				},
			},
		},

		ajax: {
			type: "POST",
			url: "/tienda/Configuracion/listadoUnidadmedida",
			dataSrc: "",
		},
		columns: [
			{ data: "idUnidadMedida" },
			{ data: "descripcionUnidadmedida" },
			{
				defaultContent:
					"<div style='text-align: center;'><button class='btn btn-info btn-sm' id='editarUmedida'><i class='fas fa-pencil-alt'></i> Editar </button> <button id='eliminarUmedida' class='btn btn-danger btn-sm' href=''><i class='fas fa-trash'></i> Eliminar </button></div>",
			},
		],
	});


			//reglas de validación del form de Presentacion
		var validar_Umedida= $("#FormUmedida").validate({
			ignore: [],
	
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				descripcionUmedida: { required: true },
			},
	
			messages: {
				descripcionUmedida: "El campo descripción es obligatorio.",
			},
	
			errorElement: "p",
		});

	$("#tablaMaestra_Umedida").on("click", "#editarUmedida", function (ev) {
		ev.preventDefault();


		var idUmedida = $(this).parents("tr").find("td:eq(0)").text();
		var descripcionUmedida = $(this).parents("tr").find("td:eq(1)").text();

		validar_Umedida.resetForm();
		$("#modalRegistroUmedida").modal("show");

		$("#idUmedida").val(idUmedida);
		$("#descripcionUmedida").val(descripcionUmedida);

		$("#btnRegistroUmedida").html("Actualizar");
		$("#etiquetaUmedida").html("Actualizar la unidad de medida");

		controlUmedida = 2;
	});


	$("#btnRegistroUmedida").on("click", function (ev) {

		if (validar_Umedida.form()) {
			if (controlUmedida == 1) {

				/**
				 *
				 * Función para registrar información en la tabla maestra de Unidad de medida
				 *
				 */
			
				var descripcionUmedida= $("#descripcionUmedida").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/registrarUmedida",
					data: {
						descripcionUmedida: descripcionUmedida,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La unidad de medida se ha registrado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});

						$("#modalRegistroUmedida").modal("toggle");
						$("#tablaMaestra_Umedida").DataTable().ajax.reload();
						

					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La unidad de medida no se ha podido registrar.",
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


				var id = $("#idUmedida").val();
				var descripcionUmedida = $("#descripcionUmedida").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/actualizarUmedida",
					data: {
						id: id,
						descripcionUmedida: descripcionUmedida,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La unidad de medida se ha actualizado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#modalRegistroUmedida").modal("toggle");
						$("#tablaMaestra_Umedida").DataTable().ajax.reload();
						
						
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La unidad de medida no se ha podido registrar.",
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
		}


	});


	
		/**
		 *
		 * Función para eliminar un registro de la tabla maestra presentación
		 *
		 */

		$("#tablaMaestra_Umedida").on("click", "#eliminarUmedida", function (ev) {
			ev.preventDefault();
			var id = $(this).parents("tr").find("td:eq(0)").text();

			var self = this;

			Swal.fire({
				title: "¡Atención!",
				text:
					"¿Está seguro que desea eliminar esta unidad de medida?",
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
						url: "/tienda/Configuracion/deleteUmedida",
						data: { id: id },
						success: function () {
							$(self).parents("tr").remove();
							Swal.fire({
								title: "¡Proceso completado!",
								text:
									"La unidad de medida ha sido eliminada exitosamente.",
								type: "success",
								confirmButtonColor: "#28a745",
							});
						},
						error: function () {
							Swal.fire({
								title: "¡Proceso no completado!",
								text:
									"La unidad de medida no se puede eliminar porque está asociada a otro proceso.",
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




	/********************************************
	 **********Funciones  de raza***************
	 *******************************************/


	/**
	 *
	 * Función para crear el datatable de la tabla maestra de  raza
	 *
	 */

	$("#tablaMaestra_Raza").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,

		lengthChange: false,
		bPaginate: false,
		dom: '<"pull-left"f>B',


		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [0] },
	
		],

		buttons: {
			buttons: [
				{
					text: "<i class='fas fa-plus-circle'></i> Crear",
					action: function (e, dt, node, config) {
						$("#modalRegistroRaza").modal("show");
		
						$("#descripcionRaza").val("");

										
						$("#btnRegistroRaza").html("Registrar");
						$("#etiquetaRaza").html("Registro de raza");

						 controlRaza = 1;

						 validar_Raza.resetForm();
	 					
					},
				},
			],
			dom: {
				button: {
					tag: "button",
					className: "btn btn-success",
				},
				buttonLiner: {
					tag: null,
				},
			},
		},

		ajax: {
			type: "POST",
			url: "/tienda/Configuracion/listadoRaza",
			dataSrc: "",
		},
		columns: [
			{ data: "idraza" },
			{ data: "descripcionRaza" },
			{
				defaultContent:
					"<div style='text-align: center;'><button class='btn btn-info btn-sm' id='editarRaza'><i class='fas fa-pencil-alt'></i> Editar </button> <button id='eliminarRaza' class='btn btn-danger btn-sm' href=''><i class='fas fa-trash'></i> Eliminar </button></div>",
			},
		],
	});


			//reglas de validación del form de Presentacion
		var validar_Raza= $("#FormRaza").validate({
			ignore: [],
	
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				descripcionRaza: { required: true },
			},
	
			messages: {
				descripcionRaza: "El campo descripción es obligatorio.",
			},
	
			errorElement: "p",
		});

	$("#tablaMaestra_Raza").on("click", "#editarRaza", function (ev) {
		ev.preventDefault();


		var idRaza = $(this).parents("tr").find("td:eq(0)").text();
		var descripcionRaza = $(this).parents("tr").find("td:eq(1)").text();

		validar_Raza.resetForm();
		$("#modalRegistroRaza").modal("show");

		$("#idRaza").val(idRaza);
		$("#descripcionRaza").val(descripcionRaza);

		$("#btnRegistroRaza").html("Actualizar");
		$("#etiquetaRaza").html("Actualizar la raza");

		controlRaza = 2;
	});


	$("#btnRegistroRaza").on("click", function (ev) {

		if (validar_Raza.form()) {
			if (controlRaza == 1) {

				/**
				 *
				 * Función para registrar información en la tabla maestra de Raza
				 *
				 */
			
				var descripcionRaza= $("#descripcionRaza").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/registrarRaza",
					data: {
						descripcionRaza: descripcionRaza,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La raza se ha registrado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});

						$("#modalRegistroRaza").modal("toggle");
						$("#tablaMaestra_Raza").DataTable().ajax.reload();
						

					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La raza no se ha podido registrar.",
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


				var id = $("#idRaza").val();
				var descripcionRaza = $("#descripcionRaza").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/actualizarRaza",
					data: {
						id: id,
						descripcionRaza: descripcionRaza,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La raza se ha actualizado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#modalRegistroRaza").modal("toggle");
						$("#tablaMaestra_Raza").DataTable().ajax.reload();
						
						
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La raza no se ha podido registrar.",
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
		}


	});


	
		/**
		 *
		 * Función para eliminar un registro de la tabla maestra presentación
		 *
		 */

		$("#tablaMaestra_Raza").on("click", "#eliminarRaza", function (ev) {
			ev.preventDefault();
			var id = $(this).parents("tr").find("td:eq(0)").text();

			var self = this;

			Swal.fire({
				title: "¡Atención!",
				text:
					"¿Está seguro que desea eliminar esta raza?",
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
						url: "/tienda/Configuracion/deleteRaza",
						data: { id: id },
						success: function () {
							$(self).parents("tr").remove();
							Swal.fire({
								title: "¡Proceso completado!",
								text:
									"La raza ha sido eliminada exitosamente.",
								type: "success",
								confirmButtonColor: "#28a745",
							});
						},
						error: function () {
							Swal.fire({
								title: "¡Proceso no completado!",
								text:
									"La raza no se puede eliminar porque está asociada a otro proceso.",
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


	/********************************************
	 **********Funciones  de Especie************
	 *******************************************/


	/**
	 *
	 * Función para crear el datatable de la tabla maestra de  especie
	 *
	 */

	$("#tablaMaestra_Especie").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,

		lengthChange: false,
		bPaginate: false,
		dom: '<"pull-left"f>B',


		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [0] },
	
		],

		buttons: {
			buttons: [
				{
					text: "<i class='fas fa-plus-circle'></i> Crear",
					action: function (e, dt, node, config) {
						$("#modalRegistroEspecie").modal("show");
		
						$("#descripcionEspecie").val("");

										
						$("#btnRegistroEspecie").html("Registrar");
						$("#etiquetaEspecie").html("Registro de especie");

						 controlEspecie = 1;

						 validar_Especie.resetForm();
	 					
					},
				},
			],
			dom: {
				button: {
					tag: "button",
					className: "btn btn-success",
				},
				buttonLiner: {
					tag: null,
				},
			},
		},

		ajax: {
			type: "POST",
			url: "/tienda/Configuracion/listadoEspecie",
			dataSrc: "",
		},
		columns: [
			{ data: "idEspecieProducto" },
			{ data: "descripcionEspecie" },
			{
				defaultContent:
					"<div style='text-align: center;'><button class='btn btn-info btn-sm' id='editarEspecie'><i class='fas fa-pencil-alt'></i> Editar </button> <button id='eliminarEspecie' class='btn btn-danger btn-sm' href=''><i class='fas fa-trash'></i> Eliminar </button></div>",
			},
		],
	});


			//reglas de validación del form de Presentacion
		var validar_Especie= $("#FormEspecie").validate({
			ignore: [],
	
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				descripcionEspecie: { required: true },
			},
	
			messages: {
				descripcionEspecie: "El campo descripción es obligatorio.",
			},
	
			errorElement: "p",
		});

	$("#tablaMaestra_Especie").on("click", "#editarEspecie", function (ev) {
		ev.preventDefault();


		var idEspecie= $(this).parents("tr").find("td:eq(0)").text();
		var descripcionEspecie = $(this).parents("tr").find("td:eq(1)").text();

		validar_Raza.resetForm();
		$("#modalRegistroEspecie").modal("show");

		$("#idEspecie").val(idEspecie);
		$("#descripcionEspecie").val(descripcionEspecie);

		$("#btnRegistroEspecie").html("Actualizar");
		$("#etiquetaEspecie").html("Actualizar la especie");

		controlEspecie = 2;
	});


	$("#btnRegistroEspecie").on("click", function (ev) {

		if (validar_Especie.form()) {
			if (controlEspecie == 1) {

				/**
				 *
				 * Función para registrar información en la tabla de Especie
				 *
				 */
			
				var descripcionEspecie= $("#descripcionEspecie").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/registrarEspecie",
					data: {
						descripcionEspecie: descripcionEspecie,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La especie se ha registrado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});

						$("#modalRegistroEspecie").modal("toggle");
						$("#tablaMaestra_Especie").DataTable().ajax.reload();
						

					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La especie no se ha podido registrar.",
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


				var id = $("#idEspecie").val();
				var descripcionEspecie = $("#descripcionEspecie").val();

				$.ajax({
					type: "POST",
					url: "/tienda/configuracion/actualizarEspecie",
					data: {
						id: id,
						descripcionEspecie: descripcionEspecie,
					},

					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La especie se ha actualizado correctamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#modalRegistroEspecie").modal("toggle");
						$("#tablaMaestra_Especie").DataTable().ajax.reload();
						
						
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La especie no se ha podido registrar.",
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
		}


	});


	
		/**
		 *
		 * Función para eliminar un registro de la tabla maestra de Especie
		 *
		 */

		$("#tablaMaestra_Especie").on("click", "#eliminarEspecie", function (ev) {
			ev.preventDefault();
			var id = $(this).parents("tr").find("td:eq(0)").text();

			var self = this;

			Swal.fire({
				title: "¡Atención!",
				text:
					"¿Está seguro que desea eliminar esta especie?",
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
						url: "/tienda/Configuracion/deleteEspecie",
						data: { id: id },
						success: function () {
							$(self).parents("tr").remove();
							Swal.fire({
								title: "¡Proceso completado!",
								text:
									"La especie ha sido eliminada exitosamente.",
								type: "success",
								confirmButtonColor: "#28a745",
							});
						},
						error: function () {
							Swal.fire({
								title: "¡Proceso no completado!",
								text:
									"La especie no se puede eliminar porque está asociada a otro proceso.",
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
	 * Función para capturar los datos de seguridad y realizar
	 * el proceso de cambio de pregunta de seguridad.
	 *
	 */

	jQuery.validator.addMethod(
		"noSpace",
		function (value, element) {
			//Code used for blank space Validation
			return value.indexOf(" ") < 0 && value != "";
		},
		"No space please and don't leave it empty"
	);

	var validar_formulario1 = $("#form-pregunta").validate({
		ignore: [],
		rules: {
			contrasenaactualpre: { required: true },
			preguntaSeguridad: { required: true },
			respuesta: { required: true, noSpace: true },
		},
		onfocusout: false,
		onkeyup: false,
		onclick: false,

		messages: {
			contrasenaactualpre: "El campo contraseña es obligatorio.",
			preguntaSeguridad: "El campo pregunta de seguridad es obligatorio. ",
			respuesta: {
				required: "El campo nueva respuesta es obligatorio. ",
				noSpace: "espacio",
			},
		},
		errorElement: "p",

		errorPlacement: function (error, element) {
			$(element).parents(".form-group").append(error);
		},
	});

	$("#botonactualizarPregunta").click(function (ev) {
		ev.preventDefault();

		var contrasenaactualpre = $("#contrasenaactualpre").val();
		var preguntaSeguridad = $("#preguntaSeguridad").val();
		var respuesta = $("#respuesta").val();

		if (validar_formulario1.form()) {
			$.ajax({
				type: "POST",
				url: "/tienda/Configuracion/pregunta",
				data: {
					contrasenaactualpre: contrasenaactualpre,
					preguntaSeguridad: preguntaSeguridad,
					respuesta: respuesta,
				},
				dataType: "json",
				success: function (data) {
					if (data.return) {
						window.location.href = "http://localhost:8888/tienda/inicio";
					} else {
						$.toaster({
							settings: {
								timeout: 5500,
							},
						});
						$.toaster({
							message: "La contraseña actual ingresada es errónea.",
							title: "Error",
							priority: "danger",
						});
					}
				},
				error: function () {
					Swal.fire({
						title: "¡Proceso no completado!",
						text: "Los datos no pudieron ser actualizados.",
						type: "error",
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

	/**
	 *
	 * Función para capturar los datos de seguridad y realizar
	 * el proceso de cambio de contraseña.
	 *
	 */

	var validar_formulario2 = $("#form-contrasena").validate({
		ignore: [],
		rules: {
			contrasenaactual: { required: true },
			nuevacontrasena: { required: true, minlength: 8 },
			confirmcontrasena: { required: true, equalTo: "#nuevacontrasena" },
		},
		onfocusout: false,
		onkeyup: false,
		onclick: false,

		messages: {
			contrasenaactual: "El campo contraseña actual es obligatorio. ",
			nuevacontrasena: {
				required: "El campo nueva contraseña es obligatorio.",
				minlength:
					"El campo nueva contraseña debe ser de al menos 8 caracteres de longitud.",
			},
			confirmcontrasena: {
				equalTo: "Las contraseñas no coinciden.",
				required: "El campo confirmar nueva contraseña es obligatorio.",
			},
		},
		errorElement: "p",

		errorPlacement: function (error, element) {
			$(element).parents(".form-group").append(error);
		},
	});

	$("#botonactualizarContrasena").click(function (ev) {
		ev.preventDefault();

		var contrasenaactual = $("#contrasenaactual").val();
		var nuevacontrasena = $("#nuevacontrasena").val();

		if (validar_formulario2.form()) {
			$.ajax({
				type: "POST",
				url: "/tienda/Configuracion/cambiarcontrasena",
				data: {
					contrasenaactual: contrasenaactual,
					nuevacontrasena: nuevacontrasena,
				},
				dataType: "json",
				success: function (data) {
					if (data.return) {
						window.location.href = "http://localhost:8888/tienda/inicio";
					} else {
						$.toaster({
							settings: {
								timeout: 5500,
							},
						});
						$.toaster({
							message: "La contraseña actual ingresada es errónea.",
							title: "Error",
							priority: "danger",
						});
					}
				},
				error: function () {
					Swal.fire({
						title: "¡Proceso no completado!",
						text: "Los datos no pudieron ser actualizados.",
						type: "error",
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
