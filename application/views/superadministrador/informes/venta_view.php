<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="<?php base_url();?>assets/img/logo.png " style="width:100%; max-width:180px;">
                            </td>


                            <td>
                                <div class="titulo">
                                    Comprobante de venta
                                    N°<?php  foreach ($encabezadoVenta as $key) {echo $key->idFactura;} ?>
                                </div>
                                <div></div>

                                <div class="fecha">Fecha:
                                    <?php  foreach ($encabezadoVenta as $key) {echo $key->fecha;} ?></div>
                                <div class="fecha">
                                    Vendedor:<?php  foreach ($encabezadoVenta as $key) {echo $key->nombre;} ?></div>
                                <div class="fecha">Estado:
                                    <?php  foreach ($encabezadoVenta as $key) {echo ($key->estado==1) ? 'Registrada' :'Anulada'; } ?>
                                </div>
                            </td>


                        </tr>


                    </table>
                </td>
            </tr>

            <br>


            <tr style=" background-color: #fafafa;" class="information">


                <td colspan="2">
                    <table>
                        <tr>
                            <td align="left">

                                <div style="">
                                    <div style="text-align:center;">
                                        <h5 style="font-weight: bold;"> El rincón de la mascota</h5>
                                    </div>
                                    <br>
                                    <strong style="font-weight: bold;">Dirección:</strong> Cra. 79 #2 B-43 <br>
                                    <strong style="font-weight: bold;">Ciudad:</strong> Medellín, Antioquia
                                    <br>
                                    <strong style="font-weight: bold;">Teléfono:</strong> 4488723
                                    <br>
                                    <strong style="font-weight: bold;">Correo:</strong> dominio@hotmail.com
                                </div>
                            </td>


                        </tr>

                    </table>

                </td>
            </tr>
        </table>

    </div>

    <table class="invoicedetail" cellspacing='0'>
        <thead>
            <tr>
                <th width=80>Código</th>
                <th width=250>Descripción</th>
                <th width=50>Cantidad</th>
                <th width=100>Precio Unitario</th>

                <th width=100>Precio Neto</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="4" style="text-align:right"><strong>SUBTOTAL</strong></td>
                <td>
                    <?php 
                     $subtotal=0;

                     foreach ($detalleVenta as $key) { 

                        $subtotal += $key->precioVenta * $key->cantidad;

                    }
                    
                    echo  '$'.$subtotal; ?>
                </td>
            </tr>

            <tr>
                <td colspan="4" style="text-align:right">
                    <strong>DESCUENTO
                <?php 
              
                        
                foreach ($detalleVenta as $key) { 

                    $descuento=  $key->descuentoTotal;

                }
             
                echo $descuento.'%'; ?>


                    </strong>
                </td>

                <td><?php echo '$'.($subtotal * $descuento) /100?></td>

            </tr>



            <tr>
                <td colspan="4" style="text-align:right"><strong>TOTAL</strong></td>
                <td>
                    <?php 
                        $precioneto=0;
                        
                     foreach ($detalleVenta as $key) { 


                   
                        $precioneto = ($subtotal* (100 - $key->descuentoTotal) /100);

                    }
                    
                    echo  '$'.$precioneto; ?>

                </td>
            </tr>
        </tfoot>

        <tbody>

            <?php  foreach ($detalleVenta as $key) { ?>

            <tr>
                <td align="center"><?php echo $key->idFactura?></td>
                <td>
                    <?php echo $key->descripcionPresentacion . " X " . $key->valorMedida . " " . $key->descripcionUnidadmedida . " " . $key->nombreProducto; ?>
                </td>
                <td align="center"><?php echo $key->cantidad?></td>
                <td><?php echo '$'.$key->precioVenta?></td>
                <td><?php echo '$'.$key->precioVenta * $key->cantidad;?></td>


                <?php } ?>

            </tr>

        </tbody>

        </tr>
    </table>
    <br>

    <div class="panel panel-default">
        <div class="panel-body">
            <strong style="font-weight: bold;">Observaciones</strong>
            <hr style="margin:3px 0 5px color: #5D6975;" />
            <p style=" color: #5D6975;">
                <?php  foreach ($encabezadoVenta as $key) {echo ($key->observaciones!='')?$key->observaciones : 'Sin datos';} ?>
            </p>

        </div>
    </div>

    <br>
    <br>
    <div class="invoice-footer">
        Esta factura es válida sin firma y sello.
        <br />La fecha de esta factura corresponde a la fecha exacta de la venta.
        <br />
        <strong>~IntraRuk~</strong>
    </div>

</body>

</html>