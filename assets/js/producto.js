$(document).ready(function () {
	/**
	 *
	 * Función para ocultar o mosrar campos según la categoria del producto
	 */
	$("#categoria").on("change", function () {
		var selectCategoria = $(this).val();


		/*var prueba = sessionStorage.categoria = selectCategoria;
		console.log({prueba})*/

		if (selectCategoria == 1 || selectCategoria == 2) {
			$(".indicaciones_Contra").show();
			$(".edad_Utiempo").show();
		} else {
			$(".indicaciones_Contra").hide();
			$(".edad_Utiempo").hide();
		}
	});



		var  categoria = $("#categoria").val()


		if (categoria == 1 || categoria == 2) {
			$(".indicaciones_Contra").show();
			$(".edad_Utiempo").show();
		} else {
			$(".indicaciones_Contra").hide();
			$(".edad_Utiempo").hide();
		}
	
	

	//ckeck




	$("#check_edad_tiempo").change(function () {
		if (this.checked) {
		$("#edad_tiempo").prop("disabled", true);
		$("#tiempo").prop("disabled", true);

		$("#Todos_edad").val("999");
		$('#todos_tiempo').val("Años(s)");
		
		$("#edad_tiempo").val("");
		$('#tiempo').val("");
		} 
		else 
		{
		$("#edad_tiempo").prop("disabled", false);
		$("#tiempo").prop("disabled", false);

		
		$("#Todos_edad").val("");
		$('#todos_tiempo').val("");
		
		
		}
	});


	$("#check_edad_tiempo_actualizar").change(function () {
		if (this.checked) {
		$("#edad_actualizar").prop("disabled", true);
		$("#tiempo_actualizar").prop("disabled", true);

		$("#Todos_edad_actualizar").val("999");
		$('#todos_tiempo_actualizar').val("Años(s)");
		
		$("#edad_actualizar").val("");
		$('#tiempo_actualizar').val("-Seleccione la unidad de tiempo-");
		} 
		else 
		{
		$("#edad_actualizar").prop("disabled", false);
		$("#tiempo_actualizar").prop("disabled", false);

		
		$("#Todos_edad_actualizar").val("");
		$('#todos_tiempo_actualizar').val("-Seleccione la unidad de tiempo-");
		
		}
	});
	
	

	/**
	 *
	 * Función para deshabilitar un servicio
	 */

	$("#tablaProducto").on("click", ".deshabilitarProducto", function (ev) {
		ev.preventDefault();

		Swal.fire({
			title: "¡Atención!",
			text: "¿Está seguro que desea deshabilitar este Producto?",
			type: "question",
			showCancelButton: true,
			confirmButtonColor: "#28a745",
			cancelButtonColor: "#28a745",
			confirmButtonText: "Si",
			cancelButtonText: "No",
		}).then((result) => {
			if (result.value) {
				var idProducto = $(this).attr("data-Producto");

				var estado = 0;
				$.ajax({
					type: "POST",
					url: "/tienda/producto/estado_producto",
					data: {
						idProducto: idProducto,
						estado: estado,
					},
					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "El producto ha sido deshabilitado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});

						$("#estadoProducto" + idProducto).replaceWith(
							"<span class='badge badge-danger' id='estadoProducto" +
								idProducto +
								"'>Deshabilitado</span>"
						);

						$("#deshabilitarProducto" + idProducto).replaceWith(
							" <button style='width:44%'  class='habilitarProducto btn btn-success btn-sm'  data-Producto='" +
								idProducto +
								"' id='habilitarProducto" +
								idProducto +
								"'><i class='fas fa-check-circle'></i> Habilitar</button>"
						);

						$("#editarProducto" + idProducto).addClass("isDisabled");
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "Ha sucedido un error al deshabilitar el producto",
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

	$("#tablaProducto").on("click", ".habilitarProducto", function (ev) {
		ev.preventDefault();

		var idProducto = $(this).attr("data-Producto");
		var estado = 1;

		Swal.fire({
			title: "¡Atención!",
			text: "¿Está seguro que desea habilitar este producto?",
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
					url: "/tienda/producto/estado_producto",
					data: {
						idProducto: idProducto,
						estado: estado,
					},
					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "El producto ha sido habilitado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#estadoProducto" + idProducto).replaceWith(
							"<span class='badge badge-success' id='estadoProducto" +
								idProducto +
								"'>Habilitado</span>"
						);
						$("#habilitarProducto" + idProducto).replaceWith(
							" <button style='width:44%'  class='deshabilitarProducto btn btn-danger btn-sm'   data-Producto='" +
								idProducto +
								"' id='deshabilitarProducto" +
								idProducto +
								"'><i class='fas fa-ban'></i> Deshabilitar</button>"
						);

						$("#editarProducto" + idProducto).removeClass("isDisabled");
					},

					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "Ha sucedido un error al habilitar el producto",
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

	/////

	/**
	 *
	 * Función para contar los caracteres del registrar producto
	 *
	 */

	//contador de caracteres del campo descripcion.

	var max_chars = 0;

	$("#descrpcionRegistroProducto").keyup(function () {
		$(".contadorRegistroProducto").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contadorRegistroProducto").html(diff);
	});

	//contador de caracteres de campo indicaciones

	var max_chars = 0;

	$("#indicacionesRegistroProducto").keyup(function () {
		$(".contadorIndicacionesProducto").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contadorIndicacionesProducto").html(diff);
	});

	//contador de caracteres de campo contraindicaciones
	var max_chars = 0;

	$("#ContraindicacionesRegistroProducto").keyup(function () {
		$(".contadorContraindicacionesProducto").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contadorContraindicacionesProducto").html(diff);
	});

	/**
	 *
	 * Función para contar los caracteres del actualizar producto
	 *
	 */

	//contador de caracteres de campo descripcion
	var max_chars = 0;

	$("#descripcionA").keyup(function () {
		$(".contdescripcion").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contdescripcion").html(diff);
	});

	//contador de caracteres de campo indicaciones

	var max_chars = 0;

	$("#indicacionesA").keyup(function () {
		$(".contIndicacionesProducto").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contIndicacionesProducto").html(diff);
	});

	//contador de caracteres del campo contraindicaciones.

	var max_chars = 0;

	$("#contraIndicacionesA").keyup(function () {
		$(".conContraindicacionesProducto").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#conContraindicacionesProducto").html(diff);
	});

	//Select 2 del campo producto



	//$(".tipoServicioActualizar").on("select2:selecting", function (e) {});
});