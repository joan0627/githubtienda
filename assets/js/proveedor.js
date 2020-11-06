$(document).ready(function () {
	/**
	 *
	 * Función para añadir un Proveedor al detalle
	 *
	 */

	//DataTable marcas añadidas
	$("#tableProveedor").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},
		bInfo: false,
		bFilter: false,
		bPaginate: false,
		dom: "Bfrtip",

		buttons: [
			{
				text: "<i class='fas fa-plus'></i> Añadir marca",
				className: "btn btn-success",

				action: function (e, dt, node, config) {
					$("#modalañadirMarca").modal("show");
				},
			},
		],
	});

	//DataTable del modal listado para añadir marcas
	$("#tableMarca").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},
		bInfo: false,
	});

	/**
	 *
	 * Función Añadir al detalle de la Compra
	 */

	$("#tableMarca tbody").on("click", ".btnMarca", function () {
		var idMarca = $(this).closest("tr").find("td:eq(0)").text();
		var descripcion = $(this).closest("tr").find("td:eq(1)").text();
		var v = true;

		var table = $("#tableProveedor").DataTable();

		$(this).closest("tr").addClass("selected");
		$("#tableProveedor tbody tr").each(function () {
			var idMarca1 = $(this).children().eq(0).text();

			if (idMarca1 == idMarca) {
				v = false;
			}
		});

		if (!v) {
			Swal.fire({
				title: "¡Atención!",
				html: "La marca ya existe en la tabla de detalle.",
				type: "warning",
				confirmButtonColor: "#28a745",
			});
		} else {
			table.row
				.add([
					idMarca,
					descripcion,
					"<button class='eliminarMarca btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i> Quitar </button>",
				])

				.draw();
		}
	});



	/**
	 *
	 * Función para registrar el detalle de marca
	 */

	 

	//Validar los campos ddl formulario
	var validar_formulario =$("#form_proveedor").validate({
		ignore: [],       
		rules: {
			tipoDocumento: { required: true },
			documento: { required: true },
			nombre: { required: true },
			celular: { required: true, },
			nombreContacto: { required: true },
			diaVisita: { required: true },
			correo: {email: true},
			
		},
		onfocusout: false,
		onkeyup: false,
		onclick: false,
	
		messages: {
			tipoDocumento: "El campo tipo documento es obligatorio. ",
			documento: "El campo documento es obligatorio. ",
			nombre: "El campo nombre es obligatorio. ",
			celular: "El campo celular es obligatorio. ",
			nombreContacto: "El campo nombre contacto es obligatorio. ",
			diaVisita: "El campo dia visita es obligatorio. ",
			correo : "Ingrese un correo valido."
		},
		errorElement : 'p',
		
		errorPlacement: function(error, element) {
			$(element).parents('.form-group').append(error);
		  }
	
	  });

	$("#registroProveedor").click(function (ev) {
		ev.preventDefault();
	
		var tipoDocumento = $("#idTipodocumenroP").val();
		var documento = $("#documentoProveedor").val();
		var nombre = $("#nombreP").val();
		var telefono = $("#telefonoP").val();
		var celular = $("#celularP").val();
		var direccion = $("#direccionP").val();
		var correo = $("#correoP").val();
		var nombreContacto = $("#nombreContactoP").val();
		var diaVisita = $("#diaVisitaP").val();
		var observaciones = $("#observacionesP").val();



		var tabladetallecompra = $("#tableProveedor").DataTable();
	
		if (validar_formulario.form()) {
			//asi se comprueba si el form esta validado o no
			if (tabladetallecompra.rows().count() > 0) {					
						$.ajax({
							type: "POST",
							url: "/tienda/Proveedor/registro/",
							data: {
								tipoDocumento: tipoDocumento,
								documentoProveedor: documento,
								nombre: nombre,
								telefono: telefono,
								celular: celular,
								direccion: direccion,
								correo: correo,
								nombreContacto: nombreContacto,
								diaVisita: diaVisita,
								observaciones: observaciones,
						
							},
							success: function () {
								
								//CODIGO PARA REGISTRAR EL DETALLE
								$("#tableProveedor tbody tr").each(function () {
									var documentoProveedor = $("#documentoProveedor").val();
									var idMarca = $(this).closest("tr").find("td:eq(0)").text();
	
									$.ajax({
										type: "POST",
										url: "/tienda/Proveedor/detalleMarca/",
										data: {
											idMarca: idMarca,
											documentoProveedor:documentoProveedor
											
										},
	
										success: function () {
											Swal.fire({
												title: "¡Proceso completado!",
												text: "La compra se ha registrado exitosamente.",
												type: "success",
												confirmButtonColor: "#28a745",
											})
										},
	
										error: function () {
											Swal.fire({
												title: "¡Proceso no completado!",
												text: "La compra no se pudo registrar.",
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
								});
							},
							error: function () {
								
							},
						});
						
					
				
			} else {
				Swal.fire({
					title: "¡Proceso no completado!",
					text: "No se puede registrar por que no hay un producto en la tabla",
					type: "warning",
					confirmButtonColor: "#28a745",
				});
			}
		}
	});
















	/**
	 *
	 * Función quitar detalle de la compra
	 *
	 */

	$("#tableProveedor").on("click", ".eliminarMarca", function () {
		var table = $("#tableProveedor").DataTable();
		let $tr = $(this).closest("tr");
		var idMarca = $($tr).children().eq(0).text();

		// Le pedimos al DataTable que borre la fila

		$("#tableMarca tbody tr").each(function () {
			var idMarca1 = $(this).children().eq(0).text();

			if (idMarca1 == idMarca) {
				$(this).closest("tr").removeClass("selected");
			}
		});

		table.row($tr).remove().draw(false);
	});

	/**
	 *
	 * Función para eliminar un Proveedor
	 */

	$("tr td #add").click(function (ev) {
		ev.preventDefault();
		var nombre = $(this).parents("tr").find("td:eq(1)").text();
		var documento = $(this).attr("data-documento");
		var self = this;

		Swal.fire({
			title: "¡Atención!",
			text: "¿Estás seguro que deseas eliminar el proveedor " + nombre + " ?",
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
					url: "/tienda/Proveedor/delete",
					data: { documento: documento },
					success: function () {
						$(self).parents("tr").remove();
						Swal.fire({
							title: "¡Proceso completado!",
							text:
								"El proveedor " + nombre + " ha sido eliminado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
					},
					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text:
								"El proveedor " +
								nombre +
								" no se puede eliminar porque está asociado a otro proceso.",
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
});
