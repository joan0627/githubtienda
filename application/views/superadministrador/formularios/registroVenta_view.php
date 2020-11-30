<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-shop-50.png"> Ventas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ventas</a></li>
                        <li class="breadcrumb-item active">Registro de venta</li>
                    </ol>
                </div>
            </div>
        </div><!-- FIN/.container-fluid -->
    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <!-- Inicio Contenido Total -->
        <div class="card  card-success">
            <!-- Incio Caja superior -->
            <div class="card-header">
                <h3 class="card-title">Registro de venta </h3>


            </div> <!-- Fin Caja superior -->

            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="col-md-12 col-sm-12">
                    <div class="box box-info">



                    </div>
                    <!-- /.col -->
                </div>

                <br>
                <!-- info row -->
                <form class="form_venta" id="form_venta" role="form" method="POST">
                    <!--Inicio del card body-->


                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Fecha</label>
                                <input id="fechaVenta" name="fechaVenta" type="date" class="form-control"
                                    value="<?php echo date("Y-m-d"); ?>">
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>N° de venta</label>
                                <input readonly="readonly" id="Nventa" name="Nventa" placeholder="N°" type="text"
                                    value="<?php  echo $clave['idFactura'] + 1; ?>" class="form-control">
                            </div>

                        </div>



                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Vendedor</label> <label style="color: red;"> * </label>
                                <select id="vendedor" class="js-example-venta-single form-control " style="width: 100%;"
                                    name="vendedor">
                                    <option></option>
                                    <?php foreach ($usuarios as $valor) : ?>

                                    <option value="<?php  echo  $valor->idUsuario; ?>">
                                        <?php echo  $valor->nombre; ?></option>

                                    <?php endforeach; ?>

                                </select>
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Agregar productos</label>
                                <button type="button" class="btn btn-block btn-info" data-toggle="modal"
                                    data-target="#modal_Producto_venta"><i class="fa fa-search"></i> Buscar
                                    productos</button>
                            </div>

                        </div>


                    </div>



                </form>

                <br>

                <!-- Table row -->
                <div class="row">
                    <div class="col-12 table-responsive">

                        <table id="tableVenta" class=" table table-striped " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Precio de venta.</th>
                                    <th>Precio Neto</th>
                                    <th style="text-align:center;">Acción</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                            <tfoot>

                                <tr>
                                    <th colspan="4" style="text-align:right">Subtotal:</th>
                                    <th colspan="2"></th>
                                </tr>

                                <tr>
                                    <td colspan="4">
                                        <strong><span class="float-right">Descuento </span> </strong>
                                    </td>

                                    <td colspan="2">
                                        <input disabled id="descuentoVenta"  type="text" class="form-control col-md-2 text-center" style=""
                                            placeholder="%">

                                    </td>
                                </tr>


                                <tr>
                                    <th colspan="4" style="text-align:right">Total:</th>
                                    <th colspan="2"></th>
                                </tr>


                            </tfoot>
                        </table>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

            </div> <!-- Fin Contenido Total -->
            <!--Modal de productos-->
            <div class="modal fade " id="modal_Producto_venta">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Buscar productos</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Listado de productos</h3>

                                    <div class="float-right">

                                        <a href="<?php echo base_url(); ?>producto/registro" class="btn btn-success"><i
                                                class="fas fa-plus-circle "></i>
                                            Crear producto</a>
                                    </div>
                                </div>

                                <div class="card-body">

                                    <table id="tableProductos" class=" table table-striped" style="width:100%">

                                        <thead>

                                            <tr>
                                                <th>Código</th>
                                                <th>Categoría</th>
                                                <th>Descripción</th>
                                                <th style="text-align:center;">Cantidad</th>
                                                <th style="text-align:center;">Precio</th>
                                                <th style="text-align:left;">Acción</th>


                                            </tr>

                                        </thead>

                                        <tbody>


                                        </tbody>



                                        <tfoot>

                                        </tfoot>
                                    </table>

                                </div>



                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>



      



     
        <div class="card-footer ">

             <label>Observaciones</label>

            <div class="row">


                <div class="col-md-10">
                    <textarea style="width:50%" class="form-control" rows="2" placeholder="Ingrese una observación"
                        name="observacionesVenta" id="observacionesVenta"></textarea>
                </div>

            </div>


                <div class="row">
                    <div class="col-md-12 text-right">
                        <a style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" href="<?php echo base_url()?>venta"
                            class="btn btn-success col-2"><i class="fas fa-arrow-left"></i> Atrás</a>

                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" id="pagarVenta"
                            class="btn btn-success col-2"><i class="fas fa-coins"></i> Cobrar</button>

                    </div>
                </div>




        </div>

        <div class="modal fade " id="modal-pagar">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pagar</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">

                            <div class="container-fluid">
                                <div class="row mb-1">



                                    <div class="col-auto">

                                        <div class="form-group">

                                            <label>Forma de pago</label>
                                            <select id="forma_pago" name="forma_pago" class="form-control">


                                                <?php foreach ($formaPago as $valor) : ?>

                                                <option value="<?php  echo  $valor->idFormaPago; ?>">
                                                    <?php echo  $valor->descripcion; ?></option>

                                                <?php endforeach; ?>

                                            </select>

                                        </div>




                                    </div>



                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label>Total</label>
                                            <input id="total_venta" name="total_venta" type="text" class="form-control "
                                                readOnly="readonly">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">

                                            <label>Entregado</label>
                                            <input id="entregado" name="entregado" placeholder="$" type="text"
                                                class="form-control " value="">
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">

                                            <label>Comprobante N°</label>
                                            <input disabled id="Ncomprobante" type="text" class="form-control "
                                                placeholder="N°">
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </form>

                        <div id="div_cambio" style=" text-align:center; color:green; font-size:30px;">
                            <h2>Cambio: </h2>
                            <h2 class="cambioI" id="cambioI"> </h2>
                        </div>



                    </div>


                    <div class="modal-footer justify-content-between">



                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>

                        <button id="registroVenta" type="button" class="btn btn-success">
                            <i class="fas fa-save"></i> Registrar</button>



                    </div>




                </div>
            </div>
            <!-- /.modal-content -->
        </div>

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->