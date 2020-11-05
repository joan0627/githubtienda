
$(document).ready(function () {

    /**
     * 
     * Función para eliminar un servicio
     */

	$("tr td #deleteServicio").click(function (ev) {
		ev.preventDefault();
		var nombreServicio = $(this).parents('tr').find('td:eq(1)').text();
		var idServicio = $(this).attr('data-documento');
		var self = this;

		Swal.fire({

			title: '¡Atención!',
			text: "¿Estás seguro que deseas eliminar el servicio "+nombreServicio+" ?",
			type: 'question',
			showCancelButton: true,
			confirmButtonColor: '#28a745',
			cancelButtonColor: '#28a745',
			confirmButtonText: 'Si',
			cancelButtonText: 'No'
		}).then((result) => {

			if (result.value) {


				$.ajax({
					type: 'POST',
					url: '/tienda/Servicio/delete',
					data: { 'idServicio': idServicio },
					success: function () {
						$(self).parents('tr').remove();
						Swal.fire(
							{	

							title: '¡Proceso completado!',
							text: "El servicio "+nombreServicio+" ha sido eliminado exitosamente.",
							type: 'success',
							confirmButtonColor: '#28a745',
								
							}
						
									   
						)

					},
					error: function () {
						Swal.fire(
							{
								
								title: '¡Proceso no completado!',
								text: "El servicio "+nombreServicio+" no se puede eliminar porque está asociado a otro proceso.",
								type: 'warning',
								confirmButtonColor: '#28a745',
							}
							
									   
						)
					},
					 statusCode: {
						400: function (data) {
							var json = JSON.parse(data.responseText);
							Swal.fire(
								'¡Error!',
								json.msg,
								'error'
							)

						}
					}
				})



			}
		})
    });
    

});