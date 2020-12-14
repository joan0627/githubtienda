$(document).ready(function () {
    var horaMin;
    /***//////////////////////////////////////////////////////////////////////////***/
       $('#calendardisponibilidad').fullCalendar({ //INICIO DE LA CONFIGURACIÓN DEL CALENDARIO
          
           //Idioma fullCalendar
            locale: 'es',
            //Vista por defecto: Mes
            defaultView: 'month',
            //Los eventos se puede arrastrar
            editable:false,
             //Permite a un usuario resaltar varios días o intervalos de tiempo haciendo clic y arrastrando.
            selectable: true,
           //businessHours: true,
            /*Para los eventos*/
            //Doy formato a la hora de los eventos
            timeFormat: 'h(:mm) a',
            //Mostrar la hora que termina el evento
            displayEventEnd: true,
            //Para que aparezca la opción de ver 'Más' para desplegar una ventana emergente con
            //todos los eventos el total máx q podrá mostrar sera de 6 eventos por recuadro
            eventLimit: 6,
             /*Para la vista de Calendario*/
             //Oculto fechas del mes pasado o del mes siguiente para tener un mes limpio
             showNonCurrentDates: false,
            //Cantidad de semanas que se van a mostrar según el mes en la vista Calendario
             //Se muestra el número de semanas correcto según el mes
             fixedWeekCount: false, 

           header: 
           {
               left:'horario',
               center: 'title'
           },

           eventColor: '#2CB05B',

         /*  customButtons: {
            horario: {
              text: 'Horario habitual',
              click: function() {
                $('#modal-horario').modal();
              }
            }
         },*/

          // defaultTimedEventDuration:"24:00",

          /*
          * Función para desactivar fechas pasadas a la actual+
            el problema es que oculta los eventos pasados.
           
           validRange: function(nowDate){
            return {start: nowDate} //to prevent anterior dates
        },*/
   
            //Color de los eventos
           eventColor: '#82817e',
   
           //Eventos que se cargan desde la base de datos: Están en formato JSON
           events: 'http://localhost:8888/tienda/configuracion/cargardisponibilidad',
   
       
   
       /***//////////////////////////////////////////////////////////////////////////***/
   
           //Función cuando el usuario da un click en una fecha del calendario
           dayClick:function(date,jsEvent,view){


            

            //Obtengo la fecha actual y la comparo con la seleccionada
             if (moment().format('YYYY-MM-DD') <= date.format()) {
                
                //Limpiar formulario
               limpiarFormulario();

              $('#botonRegistroDisponibilidad').show();
              $('#botonActualizarDisponibilidad').hide();
              $('#botonEliminarDisponibilidad').hide();
        

               //Setear en el campo fecha del formulario la fecha en la cual se da click
              
               fecha=  $('#fechadisponibilidad').val(moment(date).format('DD-MM-YYYY'));

               var currentTime = new Date();
               moment(currentTime).format('DD-MM-YYYY');
           
               var fechaCalendario= date;
                moment(fechaCalendario).format('DD-MM-YYYY');

               if(fechaCalendario > currentTime)
               {
             
                $('#timeinicio').datetimepicker('minDate', false);

                    
               }
               else
               {
              
                $('#timeinicio').datetimepicker('minDate', moment());
              //  $('#timefin').datetimepicker('minDate', moment(horaMinD2,'hh:mm a').add(1, 'minutes'));
          

               }


   
               $('#modal-disponibilidad').modal();
            

            } 

            else {
                
           return false;
             
            }

           },
              
           
        
   
           
         /***//////////////////////////////////////////////////////////////////////////***/
   
               //Función cuando el usuario da click en un EVENTO(cintillo) del calendario
               eventClick:function(calEvent,jsEvent,view){


                //Limpiar formulario
                limpiarFormulario();

                $('#botonRegistroDisponibilidad').hide();
                $('#botonActualizarDisponibilidad').show();
                $('#botonEliminarDisponibilidad').show();
          
    
               
                $("#idDisponibilidad").val(calEvent.idDisponibilidad);
                $("#titulo").val(calEvent.title);  

    
                /**
                 * Se realiza de esta forma ya que en la BD viene la hora y 
                 * fecha juntas, se utiliza entonces _i.split para separar y enviar 
                 * cada dato a su respectivo input.
                 *  
                 */
                FechaHoraI = calEvent.start._i.split(" ");
                FechaHoraF = calEvent.end._i.split(" ")

                $('#fechadisponibilidad').val(moment(FechaHoraI[0],'YYYY-MM-DD').format('DD-MM-YYYY'));
                 $('#horaI').val(moment(FechaHoraI[1],'HH:mm:ss').format('hh:mm a'));
                 $('#horaF').val(moment(FechaHoraF[1],'HH:mm:ss').format('hh:mm a'));
    
    
    

                $('#modal-disponibilidad').modal();
               
          
             
              }
    

         
            
          
         });
         
         //FIN DE LA CONFIGURACIÓN DEL CALENDARIO
   
        
        /***//////////////////////////////////////////////////////////////////////////***/
     
      /**
       * 
       * Función para REGISTRAR eventos del modal al calendario
       */

      var nuevaDisponibilidad;
       

       $('#botonRegistroDisponibilidad').click(function(e){
        e.preventDefault();

       
     var timeInicio= $('#horaI').val();
     var timeIniciof=   moment(timeInicio,'hh:mm a');
     var timeFin= $('#horaF').val();
     var timeFinf=moment(timeFin,'hh:mm a');
     
        if(timeFinf < timeIniciof)
        {
            Swal.fire({
                title: "¡Proceso no completado!",
                text: "La hora de fin no puede ser menor a la hora de inicio.",
                type: "warning",
                confirmButtonColor: "#28a745",
            })
        }

        else
        {
            RecolectarDatos(); 

            var validar_formularioDispo = $("#form-disponibilidad").validate({
                ignore: [],
                rules: {
                    fechadisponibilidad: { required: true },
                    horaI: { required: true },
                    horaF: { required: true },
        
                
                },
                onfocusout: false,
                onkeyup: false,
                onclick: false,
        
                messages: {
                    fechadisponibilidad: "El campo fecha es obligatorio. ",
                    horaI: "El campo hora de inicio es obligatorio. ",
                    horaF: "El campo hora de fin es obligatorio. ",
                 
                },
                errorElement: 'p',
        
                errorPlacement: function(error, element) {
                    $(element).parents('.form-group').append(error);
                }
        
            });
    
            
    
    
            if (validar_formularioDispo.form()) {
    
                Swal.fire({
                    title: "¡Atención!",
                    text: "¿Está seguro que desea registrar esta programación? ",
                    type: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#28a745",
                    cancelButtonColor: "#28a745",
                    confirmButtonText: "Si",
                    cancelButtonText: "No",
                }).then((result) => {
                    if (result.value) {
                       // clear errors from validation
                     validar_formularioDispo.resetForm();
                    EnviarInformacion('registrardisponibilidad');
                     
                    }
    
                 });
    
    
             }

        }

     

        });
          

       


        /***//////////////////////////////////////////////////////////////////////////***/


           /**
       * 
       * Función para EDITAR eventos del modal al calendario
       */

      
    var validar_formularioDispo2;

      $('#botonActualizarDisponibilidad').click(function(e){
        e.preventDefault();

        var timeInicio2= $('#horaI').val();
        var timeIniciof2=   moment(timeInicio2,'hh:mm a');
        var timeFin2= $('#horaF').val();
        var timeFinf2=moment(timeFin2,'hh:mm a');

        
        if(timeFinf2 < timeIniciof2)
        {
            Swal.fire({
                title: "¡Proceso no completado!",
                text: "La hora de fin no puede ser menor a la hora de inicio.",
                type: "warning",
                confirmButtonColor: "#28a745",
            })
        }

        else
        {

        RecolectarDatos(); 

        validar_formularioDispo2 = $("#form-disponibilidad").validate({
           ignore: [],
           rules: {
               fechadisponibilidad: { required: true },
               horaI: { required: true },
               horaF: { required: true },
   
           
           },
           onfocusout: false,
           onkeyup: false,
           onclick: false,
   
           messages: {
               fechadisponibilidad: "El campo fecha es obligatorio. ",
               horaI: "El campo hora de inicio es obligatorio. ",
               horaF: "El campo hora de fin es obligatorio. ",
            
           },
           errorElement: 'p',
   
           errorPlacement: function(error, element) {
               $(element).parents('.form-group').append(error);
           }
   
       });


       if (validar_formularioDispo2.form()) {

           Swal.fire({
               title: "¡Atención!",
               text: "¿Está seguro que desea actualizar esta programación? ",
               type: "question",
               showCancelButton: true,
               confirmButtonColor: "#28a745",
               cancelButtonColor: "#28a745",
               confirmButtonText: "Si",
               cancelButtonText: "No",
           }).then((result) => {
               if (result.value) {
                  // clear errors from validation
                //validar_formularioDispo.resetForm();
                EnviarInformacion('editardisponibilidad');
                
               }

            });

          
          }


        }

      });


    /***//////////////////////////////////////////////////////////////////////////***/

    /**
       * 
       * Función para ELIMINAR eventos del modal al calendario
       */
      $('#botonEliminarDisponibilidad').click(function(e){
        e.preventDefault();
        RecolectarDatos();
        Swal.fire({
            title: "¡Atención!",
            text: "¿Está seguro que desea eliminar esta programación? ",
            type: "question",
            showCancelButton: true,
            confirmButtonColor: "#28a745",
            cancelButtonColor: "#28a745",
            confirmButtonText: "Si",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.value) {
                EnviarInformacion('eliminardisponibilidad');
             
            }
            
        });
       });

 /***//////////////////////////////////////////////////////////////////////////***/



     /***//////////////////////////////////////////////////////////////////////////***/

       function RecolectarDatos()
       {

        

        nuevaDisponibilidad = {
            idDisponibilidad:$('#idDisponibilidad').val(),
            title:$('#titulo').val(),
            start: moment($('#fechadisponibilidad').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+moment($('#horaI').val(),'hh:mm a').format('HH:mm:ss'),
            end: moment($('#fechadisponibilidad').val(),'DD-MM-YYYY').format('YYYY-MM-DD')+ " "+moment($('#horaF').val(),'hh:mm a').format('HH:mm:ss'),
          
        };
    

       
    }

     /***//////////////////////////////////////////////////////////////////////////***/


    /***//////////////////////////////////////////////////////////////////////////***/

         function EnviarInformacion(accion,objEvento,modal)
         {
             var men;

             if (accion == 'registrardisponibilidad')
             {
                men=' registrada';
             }else if(accion == 'editardisponibilidad')
             {
                 men=' actualizada';
             }else if(accion == 'eliminardisponibilidad')
             {
                men=' eliminada';
             }

             $.ajax({
                 type: "POST",
                 url: "/tienda/Configuracion/"+accion,
                 data:nuevaDisponibilidad,
                  //dataType: 'json',
                 success: function (data) {
                
                     if(data)
                     {

                        Swal.fire({
                            title: "¡Proceso completado!",
                            text: "La programación ha sido"+men+" exitosamente.",
                            type: "success",
                            confirmButtonColor: "#28a745",
                        }).then(function() {
                          
                           $('#calendardisponibilidad').fullCalendar('refetchEvents');
 
                         });



                        
                         if(!modal)
                         {
                             $('#modal-disponibilidad').modal('toggle');
                         }
                     }
                     
                 },
                 error: function () {
     
                     Swal.fire({
                         title: "¡Proceso no completado!",
                         text: "La disponibilidad  no se pudo registrar.",
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

            $("#horaI").val('');
            $("#horaF").val('');

        }

    

     /***//////////////////////////////////////////////////////////////////////////***/
 
 
     /***//////////////////////////////////////////////////////////////////////////***/
        

        
             /**------------------------DISPONIBILIDAD FORMATOS------------------------ */
 

    //Campo fecha en disponibilidad
    $('#datepickerdis').datetimepicker({
        // format: 'YYYY-MM-DD',
      format: 'DD-MM-YYYY',
      locale:'es',
      minDate:new Date(moment().subtract(1, 'day')), 
      ignoreReadonly: true,
        
      });
      
  
     //Campo hora inicio en disponibilidad
     $('#timeinicio').datetimepicker({
      format: 'hh:mm a',
       ignoreReadonly: true,
      enabledHours: [8,9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
    })
  
      //Campo hora fin en disponibilidad
      $('#timefin').datetimepicker({
          format: 'hh:mm a',
          ignoreReadonly: true,
         // minDate:  moment(horamin,'hh:mm a').add(1, 'minutes'),
      
          enabledHours: [8,9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
        })





         /* Setting up DateTimePickers */
         $("#datepickerdis").on("change.datetimepicker", function (e) {
            var currentTime = new Date();
            moment(currentTime).format('DD-MM-YYYY');
            var timeactual =moment(currentTime).format('HH:mm:ss');
        
            var fechaCalendario= e.date;
            moment(fechaCalendario).format('DD-MM-YYYY');
        
            /*Condicional para bloquear horas pasadas de la fecha de hoy y desbloquear horas de fechas futuras*/
            if(fechaCalendario > currentTime)
            {
        
                $('#timeinicio').datetimepicker('minDate', false);
            }
            else
            {
        
                 $('#timeinicio').datetimepicker('minDate', moment());
            }


            
            });
   /**------------------------DISPONIBILIDAD FORMATOS------------------------ */

  
    
});