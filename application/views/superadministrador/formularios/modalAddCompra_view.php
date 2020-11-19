

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
                                            <td><div class='input-group' style='width: 80%;'><input  type='text' value='1' class=' form-control cantidadinput'></div></td>
                                            <td style='width:20% !important ;'> <div class='input-group '><div class='input-group-addon' style='color:green; font-weight: bold; font-size:20px'>$</div><input  name='costoinput' type='text' class='costoinput form-control 'style='text-align:right' ></div></td>
                                            <td><div class='input-group '><input  max=99 type='text' class=' percent form-control ivainput 'style='width:85% ;' value='0' ><div class='input-group-addon' style='color:gray; font-weight: bold; font-size:20px'>%</div></div></td>
                                            <td><button class='btncarrito' style=' border: none; background: none; outline: none;'><i class='fas fa-cart-plus' style='font-size:28px;color: #5CB85C; '></i></button></td>

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

