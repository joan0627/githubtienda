$(document).ready(function () {


/**
 * 
 * Función para no cerrar el modal en la sección Establecer pregunta de seguridad
 * 
 */
$("#modalcontrasena").modal({ 
    backdrop: "static", 
    keyboard: false 
});


/**
 * 
 * Función para cerrar sesión del sistema
 * 
 */
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