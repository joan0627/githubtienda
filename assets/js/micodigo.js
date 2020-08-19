/*Este es el codigo de los mensajes de alertas
Utilizando sweet alert 2*/


(function () {

	$("tr td #delete").click(function (ev) {
		ev.preventDefault();
		var nombre = $(this).parents('tr').find('td:eq(1)').text();
		var documento = $(this).attr('data-documento');
		var self = this;

		Swal.fire({

			title: '¡ATENCIÓN!',
			text: "¿Estás seguro que deseas eliminar el proveedor "+nombre+" ?",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#28a745',
			cancelButtonColor: '#d33',
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
							'¡El proveedor ha sido eliminado exitosamente!',
							 	      
						)

					},
					error: function () {
						Swal.fire(
							{
								icon: 'error',
								title: 'ATENCIÓN',
								text: "¡El proveedor no se puede eliminar, ya que esta asociado a otro proceso!",
							
								
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


