
$(document).ready(function () {

    /**
     * 
     * Función para crear el datatable de la tabla maestra Tipo de documento
     * 
     */

	var tablaMaestra = $("#tablaMaestra").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,

		lengthChange: false,
		bPaginate: false,
		dom: '<"pull-left"f>B',

		buttons: {
			buttons: [
				{
					text: "<i class='fas fa-plus-circle'></i> Crear",
					action: function (e, node, config) {
						$("#modalRegistroTipoDocumento").modal("show");
						$("#descripcionTipoDocumento").val("");
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
					"<div style='text-align: center;'><a class='btn btn-info btn-sm' id='editartd'><i class='fas fa-pencil-alt'></i> Editar </a> <a id='eliminartd' class='btn btn-danger btn-sm' href=''><i class='fas fa-trash'></i> Eliminar </a></div>",
			},
		],
    });
    

/**
 * 
 * Función para registrar información en la tabla maestra Tipo de documento
 * 
 */
var tablaMaestra = $("#tablaMaestra").DataTable();
	//$('#codigoTipoDocumento').val("");
	//$('#descripcionTipoDocumento').val("");

	$("#btnRegistroTipoDocumento").click(function (ev) {
		ev.preventDefault();

		var idTipoDocumento = $("#codigoTipoDocumento").val();
		var descripcion = $("#descripcionTipoDocumento").val();
		// var r = 'registro';

		$.ajax({
			type: "POST",
			url: "/tienda/configuracion/registrarActualizar",
			data: {
				idTipoDocumento: idTipoDocumento,
				descripcion: descripcion,
			},

			success: function () {
				Swal.fire({
					title: "¡Proceso completado!",
					text:
						'El tipo documento "' +
						descripcion +
						'" se ha registrado correctamente.',
					type: "success",
					confirmButtonColor: "#28a745",
				});
				idTipoDocumento = Number(idTipoDocumento) + 1;
				$("#idTipoDocumento").val(idTipoDocumento);
				$("#descripcionTipoDocumento").val("");
				tablaMaestra.ajax.reload();
			},

			error: function () {
				Swal.fire({
					title: "¡Proceso no completado!",
					text:
						'El tipo documento "' + descripcion + '"no se ha podido registrar.',
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

		//var id = $(this).parents('tr').find('td:eq(0)').text();
		//var TipoDocumento = $(this).parents('tr').find('td:eq(1)').text();

		//$('#codigoTipoDocumento').val(id);
		//$('#descripcionTipoDocumento').val(TipoDocumento);

		//var idTipoDocumento = $('#idTipoDocumento').val();
		//	var descripcion = $('#descripcionTipoDocumento').val();
		//var r=true;
	});






/**
 * 
 * Función para editar un registro de la tabla maestra Tipo de documento
 * 
 */

$("#tablaMaestra").on("click", "#editartd", function (ev) {
    ev.preventDefault();

    var id = $(this).parents("tr").find("td:eq(0)").text();
    var descripcion = $(this).parents("tr").find("td:eq(1)").text();

    $("#modalRegistroTipoDocumento").modal("show");

    $("#codigoTipoDocumento").val(id);
    $("#descripcionTipoDocumento").val(descripcion);

    //var descripcion = $('#descripcionTipoDocumento').val();
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
				"¿Estás seguro que deseas eliminar el tipo de documento con id " +
				id +
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
					url: "/tienda/Configuracion/delete",
					data: { id: id },
					success: function () {
						$(self).parents("tr").remove();
						Swal.fire({
							title: "¡Proceso completado!",
							text:
								"El tipo de documento " +
								TipoDocumento +
								" ha sido eliminado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
					},
					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text:
								"El tipo de documento " +
								TipoDocumento +
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



	/**
	 * 
	 * Función para capturar los datos de seguridad y realizar 
	 * el proceso de cambio de pregunta de seguridad.
	 * 
	 */

	jQuery.validator.addMethod("noSpace", function(value, element) { //Code used for blank space Validation 
		return value.indexOf(" ") < 0 && value != ""   ; 
	}, "No space please and don't leave it empty"); 

	var validar_formulario1 = $("#form-pregunta").validate({

	
        ignore: [],
        rules: {
			contrasenaactualpre: { required: true},
            preguntaSeguridad: { required: true},
            respuesta: { required:true,noSpace:true}
        },
        onfocusout: false,
        onkeyup: false,
        onclick: false,

        messages: {
			contrasenaactualpre: "El campo contraseña es obligatorio.",
            preguntaSeguridad: "El campo pregunta de seguridad es obligatorio. ",
			respuesta:
			{
				required:"El campo nueva respuesta es obligatorio. ",
				noSpace:"espacio"
			} 
        },
        errorElement: 'p',

        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        }

    });





	$("#botonactualizarPregunta").click(function (ev) {
		ev.preventDefault();

		var contrasenaactualpre = $('#contrasenaactualpre').val();
		var preguntaSeguridad = $('#preguntaSeguridad').val();
		var respuesta = $('#respuesta').val();

		if (validar_formulario1.form()) {

			$.ajax({
				type: "POST",
				url: "/tienda/Configuracion/pregunta",
				data:
				 {
					contrasenaactualpre:contrasenaactualpre,
					 preguntaSeguridad: preguntaSeguridad,
					 respuesta : respuesta
				 },
				 dataType: 'json',
				 success: function (data) {
					
					if(data.return)					
					{

						
						window.location.href="http://localhost:8888/tienda/inicio";
				
					}
					else {
							$.toaster({
								settings: {
									'timeout': 5500,
				
				
								}
							});
							$.toaster({
								message: 'La contraseña actual ingresada es errónea.',
								title: 'Error',
								priority: 'danger',
				
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
            contrasenaactual: { required: true},
			nuevacontrasena: { required:true,   minlength: 8},
			confirmcontrasena: {required:true, equalTo : "#nuevacontrasena"}
        },
        onfocusout: false,
        onkeyup: false,
        onclick: false,

        messages: {
			contrasenaactual: "El campo contraseña actual es obligatorio. ",
			nuevacontrasena: {
				required: "El campo nueva contraseña es obligatorio.",
				minlength: "El campo nueva contraseña debe ser de al menos 8 caracteres de longitud.",
				
			},
			confirmcontrasena:{
				equalTo :"Las contraseñas no coinciden.",
				required: "El campo confirmar nueva contraseña es obligatorio.",
			} 
        },
        errorElement: 'p',

        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        }

    });


	$("#botonactualizarContrasena").click(function (ev) {
		ev.preventDefault();

	
		var contrasenaactual = $('#contrasenaactual').val();
		var nuevacontrasena = $('#nuevacontrasena').val();

		if (validar_formulario2.form()) {

			$.ajax({
				type: "POST",
				url: "/tienda/Configuracion/cambiarcontrasena",
				data:
				 {
					contrasenaactual: contrasenaactual,
					nuevacontrasena : nuevacontrasena
				 },
				 dataType: 'json',
				success: function (data) {
					
					if(data.return)					
					{

						
						window.location.href="http://localhost:8888/tienda/inicio";
				
					}
					else {
							$.toaster({
								settings: {
									'timeout': 5500,
				
				
								}
							});
							$.toaster({
								message: 'La contraseña actual ingresada es errónea.',
								title: 'Error',
								priority: 'danger',
				
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