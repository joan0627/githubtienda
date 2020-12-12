$(document).ready(function () {
	/**
     * 
     * Funciones para enmascarar los datos 
     * 


    $(".cantidadinput").inputmask({
        rightAlign: true,
        alias: "numeric",
        autoGroup: true,
        min: 1,
        allowMinus: false,
        autoUnmask: true,
        clearMaskOnLostFocus: false,

    });


    $(".costoinput").inputmask({
        alias: "currency",
        prefix: "",
        radixPoint:",", 
        groupSeparator: ".",
        removeMaskOnSubmit: true,
        autoGroup: true,
        digits: 0,
        digitsOptional: false,
        min: 0,
        allowMinus: false,
        placeholder: "0",
        clearMaskOnLostFocus: false,
    });


    $(".ivainput").inputmask({
        //Quita el enmaskaramiento al enviar el dato
        //autoUnmask: INVESTIGAR

        rightAlign: true,
        removeMaskOnSubmit: true,
        prefix: "",
        alias: "numeric",
        groupSeparator: "",
        autoGroup: true,
        digits: 0,
        digitsOptional: false,
        min: 0,
        max: 100,
        allowMinus: false,
        autoUnmask: true,
        placeholder: "0",
        clearMaskOnLostFocus: false,
    });

     */

	//Select2 para el campo Proveedor de la sección Compras

	var $select = $(".js-example-placeholder-single").select2({
		placeholder: "-Seleccione un proveedor-",
		theme: "bootstrap4",
	});

	//Select2 para el campo marca en productos

	//Registro producto
	$(".js-example-placeholder-marca-single").select2({
		placeholder: "-Seleccione una marca-",
		theme: "bootstrap4",
	});

	//Actualizar producto
	$(".js-example-placeholder-marca-actualizar-single").select2({
		placeholder: "-Seleccione una marca-",
		theme: "bootstrap4",
    });
    

    //Registro mascota Raza
    $(".js-example-placeholder-Raza-registro-single").select2({
        placeholder: "-Seleccione una raza-",
        theme: "bootstrap4",
    });


    //Actualizar mascota Raza
    $(".js-example-placeholder-Raza-actualizar-single").select2({
        placeholder: "-Seleccione una raza-",
        theme: "bootstrap4",
    });

	OSREC.CurrencyFormatter.formatAll({
		selector: ".listadoCompramoney",
		currency: "COP",
	});

	//Formatos Servicios
	OSREC.CurrencyFormatter.formatAll({
		selector: ".listadoServicioMoney",
		currency: "COP",
	});

	/* $(".js-example-placeholder-single").select2({
        placeholder: "-Seleccione un proveedor-",
    });*/

	OSREC.CurrencyFormatter.formatAll({
		selector: ".listadoProductos",
		currency: "COP",
	});

	$(".precioServicio").inputmask({
		rightAlign: false,
		alias: "currency",
		prefix: "",
		radixPoint: ",",
		groupSeparator: ".",
		removeMaskOnSubmit: true,
		autoGroup: true,
		digits: 0,
		digitsOptional: false,
		min: 0,
		allowMinus: false,
		placeholder: "0",
	});

	$(".precioActualizarServcio").inputmask({
		rightAlign: false,
		alias: "currency",
		prefix: "",
		radixPoint: ",",
		groupSeparator: ".",
		removeMaskOnSubmit: true,
		autoGroup: true,
		digits: 0,
		digitsOptional: false,
		min: 0,
		allowMinus: false,
		placeholder: "0",
	});

	$(".detalleServicioMoney").inputmask({
		rightAlign: false,
		alias: "currency",
		prefix: "",
		radixPoint: ",",
		groupSeparator: ".",
		removeMaskOnSubmit: true,
		autoGroup: true,
		digits: 0,
		digitsOptional: false,
		min: 0,
		allowMinus: false,
		placeholder: "0",
	});

	//Formatos Productos

	$(".precioProducto").inputmask({
		rightAlign: false,
		alias: "currency",
		prefix: "",
		radixPoint: ",",
		groupSeparator: ".",
		removeMaskOnSubmit: true,
		autoGroup: true,
		digits: 0,
		digitsOptional: false,
		min: 0,
		allowMinus: false,
		placeholder: "0",
	});

	$("#precioVentaProductoA").inputmask({
		rightAlign: false,
		alias: "currency",
		prefix: "",
		radixPoint: ",",
		groupSeparator: ".",
		removeMaskOnSubmit: true,
		autoGroup: true,
		digits: 0,
		digitsOptional: false,
		min: 0,
		allowMinus: false,
		placeholder: "0",
	});

	$("#precioVentaProductoD").inputmask({
		rightAlign: false,
		alias: "currency",
		prefix: "",
		radixPoint: ",",
		groupSeparator: ".",
		removeMaskOnSubmit: true,
		autoGroup: true,
		digits: 0,
		digitsOptional: false,
		min: 0,
		allowMinus: false,
		placeholder: "0",
	});



	//Campo fecha en registro compra
	$("#datepickercompra").datetimepicker({
		format: "YYYY-MM-DD",
		//format: 'DD-MM-YYYY',
		//locale:'es',
	});

	$("#clienteselect").select2({
		placeholder: "-Seleccione un cliente-",
		theme: "bootstrap4",
	});

	//Campo fecha en disponibilidad
	$("#datepickerdis").datetimepicker({
		format: "YYYY-MM-DD",
		minDate: new Date(),
	});

	//Campo hora inicio en disponibilidad
	$("#timeinicio").datetimepicker({
		//format: ''
		//format:'HH:mm:ss'
		format: "HH:mm",
	});

	//Campo hora fin en disponibilidad
	$("#timefin").datetimepicker({
		//format: ''
		//format:'HH:mm:ss'
		format: "HH:mm",
	});

	//Campo fecha en registro cita
	$("#datepicker").datetimepicker({
		// format: 'YYYY-MM-DD',
		format: "DD-MM-YYYY",
		locale: "es",
		minDate: new Date(moment().subtract(1, "day")),
		ignoreReadonly: true,
	});

	//Campo hora en registro cita

	// var hours = currentTime.getHours()
	$("#timepicker").datetimepicker({
		//format: ''
		//format:'HH:mm:ss'
		minDate: moment(),
		format: "hh:mm a",
		ignoreReadonly: true,
		//Defino las horas habilitadas para las citas, esto corresponde al horario de la tienda.
		enabledHours: [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
		//minDate: moment(hours).add(1, 'hh'),enabledHours: [8,9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
	});

	/* Setting up DateTimePickers */
	$("#datepicker").on("change.datetimepicker", function (e) {
		var currentTime = new Date();
		moment(currentTime).format("DD-MM-YYYY");
		var timeactual = moment(currentTime).format("HH:mm:ss");

		var fechaCalendario = e.date;
		moment(fechaCalendario).format("DD-MM-YYYY");

		/*Condicional para bloquear horas pasadas de la fecha de hoy y desbloquear horas de fechas futuras*/
		if (fechaCalendario > currentTime) {
			$("#timepicker").datetimepicker("minDate", false);
		} else {
			$("#timepicker").datetimepicker("minDate", moment());
		}
	}); 

	$("#entregado").inputmask({
		rightAlign: false,
		alias: "currency",
		prefix: "",
		radixPoint: ",",
		groupSeparator: ".",
		removeMaskOnSubmit: true,
		autoGroup: true,
		digits: 0,
		digitsOptional: false,
		min: 0,
		allowMinus: false,
		placeholder: "0",
	});

	$("#total_venta").inputmask({
		rightAlign: false,
		alias: "currency",
		prefix: "",
		radixPoint: ",",
		groupSeparator: ".",
		removeMaskOnSubmit: true,
		autoGroup: true,
		digits: 0,
		digitsOptional: false,
		min: 0,
		allowMinus: false,
		placeholder: "0",
	});

	


     
    //Select2 para el campo  productos en registro de historial de la mascota
    $("#productoselect").select2({
        placeholder: "-Seleccione un producto-",
        theme: "bootstrap4",

    });

    //Campo fecha en disponibilidad
    $('#datepickerdis').datetimepicker({
        format: 'YYYY-MM-DD',
        minDate:new Date()
       });
    

   //Campo hora inicio en disponibilidad
   $('#timeinicio').datetimepicker({
    //format: ''
     //format:'HH:mm:ss'
     format: 'HH:mm'
  })


    //Campo hora fin en disponibilidad
    $('#timefin').datetimepicker({
        //format: ''
         //format:'HH:mm:ss'
         format: 'HH:mm'
      })

     
    //Campo fecha en registro cita
    $('#datepicker').datetimepicker({
       // format: 'YYYY-MM-DD',
       format: 'DD-MM-YYYY',
        locale:'es',
        minDate:new Date(moment().subtract(1, 'day')), 
        ignoreReadonly: true,
    });




   //Campo hora INICIO en registro cita

  // var hours = currentTime.getHours()
   $('#timepicker').datetimepicker({
    //format: ''
     //format:'HH:mm:ss'
    // minDate:moment(),
     format: 'hh:mm a',
     ignoreReadonly: true,
    //Defino las horas habilitadas para las citas, esto corresponde al horario de la tienda.
     enabledHours: [8,9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
    //minDate: moment(hours).add(1, 'hh'),enabledHours: [8,9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
    
  })



  
   //Campo hora FIN en registro cita
  $('#timepickerfin').datetimepicker({
    format: 'hh:mm a',
   // minDate:moment({h:7}),
     ignoreReadonly: true,
    //Defino las horas habilitadas para las citas, esto corresponde al horario de la tienda.
     enabledHours: [8,9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
    //minDate: moment(hours).add(1, 'hh'),enabledHours: [8,9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
    
  })


  //////////////////////////////////////////////////////////////////////////////


     
    //Campo fecha en el formulario historial de la mascota
    $('#datepickerhis').datetimepicker({
        // format: 'YYYY-MM-DD',
        format: 'DD-MM-YYYY',
         locale:'es',
         minDate:new Date(moment().subtract(1, 'day')), 
         ignoreReadonly: true,
     });
 
 
 
 
    //Campo hora en el formulario historial de la mascota
 
   // var hours = currentTime.getHours()
    $('#timepickerhis').datetimepicker({
     //format: ''
      //format:'HH:mm:ss'
      minDate:moment(),
      format: 'hh:mm a',
      ignoreReadonly: true,
     //Defino las horas habilitadas para las citas, esto corresponde al horario de la tienda.
      enabledHours: [8,9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
     //minDate: moment(hours).add(1, 'hh'),enabledHours: [8,9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
     
   })
 
   















  ///////////////////////////////////////////////////////////////////////////////////
  
  

  /* Setting up DateTimePickers */
  $("#datepicker").on("change.datetimepicker", function (e) {
    var currentTime = new Date();
    moment(currentTime).format('DD-MM-YYYY');
    var timeactual =moment(currentTime).format('HH:mm:ss');

    var fechaCalendario= e.date;
    moment(fechaCalendario).format('DD-MM-YYYY');

    /*Condicional para bloquear horas pasadas de la fecha de hoy y desbloquear horas de fechas futuras*/
    if(fechaCalendario > currentTime)
    {

        $('#timepicker').datetimepicker('minDate', false);
    }
    else
    {

         $('#timepicker').datetimepicker('minDate', moment());
    }
    
      
    

   
});


//FORMATO MODAL VENTA
    $("#entregado").inputmask({
  
        rightAlign: false,
        alias: "currency",
        prefix: "",
        radixPoint: ",",
        groupSeparator: ".",
        removeMaskOnSubmit: true,
        autoGroup: true,
        digits: 0,
        digitsOptional: false,
        min: 0,
        allowMinus: false,
        placeholder: "0",
    });

    $("#total_venta").inputmask({
        rightAlign: false,
        alias: "currency",
        prefix: "",
        radixPoint: ",",
        groupSeparator: ".",
        removeMaskOnSubmit: true,
        autoGroup: true,
        digits: 0,
        digitsOptional: false,
        min: 0,
        allowMinus: false,
        placeholder: "0",
    });


    OSREC.CurrencyFormatter.formatAll({
        selector: ".totalVentas",
        currency: "COP",
    });

    $("#descuento_ventacita").inputmask({
        //Quita el enmaskaramiento al enviar el dato
        //autoUnmask: INVESTIGAR

        rightAlign: true,
        removeMaskOnSubmit: true,
        prefix: "",
        alias: "numeric",
        groupSeparator: "",
        autoGroup: true,
        digits: 0,
        digitsOptional: false,
        min: 0,
        max: 100,
        allowMinus: false,
        autoUnmask: true,
        placeholder: "0",
        clearMaskOnLostFocus: false,
    })

    $("#entregadocita").inputmask({
        rightAlign: false,
        alias: "currency",
        prefix: "",
        radixPoint: ",",
        groupSeparator: ".",
        removeMaskOnSubmit: true,
        autoGroup: true,
        digits: 0,
        digitsOptional: false,
        min: 0,
        allowMinus: false,
        placeholder: "0",
    });
 


  

});
