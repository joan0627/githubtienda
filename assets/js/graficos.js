$(document).ready(function(){

  
    $("#ano").change(function(){

       
        var ano = $('#ano').val();
        var ano = moment(ano,'YYYY').format("YYYY");
      
    
        $.ajax({
            type: "POST",
            url: "/tienda/informe/informeCompra/",
            data : {ano:ano},
            dataType: "json",

            success: function (data) {
            

                var enero = data.enero[0].totalCompra;
                var febrero = data.febrero[0].totalCompra;
                var marzo = data.marzo[0].totalCompra;
                var abril = data.abril[0].totalCompra;
                var mayo = data.mayo[0].totalCompra;
                var junio = data.junio[0].totalCompra;
                var julio = data.julio[0].totalCompra;
                var agosto = data.agosto[0].totalCompra;
                var septiembre = data.septiembre[0].totalCompra;
                var octubre = data.octubre[0].totalCompra;
                var noviembre = data.noviembre[0].totalCompra;
                var diciembre = data.diciembre[0].totalCompra;
               
              

                ventasxmes=[enero, febrero, marzo, abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre];

              
	
                var ctx = document.getElementById('myChart').getContext('2d'); // 2d context
                var ctx = $('#myChart'); // jQuery instance
                var ctx = 'myChart'; // element id

                  //Eliminamos y creamos la etiqueta canvas
                  $('#myChart').remove();
                  $('#contenedor_grafico').append("<canvas id='myChart'></canvas>");
                  
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        datasets: [{
                            label: 'Compras por mes.',
                            data: ventasxmes,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.6)',
                                'rgba(54, 162, 235, 0.6)',
                                'rgba(255, 206, 86, 0.6)',
                                'rgba(153, 102, 255, 0.6)',
                                'rgba(245, 155, 20, 0.6)',
                                'rgba(20, 245, 238, 0.6)',
                                'rgba(41, 39, 214, 0.6)',
                                'rgba(69, 150, 196, 0.6)',
                                'rgba(11, 133, 15, 0.6)',
                                'rgba(75, 192, 192, 0.6)',
                                'rgba(153, 102, 255, 0.6)',
                                'rgba(255, 0, 0, 0.6)',
                            
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(245, 155, 20, 1)',
                                'rgba(20, 245, 238, 1)',
                                'rgba(41, 39, 214, 1)',
                                'rgba(69, 150, 196, 1)',
                                'rgba(11, 133, 15, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 0, 0, 1)',
                                
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        

                        tooltips: { 
                            callbacks: {
                                          label: function(tooltipItem, data) {
                                              return "Total de compras: " + OSREC.CurrencyFormatter.format(tooltipItem.yLabel, { currency: "COP" })
                                          },
                                      }
                              },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    callback: function(label, index, labels) {
                                        return OSREC.CurrencyFormatter.format(label, { currency: "COP" })
                                        
                                    },
                                    
                                }
                            }]
                        }
                    },

                    
            
            })

            },

            error: function () {
                Swal.fire({
                    title: "¡Proceso no completado!",
                    text: "Informe mal.",
                    type: "warning",
                    confirmButtonColor: "#28a745",
                });
            },
        });
            
            
        


    });

    $('#ano').trigger('change');

    



    /*INFORME PARA VENTA  PRODUCTOS*/

    $("#anoVenta").change(function(){

       
        var anoVenta = $('#anoVenta').val();
        var anoVenta = moment(anoVenta,'YYYY').format("YYYY");
         
        $.ajax({
            type: "POST",
            url: "/tienda/informe/informeVenta/",
            data : {anoVenta:anoVenta},
            dataType: "json",

            success: function (data) {
            

                var eneroV = data.eneroV[0].totalVenta;
                var febreroV = data.febreroV[0].totalVenta;
                var marzoV = data.marzoV[0].totalVenta;
                var abrilV = data.abrilV[0].totalVenta;
                var mayoV = data.mayoV[0].totalVenta;
                var junioV = data.junioV[0].totalVenta;
                var julioV = data.julioV[0].totalVenta;
                var agostoV = data.agostoV[0].totalVenta;
                var septiembreV = data.septiembreV[0].totalVenta;
                var octubreV = data.octubreV[0].totalVenta;
                var noviembreV = data.noviembreV[0].totalVenta;
                var diciembreV = data.diciembreV[0].totalVenta;
               

                ventasxmes=[eneroV, febreroV, marzoV, abrilV,mayoV,junioV,julioV,agostoV,septiembreV,octubreV,noviembreV,diciembreV];

              
	
                var ctx = document.getElementById('myChart_venta').getContext('2d'); // 2d context
                var ctx = $('#myChart_venta'); // jQuery instance
                var ctx = 'myChart_venta'; // element id

                  //Eliminamos y creamos la etiqueta canvas
                  $('#myChart_venta').remove();
                  $('#contenedor_grafico_venta').append("<canvas id='myChart_venta'></canvas>");
                  
                var myChart_venta = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        datasets: [{
                            label: 'Ventas de productos por mes.',
                            data: ventasxmes,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.6)',
                                'rgba(54, 162, 235, 0.6)',
                                'rgba(255, 206, 86, 0.6)',
                                'rgba(153, 102, 255, 0.6)',
                                'rgba(245, 155, 20, 0.6)',
                                'rgba(20, 245, 238, 0.6)',
                                'rgba(41, 39, 214, 0.6)',
                                'rgba(69, 150, 196, 0.6)',
                                'rgba(11, 133, 15, 0.6)',
                                'rgba(75, 192, 192, 0.6)',
                                'rgba(153, 102, 255, 0.6)',
                                'rgba(255, 0, 0, 0.6)',
                            
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(245, 155, 20, 1)',
                                'rgba(20, 245, 238, 1)',
                                'rgba(41, 39, 214, 1)',
                                'rgba(69, 150, 196, 1)',
                                'rgba(11, 133, 15, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 0, 0, 1)',
                                
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {

                        tooltips: { 
                            callbacks: {
                                          label: function(tooltipItem, data) {
                                              return "Total de ventas de productos: " + OSREC.CurrencyFormatter.format(tooltipItem.yLabel, { currency: "COP" })
                                          },
                                      }
                              },
                        
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    callback: function(label, index, labels) {
                                        return OSREC.CurrencyFormatter.format(label, { currency: "COP" })
                                        
                                    },
                                    
                                }
                            }]
                        }
                    },

                    
            
            })

            },

            error: function () {
                Swal.fire({
                    title: "¡Proceso no completado!",
                    text: "informe mal.",
                    type: "warning",
                    confirmButtonColor: "#28a745",
                });
            },
        });
            
            
        


    });

    $('#anoVenta').trigger('change');




    /*INFORME PARA VENTA  SERVICIOS*/

    $("#anoVentaS").change(function(){

       
        var anoVentaS = $('#anoVentaS').val();
        var anoVentaS = moment(anoVentaS,'YYYY').format("YYYY");
         
        $.ajax({
            type: "POST",
            url: "/tienda/informe/informeVentaServicio/",
            data : {anoVentaS:anoVentaS},
            dataType: "json",

            success: function (data) {
            

                var eneroVS = data.eneroVS[0].totalVentaServicio;
                var febreroVS = data.febreroVS[0].totalVentaServicio;
                var marzoVS = data.marzoVS[0].totalVentaServicio;
                var abrilVS = data.abrilVS[0].totalVentaServicio;
                var mayoVS = data.mayoVS[0].totalVentaServicio;
                var junioVS = data.junioVS[0].totalVentaServicio;
                var julioVS = data.julioVS[0].totalVentaServicio;
                var agostoVS = data.agostoVS[0].totalVentaServicio;
                var septiembreVS = data.septiembreVS[0].totalVentaServicio;
                var octubreVS = data.octubreVS[0].totalVentaServicio;
                var noviembreVS = data.noviembreVS[0].totalVentaServicio;
                var diciembreVS = data.diciembreVS[0].totalVentaServicio;
               

                ventasxmes=[eneroVS, febreroVS, marzoVS, abrilVS,mayoVS,junioVS,julioVS,agostoVS,septiembreVS,octubreVS,noviembreVS,diciembreVS];

              
	
                var ctx = document.getElementById('myChart_ventaS').getContext('2d'); // 2d context
                var ctx = $('#myChart_ventaS'); // jQuery instance
                var ctx = 'myChart_ventaS'; // element id

                  //Eliminamos y creamos la etiqueta canvas
                  $('#myChart_ventaS').remove();
                  $('#contenedor_grafico_ventaS').append("<canvas id='myChart_ventaS'></canvas>");
                  
                var myChart_venta = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        datasets: [{
                            label: 'Ventas de servicios por mes.',
                            data: ventasxmes,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.6)',
                                'rgba(54, 162, 235, 0.6)',
                                'rgba(255, 206, 86, 0.6)',
                                'rgba(153, 102, 255, 0.6)',
                                'rgba(245, 155, 20, 0.6)',
                                'rgba(20, 245, 238, 0.6)',
                                'rgba(41, 39, 214, 0.6)',
                                'rgba(69, 150, 196, 0.6)',
                                'rgba(11, 133, 15, 0.6)',
                                'rgba(75, 192, 192, 0.6)',
                                'rgba(153, 102, 255, 0.6)',
                                'rgba(255, 0, 0, 0.6)',
                            
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(245, 155, 20, 1)',
                                'rgba(20, 245, 238, 1)',
                                'rgba(41, 39, 214, 1)',
                                'rgba(69, 150, 196, 1)',
                                'rgba(11, 133, 15, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 0, 0, 1)',
                                
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {

                        tooltips: { 
                            callbacks: {
                                          label: function(tooltipItem, data) {
                                              return "Total de ventas de servicios: " + OSREC.CurrencyFormatter.format(tooltipItem.yLabel, { currency: "COP" })
                                          },
                                      }
                              },
                        
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    callback: function(label, index, labels) {
                                        return OSREC.CurrencyFormatter.format(label, { currency: "COP" })
                                        
                                    },
                                    
                                }
                            }]
                        }
                    },

                    
            
            })

            },

            error: function () {
                Swal.fire({
                    title: "¡Proceso no completado!",
                    text: "informe mal.",
                    type: "warning",
                    confirmButtonColor: "#28a745",
                });
            },
        });
            
            
        


    });

    $('#anoVentaS').trigger('change');

    

});