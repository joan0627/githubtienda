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
                                    Factura de compra N°<?php  foreach ($encabezado as $key) {echo $key->idCompras;} ?>
                                </div>
                                <div></div>

                                <div class="fecha">Fecha: <?php  foreach ($encabezado as $key) {echo $key->fechaRegistroCompra;} ?></div>
                                <div class="fecha">Usuario:<?php  foreach ($encabezado as $key) {echo $key->nombre;} ?></div>
                                <div class="fecha">Estado: <?php  foreach ($encabezado as $key) {echo ($key->estado==1) ? 'Registrada' :'Anulada'; } ?></div>
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

                                <td></td>

                            <td align="left">


                                <div >
                                    <div style="text-align:center;">
                                        <h5 style="font-weight: bold;"> Proveedor</h5> <?php  foreach ($encabezado as $key) {echo $key->nombreProveedor;} ?>
                                    </div>
                                    <br>
                                    <div style="float:left;">
                                    <strong style="font-weight: bold; ">Nit:</strong> <?php  foreach ($encabezado as $key) {echo $key->documento;} ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                    </div>
                                
                                    <strong style="font-weight: bold;">Dirección:</strong> <?php  foreach ($encabezado as $key) {echo ($key->direccion!='')?$key->direccion : 'Sin datos';} ?>
                                   
                                    <div>

                                    <strong style="font-weight: bold;">Teléfono:</strong> <?php  foreach ($encabezado as $key) {echo ($key->telefono!='')?$key->telefono : 'Sin datos';} ?>
                                   <br>
                                    <strong style="font-weight: bold;">Correo:</strong> <?php  foreach ($encabezado as $key) {echo ($key->correo!='')? $key->correo : 'Sin datos' ;} ?>
                                        
                                     </div>
    
                                  
                                </div>



                            </td>
                            <td> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</td>
                           


                            <td align="left">

                                <div style="">
                                    <div style="text-align:center;">
                                        <h5 style="font-weight: bold;"> Cliente</h5> El rincón de la mascota
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
                <th width=100>Costo Unitario</th>
                <th width=100>Precio Bruto</th>
                <th width=60>Iva %</th>
                <th width=100>Precio Neto</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="6" style="text-align:right"><strong>SUBTOTAL</strong></td>
                <td>
                    <?php 
                     $preciobruto=0;

                     foreach ($detalle as $key) { 

                        $preciobruto += $key->costoProducto * $key->cantidad;

                    }
                    
                    echo  '$'.$preciobruto; ?>
                </td>
            </tr>

            <tr>
                <td colspan="6" style="text-align:right"><strong>IVA</strong></td>
                <td>
                    <?php 
                    $totaliva=0;

                     foreach ($detalle as $key) { 

                        $totaliva +=  $key->iva;

                    }
                    
                    echo  '$'.$totaliva; ?>


                </td>
            </tr>

            <tr>
                <td colspan="6" style="text-align:right"><strong>TOTAL</strong></td>
                <td>
                    <?php 
                        $precioneto=0;
                        
                     foreach ($detalle as $key) { 

                        $precioneto += (($key->costoProducto * $key->cantidad) + $key->iva);

                    }
                    
                    echo  '$'.$precioneto; ?>

                </td>
            </tr>
        </tfoot>

        <tbody>

            <?php  foreach ($detalle as $key) { ?>

            <tr>
                <td align="center"><?php echo $key->idProducto?></td>
                <td>
                    <?php echo $key->descripcionPresentacion . " X " . $key->valorMedida . " " . $key->descripcionUnidadmedida . " " . $key->nombreProducto; ?>
                </td>
                <td align="center"><?php echo $key->cantidad?></td>
                <td><?php echo '$'.$key->costoProducto?></td>
                <td><?php echo '$'.$key->costoProducto * $key->cantidad;?></td>
                <td align="center">
                    <?php echo ($key->iva > 0) ? 100*($key->iva/$key->cantidad)/$key->costoProducto. '%' :   '0%';?>
                </td>
                <td><?php echo'$'.(($key->costoProducto * $key->cantidad) + $key->iva) ?></td>

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
            <p style=" color: #5D6975;"> <?php  foreach ($encabezado as $key) {echo ($key->observacionesCompra!='')?$key->observacionesCompra : 'Sin datos';} ?></p>

        </div>
    </div>

    <br>
    <br>
    <div class="invoice-footer">
        Esta factura es válida sin firma y sello.
        <br />La fecha de esta factura corresponde a la fecha exacta de la compra.
        <br />
        <strong>~IntraRuk~</strong>
    </div>

</body>

</html>