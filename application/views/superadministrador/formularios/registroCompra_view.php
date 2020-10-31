<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url(); ?>assets/img/iconos/icons8-delivery-50.png"> Compras</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Compras</a></li>
                        <li class="breadcrumb-item active">Registro de compra</li>
                    </ol>
                </div>
            </div>
        </div><!-- FIN/.container-fluid -->
    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <!-- Inicio Contenido Total -->
        <div class="card card-success">
            <!-- Incio Caja superior -->
            <div class="card-header">
                <h3 class="card-title">Registro de compra </h3>
            </div>

            <div class="card-body">


                <div class="col-md-12 col-sm-12">
                    <div class="box box-info">
                        <h5>
                            Detalles de la factura


                            <a href="<?php echo base_url(); ?>proveedor/registro" class="float-right btn btn-success"><i
                                    class="fas fa-plus-circle"></i>
                                Crear proveedor</a>

                        </h5>

                    </div>
                    <!-- /.col -->
                </div>

                <br>
                <!-- info row -->
                <form id="basic-form" method="POST">
                    <!--Inicio del card body-->


                    <div class="row">
                        <div class="col-md-2">

                            <div class="form-group">
                                <label>Fecha</label>
                                <input id="fechaCompra" type="text" readOnly="readonly" class="form-control"
                                    value="<?php echo date("Y-m-d"); ?>">

                            </div>

                        </div>


                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Código</label>
                                <input id="idCompra" readOnly="readonly" type="text" class="form-control"
                                    value="<?php
                                                                                                                    if ($this->session->flashdata('codigoCompra')) {
                                                                                                                        echo 1;
                                                                                                                    }
                                                                                                                    echo $clave['idCompras'] + 1; ?>">
                            </div>

                        </div>



                        <div class="col-md-2">
                            <div class="form-group">
                                <label style="width:120px">Factura N°</label>
                                <input id="facturaProveedor" name="facturaProveedor" type="text" class="form-control"
                                    value="<?php echo $facturaProveedor; ?>">
                            </div>

                        </div>

                        <div class="col-md-4" >
                            <div  class="form-group">
                                <label>Proveedor</label>
                                <select class="js-example-placeholder-single form-control" >
                                <option></option>
                                    <?php foreach ($proveedores as $valor) : ?>
                                   
                                    <option value="<?php  echo  $valor->documento; ?>">
                                        <?php echo  $valor->nombre; ?></option>

                                    <?php endforeach; ?>

                                </select>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group box box-info">

                                <label>Agregar productos</label>
                                <button style="width:100%" type="button" class=" btn btn-block btn-info float-right"
                                    data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i>
                                    Buscar
                                    productos</button>

                            </div>

                        </div>

                    </div>
                    <hr>

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">


                            <table id="example2" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>Código</th>
                                        <th>Descripción</th>
                                        <th>Cantidad</th>
                                        <th>Costo Unit.</th>
                                        <th>Costo Total</th>
                                        <th style="text-align:center;">Iva</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <input type="hidden" name="table_required">
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4" style="text-align:right">Total:</th>
                                        <th colspan="3"></th>

                                    </tr>

                                    <tr>
                                        <th colspan="4" style="text-align:right">Total Iva:</th>
                                        <th colspan="3"></th>

                                    </tr>

                                    <tr>
                                        <th colspan="4" style="text-align:right">Total Global:</th>
                                        <th colspan="3"></th>

                                    </tr>


                                </tfoot>
                            </table>



                        </div>

                    </div>





            </div>


            <div class="card-footer ">

                <label>Observaciones</label>

                <div class="row">

                    <div class="col-md-10">
                        <textarea style="width:50%" class="form-control" rows="2" placeholder="Ingrese una observación"
                            name="observaciones" id="observaciones"></textarea>
                    </div>


                </div>



                <div class="row">


                    <div class="col-md-12 text-right">


                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" id="registrarCompra"
                            class="btn btn-success col-2" type="submit"><i class="fas fa-save"></i> Registrar</button>

                        <a style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;"
                            href="<?php echo base_url(); ?>compra" class="btn btn-success col-2"><i
                                class="fas fa-arrow-left"></i> Atrás</a>

                    </div>


                </div>

                </form>

            </div>



        </div>






        <!--Modal de productos-->
        <div class="modal fade " id="modal-default">
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
                          
                                <table id="example1" class=" table table-striped ">

                                    <thead>

                                        <tr>
                                            <th>Código</th>
                                            <th hidden>Categoría</th>
                                            <th>Descripción</th>
                                            <th style="text-align:center;">Cantidad</th>
                                            <th style="text-align:center;">Costo</th>
                                            <th style="text-align:center;">Iva</th>
                                            <th style="text-align:left;">Acción</th>


                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php foreach ($Productos as $valor) : ?>
                                        <tr>

                                            <td><?php echo  $valor->idProducto; ?></td>
                                            <td hidden><?php echo  $valor->descripcion; ?></td>
                                            <td><?php echo $valor->descripcionPresentacion . " X " . $valor->valorMedida . " " . $valor->descripcionUnidadmedida . " " . $valor->nombreProducto; ?>
                                            </td>
                                            <td></td>
                                            <td style='width:20% !important ;'></td>
                                            <td></td>
                                            <td></td>

                                        </tr>



                                        <?php endforeach; ?>
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




    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->