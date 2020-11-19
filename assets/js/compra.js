$(document).ready(function() {

    /*$("#proveedor").on("change", function() {
        Swal.fire({
            title: "¡Atención!",
            text: "¿Está seguro que deseas cambiar el proveedor? ",
            type: "question",
            showCancelButton: true,
            confirmButtonColor: "#28a745",
            cancelButtonColor: "#28a745",
            confirmButtonText: "Si",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.value) {
                $('#example2').DataTable().clear().draw();
            } else {
                alert('pulso NOO')
            }
        });
    });*/






    $('#proveedor').on('select2:selecting', function(e) {
        var v = $("#proveedor").val();


        Swal.fire({
            title: "¡Atención!",
            text: "¿Está seguro que desea seleccionar este proveedor? ",
            type: "question",
            showCancelButton: true,
            confirmButtonColor: "#28a745",
            cancelButtonColor: "#28a745",
            confirmButtonText: "Si",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.value) {

                $('#example2').DataTable().clear().draw();
                $('#addproductocompra').removeAttr('disabled');
            } else {


                $('#proveedor').val(v).trigger('change');
            }
        });
    });







    $("#proveedor").change(function() {

        var proveedor = $("#proveedor").val();

        // cargar();

        /**
         * 
         * Construcción e inicialización de la tabla de productos en Compra
         */
        var t1 = $("#example1").DataTable({


            destroy: true,
            //retrieve: true,
            stateSave: true,
            "ajax": {
                type: "POST",
                url: "/tienda/Compra/proveedormarca/",
                data: { "proveedor": proveedor }

            },
            language: {
                searchPlaceholder: "Estoy buscando...",
                url: "../assets/plugins/datatables/Spanish.lang",
            },
            bInfo: false,
            lengthMenu: [
                [5, 15, 25, 50, 100, -1],
                [5, 15, 25, 50, 100, "Todo"],
            ],


            columns: [
                { "data": "idProducto" },

                {
                    "data": "idCategoria",
                    "visible": false,
                },

                {
                    "render": function(data, type, row) {
                        return (row.descripcionPresentacion + ' X ' + row.valorMedida + ' ' + row.descripcionUnidadmedida + ' ' + row.nombreProducto);
                    }
                },

                {
                    //adds td row for button
                    data: null,
                    render: function(data, type, row) {

                        $(".cantidadinput").inputmask({
                            rightAlign: true,
                            alias: "numeric",
                            autoGroup: true,
                            min: 1,
                            allowMinus: false,
                            autoUnmask: true,
                            clearMaskOnLostFocus: false,

                        });

                        return "<div class='input-group' style='width: 80%;'><input  type='text' value='1' class=' form-control cantidadinput'></div>";



                    }
                },

                {
                    //adds td row for button
                    data: null,
                    render: function(data, type, row) {

                        $(".costoinput").inputmask({
                            alias: "currency",
                            prefix: "",
                            radixPoint: ",",
                            groupSeparator: ".",
                            removeMaskOnSubmit: true,
                            autoGroup: true,
                            digits: 0,
                            digitsOptional: false,
                            min: 0,
                            allowMinus: false,
                            placeholder: "0",
                            clearMaskOnLostFocus: false,
                        });

                        return " <div class='input-group '><div class='input-group-addon' style='color:green; font-weight: bold; font-size:20px'>$</div><input name='costoinput' type='text' class='costoinput form-control 'style='text-align:right' ></div>";


                    }
                },


                {
                    //adds td row for button
                    data: null,
                    render: function(data, type, row) {

                        $(".ivainput").inputmask({
                            //Quita el enmaskaramiento al enviar el dato
                            //autoUnmask: INVESTIGAR

                            rightAlign: true,
                            removeMaskOnSubmit: true,
                            prefix: "",
                            alias: "numeric",
                            groupSeparator: "",
                            autoGroup: true,
                            digits: 0,
                            digitsOptional: false,
                            min: 0,
                            max: 100,
                            allowMinus: false,
                            autoUnmask: true,
                            placeholder: "0",
                            clearMaskOnLostFocus: false,
                        });

                        return " <div class='input-group '><input  max=99 type='text' class=' percent form-control ivainput 'style='width:85% ;' value='0' ><div class='input-group-addon' style='color:gray; font-weight: bold; font-size:20px'>%</div></div>";


                    }
                },

                {
                    //adds td row for button
                    data: null,
                    render: function(data, type, row) {



                        return " <button class='btncarrito' style=' color: #5CB85C; border: none; background: none; outline: none;'><i class='fas fa-cart-plus' style='font-size:28px; '></i></button>";


                    }
                }
            ]



        });



        // anadir("#example1 tbody", t1);



    });




    /** 
     * 
     * Función Añadir al detalle de la Compra
     */

    //var anadir = function(tbody, t1) {


    $("#example1 tbody").on("click", ".btncarrito", function(e) {

        e.preventDefault();
        //var row = $(this).closest('tr');
        //ev.preventDefault();
        //var data = table.row( row ).data().name;

        var codigoP = $(this).closest("tr").find("td:eq(0)").text();
        var descripcion = $(this).closest("tr").find("td:eq(1)").text();
        var cantidad = $(this).closest("tr").find("td:eq(2)").find("input").val();
        var costo = $(this).closest("tr").find("td:eq(3)").find("input").val();
        costo = OSREC.CurrencyFormatter.parse(costo, {
            currency: "COP",
            locale: "es_CO",
        });
        var iva = $(this).closest("tr").find("td:eq(4)").find("input").val();
        var costototal = costo * cantidad;
        var totalivaproducto = costo * (iva / 100) * cantidad;
        var sumaiva = totalivaproducto;
        var cantidadT2 = 0;
        var v = true;
        var t = $("#example2").DataTable();
        var data = t.rows().data();
        $(this).closest("tr").addClass("selected");


        /*  data.each(function(value, index) {
              console.log('Data in index: ' + index + ' is: ' + value);
          });*/

        /** 
        *    Código para recorrer la tabla en busca de códigos de productos que ya 
        *   esten en el detalle
        * 
        $("#example2 tbody tr").each(function() {

            var codigoT2 = $(this).closest("tr").find("td:eq(0)").text();
            console.log('Este es el codigo tabla fondo' + codigoT2)
                //cantidadT2 = $(this).closest("tr").find("td:eq(2)").text();

            if (codigoT2 == codigoP) {
                cantidadT2 = $(this).closest("tr").find("td:eq(2)").text();
                $(this).closest("tr").find("td:eq(2)").text(parseInt(cantidadT2) + parseInt(cantidad));
                v = false;
            } else {
                v = true;
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
                html: "El producto ya existe en la tabla de detalle. <br> Si desea cambiar algún valor deberá quitar el producto del detalle.",
                type: "warning",
                confirmButtonColor: "#28a745",
            });
        } else {*/
        t.row
            .add([
                codigoP,
                descripcion,
                cantidad,
                OSREC.CurrencyFormatter.format(costo, { currency: "COP" }),
                OSREC.CurrencyFormatter.format(costototal, { currency: "COP" }),
                OSREC.CurrencyFormatter.format(totalivaproducto, { currency: "COP" }),
                "<button class='eliminar btn btn-danger btn-sm'><i class='fas fa-minus-circle'></i> Quitar </button>",
            ])

        .draw();
        // }
        // $(this, ".btncarrito").prop('disabled', true).attr('style', 'color: black !important;');
        $(this, ".btncarrito i").prop('disabled', true).css('color', '#8a8a8a');

    });

    // }

    /* $("#addproductocompra").on("click", function() {

         cargar();

     });*/ // tablaproductos.destroy();

    // carrito();


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

        buttons: [{
                text: "<i class='fas fa-table'></i> Limpiar tabla",
                className: "btn btn-primary",

                action: function(e, dt, node, config) {
                    tabladetallecompra = $("#example2").DataTable();
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

        footerCallback: function(row, data, start, end, display) {
            var api = this.api(),
                data;

            // Remove the formatting to get integer data for summation
            var intVal = function(i) {
                return typeof i === "string" ?
                    i.replace(/[^0-9]/g, '') / 100 :
                    typeof i === "number" ?
                    i :
                    0;
            };

            // Total over all pages
            total = api
                .column(4)
                .data()
                .reduce(function(a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

            var Totaliva = api
                .column(5)
                .data()
                .reduce(function(a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

            totalGlobal = api.data().reduce(function(a, b) {
                return intVal(Totaliva) + intVal(total);
            }, 0);

            // Update footer
            $("tr:eq(0) th:eq(1)", api.table().footer()).html(OSREC.CurrencyFormatter.format(total, { currency: 'COP', locale: 'es_CO' }));
            $("tr:eq(1) th:eq(1)", api.table().footer()).html(OSREC.CurrencyFormatter.format(Totaliva, { currency: 'COP', locale: 'es_CO' }));
            $("tr:eq(2) th:eq(1)", api.table().footer()).html(OSREC.CurrencyFormatter.format(totalGlobal, { currency: 'COP', locale: 'es_CO' }));
        },
    });




    //}




    /**
     * 
     * Función Registrar compra y detalle de la compra
     * 
     * 
     */


    var validar_formulario = $("#basic-form").validate({
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
        errorElement: 'p',

        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        }

    });




    $("#registrarCompra").click(function(ev) {
        ev.preventDefault();

        var fechaCompra = $("#fechaCompra").val();
        var codigoCompra = $("#idCompra").val();
        var proveedor = $("#proveedor").val();
        var facturaProveedor = $("#facturaProveedor").val();
        var observaciones = $("#observaciones").val();
        var tabladetallecompra = $("#example2").DataTable();


        if (validar_formulario.form()) {
            //asi se comprueba si el form esta validado o no
            /* $.ajax({
                 type: "POST",
                 url: "/tienda/Compra/registro/",
                 data: {
                     
                     proveedor:proveedor
                    
                 },

                 success: function () {
                     console.log("se envio bien");
                     
                 },

                 error: function () {
                     console.log("No se envio bien");
                 },
                 statusCode: {
                     400: function (data) {
                         var json = JSON.parse(data.responseText);
                         Swal.fire("¡Error!", json.msg, "error");
                     },
                 },
             });*/






            if (tabladetallecompra.rows().count() > 0) {
                Swal.fire({
                    title: "¡Atención!",
                    text: "¿Está seguro que desea registrar esta compra?",
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
                            success: function() {
                                /*Swal.fire({
                                    title: "¡El codigo es!" ,
                                    text: "Se guardo" ,
                                    type: "success",
                                    confirmButtonColor: "#28a745",
                                });*/

                                //CODIGO PARA REGISTRAR EL DETALLE
                                $("#example2 tbody tr").each(function() {
                                    //var tabladetallecompra = $("#example2").DataTable();
                                    var codigoP = $(this).children().eq(0).text();

                                    //var codigoP = $(this).closest("tr").find("td:eq(0)").text();
                                    //var descripcion = $(this).closest("tr").find("td:eq(1)").text();
                                    var cantidad = $(this).closest("tr").find("td:eq(2)").text();
                                    var costo = $(this).closest("tr").find("td:eq(3)").text();
                                    costo = OSREC.CurrencyFormatter.parse(costo, { currency: 'COP', locale: 'es_CO' })
                                    var subtotal = $(this).closest("tr").find("td:eq(4)").text();
                                    var iva = $(this).closest("tr").find("td:eq(5)").text();
                                    iva = OSREC.CurrencyFormatter.parse(iva, { currency: 'COP', locale: 'es_CO' })


                                    $.ajax({
                                        type: "POST",
                                        url: "/tienda/Compra/detalleCompra/",
                                        data: {
                                            codigoCompra: codigoCompra,
                                            codigo: codigoP,
                                            cantidad: cantidad,
                                            costo: costo,
                                            subtotal: subtotal,
                                            iva: iva
                                        },

                                        success: function() {
                                            Swal.fire({
                                                title: "¡Proceso completado!",
                                                text: "La compra se ha registrado exitosamente.",
                                                type: "success",
                                                confirmButtonColor: "#28a745",
                                            }).then(function() {
                                                window.location =
                                                    "http://localhost:8888/tienda/compra/";
                                            });
                                        },

                                        error: function() {
                                            Swal.fire({
                                                title: "¡Proceso no completado!",
                                                text: "La compra no se pudo registrar.",
                                                type: "warning",
                                                confirmButtonColor: "#28a745",
                                            });
                                        },
                                        statusCode: {
                                            400: function(data) {
                                                var json = JSON.parse(data.responseText);
                                                Swal.fire("¡Error!", json.msg, "error");
                                            },
                                        },
                                    });
                                });
                            },
                            error: function() {
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

    $("#example2").on("click", ".eliminar", function() {
        var t = $("#example2").DataTable();
        let $tr = $(this).closest("tr");
        var codigoT2 = $($tr).children().eq(0).text();
        console.log(codigoT2);
        // Le pedimos al DataTable que borre la fila

        $("#example1 tbody tr").each(function() {
            var codigoT1 = $(this).children().eq(0).text();
            //cantidadT2 = $(this).closest("tr").find("td:eq(2)").text();

            if (codigoT1 == codigoT2) {
                $(this).closest("tr").removeClass("selected");
                ///$(this).closest("tr").css('background-color', 'red');
                // $(this, ".btncarrito").prop('disabled', true);
                $(this).find('.btncarrito').removeAttr('disabled').css('color', '#5CB85C');


                console.log("hizo clic en la misma fila");
            }
        });

        t.row($tr).remove().draw(false);
    });



    /**
     * 
     * Función para anular la compra
     */

    //$("tr td #anular").click(function (ev) {
    $('#tablacompras').on('click', '.anularcompra', function(ev) {
        ev.preventDefault();


        var idCompras = $(this).attr("data-idCompras");
        var self = this;

        Swal.fire({
            title: "¡Atención!",
            html: "¿Está seguro que desea anular esta compra? <br> Este proceso es irreversible.",
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
                    success: function() {
                        Swal.fire({
                            title: "¡Proceso completado!",
                            text: "La compra" + " ha sido anulada exitosamente.",
                            type: "success",
                            confirmButtonColor: "#28a745",
                        });
                        $('#estadoCompra' + idCompras).replaceWith('<span class="badge badge-danger">Anulada</span>');
                        //$('#estadoCompra').parent().replace('<td><span class="badge badge-danger">Anulada</span></td>');
                        //$this.closest("td").find(".estadoCompra").replace('<td><span class="badge badge-danger">Anulada</span></td>');
                        //$('#ax tr').eq(0).replace('<td><span class="badge badge-danger">Anulada</span></td>');
                        // $('#anularCompra').attr("disabled");
                        $("#anularCompra" + idCompras).prop('disabled', true);
                        //$(self).parents("td").remove();
                        // $('#estadoCompra' + idCompras).addClass('badge badge-danger');
                        // $(this).parents("tr").find("td:eq(0)").text().remove();
                        //$(this).parents("tr").find('#estadoCompra').replaceWith('<td><span class="badge badge-danger">Anulada</span></td>');
                        // console.log(nombreCompra);
                        //$(this).parents("tr").find('td:eq(5)').css({'color':'red','font-size':'1.3em','background':'yellow'});
                        //  console.log( $(this).parents('tr').css({'color':'red','font-size':'1.3em','background':'yellow'}));           

                        // $('td span.badge').addClass('badge-danger');
                        // $(this).parents("tr").find("td:eq(5)").addClass('adge badge-danger');
                        //console.log(nombreCompra)
                        // $(this).children("td span").addClass('badge badge-danger');



                    },

                    error: function() {
                        Swal.fire({
                            title: "¡Proceso no completado!",
                            text: "La compra " +
                                " no se puede eliminar, ya que esta asociado a otro proceso.",
                            type: "warning",
                            confirmButtonColor: "#28a745",
                        });
                    },
                    statusCode: {
                        400: function(data) {
                            var json = JSON.parse(data.responseText);
                            Swal.fire("¡Error!", json.msg, "error");
                        },
                    },
                });
            }
        });
    });









});