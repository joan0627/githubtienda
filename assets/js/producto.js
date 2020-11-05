$(document).ready(function () {

/**
 * 
 * Función para ocultar o mosrar campos según la categoria del producto
 */
    $('#categoria').on('change',function(){
        var selectCategoria = $(this).val();
        
        if (selectCategoria == 1) {
            $('.indicaciones_Contra').show();
            $('.edad').show();
            $('.Utiempo').show();
        }else {
          $('.indicaciones_Contra').hide();
          $('.edad').hide();
          $('.Utiempo').hide();
        }
    })




    /**
     * 
     * Función para eliminar un producto
     * 
     */

    $("tr td #deleteProducto").click(function (ev) {
		ev.preventDefault();
		var nombreProducto = $(this).parents('tr').find('td:eq(1)').text();
		var idProducto = $(this).attr('data-documento');
		var self = this;

		Swal.fire({

			title: '¡Atención!',
			text: "¿Estás seguro que deseas eliminar el producto " + nombreProducto + " ?",
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
					url: '/tienda/producto/delete',
					data: { 'idProducto': idProducto },
					success: function () {
						$(self).parents('tr').remove();
						Swal.fire(
							{

								title: '¡Proceso completado!',
								text: "El producto " + nombreProducto + " ha sido eliminado exitosamente.",
								type: 'success',
								confirmButtonColor: '#28a745',

							}


						)

					},
					error: function () {
						Swal.fire(
							{

								title: '¡Proceso no completado!',
								text: "El producto " + nombreProducto + " no se puede eliminar, ya que esta asociado a otro proceso.",
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