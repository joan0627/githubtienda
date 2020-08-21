

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

// Función para dehabilitar campos segun el select que seleccione.
/*
function habilitar(objecto) {
	var hab;
	frm=objecto.form;

	frm.edad.disabled = false;
	frm.unidadTiempo.disabled = false;
	frm.indicaciones.disabled = false;
	frm.contraIndicaciones.disabled = false;
	 
	num=objecto.selectedIndex;
	
		if (num==1) hab=true;

		else if (num==3) hab=false;
		
		else if (num==5) hab=true;

		else if (num==7) hab=true;
		frm.edad.disabled=hab;
		frm.unidadTiempo.disabled=hab;
		frm.indicaciones.disabled=hab;
		frm.contraIndicaciones.disabled=hab;
	


  }
  

$(document).ready(function(){
    $('categoria').on('change', function() {
		var ValorSelect = 0;
		$("indicaciones").show()

	  });
});
*/


$(document).ready(function(){
	if(localStorage.getItem('clave') != 1){

			$("#divIndicaciones").hide();
			$("#divcontraindicaciones").hide();
			$("#divEdad").hide();
			$("#divUnidadTiempo").hide();
			
	}
			
		
	$('#categoria').on('change',function(){

		var Valor = $(this).val();
		localStorage.setItem('clave',Valor);
	
	console.log(localStorage.getItem('clave',Valor));
	
		 if( localStorage.getItem('clave') ==1){
			 console.log('Estoy dentro oh me vengo');
			$('#divIndicaciones').show();
			$("#divIndicaciones").show();
			$("#divcontraindicaciones").show();
			$("#divEdad").show();
			$("#divUnidadTiempo").show();
			
			

		}else {
			$("#divIndicaciones").hide();
			$("#divcontraindicaciones").hide();
			$("#divEdad").hide();
			$("#divUnidadTiempo").hide();
		
			//alert('esta es la opcion 2')
		}
	
		
	});


});

