

$(document).ready(function () {
	var table = $("#example1").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,
		lengthMenu: [
			[5, 15, 25, 50, 100, -1],
			[5, 15, 25, 50, 100, "Todo"],
		],
		// data: null,
		columns: [
			{ data: "codigo" },
			{ data: "categoria" },
			{ data: "descripcion" },
			{
				data: null,
				defaultContent:
					"<div class='input-group' style='width: 80%;'><input type='number' class='form-control'  value='1'></div>",
			},
			{
				data: null,
				defaultContent:
					" <div class='input-group '><div class='input-group-addon' style='color:green; font-weight: bold; font-size:20px'>$</div><input type='text' class='form-control 'style='width:95% ;text-align:right' value='0'></div>",
			},
			{
				data: null,
				defaultContent:
					" <div class='input-group '><input type='number' class='form-control 'style='width:85% ;' value='0'><div class='input-group-addon' style='color:gray; font-weight: bold; font-size:20px'>%</div></div>",
			},
			{
				data: null,
				defaultContent:
					"<button class='name' style=' border: none; background: none; outline: none;'><i class='fas fa-cart-plus' style='font-size:28px;color: #5CB85C; '></i></button></td>",
			},
		],
	});







	$('#example1 tbody').on('click', '.name', function () {

		//var row = $(this).closest('tr');

		//var data = table.row( row ).data().name;

		var codigoP = $(this).closest("tr").find("td:eq(0)").text();
		var descripcion = $(this).closest("tr").find("td:eq(2)").text();
		var cantidad = $(this).closest("tr").find("td:eq(3)").find("input").val();
		var costo = $(this).closest("tr").find("td:eq(4)").find("input").val();
		var iva = $(this).closest("tr").find("td:eq(5)").find("input").val();
		var subtotal = costo * cantidad;


		var t = $("#example2").DataTable();


		t.row
			.add([
				codigoP,
				descripcion,
				cantidad,
				costo,
				subtotal,
				iva,
				"<button class='eliminar btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i> Quitar </button>",


			])
			.draw(false);



	});





});



//Función para quitar un elemento de la tabla al pulsar el botón quitar
$(document).ready(function () {

	$("#example2").on('click', '.eliminar', function () {
		var t = $('#example2').DataTable();
		let $tr = $(this).closest('tr');

		// Le pedimos al DataTable que borre la fila
		t.row($tr).remove().draw(false);
	});
});






