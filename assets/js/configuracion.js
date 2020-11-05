
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



});