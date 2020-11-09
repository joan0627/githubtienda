    
    
    
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