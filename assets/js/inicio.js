$(document).ready(function(){
        /*FUNCIONES PARA CARGAR INFO DE USUARIOS*/
        $.ajax({
            type: "POST",
            url: "/tienda/inicio/todos_usuarios/",
            dataType: "JSON",
        
            success: function(data){

                $.each(data, function (i, item) {
    
                  $("#numUsuariosI").html(item.numUsuario);

                })
        
            }

        })

        //USUARIOS DESHABILITADOS
        $.ajax({
            type: "POST",
            url: "/tienda/inicio/usuarios_deshabilitados/",
            dataType: "JSON",
        
            success: function(data){

                $.each(data, function (i, item) {
    
                  $("#UDeshabilitados").html('Usuarios deshabilitados: '+item.numUsuario_deshabilitado);

                })
        
            }

        })

       /*FUNCIONES PARA CARGAR INFO DE PRODUCTOS*/
    
    
        //TODOS PRODUCTOS
        $.ajax({
            type: "POST",
            url: "/tienda/inicio/todos_productos/",
            dataType: "JSON",
        
            success: function(data){

                $.each(data, function (i, item) {
    
                  $("#numProductos").html(item.numProducto);

                })
        
            }

        })

         //TODOS PRODUCTOS RESGISTRADOS HOY

         var fechaActual = new Date();
         var fechaActualF = moment(fechaActual).format('YYYY-MM-DD');
         $.ajax({
            type: "POST",
            url: "/tienda/inicio/productos_hoy/",
            data:{fechaActualF : fechaActualF},
            dataType: "JSON",
        
            success: function(data){

                $.each(data, function (i, item) {
    
                  $("#productoshoy").html('Nuevos productos: '+item.resgistros_hoy);

                })
        
            }

        })


        /*FUNCIONES PARA CARGAR INFO DE CITAS*/
    

        //TODOS CITAS
        $.ajax({
            type: "POST",
            url: "/tienda/inicio/todas_citas/",
            dataType: "JSON",
        
            success: function(data){

                $.each(data, function (i, item) {
    
                  $("#totalcitas").html('Total de citas: '+item.numCitas);

                })
        
            }

        })

         //TODOS PRODUCTOS RESGISTRADOS HOY

         var mesActual = new Date();
         var AnoActualF = moment(mesActual).format('YYYY');
         var mesActualF = moment(mesActual).format('MM');

         var mesletra = moment(mesActualF,'MM').format("MMMM");

         function PrimeraMayuscula(string){
            return string.charAt(0).toUpperCase() + string.slice(1); 
         }

           mesletra = PrimeraMayuscula(mesletra.toLowerCase()); 

           $("#mesletra").html('Citas de: '+mesletra);


         $.ajax({
            type: "POST",
            url: "/tienda/inicio/citas_mes/",
            data:{mesActualF : mesActualF,
                AnoActualF : AnoActualF
            },
            dataType: "JSON",
        
            success: function(data){

                $.each(data, function (i, item) {
              
                  $("#citasMes").html(item.resgistros_mes);

                })
        
            }

        })


         /*FUNCIONES PARA CARGAR INFO DE VENTAS*/
         var mesActualVenta = new Date();
         var AnoActualVenta= moment(mesActualVenta).format('YYYY');
         var mesActualVentaF = moment(mesActualVenta).format('MM');
         var mesletraVenta = moment(mesActualVentaF,'MM').format("MMMM");

         function PrimeraMayusculaVenta(string){
            return string.charAt(0).toUpperCase() + string.slice(1); 
         }

            mesletraVenta = PrimeraMayusculaVenta(mesletraVenta.toLowerCase()); 

           $("#ventasmes").html('Ventas de: '+mesletraVenta);

        $.ajax({
            type: "POST",
            url: "/tienda/inicio/todas_ventas/",
            dataType: "JSON",
        
            success: function(data){

                $.each(data, function (i, item) {
                   
                    var venta = item.numVentas;
            
              
                  /*FUNCIONES PARA CARGAR INFO DE VENTAS DE SERVICIOS*/
                    $.ajax({
                        type: "POST",
                        url: "/tienda/inicio/todas_ventas_servicios/",
                        dataType: "JSON",
                    
                        success: function(data){

                            $.each(data, function (i, item) {
                                var venta_servicio = item.numVentas_servicio;
                                var total = Number(venta) + Number(venta_servicio);

                                $("#totalventas").html('Total de ventas: '+total);
                            })

                        },

                        error : function(){

                            $("#totalventas").html('Error');
                        }

                    })

                })


            }

        })


        $.ajax({
            type: "POST",
            url: "/tienda/inicio/suma/",
            dataType: "json",
        
            success: function(data){
                
                var ventas = data.ventas[0].totalventa;
                var ventasSevicios = data.ventaServicios[0].totalventaServicio;
           
                var totalsumaVentas = Number (ventas) + Number(ventasSevicios);
                $("#valorTotalventa").append(OSREC.CurrencyFormatter.format(totalsumaVentas, { currency: "COP" }),);
        
            }

        })




})