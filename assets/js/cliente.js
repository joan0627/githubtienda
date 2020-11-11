$(document).ready(function () {
	/**
	 *
	 * Función para añadir un Proveedor al detalle
	 *
	 */

	//DataTable  detalle mascotas añadidas
	$("#tableDetalleMascota").DataTable({
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
				text: "<i class='fas fa-plus'></i> Añadir mascota",
				className: "btn btn-success",

				action: function (e, dt, node, config) {
					$("#modalMascota").modal("show");
				},
			},
		],
	});

	/**
	 *
	 * Reglas de validación
	 *
	 *
	 */

	var validar_formulario = $("#formMascota").validate({
		ignore: [],
		rules: {			
			tipoMascota: { required: true },
			nombreM: { required: true },
			razaM: { required: true },
			sexoM: { required: true },
			unidadMascota: { required: true },
			tiempoM: { required: true },
		},
		onfocusout: false,
		onkeyup: false,
		onclick: false,

		messages: {
			tipoMascota: "El campo tipo de mascota es obligatorio.",
			nombreM: "El campo nombre es obligatorio.",
			razaM: "El campo raza es obligatorio.",
			sexoM: "El campo sexo es obligatorio.",
			tiempoM: "El campo tiempo es obligatorio.",
			unidadMascota: "El campo unidad de medida es obligatorio.",
		},
		errorElement: "p",

		errorPlacement: function (error, element) {
			$(element).parents(".form-group").append(error);
		},
	});

	//Reglas de validación
	var validar_form = $("#form_registroCliente").validate({
		ignore: [],
		rules: {
			documento: { required: true },
		},
		onfocusout: false,
		onkeyup: false,
		onclick: false,

		messages: {
			documento: "El campo es obligatorio",
		},
		errorElement: "p",

		errorPlacement: function (error, element) {
			$(element).parents(".form-group").append(error);
		},
	});

	/**
	 *
	 * Función para añadir una macota al detalle
	 *
	 */
	$("#btnAnadirMascota").click(function (ev) {
		ev.preventDefault();

		Swal.fire({
			title: "¡Atención!",
			text: "¿Estás seguro que deseas añadir esta mascota? ",
			type: "question",
			showCancelButton: true,
			confirmButtonColor: "#28a745",
			cancelButtonColor: "#28a745",
			confirmButtonText: "Si",
			cancelButtonText: "No",
		}).then((result) => {
			if (result.value) {

				if (validar_formulario.form()) {
					var id =1;
					var tipoMascota = $("#tipoMascota").val();
					var nombreMascota = $("#nombreM").val();
					var raza = $("#razaM").val();
					var sexo = $("#sexoM").val();
					var peso = $("#pesoM").val();
					var unidad = $("#unidadM").val();
					var cumpleanos = $("#cumpleanosM").val();
					var edad = $("#edadM").val();
					var tiempoM = $("#tiempoM").val();
					var observaciones = $("#observacionesM").val();
		
					var table = $("#tableDetalleMascota").DataTable();
		
		
					table.row
						.add([
							tipoMascota,
							nombreMascota,
							raza,
							sexo,
							peso + " " + unidad,
							cumpleanos,
							edad + " " + tiempoM,
							observaciones,
							"<button data-toggle='tooltip' title='Editar'class='editarMascota btn btn-primary btn-sm'> <i class='fas fa-pencil-alt'></i></button>"+" "+"<button data-toggle='tooltip' title='Quitar'class='eliminarMarca btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i></button>",
						])
		
						.draw();
		
					$("#formMascota")[0].reset();
		
					$("#modalMascota").modal("toggle");
					
		
					
				}
				
			}
		});
	
	


	});

	var table = $("#tableDetalleMascota").DataTable();
	$('#tableDetalleMascota tbody ').on("click","button.verMascota", function(){
	
		var data = table.row($(this).parents("tr")).data();
		console.log(data);
	});
	
	/**
	//Modal ver detalle 
	$("#tableDetalleMascota").on("click", ".verMascota", function (ev) {
		ev.preventDefault();
		$("#modalMascota").modal("show");
	});

	/**
	 *
	 * Función Registrar cliente, mascota y detalle de la mascota
	 *
	 *
	 */

	$("#btnRegistroCliente").click(function (ev) {
		ev.preventDefault();

		//Formulario cliente
		//var documento = $("#documentoC").val();

		if (validar_form.form()) {
			if (table.rows().count() > 0) {
				$.ajax({
					type: "POST",
					url: "/tienda/Compra/compra/",
					data: {
						fechaCompra: fechaCompra,
						codigoCompra: codigoCompra,
						proveedor: proveedor,
						facturaProveedor: facturaProveedor,
						observaciones: observaciones,
						totalGlobal: totalGlobal,
					},
					success: function () {
						//CODIGO PARA REGISTRAR EL DETALLE
						$("#example2 tbody tr").each(function () {
							var codigoP = $(this).children().eq(0).text();

							var cantidad = $(this).closest("tr").find("td:eq(2)").text();
							var costo = $(this).closest("tr").find("td:eq(3)").text();
							var subtotal = $(this).closest("tr").find("td:eq(4)").text();
							var iva = $(this).closest("tr").find("td:eq(5)").text();

							$.ajax({
								type: "POST",
								url: "/tienda/Cliente/prueba",
								data: {
									tipoMascota: tipoMascota,
									nombreMascota: nombreMascota,
									raza: raza,
									sexo: sexo,
									peso: peso,
									unidad: unidad,
									cumpleanos: cumpleanos,
									edad: edad,
									unidad: unidad,
									tiempoM: tiempoM,
									observaciones: observaciones
								
								},
				
				
								success: function () {
										console.log('Todo bienn')
								},
								error: function () {
				
									console.log('Todo malll')
								},
							});
						});
					},
					error: function () {},
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
});
