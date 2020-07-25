/*Este es el codigo de los mensajes de alertas
Utilizando sweet alert 2*/

$("#botonRegistroProveedor").click(function(){
	Swal.fire({        
		type: 'success',
		title: 'Éxito',
		text: '¡Registro éxitoso!', 
    });    
});



function CalcularPrecioVenta() {
	var costo = document.producto.costo.value;
	var utilidad = document.producto.utilidad.value;
	try{
	   //Calculamos el número escrito:
		costo = (isNaN(parseInt(costo)))? 0 : parseInt(costo);
		utilidad = (isNaN(parseInt(utilidad)))? 0 : parseInt(utilidad);
		var precio=costo/(1-(utilidad/100));
		precio=precio.toFixed(2);
		document.producto.precioVenta.value =precio;
	}
	//Si se produce un error no hacemos nada
	catch(e) {}
 }
