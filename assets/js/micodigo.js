

/* Código para la funcion eliminar utilizando sweetalert 2 */
(function () {

	$("tr td #delete").click(function (ev) {
		ev.preventDefault();
		var nombre = $(this).parents('tr').find('td:eq(1)').text();
		var documento = $(this).attr('data-documento');
		var self = this;

		Swal.fire({

			title: '¡Atención!',
			text: "¿Estás seguro que deseas eliminar el proveedor "+nombre+" ?",
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
					url: '/tienda/Proveedor/delete',
					data: { 'documento': documento },
					success: function () {
						$(self).parents('tr').remove();
						Swal.fire(
							{	

							title: '¡Proceso completado!',
							text: "El proveedor "+nombre+" ha sido eliminado exitosamente.",
							type: 'success',
							confirmButtonColor: '#28a745',
								
							}
						
							 	      
						)

					},
					error: function () {
						Swal.fire(
							{
								
								title: '¡Proceso no completado!',
								text: "El proveedor "+nombre+" no se puede eliminar, ya que esta asociado a otro proceso.",
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


})();