$(document).ready(function () {
	var prueba = 290;
	var codigoP = $(this).closest("tr").find("td:eq(0)").text();
	var descripcion = $(this).closest("tr").find("td:eq(1)").text();
	var cantidad = $(this).closest("tr").find("td:eq(2)").text();
	var costo = $(this).closest("tr").find("td:eq(3)").text();
	var subtotal = $(this).closest("tr").find("td:eq(4)").text();
	var iva = $(this).closest("tr").find("td:eq(5)").text();

	$('#example2').DataTable({
		"language": {
			searchPlaceholder: "Estoy buscando...",
			"url": '../assets/plugins/datatables/Spanish.lang'

		},
		"bInfo": false,
		"bFilter": false,
		"bPaginate": false,
		dom: 'Bfrtip',
		buttons: [
			{
				text: 'Nueva compra',
				action: function (e, dt, node, config) {
					dt.ajax.reload();
				}
			}

		],


		/*	"ajax": {
				type: 'POST',
				url: '/tienda/Compra/registro/',
				data: { 
					'codigo':codigoP,
					'cantidad':cantidad,
					'costo':costo,
					'subtotal':subtotal,
					'iva':iva
	
	
				 },
				 success: function (data) {
					 alert('Los datos fueron agregados con exito');
	
				 },error:function(jqXHR, textStatus,errorThrown){
					 console.log('error');
				 }
	
			},
				 */

	});

	$('#registrarCompra').click(function () {

		alert('me hixo xlo');

		$.ajax({
			type: 'POST',
			url: '/tienda/Compra/registro/',
			data: {
				'codigo': prueba,
				'cantidad': cantidad,
				'costo': costo,
				'subtotal': subtotal,
				'iva': iva


			},
			success: function () {

				Swal.fire(
					{

						title: '¡El codigo es!' + codigoP,
						text: "Se guardo" + prueba,
						type: 'success',
						confirmButtonColor: '#28a745',

					}


				)

			},
			error: function () {
				Swal.fire(
					{

						title: '¡Proceso no completado!',
						text: "No se guardo",
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

	});




});

///////////////////////////////////////////////////////////////////////////

/*
(function () {

  $("tr td #add").click(function (ev) {
	  ev.preventDefault();
	  var categoria = $(this).parents('tr').find('td:eq(1)').text();
	  var idProducto = $(this).attr('data-id');

	  console.log("este es el id del producto"+idProducto);
	  var self = this;

	  Swal.fire({

		  title: '¡Atención!',
		  text: "¿Estás seguro que deseas eliminar el proveedor "+categoria+" ?",
		  type: 'question',
		  showCancelButton: true,
		  confirmButtonColor: '#28a745',
		  cancelButtonColor: '#28a745',
		  confirmButtonText: 'Si',
		  cancelButtonText: 'No'
	  }).then((result) => {

		  if (result.value) {


	  	


		  }
	  })
  });


})();

*/

///////////////////////////////////////////////////////////////////////////





/* Código para la funcion eliminar utilizando sweetalert 2 */
(function () {

	$("tr td #add").click(function (ev) {
		ev.preventDefault();
		var nombre = $(this).parents('tr').find('td:eq(1)').text();
		var documento = $(this).attr('data-documento');
		var self = this;

		Swal.fire({

			title: '¡Atención!',
			text: "¿Estás seguro que deseas eliminar el proveedor " + nombre + " ?",
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
								text: "El proveedor " + nombre + " ha sido eliminado exitosamente.",
								type: 'success',
								confirmButtonColor: '#28a745',

							}


						)

					},
					error: function () {
						Swal.fire(
							{

								title: '¡Proceso no completado!',
								text: "El proveedor " + nombre + " no se puede eliminar porque está asociado a otro proceso.",
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


/*****************************************************************************/
// ** Código para la funcion eliminar un producto utilizando sweetalert 2 // **
/*****************************************************************************/



(function () {

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
					url: '/tienda/producto/deleteProducto',
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


$(document).ready(function () {
	//$('.dataTables_filter').addClass('pull-left');
	var prueba = "Este es el dato de prueba";
	var tablaMaestra = $("#tablaMaestra").DataTable({
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},

		bInfo: false,

		lengthChange: false,
		bPaginate:false,
		"ajax": {
			type: 'POST',
			url: '/tienda/Configuracion/listadoTipoDocumento',
			"dataSrc": '',
		},
		"columns":[

			{"data": "idTipoDocumento"},
			{"data": "descripcion"}

		]
	});
}); 


$(document).ready(function () {

	$("#btnRegistroTipoDocumento").click(function (ev) {
		var tablaMaestra = $("#tablaMaestra").DataTable();
		ev.preventDefault();
		var descripcion = $('#descripcionTipoDocumento').val(); 
		var idTipoDocumento = $('#idTipoDocumento').val(); 
		//alert($idTipoDocumento),
				$.ajax({
					type: 'POST',
					url: '/tienda/configuracion/registroTipoDocumento',
					data: { 'idTipoDocumento': idTipoDocumento,
							 'descripcion': descripcion
							
							},
					
				
					success: function () {						
						Swal.fire(
							{

								title: '¡Proceso completado!',
								text: "Se inserto correctamente",
								type: 'success',
								confirmButtonColor: '#28a745',

							}


						)					
						idTipoDocumento = Number(idTipoDocumento)+1;
						$('#idTipoDocumento').val(idTipoDocumento); 
						$('#descripcionTipoDocumento').val(""); 
						tablaMaestra.ajax.reload();
					},
					
					error: function () {
						Swal.fire(
							{

								title: '¡Proceso no completado!',
								text: "NO INSERTADO LOCO ",
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
				
	});

});


//Cerrar de manera forzada el Modal 
/*$(".cerrarModal").click(function(){
	$("#modal-registro").modal('hide')
  });
*/
