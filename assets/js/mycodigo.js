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
					"<div class='input-group' style='width: 80%;'><input min='1'max='10'  name='cant' type='number'  class=' form-control'  value='1'></div>",
			},
			{
				data: null,
				defaultContent:
					" <div class='input-group '><div class='input-group-addon' style='color:green; font-weight: bold; font-size:20px'>$</div><input name='costoinput' type='text' class='costoinput form-control 'style='text-align:right' value='0'></div>",
			},
			{
				data: null,
				defaultContent:
					" <div class='input-group '><input max=99 type='number' class=' percent form-control 'style='width:85% ;' value='0'><div class='input-group-addon' style='color:gray; font-weight: bold; font-size:20px'>%</div></div>",
			},
			{
				data: null,
				defaultContent:
					"<button class='btncarrito' style=' border: none; background: none; outline: none;'><i class='fas fa-cart-plus' style='font-size:28px;color: #5CB85C; '></i></button></td>",
			},
		],
	});

	$("#example1 tbody").on("click", ".btncarrito", function () {
		//var row = $(this).closest('tr');
		//ev.preventDefault();
		//var data = table.row( row ).data().name;


		var codigoP = $(this).closest("tr").find("td:eq(0)").text();
		var descripcion = $(this).closest("tr").find("td:eq(2)").text();
		var cantidad = $(this).closest("tr").find("td:eq(3)").find("input").val();
		var costo = $(this).closest("tr").find("td:eq(4)").find("input").val();
		var iva = $(this).closest("tr").find("td:eq(5)").find("input").val();
		var costototal = costo * cantidad;
		var totalivaproducto = costo * (iva / 100) * cantidad;
		var sumaiva = totalivaproducto;
		var cantidadT2 =0;
        var v=true;
		var t = $("#example2").DataTable();


		var validartabla = $("#a").validate({
			rules: {
				cant: { required: true },
				
			},
			messages: {
				cant: "El campo proveedor es obligatorio. ",
				
			},
			errorElement: "p",
		});

	


		/**
		 * cantidad: no vacio, min:1, no se puedan numero negativos,no decimales
		 * 
		 * costo: no se pueden numeros negativos, no vacio
		 * 
		 * iva: minimo 1 maximo 100, no numeros negativos,
		 * 
		 * 
		 */


/*
		function validacion() {
			if (cantidad=="") {
			  // Si no se cumple la condicion...
			  $.toaster({
                settings: {
                    'timeout': 23500,


                }
            });
            $.toaster({
                message: 'La cantidad no puede ser vacia.',
                title: 'Error',
                priority: 'danger',

            });;

			  return false;
			}

			else if(cantidad<1){
				$.toaster({
					settings: {
						'timeout': 3500,
	
	
					}
				});
				$.toaster({
					message: 'La cantidad no puede ser menor a 1.',
					title: 'Error',
					priority: 'danger',
	
				});;
				return false;

			}

			else if (costo=="") {
				$.toaster({
					settings: {
						'timeout': 3500,
	
	
					}
				});
				$.toaster({
					message: 'El costo no puede ser vacio.',
					title: 'Error',
					priority: 'danger',
	
				});;
			  return false;
			}

			else if (costo < 0 ) {
				$.toaster({
                settings: {
                    'timeout': 3500,


                }
            });
            $.toaster({
                message: 'El costo no puede ser menor a 0.',
                title: 'Error',
                priority: 'danger',

            });;
				return false;
			  }
			
			else if (iva=="") {
				$.toaster({
					settings: {
						'timeout': 3500,
	
	
					}
				});
				$.toaster({
					message: 'El iva no puede ser vacio.',
					title: 'Error',
					priority: 'danger',
	
				});;
			  return false;
			}

			else if(iva < 0 || iva >100){
				$.toaster({
					settings: {
						'timeout': 3500,

					}
				});
				$.toaster({
					message: 'El iva debe estar en un rango entre 1% a 100%',
					title: 'Error',
					priority: 'danger',
	
				});;
				return false;

			}

		  
			// Si el script ha llegado a este punto, todas las condiciones
			// se han cumplido, por lo que se devuelve el valor true
			return true;
		  }
/**/ 
	

			$(this).closest("tr").addClass('selected');
			$("#example2 tbody tr").each(function () {

				var codigoT2 = $(this).children().eq(0).text();
				//cantidadT2 = $(this).closest("tr").find("td:eq(2)").text();
	
				if(codigoT2==codigoP)
				{
					
	
					cantidadT2 = $(this).closest("tr").find("td:eq(2)").text()
					//$(this).closest("tr").find("td:eq(2)").text(parseInt(cantidadT2)+parseInt(cantidad));
					v=false;
					
				}
	
				
			});
	
			if(!v)
			{
				//alert(t.column(2).data());
	
				//cantidad = cantidad + t.column( 2 ).data() + codigoT2;
				// t.column( 2 ).data() +codigoT2;
				//.draw()
				//t.column( 2 ).data();
				Swal.fire({
					title: "¡Atención!",
					html: "El producto ya existe en la tabla de detalle. <br> Si desea cambiar algún valor deberá quitar el producto del detalle.",
					type: "warning",
					confirmButtonColor: "#28a745",
				});
				
				
	
				
			}
	
			else
			{
				t.row
				.add([
					codigoP,
					descripcion,
					cantidad,
				    costo, 
					costototal,
					totalivaproducto,
					"<button class='eliminar btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i> Quitar </button>",
				])
				.draw()
	
			}

		
				



		
	
	});


});

