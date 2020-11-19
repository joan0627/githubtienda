$(document).ready(function() {

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
    OSREC.CurrencyFormatter.formatAll({
        selector: ".listadoCompramoney",
        currency: "COP",
    })



    //Select2 para el campo Proveedor de la sección Compras

    var $select = $(".js-example-placeholder-single").select2({
        placeholder: "-Seleccione un proveedor-",
        theme: "bootstrap4",

    });



});