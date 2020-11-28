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

					return "<div class='input-group' style='width: 80%;'><input  type='text' value='1' class=' form-control cantidad_ventaL'></div>";
				},
			},

			{
				//adds td row for button
				data: null,
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

					return " <div class='input-group '><div class='input-group-addon' style='color:green; font-weight: bold; font-size:20px'>$</div><input name='costo_ventaL' type='text' class='costo_ventaL form-control 'style='text-align:right' ></div>";
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
	 * Función Añadir al detalle de la Compra
	 */

	$("#tableProductos tbody").on("click", ".btncarrito_venta", function (e) {
		e.preventDefault();

		var codigoV = $(this).closest("tr").find("td:eq(0)").text();
		var descripcionV = $(this).closest("tr").find("td:eq(2)").text();
		var cantidadV = $(this).closest("tr").find("td:eq(3)").find("input").val();
		var costoV = $(this).closest("tr").find("td:eq(4)").find("input").val();
		costoV = OSREC.CurrencyFormatter.parse(costoV, {
			currency: "COP",
			locale: "es_CO",
		});
		var costototalV = costoV * cantidadV;

		//	var cantidadT2 = 0;
		//	var v = true;
		var tableventa = $("#tableVenta").DataTable();
		//var data = tableventa.rows().data();
		$(this).closest("tr").addClass("selected");

		tableventa.row
			.add([
				codigoV,
				descripcionV,
				cantidadV,
				OSREC.CurrencyFormatter.format(costoV, { currency: "COP" }),
				OSREC.CurrencyFormatter.format(costototalV, { currency: "COP" }),
				"<button class='quitar_producto btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i> Quitar </button>",
			])

			.draw();

		$(this, ".btncarrito_venta").prop("disabled", true).css("color", "#8a8a8a");
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

			$("#total_venta").val(totalV);
		},
	});

    /**
     * 
     * Función quitar detalle de la venta
     * 
     */

    $("#tableVenta").on("click", ".quitar_producto", function() {
        var table = $("#tableVenta").DataTable();
        let $tr = $(this).closest("tr");
        var codigoT2 = $($tr).children().eq(0).text();


        $("#tableProductos tbody tr").each(function() {
            var codigoT1 = $(this).children().eq(0).text();
            //cantidadT2 = $(this).closest("tr").find("td:eq(2)").text();

            if (codigoT1 == codigoT2) {
                $(this).closest("tr").removeClass("selected");
                ///$(this).closest("tr").css('background-color', 'red');
                // $(this, ".btncarrito").prop('disabled', true);
                $(this).find('.btncarrito_venta').removeAttr('disabled').css('color', '#5CB85C');
               
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



	var validar_Form_Venta = $("#form_venta").validate({
		ignore: [],
		

		onfocusout: false,
        onkeyup: false,
		onclick: false,
		

        rules: {
            Nventa: { required: true },
            vendedor: { required: true }
        },
      

        messages: {
            Nventa: "El campo N° de venta es obligatorio. ",
            vendedor: "El campo vendedor es obligatorio. "
        },
		errorElement: 'p',
		

		
        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        }


    });


	

		$("#pagarVenta").click(function () {


			if (validar_Form_Venta.form()) {
				tablaVenta = $("#tableVenta").DataTable();
				if (tablaVenta.rows().count() > 0) {
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

	


});
