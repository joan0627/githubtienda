$(document).ready(function () {

    /***//////////////////////////////////////////////////////////////////////////***/
       $('#calendardisponibilidad').fullCalendar({ //INICIO DE LA CONFIGURACIÓN DEL CALENDARIO
          
           //Idioma fullCalendar
           locale: 'es',
           selectable: true,
           //businessHours: true,
           //Configuración del encabezado
           displayEventEnd: true,
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
           */
           validRange: function(nowDate){
            return {start: nowDate} //to prevent anterior dates
        },
   
           //eventColor: '#2CB05B',
   
           //Eventos que se cargan desde la base de datos: Están en formato JSON
           events: 'http://localhost:8888/tienda/configuracion/cargardisponibilidad',
   
       
   
       /***//////////////////////////////////////////////////////////////////////////***/
   
           //Función cuando el usuario da un click en una fecha del calendario
           dayClick:function(date,jsEvent,view){


                //Setear en el campo fecha del formulario la fecha en la cual se da click
                $('#fechadisponibilidad').val(date.format());
                
          
            $('#modal-disponibilidad').modal();
                


            

   
           },
              
           
        
   
           
         /***//////////////////////////////////////////////////////////////////////////***/
   
           //Función cuando el usuario da click en un EVENTO(cintillo) del calendario
             eventClick:function(calEvent,jsEvent,view){
   
   
             },

         
            
          
         });//FIN DE LA CONFIGURACIÓN DEL CALENDARIO
   
        
        /***//////////////////////////////////////////////////////////////////////////***/
     
      /**
       * 
       * Función para REGISTRAR eventos del modal al calendario
       */

      var nuevaDisponibilidad;

       $('#botonRegistroDisponibilidad').click(function(){
       
         RecolectarDatos(); 

         EnviarInformacion('registrardisponibilidad');
          

       });


        /***//////////////////////////////////////////////////////////////////////////***/

          /***//////////////////////////////////////////////////////////////////////////***/

       function RecolectarDatos()
       {

        nuevaDisponibilidad = {
            idDisponibilidad:$('#idDisponibilidad').val(),
            title:$('#titulo').val(),
            start:$('#fechadisponibilidad').val()+ " "+$('#horaInicio').val(),
            end:$('#fechadisponibilidad').val()+ " "+$('#horaFin').val(),
            rendering:'',
           // rendering:'background',
        };

       
    }

     /***//////////////////////////////////////////////////////////////////////////***/


    /***//////////////////////////////////////////////////////////////////////////***/

         function EnviarInformacion(accion,objEvento,modal)
         {
             $.ajax({
                 type: "POST",
                 url: "/tienda/Configuracion/"+accion,
                 data:nuevaDisponibilidad,
                  //dataType: 'json',
                 success: function (data) {
                     console.log(data)
 
                     if(data)
                     {
                         $('#calendardisponibilidad').fullCalendar('refetchEvents');
 
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
        
}); 
        
          