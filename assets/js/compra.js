$(document).ready(function () {

/**
 * Creación de la tabla de productos en la sección de Compras
 */
$("#example1").DataTable({
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
                "<div class='input-group' style='width: 80%;'><input  type='text' value='1' class=' form-control cantidadinput'></div>",
        },
        {
            data: null,
            defaultContent:
                " <div class='input-group '><div class='input-group-addon' style='color:green; font-weight: bold; font-size:20px'>$</div><input  name='costoinput' type='text' class='costoinput form-control 'style='text-align:right' ></div>",
        },
        {
            data: null,
            defaultContent:
                " <div class='input-group '><input  max=99 type='text' class=' percent form-control ivainput 'style='width:85% ;' value='0' ><div class='input-group-addon' style='color:gray; font-weight: bold; font-size:20px'>%</div></div>",
        },
        {
            data: null,
            defaultContent:
                "<button class='btncarrito' style=' border: none; background: none; outline: none;'><i class='fas fa-cart-plus' style='font-size:28px;color: #5CB85C; '></i></button></td>",
        },
    ],
});


/**
 * Creación de la tabla de detalle en la sección de Compras
 */
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
                } else {
                    Swal.fire({
                        title: "¡Atención!",
                        text: "No hay datos disponibles para limpiar en esta tabla.",
                        type: "warning",
                        confirmButtonColor: "#28a745",
                    });
                }
            }
        }
      
    ],

    /** 
     * 
     * Footer de la tabla detalle de la sección Compras 
     * 
     * */

        footerCallback: function (row, data, start, end, display) {
        var api = this.api(),
            data;

        // Remove the formatting to get integer data for summation
        var intVal = function (i) {
            return typeof i === "string"
                ? i.replace(/[^0-9]/g, '') / 100
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
        $("tr:eq(0) th:eq(1)", api.table().footer()).html(OSREC.CurrencyFormatter.format(total, { currency: 'COP',locale: 'es_CO' }));
        $("tr:eq(1) th:eq(1)", api.table().footer()).html(OSREC.CurrencyFormatter.format(Totaliva, { currency: 'COP',locale: 'es_CO' }));
        $("tr:eq(2) th:eq(1)", api.table().footer()).html(OSREC.CurrencyFormatter.format(totalGlobal, { currency: 'COP',locale: 'es_CO' }));
    },
});








/** 
 * 
 * Función Añadir al detalle de la Compra
 */



$("#example1 tbody").on("click", ".btncarrito", function () {
    //var row = $(this).closest('tr');
    //ev.preventDefault();
    //var data = table.row( row ).data().name;


    var codigoP = $(this).closest("tr").find("td:eq(0)").text();
    var descripcion = $(this).closest("tr").find("td:eq(2)").text();
    var cantidad = $(this).closest("tr").find("td:eq(3)").find("input").val();
    var costo = $(this).closest("tr").find("td:eq(4)").find("input").val();
    costo = OSREC.CurrencyFormatter.parse(costo, { currency: 'COP',locale: 'es_CO' })
    var iva = $(this).closest("tr").find("td:eq(5)").find("input").val();
    var costototal = costo * cantidad;
    var totalivaproducto = costo * (iva / 100) * cantidad;
    var sumaiva = totalivaproducto;
    var cantidadT2 = 0;
    var v = true;
    var t = $("#example2").DataTable();

    console.log('Este es el formato de costo mascara ' +(costo)),
    console.log( +1000)
    

   // console.log('mascara convertida a number '+ Intl.NumberFormat(costo)),
   // console.log(new Intl.NumberFormat('es_CO', { style: 'currency', currency: 'COP' }).format(costo));
    //console.log(new Intl.NumberFormat().format(costo));

    $(this).closest("tr").addClass("selected");
    $("#example2 tbody tr").each(function () {
        var codigoT2 = $(this).children().eq(0).text();
        //cantidadT2 = $(this).closest("tr").find("td:eq(2)").text();

        if (codigoT2 == codigoP) {
            cantidadT2 = $(this).closest("tr").find("td:eq(2)").text();
            //$(this).closest("tr").find("td:eq(2)").text(parseInt(cantidadT2)+parseInt(cantidad));
            v = false;
        }
    });

    if (!v) {
        //alert(t.column(2).data());

        //cantidad = cantidad + t.column( 2 ).data() + codigoT2;
        // t.column( 2 ).data() +codigoT2;
        //.draw()
        //t.column( 2 ).data();
        Swal.fire({
            title: "¡Atención!",
            html:
                "El producto ya existe en la tabla de detalle. <br> Si desea cambiar algún valor deberá quitar el producto del detalle.",
            type: "warning",
            confirmButtonColor: "#28a745",
        });
    } else {
        t.row
            .add([
                codigoP,
                descripcion,
                cantidad,
                OSREC.CurrencyFormatter.format(costo, { currency: 'COP' }),
                OSREC.CurrencyFormatter.format(costototal, { currency: 'COP' }),
                OSREC.CurrencyFormatter.format(totalivaproducto, { currency: 'COP' }),
                "<button class='eliminar btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i> Quitar </button>"
                
            ])

            .draw();

        
    }
});


/**
 * 
 * Función Registrar compra y detalle de la compra
 * 
 * 
 */


var validar_formulario =$("#basic-form").validate({
    ignore: [],       
    rules: {
        proveedor: { required: true },
        facturaProveedor: { required: true }
    },
    onfocusout: false,
    onkeyup: false,
    onclick: false,

    messages: {
        proveedor: "El campo proveedor es obligatorio. ",
        facturaProveedor: "El campo número de la factura es obligatorio. "
    },
    errorElement : 'p',
    
    errorPlacement: function(error, element) {
        $(element).parents('.form-group').append(error);
      }

  });




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
                            totalGlobal: totalGlobal,
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
                                        cantidad:cantidad,
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
                                            window.location =
                                                "http://localhost:8888/tienda/compra/";
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







/**
 * 
 * Función quitar detalle de la compra
 * 
 */

$("#example2").on("click", ".eliminar", function () {
    var t = $("#example2").DataTable();
    let $tr = $(this).closest("tr");
    var codigoT2 = $($tr).children().eq(0).text();
    console.log(codigoT2);
    // Le pedimos al DataTable que borre la fila

    $("#example1 tbody tr").each(function () {
        var codigoT1 = $(this).children().eq(0).text();
        //cantidadT2 = $(this).closest("tr").find("td:eq(2)").text();

        if (codigoT1 == codigoT2) {
            $(this).closest("tr").removeClass("selected");
            ///$(this).closest("tr").css('background-color', 'red');
            console.log("hizo clic en la misma fila");
        }
    });

    t.row($tr).remove().draw(false);
});



/**
 * 
 * Función para anular la compra
 */

$("tr td #anular").click(function (ev) {
    ev.preventDefault();

    //var nombreCompra = $(this).parents("tr").find("td:eq(1)").text();
    var idCompras = $(this).attr("data-idCompras");
    var self = this;

    Swal.fire({
        title: "¡Atención!",
        text: "¿Estás seguro que deseas anular la compra?",
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
                        text: "La compra" + " ha sido anulada exitosamente.",
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