$(document).ready(function () {
	
	$("#example2").DataTable({
		
		language: {
			searchPlaceholder: "Estoy buscando...",
			url: "../assets/plugins/datatables/Spanish.lang",
		},
		bInfo: false,
		bFilter: false,
		bPaginate: false,
		dom: "Bfrtip",


		
	 buttons: [
			{

				text: "<i class='fas fa-table'></i> Limpiar tabla",
				className: "btn btn-primary",
			
				
				action: function (e, dt, node, config) {

					var tabladetallecompra = $("#example2").DataTable();
					if (tabladetallecompra.rows().count() > 0) {

						
					//	tabladetallecompra.buttons().enable(false);
				
						Swal.fire({
							title: "¡Atención!",
							text: "¿Estás seguro que deseas limpiar la tabla? ",
							type: "question",
							showCancelButton: true,
							confirmButtonColor: "#28a745",
							cancelButtonColor: "#28a745",
							confirmButtonText: "Si",
							cancelButtonText: "No",
						}).then((result) => {
							if (result.value) {
							
								tabladetallecompra.clear().draw();
							}
						});
						
					}

					else
					{

						
							Swal.fire({
								title: "¡Atención!",
								text: "No hay datos disponibles para limpiar en esta tabla.",
								type: "warning",
								confirmButtonColor: "#28a745",
							});
						


					}

				},
			}
			/*{


				extend: 'copyHtml5',
				className: "btn btn-primary",
				text: '<i class="fas fa-copy"></i> Copiar',

			}*/
		
		],

		footerCallback: function (row, data, start, end, display) {
			var api = this.api(),
				data;

			// Remove the formatting to get integer data for summation
			var intVal = function (i) {
				return typeof i === "string"
					? i.replace(/[\$,]/g, "") * 1
					: typeof i === "number"
					? i
					: 0;
			};

			// Total over all pages
			total = api
				.column(4)
				.data()
				.reduce(function (a, b) {
					return intVal(a) + intVal(b);
				}, 0);

			var Totaliva = api
				.column(5)
				.data()
				.reduce(function (a, b) {
					return intVal(a) + intVal(b);
				}, 0);

			 totalGlobal = api.data().reduce(function (a, b) {
				return intVal(Totaliva) + intVal(total);

			}, 0);

			// Update footer	
			$("tr:eq(0) th:eq(1)", api.table().footer()).html("$ " + total);
			$("tr:eq(1) th:eq(1)", api.table().footer()).html("$ " + Totaliva);
			$("tr:eq(2) th:eq(1)", api.table().footer()).html("$ " + totalGlobal);
	

			


		
			
		},
	});
});

