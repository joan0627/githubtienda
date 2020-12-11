$(document).ready(function () {
	/**
	 *
	 * Construcción e inicialización de la tabla listado de productos
	 **/

	var tableProductos = $("#tableProductos").DataTable({
		destroy: true,
		stateSave: true,
		ajax: {
			type: "POST",
			url: "/tienda/venta/todosProductos/",
		},

		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},
		bInfo: false,
		lengthMenu: [
			[5, 15, 25, 50, 100, -1],
			[5, 15, 25, 50, 100, "Todo"],
		],

		columnDefs: [
			//Hidden de una columna en el dataTable.
			{ className: "hide_column", targets: [1] },
		],

		columns: [
			{ data: "idProducto" },
			{ data: "descripcion" },

			{
				render: function (data, type, row) {
					return (
						row.descripcionPresentacion +
						" X " +
						row.valorMedida +
						" " +
						row.descripcionUnidadmedida +
						" " +
						row.nombreProducto
					);
				},
			},

			{
				//adds td row for button
				data: null,
				render: function (data, type, row) {
					$(".cantidad_ventaL").inputmask({
						rightAlign: true,
						alias: "numeric",
						autoGroup: true,
						min: 1,
						allowMinus: false,
						autoUnmask: true,
						clearMaskOnLostFocus: false,
					});

					return "<div class='input-group' style='width: 80%;'><input  type='text' value='1' class='cantidad_ventaL form-control '></div>";
				},
			},

			{
				//adds td row for button
				//data: ,
				render: function (data, type, row) {
					$(".costo_ventaL").inputmask({
						alias: "currency",
						prefix: "",
						radixPoint: ",",
						groupSeparator: ".",
						removeMaskOnSubmit: true,
						autoGroup: true,
						digits: 0,
						digitsOptional: false,
						min: 0,
						allowMinus: false,
						placeholder: "0",
						clearMaskOnLostFocus: false,
					});

					return (
						" <div class='input-group '><div class='input-group-addon' style='color:green; font-weight: bold; font-size:20px'>$</div><input value='" +
						row.precio +
						"' name='costo_ventaL' type='text' class='costo_ventaL form-control 'style='text-align:right' ></div>"
					);
				},
			},

			{
				//adds td row for button
				data: null,
				render: function (data, type, row) {
					return " <button class='btncarrito_venta' style=' color: #5CB85C; border: none; background: none; outline: none;'><i class='fas fa-cart-plus' style='font-size:28px; '></i></button>";
				},
			},
		],
	});

	/**
	 *
	 * Función Añadir al detalle de la venta
	 */

	$("#tableProductos tbody").on("click", ".btncarrito_venta", function (e) {
		e.preventDefault();
		var el = $(this);
		var codigoV = $(this).closest("tr").find("td:eq(0)").text();
		var cantidadV = $(this).closest("tr").find("td:eq(3)").find("input").val();

		var descripcionV = $(this).closest("tr").find("td:eq(2)").text();
		var costoV = $(this).closest("tr").find("td:eq(4)").find("input").val();

		costoV = OSREC.CurrencyFormatter.parse(costoV, {
			currency: "COP",
			locale: "es_CO",
		});

		var costototalV = costoV * cantidadV;

		$.ajax({
			type: "POST",
			url: "/tienda/venta/consulta_cantidad/",
			data: {
				codigoV: codigoV,
			},
			dataType: "json",
			success: function (data) {
				if (Number(cantidadV) <= data[0].existencia) {
					el.closest("tr").addClass("selected");
					$(el, ".btncarrito_venta")
						.prop("disabled", true)
						.css("color", "#8a8a8a");

					var tableventa = $("#tableVenta").DataTable();

					tableventa.row
						.add([
							codigoV,
							descripcionV,
							cantidadV,
							OSREC.CurrencyFormatter.format(costoV, { currency: "COP" }),
							OSREC.CurrencyFormatter.format(costototalV, {
								currency: "COP",
							}),
							"<button class='quitar_producto btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i> Quitar </button>",
						])

						.draw();
				} else {
					$("#tableProductos tbody").closest("tr").removeClass("selected");
					$(this)
						.find(".btncarrito_venta")
						.removeAttr("disabled")
						.css("color", "#5CB85C");

					Swal.fire({
						title: "Información",
						text: "La cantidad solicitada de este producto no está disponible.",
						type: "info",
						confirmButtonColor: "#28a745",
					});
				}
			},
		});
	});

	/**
	 *
	 * Construcción e inicialización de la tabla listado de la venta
	 **/

	var tablaVenta = $("#tableVenta").DataTable({
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
				text: "<i class='fas fa-table'></i> Limpiar tabla",
				className: "btn btn-primary",

				action: function (e, dt, node, config) {
					tablaVenta = $("#tableVenta").DataTable();
					if (tablaVenta.rows().count() > 0) {
						Swal.fire({
							title: "¡Atención!",
							text: "¿Estás seguro que deseas limpiar la tabla? ",
							type: "question",
							showCancelButton: true,
							confirmButtonColor: "#28a745",
							cancelButtonColor: "#28a745",
							confirmButtonText: "Si",
							cancelButtonText: "No",
						}).then((result) => {
							if (result.value) {
								$("#tableProductos tbody tr").each(function () {
									var el = $(this);

									el.closest("tr").removeClass("selected");
									el.find(".btncarrito_venta")
										.removeAttr("disabled")
										.css("color", "#5CB85C");
								});

								tablaVenta.clear().draw();
							}
						});
					} else {
						Swal.fire({
							title: "¡Atención!",
							text: "No hay datos disponibles para limpiar en esta tabla.",
							type: "warning",
							confirmButtonColor: "#28a745",
						});
					}
				},
			},
		],

		/**
		 *
		 * Footer de la tabla detalle de la sección Compras
		 *
		 * */

		footerCallback: function (row, data, start, end, display) {
			var api = this.api(),
				data;

			// Remove the formatting to get integer data for summation
			var intVal = function (i) {
				return typeof i === "string"
					? i.replace(/[^0-9]/g, "") / 100
					: typeof i === "number"
					? i
					: 0;
			};

			// Total over all pages
			totalV = api
				.column(4)
				.data()
				.reduce(function (a, b) {
					return intVal(a) + intVal(b);
				}, 0);

			// Update footer
			$("tr:eq(0) th:eq(1)", api.table().footer()).html(
				OSREC.CurrencyFormatter.format(totalV, {
					currency: "COP",
					locale: "es_CO",
				})
			);

			// CALCULO DEL DESCUENTO Y VALIDACIONES DEL MISMO

			$("#descuentoVenta").inputmask({
				//Quita el enmaskaramiento al enviar el dato
				//autoUnmask: INVESTIGAR

				rightAlign: true,
				removeMaskOnSubmit: true,
				prefix: "",
				alias: "numeric",
				groupSeparator: "",
				autoGroup: true,
				digits: 0,
				digitsOptional: false,
				min: 0,
				max: 100,
				allowMinus: false,
				autoUnmask: true,
				placeholder: "%",
				clearMaskOnLostFocus: false,
			});

			var descuento = $("#descuentoVenta").val();

			if (descuento == "" || totalV == 0) {
				$("tr:eq(2) th:eq(1)", api.table().footer()).html(
					OSREC.CurrencyFormatter.format(totalV, {
						currency: "COP",
						locale: "es_CO",
					})
				);

				if (totalV == 0) {
					$("#descuentoVenta").prop("disabled", true);
				} else {
					$("#descuentoVenta").prop("disabled", false);
					$("#descuentoVenta").keyup(function () {
						var descuento = $("#descuentoVenta").val();

						var resultado = api.data().reduce(function (a, b) {
							return (descuento * intVal(totalV)) / 100;
						}, 0);

						var resultado = api.data().reduce(function (a, b) {
							return intVal(totalV) - resultado;
						}, 0);

						$("tr:eq(2) th:eq(1)", api.table().footer()).html(
							OSREC.CurrencyFormatter.format(resultado, {
								currency: "COP",
								locale: "es_CO",
							})
						);

						var total = OSREC.CurrencyFormatter.format(resultado, {
							currency: "COP",
						});

						$("#total_venta").val(total);
					});

					if (descuento != "" && totalV != "") {
						resultado = "";

						$("tr:eq(2) th:eq(1)", api.table().footer()).html(
							OSREC.CurrencyFormatter.format(resultado, {
								currency: "COP",
								locale: "es_CO",
							})
						);
					}
				}
			}

			var totalV = OSREC.CurrencyFormatter.format(totalV, {
				currency: "COP",
			});

			$("#total_venta").val(totalV);
		},
	});

	/**
	 *
	 * Función quitar detalle de la venta
	 *
	 */

	$("#tableVenta").on("click", ".quitar_producto", function () {
		var table = $("#tableVenta").DataTable();
		let $tr = $(this).closest("tr");
		var codigoT2 = $($tr).children().eq(0).text();

		$("#tableProductos tbody tr").each(function () {
			var codigoT1 = $(this).children().eq(0).text();

			if (codigoT1 == codigoT2) {
				$(this).closest("tr").removeClass("selected");
				$(this)
					.find(".btncarrito_venta")
					.removeAttr("disabled")
					.css("color", "#5CB85C");
			}
		});

		table.row($tr).remove().draw(false);
	});

	/**
	 *
	 * Select de tipo de pago
	 *
	 **/

	$("#forma_pago").on("change", function () {
		var formaPago = $(this).val();

		var entregado = $("#entregado").val();
		//Calculo de cambio

		if (entregado == "") {
			$("#cambioI").html("0");
		}

		if (formaPago == 1) {
			$("#div_cambio").show();
			$("#Ncomprobante").prop("disabled", true);
			$("#entregado").prop("disabled", false);
			$("#Ncomprobante").val("");
		} else {
			$("#div_cambio").hide();
			$("#Ncomprobante").prop("disabled", false);
			$("#entregado").prop("disabled", true);
			$("#entregado").val("");
		}
	});

	/**
	 *
	 * Cambio de dinero
	 *
	 **/

	$("#entregado").keyup(function () {
		var total = $("#total_venta").val();
		var entregado = $("#entregado").val();

		if (entregado == "") {
			$("#cambioI").html("0");
		} else {
			var monto = function (i) {
				return typeof i === "string"
					? i.replace(/[^0-9]/g, "")
					: typeof i === "number"
					? i
					: 0;
			};

			var cambio = monto(entregado) - monto(total);
			var cambioForm = OSREC.CurrencyFormatter.format(cambio, {
				currency: "COP",
			});

			$("#cambioI").html(cambioForm);
		}
	});

	/**
	 *
	 * Funcion para registrar una venta, el detalle yforma de pago.
	 *
	 **/

	//Validaciones
	var validar_Form_Venta = $("#form_venta").validate({
		ignore: [],

		onfocusout: false,
		onkeyup: false,
		onclick: false,

		rules: {
			vendedor: { required: true },
		},

		messages: {
			vendedor: "El campo vendedor es obligatorio. ",
		},
		errorElement: "p",

		errorPlacement: function (error, element) {
			$(element).parents(".form-group").append(error);
		},
	});

	$("#pagarVenta").click(function () {
		if (validar_Form_Venta.form()) {
			tablaVenta = $("#tableVenta").DataTable();
			if (tablaVenta.rows().count() > 0) {
				$("#entregado").val("");
				$("#cambioI").html("");
				$("#modal-pagar").modal("show");
			} else {
				Swal.fire({
					title: "¡Atención!",
					text: "No se puede cobrar por que no hay un producto en la tabla.",
					type: "warning",
					confirmButtonColor: "#28a745",
				});
			}
		}
	});
	
	//contador del campo observaciones de venta

	var max_chars = 0;
	$(".contadorVenta").hide();

	$("#observacionesVenta").keyup(function () {
		$(".contadorVenta").show();
		var chars = $(this).val().length;
		var diff = max_chars + chars;
		$("#contadorVenta").html(diff);
	});

	//Registro venta
	$("#registroVenta").click(function (ev) {
		ev.preventDefault();

		var NumVenta = $("#Nventa").val();
		var fecha = $("#fechaVenta").val();
		var vendedor = $("#vendedor option:selected").val();
		var formaPago = $("#forma_pago").val();
		var comprobante = $("#Ncomprobante").val();
		var costoTotal = $("#total_venta").val();
		var observaciones = $("#observacionesVenta").val();
		var descuento = $("#descuentoVenta").val();

		costoTotal = OSREC.CurrencyFormatter.parse(costoTotal, {
			currency: "COP",
			locale: "es_CO",
		});

		Swal.fire({
			title: "¡Atención!",
			text: "¿Está seguro que desea registrar esta venta?",
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
					url: "/tienda/venta/registro_venta/",
					data: {
						NumVenta: NumVenta,
						fecha: fecha,
						vendedor: vendedor,
						formaPago: formaPago,
						comprobante: comprobante,
						costoTotal: costoTotal,
						observaciones: observaciones,
						descuento: descuento,
					},
					success: function () {
						//CODIGO PARA REGISTRAR EL DETALLE
						$("#tableVenta tbody tr").each(function () {
							var codProducto = $(this).children().eq(0).text();

							var cantidad = $(this).closest("tr").find("td:eq(2)").text();
							var costo = $(this).closest("tr").find("td:eq(3)").text();
							costo = OSREC.CurrencyFormatter.parse(costo, {
								currency: "COP",
								locale: "es_CO",
							});

							$.ajax({
								type: "POST",
								url: "/tienda/venta/registro_detalleventa/",
								data: {
									NumVenta: NumVenta,
									codProducto: codProducto,
									cantidad: cantidad,
									costo: costo,
								},

								error: function () {
									Swal.fire({
										title: "¡Proceso no completado!",
										text: "La  venta no se pudo registrar.",
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

						Swal.fire({
							title: "¡Proceso completado!",
							text: "La venta se ha registrado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						}).then(function () {
							window.location = "http://localhost:8888/tienda/venta/";
						});
					},
					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text: "La  venta no se pudo registrar.",
							type: "warning",
							confirmButtonColor: "#28a745",
						});
					},
				});
			}
		});
	});

	/**
	 *
	 * Función para anular la compra
	 */

	$("#tablaVentas").on("click", ".anularVenta", function (ev) {
		ev.preventDefault();

		var idFactura = $(this).attr("data-idventas");
		var self = this;

		Swal.fire({
			title: "¡Atención!",
			html:
				"¿Está seguro que desea anular esta venta? <br> Este proceso es irreversible.",
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
					url: "/tienda/venta/anular_venta",
					data: { idFactura: idFactura },
					dataType: "JSON",
					success: function (data) {
						$.each(data, function (i, item) {
							var cantidad = item.cantidad;
							var idProducto = item.producto;

							console.log(cantidad + "  " + idProducto);

							$.ajax({
								type: "POST",
								url: "/tienda/venta/anular_cantidad",
								data: {
									cantidad: cantidad,
									idProducto: idProducto,
								},

								success: function () {
									Swal.fire({
										title: "¡Proceso completado!",
										text: "La venta" + " ha sido anulada exitosamente.",
										type: "success",
										confirmButtonColor: "#28a745",
									});
									$("#estadoventa" + idFactura).replaceWith(
										'<span class="badge badge-danger">Anulada</span>'
									);
									$("#anularVenta" + idFactura).prop("disabled", true);
								},

								error: function () {
									Swal.fire({
										title: "¡Proceso no completado!",
										text:
											"La venta " +
											" no se puede anular, ya que esta asociado a otro proceso.",
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
				});
			}
		});
	});
});
