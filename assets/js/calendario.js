$(document).ready(function () {
    limpiarnotificaciones();
    notificaciones();

    refrescar();
    var n;

 /***//////////////////////////////////////////////////////////////////////////***/
    $('#calendar').fullCalendar({ //INICIO DE LA CONFIGURACIÓN DEL CALENDARIO
    
        /*Configuración General*/
        //Idioma fullCalendar
        locale: 'es',
        //Vista por defecto: Calendario del mes
        defaultView: 'month',
        //Los eventos se puede arrastrar
         editable:false,
        //Permite a un usuario resaltar varios días o intervalos de tiempo haciendo clic y arrastrando.
        selectable: true,

        /*Aplica para las vista de Agenda del dia o Agenda de la semana*/
        //Quitar el encabezado que dice : Todo el dia de la vista Agenda del dia
        allDaySlot:false,
        //Hora minima en la vista Agenda del dia y Agenda del mes
        minTime: "08:00:00",
        //Hora máxima en la vista Agenda del dia y Agenda del mes
        maxTime: "20:00:00",
        //Establecer intervalos de 15 min para la vista Agenda del Dia
        slotDuration: '00:15:00',
        slotLabelInterval: 15,
        //Formato de intervalos en la vista Agenda del dia
        slotLabelFormat: 'h(:mm) a',
        //No superponer los eventos en la vista Agenda del dia
        slotEventOverlap:false,

        /*Para los eventos*/
        //Doy formato a la hora de los eventos
        timeFormat: 'h(:mm) a',
        //Mostrar la hora que termina el evento
        displayEventEnd: true,
        //Para que aparezca la opción de ver 'Más' para desplegar una ventana emergente con
        //todos los eventos el total máx q podrá mostrar sera de 6 eventos por recuadro
        eventLimit: 6,
        //Color predeterminado para los eventos
        //eventColor: '#2CB05B',

        /*Para la vista de Calendario*/
        //Oculto fechas del mes pasado o del mes siguiente para tener un mes limpio
        showNonCurrentDates: false,
        //Cantidad de semanas que se van a mostrar según el mes en la vista Calendario
        //Se muestra el número de semanas correcto según el mes
        fixedWeekCount: false,

        /*Rendimiento*/
       // lazyFetching:true,
    
      
       
        //Configuración del encabezado
        header: 
        {
            left:'',
            center: 'title'
        },

       /* businessHours: [ // specify an array instead
            {
              dow: [ 1, 2, 3 ,4,5,6], // Monday, Tuesday, Wednesday,Thursday,Friday, Saturday
              start: '08:00', // 8am
              end: '20:00' // 8pm
            },
            {
              dow: [ 7 ], //Sunday
              start: '09:00', // 9am
              end: '14:00' // 2pm
            }
          ],
          selectConstraint: "businessHours",    */
      
       /*
       * Función para desactivar fechas pasadas a la actual+
         el problema es que oculta los eventos pasados.
        validRange: function(nowDate){
            return {start: nowDate} //to prevent anterior dates
        },*/
       

        //Eventos que se cargan desde la base de datos: Están en formato JSON
       
        eventSources: [

            // your event source
            {
            url:'http://localhost:8888/tienda/agenda/cargarcitas' // use the `url` property
         
            },

            {
            url:'http://localhost:8888/tienda/configuracion/cargardisponibilidad' // use the `url` property
             
            },

            /*
            aqui hirian los eventos creados en disponibilidad,
            disponibilidad del mes: selecciono los dias o el dia, que NO puedo
            trabajar. Luego se crea un evento con esa informacion, que sera
            eventos de fondo que cargare aqui para que esos dias esten pintados 
            en el calendario de agenda y fuera de eso no se puedan hacer:
            dayClick,evendrop, ni nada pq son dias desactivados. 
            
             */

        ],
     
       /* eventMouseover: function(event, jsEvent, view) {
         //poner tooltipo con info
            
        },
        
        eventMouseout: function(event, jsEvent, view) {
          //quitar tooltip con info
        },*/
       


    /***//////////////////////////////////////////////////////////////////////////***/

        //Función cuando el usuario da un click en una fecha del calendario
        dayClick:function(date,jsEvent,view){
            //alert('La fecha seleccionada es  '+date.format());
           // alert('La vista en la que estas es  '+view.name);
             //$(this).css('background-color','blue');
           
              
            //Obtengo la fecha actual y la comparo con la seleccionada
             if (moment().format('YYYY-MM-DD') <= date.format()) {
                
                //Limpiar formulario
               limpiarFormulario();
   
               cargarmascotas();
               $('#botonRegistroCita').show();
               $('#botonEditarCita').hide();
               $('#botonEliminarCita').hide();
               $('#divhora').hide();
               $('#estado').hide();
               $('#ob').addClass('col-md-12');
               

             $("#clienteselect").select2({
                placeholder: "-Seleccione un cliente-",
                theme: "bootstrap4",
                
            });

            
               //Setear en el campo fecha del formulario la fecha en la cual se da click
              
               fecha=  $('#fechaCita').val(moment(date).format('DD-MM-YYYY'));
                //$('#fechaCita').val(date.format('DD/MM/YYYY'));
               //Abrir modal después de que de click en una fecha del calendario


               var currentTime = new Date();
               var currentTimef= moment(currentTime).format('DD-MM-YYYY');
           
               var fechaCalendario= date;
               var fechaCalendariof=  moment(fechaCalendario).format('DD-MM-YYYY');

               if(fechaCalendariof > currentTimef)
               {
           
                   $('#timepicker').datetimepicker('minDate', false);
               }
               else
               {
           
                    $('#timepicker').datetimepicker('minDate', moment());
               }
               
                 



              $('#modal-cita').modal();
            

            } 

            else {
                
           return false;
              
            }

        },
           
        
     

        
      /***//////////////////////////////////////////////////////////////////////////***/

        //Función cuando el usuario da click en un EVENTO(cintillo) del calendario
          eventClick:function(calEvent,jsEvent,view){


            /*Función para no dejar abrir evento con estado CANCELADA, NO ASISTIÓ Y FINALIZADA*/

            if(calEvent.estado == 4 || calEvent.estado == 5  || calEvent.estado == 3)
            {

                return false;
            }

            $("#checkboxcolor").prop('checked', false); 
            //$('#color').val('').prop("disabled", true);
            $("#checkboxcolortexto").prop('checked', false); 
           // $("#colortexto").prop("disabled", true);

            $('#botonRegistroCita').hide();
            $('#botonEditarCita').show();
            $('#botonEliminarCita').show();
            $('#divhora').hide();
            $('#estado').show();
            $('#ob').removeClass('col-md-12');
            $('#ob').addClass('col-md-6');

           
            $("#idCita").val(calEvent.id);
            $("#asunto").val(calEvent.title);  
            $("#color").val(calEvent.color);
            $("#colortexto").val(calEvent.textColor);
            $("#observacionesCita").val(calEvent.descripcion);


            //Llenamos los datos del tipo de servicio, servicio, mascota y el cliente
            llenardatos(calEvent.idservicio,calEvent.mascota);
            cargarestado(calEvent.id);
          
          
         
          
           //$("#estadocita").val(calEvent.estado).trigger('change');
            //$("#color").val(calEvent.color);
            //$("#colortexto").val(calEvent.textColor);

         
            cambiarestado(calEvent.color,calEvent.textColor);
            bloquearcheck(calEvent.estado);




            
            /**
             * Se realiza de esta forma ya que en la BD viene la hora y 
             * fecha juntas, se utiliza entonces _i.split para separar y enviar 
             * cada dato a su respectivo input.
             *  
             */
            FechaHora = calEvent.start._i.split(" ");
          
            $('#fechaCita').val(moment(FechaHora[0],'YYYY-MM-DD').format('DD-MM-YYYY'));
             $('#horaCita').val(moment(FechaHora[1],'HH:mm:ss').format('hh:mm a'));


           /*  var hoy = new Date();
             var hoy1 = moment(hoy).format('DD-MM-YYYY');

            
         
             var fechaC= $('#fechaCita').val();
            

             if(fechaC > hoy1)
             {
         
                 $('#timepicker').datetimepicker('minDate', false);
             }
             else
             {
         
                  $('#timepicker').datetimepicker('minDate', moment());
             }

*/


             //Función para validar que la hora de fin no sea inferior a la hora de inicio del evento
             var horaMin =  $('#horaCita').val();

            
            $('#timepickerfin').datetimepicker('minDate', moment(horaMin,'hh:mm a').add(1, 'minutes'));
            $('#modal-cita').modal();
           
      
         
          },





        /***//////////////////////////////////////////////////////////////////////////***/

  

          eventRender: function(event, element) {
           // element.append("<br/>" + event.start); 
           //element.find(".fc-event-title").append("<br/>" + event.descripcion);

           //Código para ocultar los eventos de tipo:No disponible
           if(event.title == 'No disponible')
           {
               element.css('display','none ')
           }

           //Código para tachar el nombre de los eventos que han sido CANCELADOS
           if(event.estado == 4)
           {
               element.find(".fc-time").css('text-decoration','line-through');
               element.find(".fc-title").css('text-decoration','line-through');
              
           }

         /*  //Convierto lo que llega de la base de datos para que se muestre en los cintillos 
           //en formato hh:mm a
           inicio = moment(event.start,'HH:mm:ss').format('hh:mm a');
           fin =  moment(event.end,'HH:mm:ss').format('hh:mm a')


           element.find('.fc-time').html(inicio + " - " + fin + "<br>");*/

        }


         
       
      });//FIN DE LA CONFIGURACIÓN DEL CALENDARIO

     
     
       

 /***//////////////////////////////////////////////////////////////////////////***/
     
      /**
       * 
       * Función para REGISTRAR eventos del modal al calendario
       */

      var nuevaCita;

       $('#botonRegistroCita').click(function(e){
        e.preventDefault();
         RecolectarDatos(1); 

         var validar_formulario = $("#form-cita").validate({
            ignore: [],
            rules: {
                tiposervicioscita: { required: true },
                serviciocita: { required: true },
                asunto: { required: true },
                clienteselect: { required: true },
                mascotacliente: { required: true },
                fechaCita: { required: true },
                horaCita: { required: true }
            
            },
            onfocusout: false,
            onkeyup: false,
            onclick: false,
    
            messages: {
                tiposervicioscita: "El campo tipo de servicio es obligatorio. ",
                serviciocita: "El campo servicio es obligatorio. ",
                asunto: "El campo asunto es obligatorio. ",
                clienteselect: "El campo cliente es obligatorio.",
                mascotacliente: "El campo nombre de la mascota es obligatorio. ",
                fechaCita: "El campo fecha de la cita es obligatorio. ",
                horaCita: "El campo hora es obligatorio. "
            },
            errorElement: 'p',
    
            errorPlacement: function(error, element) {
                $(element).parents('.form-group').append(error);
            }
    
        });



        if (validar_formulario.form()) {

         verificarcita('registrarcita');
        }
            
                /*
                
               */

       
        //RecolectarDatos();
       
        //Agregar cita desde el formulario del modal, se utiliza la 
        //función renderEvent y se pasa los datos de la cita
        //Pinta el cintillo :$('#calendar').fullCalendar('renderEvent',nuevaCita);
    

        //Se cierra el modal : $('#modal-cita').modal('toggle');
       




       });


 /***//////////////////////////////////////////////////////////////////////////***/

     /**
       * 
       * Función para ELIMINAR eventos del modal al calendario
       */
   /*    $('#botonEliminarCita').click(function(){
  
        RecolectarDatos();
        Swal.fire({
            title: "¡Atención!",
            text: "¿Está seguro que desea eliminar esta cita? ",
            type: "question",
            showCancelButton: true,
            confirmButtonColor: "#28a745",
            cancelButtonColor: "#28a745",
            confirmButtonText: "Si",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.value) {
                EnviarInformacion('eliminarcita',nuevaCita);
                Swal.fire({
                    title: "¡Proceso completado!",
                    text: "La cita ha sido eliminada exitosamente.",
                    type: "success",
                    confirmButtonColor: "#28a745",
                }).then(function() {
                   // window.location = "http://localhost:8888/tienda/agenda/";
                    $('#calendar').fullCalendar('render');
                });
               

            }
            
        });
       });*/

 /***//////////////////////////////////////////////////////////////////////////***/

        /*
       * 
       * Función para EDITAR eventos del modal al calendario
       */
       $('#botonEditarCita').click(function(e){
       
        e.preventDefault();
        RecolectarDatos(2);


        var validar_formulario = $("#form-cita").validate({
            ignore: [],
            rules: {
                tiposervicioscita: { required: true },
                serviciocita: { required: true },
                asunto: { required: true },
                clienteselect: { required: true },
                mascotacliente: { required: true },
                fechaCita: { required: true },
                horaCita: { required: true }
            
            },
            onfocusout: false,
            onkeyup: false,
            onclick: false,
    
            messages: {
                tiposervicioscita: "El campo tipo de servicio es obligatorio. ",
                serviciocita: "El campo servicio es obligatorio. ",
                asunto: "El campo asunto es obligatorio. ",
                clienteselect: "El campo cliente es obligatorio.",
                mascotacliente: "El campo nombre de la mascota es obligatorio. ",
                fechaCita: "El campo fecha de la cita es obligatorio. ",
                horaCita: "El campo hora es obligatorio. "
            },
            errorElement: 'p',
    
            errorPlacement: function(error, element) {
                $(element).parents('.form-group').append(error);
            }
    
        });

        if (validar_formulario.form()) {

        verificarcita('editarcita');
        }
 

       
       });



 /***//////////////////////////////////////////////////////////////////////////***/




       function verificarcita(accion)
       {

        var r;
        var e;
        var c;

        $.ajax({
            type: "POST",
            url: "/tienda/Agenda/verificardisponibilidad",
            data:nuevaCita,
            ///dataType:'json',
            success: function (data) {
                data = JSON.parse(data);
                
                /*Comprobar si el JSON viene vacio*/ 

                //No hay una disponibilidad creada
                if(jQuery.isEmptyObject(data))
                {
                    //Comprobar si hay citas en esa fecha para que no se crucen
                    console.log('Disponibilidad no creada')
                  
                    $.ajax({
                        type: "POST",
                        url: "/tienda/Agenda/verificarcita",
                        data:nuevaCita,
                         //dataType: 'json',
                        success: function (data) {

                            data = JSON.parse(data);

                            //console.log('el valor de data es '+data)
                             //No hay citas creadas ese dia
                            if(jQuery.isEmptyObject(data)){

                                operacion(accion,true);
                            }

                           //if(data === false){
                                //Puede registrar tranquilamente
                               // operacion(accion,true);
                                //return r= true;

                           // }

                            else
                            {
                                //Comprobar si las citas que estan creadas ese dia se cruzan
                                //con la nueva cita que esta a punto de crearse
                             
                               $.each(data, function (i, item) {

                                   
                               e='no';
                                    //Si se cruza entonces saldrá la alerta
                                   if(moment(nuevaCita.start).isBetween(item.start, item.end) || moment(nuevaCita.end).isBetween(item.start, item.end) )
                                    {
                                     
                                        Swal.fire({
                                            title: "¡Atención!",
                                            html: "Ya existe una cita en esa fecha y hora. <br> Por favor programe la cita nuevamente.",
                                            type: "warning",
                                            confirmButtonColor: "#28a745",
                                        });

                                      
                                            return false;
                                    }
                                    else
                                    {


                                        var currentTime1 = new Date();
                                        currentTime1 =  moment(currentTime1).format('YYYY-MM-DD HH:mm');
                                                console.log('tiempo actual '+currentTime1)
                                        
                                        if(moment(currentTime1).isAfter(nuevaCita.start) && accion != 'editarcita')
                                        {
                                            Swal.fire({
                                                title: "¡Atención!",
                                                html: "No se puede crear una cita en una hora o fecha pasada.",
                                                type: "warning",
                                                confirmButtonColor: "#28a745",
                                            });
    
                                            e='no';
                                        }
                                        else
                                        {
                                            e = 'si';
                                        }
                                        
                                    }

                                   
                                 
                                    
               
                                });

                               
                                if(e === 'si'){
                                
                                    operacion(accion,true);
                                }

                            

                            }
                         
                            
                        },
                        error: function () {
            
                            Swal.fire({
                                title: "¡Proceso no completado!",
                                text: "La cita no se pudo registrar.",
                                type: "error",
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
                //Hay disponibilidad creada
                else
                {

                    console.log('Hay una disponibilidad este dia');
                    //Recorro los eventos creados en disponibilidad: Eventos ocupados
                    
                    $.each(data, function (i, item) {

                      
                        /*Si hay enventos ocupados que se crucen con la nueva cita,
                         entonces saldrá la alerta*/
                         r= 'no';
                        if(nuevaCita.start >= item.start && nuevaCita.end <= item.end)
                        {
                            Swal.fire({
                                title: "¡Atención!",
                                html: "No hay disponibilidad desde la(s) "+ moment( data[0].start).format("h:mm a ") + "hasta la(s) "+  moment(data[0].end).format("h:mm a ")+ ".<br> Por favor programe la cita en otro horario.",
                                type: "warning",
                                confirmButtonColor: "#28a745",
                            });

                            return  false;
                           
                        }

                        else
                        {
                           r= 'si';
                          
                        }
                    });

                    if(r === 'si')
                    {

                              
                    $.ajax({
                        type: "POST",
                        url: "/tienda/Agenda/verificarcita",
                        data:nuevaCita,
                         //dataType: 'json',
                        success: function (data) {

                            data = JSON.parse(data);

                            //console.log('el valor de data es '+data)
                             //No hay citas creadas ese dia
                            if(jQuery.isEmptyObject(data)){

                                operacion(accion,true);
                            }

                           //if(data === false){
                                //Puede registrar tranquilamente
                               // operacion(accion,true);
                                //return r= true;

                           // }

                            else
                            {
                                //Comprobar si las citas que estan creadas ese dia se cruzan
                                //con la nueva cita que esta a punto de crearse
                             
                               $.each(data, function (i, item) {

                                   
                               c='no';
                                    //Si se cruza entonces saldrá la alerta
                                   if(moment(nuevaCita.start).isBetween(item.start, item.end) || moment(nuevaCita.end).isBetween(item.start, item.end) )
                                    {
                                     
                                        Swal.fire({
                                            title: "¡Atención!",
                                            html: "Ya existe una cita en esa fecha y hora. <br> Por favor programe la cita nuevamente.",
                                            type: "warning",
                                            confirmButtonColor: "#28a745",
                                        });

                                      
                                            return false;
                                    }
                                    else
                                    {

                                        var currentTime2 = new Date();
                                        currentTime2 =  moment(currentTime2).format('YYYY-MM-DD HH:mm');

                                        if(moment(currentTime2).isAfter(nuevaCita.start) && nuevaCita.estado==1)
                                        {
                                            Swal.fire({
                                                title: "¡Atención!",
                                                html: "No se puede crear una cita en una hora o fecha pasada.",
                                                type: "warning",
                                                confirmButtonColor: "#28a745",
                                            });
    
                                            c='no';
                                        }
                                        else
                                        {
                                            c = 'si';

                                        }
                                       
                                      
                                    }

                                   
                                 
                                    
               
                                });

                                /*Si no hay eventos ocupados en la fecha y hora de la nueva cita
                                entonces se podrá crear la cita tranquilamente*/
                                if(c === 'si'){
                                
                                    operacion(accion,true);
                                }

                            

                            }
                         
                            
                        },
                        error: function () {
            
                            Swal.fire({
                                title: "¡Proceso no completado!",
                                text: "La cita no se pudo registrar.",
                                type: "error",
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


                    else
                    {
                    
                    }
                    
                        
                

                }
               
            },
            error: function () {
  
                Swal.fire({
                    title: "¡Proceso no completado!",
                    text: "La disponibilidad no se pudo verificar.",
                    type: "error",
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

 function operacion(accion,valor){

    
 
    if(valor)
    {
        
        if(accion == 'registrarcita')
        {

            Swal.fire({
                title: "¡Atención!",
                text: "¿Está seguro que desea registrar esta cita? ",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: "#28a745",
                cancelButtonColor: "#28a745",
                confirmButtonText: "Si",
                cancelButtonText: "No",
            }).then((result) => {
              
                if (result.value) {
                 
                    
                    Swal.fire({
                        title: "¡Proceso completado!",
                        text: "La cita ha sido registrada exitosamente.",
                        type: "success",
                        confirmButtonColor: "#28a745",
                    }).then(function() {
                        EnviarInformacion(accion,nuevaCita);
                        n=false;
                        limpiarnotificaciones();
                        notificaciones();
                    })
                    

                }
            });
            
        }
        else if (accion == 'editarcita' && i==1)
        {

            Swal.fire({
                title: "¡Atención!",
                text: "¿Está seguro que desea actualizar esta cita? ",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: "#28a745",
                cancelButtonColor: "#28a745",
                confirmButtonText: "Si",
                cancelButtonText: "No",
            }).then((result) => {
                if (result.value) {
              
                    Swal.fire({
                        title: "¡Proceso completado!",
                        text: "La cita ha sido actualizada exitosamente.",
                        type: "success",
                        confirmButtonColor: "#28a745",
                    }).then(function() {
                        EnviarInformacion(accion,nuevaCita);
                        limpiarnotificaciones();
                        notificaciones();
                        if(historial==1)
                        {
                            
                            $("#modal-historial").modal({ 
                                backdrop: "static", 
                                keyboard: false 
                            });
                        }
                        else
                        {
                            historial=0;
                            if(auth ==1)
                            {
                            limpiarModalPago();
                            $("#modal-pagarCita").modal({ 
                                backdrop: "static", 
                                keyboard: false 
                            });
                             pagoCita();
                           }
                          

                        }
                     
                    });
                   

                }
                
            });

        }

       
    }

 }

 /***//////////////////////////////////////////////////////////////////////////***/
       
       var horaFinal;
       var i=1;
       var auth=0;
       var historial = 0;

       function RecolectarDatos(accion,his)
       {

        var currentTime = moment();
        //moment(myDate).add(5, 'hours').format('YYYY-MM-DD hh:mm:ss');

        if(accion == 1) //Viene de REGISTRO CITA
        {
            if($('#tiposervicioscita').val() == 1) //Servicio de Vacunación : 1
            {
              
                //Establecemos un intervalo de 15 min para las citas de tipo Vacunación 
             horaFinal = moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+  moment($('#horaCita').val(), 'hh:mm a').add(15, 'minutes').format('HH:mm:ss');
    
            }
            
             //Establecemos un intervalo de una hora para las citas de tipo Cuidado y bienestar : 2 
            else if($('#tiposervicioscita').val() == 2)
            {
                horaFinal =moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+  moment($('#horaCita').val(), 'hh:mm a').add(60, 'minutes').format('HH:mm:ss');
    
            }        
            //Establecemos un intervalo de 15 min para las citas de tipo Desparasitasión : 3 
            else if($('#tiposervicioscita').val() == 3)
            {
                horaFinal =moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+  moment($('#horaCita').val(), 'hh:mm a').add(15, 'minutes').format('HH:mm:ss');
    
            }
    

        } else if(accion == 2) //Viene de EDITAR CITA
        {

          
            var fechaC = moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD' )+ " "+moment($('#horaCita').val(),'hh:mm a').format('HH:mm:ss');
            var cu= moment(currentTime).format('YYYY-MM-DD HH:mm:ss' );

           
            if($('#estadoCita').val() == 3 && cu > fechaC) //SI LA CITA ES CON ESTADO FINALIZADA
            {
                //moment($('#horaCita').val(), 'hh:mm a').add(60, 'minutes').format('HH:mm:ss');
                
               // ESTO FINALIZA A LA HORA ACTUAL: horaFinal =  moment(currentTime).format('YYYY-MM-DD HH:mm' );

               horaFinal = moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+  moment($('#horaFinCita').val(), 'hh:mm a').format('HH:mm:ss');

                //Si el servicio es vacunación y la cita está FINALIZADA se abrirá el modal del historial
                if($('#tiposervicioscita').val() == 1 || $('#tiposervicioscita').val() == 3){
                    
                    historial=1;
                    auth=0;
                }
                else
                 {
                     historial=0;
                      /**AUTORIZAR ABRIR MODAL DE PAGO */
                        auth=1;
                 }
               
               
              
            }
            else if($('#estadoCita').val() == 3 && cu < fechaC)//SI LA CITA ES CON ESTADO FINALIZADA
            {
 
                Swal.fire({
                    title: "¡Proceso no completado!",
                    text: "La cita aún no se cumple, por lo tanto no se puede finalizar.",
                    type: "warning",
                    confirmButtonColor: "#28a745",
                
                });
                historial=0;
                i= 0;
                 /** NO AUTORIZAR ABRIR MODAL DE PAGO */
                 auth=0;
                
            } else if($('#estadoCita').val() == 2 && fechaC < cu){//SI LA CITA ES CON ESTADO EN PROCESO
                 /** NO AUTORIZAR ABRIR MODAL DE PAGO */
                 auth=0;
                 historial=0;
            }else if($('#estadoCita').val() == 2 && fechaC != cu)//SI LA CITA ES CON ESTADO EN PROCESO
            {
                 Swal.fire({
                    title: "¡Proceso no completado!",
                    text: "La cita aún no se cumple, por lo tanto no puede estar en proceso.",
                    type: "warning",
                    confirmButtonColor: "#28a745",
                
                });
             /** NO AUTORIZAR ABRIR MODAL DE PAGO */
                 auth=0;
                i= 0;
                historial=0;
            }
            else{
                i=1;

            if($('#tiposervicioscita').val() == 1) //Servicio de Vacunación : 1
            {
              
                //Establecemos un intervalo de 15 min para las citas de tipo Vacunación 
             horaFinal = moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+  moment($('#horaCita').val(), 'hh:mm a').add(15, 'minutes').format('HH:mm:ss');
    
            }
            
             //Establecemos un intervalo de una hora para las citas de tipo Cuidado y bienestar : 2 
            else if($('#tiposervicioscita').val() == 2)
            {
                horaFinal =moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+  moment($('#horaCita').val(), 'hh:mm a').add(60, 'minutes').format('HH:mm:ss');
    
            }        
            //Establecemos un intervalo de 15 min para las citas de tipo Desparasitasión : 3 
            else if($('#tiposervicioscita').val() == 3)
            {
                horaFinal =moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+  moment($('#horaCita').val(), 'hh:mm a').add(15, 'minutes').format('HH:mm:ss');
    
            }
    
            }

          
    


        }
   
       
    

        nuevaCita = {
            id:$('#idCita').val(),
            idservicio:$('#serviciocita').val(),
            title:$('#asunto').val(),
            mascota:$('#mascotacliente').val(), //traer del campo escondiido   ojo
            //(moment('15-06-2010', 'DD-MM-YYYY')).format('MM-DD-YYYY')
            start: moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+moment($('#horaCita').val(),'hh:mm a').format('HH:mm:ss'),
            //start:$('#fechaCita').val()+ " "+$('#horaCita').val(),
            end: horaFinal,
            color: $("#color").val(),
            textColor:$('#colortexto').val(),
            descripcion: $('#observacionesCita').val(),
            estado: $('#estadoCita').val(),
            //fecha: fecha
            fecha:moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD')
           // estado:$('#estadocita').val()
        };

        

       
    }


/*
    function RecolectarDatos2()
       {
        
        //moment(myDate).add(5, 'hours').format('YYYY-MM-DD hh:mm:ss');

        nuevaCita = {
            id:$('#idCita').val(),
            idservicio:$('#serviciocita').val(),
            title:$('#asunto').val(),
            mascota:$('#mascotacliente').val(), //traer del campo escondiido   ojo
            start:$('#fechaCita').val()+ " "+$('#horaCita').val(),
            end:$('#fechaCita').val()+ " "+  moment($('#horaCita').val(), 'HH:mm:ss').add(60, 'minutes').format('HH:mm'),
            color: $("#color").val(),
            textColor:$('#colortexto').val(),
            descripcion: $('#observacionesCita').val(),
            estado: $('#estadoCita').val(),
            //fecha: fecha
            fecha:$('#fechaCita').val()
           // estado:$('#estadocita').val()
        };

       
    }

*/



     /***//////////////////////////////////////////////////////////////////////////***/

        function EnviarInformacion(accion,objEvento,modal)
        {
            $.ajax({
                type: "POST",
                url: "/tienda/Agenda/"+accion,
                data:nuevaCita,
                 //dataType: 'json',
                success: function (data) {
                  

                    if(data)
                    { 
                        $('#modal-cita').modal('toggle');
                        $('#calendar').fullCalendar('refetchEvents');
                       
                       /* if(!modal)
                        {
                           $('#modal-cita').modal('toggle');
                        }*/


                      
                    }
                    
                },
                error: function () {
    
                    Swal.fire({
                        title: "¡Proceso no completado!",
                        text: "La operación no pudo ser procesada.",
                        type: "error",
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


    /***//////////////////////////////////////////////////////////////////////////***/
       
        function limpiarFormulario()
        {
            $("#idCita").val('');
            $('#tiposervicioscita').val('').prop('disabled',false);
            $('#serviciocita').val('').prop('disabled',true);
            $("#checkboxasunto").prop('checked', false); 
            $('#asunto').val('').prop("disabled", true);
            $("#horaCita").val('');
             $("#clienteselect").val('').trigger('change').prop('disabled',false);
            $("#mascotacliente").val('').prop('disabled',true);
            $('#razam').val('');
            $('#especiem').val(''); 
            $("#observacionesCita").val('');
            $("#checkboxcolor").prop('checked', false); 
            $("#checkboxcolor").prop('disabled', false); 
            $('#color').val('').prop("disabled", true);
            $("#checkboxcolortexto").prop('checked', false); 
            $("#checkboxcolortexto").prop('disabled', false); 
            $("#colortexto").prop("disabled", true);
        }

    

     /***//////////////////////////////////////////////////////////////////////////***/
      
     function llenardatos(id,mascota)
     {
        var ser = $("#serviciocita");
        var mas = $("#mascotacliente");
        var cliente;
        
        //////////////////////////////////////////////////////////////////////////////////
        //Llenar el servicio y el tipo de servicio
           $.ajax({
                    type:"POST",
                   // data: {id:id},
                    url: "/tienda/Agenda/llenarservicio",
                    data:{id:id},
                    dataType: 'json',
                    success: function (response) {
                     //   data = JSON.parse(response);
                    //Limpiamos el selecet 
                     ser.find('option').remove();
                   

                     
                     $.each(response.servicio, function (i, item) {

                        ser.append('<option selected hidden value="' + item.idServicio + '">' + item.nombreServicio + '</option>');
                        $('#tiposervicioscita').append('<option selected hidden value="' + item.idTipoServicio + '">' + item.descripcionTipoServicio + '</option>');
                      

                        })

                  

                     $.each(response.servicios, function (i, item) {

                         ser.append('<option value="' + item.idServicio + '">' + item.nombreServicio + '</option>');
                       
                        })
                        $('#serviciocita').prop('disabled', false);
                      
    
                 
                    },
                    error: function () {
                        //$('#serviciocita').html('Error');
                   
                    },
                    statusCode: {
                        400: function (data) {
                            var json = JSON.parse(data.responseText);
                            Swal.fire("¡Error!", json.msg, "error");
                        },
                    },
    
                })
       //////////////////////////////////////////////////////////////////////////////////


         //Llenar la mascota y el cliente
         $.ajax({
            type:"POST",
           // data: {id:id},
            url: "/tienda/Agenda/llenarmascota",
            data:{
                mascota:mascota,

            },
            dataType: 'json',
            success: function (response) {
             //   data = JSON.parse(response);
            //Limpiamos el selecet 
             mas.find('option').remove();

            

             $.each(response.mascota, function (i, item) {
                 
                cliente=item.documentoCliente;
                mas.append('<option selected hidden value="' + item.idMascota + '">' + item.nombreMascota+ '</option>');
              
                $("#especiem").val(item.descripcion);
                $("#razam").val(item.descripcionRaza);
                $.ajax({
                    data:{
                        documento:item.documentoCliente,
        
                    },
                    url: "/tienda/Agenda/llenarmascotas",
                    type: 'post',
                    dataType: 'json',
                    success: function (data) {//resultado de la función
                                var cliente = item.documentoCliente
                       // $('#clienteselect').val(item.documentoCliente)
                  
                        $.each(data.mascotas, function (i, item) {

                            mas.append('<option value="' + item.idMascota + '">' + item.nombreMascota + '</option>');
                        

                         // $('#clienteselect').val(item.documentoCliente)

                           })
                          
                        
                    },
                    error: function () {
                        //$('#serviciocita').html('Error');
                   
                    },
                    statusCode: {
                        400: function (data) {
                            var json = JSON.parse(data.responseText);
                            Swal.fire("¡Error!", json.msg, "error");
                        },
                    },
                });

                })

          

          
               $('#mascotacliente').prop('disabled', false);
               $("#clienteselect").val(cliente).select2({theme: "bootstrap4"});
              

         
            },
            error: function () {
                //$('#serviciocita').html('Error');
           
            },
            statusCode: {
                400: function (data) {
                    var json = JSON.parse(data.responseText);
                    Swal.fire("¡Error!", json.msg, "error");
                },
            },

        })
    
     }
        $('#tiposervicioscita').change(function(e) {

            $("#checkboxasunto").prop('checked', false); 
            $('#asunto').val('').prop("disabled", true);

            var idts= $('#tiposervicioscita').val();

            if(idts == 1) //Primer servicio: Ej Vacunación
            {

                $("#color").val('#e0dd0d');
                $("#colortexto").val('#021838');
            }
            else if(idts == 2){ //Segundo servicio: Ej Cuidado y bienestar

                $("#color").val('#0de068');
                $("#colortexto").val('#a30015');
               

            }else if(idts == 3){ //Tercer servicio: Ej Desparasitación

                $("#color").val('#5e0270');
                $("#colortexto").val('#f0f8fa');
                
            }

            if(idts != "")
            {

                $.ajax({
                    type:"POST",
                    data: {idts:idts},
                    url: "/tienda/Agenda/servicios",
    
                    success: function (response) {

                        $('#serviciocita').prop('disabled', false);
                        $('#serviciocita').html(response);
    
                        
                    },
                    error: function () {
                        //$('#serviciocita').html('Error');
                   
                    },
                    statusCode: {
                        400: function (data) {
                            var json = JSON.parse(data.responseText);
                            Swal.fire("¡Error!", json.msg, "error");
                        },
                    },
    
                })

            }
           
    
            
         
        });

 /***//////////////////////////////////////////////////////////////////////////***/
        $('#serviciocita').change(function(e) {

            var serviciocita= $('#serviciocita option:selected').text();
            $('#asunto').val(serviciocita);
     
         
        });

 /***//////////////////////////////////////////////////////////////////////////***/

        function cargarmascotas(){

            $('#clienteselect').change(function(e) {

                var documento= $('#clienteselect').val();
                $('#razam').val('');
                $('#especiem').val('');
               
    
                if(documento != "")
                {
    
                    $.ajax({
                        type:"POST",
                        data: {documento:documento},
                        url: "/tienda/Agenda/mascotas",
                        
                        success: function (response) {
    
                           
                            $('#mascotacliente').prop('disabled',false);
                            $('#mascotacliente').html(response);
                    
                            
                        },
                        error: function () {
                            //$('#serviciocita').html('Error');
                       
                        },
                        statusCode: {
                            400: function (data) {
                                var json = JSON.parse(data.responseText);
                                Swal.fire("¡Error!", json.msg, "error");
                            },
                        },
        
                    })
    
                }
               
               });

        }

   

 /***//////////////////////////////////////////////////////////////////////////***/
           $('#mascotacliente').change(function(e) {

            var idmascota= $('#mascotacliente').val();
           

            if(idmascota != "")
            {

                $.ajax({
                    type:"POST",
                    data: {idmascota:idmascota},
                    url: "/tienda/Agenda/caracteristicasmascota",
                    dataType:'json',
    
                    success: function (response) {

                        //Recuperar el JSON y setearlo en los inputs
                        $('#razam').val(response[0].descripcionRaza);
                        $('#especiem').val(response[0].descripcion);
                        
                    },
                    error: function () {
                        //$('#serviciocita').html('Error');
                   
                    },
                    statusCode: {
                        400: function (data) {
                            var json = JSON.parse(data.responseText);
                            Swal.fire("¡Error!", json.msg, "error");
                        },
                    },
    
                })

            }
           
           });




 /***//////////////////////////////////////////////////////////////////////////***/
           $("#checkboxasunto").change(function () {

            if (this.checked) {
            $("#asunto").prop("disabled", false);
            } 
            else 
            {
            $("#asunto").prop("disabled", true);
            }
        });

           $("#checkboxcolor").change(function () {

				if (this.checked) {
				$("#color").prop("disabled", false);
                } 
                else 
                {
				$("#color").prop("disabled", true);
				}
            });

            $("#checkboxcolortexto").change(function () {

				if (this.checked) {
				$("#colortexto").prop("disabled", false);
                } 
                else 
                {
				$("#colortexto").prop("disabled", true);
				}
            });
    /***//////////////////////////////////////////////////////////////////////////***/         
            
    function cargarestado(idCita)
    {
        var estado= $('#estadoCita').val();
        var el= $('#estadoCita');

          //Llenar la mascota y el cliente
          $.ajax({
            type:"POST",
            url: "/tienda/Agenda/cargarestado",
            data:{
                cita:idCita,

            },
            dataType: 'json',
            success: function (response) {
             //   data = JSON.parse(response);

            //Limpiamos el selecet 
             //mas.find('option').remove();

            
                $.each(response.estado, function (i, item) {

                    el.append('<option selected hidden value="' + item.estado + '">' + item.descripcion+ '</option>');

                    //el.append('<option value="' + item.idEstado + '">' + item.descripcion + '</option>');
        

                   })

                


         
            },
            error: function () {
                //$('#serviciocita').html('Error');
           
            },
            statusCode: {
                400: function (data) {
                    var json = JSON.parse(data.responseText);
                    Swal.fire("¡Error!", json.msg, "error");
                },
            },

        })
    

    }





    function cambiarestado(color,textColor)
    {


        //Hacer ahora: Comprobar si la cita tiene estado finalizado,
        //LLamar funcion que haga eso para comprobar todos los estados,
        //SI es: Cancelada poner cintillo rojo y letra negra
        //SI es : Reprogramada, poner cintillo azul y letra blanca
        //SI es: En proceso, poner cintillo amarillo y letra negra
        //SI es: No asistió poner cintillo Naranja y letra roja
        //Si es : Finalizada poner cintillo verde letra blanca e inmediatamente
        //redirigir a ventas de servicios que es una replica de ventas de productos

        $('#estadoCita').change(function(e) {

            var estado= $('#estadoCita').val();

            if(estado == 1) // Estado CITA PROGRAMADA
            {
                //Puede hacer lo que quiera con la cita
                //Puede seguir con los colores Originales y además los puede cambiar
                $('#divhora').hide();
                $("#checkboxcolor").prop('checked', false); 
                $('#checkboxcolor').prop('disabled',false);

                $("#checkboxcolortexto").prop('checked', false); 
                $('#checkboxcolortexto').prop('disabled',false);

                $("#color").prop("disabled", true);
                $("#colortexto").prop("disabled", true);

                $('#color').val(color);
                $('#colortexto').val(textColor);
               
   
            }
            else if(estado == 2) // Estado CITA EN PROCESO
            {
                $('#divhora').hide();
                $("#checkboxcolor").prop('checked', false); 
                $('#checkboxcolor').prop('disabled',true);
                

                $("#checkboxcolortexto").prop('checked', false); 
                $('#checkboxcolortexto').prop('disabled',true);

                 $('#color').val('#1af202');
                 $("#color").prop("disabled", true);
                 $('#colortexto').val('#fafafa');
                 $("#colortexto").prop("disabled", true);
    
    
            }
            else if(estado == 3) // Estado CITA FINALIZADA
            {

                $('#divhora').show();
                $("#checkboxcolor").prop('checked', false); 
                $('#checkboxcolor').prop('disabled',true);
                

                $("#checkboxcolortexto").prop('checked', false); 
                $('#checkboxcolortexto').prop('disabled',true);

                 $('#color').val('#073ded');
                 $("#color").prop("disabled", true);
                 $('#colortexto').val('#000000');
                 $("#colortexto").prop("disabled", true);

  
    
    
            } else if(estado == 4) // Estado CITA CANCELADA
            {
                $('#divhora').hide();
                $("#checkboxcolor").prop('checked', false); 
                $('#checkboxcolor').prop('disabled',true);
                

                $("#checkboxcolortexto").prop('checked', false); 
                $('#checkboxcolortexto').prop('disabled',true);

                 $('#color').val('#ed0000');
                 $("#color").prop("disabled", true);
                 $('#colortexto').val('#000000');
                 $("#colortexto").prop("disabled", true);
    
    
            } else if(estado == 5) // Estado CITA NO ASISTIÓ
            {
                $('#divhora').hide();
                $("#checkboxcolor").prop('checked', false); 
                $('#checkboxcolor').prop('disabled',true);
                

                $("#checkboxcolortexto").prop('checked', false); 
                $('#checkboxcolortexto').prop('disabled',true);

                 $('#color').val('#f08502');
                 $("#color").prop("disabled", true);
                 $('#colortexto').val('#04214f');
                 $("#colortexto").prop("disabled", true);
    
    
            }


        });

   

    }

    function bloquearcheck(estado){

        if(estado != 1)
        {
            $('#checkboxcolor').prop('disabled',true);
            $('#checkboxcolortexto').prop('disabled',true);

        }
        else
        {
            $('#checkboxcolor').prop('disabled',false);
            $('#checkboxcolortexto').prop('disabled',false);
        }

    }
             
/*

$('.clockpicker').clockpicker(
    {
        placement: 'top',
        align: 'left',
        autoclose: true,
        donetext: 'Done',
    }
);
*/

///////////////////////////////////////////////////////////////////////////////////////////
/*Funcionalidad del modal de pago de la cita*/


function pagoCita(){

    var idservicio=	$("#serviciocita").val();

    $.ajax({
        type:"POST",
        url: "/tienda/Agenda/cargarprecio",
        data:{
            idservicio:idservicio,

        },
        dataType: 'json',
        success: function (response) {
           
           var precio= response[0].precio;
           $("#total_ventacita").val(precio);
           $("#subtotal_ventacita").val(precio);
        },
        error: function () {
            console.log('error')
       
        },
        statusCode: {
            400: function (data) {
                var json = JSON.parse(data.responseText);
                Swal.fire("¡Error!", json.msg, "error");
            },
        },

    })





    /**
	 *
	 * Select de tipo de pago
	 *
	 **/

	$("#forma_pagocita").on("change", function () {
		var formaPago = $(this).val();

		var entregado = $("#entregadocita").val();
		//Calculo de cambio

		if (entregado == "") {
			$("#cambiocita").html("0");
		}

		if (formaPago == 1) {
			$("#div_cambiocita").show();
			$("#Ncomprobantecita").prop("disabled", true);
			$("#entregadocita").prop("disabled", false);
			$("#Ncomprobantecita").val("");
		} else {
			$("#div_cambiocita").hide();
			$("#Ncomprobantecita").prop("disabled", false);
			$("#entregadocita").prop("disabled", true);
			$("#entregadocita").val("");
		}
	});

	/**
	 *
	 * Cambio de dinero
	 *
	 **/

	$("#entregadocita").keyup(function () {

        var total = $("#total_ventacita").val();
		var entregado = $("#entregadocita").val();

		if (entregado == "" || entregado == 0) {
			$("#cambiocita").html("0");
		} else {
			var monto = function (i) {
				return typeof i === "string"
					? i.replace(/[^0-9]/g, "")
					: typeof i === "number"
					? i
					: 0;
			};

			var cambio = monto(entregado) - monto(total);
			var cambioForm = OSREC.CurrencyFormatter.format(cambio, {
				currency: "COP",
			});

			$("#cambiocita").html(cambioForm);
		}
	});
}

/*Función para calcular el descuento  la venta de la cita */




/*Función para guardar la venta de la cita */
  

    $("#descuento_ventacita").keyup(function () {
        
        var descuento =  $("#descuento_ventacita").val();
        var subtotal = $("#subtotal_ventacita").val();
        $("#cambiocita").html("0");
        $("#entregadocita").val("");    

        if (descuento == 0)
        {
            $("#total_ventacita").val(subtotal);
            $("#entregadocita").val("");
            $("#cambiocita").html("0");
            

        }
        else
        {

            var vdesc = parseInt(100 -descuento);
            var resultado = parseInt((subtotal * vdesc)/100) ;
      

       /* var total = OSREC.CurrencyFormatter.format(resultado, {
            currency: "COP",
        });*/

        $("#total_ventacita").val(resultado);

        }
     
        
  

    });

    /*Función para registrar la venta del servicio*/

$('#registroVentaCita').click(function(e){
    e.preventDefault();


     //Validaciones de los campos para registrar el historial de la mascota

     var validar_formularioventa = $("#form-citaventa").validate({
        ignore: [],
        rules: {
            entregadocita: { required: true },
            descuento_ventacita: { required: true }
         
        },
        onfocusout: false,
        onkeyup: false,
        onclick: false,

        messages: {
            entregadocita: "El campo entregado es obligatorio.",
            descuento_ventacita: "El campo descuento es obligatorio.",
        
          
          
        },
        errorElement: 'p',

        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        }

    });

    if (validar_formularioventa.form()) {

          //Recolectar información de los campos

 
    datos = {
        fechaVenta: $("#fechaVenta").val(),
        vendedorCita:$("#vendedorCita").val(), 
        idServicio:$("#serviciocita").val(),  
        formapago: $("#forma_pagocita").val(),
        descuento: $("#descuento_ventacita").val(),
        total: $("#total_ventacita").val(),
        comprobante: $("#Ncomprobantecita").val(),
        observaciones : $("#observacionesCita").val(),
        cliente: $("#clienteselect").val(),
    };
    

   /*  var validar_formularioventa = $("#form-citaventa").validate({
        ignore: [],
        rules: {
    
            entregadocita: { required: true }
           
        
        },
        onfocusout: false,
        onkeyup: false,
        onclick: false,

        messages: {
            entregadocita: "El campo entregado es obligatorio. "
           
        },
        errorElement: 'p',

        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        }

    });*/

    $.ajax({
        type:"POST",
        url: "/tienda/Agenda/registrarventa",
        data:{
            datos:datos
             },
        dataType: 'json',
        success: function (data) {
            Swal.fire({
                title: "¡Proceso completado!",
                text: "La venta del servicio ha sido registrada exitosamente.",
                type: "success",
                confirmButtonColor: "#28a745",
            }).then(function() {
               
                if($("#radioSi").is(':checked')) 
                {
                
                   
                    $('#tiposervicioscita').prop('disabled',true);
                    $('#serviciocita').prop('disabled',true);

                   
                    $('#clienteselect').prop('disabled',true);
                    $('#mascotacliente').prop('disabled',true);

                    var fechaprox = $('#fechaCitahistorial').val();
                   // var horaprox = $('#horaCitahistorial').val();
                   var fecha =  $('#fechaCita').val(fechaprox);
                   var hora= $('#horaCita').val();
                    
                    $('#divhora').hide();
                    $("#observacionesCita").val('');

                    $("#checkboxcolor").prop('checked', false); 
                    $("#checkboxcolor").prop('disabled', false); 

                    $('#color').val('').prop("disabled", true);
                    $("#checkboxcolortexto").prop('checked', false); 
                    $("#checkboxcolortexto").prop('disabled', false); 
                    $("#colortexto").prop("disabled", true);

                    var idts= $('#tiposervicioscita').val();

                    if(idts == 1) //Primer servicio: Ej Vacunación
                    {
        
                        $("#color").val('#e0dd0d');
                        $("#colortexto").val('#021838');
                    }
                    else if(idts == 3){ //Tercer servicio: Ej Desparasitación
        
                        $("#color").val('#5e0270');
                        $("#colortexto").val('#f0f8fa');
                        
                    }

                    //Validación para hora Inicial
      
                    var hoy2 = new Date();
                    var hoy3 = moment(hoy2).format('DD-MM-YYYY');
                
                   
                    var fechaC1= $('#fechaCita').val();
                   
                   
       
                    if(fechaC1 > hoy3)
                    {
                        console.log('esa fecha es en el futuro')
                        $('#timepicker').datetimepicker('minDate', false);
                    }
                    else
                    {
                        console.log('esa fecha es en el pasado')
                         $('#timepicker').datetimepicker('minDate', moment());
                    }

                     
                    $('#botonRegistroCita').show();
                    $('#botonEditarCita').hide();
                    $('#botonEliminarCita').hide();
                    $('#estado').hide();
                    $('#ob').addClass('col-md-12');

                    $('#modal-cita').modal();
                }
                else if($("#radioNo").is(':checked')) 
                
                {
                    console.log('radio quedo en no')
                   // $('#modal-cita').modal('toggle');
                }

             });

             $('#modal-pagarCita').modal('toggle');

           

          
     
        },
        error: function (data) {
            Swal.fire({
                title: "¡Proceso no completado!",
                text: "La venta no se pudo registrar.",
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

    })

    }
    

  



   });



/////////////////////////////////////////////////////////////////////////////////////

/*Función para bloquear campo hora en registro de historial de cita 

$("#radioSi").change(function () {

    if (this.checked) {
        
        $("#divhorahis").show();
    
    }
    else
    {
        $("#divhorahis").hide();
        $("#horaCitahistorial").val("");
    }

});

$("#radioNo").change(function () {

    if (this.checked) {
        

        $("#divhorahis").hide();
        $("#horaCitahistorial").val("");
    }
    else
    {
        $("#horaCitahistorial").prop("disabled", false);
    
    }

});

*/





/////////////////////////////////////////////////////////////////////////////////////////

    /*Función para registrar el historial de la mascota*/

    $('#botonRegistroHistorial').click(function(e){
        e.preventDefault();
        
        //Validaciones de los campos para registrar el historial de la mascota

        var validar_formulariohistorial = $("#form-historial").validate({
            ignore: [],
            rules: {
                productoselect: { required: true },
                dosis: { required: true },
                unidadmedidahis: { required: true },
                fechaCitahistorial: { required: true }
             
            },
            onfocusout: false,
            onkeyup: false,
            onclick: false,
    
            messages: {
                productoselect: "El campo producto aplicado es obligatorio.",
                dosis: "El campo dosis es obligatorio.",
                unidadmedidahis: "El campo unidad de medida es obligatorio.",
                fechaCitahistorial: "El campo fecha próxima es obligatorio.",
              
              
            },
            errorElement: 'p',
    
            errorPlacement: function(error, element) {
                $(element).parents('.form-group').append(error);
            }
    
        });

        if (validar_formulariohistorial.form()) {

               //Recolectar información de los campos
    
     
        datos = {
            
            serviciocita:$("#serviciocita").val(),
            mascotacliente:$("#mascotacliente").val(), 
            producto:$("#productoselect").val(),  
            dosis: $("#dosis").val(),
            unidadmedida: $("#unidadmedidahis").val(),
            fechaAplicacion: moment($('#fechaCita').val(),'DD-MM-YYYY').format('YYYY-MM-DD'),
            fechaProxima:  moment($('#fechaCitahistorial').val(),'DD-MM-YYYY').format('YYYY-MM-DD'),
            observaciones : $("#observacionesHistorial").val(),
        };

        Swal.fire({
            title: "¡Atención!",
            text: "¿Está seguro que desea registrar el historial de la mascota? ",
            type: "question",
            showCancelButton: true,
            confirmButtonColor: "#28a745",
            cancelButtonColor: "#28a745",
            confirmButtonText: "Si",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    type:"POST",
                    url: "/tienda/Agenda/registrarhistorial",
                    data:{
                        datos:datos
                         },
                    dataType: 'json',
                    success: function (data) {
                        Swal.fire({
                            title: "¡Proceso completado!",
                            text: "El historial de la mascota ha sido registrado exitosamente.",
                            type: "success",
                            confirmButtonColor: "#28a745",
                        }).then(function() {
                            limpiarModalPago();
                            $("#modal-pagarCita").modal({ 
                                backdrop: "static", 
                                keyboard: false 
                            });
                            pagoCita();
                         });
                        $('#modal-historial').modal('toggle');
                        
        
                        
        
                    },
                    error: function (data) {
                        Swal.fire({
                            title: "¡Proceso no completado!",
                            text: "El historial de la mascota no se pudo registrar.",
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
            
                })
            

            }
        });

        
    
    
      

       
        }
 
    
     
    
    
    
       });
    
//////////////////////////////////////////////////////////////////////////////////////////////////

function limpiarModalPago()
{
    $("#target").val($("#target option:first").val())
    $('#descuento_ventacita').val('');
    $('#subtotal_ventacita').val('');
    $('#total_ventacita').val('');
    $('#entregadocita').val('');
    $('#Ncomprobantecita').val('');
    $('#cambiocita').html('');
    
      
}












////////////////////////////////////////////////////////////////////////////////////////////

/**
 * 
 * Función para no cerrar el modal de pago de cita
 
 
$("#modal-pagarCita").modal({ 
    backdrop: "static", 
    //keyboard: false 
});
*/







function notificaciones()
{
    $("#encabezado").empty();
    $("#contadorN").empty();
    $("#notificaciones").empty();

    var hoy = new Date();
    console.log(hoy)
    //Sólo fecha de hoy 
    var hoyFormateado = moment(hoy).format('YYYY-MM-DD');
     //Hoy con hora
     //var horaHoy = moment(hoy,'HH:mm:ss');
     var horaHoy = moment(hoy).format('HH:mm:ss');


    /*Función para traer las citas del día y cargarlas a notificaciones*/
    $.ajax({
        type:"POST",
        url: "/tienda/Notificaciones/cargarcitasdia",
        data:{
           fechaHoy:hoyFormateado
             },
        dataType: 'json',
        success: function (data) {

            var numN =  data.length;
            var mensaje;

           
            $.each(data, function (i, item) {

                if(horaHoy > item.hora)
                {
                $("#notificaciones").append('<div class="dropdown-divider"></div> <a class="dropdown-item" href="http://localhost:8888/tienda/agenda/"><i style="color:#C6303E;"class="fas fa-exclamation mr-3"></i><small>Cambiar estado de cita de la(s) ' + moment(item.hora,'HH:mm:ss').format('hh:mm a')+'</small></a>');
                numN+=1;
                }

                if(horaHoy < item.hora)
                {
                    $("#notificaciones").append('<div class="dropdown-divider"></div> <a class="dropdown-item" href="http://localhost:8888/tienda/agenda/"><i style="color:#28A745;" class="fas fa-clock mr-2"></i><small>Cita a las ' + moment(item.hora,'HH:mm:ss').format('hh:mm a')+'</small></a>');
                    
                }
                else
                {
                    numN-=1;
                }
                
            });

               $("#contadorN").append(numN);
            
               if(numN < 1)
               {
                 mensaje = ' notificaciones'
               }
               else if(numN == 1 )
               {
                 mensaje = ' notificación'
               }
               else if( numN > 1)
               {
                   mensaje = ' notificaciones'
               }

               $("#encabezado").append('Tiene '+numN + mensaje);
              
               
              
        },
        error: function (data) {
          
          //mensaje de error
       
        },
        statusCode: {
            400: function (data) {
                var json = JSON.parse(data.responseText);
                Swal.fire("¡Error!", json.msg, "error");
            },
        },

    })





    $('#refrescar').click(function(e){
        e.preventDefault();
        location.reload();

    });

}


function limpiarnotificaciones()
{
    $("#encabezado").empty();
    $("#contadorN").empty();
    $("#notificaciones").empty();


}


function refrescar() {
    
    if(!n)
    {
        setInterval(notificaciones, 60000);
    }
   
   
  }
 




});