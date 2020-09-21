
$(document).ready(function() {
 
  
	var table = $('#example1').DataTable({
	
		"language": {
			searchPlaceholder: "Estoy buscando...",
		  "url":'../assets/plugins/datatables/Spanish.lang'
		  
		},
		
		"bInfo": false,
		"lengthMenu": [
			[5, 15, 25, 50, 100, -1],
			[5, 15, 25, 50, 100, "Todo"]
		  ],
		 // data: null,
		  columns: [
			
			  { 'data': 'codigo'},
			  { 'data':  'categoria' },
			  { 'data':  'descripcion' },
			  {data: null, "defaultContent":" <div class='input-group pull-right'><input type='number' class='form-control 'style='width:85% ;text-align:right' id='cant' value='1'></div>"},
			  {data: null, "defaultContent":" <div class='input-group pull-right'><div class='input-group-addon' style='color:green; font-weight: bold; font-size:20px'>$</div><input type='text' class='form-control 'style='width:85% ;text-align:right' value='0'></div>"},
			  {data: null, "defaultContent":"<button><i class='fas fa-cart-plus' style='font-size:24px;color: #5CB85C;'></i></button></td>"}
		  ],
		
		
	});



 
    table.on( 'click', 'tr', function () {
		
		$(this).toggleClass('selected');

		var filas= table.rows('.selected').data().length ;
		$("#anadir").text('Añadir'+'('+filas+')');
		
		var codigoP = $(this).closest('tr').find('td:eq(0)').text();
		var descripcion = $(this).closest('tr').find('td:eq(2)').text();
		var cantidad = $(this).closest('tr').find('td:eq(3)').text();
		var costo = $(this).closest('tr').find('td:eq(4)').text();


			//var data =table.row($(this).parents("tr").data());
			//console.log(data);
		
			
			//$(this).children('td').each(function() {
				//var valor = $(this).find("td:last-child").text();
				//var valor =($(this).text());
				//console.log(valor);


		
				var t = $('#example2').DataTable();
				var datos = table.row($(this).parents('tr')).data();
			 
				$('#anadir').on( 'click', function () {
					t.row.add( [
					datos,
					datos,
					datos,
					datos,
					
					datos,
					
					"Iva",
					"Boton",
					
					
					] ).draw( false );
			 
					//counter++;
				} );
			 
				// Automatically add a first row of data
				//$('#addRow').click();
			

		
	

		//	} );


		/*	var ids = $.map(table.rows('.selected').data(), function (item) {
				return item[3	];

				
			});
			console.log("estos son"+ids);
*/
			//	alert( $(this).text());
			//var columna = table.row('.selected').data();
			//alert( columna);
		
		
		
		
	} );


	


  });



/*
  $(document).ready(function(){
    
    $("#example1").on('click', 'tr',  function(e) {
		var table = $('#example1').DataTable();
	  $(this).toggleClass('selected');
	
       
			var filas= table.rows('.selected').data().length ;
			$("#anadir").val(filas);
		
		e.preventDefault();
  });
});

*/


  

$(document).ready(function() {
	$('#example2').DataTable( {
		"language": {
			searchPlaceholder: "Estoy buscando...",
		  "url":'../assets/plugins/datatables/Spanish.lang'
		  
		},
		"bInfo": false,
		"bFilter":false,
		"bPaginate": false,
		dom: 'Bfrtip',
		buttons: [
			{
				text: 'Nueva compra',
				action: function ( e, dt, node, config ) {
					dt.ajax.reload();
				}
			}
			
		]
	} );
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
				text: "¿Estás seguro que deseas eliminar el producto "+nombreProducto+" ?",
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
								text: "El producto "+nombreProducto+" ha sido eliminado exitosamente.",
								type: 'success',
								confirmButtonColor: '#28a745',
									
								}
							
										   
							)
	
						},
						error: function () {
							Swal.fire(
								{
									
									title: '¡Proceso no completado!',
									text: "El producto "+nombreProducto+" no se puede eliminar, ya que esta asociado a otro proceso.",
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
	


