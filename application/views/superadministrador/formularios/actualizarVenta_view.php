<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-shop-50.png"> Ventas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ventas</a></li>
                        <li class="breadcrumb-item active">Actualizar la venta</li>
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
                <h3 class="card-title">Actualizar la venta </h3>


            </div> <!-- Fin Caja superior -->

            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="col-md-12 col-sm-12">
                    <div class="box box-info">
                        <h5>
                            Detalles de la factura

                            <button type="button" class="float-right btn btn-success" data-toggle="modal"
                                data-target="#modal-pagar">
                                <i class="fa fa-print"></i> Guardar e imprimir</button>

                        </h5>




                    </div>
                    <!-- /.col -->
                </div>

                <br>
                <!-- info row -->
                <form role="form" method="POST">
                    <!--Inicio del card body-->


                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Fecha</label>
                                <input name="celular" type="text" class="form-control" value="16/06/2020"
                                    readonly="readonly">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Factura N°</label>
                                <input name="celular" type="text" class="form-control" value="0001" readonly="readonly">
                            </div>

                        </div>



                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Vendedor</label>
                                <input name="celular" type="text" class="form-control" value="Administrador"
                                    readonly="readonly">
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Agregar productos</label>
                                <button type="button" class="btn btn-block btn-info" data-toggle="modal"
                                    data-target="#modal-default"><i class="fa fa-search"></i> Buscar productos</button>
                            </div>

                        </div>


                    </div>

					<?php 
					/*
                    <div class="row">

                        <div class="col-md-6">
                            <div class="input-group">
                                <input class="form-control" type="text" name="barcode" required=""
                                    placeholder="Ingresa el código de barras">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-barcode"></i>
                                    </button>
                                </span>
                            </div>
                        </div>


                    </div>
					*/

					?>


                </form>

                <br>

                <!-- Table row -->
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Precio unit.</th>
                                    <th>Subtotal</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100</td>
                                    <td>Solla Bulto NutreCan Croquetas Adulto Carne y Pollo 30KG</td>
                                    <td>2</td>
                                    <td>$55.000</td>
                                    <td>$110.000</td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" href="#"
                                            onclick="return confirm('¿Estás seguro que deseas quitar este producto?')">
                                            <i class="fas fa-minus-circle"></i>
                                            Quitar
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>0320</td>
                                    <td>Kanú Juguete Hueso azul para perro UND</td>
                                    <td>2</td>
                                    <td>$7.800</td>
                                    <td>$15.600</td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" href="#"
                                            onclick="return confirm('¿Estás seguro que deseas quitar este producto?')">
                                            <i class="fas fa-minus-circle"></i>
                                            Quitar
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>767</td>
                                    <td> Alimentos Polar ¡Oh mai gat! Inquietos y aventureros 1.5KG</td>
                                    <td>3</td>
                                    <td>$19.300</td>
                                    <td>$57.900</td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" href="#"
                                            onclick="return confirm('¿Estás seguro que deseas quitar este producto?')">
                                            <i class="fas fa-minus-circle"></i>
                                            Quitar
                                        </a></td>
                                </tr>

                                <tr>
                                    <td colspan="4">
                                        <strong><span class="float-right">Descuento </span> </strong>
                                    </td>

                                    <td colspan="2">
                                        <input type="text" class="form-control col-md-3 text-center" style=""
                                            placeholder="%">

                                    </td>


                                </tr>




                                <tr>
                                    <td colspan="4"><strong><span class="float-right">TOTAL </span> </strong></td>
                                    <td><span class="pull-right">$183.500</span></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

            </div> <!-- Fin Contenido Total -->

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
                            <form class="form-horizontal">

                                <div class="container-fluid">
                                    <div class="row mb-1">

                                        <div class="col-auto mr-auto col-md-5">

                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Estoy buscando...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-success" type="button"><i
                                                            class="fas fa-search"></i></button>
                                                </span>
                                            </div>


                                        </div>

                                        <div class="col-auto">

                                            <a href="<?php echo base_url();?>producto/registrarproductosu" class="btn btn-success"><i class="fas fa-plus-circle"></i>
                                                Crear producto</a>
                                        </div>


                                    </div>

                            </form>
                            <br>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr class="warning">
                                            <th>Imagen</th>
                                            <th>Código</th>
                                            <th>Descripción</th>
                                            <th><span class="float-right">Cantidad</span></th>
                                            <th><span class="float-right">Precio Unitario </span></th>
                                            <th style="width: 30px;"></th>
                                        </tr>
                                        <tr>
                                            <td> <img src="http://placehold.it/80x60" alt="..."></td>
                                            <td>0010</td>

                                            <td> Solla Bulto NutreCan Croquetas Adulto Carne y Pollo 30KG</td>

                                            <td class="col-xs-1">

                                                <input type="text" class="form-control"
                                                    style="width:50% ;text-align:right; float:right" id="" value="1">


                                            </td>

                                            <td class="col-xs-2">
                                                <div class="input-group pull-right">
                                                    <div class="input-group-addon"
                                                        style="color:green; font-weight: bold; font-size:20px"> $ </div>
                                                    <input type="text" class="form-control "
                                                        style="width:85% ;text-align:right" id="precio_venta_10"
                                                        value="55.000">
                                                </div>
                                            </td>



                                            <td><span class="pull-right"><a href="#"><i class="fas fa-cart-plus "
                                                            style="font-size:24px;color: #5CB85C;"></i></a></span></td>
                                        </tr>
                                        <tr>
                                            <td> <img src="http://placehold.it/80x60" alt="..."></td>
                                            <td>0123</td>

                                            <td> Kanú Bolsa CatLitter Arena sanitaria para gatos 10KG</td>

                                            <td class="col-xs-1">

                                                <input type="text" class="form-control"
                                                    style="width:50% ;text-align:right; float:right" id="" value="1">


                                            </td>

                                            <td class="col-xs-2">
                                                <div class="input-group pull-right">
                                                    <div class="input-group-addon"
                                                        style="color:green; font-weight: bold; font-size:20px"> $ </div>
                                                    <input type="text" class="form-control "
                                                        style="width:85% ;text-align:right" id="precio_venta_10"
                                                        value="35.900">
                                                </div>
                                            </td>



                                            <td><span class="pull-right"><a href="#"><i class="fas fa-cart-plus "
                                                            style="font-size:24px;color: #5CB85C;"></i></a></span></td>
                                        </tr>
                                        <tr>
                                            <td> <img src="http://placehold.it/80x60" alt="..."></td>
                                            <td>0320</td>

                                            <td> Kanú Juguete Hueso azul para perro UND</td>

                                            <td class="col-xs-1">

                                                <input type="text" class="form-control"
                                                    style="width:50% ;text-align:right; float:right" id="" value="1">


                                            </td>

                                            <td class="col-xs-2">
                                                <div class="input-group pull-right">
                                                    <div class="input-group-addon"
                                                        style="color:green; font-weight: bold; font-size:20px"> $ </div>
                                                    <input type="text" class="form-control "
                                                        style="width:85% ;text-align:right" id="precio_venta_10"
                                                        value="7.800">
                                                </div>
                                            </td>



                                            <td><span class="pull-right"><a href="#"><i class="fas fa-cart-plus "
                                                            style="font-size:24px;color: #5CB85C;"></i></a></span></td>
                                        </tr>
                                        <tr>
                                            <td> <img src="http://placehold.it/80x60" alt="..."></td>
                                            <td>0643</td>

                                            <td> Nexgart Antipulgas para perro de 25 a 50KG UND</td>

                                            <td class="col-xs-1">

                                                <input type="text" class="form-control"
                                                    style="width:50% ;text-align:right; float:right" id="" value="1">


                                            </td>

                                            <td class="col-xs-2">
                                                <div class="input-group pull-right">
                                                    <div class="input-group-addon"
                                                        style="color:green; font-weight: bold; font-size:20px"> $ </div>
                                                    <input type="text" class="form-control "
                                                        style="width:85% ;text-align:right" id="precio_venta_10"
                                                        value="55.000">
                                                </div>
                                            </td>



                                            <td><span class="pull-right"><a href="#"><i class="fas fa-cart-plus "
                                                            style="font-size:24px;color: #5CB85C;"></i></a></span></td>
                                        </tr>
                                        <tr>
                                            <td> <img src="http://placehold.it/80x60" alt="..."></td>
                                            <td>767</td>

                                            <td> Alimentos Polar ¡Oh mai gat! Inquietos y aventureros 1.5KG</td>

                                            <td class="col-xs-1">

                                                <input type="text" class="form-control"
                                                    style="width:50% ;text-align:right; float:right" id="" value="1">


                                            </td>

                                            <td class="col-xs-2">
                                                <div class="input-group pull-right">
                                                    <div class="input-group-addon"
                                                        style="color:green; font-weight: bold; font-size:20px"> $ </div>
                                                    <input type="text" class="form-control "
                                                        style="width:85% ;text-align:right" id="precio_venta_10"
                                                        value="19.300">
                                                </div>
                                            </td>



                                            <td><span class="pull-right"><a href="#"><i class="fas fa-cart-plus "
                                                            style="font-size:24px;color: #5CB85C;"></i></a></span></td>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="modal-footer justify-content-between">



                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>




                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="card-footer">


            <button type="button" class="float-right btn btn-success" data-toggle="modal" data-target="#modal-pagar"> <i
                    class="far fa-money-bill-alt"></i>
                Pagar </button>



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
                                            <select name="categoria" class="form-control">

                                                <option hidden selected>-Seleccione la forma de pago-</option>
                                                <option value="1">Efectivo</option>
                                                <option value="2">Transferencia</option>

                                            </select>

                                        </div>




                                    </div>



                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-3">
                                        <div class="form-group">

                                            <label>Total</label>
                                            <input name="total" type="text" class="form-control " readOnly="readonly"
                                                value="$183.500">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">

                                            <label>Entregado</label>
                                            <input name="entregado" type="text" class="form-control " value="">
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">

                                            <label>Comprobante N°</label>
                                            <input name="total" type="text" class="form-control " readOnly="readonly"
                                                value="">
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </form>




                        <p style=" text-align:center; color:green; font-size:30px;">Cambio $55.000</p>




                    </div>


                    <div class="modal-footer justify-content-between">



                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fas fa-check"></i>
                            Aceptar</button>



                    </div>




                </div>
            </div>
            <!-- /.modal-content -->
        </div>

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