//funcion encabezado
$(document).ready(function () {
	var validar_formulario = $("#basic-form").validate({
		rules: {
			proveedor: { required: true },
			facturaProveedor: { required: true },
		},
		messages: {
			proveedor: "El campo proveedor es obligatorio. ",
			facturaProveedor: "El campo número de la factura es obligatorio. ",
		},
		errorElement: "p",
	});

	var table = $("#idTable").DataTable();

	$("#registrarCompra").click(function (ev) {
		ev.preventDefault();

		var fechaCompra = $("#fechaCompra").val();
		var codigoCompra = $("#idCompra").val();
		var proveedor = $("#proveedor").val();
		var facturaProveedor = $("#facturaProveedor").val();
		var observaciones = $("#observaciones").val();
		var tabladetallecompra = $("#example2").DataTable();


		if (validar_formulario.form()) {
			//asi se comprueba si el form esta validado o no
			if (tabladetallecompra.rows().count() > 0) {
				Swal.fire({
					title: "¡Atención!",
					text: "¿Estás seguro que deseas registrar esta compra?",
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
							url: "/tienda/Compra/compra/",
							data: {
								fechaCompra: fechaCompra,
								codigoCompra: codigoCompra,
								proveedor: proveedor,
								facturaProveedor: facturaProveedor,
								observaciones: observaciones,
								totalGlobal:totalGlobal
							},
							success: function () {
								/*Swal.fire({
									title: "¡El codigo es!" ,
									text: "Se guardo" ,
									type: "success",
									confirmButtonColor: "#28a745",
								});*/

								//CODIGO PARA REGISTRAR EL DETALLE
								$("#example2 tbody tr").each(function () {
									//var tabladetallecompra = $("#example2").DataTable();
									var codigoP = $(this).children().eq(0).text();

									//var codigoP = $(this).closest("tr").find("td:eq(0)").text();
									//var descripcion = $(this).closest("tr").find("td:eq(1)").text();
									var cantidad = $(this).closest("tr").find("td:eq(2)").text();
									var costo = $(this).closest("tr").find("td:eq(3)").text();
									var subtotal = $(this).closest("tr").find("td:eq(4)").text();
									var iva = $(this).closest("tr").find("td:eq(5)").text();

									$.ajax({
										type: "POST",
										url: "/tienda/Compra/detalleCompra/",
										data: {
											codigoCompra: codigoCompra,
											codigo: codigoP,
											cantidad: cantidad,
											costo: costo,
											subtotal: subtotal,
											iva: iva,
										},

										success: function () {
											Swal.fire({
												title: "¡Proceso completado!",
												text: "La compra se ha registrado exitosamente.",
												type: "success",
												confirmButtonColor: "#28a745",
											}).then(function () {
												window.location = "http://localhost:8888/tienda/compra/";
											});
										},

										error: function () {
											Swal.fire({
												title: "¡Proceso no completado!",
												text: "La compra no se pudo registrar.",
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
								});
							},
							error: function () {
								/*Swal.fire({
									title: "¡Proceso no completado!",
									text: "No se guardo",
									type: "warning",
									confirmButtonColor: "#28a745",
								})*/
							},
						});
						//	var _form = $("#basic-form").serialize();
						//	console.log("form:\n", _form);
					}
				});
			} else {
				Swal.fire({
					title: "¡Proceso no completado!",
					text: "No se puede registrar por que no hay un producto en la tabla",
					type: "warning",
					confirmButtonColor: "#28a745",
				});
			}
		}
	});
});

//ev.preventDefault();

//Función para quitar un elemento de la tabla al pulsar el botón quitar
$(document).ready(function () {
	$("#example2").on("click", ".eliminar", function () {
		var t = $("#example2").DataTable();
		let $tr = $(this).closest("tr");
		var codigoT2 = $($tr).children().eq(0).text();
		console.log(codigoT2);
		// Le pedimos al DataTable que borre la fila
	
		$("#example1 tbody tr").each(function () {
			var codigoT1= $(this).children().eq(0).text();
			//cantidadT2 = $(this).closest("tr").find("td:eq(2)").text();

			if(codigoT1==codigoT2)
			{
				$(this).closest("tr").removeClass('selected');
				///$(this).closest("tr").css('background-color', 'red');	
				console.log('hizo clic en la misma fila')
			}
			
		});

		t.row($tr).remove().draw(false);

		
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
})();

/*****************************************************************************/
// ** Código para la funcion eliminar un producto utilizando sweetalert 2 // **
/*****************************************************************************/

(function () {
	$("tr td #deleteProducto").click(function (ev) {
		ev.preventDefault();

		var nombreProducto = $(this).parents("tr").find("td:eq(1)").text();
		var idProducto = $(this).attr("data-documento");
		var self = this;

		Swal.fire({
			title: "¡Atención!",
			text:
				"¿Estás seguro que deseas eliminar el producto " +
				nombreProducto +
				" ?",
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
					url: "/tienda/producto/deleteProducto",
					data: { idProducto: idProducto },
					success: function () {
						$(self).parents("tr").remove();
						Swal.fire({
							title: "¡Proceso completado!",
							text:
								"El producto " +
								nombreProducto +
								" ha sido eliminado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
					},
					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text:
								"El producto " +
								nombreProducto +
								" no se puede eliminar, ya que esta asociado a otro proceso.",
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
});

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
		bPaginate: false,
		dom: '<"pull-left"f>B',

		buttons: {
			buttons: [
				{
					text: "<i class='fas fa-plus-circle'></i> Crear",
					action: function (e, node, config) {
						$("#modalRegistroTipoDocumento").modal("show");
						$("#descripcionTipoDocumento").val("");
					},
				},
			],
			dom: {
				button: {
					tag: "button",
					className: "btn btn-success",
				},
				buttonLiner: {
					tag: null,
				},
			},
		},

		ajax: {
			type: "POST",
			url: "/tienda/Configuracion/listadoTipoDocumento",
			dataSrc: "",
		},
		columns: [
			{ data: "idTipoDocumento" },
			{ data: "descripcion" },
			{
				defaultContent:
					"<div style='text-align: center;'><a class='btn btn-info btn-sm' id='editartd'><i class='fas fa-pencil-alt'></i> Editar </a> <a id='eliminartd' class='btn btn-danger btn-sm' href=''><i class='fas fa-trash'></i> Eliminar </a></div>",
			},
		],
	});
});

//Codigo para registrar un tipo de docuemento
$(document).ready(function () {
	var tablaMaestra = $("#tablaMaestra").DataTable();
	//$('#codigoTipoDocumento').val("");
	//$('#descripcionTipoDocumento').val("");

	$("#btnRegistroTipoDocumento").click(function (ev) {
		ev.preventDefault();

		var idTipoDocumento = $("#codigoTipoDocumento").val();
		var descripcion = $("#descripcionTipoDocumento").val();
		// var r = 'registro';

		$.ajax({
			type: "POST",
			url: "/tienda/configuracion/registrarActualizar",
			data: {
				idTipoDocumento: idTipoDocumento,
				descripcion: descripcion,
			},

			success: function () {
				Swal.fire({
					title: "¡Proceso completado!",
					text:
						'El tipo documento "' +
						descripcion +
						'" se ha registrado correctamente.',
					type: "success",
					confirmButtonColor: "#28a745",
				});
				idTipoDocumento = Number(idTipoDocumento) + 1;
				$("#idTipoDocumento").val(idTipoDocumento);
				$("#descripcionTipoDocumento").val("");
				tablaMaestra.ajax.reload();
			},

			error: function () {
				Swal.fire({
					title: "¡Proceso no completado!",
					text:
						'El tipo documento "' + descripcion + '"no se ha podido registrar.',
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

		//var id = $(this).parents('tr').find('td:eq(0)').text();
		//var TipoDocumento = $(this).parents('tr').find('td:eq(1)').text();

		//$('#codigoTipoDocumento').val(id);
		//$('#descripcionTipoDocumento').val(TipoDocumento);

		//var idTipoDocumento = $('#idTipoDocumento').val();
		//	var descripcion = $('#descripcionTipoDocumento').val();
		//var r=true;
	});
});

//Código para editar el Tipo de documento
$(document).ready(function () {
	$("#tablaMaestra").on("click", "#editartd", function (ev) {
		ev.preventDefault();

		var id = $(this).parents("tr").find("td:eq(0)").text();
		var descripcion = $(this).parents("tr").find("td:eq(1)").text();

		$("#modalRegistroTipoDocumento").modal("show");

		$("#codigoTipoDocumento").val(id);
		$("#descripcionTipoDocumento").val(descripcion);

		//var descripcion = $('#descripcionTipoDocumento').val();
	});
});

//Código para eliminar el Tipo de documento
(function () {
	$("#tablaMaestra").on("click", "#eliminartd", function (ev) {
		ev.preventDefault();
		var id = $(this).parents("tr").find("td:eq(0)").text();
		var TipoDocumento = $(this).parents("tr").find("td:eq(1)").text();

		var self = this;

		Swal.fire({
			title: "¡Atención!",
			text:
				"¿Estás seguro que deseas eliminar el tipo de documento con id " +
				id +
				" ?",
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
					url: "/tienda/Configuracion/delete",
					data: { id: id },
					success: function () {
						$(self).parents("tr").remove();
						Swal.fire({
							title: "¡Proceso completado!",
							text:
								"El tipo de documento " +
								TipoDocumento +
								" ha sido eliminado exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
					},
					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text:
								"El tipo de documento " +
								TipoDocumento +
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
})();

//Función para quitar un elemento de la tabla al pulsar el botón quitar
/*
$(document).ready(function () {

	$("#categoriatab").on('click', function () {

		alert('click en tab');
	});
});
*/

$(document).ready(function () {
	$("#cerrarsesion").on("click", function (ev) {
		ev.preventDefault();

		Swal.fire({
			title: "¡Atención!",
			text: "¿Estás seguro que deseas cerrar sesión? ",
			type: "question",
			showCancelButton: true,
			confirmButtonColor: "#28a745",
			cancelButtonColor: "#28a745",
			confirmButtonText: "Si",
			cancelButtonText: "No",
		}).then((result) => {
			if (result.value) {
				window.location.href =
					"http://localhost:8888/tienda/login/cerrarsesion";
			}
		});
	});
});

//No dejar cerrar el modal
$("#modalcontrasena").modal({ backdrop: "static", keyboard: false });



$(document).ready(function() {


	$('.js-example-placeholder-single').select2({
		placeholder: '-Seleccione un proveedor-',
		theme: "bootstrap4",
		allowClear: true
	
	  });
	
});





/*****************************************************************************/
// ** Código para la funcion de anular una compra utilizando sweetalert 2 // **
/*****************************************************************************/

$(document).ready(function() {
	
	
	$("tr td #anular").click(function (ev) {
		ev.preventDefault();

		//var nombreCompra = $(this).parents("tr").find("td:eq(1)").text();
		var idCompras = $(this).attr("data-idCompras");
		var self = this;

		Swal.fire({
			title: "¡Atención!",
			text:
				"¿Estás seguro que deseas anular la compra?",
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
					url: "/tienda/compra/anular",
					data: { idCompras: idCompras },
					success: function () {				
						Swal.fire({
							title: "¡Proceso completado!",
							text:
								"La compra" +
								" ha sido anulada exitosamente.",
							type: "success",
							confirmButtonColor: "#28a745",
						});
						//$('#estadoCompra').replaceWith('<td><span class="badge badge-danger">Anulada</span></td>');
						//$('#estadoCompra').parent().replace('<td><span class="badge badge-danger">Anulada</span></td>');
						//$this.closest("td").find(".estadoCompra").replace('<td><span class="badge badge-danger">Anulada</span></td>');
						//$('#ax tr').eq(0).replace('<td><span class="badge badge-danger">Anulada</span></td>');
						//$('#anular').attr( "disabled" );
						//$("#anular").prop('disabled', true);
						//$(self).parents("td").remove();	
					   $(this).parents("tr").find("td:eq(0)").text().remove();				
					},
					
					error: function () {
						Swal.fire({
							title: "¡Proceso no completado!",
							text:
								"La compra " +
								" no se puede eliminar, ya que esta asociado a otro proceso.",
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
});


//Codigo para enmaskarar los input

$(document).ready(function(){

	$("#facturaProveedor").inputmask({ alias: "currency"},{ "placeholder": "0.000000" });

  });