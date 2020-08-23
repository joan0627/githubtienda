/*Este es el codigo de los mensajes de alertas
Utilizando sweet alert 2*/

$("#botonRegistroProducto").click(function(){
	Swal.fire({        
		type: 'success',
		title: 'Éxito',
		text: '¡Registro éxitoso!', 
    });    
});


<<<<<<< Updated upstream
=======








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
								text: "El proveedor "+nombre+" no se puede eliminar porque está asociado a otro proceso.",
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

// Función para dehabilitar campos segun el select que seleccione.
/*
function habilitar(objecto) {
	var hab;
	frm=objecto.form;
>>>>>>> Stashed changes

function CalcularPrecioVenta() {
	var costo = document.producto.costo.value;
	var utilidad = document.producto.utilidad.value;
	
	try{
	   //Calculamos el número escrito:
	   
		costo = (isNaN(parseInt(costo)))? 0 : parseInt(costo);
		utilidad = (isNaN(parseInt(utilidad)))? 0 : parseInt(utilidad);
		var precio=costo/(1-(utilidad/100));
		precio=precio.toFixed(2);
		document.producto.precioVenta.value =precio;
		
	}
	//Si se produce un error no hacemos nada
	catch(e) {}
 }


 function readImage (input) {
	
    if (input.files && input.files[0]) {
	  var reader = new FileReader();
	
      reader.onload = function (e) {
          $('#vistapreviaproducto').attr('src', e.target.result); // Renderizamos la imagen
      }
	  reader.readAsDataURL(input.files[0]);
	
	}
	
  }

  $('#cargaimagenproducto').change(function () {
	// Código a ejecutar cuando se detecta un cambio de archivO 
	readImage(this);
	
  });


  

  