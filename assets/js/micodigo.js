/*Este es el codigo de los mensajes de alertas
Utilizando sweet alert 2*/

$("#botonRegistroProveedor").click(function(){
	Swal.fire({        
		type: 'success',
		title: 'Éxito',
		text: '¡Registro éxitoso!', 
    });    
});



/* Sumar dos números. */
function sumarrtt (valor1, valor2) {
    var total = 0;	
    valor1 = parseInt(valor1); // Convertir el valor a un entero (número).
	valor2 = parseInt(valor2);

    //total = document.getElementById('precioVenta').innerHTML;
	
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    //total = (total == null || total == undefined || total == "") ? 0 : total;
	
    /* Esta es la suma. */
    total = (parseInt(valor1) + parseInt(valor2));
	
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('precioVenta').innerHTML = total;
}

/* Sumar dos números. */
function sumar (valor) {
    var total = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
	
    total = document.getElementById('spTotal').innerHTML;
	
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
	
    /* Esta es la suma. */
    total = (parseInt(total) + parseInt(valor));
	
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}
