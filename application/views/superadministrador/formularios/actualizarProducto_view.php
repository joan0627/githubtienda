<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-price-tag-50.png" class="nav-icon">
                        Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Producto</a></li>
                        <li class="breadcrumb-item active">Actualizar</li>
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
                <h3 class="card-title">Actualizar producto </h3>


            </div> <!-- Fin Caja superior -->

            <!-- Inicio form -->
            <form role="form" method="POST">
                <!--Inicio del card body-->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Codigo</label> <label style="color: red;"> * </label>
                                <input name="codigo" type="text" class="form-control " placeholder="Ingrese el codigo"
                                    readonly="readonly"
                                    value="<?php if(isset($_POST['codigo'])){ echo $_POST['codigo']; }else{ echo $productos['idProducto']; } ?>">
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nombre</label> <label style="color: red;"> *</label>
                                <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre"
                                    value="<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; }else{ echo $productos['nombreProducto']; } ?>">
                                <?php echo form_error('nombre', '<p class="text-danger">', '</p>'); ?>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="2"
                                    placeholder="Escribe una descripción del producto ..."
                                    name="descripcion"><?php if(isset($_POST['descripcion'])){ echo $_POST['descripcion']; }else{ echo $productos['descripcionProducto']; } ?></textarea>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Categoría</label> <label style="color: red;"> *</label>
                                <select name="categoria" id="categoria" class="form-control">

                                    <?php if ($categoria != "") : ?>
                                    <?php foreach ($categorias as $clave => $valor) : ?>
                                    <?php if ($categoria == $valor->idCategoria) : ?>

                                    <option hidden value=" <?php echo  $valor->idCategoria; ?>" selected>
                                        <?php


													echo  $valor->descripcion; ?></option>
                                    <?php
												foreach ($categorias as $clave => $valor) : ?>


                                    <option value=" <?php echo  $valor->idCategoria; ?>">
                                        <?php echo  $valor->descripcion; ?></option>
                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($categorias as $clave => $valor) : ?>
                                    <option value="<?php  echo $productos['idCategoria']; ?>" selected hidden><?php  echo $productos['descripcion']; ?></option>;
                                    <option value=" <?php echo  $valor->idCategoria; ?>">
                                        <?php echo  $valor->descripcion; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>
                                </select>
                                <?php echo form_error('categoria', '<p class="text-danger">', '</p>'); ?>

                            </div>
                        </div>



                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Marca</label> <label style="color: red;"> *</label>
                                <select name="marca" class="form-control">
                                <?php if ($marca != "") : ?>
                                    <?php foreach ($marcas as $clave => $valor) : ?>
                                    <?php if ($marca== $valor->idMarca) : ?>

                                    <option hidden value=" <?php echo  $valor->idMarca; ?>" selected >
                                        <?php


													echo  $valor->descripcionMarca; ?></option>
                                    <?php
												foreach ($marcas as $clave => $valor) : ?>


                                    <option value=" <?php echo  $valor->idMarca; ?>">
                                        <?php echo  $valor->descripcionMarca; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($marcas as $clave => $valor) : ?>
                                    <option value="<?php  echo $productos['idMarca']; ?>" selected hidden><?php  echo $productos['descripcionMarca']; ?></option>;
                                    <option value=" <?php echo  $valor->idMarca; ?>">
                                        <?php echo  $valor->descripcionMarca; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>

                                </select>
                                
                                <?php echo form_error('marca', '<p class="text-danger">', '</p>'); ?>

                            </div>

                        </div>



                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Presentación</label> <label style="color: red;"> * </label>
                                <select name="presentacion" class="form-control">
                                <?php if ($presentacion != "") : ?>
                                    <?php foreach ($presentaciones as $clave => $valor) : ?>
                                    <?php if ($presentacion == $valor->idPresentacion) : ?>

                                    <option hidden value=" <?php echo  $valor->idPresentacion; ?>" selected>
                                        <?php


													echo  $valor->descripcionPresentacion; ?></option>
                                    <?php
												foreach ($presentaciones as $clave => $valor) : ?>


                                    <option value=" <?php echo  $valor->idPresentacion; ?>">
                                        <?php echo  $valor->descripcionPresentacion; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($presentaciones as $clave => $valor) : ?>
                                    <option value="<?php  echo $productos['idPresentacion']; ?>" selected hidden><?php  echo $productos['descripcionPresentacion']; ?></option>;
                                    <option value=" <?php echo  $valor->idPresentacion; ?>">
                                        <?php echo  $valor->descripcionPresentacion; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>

                                </select>
                                <?php echo form_error('presentacion', '<p class="text-danger">', '</p>'); ?>
                            </div>





                        </div>



                    </div>


                    <div class="row">




                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Valor de medida</label><label style="color: red;"> * </label>
                                <input name="valorDeMedida" type="text" class="form-control"
                                    value="<?php if(isset($_POST['valorDeMedida'])){ echo $_POST['valorDeMedida']; }else{ echo $productos['valorMedida']; } ?>">
                                <?php echo form_error('valorDeMedida', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Unidad de medida</label> <label style="color: red;"> * </label>
                                <select name="unidadDeMedida" class="form-control">
                                    <?php if ($unidadMedida != "") : ?>
                                    <?php foreach ($unidadesmedidas as $clave1 => $valor) : ?>
                                    <?php if ($unidadMedida == $valor->idUnidadMedida) : ?>

                                    <option hidden value=" <?php echo  $valor->idUnidadMedida; ?>" selected>
                                        <?php


													echo  $valor->descripcionUnidadmedida; ?></option>
                                    <?php
												foreach ($unidadesmedidas as $clave1 => $valor) : ?>


                                    <option value=" <?php echo  $valor->idUnidadMedida; ?>">
                                        <?php echo  $valor->descripcionUnidadmedida; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($unidadesmedidas as $clave1 => $valor) : ?>
                                    <option value="<?php  echo $productos['idUnidadMedida']; ?>" selected hidden><?php  echo $productos['descripcionUnidadmedida']; ?></option>;
                                    <option value=" <?php echo  $valor->idUnidadMedida; ?>">
                                        <?php echo  $valor->descripcionUnidadmedida; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>

                                </select>
                                <?php echo form_error('unidadDeMedida', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Existencia</label> <label style="color: red;"> * </label>
                                <input name="existencia" type="number" class="form-control"
                                    placeholder="Ingrese la existencia" min="1"
                                    value="<?php if(isset($_POST['existencia'])){ echo $_POST['existencia']; }else{ echo $productos['existencia']; } ?>">
                                <?php echo form_error('existencia', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>



                        <div class="col-md-6">



                            <div class="form-group">
                                <label>Tipo de especie</label> <label style="color: red;"> *</label>
                                <select class="form-control " style="width: 100%;" name="tipoespecie">
                                    <?php if ($especieproducto != "") : ?>
                                    <?php foreach ($especieproductos as $clave => $valor) : ?>
                                    <?php if ($especieproducto == $valor->idEspecieProducto) : ?>

                                    <option hidden value=" <?php echo  $valor->idEspecieProducto; ?>" selected>
                                        <?php echo  $valor->descripcionEspecie; ?></option>

                                    <?php foreach ($especieproductos as $clave => $valor) : ?>

                                    <option value=" <?php echo  $valor->idEspecieProducto; ?>">
                                        <?php echo  $valor->descripcionEspecie; ?></option>

                                    <?php endforeach; ?>

                                    <?php endif;  ?>
                                    <?php endforeach; ?>
                                    <?php else :
										foreach ($especieproductos as $clave => $valor) : ?>
                                     <option value="<?php  echo $productos['idEspecieProducto']; ?>" selected hidden><?php  echo $productos['descripcionEspecie']; ?></option>;
                                    <option value=" <?php echo  $valor->idEspecieProducto; ?>">
                                        <?php echo  $valor->descripcionEspecie; ?></option>

                                    <?php endforeach; ?>
                                    <?php endif ?>

                                </select>
                                <?php echo form_error('tipoespecie', '<p class="text-danger">', '</p>'); ?>
                            </div>




                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Indicaciones</label> <label style="color: red;"> * </label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Especifique las indicaciones de la vacuna"
                                    name="indicaciones"><?php if(isset($_POST['indicaciones'])){ echo $_POST['indicaciones']; }else{ echo $productos['indicaciones']; } ?></textarea>
                            </div>
                            <?php echo form_error('indicaciones', '<p class="text-danger">', '</p>'); ?>
                        </div>

                        <div class="col-md-6">
                            <label>Contraindicaciones</label> <label style="color: red;"> * </label>
                            <textarea class="form-control" rows="3"
                                placeholder="Especifique las contraindicaciones de la vacuna"
                                name="contraIndicaciones"><?php if(isset($_POST['contraIndicaciones'])){ echo $_POST['contraIndicaciones']; }else{ echo $productos['contraindicaciones']; } ?></textarea>
                            <?php echo form_error('contraIndicaciones', '<p class="text-danger">', '</p>'); ?>
                        </div>




                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Edad</label> <label style="color: red;"> * </label>
                                <input class="form-control" rows="3" placeholder="Ingrese el tiempo recomendado"
                                    name="edad"
                                    value="<?php if(isset($_POST['edad'])){ echo $_POST['edad']; }else{ echo $productos['edadAplicacion']; } ?>"></input>
                            </div>
                            <?php echo form_error('edad', '<p class="text-danger">', '</p>'); ?>
                        </div>


                        <div class="col-md-6">
                            <label>Precio de venta</label> <label style="color: red;"> * </label>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese el precio de la vacuna"
                                    name="precioVenta"
                                    value="<?php if(isset($_POST['precioVenta'])){ echo $_POST['precioVenta']; }else{ echo $productos['precio']; } ?>">
                                <?php echo form_error('precioVenta', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <input id="Valor" type="text" class="form-control "
                            value="<?php echo $this->session->set_userdata('valorSesion', 'perra');?>" hidden>


                    </div>
                    <!--Fin del card body-->

                    <!--Inicio del footer del contenido-->
                    <br>
                    <div class="text-center card-footer">



                        <button style="padding: 10px 5px; margin: 10px 5px;   margin: 5 auto;" type="submit"
                            id="botonActualizarProducto" class="btn btn-success col-2">Actualizar</button>
                        <a style="padding: 10px 5px; margin: 10px 5px;  margin: 5 auto; "
                            href="<?php echo base_url(); ?>producto" id="botonAtras"
                            class="btn btn-success col-2">Atrás</a>


                    </div>
                    <!--Fin del footer del contenido-->



            </form>
            <!--Fin del form-->


        </div> <!-- Fin Contenido Total -->


    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->