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
                                    N°<?php  foreach ($encabezadoVentaServicio as $key) {echo $key->idFactura;} ?>
                                </div>
                                <div></div>

                                <div class="fecha">Fecha:
                                    <?php  foreach ($encabezadoVentaServicio as $key) {echo $key->fecha;} ?></div>
                                <div class="fecha">
                                    Vendedor:<?php  foreach ($encabezadoVentaServicio as $key) {echo $key->nombre;} ?></div>
                                <div class="fecha">Forma de pago:
                                    <?php  foreach ($encabezadoVentaServicio as $key) {echo $key->descripcion;} ?></div>
                                <div class="fecha">Comprobante:
                                    <?php  foreach ($encabezadoVentaServicio as $key) {echo ($key->descripcion=='Transferencia') ?  $key->nComprobante :'Sin datos'; }?>
                                </div>
                                <div class="fecha">Estado:
                                    <?php  foreach ($encabezadoVentaServicio as $key) {echo ($key->estado==1) ? 'Registrada' :'Anulada'; } ?>
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

                <td></td>

            <td align="left">


                <div >
                    <div style="text-align:center;">
                        <h5 style="font-weight: bold;">Cliente:</h5> <?php  foreach ($encabezadoVentaServicio as $key) {echo $key->namecliente;} ?>
                    </div>
                    <br>

                    <strong style="font-weight: bold;">Dirección:</strong> <?php  foreach ($encabezadoVentaServicio as $key) {echo ($key->direccion!='')?$key->direccion : 'Sin datos';} ?>
                   
                    <div>

                    <strong style="font-weight: bold;">Celular:</strong> <?php  foreach ($encabezadoVentaServicio as $key) {echo ($key->celular!='')?$key->celular : 'Sin datos';} ?>
                   <br>
                    <strong style="font-weight: bold;">Correo:</strong> <?php  foreach ($encabezadoVentaServicio as $key) {echo ($key->correo!='')? $key->correo : 'Sin datos' ;} ?>
                        
                     </div>

                  
                </div>



            </td>
            <td> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</td>
           


            <td align="left">

                <div style="">
                    <div style="text-align:center;">
                    <h5 style="font-weight: bold;"> El rincón de la mascota</h5>
                    </div>
                    <br>
                    <strong style="font-weight: bold;">Dirección:</strong> Cra. 79 #2 B-43 <br>
                    <strong style="font-weight: bold;">Ciudad:</strong> Medellín, Antioquia
                    <br>
                    <strong style="font-weight: bold;">Teléfono:</strong> 3057275665
                    <br>
                    <strong style="font-weight: bold;">Correo:</strong> katy1324-1@hotmail.com
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
                <th width=100>Precio Unitario</th>
               
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="2" style="text-align:right"><strong>SUBTOTAL</strong></td>
                <td>
                    <?php 
                     $subtotal=0;

                     foreach ($encabezadoVentaServicio as $key) { 

                        $subtotal = $key->totalGlobal;

                    }
                    
                    echo  '$'.$subtotal; ?>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align:right">
                    <strong>DESCUENTO
                <?php 
              
                        
                foreach ($encabezadoVentaServicio as $key) { 

                    $descuento=  $key->descuento;

                }
             
                echo $descuento.'%'; ?>


                    </strong>
                </td>

                <td><?php echo '$'.($subtotal * $descuento) /100?></td>

            </tr>



            <tr>
                <td colspan="2" style="text-align:right"><strong>TOTAL</strong></td>
                <td>
                    <?php 
                        $precioneto=0;
                        
                     foreach ($encabezadoVentaServicio as $key) { 


                        $precioneto = ($subtotal* (100 - $key->descuento) /100);

                    }
                    
                    echo  '$'.$precioneto; ?>

                </td>
            </tr>
        </tfoot>

        <tbody>

            <?php  foreach ($encabezadoVentaServicio as $key) { ?>

            <tr>
                <td align="center"><?php echo $key->idFactura?></td>
                <td>
                    <?php echo $key->nombreServicio?>
                </td>
                <td><?php echo $key->totalGlobal?></td>


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
                <?php  foreach ($encabezadoVentaServicio as $key) {echo ($key->observaciones!='')?$key->observaciones : 'Sin datos';} ?>
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