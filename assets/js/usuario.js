$(document).ready(function() {


    /**
     * 
     * Función para deshabilitar un usuario
     */

    $('#listausuarios').on('click', '.deshabilitarUsuario', function(ev) {
        ev.preventDefault();

        var idUsuario = $(this).attr("data-idUsuario");
        var estado = 0;

        Swal.fire({
            title: "¡Atención!",
            text: "¿Está seguro que desea deshabilitar este usuario?", 
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
                    url: "/tienda/usuario/estadoUsuario",
                    data: {
                        idUsuario: idUsuario,
                        estado: estado

                    },
                    dataType:'JSON',

                    
                    success: function(data) {
                        console.log('este es '+data.deny);
                        
                        if(data.deny == false){


                            Swal.fire({
                                title: "¡Atención!",
                                text: "Este usuario no se puede deshabilitar.",
                                type: "warning",
                                confirmButtonColor: "#28a745",
                            });
                        }
                        else
                        {
                            Swal.fire({
                                title: "¡Proceso completado!",
                                text: "El usuario ha sido deshabilitado exitosamente.",
                                type: "success",
                                confirmButtonColor: "#28a745",
                            });
                            $('#estadoU'+idUsuario).replaceWith("<span id='estadoU"+idUsuario+"' class='badge badge-danger'>Deshabilitado</span>");
                            $('#deshabilitarUsuario'+idUsuario).replaceWith(" <button style='width:54%'  class='habilitarUsuario btn btn-success btn-sm'  id='habilitarUsuario"+idUsuario+"' data-idUsuario='"+idUsuario+"'><i class='fas fa-check-circle'></i> Habilitar</button>");
                            $("#editarUsuario" + idUsuario).addClass("isDisabled");
                        }




                    },

                    error: function() {
                        Swal.fire({
                            title: "¡Proceso no completado!",
                            text: "Ha sucedido un error al deshabilitar este usuario.",
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


    /**
     * 
     * Función para deshabilitar un usuario
     */

    $('#listausuarios').on('click', '.habilitarUsuario', function(ev) {
        ev.preventDefault();

        var idUsuario = $(this).attr("data-idUsuario");
        var estado = 1;

        Swal.fire({
            title: "¡Atención!",
            text: "¿Está seguro que desea habilitar este usuario?",
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
                    url: "/tienda/usuario/estadoUsuario",
                    data: {
                        idUsuario: idUsuario,
                        estado: estado

                    },

                    success: function() {
                        Swal.fire({
                            title: "¡Proceso completado!",
                            text: "El usuario ha sido habilitado exitosamente.",
                            type: "success",
                            confirmButtonColor: "#28a745",
                        });
                        $('#estadoU'+idUsuario).replaceWith("<span id='estadoU"+idUsuario+"' class='badge badge-success'>Habilitado</span>");
                        $('#habilitarUsuario'+idUsuario).replaceWith(" <button style='width:54%'  class='deshabilitarUsuario btn btn-danger btn-sm'  id='deshabilitarUsuario"+idUsuario+"' data-idUsuario='"+idUsuario+"'><i class='fas fa-ban'></i> Deshabilitar</button>");
                        $("#editarUsuario" + idUsuario).removeClass("isDisabled");


                    },

                    error: function() {
                        Swal.fire({
                            title: "¡Proceso no completado!",
                            text: "Ha sucedido un error al habilitar este usuario.",
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