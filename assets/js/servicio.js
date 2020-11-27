$(document).ready(function () {
	/**
	 *
	 * Función para deshabilitar un servicio
	 */

	$("#tablaServicios").on("click", ".deshabilitarServicio", function (ev) {
		ev.preventDefault();

		Swal.fire({
			title: "¡Atención!",
			text: "¿Está seguro que desea deshabilitar este servicio?",
			type: "question",
			showCancelButton: true,
			confirmButtonColor: "#28a745",
			cancelButtonColor: "#28a745",
			confirmButtonText: "Si",
			cancelButtonText: "No",
		}).then((result) => {
			if (result.value) {
				var idServicio = $(this).attr("data-Servicio");

				var estado = 0;
				$.ajax({
					type: "POST",
					url: "/tienda/servicio/estado_servicio",
					data: {
						idServicio: idServicio,
						estado: estado,
					},
					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "El servicio ha sido deshabilitado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});

						$("#estadoServicio" + idServicio).replaceWith(
							"<span class='badge badge-danger' id='estadoServicio" +
								idServicio +
								"'>Deshabilitado</span>"
						);

						$("#deshabilitarServicio" + idServicio).replaceWith(
							" <button style='width:35%'  class='habilitarServicio btn btn-success btn-sm'  data-Servicio='" +
								idServicio +
								"' id='habilitarServicio" +
								idServicio +
								"'><i class='fas fa-check-circle'></i> Habilitar</button>"
						);

						$("#editarServicio" + idServicio).addClass("isDisabled");
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "Ha sucedido un error al deshabilitar el servicio",
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
	 * Función para habilitar un cliente
	 */

	$("#tablaServicios").on("click", ".habilitarServicio", function (ev) {
		ev.preventDefault();

		var idServicio = $(this).attr("data-Servicio");
		var estado = 1;

		Swal.fire({
			title: "¡Atención!",
			text: "¿Está seguro que desea habilitar este servicio?",
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
					url: "/tienda/servicio/estado_servicio",
					data: {
						idServicio: idServicio,
						estado: estado,
					},
					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "El servicio ha sido habilitado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#estadoServicio" + idServicio).replaceWith(
							"<span class='badge badge-success' id='estadoServicio" +
								idServicio +
								"'>Habilitado</span>"
						);
						$("#habilitarServicio" + idServicio).replaceWith(
							" <button style='width:35%'  class='deshabilitarServicio btn btn-danger btn-sm'   data-Servicio='" +
								idServicio +
								"' id='deshabilitarServicio" +
								idServicio +
								"'><i class='fas fa-ban'></i> Deshabilitar</button>"
						);

						$("#editarServicio" + idServicio).removeClass("isDisabled");
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "Ha sucedido un error al habilitar el servicio",
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
	 * Función para contar los caracteres del registrar servicio
	 * 
	 */


	 	//contador de caracteres del campo descripcion.

	var max_chars = 0;

	$("#descripcionRegistroS").keyup(function () {
		$(".descripcionRS").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#descripcionRS").html(diff);
	});

	//contador de caracteres de campo recomendaciones previas

	var max_chars = 0;

	$("#recomendacionesPreviasR").keyup(function () {
		$(".contadorRS").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contadorRS").html(diff);
	});

	
	//contador de caracteres de campo recomendaciones posteriores
	var max_chars = 0;

	$("#recomendacionesPosterioresR").keyup(function () {
		$(".contadorReS").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contadorReS").html(diff);
	});



	/**
	 *
	 * Función para contar los caracteres del actualizar servicio
	 * 
	 */


	//contador de caracteres del campo descripcion.

	var max_chars = 0;

	$("#descripcionServicioA").keyup(function () {
		$(".contadorS").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contadorS").html(diff);
	});

	//contador de caracteres de campo recomendaciones previas

	var max_chars = 0;

	$("#recomendacionesPrevias").keyup(function () {
		$(".contadorRecomen").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contadorRecomen").html(diff);
	});

	
	//contador de caracteres de campo recomendaciones posteriores
	var max_chars = 0;

	$("#recomendacionesPosteriores").keyup(function () {
		$(".contadorRepost").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contadorRepost").html(diff);
	});


	
});
