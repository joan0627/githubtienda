$(document).ready(function () {

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




	
    /**
     * 
     * Función para añadir un Proveedor al detalle
     */
	
		$('#tableProveedor').DataTable({

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
					}
					
		
				}
				
			  
			]
		});


	



});
