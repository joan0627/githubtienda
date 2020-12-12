$(document).ready(function () {


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
      ;

           
            $.each(data, function (i, item) {

                if(horaHoy > item.hora)
                {
                $("#notificaciones").append('<div class="dropdown-divider"></div> <a class="dropdown-item" href="#"><i style="color:#C6303E;"class="fas fa-exclamation mr-3"></i><small>Cambiar estado de cita de la(s) ' + moment(item.hora,'HH:mm:ss').format('hh:mm a')+'</small></a>');
                numN+=1;
                }

                $("#notificaciones").append('<div class="dropdown-divider"></div> <a class="dropdown-item" href="#"><i style="color:#28A745;" class="fas fa-clock mr-2"></i><small>Cita a las ' + moment(item.hora,'HH:mm:ss').format('hh:mm a')+'</small></a>');
                
            });

               $("#contadorN").append(numN);
            
              
              
               
              
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




});