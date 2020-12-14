$(document).ready(function () {

    /**
	 *
	 * Función para anular la venta de un servicio
	 */

	$("#tablaVentasServicios").on("click", ".anularVentaServicio", function (ev) {
		ev.preventDefault();

		var idFactura = $(this).attr("data-idventasS");

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
					url: "/tienda/venta/anular_venta_servicio",
					data: { idFactura: idFactura },
					success: function () {
						Swal.fire({
							title: "¡Proceso completado!",
							text: "La venta ha sido anulada exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						$("#estadoventaservicio" + idFactura).replaceWith(
							'<span class="badge badge-danger">Anulada</span>'
						);
						$("#anularVentaServicio" + idFactura).prop("disabled", true);
                    },
                    
                    					
					error: function () {
						Swal.fire({
                            title: "¡Proceso no completado!",
                            text:
                            "La venta no se puede anular, ya que esta asociado a otro proceso.",
                            type: "warning",
                            confirmButtonColor: "#28a745",
						});
					},
				
				});
			}
		});
	});

});